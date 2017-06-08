<html>
	<head><title> Reqular Expresson Examples</title>
	<script type="text/javascript">	
		//var re = /(\w+)\s(\w+)/;
		//var mypattern =/[a-zA-Z]+/g; // Select alphabet range
		//var mypattern =/[^a-zA-Z]+/g; // Select NOT alphabet range
		//var mypattern =/[0-9]+/g; // select only digit range
		//var mypattern =/[\d]+/g; // select ANY  digits
		//var mypattern =/[\D]+/g; // select ANY NON digits
		var mypattern =/.+/g; // select Any Character
		var myString="javed9818941303alam73843@@##";
	
	var result= myString.replace(mypattern,'');
	console.log(result);
	console.log(mypattern);
	
	
	var personName = myString.replace(/[^a-zA-Z]+/g,'');
	console.log("___");
	console.log(personName);
	</script>
	</head>
	
	<body>
	
	</body>	
</html>
