<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if username and password are correct (you should replace this with your own authentication logic)
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Dummy check
  if ($username === 'user' && $password === 'password') {
    // Set a cookie to remember the user
    setcookie('loggedin', true, time() + (86400 * 30), "/"); // 86400 = 1 day

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
  } else {
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h2>Login</h2>
  <?php if (isset($error)) echo "<p>$error</p>"; ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
</body>

</html>
