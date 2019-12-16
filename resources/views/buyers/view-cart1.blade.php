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
			<div class="cmn_cart_prodcts">

			</div>
			 <hr class="bottom_hr">
			 <div class="checkout_total_amt">
			 	<span class="checkout_total_txt">Subtotal</span> <span class="checkout_total_item">(2 items)</span> : <span class="checkout_total_rs"> 1000.00</span>
			 </div>
			 <div class="checkout_btn_div">
			 	{{-- <a href="login" class="checkout_btn_a"></a> --}}
			 	<button type="button" onclick="checkout()" class="checkout_btn">Check out</button> 
			 </div>
		</div>
	</section>

	<script>
		function checkout() {
			var url = window.location.href
			localStorage.setItem("url", url)
			window.location.href="login"
		}
	</script>
