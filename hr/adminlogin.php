<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * FROM signUp WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);


 

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: hr.php");
    }
  

 
    else {
        echo "incorrect email/password combination";
    }
}
?>




















<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="icon" href="image/z.ico">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>

    <!--form area start-->
    <div class="form">
      <!--login form start-->
      <form method="post" action="adminlogin.php">
        <h2>Login</h2>
        <div class="icons">
          <a href="#"  ><i class="far fa-address-book"></i></a>
          <a href="index.php"><i class="fas fa-home"></i></a>
          <a href="#"><i class="fas fa-question-circle"></i></a>
        </div>



        <input type="text" placeholder="Enter Your Mail" name="email" required>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" name="submit">Login</button>
        <p class="options">Not Registered? <a href="checking.php">Create an Account</a></p>
      </form>
      <!--login form end-->
    </div>
    <!--form area end-->

  </body>
</html>