<?php

/* Start session and load library. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config-sample.php');

/* Build TwitterOAuth object with client credentials. */

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
 
// print_r($connection);
/* Get temporary credentials. */
$request_token = $connection->getRequestToken(OAUTH_CALLBACK);
 //print_r($request_token);
/* Save temporary credentials to session. */
$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
$_SESSION['text']=$_GET['text'];
if(!empty($_SESSION['image']))
   {
   $_SESSION['image']=$_SESSION['image'];
   }

if(!empty($_GET['image']))
   {
   $_SESSION['image']=$_GET['image'];
   }
   
/* If last connection failed don't display authorization link. */
switch ($connection->http_code) {
  case 200:
    /* Build authorize URL and redirect user to Twitter. */
    $url = $connection->getAuthorizeURL($token);
    header('Location: ' . $url); 
    break;
  default:
    /* Show notification if something went wrong. */
    echo 'Could not connect to Twitter. Refresh the page or try again later.';
}
