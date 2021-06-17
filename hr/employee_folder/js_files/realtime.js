 function loadDoc() {
			  setInterval(function(){
			   var xhttp = new XMLHttpRequest();
			   xhttp.open("GET", "data.php", true);
			   xhttp.send();
			   xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    	var countn = this.responseText;
			     document.getElementById("message").innerHTML="("+countn+")";
			    }
			   };
			  },1000);
			 }
			 loadDoc();