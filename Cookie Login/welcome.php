<?php
session_start();

// Check if the user is not logged in
if (!isset($_COOKIE['user'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Welcome</title>
</head>

<body>
  <h2>Welcome, <?php echo htmlspecialchars($_COOKIE['user']); ?>!</h2>
  <p><a href="logout.php">Logout</a></p>
</body>

</html>