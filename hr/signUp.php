<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $gender=$_POST['gender'];
    $sql = "INSERT INTO signUp(name, email, gender, password) VALUE('$name', '$email', '$gender', '$password')";
    mysqli_query($db, $sql);
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    header("location: index.php");
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<link rel="icon" href="image/y.ico">
	<link rel="stylesheet" href="stylesignup.css">
<body>


	<div>
		<img src="image/hr.png" alt="hr"width="600" height="700" align="left">
		
	</div>

<form method="post" action="signUp.php">
	
	<div class="text">
		<h1><u>Sign Up</u></h1><br><br><br>
		<label>Name: </label>
			<input type="text" placeholder="Enter your full name" name="fullname" required ><br>
			<label>Email:</label>
			<input type="text" placeholder="jc@yahoo.com" name="email" required><br>
			<label>password:</label>
			<input type="Password" placeholder="  Enter Password" name="password" required><br>
			<label>password:</label>
			<input type="Password" placeholder="  Retype your Password" required><br>
			<label>Gender:</label><br><br>

				
		</div>
		<div class="Gender">
			<input type="radio" id="male" name="gender" value="male"> Male <br>
			<input type="radio" id="female" name="gender" value="female"> Female <br>
			<input type="radio" id="others" name="gender" value="others"> Others <br>

			<div class="Gendersub">

			 <input type="submit" name="submit" value="Sign Up" onClick="alert('We are truly grateful to you for choosing us')"></td>
			</div>
		</div>




</form>


</body>
</html>