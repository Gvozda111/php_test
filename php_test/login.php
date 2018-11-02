<?php require_once './user.class.php'; ?>
<?php require_once './helper.class.php'; ?>
<?php

if(User::isloggedIn()){
  header("Location: ./index.php");
}

if(isset($_POST['login_button'])){
  $u = new User();
  $u->email= $_POST['email'];
  $u->password= $_POST['password'];
  if($u->login()){
    Helper::addMessage("Succsessfully login");

    header("Location: ./index.php");
    die();

  }
 
  
 
}





?>







<?php include './header.layout.php' ?>

<div class="log">
<form action="./login.php" method="post">

<input type="email" name="email" placeholder="Enter here your e-mail" class="login_input">
<input type="password" name="password" placeholder="Enter here your password" class="login_input">
<button name="login_button" class="login_button">Click here to login</button>
</form>
</div>






<?php include './footer.layout.php' ?>