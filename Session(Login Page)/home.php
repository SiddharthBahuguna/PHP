<?php
session_start();

if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
  header("Location: index.php");
  exit();
}

if (isset($_POST["logout"])) {
  session_unset();
  session_destroy();
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
