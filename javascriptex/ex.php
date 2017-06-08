<html>
	<head></head>
<body>
<h2>Advirosy Online Chats Usrs</h2>
<script type="text/javascript">
onlineAvailabeUser = [];

function checkSessionExists( userSessionId ) {
    for(var i = 0, len = onlineAvailabeUser.length; i < len; i++) {
        if( onlineAvailabeUser[ i ].sessionId === userSessionId )
            return true;
    }
    return false;
}


function getUserInfoBySession( userSessionId ) {
    for(var i = 0, len = onlineAvailabeUser.length; i < len; i++) {
        if( onlineAvailabeUser[ i ].sessionId === userSessionId )
        {
			return 	 onlineAvailabeUser[ i ];             
		}
    }
    return false;
}

function deleteUserBySession( dellSessionID ) {
    for(var i = 0, len = onlineAvailabeUser.length; i < len; i++) {
        if( onlineAvailabeUser[ i ].sessionId === dellSessionID )
        {
			onlineAvailabeUser.splice(i, 1); 
			return true;           
		}
    }
    
}



function prepareOnlineUser(userData)
{
	var userSessionId = userData.userSessionId;
	var userEmail = userData.userEmail;
	var userSocketTimeId = userData.userSocketTimeId;	
	//console.log(userSessionId);
	if( !checkSessionExists( userSessionId ) ) {
		onlineAvailabeUser.push({
			sessionId: userSessionId,
			userEmail: userEmail,
			socketID: [userSocketTimeId]
		});
	}
	else
	{
		//console.log("sessionAlready Exits");
		socketData = getUserInfoBySession(userSessionId);
		console.log(socketData.socketID.push(userSocketTimeId));		
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

 





prepareOnlineUser(onlineUserData);
prepareOnlineUser(onlineUserData1);
prepareOnlineUser(onlineUserData2);
prepareOnlineUser(onlineUserData3);
console.log(onlineAvailabeUser);

console.log("DELETE USERS ");
 
//deleteUserBySession('004713bacc796653a93c1d23ec288659DELL')
console.log(onlineAvailabeUser);
</script>
</body>	
</html>
