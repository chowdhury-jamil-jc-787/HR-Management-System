<!DOCTYPE html>
<html>
<head>
	<title>Welcome to HR</title>
	<link rel="icon" href="image/y.ico">
	<link rel="stylesheet" href="hr.css">
</head>
<body>

	<div class="header">

		<img src="image/h.png" alt="hr Logo" width="150" height="80" align="left" >
		<b>Hr <br> PayRoll <br> System</b><br>


	 <div class="user">

	 	<img src="image/io.png" alt="hr Logo" width="35" height="35" align="left" >


	 	<div class="usera">



	 	<?php
			session_start();
			if(isset($_SESSION['email'])) {
    		echo "Hello ".$_SESSION['email']." | "."<a href='index.php'>Logout</a>";
			}else{
    		header("location: login.php");
			}
		?>
	 	</div>

</div>

	 </div>

	 <div class="last">

	 	<button class="button2" onclick="window.location.href='index.php'"><b>Home</b></button>
	 	<button class="button2" onclick="window.location.href='profile.php'"><b>Profile</b></button>
	 	<button class="button2" onclick="pro1()"><b>Change Password</b></button>
	 	<button class="button2" onclick="window.location.href='addUser.php'"><b>Add user</b></button>
		 <button class="button2" onclick="pro()"><b>User lists</b></button>
		 <button class="button2" onclick="pro3()"><b>Works</b></button>
		 <button class="button2" onclick="window.location.href='fake.php'"><b>Inbox</b></button>
		 <button class="button2" onclick="pro2()"><b>Salary</b></button>
	 	<button class="button2" onclick="window.location.href='increment.php'"><b>Increment</b></button>
		 <button class="button2" onclick="window.location.href='employees_details.php'"><b>Bonus</b></button>


	 </div>


	 <div class="info">

	 <div class="panel">
		 <img src="image/hrpic.jpg" alt="hr Logo" width="100%" height="100%">
	 </div>

	 	<!-- <center>
        <h1>Choose option</h1>
        <form method="post" action="bankselect.php">
        <select>
        <option> Select Option</option>
        <option> Employee info</option>
        <option> Request</option>
        <option>salary increment</option>
        <option> Bonus salary</option>
        <option> office info</option> -->
        <!-- <br>
        <br>
        <br> -->

        <!-- </center>

        </select><center> -->


	 </div>


<!-- user list -->

	 <div class="details" id="profile">
	 	<table align="center" border="2px" style="width: 300px; line-height: 30px;">
	 		<tr>
	 			<th>name</th>
	 			<th>email</th>
	 			<th>gender</th>
				<th>mobile</th>
	 			<th>address</th>

	 		</tr>


	<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");

    $sql = "select name,email,gender,mobile,address from user";

    $result=$db->query($sql);

    if($result->num_rows>0){
    	while($row=$result->fetch_assoc()){
    		echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["mobile"]."</td><td>".$row["address"]."</td></tr>";

    	}
    	echo "</table>";

    }

   else{
   	echo "0 result";
   }

   $db->close();

?>

	 	</table>

	 </div>



 <!-- change password -->

 <form method="post" action="#">

<div class="details" id="profile1">


	<div class="pro1">
	<label>Email: </label>
	<input type="text" placeholder="Enter your email address" name="email" required ><br><br>
	<label>New Password:</label>
	<input type="Password" placeholder="Enter New Password" name="password" required><br><br>

	<div class="Gendersub"><input type="submit" name="submit" value="submit" ></div>
	</div>


</div>
</form>

<?php

$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $sql="UPDATE signUp SET password='$password' WHERE email='$email'";
    $verify = mysqli_query($db, $sql);

    if($verify){
        header("location: login.php");
    }else {
        echo "Failed to change password";
    }
}
?>


<!-- salary -->


<div class="details" id="profile2">

	 <?php

    $a=0;
$db = mysqli_connect("localhost", "jc", "1549100", "hr");

    $sql = "select name,amount from totalsalary";

    $result=$db->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

            echo "<b>Total Amount: </b>";

            echo $row["amount"]." taka <br>";


        }


    }

   else{
    echo "0 result";
   }



   $db->close();

?>


<?php

$a=2;
$b=0;
$d=0;

$db = mysqli_connect("localhost", "jc", "1549100", "hr");

$sql = "select * from employee";

  $result=$db->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

        	echo "Per hour/amount= ".$a." taka<br>";




            $d=$row["totalhours"];
            $b=$row["salary"];
            $c=$d+$b;


        }


    }

   else{
    echo "0 result";
   }



   $db->close();


?>
		<form method="post" action="#">
			<label>Email:</label>

		<input type="text" placeholder="Enter your email address" name="email" required><br><br>
		<label>Hour:</label>
		<input type="text" placeholder="<?php echo $a; ?>" name="Hour" required><br><br>
		<label>Amount:</label>
		<input type="text" placeholder="<?php echo $b; ?>" name="salary" required><br><br>
		<label>Salary:</label>
		<input type="text" placeholder="<?php echo $c; ?>" name="newsalary" required><br><br><br>

		<div class="Gendersub"><input type="submit" name="Update" value="Update" ></td></div>
	</form>

<?php
$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['Update'])){

    $email = $_POST['email'];
    $totalhours=$_POST['Hour'];
    $salary=$_POST['salary'];
    $newsalary=$_POST['newsalary'];

    $sql="UPDATE employee SET totalhours='$totalhours',salary='$salary',newsalary='$newsalary'  WHERE email='$email'";
    $query_run = mysqli_query($db, $sql);

    if($query_run){

    	echo '<script type= "text/javascript">alert("data updated")</script>';
    }
    else{
    	echo '<script type= "text/javascript">alert("data not updated")</script>';
    }


}
?>


	</div>



</div>


<!-- works -->

<form method="post" action="#">

<div class="details" id="profile3">



	 <div class="pro3">
	 <label>Email: </label>
	<input type="text" placeholder="Enter your email address" name="email" required ><br><br>
	<label>Total times:</label>
	<input type="text" placeholder="Enter total amount of time" name="times" required><br><br>

	<div class="Gendersub"><input type="submit" name="submit" value="submit" ></div>



	</div>


</div>
</form>

<?php

$db = mysqli_connect("localhost", "jc", "1549100", "hr");
if(isset($_POST['submit'])){
    session_start();
    $email = $_POST['email'];
    $times =$_POST['times'];
    $sql="UPDATE works SET total_times='$times' WHERE email='$email'";
    $verify = mysqli_query($db, $sql);

    if($verify){
        header("location: hr.php");
    }else {
        echo "failed total times";
    }
}
?>


<!-- profile script -->

<script type="text/javascript">

	function pro(){
		document.getElementById("profile").style.display = "block";
		document.getElementById("profile1").style.display = "none";
		document.getElementById("profile2").style.display = "none";
		document.getElementById("profile3").style.display = "none";

	}

</script>

<!-- change password script -->

<script type="text/javascript">

	function pro1(){
		document.getElementById("profile1").style.display = "block";
		document.getElementById("profile").style.display = "none";
		document.getElementById("profile2").style.display = "none";
		document.getElementById("profile3").style.display = "none";
	}

</script>

<!-- salary script -->

<script type="text/javascript">

	function pro2(){
		document.getElementById("profile2").style.display = "block";
		document.getElementById("profile1").style.display = "none";
		document.getElementById("profile").style.display = "none";
		document.getElementById("profile3").style.display = "none";
	}

</script>

<!-- works script -->

<script type="text/javascript">

	function pro3(){
		document.getElementById("profile3").style.display = "block";
		document.getElementById("profile2").style.display = "none";
		document.getElementById("profile1").style.display = "none";
		document.getElementById("profile").style.display = "none";
	}

</script>





</body>
</html>
