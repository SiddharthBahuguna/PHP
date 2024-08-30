<?php
session_start();

// Expire the cookie
setcookie('user', '', time() - 3600, "/");

// Redirect to login page
header("Location: login.php");
exit();
