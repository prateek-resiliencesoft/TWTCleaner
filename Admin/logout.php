<?php
/**
 * Created by PhpStorm.
 * User: DIGICOM
 * Date: 02/06/2015
 * Time: 5:52 PM
 */
session_start();
unset($_SESSION["login_user"]);
 header('Location:login.php');
