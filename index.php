<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  require_once 'includes/config_session.php';
  require_once 'includes/signup_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup & login system</title>
</head>
<body>
  <h1>login</h1>
  <form action="includes/login.php" method="POST">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <input type="text" name="email" placeholder="email"><br>
    <button type="submit">login</button>
  </form>

  <h1>signup</h1>
  <form action="includes/signup.php" method="POST">
    <?php
      signupHTMLInputs();
    ?>
    <button type="submit">signup</button>
  </form>

  <?php
    checkSignupErrors();
  ?>
</body>
</html>