<?php
session_start();
$mail=$_SESSION['email'];
$conn = new mysqli("localhost", "jc", "1549100", "hr");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM message where to_msg='$mail';";
$result = $conn->query($sql);
echo $result->num_rows;
$conn->close();
?>