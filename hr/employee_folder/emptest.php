<?php	
	session_start();
	$name=$_SESSION['name'];
	$mail=$_SESSION['email'];
	$gender=$_SESSION['gender'];
	$mob=$_SESSION['mobile'];
	$add=$_SESSION['address'];
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$db = mysqli_connect("localhost", "jc", "1549100", "hr");
		$sql = "UPDATE user SET name= '".$_POST['uname']."', mobile = '".$_POST['umobile']."', gender= '".$_POST['ugender']."', address= '".$_POST['uadd']."' WHERE email='$mail'";
		mysqli_query($db, $sql);
		if (mysqli_query($db, $sql)) {
			    $_SESSION['name']=$name=$_POST['uname'];
				$_SESSION['email']=$mail=$_POST['umail'];
				$_SESSION['gender']=$gender=$_POST['ugender'];
				$_SESSION['mobile']=$mob=$_POST['umobile'];
				$_SESSION['uadd']=$add=$_POST['uadd'];
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
	<link rel="stylesheet" type="text/css" href="cssfiles/empcss.css">
</head>
<body>
	<div class="container">
		<div id="navbarr">
			<script src="js_files/commonhtml.js"></script>
			<script src="js_files/scroll.js"></script>
			<script src="js_files/realtime.js"></script>
		</div>
			<div class="xchange">
				<form  method="POST" action="emptest.php">
				<div class="innerdiv">
					    <div class="pimage"></div>
						<div class="inputfields">
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
						</div>
						<!-- <div class="inputfields">
							<label>SELECT BANK</label>
							<select class="input" disabled="true">
							  <option value="male"><?php echo $gender?></option>
				              <option value="male">EASTERN BANK LIMITED</option>
				              <option value="female">DUTCH BANGLA BANK</option>
				            </select>
						</div> -->
						<div class="inputfields">
							<label>MOBILE</label>
							<input  type="text" name="umobile" placeholder="<?php echo $mob?>" class="input" value="<?php echo $mob?>" disabled="true">
						</div>
						<div class="inputfields">
							<label>ADDRESS</label>
							<input  type="text" name="uadd" placeholder="<?php echo $add?>" class="input" value="<?php echo $add?>" disabled="true" >
						</div>

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





