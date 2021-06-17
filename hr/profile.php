<!DOCTYPE html>
<html>
<head>
<title>My portfolio</title>
<link rel="stylesheet" href="profile.css">
</head>
<body>
<div class="header">
<img src="image/a.png" alt="PayRoll Management Logo"width="100" height="70" align="left" >
<div class="subheader">
<button class="button1"><b>about</b></button>
<button class="button2"><b>featured</b></button>
<button class="button3"><b>portfolio</b></button>
<button class="button4"><b>blog</b></button>
<button class="button5"><b>contact</b></button>
</div>

<div class="logo"><a href="https://www.facebook.com"><img src="image/f.png" alt="hr Logo" width="30" height="30"></a>
<a href="https://twitter.com/login"><img src="image/t.png" alt="hr Logo" width="30" height="30" ></a>
<a href="https://www.youtube.com"><img src="image/y.png" alt="hr Logo"width="30" height="30" ></a>
<a href="https://www.linkedin.com"><img src="image/l.png" alt="hr Logo"width="30" height="30" ></a>
</div>
</div>

<div class="main">
<img src="image/io.png" alt="PayRoll Management Logo"width="750" height="700" >
</div>

<div class="option1"><b>Welcome!</b><br>
<div class="suboption"><p>Good people, good wine, good welcome, can makegood people <br><br>-william shakespeare</p>
</div>
</div>

<div class="option2"><b>Hello,</b>
<div class="suboption2">I'm Rayha Tabassum.I'm a full-stack wed developer.
<button onclick="myFunction()">see more-></button>
</div>
</div>

<div id="myDIV">I have been into making websites and fixing computers and servers for over three years. This has given me a lot of experience in the field.
</div> <br><br>

<!-- <div class="port">
<b>My Portfolio: </b><br><br>
<div class="vi">
<video width="100%" height="1000" align="right" controls autoplay><source src="video/vi.mkv" type="video/mp4"></video>
</div>
</div> -->

<div class="skill">
<b>My skills:</b><br><br>
<div class="bar">
HTML: <br> <progress value="95" max="100"></progress>(95%)<br>
CSS: <br> <progress value="95" max="100"></progress>(95%)<br>
PHP: <br> <progress value="90"max="100"></progress>(90%)<br>
javascript: <br><progress value="85"max="100"></progress>(85%)<br>
wordpress: <br><progress value="80"max="100"></progress>(80%)<br>
</div>
</div>

<div class="footer">
</div>


<div class="h">
<img src="image/hr.png" alt="PayRoll Management Logo"width="400" height="220" >
</div>

<div class="address"><h1><u>Address:</u></h1>
road-4,nikunjo-2 <br>khilket,Dhaka
</div>

<!-- <div class="copy">copyright © 2020 All rights jc
</div> -->
<div class="contact">
<h1><u>Contact:</u></h1>Email: rayha173@gmail.com <br>Phone: +8801700000000
</div>

<script>
function myFunction() {
 var x = document.getElementById("myDIV");
 if (x.style.display === "none") {
 x.style.display = "block";
 } else {
 x.style.display = "none";
 }
}
</script>

</body>
</html>