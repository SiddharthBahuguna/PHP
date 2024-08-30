<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Check if the user is already logged in
if (isset($_COOKIE['user'])) {
  header("Location: welcome.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Dummy credentials
  $username = 'user';
  $password = 'password';

  // Get user input from POST
  $input_username = isset($_POST['username']) ? $_POST['username'] : '';
  $input_password = isset($_POST['password']) ? $_POST['password'] : '';

  // Validate user input
  if ($input_username === $username && $input_password === $password) {
    // Set cookie to expire in 1 hour
    setcookie('user', $username, time() + 3600, "/");
    header("Location: welcome.php");
    exit();
  } else {
    $error_message = "Invalid Username or Password!";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <h2>Login</h2>
  <?php if (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
  } ?>
  <form method="post" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>
</body>

</html>
