<?php
if (isset($_COOKIE["username"]) && isset($_COOKIE["auth_token"])) {
  // If cookies are set, assume user is already logged in
  header("Location: home.php");
  exit();
}

if (isset($_POST["login"])) {
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    // Set cookies for username and auth_token
    $username = $_POST["username"];
    // Generate a random authentication token
    $auth_token = bin2hex(random_bytes(16)); // Example: generate a 32-character hexadecimal token
    // Set cookies with expiration time
    setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = 1 day, adjust as needed
    setcookie("auth_token", $auth_token, time() + (86400 * 30), "/");

    // Redirect to home page
    header("Location: home.php");
    exit();
  } else {
    echo "Missing username/password <br>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="index.php" method="post">
    username: <br>
    <input type="text" name="username"><br>
    password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">
  </form>
</body>

</html>