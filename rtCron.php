<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 02/05/2015
 * Time: 6:42 PM
 */

require_once('twitteroauth/twitteroauth.php');
require_once('config-sample.php');
require_once('simple_html_dom.php');

$tweetId =0;
$check=mysqli_query($conn,"SELECT * from TwitterRT where Status='True' limit 1 ");
if (mysqli_num_rows($check) > 0) {
    while($row = mysqli_fetch_assoc($check)) {
        // echo "id: " . $row["UserName"]. "<br>";
        //echo "CursorValue: " . $row["CursorValue"]. "<br>";
        $tweetId=$row["TweetId"];
        echo $tweetId;
    }
//echo $check->num_rows;
}