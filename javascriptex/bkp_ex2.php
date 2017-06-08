<html>
	<head></head>
<body>
<h2>Advirosy Online Chats Usrs</h2>
<script type="text/javascript">
var onlineAvailabeUser =[];


function checkUserEmailRegisted(userEmail)
{
	for (var obj in onlineAvailabeUser) {
		//console.log("YEs");
		//console.log(obj);
		
        if (obj==userEmail)
        {
			return true;
			//console.log("YEs");
		}
    }
}
function checkSessionEmail( userEmail ) {
    for(var i = 0, len = onlineAvailabeUser.length; i < len; i++) {
        if( onlineAvailabeUser[ i ].userEmail === userEmail )
            return true;
    }
    return false;
}

function checkSessionEmail2( userEmail ) {
	console.log(onlineAvailabeUser.length);
    for(var i = 0, len = onlineAvailabeUser.length; i < len; i++) {
		
        if( onlineAvailabeUser[ i ] === userEmail )
            return true;
    }
    return false;
}


function getUserInfoByEmail( userEmail ) {
    for(var i = 0, len = onlineAvailabeUser.length; i < len; i++) {
        if( onlineAvailabeUser[ i ].userEmail === userEmail )
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
	//console.log("p1");	
	if( !checkUserEmailRegisted(userEmail) ) {
		   
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
		console.log("sessionAlready Exits");
		var key = userEmail;  
		onlineAvailabeUser[key].push({
			sessionId: userSessionId,
			userEmail: userEmail,
			socketID: userSocketTimeId
		});
		
		//socketData = getUserInfoByEmail(userEmail);
		//console.log(socketData.socketID.push(userSocketTimeId));		
		//console.log(socketData);		
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

console.log("DELETE USERS ");
 
//deleteUserBySession('004713bacc796653a93c1d23ec288659DELL')['khandelwalh1@gmail.com']
//console.log(onlineAvailabeUser[0][0].userEmail);

var hello=[];
var key = "javed.alam";
hello[key]=[];
hello[key].push({email:"d"});
hello[key].push({email:"d2"});
hello[key].push({email:"d3"});
var key = "saroj.jha";
hello[key]=[];
hello[key].push({email:"s1"});
hello[key].push({email:"s2"});
hello[key].push({email:"s3"});
console.log(hello);


function countProperties (obj) {
    var count = 0;

    for (var property in obj) {
		
		console.log(obj['javed.alam']);
        /*if (Object.prototype.hasOwnProperty.call(obj, property)) {
			console.log("dd"+obj);
            count++;
        }*/
    }

    return count;
}

var bookCount = countProperties(hello);

// Outputs: 4
console.log(bookCount);

</script>
</body>	
</html>
