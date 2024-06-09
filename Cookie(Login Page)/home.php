<?php
if (!isset($_COOKIE["username"]) || !isset($_COOKIE["auth_token"])) {
  header("Location: index.php");
  exit();
}

if (isset($_POST["logout"])) {
  // Delete cookies
  setcookie("username", "", time() - 3600, "/");
  setcookie("auth_token", "", time() - 3600, "/");

  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <p>This is the home page</p>
  <form action="home.php" method="post">
    <input type="submit" name="logout" value="logout">
  </form>
</body>

</html>
