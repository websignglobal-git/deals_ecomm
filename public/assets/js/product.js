var iniArr=[];
if (localStorage.getItem("product_id") === null) {
	localStorage.setItem("product_id" , JSON.stringify(iniArr));
}

function setproductid() {
	var prodid = document.querySelector(".addtocart_id").getAttribute("cid");
 	var getprodid = localStorage.getItem('product_id');
	var arr = JSON.parse(getprodid);

	var a = arr.indexOf(prodid)
	console.log(a)
		if (a == -1) {
			arr.push(prodid);
			localStorage.setItem("product_id" , JSON.stringify(arr));
			var data = JSON.stringify({"product_idk":prodid});
		    var type = "application/json";
		    var url = "add-to-cart";
		    var asyn = "true";
		    var method = "POST";
		    var respCallback = function(resp) {
		        console.log(resp)
				window.location.reload();
		    }
		    var res = serverRequest(data, method, url, asyn, type, respCallback);
		} else {
			alertify.alert('product has already been added to cart').set({title:"Deals Of Market"});
		}

	// if(arr.length > 0){
	// 	if(arr.includes(prodid)){

	// 	}
	// 	else{
	// 		arr.push(prodid);
	// 		localStorage.setItem("product_id" , JSON.stringify(arr));
	// 		var data = JSON.stringify({"product_idk":prodid});
	// 	    var type = "application/json";
	// 	    var url = "add-to-cart";
	// 	    var asyn = "true";
	// 	    var method = "POST";
	// 	    var respCallback = function(resp) {
	// 	        console.log(resp)
	// 			window.location.reload();
	// 	    }
	// 	    var res = serverRequest(data, method, url, asyn, type, respCallback);
	// 	}
	// }
	// else{
	// 	arr.push(prodid);
	// 	localStorage.setItem("product_id" , JSON.stringify(arr));
		
	// }

	}

