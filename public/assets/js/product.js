document.querySelector(".addtocart_id").addEventListener("click", setproductid);
	var iniArr=[];
	if (localStorage.getItem("product_id") === null) {
		localStorage.setItem("product_id" , JSON.stringify(iniArr));
	}
var prodid=document.querySelector(".addtocart_id").getAttribute("cid");
function setproductid() {
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
}
