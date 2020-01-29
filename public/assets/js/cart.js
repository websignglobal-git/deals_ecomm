	if(idproduct == ""){
		getProduct_cart()
	}
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
		console.log(d2)
		var d3 = datas.datas
		var arr = [];
				for(var i=0; i < d2.length; i++){
					var cost = JSON.parse(d2[i].home_product_amount).cost
					var actual = JSON.parse(d2[i].home_product_amount).actual_price
					totalcost = cost - actual;
					arr.push(totalcost);
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
																<div id="product_price'+d2[i].home_product_id+'" class="add_cart_product_price">'+totalcost+' </div>\
															</div>\
														</div>');

			}
			var sum = arr.reduce(function(a, b){
			        return a + b;
		    });
		  document.getElementById('totalrs').innerText = sum;

	}
	var res=serverRequest(data,method,url,asyn,type,respCallback);

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
	






