</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>

	<section class="end_footer">
		<div class="view_cart_cmn">
			<p class="shop_cart_head">Shopping Cart</p>
			<p class="shop_head_price">price</p>
			<p style="visibility: hidden;" id="product_count" class="product_cnt">{{$cartCount}}</p>
			@if(session()->has('user_id'))
				@foreach ($prodData as $prodDatas)
			<div class="cmn_cart_prodcts">
				<div class="cart_product_dtl">
					<hr class="top_hr">
						<div class="sub_cmn_cart_product">
							<div class="add_cart_product_img">
								<img class="img-fluid img_view vr_adjst_imgx" src="{{ json_decode($prodDatas->home_product_images)[0]}}">
							</div>
						<div class="add_cart_product_detail">
							<p id="{{$prodDatas->home_product_id}}" class="name_cart_prod">{{$prodDatas->home_product_name}}</p>
							<p class="stock_cart_prod{{$prodDatas->home_product_id}}" stock="{{$prodDatas->home_product_available_stock}}">In stock : {{$prodDatas->home_product_available_stock}}</p>
							<div class="dropdown_dtl">
								<div class="form-group drop_detl">
									<label for="sel1">Qty:</label>
									<div class="cmn_cart_icr">
										  <div class="value-button decrease" id="{{$prodDatas->home_product_id}}" onclick="decreaseValue(this.id)" value="Decrease Value">-</div>
										  <input type="number" class="number crt_indc_val{{$prodDatas->home_product_id}}" id="number{{$prodDatas->home_product_id}}" value="1" />
										  <div class="value-button increase" id="{{$prodDatas->home_product_id}}" onclick="increaseValue(this.id)" value="Increase Value">+</div>
									</div>
								</div>
								<div class="dlt_div">
									<a href="#" class="dlt_a" onclick="removeProduct(this)">Remove</a>
								</div>
								<div class="savlater_div">
									<a href="#" class="save_later_a">save for later</a>
								</div>
							</div>
						</div>
						<div class="add_cart_product_price"></div>
					</div>
				</div>
			</div>
			@endforeach
			@else 
			<div class="cmn_cart_prodcts">

			</div>
			@endif
			 <hr class="bottom_hr">
			 <div class="checkout_total_amt">
			 	<span class="checkout_total_txt">Subtotal</span> <span class="checkout_total_item">(2 items)</span> : <span class="checkout_total_rs"> 1000.00</span>
			 </div>
			 <div class="checkout_btn_div">
			 	<button type="button" onclick="checkout()" class="checkout_btn">Check out</button> 
			 </div>
		</div>
	</section>

	<script>
		function checkout() {
			var url = window.location.href
			localStorage.setItem("url", url)
			window.location.href="checkout-address"
		}
		let x = localStorage.getItem("product_id");
        let y = JSON.parse(x);
        let z = y.length
        if(z == 0){
        	window.location.href = "cart-empty";
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

		var product_cnt = document.querySelector('#product_count').innerHTML;
		localStorage.setItem("product_count" , product_cnt);
	</script>
