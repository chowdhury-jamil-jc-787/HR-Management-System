<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $name = $_POST['fullname'];
    $email = $_POST['email'];
	$password = md5($_POST['password']);
	$mobile=$_POST['mobile_no'];
	$salary=$_POST['salary'];
	$address=$_POST['address'];
    $gender=$_POST['gender'];
    $sql = "INSERT INTO user(name, email, password,mobile,address, gender,salary) VALUE('$name', '$email','$password', '$mobile','$address','$gender','$salary')";
    mysqli_query($db, $sql);
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    header("location: hr.php");
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<link rel="icon" href="image/y.ico">
	<link rel="stylesheet" href="stylesignup.css">
<body>


	<div>
		<img src="image/io.png" alt="hr"width="600" height="700" align="left">
		
	</div>

<form method="post" action="addUser.php">
	
	<div class="text">
		<h1><u>User Sign Up</u></h1><br><br><br>
		<label>Name: </label>
			<input type="text" placeholder="Enter your full name" name="fullname" required ><br>
			<label>Email:</label>
			<input type="text" placeholder="jc@yahoo.com" name="email" required><br>
			<label>password:</label>
			<input type="Password" placeholder="  Enter Password" name="password" required><br>
			<label>password:</label>
			<input type="Password" placeholder="  Retype your Password" required><br>
			<label>Mobile no: </label>
			<input type="text" placeholder="Enter your mobile no" name="mobile_no" required ><br>
			<label>Salary: </label>
			<input type="text" placeholder="Enter the amount of salary" name="salary" required ><br>
			<label>Address: </label>
			<textarea placeholder="Address" name="address" > </textarea><br>
			
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