getProduct_cart();

function getProduct_cart(){

	var add_cart_id = localStorage.getItem('product_id');

	var data =JSON.stringify({ad_cart_id:add_cart_id});
	var type="application/json";
	var url="cart-products";
	var asyn="true";
	var method="POST";
	var respCallback = function(datas){
		var d1 = document.querySelector('.cmn_cart_prodcts');
		var d2 = JSON.parse(datas);

			// for(var j=0; j < JSON.parse(d2.home_product_images); j++){
				for(var i=0; i < d2.length; i++){
					d1.insertAdjacentHTML('beforeend', '<div class="cart_product_dtl"><hr class="top_hr"><div class="sub_cmn_cart_product"><div class="add_cart_product_img"><img class="img-fluid img_view" src=""></div><div class="add_cart_product_detail"><p class="name_cart_prod">'+d2[i].home_product_name+'</p><p class="stock_cart_prod">In stock : '+d2[i].home_product_available_stock+'</p><div class="dropdown_dtl"><div class="form-group drop_detl"><label for="sel1">Qty:</label><select class="form-control" id="sel1"><option>4</option></select></div><div class="dlt_div"><a href="#" class="dlt_a">Remove</a> </div><div class="savlater_div"><a href="#" class="save_later_a">save for later</a></div></div></div><div class="add_cart_product_price"></div></div></div>');
				//}
			}

	}
	var res=serverRequest(data,method,url,asyn,type,respCallback);

}