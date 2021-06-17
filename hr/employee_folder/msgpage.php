<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="cssfiles/stylecss.css">
	<link rel="stylesheet" type="text/css" href="cssfiles/emnicss.css">
</head>
<body>
	<div class="container">
		<div id="navbarr">
			<script src="js_files/commonhtml.js"></script>
			<script src="js_files/scroll.js"></script>
			<script src="js_files/realtime.js"></script>
		</div>
		<div class="xchange">
			<div class="createmsg">
				<div onclick='myf("create")' id="label">CREATE MESSAGE</div>
				<div id="create">
					
					<input type="text" name="" placeholder="TO:" id="tomail" required>
					<textarea rows="4" cols="140" id="tomsg" required></textarea>
					<input type="submit" name="SEND" value="SEND" onclick='send_data("create")'>
				</div>
			</div>
			<div id="here">
				
			</div>
		</div>
		<script>
			var countn=0;
			 function loadDoc(){
			 	setInterval(function(){
			 		var ajax = new XMLHttpRequest();
			 ajax.open("GET", "getmsg.php", true);
			 ajax.send();
			 ajax.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			        
			        var data = JSON.parse(this.responseText);
			        // console.log(data);
			        var html="";
			        if(data.length>countn)
			        {
			        	var temp=countn;
			        	for(var a=temp;a<=data.length-1;a++)
				        {	
				        	countn++;
				        	html="";
				        	html+="<div class='ok'>";
				        	html+="<div onclick='myf("+data[a].id+")' class='"+data[a].id+"' >";
				        	html+=data[a].from_msg+"</div>";
				        	html+="<div id='"+data[a].id+"' class='all' >";
				        	html+="<p>"+data[a].msg+"</p>";
				        	html+="<textarea rows='4' cols='140'>";
				        	html+="</textarea>";
				            html+="<input type='submit' style='line-height:40px; width:80px;' onclick='send_data("+data[a].id+")' value='SEND'>";
				        	html+="</div>";
				        	html+="</div>";
				        	// html+="<div id=";
				        	// html+=data[a].id+" class='ok' onclick='myf("+data[a].id+")'>";
				        	// html+="<p>FROM:"+data[a].from_msg+"</p>";
				        	// html+="<textarea class='down2' rows='4' cols='140' required>";
				        	// html+=data[a].msg;
				        	// html+=" </textarea>";
				        	// html+="</div>";
				        	document.getElementById("here").insertAdjacentHTML("afterend", html);
				        }
				        
			        }
			        
			    }
			};
			 	},1000);
			 }
			 loadDoc();
		</script>
		<script type="text/javascript">
				function myf(id)
				{
					$("#"+id).slideToggle("slow");
				}
				function send_data(id)
				{
					var from=msg="";
					if(id=="create")
					{
						from=document.getElementById('tomail').value;
						msg=document.getElementById('tomsg').value;
						
					}
					else
					{
						from=document.getElementsByClassName(id)[0].innerText;
						var m=document.getElementById(id).children;
						msg= m[1].value;
					}
					if(from!="" && msg!="")
					{
						var httpr = new XMLHttpRequest();
						httpr.open("POST", "reply.php", true);
						httpr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						httpr.onreadystatechange=function(){
							if(httpr.readyState==4 && httpr.status==200)
							{
								myf(id);
								if(id=="create") 
								{
									document.getElementById('tomail').value="";
									document.getElementById('tomsg').value="";
								}
								else m[1].value="";
							}
						}
						httpr.send("to="+from+"&msg="+msg);
					}
					else
					{
						alert("Please enter all the information");
					}
				}
		</script>
	</div>
</body>
</html>