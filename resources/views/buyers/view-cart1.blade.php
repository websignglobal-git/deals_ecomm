</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>
<?php 
	$cart_product = array(array('test.php', './assets/images/buyers/prod1.jpg','
Xiaomi Mi A2 (Black, 4GB RAM, 64GB Storage)','300'),array('test.php', './assets/images/buyers/prod2.jpg','
Xiaomi Mi A2 (Black, 4GB RAM, 64GB Storage)','500'));

?>
	<section class="end_footer">
		<div class="view_cart_cmn">
			<p class="shop_cart_head">Shopping Cart</p>
			<p class="shop_head_price">price</p>
			 @for ($i = 0; $i < count($cart_product); $i++)
			<div class="cart_product_dtl">
				<hr class="top_hr">
				<div class="sub_cmn_cart_product">
					<div class="add_cart_product_img">
						<img class="img-fluid img_view" src="<?php echo $cart_product[$i][1]; ?>">
					</div>
					<div class="add_cart_product_detail">
						<p class="name_cart_prod"><?php echo $cart_product[$i][2]; ?></p>
						<p class="stock_cart_prod">In stock</p>
						<div class="dropdown_dtl">
							<div class="form-group drop_detl">
							  <label for="sel1">Qty:</label>
							  <select class="form-control" id="sel1">
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							  </select>
							</div>
							<div class="dlt_div">
								<a href="#" class="dlt_a">Remove</a> 
							</div>
							<div class="savlater_div">
								<a href="#" class="save_later_a">save for later</a>
							</div>
						</div>
					</div>
					<div class="add_cart_product_price">
						<?php echo $cart_product[$i][3]; ?>
					</div>
				</div>
			</div>
			 @endfor
			 <hr class="bottom_hr">
			 <div class="checkout_total_amt">
			 	<span class="checkout_total_txt">Subtotal</span> <span class="checkout_total_item">(2 items)</span> : <span class="checkout_total_rs"> 1000.00</span>
			 </div>
			 <div class="checkout_btn_div">
			 	<a href="checkout" class="checkout_btn_a"><button type="button" class="checkout_btn">Check out</button></a> 
			 </div>
		</div>
	</section>