<html>
	<head></head>
<body>
<h2>Advirosy Online Chats Usrs</h2>
<script type="text/javascript">

function addDateLeadZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

	
function currentDateTime(city, offset) {
    d = new Date();
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);
    currentdate = new Date(utc + (3600000*offset));
    
    var hours = currentdate.getHours();
    var ampm = hours >= 12 ? 'PM' : 'AM'; 
    
    var datetime =  currentdate.getFullYear() + "-"
                    + addDateLeadZero((currentdate.getMonth()+1))  + "-" 
                    + addDateLeadZero(currentdate.getDate() )+ " "  
                    + addDateLeadZero(currentdate.getHours()) + ":"  
                    + addDateLeadZero(currentdate.getMinutes());// + ":" 
                    //+ currentdate.getSeconds(); 
                    return datetime + " "+ampm;                                  
}	
  var curdatetime = currentDateTime('India','5.5');

 
console.log(curdatetime);
</script>
</body>	
</html>
