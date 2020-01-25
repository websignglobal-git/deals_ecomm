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
					var prodImgArr = JSON.parse(d2[i].home_product_images);

					d1.insertAdjacentHTML('beforeend', '<div class="cart_product_dtl">\
															<hr class="top_hr">\
																<div class="sub_cmn_cart_product">\
																	<div class="add_cart_product_img">\
																		<img class="img-fluid img_view vr_adjst_imgx" src='+prodImgArr[0]+'>\
																	</div>\
																<div class="add_cart_product_detail">\
																	<p id="'+d2[i].home_product_id+'" class="name_cart_prod">'+d2[i].home_product_name+'</p>\
																	<p class="stock_cart_prod'+d2[i].home_product_id+'" stock="'+d2[i].home_product_available_stock+'">In stock : '+d2[i].home_product_available_stock+'</p>\
																	<div class="dropdown_dtl">\
																		<div class="form-group drop_detl">\
																			<label for="sel1">Qty:</label>\
																			<div class="cmn_cart_icr">\
																				  <div class="value-button decrease" id="'+d2[i].home_product_id+'" onclick="decreaseValue(this.id)" value="Decrease Value">-</div>\
																				  <input type="number" class="number crt_indc_val'+d2[i].home_product_id+'" id="number'+d2[i].home_product_id+'" value="1" />\
																				  <div class="value-button increase" id="'+d2[i].home_product_id+'" onclick="increaseValue(this.id)" value="Increase Value">+</div>\
																			</div>\
																		</div>\
																		<div class="dlt_div">\
																			<a href="#" class="dlt_a" onclick="removeProduct(this)">Remove</a>\
																		</div>\
																		<div class="savlater_div">\
																			<a href="#" class="save_later_a">save for later</a>\
																		</div>\
																	</div>\
																</div>\
																<div class="add_cart_product_price"></div>\
															</div>\
														</div>');
				//}
			}

	}
	var res=serverRequest(data,method,url,asyn,type,respCallback);

}

function removeProduct(id) {
	var prodId = id.parentNode.parentNode.parentNode.firstElementChild.id
	var rem = id.parentNode.parentNode.parentNode.parentNode.parentNode
	var localvar = [];
	var local = JSON.parse(localStorage.getItem('product_id'))

	for (var i = 0; i < local.length; i++) {
		if (prodId == local[i]) {
			rem.remove()
			window.location.href
		}else {
			localvar.push(local[i])
		}
		localStorage.setItem('product_id', JSON.stringify(localvar))
	};
	var data = JSON.stringify({"product_idk":prodId});
    var type = "application/json";
    var url = "remove-product";
    var asyn = "true";
    var method = "POST";
    var respCallback = function(resp) {
        console.log(resp)
    }
    var res = serverRequest(data, method, url, asyn, type, respCallback);
}

function increaseValue(id) {
	var availStock = document.querySelector('.stock_cart_prod'+id).getAttribute('stock');
	var exVal = document.querySelector('.crt_indc_val'+id).value;
	if(availStock != exVal){
	var val = document.querySelector('.crt_indc_val'+id).value = Number(exVal)+1;
	}
}

function decreaseValue(id) {
	var exVal = document.querySelector('.crt_indc_val'+id).value;
	if(exVal != 1){
		var val = document.querySelector('.crt_indc_val'+id).value = Number(exVal)-1;
	}

}
	











