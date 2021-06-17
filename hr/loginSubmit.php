<?php 
if(!isset($_SESSION)) 
{ 
   session_start(); 
} 
 ?>

<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * FROM signUp WHERE email='$email' AND password='$password'";
    $verify = mysqli_query($db, $sql);

 

    $sql1="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $verify1 = mysqli_query($db, $sql1);

 

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['email']=$email;
        header("location: hr.php");
    }
    elseif (mysqli_num_rows($verify1)== 1) {
    $row = mysqli_fetch_assoc($verify1);
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
        $_SESSION['gender']=$row['gender'];
        $_SESSION['mobile']=$row['mobile'];
        $_SESSION['address']=$row['address'];
        header("location: employee_folder/home.php");
}

 
    else {
        echo "incorrect email/password combination";
    }
}
?>
