<?php
 session_start();
 $uname=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="cssfiles/stylecss.css">
	<link rel="stylesheet" type="text/css" href="cssfiles/homecss.css">
</head>
<body>
	<div class="container">
		<div id="navbarr">
			<script src="js_files/commonhtml.js"></script>
			<script src="js_files/scroll.js"></script>
			<script src="js_files/realtime.js"></script>
		</div>
		<div class="xchange" id="here">
			<div class="homeinner">
				    <div class="pimage"></div>
					<div class="inner">
						<label>WELCOME HOME</label>
					</div>
			</div>
		</div>
	</div>
</body>
</html>