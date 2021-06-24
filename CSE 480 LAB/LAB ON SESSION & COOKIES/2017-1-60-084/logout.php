<?php

    session_start();
    session_destroy();
    if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
    	$email = $_COOKIE['email'];
    	$pass = $_COOKIE['password'];
    	setcookie('email', $email, time()-2);
    	setcookie('password', $password, time()-2);
  	}
    header("location: start.php");

 ?>
