<?php
/**
 * @file
 * User has uccessfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config-sample.php');
require_once('simple_html_dom.php');

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];
//print_r($access_token);
if (empty($_SESSION['access_token']))
{

    $_SESSION['ScreenName']=$access_token['screen_name'];
}
else
{

    //echo "12";
    if($_SESSION['ScreenName']!=$access_token['screen_name'])


    {
        //echo "123";
        $_SESSION['ScreenName']=$access_token['screen_name'];
       // echo $_SESSION['ScreenName'];
    }}

$access_token;
/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

/* If method is set change API call made. Test is called by default. */
$content = $connection->get('account/verify_credentials');
set_time_limit ( 130 );
/* Some example calls */
//$tweet_msg= "I just added my new ".$_SESSION['text']." via Tweetheaders.com! You can too at Tweetheaders.com!";
$tweet_msg= "I have just accepted your application ".$access_token['screen_name'];
//echo $_SESSION['text'];
//$connection->post('statuses/update', array('status' =>$tweet_msg ));
//$obj=$connection->get('statuses/retweets_of_me', array('count' =>50 ));
//var_dump(json_decode($obj));

$obj=$connection->get('statuses/user_timeline', array('count' =>100 ));
print_r($obj);
//var_dump(json_decode($obj));
//https://api.twitter.com/1.1/statuses/destroy/240854986559455234.json

//echo "============================";
//For Server
//$uname=json_encode($obj);
//$links = json_decode($uname, TRUE);

//For localhost
$links = json_decode($obj, TRUE);
$id =0;
foreach($links as $key=>$val){
    //echo "new Id :".$val['retweeted'].'<br/>';

    if($val['retweeted']==1)
    {
      // echo "new Id :".$val['id_str'].'<br/>';
       // $obj=$connection->post('statuses/destroy/'.$val['id_str'], array());
       // echo "Deleted Id :".$val['id_str'].'<br/>';
        $id++;
    }
    /*else {
         echo "Failed ".$val['retweeted'];
        }*/
}
echo "Total Retweets Deleted ". $id. " keep deleting. ";

$connect = mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");
$IDS = $id;
$UserName = $access_token['screen_name'];
$chk=mysqli_query($connect,"SELECT UserName from `DeleteRT` where UserName='$UserName' ");
if($chk->num_rows==0) {


    $RetweetStatus = "True";
    $Crvalue = "Unused";
    $mydate = date('Y-m-d');


    mysqli_query($connect, "INSERT INTO DeleteRT (UserName,DeletedRT,Status,CronStatus,DateTime)
VALUES ('" . $UserName . "',$IDS,'" . $RetweetStatus . "','" . $Crvalue . "',$mydate");


}
else if($chk=mysqli_query($connect,"SELECT Status from `DeleteRT` where Status='False'")){

    mysqli_query($connect, "UPDATE DeleteRT set Status=".True." where UserName='$UserName'");

}



//print_r($obj);

//https://api.twitter.com/1.1/statuses/retweets_of_me.json



$conn = mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

$tw_id =$access_token['user_id'];
$tw_screen_name=$access_token['screen_name'];
$token=$access_token['oauth_token'];
$token_sec=$access_token['oauth_token_secret'];
$mydate=date("Y-m-d");


$check=mysqli_query($conn,"SELECT userid from `RTCleaner` where userid='$tw_id' ");
if($check->num_rows>0) {
    mysqli_query($conn, "UPDATE RTCleaner set accesstoken='$token',accesssecret='$token_sec',datetime='$mydate' where userid='$tw_id'");
}

$tw_screen_name=$access_token['screen_name'];
$token=$access_token['oauth_token'];
$token_sec=$access_token['oauth_token_secret'];
$mydate=date("Y-m-d");
//echo  $tw_id.$tw_screen_name.$token.$token_sec.$mydate;
///////////////////////////////////////////
$con=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");
//Check connection
if (mysqli_connect_errno())
{
    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    mysqli_query($con,"INSERT INTO RTCleaner (userid,screenname,accesstoken,accesssecret,datetime)
VALUES ($tw_id,'".$tw_screen_name."','".$token."','".$token_sec."',$mydate)");
}

die(mysqli_error($con));
?>