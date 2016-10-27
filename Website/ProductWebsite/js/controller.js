
var emailSend = angular.module('secretSparrowApp',[]);

emailSend.controller('controller',function($scope,$http){
    // $scope.submitLogin = function(credentials){

    //      var data = {       
    //                 grant_type : 'password', 
    //                 client_id: 1, 
    //                 username: $scope.credentials.email, 
    //                 password: $scope.credentials.password
    //      };

    //     var config = {
    //         'Content-Type': 'application/json'
    //     }

    //     $http.post('http://95e382ad.ngrok.io/oauth/token',data,config)
    //     .success(function(data,status,headers,config){
    //         console.log("SUCCESS");
    //         console.log(data);
            
    //         var authUsers = $http({
    //             method: 'GET',
    //             url: 'http://95e382ad.ngrok.io/rank',
    //             headers: {
    //                 'Authorization' : 'Bearer ' + data.access_token
    //             },
    //             params: credentials
                
    //         }).success(function(data,status,header,config){
    //             console.log(data.Ranking)
    //         }).error(function(){
    //             console.log("YOU FAILEDDDDDDDD")
    //         });
            

    //     })
    //     .error(function(data,status,headers,config){
    //         console.log("YOU FAILED AGAIN");
    //     });

    // };

    
    $scope.register = function(credentials){

         var input = {       
                    // name : $scope.credentials.fullname, 
                    email : $scope.credentials.email, 
                    // password : $scope.credentials.password, 
                    // password_confirmation: $scope.credentials.cpassword
         };

        $http.post('http://95e382ad.ngrok.io/register',input)
        .success(function(input,status,headers){
            console.log("SUCCESS FOR REGISTER");
            console.log(input);
        })
        .error(function(input,status,headers){
            console.log("YOU FAILED AGAIN FOR REGISTER");
        });

    };


});









