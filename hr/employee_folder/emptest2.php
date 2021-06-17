<?php	
	session_start();
	$name=$_SESSION['name'];
	$mail=$_SESSION['email'];
	$gender=$_SESSION['gender'];
	$mob=$_SESSION['mobile'];
	$add=$_SESSION['address'];
	$bankn=$bankaccount="";
	$db = mysqli_connect("localhost", "jc", "1549100", "hr");
	$sql="select * from bankdetails where email = '$mail';";
	$result=mysqli_query($db, $sql);
	if (mysqli_num_rows($result)) {
	    while($row = mysqli_fetch_assoc($result)) {
	        $bankn=$row['bankname'];
	        $bankaccount=$row['account'];
	    }
	}

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$db = mysqli_connect("localhost", "jc", "1549100", "hr");
		if($bankn!="")
		{
			$sql = "UPDATE bankdetails SET bankname= '".$_POST['bankacc']."', account = '".$_POST['uacc']."'WHERE email='$mail'
			;" ;
		}
		else
		{
			$sql="INSERT INTO `bankdetails`(`email`, `bankname`, `account`) VALUES ('$mail','".$_POST['bankacc']."','".$_POST['uacc']."');";
		}
		if (mysqli_query($db, $sql)) {

			$bankn=$_POST['bankacc'];
			$bankaccount=$_POST['uacc'];
			} 
		else {
		  echo "Error updating record: " . mysqli_error($db);
		}
		mysqli_close($db);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="cssfiles/stylecss.css">
	<link rel="stylesheet" type="text/css" href="cssfiles/emptest2css.css">
</head>
<body>
	<div class="container">
		<div id="navbarr">
			<script src="js_files/commonhtml.js"></script>
			<script src="js_files/scroll.js"></script>
			<script src="js_files/realtime.js"></script>
		</div>
			<div class="xchange">
				<form  method="POST" action="emptest2.php">
				<div class="innerdiv">
					    <div class="pimage"></div>
						<!-- <div class="inputfields">
							<label>NAME</label>
							<input  type="text" name="uname" placeholder="<?php echo $name?>" class="input" value="<?php echo $name?>" disabled="true" required>
						</div>
						<div class="inputfields">
							<label>EMAIL ID</label>
							<input   type="text" name="umail" placeholder="<?php echo $mail?>" class="input" value="<?php echo $mail?>" disabled="true" required>
						</div>
						<div class="inputfields">
							<label>GENDER</label>
							<input  type="text" name="ugender" placeholder="<?php echo $gender?>" class="input" value="<?php echo $gender?>" disabled="true"required>
						</div> -->
						<div class="inputfields">
							<label>SELECT BANK</label>
							<select class="input" disabled="true" name="bankacc" required>
							  <option value="" disabled selected><?php echo $bankn?></option>
							  <option value="HSBC">HSBC</option>
				              <option value="EASTERN BANK LIMITED">EASTERN BANK LIMITED</option>
				              <option value="DUTCH BANGLA BANK">DUTCH BANGLA BANK</option>
				            </select>
						</div>
						<div class="inputfields" required>
							<label>ACCOUNT NUMBER</label>
							<input  type="text" name="uacc" placeholder="<?php echo $bankaccount?>" class="input" value="<?php echo $bankaccount?>" disabled="true" required>
						</div>
						<!-- <div class="inputfields">
							<label>ADDRESS</label>
							<input  type="text" name="uadd" placeholder="<?php echo $add?>" class="input" value="<?php echo $add?>" disabled="true" >
						</div>  -->

				</div>
						<div class="buttons">
							<a class="edit" href="#" onclick="enable()">EDIT</a>
							<!-- <a class="save" href="#" onclick="submit()">SAVE</a> -->
							<input class="save" type="submit" name="save" onclick="myFunction()" value="SAVE">
						</div>
				</form>			
				<script type="text/javascript">
					function myFunction()
					{
						alert("Save Changes?"); // this is the message in ""
					}
					function enable()
					{
						var inputs = document.getElementsByClassName('input');
						for(var i = 0; i < inputs.length; i++) {
					    	if(inputs[i]['name']!="usalary" && inputs[i]['name']!="uhours") inputs[i].disabled=false;

						}
					}
					
				</script>
			</div><!--content code here-->
		<div class="cleardiv"></div><!--dont touch thich div,clear div-->
	</div>
</body>
</html> 





