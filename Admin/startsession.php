<?php session_start(); ?>
<?php
if(!empty($_SESSION['login_user']))
{
    $loggedInUser =$_SESSION['login_user'];
}else{
    header('Location: logout.php');
}