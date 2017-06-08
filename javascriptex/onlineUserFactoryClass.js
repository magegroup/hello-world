/*
 * Author: Javed Alam
 * Desc  : Online User Factory Class.
 * Dated : 24th May 2017
 * Compnay: Cws Technology Pvt Ltd. 
 * 
 * */

(function(context) {
    var onlineAvailabeUser = [];
    
    /*
     * Desc: Get All online Users.
     * Param: none
     * */
    context.getAllOnlineUser = function() {
        return onlineAvailabeUser;
    };
    
    /*
     * Desc: Get All online Users by email specific.
     * Param: email
     * */
    context.getAllOnlineUserByEmail = function(userEmail) {
        return onlineAvailabeUser[userEmail];
    };
    
    
    /*
     * Desc: Check user's Email is Registered.
     * Param: email
     * */
    context.checkUserEmailOnlineRegisted = function(userEmail) {
        for (var obj in onlineAvailabeUser) {

            if (obj == userEmail) {
                return true;
            }
        }
    };
    
    /*
     * Desc: Add Online Users.
     * Param: usersdata
     * */
    context.addOnlineUsers = function(userData) {

        var userSessionId = userData.userSessionId;
        var userEmail = userData.userEmail;
        var userSocketTimeId = userData.userSocketTimeId;

        if (!checkUserEmailOnlineRegisted(userEmail)) {

            var key = userEmail;

            onlineAvailabeUser[key] = [];

            onlineAvailabeUser[key].push({
                sessionId: userSessionId,
                userEmail: userEmail,
                socketID: userSocketTimeId
            });

        } else {
            var key = userEmail;
            onlineAvailabeUser[key].push({
                sessionId: userSessionId,
                userEmail: userEmail,
                socketID: userSocketTimeId
            });

        }

    }

})(this);
