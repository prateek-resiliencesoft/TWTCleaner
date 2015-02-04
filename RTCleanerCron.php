<?php

$conn=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

//($chk=mysqli_query($connect,"SELECT Status from `DeleteRT` where Status='False'")

$RetweetStatus = "True";
$Crvalue = "Unused";


$check=mysqli_query($conn,"SELECT UserName from `DeleteRT` where Status='true' and CronStatus ='Unused' limit 1 ");

if($check->num_rows>0) {

    $result=mysqli_query($conn,"SELECT UserName from `DeleteRT` where UserName='$UserName'");

    mysqli_fetch_all($result,MYSQLI_ASSOC);

    mysqli_free_result($result);
    echo $result;

    //mysqli_fetch_all($result,MYSQLI_ASSOC);


}










?>
