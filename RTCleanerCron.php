<?php

require_once('twitteroauth/twitteroauth.php');
require_once('config-sample.php');
require_once('simple_html_dom.php');

//MySQLi Procedural
$conn=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

//($chk=mysqli_query($connect,"SELECT Status from `DeleteRT` where Status='False'")

$RetweetStatus = "True";
$Crvalue = "Unused";

$maxid;
$check=mysqli_query($conn,"SELECT * from `DeleteRT` where Status='True' and CronStatus ='Unused' limit 1 ");
if (mysqli_num_rows($check) > 0) {
while($row = mysqli_fetch_assoc($check)) {
       // echo "id: " . $row["UserName"]. "<br>";
		//echo "CursorValue: " . $row["CursorValue"]. "<br>";
		$UserName=$row["UserName"];
		$maxid=$row["CursorValue"];
		echo $UserName.":".$maxid;
    }
//echo $check->num_rows;
}



//echo $UserName;
$access_token_oauth_token;
$access_token_oauth_token_secret;
if($check->num_rows>0) {


    $result =mysqli_query($conn,"SELECT * from `RTCleaner` where screenname='$UserName'");

   

   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - token: " . $row["accesstoken"]. " - Screct:" . $row["accesssecret"]. "<br>";
		$access_token_oauth_token=$row["accesstoken"];
		$access_token_oauth_token_secret=$row["accesssecret"];
    }
} else {
    echo "0 results";
}
}
else{
echo "else";
}
//echo $access_token_oauth_token.":".$access_token_oauth_token;
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token_oauth_token, $access_token_oauth_token_secret);
$content = $connection->get('account/verify_credentials');

$obj=$connection->get('statuses/user_timeline', array('count' =>100,'max_id'=>$maxid));
$uname=json_encode($obj);
$links = json_decode($uname, TRUE);
print_r($obj);
$id=0;
foreach($links as $key=>$val){
    //echo "new Id :".$val['retweeted'].'<br/>';

    if($val['retweeted']==1)
    {
      
       // $obj=$connection->post('statuses/destroy/'.$val['id_str'], array());
       
        $id++;
    }
	$maxid=$val['id_str'];
    
}
echo $maxid.":".$id;

mysqli_close($conn);
?>








