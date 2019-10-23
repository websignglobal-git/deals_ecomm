function getProduct(){
	var data;
	var type="application/x-www-form-urlencoded";
	var url="find-home-product";
	var asyn="true";
	var method="POST";
	// var respCallback;
	var respCallback = function(resp){
		
		console.log(resp);
	}
	var res=serverRequest(data,method,url,asyn,type,respCallback);
}



getProduct();