</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>
<div class="cmn_payment_pg">
	<div class="cmn_payment_pg_main">
		<div class="checkout_logo">
			<p class="logo_checkout"><a href="#" class="logo_a">Deals of market</a></p>
		</div>
	</div>
	<div class="cmn_payment_pg_box">
		<div class="razay_pay_img"> <img src="./assets/images/buyers/razarpay.png" class="img-fluid razar_img"></div>
		<form action="make-payment" class="pay_none" id="payselt11" method="POST">
		                <!-- Note that the amount is in paise = 50 INR -->
		    <script
		        src="https://checkout.razorpay.com/v1/checkout.js"
		        data-key="rzp_test_x5YBIwSw9JnKCx"
		        data-amount="500"
		        data-buttontext="Pay with Razorpay"
		        data-name="Deals of Market"
		        data-description="Deals of market payment"
		        data-image="assets/images/common/cart.png"
		        data-prefill.name="meltas"
		     	data-prefill.email="krishprathee@gmail.com"
		        data-theme.color="#0a507d"
		    ></script>
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <input type="hidden" value="Hidden Element" name="hidden">
		</form>
	</div>
</div>