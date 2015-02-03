<?php session_start();

/*$dbhost = "mysql1005.ixwebhosting.com";
$dbname = "C325018_retwtcl";
$dbuser = "C325018_rtcleaner";
$dbpass = "my_password";

$con = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);*/

$con=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

/*if($_POST['action'] == "login") {

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
}*/

if($_POST['action'] == "login") {


    global $con;


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
  //  $Status="True";
    $responseMessage = '';

    if (!empty($_POST['Username'])) {
        $responseMessage = "Enter Username";
    }
    if (!empty($_POST['Password'])) {
        $responseMessage = "Enter Password";
    }

    $sql=sprintf("SELECT *FROM AdminTable WHERE Username = '%s' and Password='%s'", $Username,$Password);

    $rsLogin=$con->query($sql);
    $numRows = mysqli_num_rows($rsLogin);
    if($numRows>0) {
        $rsLoginRow=mysqli_fetch_array($rsLogin);
      /*  $Username= $rsLoginRow['Username'];
        echo $Username."\n";
        $Password=$rsLoginRow['Password'];
        echo $Password."\n";*/

        $responseMessage="Success";
       // header('location:../connect.php');

    } else {
        $responseMessage= "login not found";
    }
    echo json_encode($responseMessage);
}

if($_POST['action'] == "getUserId") {

    $responseMessage = '';
    global $con;

    $result =sprintf("select * from RTCleaner");

   // $result->execute();
    $data = $con->query($result);
    mysqli_fetch_all($data,MYSQLI_ASSOC);

// Free result set
    mysqli_free_result($data);
    echo json_encode($data);
}