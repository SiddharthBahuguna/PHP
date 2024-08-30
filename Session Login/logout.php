<?php
// Expire the cookie to logout
setcookie('loggedin', '', time() - 3600, "/"); // Set expiration time to past
header("Location: login.php");
exit();
