<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    

 

    $sql1="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $verify1 = mysqli_query($db, $sql1);

 if (mysqli_num_rows($verify1)== 1) {
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






<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	    <link rel="icon" href="image/y.ico">
	    <link rel="stylesheet" href="login.css">
	
</head>
<body>



	<form method="post" action="login.php">


	<div class="size">


		<label>Email:</label>
		
		<input type="text" placeholder="Enter your email address" name="email" required ><br><br>
		<label>Password:</label>
		
		<input type="Password" placeholder="Enter Password" name="password" required><br><br>

	</div>

	<div class="Gendersub"><input type="submit" name="submit" value="Login" ></td></div>

</form>

</body>
</html>