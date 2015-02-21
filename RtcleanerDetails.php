<?php
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config-sample.php');
require_once('simple_html_dom.php');
$conn=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

$deleted_rt;
$_SESSION["id"]=$_SESSION["id"]!=null?$_SESSION["id"]:4;

$check=mysqli_query($conn,"select * from DeleteRT where Status=false and id>'".$_SESSION["id"]."' limit 3 ");
if (mysqli_num_rows($check) > 0) {
    while($row = mysqli_fetch_assoc($check)) {

        $UserName=$row["UserName"];
        $deleted_rt=$row["DeletedRT"];
        $_SESSION["id"]=$row["id"];
        if($UserName!=null) {


            //echo $UserName."<br>";
            //echo $UserName;
            //echo "SELECT * from RTCleaner where screenname = 'SocioPro'";
            $result =mysqli_query($conn,"SELECT * from RTCleaner where screenname='".$UserName."'");



            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                // echo $result;
                while($row = mysqli_fetch_assoc($result)) {

                    $access_token_oauth_token=$row["accesstoken"];
                    $access_token_oauth_token_secret=$row["accesssecret"];

                    if($access_token_oauth_token!=null && $access_token_oauth_token_secret!=null) {



                        //get User Tweet to find RT
                        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token_oauth_token, $access_token_oauth_token_secret);
                        $content = $connection->get('account/verify_credentials');

                        $obj=$connection->get('statuses/user_timeline', array('count' =>100));

                        $uname=json_encode($obj);
                        $links = json_decode($uname, TRUE);
//For localhost
//$links = json_decode($obj, TRUE);
                        //Delete RT
                        $id=0;
                        foreach($links as $key=>$val){
                            //echo "new Id :".$val['retweeted'].'<br/>';

                            if($val['retweeted']==1)
                            {

                                $obj=$connection->post('statuses/destroy/'.$val['id_str'], array());

                                $id++;
                            }


                        }
                        $deleted_rt=$deleted_rt+$id;
                       echo "UPDATE DeleteRT set DeletedRT ='".$deleted_rt."' where UserName='$UserName'";
                        mysqli_query($conn, "UPDATE DeleteRT set DeletedRT ='".$deleted_rt."' where UserName='$UserName'");
                        sleep(2);
                    }



                    }
                }
            } else {
                echo "0 results";
                // echo $UserName;
            }
        }



}
else
{
    $_SESSION['id']=4;
}









echo  $_SESSION["id"];




/*if($_POST['action'] == "getUserDetail") {

    $responseMessage = '';
    global $con;

    $result = $con->prepare("select * from DeleteRT where Status=false");

    $result->execute();
    $data = $result->fetchAll();
    echo json_encode($data);
}*/