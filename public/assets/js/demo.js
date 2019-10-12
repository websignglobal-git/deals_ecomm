function onload(){
	var data=JSON.stringify({"user_name":"jack","user_phone":1234567678,"user_email":"jack@gmail.com","user_password":123456});
	var type="application/x-www-form-urlencoded";
	var url="register-address";
	var asyn="true";
	var method="POST";
	var respCallback = function(resp){
		//do response stuff here
	}
	var res=serverRequest(data,method,url,asyn,type,respCallback);
}

onload();
