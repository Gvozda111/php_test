<?php require './user.class.php'; ?>
<?php require './helper.class.php'; ?>

<?php
if(isset($_POST['register_button'])){
      $u= new User();
      $u->name= $_POST['name'];
      $u->email= $_POST['email'];
      $u->password= $_POST['password'];
      $u->password_repeat= $_POST['password_repeat'];
      if($u->insert()){
        header("Location: ./login.php");
        Helper::addMessage("Welcome, $u->name!");
      } 
  
}

?>









<?php include './header.layout.php' ?>


<div class="reg">
<form action="./register.php" method="post">
    <input type="text" name="name" placeholder="Enter your name here" class="register_input">
    <input type="email" name="email" placeholder="Enter your E-mail" class="register_input">
    <input type="password" name="password"placeholder="Type your password" class="register_input">
    <input type="password" name="password_repeat" placeholder="Retype your password" class="register_input">
    <button name="register_button" class="register_button">Register now</button>
</form>
</div>













<?php include './footer.layout.php' ?>