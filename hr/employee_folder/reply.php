<?php

	session_start();
	$from=$_SESSION['email'];
	if(isset($_POST['to']))
	{
		$to=$_POST['to'];
		$mesg=$_POST['msg'];
	}
	$conn = mysqli_connect("localhost", "jc", "1549100", "hr");
	$sql="INSERT INTO `message`(`to_msg`, `from_msg`, `msg`) VALUES ('$to','$from','$mesg');";
	$res=mysqli_query($conn,$sql);



?>