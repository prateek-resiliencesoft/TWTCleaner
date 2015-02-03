<?php session_start();

$dbhost = "mysql1005.ixwebhosting.com";
$dbname = "C325018_retwtcl";
$dbuser = "C325018_rtcleaner";
$dbpass = "my_password";

$con = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

//$con=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

if($_POST['action'] == "login") {

    $userid = $_POST['userid'];
    $screenname = $_POST['screenname'];
    $responseMessage = '';

    if(!empty($_POST['userid']))
    {
        $responseMessage = "Enter Username";
    }
    if(!empty($_POST['screenname']))
    {
        $responseMessage = "Enter Password";
    }

    global $con;

    $result = $con->prepare("select * from RTCleaner where userid=:userid AND screenname=:screenname");
    //or Email=:username)");

    $result->bindParam(':userid', $userid);
    $result->bindParam(':screenname', $screenname);

    $result->execute();
    $rows = $result->fetchAll();//  fetch(PDO::FETCH_NUM);

    if ($rows == 1) {
        $_SESSION['login_user']= $userid; // Initializing Session
        //header("location:../ user/useralbums.php".$username); // Redirecting To Other Page
        $responseMessage = "Success";
    } else {
        $responseMessage = "Username or Password is invalid";
    }

    echo json_encode($responseMessage);
}