<?php session_start();
// database connection
$dbhost = "mysql1005.ixwebhosting.com";
$dbname	= "C325018_rtcleaner";
$dbuser	= "C325018_retwtcl";
$dbpass	= "my_password";

$con = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

if($_POST['action'] == "getUserId") {

    $responseMessage = '';
    global $con;

    $result = $con->prepare("select * from RTCleaner");

    $result->execute();
    $data = $result->fetchAll();
    echo json_encode($data);
}



if($_POST['action'] == "DeleteSelectedUser") {

    $responseMessage = '';
    global $con;
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        //$result = $con->prepare("Delete from tblAlbum where `albumId`=:albumId");
        $result = $con->prepare("DELETE FROM RTCleaner WHERE id = id");


        $result->bindParam(':id', $id);
        $result->execute();
        $rows = $result->rowCount();//  fetch(PDO::FETCH_NUM);

        if ($rows == 1) {
            $responseMessage = "Success";
        } else {
            $responseMessage = "Failed";
        }
    }
    echo json_encode($responseMessage);
}