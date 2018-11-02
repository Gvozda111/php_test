<?php require_once './helper.class.php' ; ?>

<?php Helper::sessionStart(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP test</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

  <nav>
  <ul>
    <li><a href="./index.php" class="home">Home</a></li>
    <li><a href="./login.php" class="login">Login</a></li>
    <li><a href="./logout.php" class="login">Logout</a></li>
    <li><a href="./register.php" class="register">Register</a></li>

  </ul>
  </nav>