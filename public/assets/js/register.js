// document.querySelector(".btn_reg_save").addEventListener("click", register_user);

// function register_user() {
// 	var reg_name = document.querySelector("#reg_name").value 
// 	var reg_phone = document.querySelector("#reg_phone").value 
// 	var reg_email = document.querySelector("#reg_email").value 
// 	var reg_pass = document.querySelector("#reg_pass").value 

// 	var data=JSON.stringify({"name":reg_name,"phone":reg_phone,"email":reg_email,"password":reg_pass});
// 	var type="application/json";
// 	var url="buyer-register";
// 	var asyn="true";
// 	var method="POST";
// 	var respCallback = function(resp){
// 		var data = JSON.parse(this.response);
// 		//email-verification
// 	}
// 	var res=serverRequest(data,method,url,asyn,type,respCallback);
// }