<?php
	session_start();
	$mail=$_SESSION['email'];
	$conn = mysqli_connect("localhost", "jc", "1549100", "hr");
	$sql = "SELECT * FROM message where to_msg='$mail';";
	$res=mysqli_query($conn,$sql);
	$data=array();
	while ($row = mysqli_fetch_assoc($res))
	{
	    array_push($data, $row);
	}
	echo json_encode($data);
	
?>