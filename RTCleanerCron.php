<?php

//MySQLi Procedural
$conn=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

//($chk=mysqli_query($connect,"SELECT Status from `DeleteRT` where Status='False'")

$RetweetStatus = "True";
$Crvalue = "Unused";


$check=mysqli_query($conn,"SELECT UserName from `DeleteRT` where Status='1' and CronStatus ='Unused' limit 1 ");
if (mysqli_num_rows($check) > 0) {
while($row = mysqli_fetch_assoc($check)) {
       // echo "id: " . $row["UserName"]. "<br>";
		$UserName=$row["UserName"];
		
    }
//echo $check->num_rows;
}


//echo $UserName;

if($check->num_rows>0) {


    $result =mysqli_query($conn,"SELECT * from `RTCleaner` where screenname='$UserName'");

   

   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - token: " . $row["accesstoken"]. " - Screct:" . $row["accesssecret"]. "<br>";
    }
} else {
    echo "0 results";
}
}
else{
echo "else";
}


mysqli_close($conn);
?>








