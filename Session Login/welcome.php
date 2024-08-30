<?php
// Check if the user is logged in
if (!isset($_COOKIE['loggedin'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <?php
  // Retrieve user preferences if set
  $bgImage = isset($_COOKIE['bgImage']) ? $_COOKIE['bgImage'] : '';
  $fontColor = isset($_COOKIE['fontColor']) ? $_COOKIE['fontColor'] : '';
  $fontFamily = isset($_COOKIE['fontFamily']) ? $_COOKIE['fontFamily'] : '';

  // Apply user preferences
  echo "<style>
            body {
                background-image: url('$bgImage');
                color: $fontColor;
                font-family: $fontFamily, sans-serif;
            }
          </style>";
  ?>
</head>

<body>
  <h2>Welcome</h2>
  <p>This is the welcome page.</p>
  <p><a href="logout.php">Logout</a></p>
</body>

</html>