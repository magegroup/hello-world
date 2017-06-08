<html>
	<head></head>
<body>
<h2>Advirosy Online Chats Usrs</h2>
<script type="text/javascript">
var onlineAvailabeUser =[];


function checkUserEmailOnlineRegisted(userEmail)
{
	for (var obj in onlineAvailabeUser) {		
		
        if (obj==userEmail)
        {
			return true;
			
		}
    }
}

function fetchOnlineUsersByEmail(userEmail)
{
	return onlineAvailabeUser[userEmail];	
}



function prepareOnlineUser(userData)
{
	var userSessionId = userData.userSessionId;
	var userEmail = userData.userEmail;
	var userSocketTimeId = userData.userSocketTimeId;	
	//console.log("p1");	
	if( !checkUserEmailOnlineRegisted(userEmail) ) {
		   
		var key = userEmail;  
		onlineAvailabeUser[key]=[];
		
		onlineAvailabeUser[key].push({
			sessionId: userSessionId,
			userEmail: userEmail,
			socketID: userSocketTimeId
		});
		
		 
 
		 
		//console.log(onlineAvailabeUser);
		
		
		
		
	}
	else
	{
		var key = userEmail;  
		onlineAvailabeUser[key].push({
			sessionId: userSessionId,
			userEmail: userEmail,
			socketID: userSocketTimeId
		});
		
		 	
	}	
}	
	

var onlineUserData = {};
onlineUserData.userName="hemant234";
onlineUserData.userType="6";
onlineUserData.userEmail="khandelwalh1@gmail.com";
onlineUserData.userDisplayName="hemant234";
onlineUserData.userSessionId="004713bacc796653a93c1d23ec288659X";
onlineUserData.userIpAddress="125.63.93.203";
onlineUserData.userSocketTimeId="1495528129";

var onlineUserData1 = {};
onlineUserData1.userName="hemant234";
onlineUserData1.userType="6";
onlineUserData1.userEmail="khandelwalh1@gmail.com";
onlineUserData1.userDisplayName="hemant234";
onlineUserData1.userSessionId="004713bacc796653a93c1d23ec288659DELL";
onlineUserData1.userIpAddress="125.63.93.203";
onlineUserData1.userSocketTimeId="1495528129";

 

var onlineUserData2 = {};
onlineUserData2.userName="hemant234";
onlineUserData2.userType="6";
onlineUserData2.userEmail="khandelwalh1@gmail.com";
onlineUserData2.userDisplayName="hemant234";
onlineUserData2.userSessionId="004713bacc796653a93c1d23ec288659BB";
onlineUserData2.userIpAddress="125.63.93.203";
onlineUserData2.userSocketTimeId="1495528129";

var onlineUserData3 = {};
onlineUserData3.userName="hemant234";
onlineUserData3.userType="6";
onlineUserData3.userEmail="khandelwalh1@gmail.com";
onlineUserData3.userDisplayName="hemant234";
onlineUserData3.userSessionId="004713bacc796653a93c1d23ec288659BB";
onlineUserData3.userIpAddress="125.63.93.203";
onlineUserData3.userSocketTimeId="149552812958";

 

var onlineUserData4 = {};
onlineUserData4.userName="hemant234";
onlineUserData4.userType="6";
onlineUserData4.userEmail="saroj.j@gmail.com";
onlineUserData4.userDisplayName="hemant234";
onlineUserData4.userSessionId="004713bacc796653a93c1d23ec288659BB";
onlineUserData4.userIpAddress="125.63.93.203";
onlineUserData4.userSocketTimeId="149552812958";

 





prepareOnlineUser(onlineUserData);
prepareOnlineUser(onlineUserData1);
prepareOnlineUser(onlineUserData2);
prepareOnlineUser(onlineUserData3);
prepareOnlineUser(onlineUserData4);


console.log(onlineAvailabeUser);

console.log("FETCH RECORDS");
//userTABs= fetchOnlineUsersByEmail("saroj.j@gmail.com");
userTABs= fetchOnlineUsersByEmail("saroj.j@gmail.com");
console.log(userTABs);

</script>
</body>	
</html>
