<!DOCTYPE html>
<html>
<head>

	<title>HR checking</title>
	<link rel="icon" href="image/y.ico">
	<link rel="stylesheet" href="checking.css">

	   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>     
    <style>
        .myClass{
            width:400px;
            height:200px;
            background-color: #DF0011;
        }
    </style>

</head>
<body>

	<div class="section">

		<h1><u>Unique ID</u></h1>
		

	</div>

	<form method="post" action="checking.php">
	<div class="check">

		<b>ID:</b>
		<input type="text" placeholder="Enter your admin given code" name="code" required ><br>


	</div>
        
        


        
	<div class="Gendersub"><input type="submit"  name="submit" value="Login" onclick="" ></td></div>
</form>


<script type="text/javascript">
      function avg(){
        swal({
            title: "Error",
            text: "Please Enter Valid Code", 
            className: "myClass",
        });}
    </script>






</body>
</html>




<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){

	echo '<script type="text/javascript">avg();</script>';
    session_start();
    $icode = $_POST['code'];
    $sql="SELECT * FROM id WHERE uniqueid='$icode'";
    $verify = mysqli_query($db, $sql);

    if(mysqli_num_rows($verify)== 1){
        $_SESSION['code']=$icode;
        header("location: signUp.php");
      
    }else {
      
         echo '<script type="text/javascript">avg();</script>';
    }
}

?>
