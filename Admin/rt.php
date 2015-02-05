<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 02/05/2015
 * Time: 6:20 PM
 */

echo "Hello";

require_once('../twitteroauth/twitteroauth.php');
require_once('../config-sample.php');
require_once('../simple_html_dom.php');

//MySQLi Procedural
$conn=mysqli_connect("mysql1005.ixwebhosting.com","C325018_retwtcl","my_password","C325018_rtcleaner");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    mysqli_query($con,"INSERT INTO TwitterRT (TweetId,Status,PostedUserId) VALUES ('537733742165377024','true','0')");
    echo "Record Added";

}