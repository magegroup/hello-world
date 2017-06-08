<html>
	<head><title> check File Exits</title>
	<script type="text/javascript">
	function checkFiele(fileUrl)
	{
		var client = new XMLHttpRequest();
		//client.setHeader("Content-Type")
		client.open("GET", 'abcd.php', true);
		client.send();
		client.onreadystatechange = function() {
		/*if(this.readyState == this.HEADERS_RECEIVED) {
		//console.log(client.getResponseHeader("Content-Type"));
		//console.log(client.status);
		//console.log(client);
		}*/
		if (client.readyState === 4) {
			console.log(client.response); //Outputs a DOMString by default
		}
		 
		}	
	}
fileUrl= "//advisorymandi-cdn.s3-accelerate.amazonaws.com/dynamic/profileimg/6e4e3f72613a3199bc551e8905332d5e.jpgs";
checkFiele(fileUrl);	
	</script>
	</head>
	
	<body>
	
	</body>	
</html>
