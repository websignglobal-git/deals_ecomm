var iniArr=[];
if (localStorage.getItem("product_id") === null) {
	localStorage.setItem("product_id" , JSON.stringify(iniArr));
}

function setproductid() {
	var prodid=document.querySelector(".addtocart_id").getAttribute("cid");
 	var getprodid = localStorage.getItem('product_id');
	var arr = JSON.parse(getprodid);
	if(arr.length > 0){
		if(arr.includes(prodid)){
		}
		else{
		arr.push(prodid);
			localStorage.setItem("product_id" , JSON.stringify(arr));
		}
	}else{
	arr.push(prodid);
	localStorage.setItem("product_id" , JSON.stringify(arr));
	}
window.location.reload();
	var data = JSON.stringify({"product_idk":prodid});
    var type = "application/json";
    var url = "add-to-cart";
    var asyn = "true";
    var method = "POST";
    var respCallback = function(resp) {
        console.log(resp)
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);
}

function cartprod() {
	var id = localStorage.getItem("product_id");
	var prodcount = localStorage.getItem("product_count");
	var len = JSON.parse(id).length
	var userId = "<?php $_SESSION['user_id'] ?>";
	if(userId){
		document.querySelector('.shop_cart_text').innerHTML = prodcount;
	}
	else{
 		document.querySelector('.shop_cart_text').innerHTML = len;
	}
}
cartprod()