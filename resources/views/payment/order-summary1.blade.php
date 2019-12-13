</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>

	<section class="payment_methode_cmn">
		<div class="order_summary_main">
			<div class="checkout_logo">
				<p class="logo_checkout"><a href="#" class="logo_a">Deals of market</a></p>
			</div>
			<div class="payment_meth_head">
				<p class="payment_meth_head1">Review your order</p>
			</div>
			<div class="order_sum_paymethode">
				<div class="order_sum_ship">
					<p class="order_sum_shiping">Shipping address</p> {{-- <a href="" class="change_methodes">(Change)</a> --}}
					<div class="order_sum_addrss">
						<p id="customername" class=""></p>
						<p id="cutomernumber" class=""></p>
						<p id="cutomeremail" class=""></p>
						<p id="address1" class=""></p>
						<p id="address2" class=""></p>
						<p id="city" class=""></p>
						<p id="statepin" class=""></p>
						<p id="country" class=""></p>
					</div>
				</div>
				<div class="order_sum_payment">
					<p class="order_sum_paytype">Payment Method</p> {{-- <a href="" class="change_methodes">(Change)</a> --}}
					<div class="order_sum_addrss">
						<p id="paymethod" class=""></p>
					</div>
				</div>
			</div>
			<div class="delivery_detail_summary">
				<p class="estimate_date">Estimated delivery:  16 Oct 2019 - 18 Oct 2019</p>
				<div class="delivery_date_cmn">
					<div id="productImg" class="delivery_things">
						{{-- <img src="" class="img-fluid img_delvry_date"> --}}
					</div>
					<div class="delivery_things_detl">
						<p id="prodName" class=""></p>
						<p id="prodPrice" class=""></p>
						<p id="prodDiscountpercentage" class=""></p>
						<p id="prodDiscount" class=""></p>
						<p id="" class=""></p>
					</div>
				</div>
			<div class="delivery_place_order">
				{{-- <a href="order-successful"></a> --}}
				<button type="button" onclick="payment()" class="order_summary_btn">Place your order</button>
			</div>
			</div>
		</div>
	</section>
	    <script type="text/javascript" src="{{ URL::asset('assets/js/server-request.js')}}"></script>
	<script>
		orderSummary()
		function orderSummary() {
			var prodID = localStorage.getItem("buynow_prod_id")
			var paymethod = localStorage.getItem("paymethd")
			if (paymethod == "ccpay") {
				document.getElementById('paymethod').innerHTML = "Credit Card Payment"
			};
			if (paymethod == "dcpay") {
				document.getElementById('paymethod').innerHTML = "Debit Card Payment"
			};
			if (paymethod == "emipay") {
				document.getElementById('paymethod').innerHTML = "EMI Payment"
			};
			if (paymethod == "codpay") {
				document.getElementById('paymethod').innerHTML = "Cash on Delivery Payment"
			};

			var data = "";
		    var type = "application/x-www-form-urlencoded";
		    var url = "buyers/get_user_details";
		    var asyn = "true";
		    var method = "POST";
		    var respCallback = function(resp) {
		    	var response = JSON.parse(resp)
		    	document.getElementById('customername').innerHTML = response[0].user_name
		    	document.getElementById('cutomernumber').innerHTML = response[0].user_phone
		    	document.getElementById('cutomeremail').innerHTML = response[0].user_email	
		    }
    		var res = serverRequest(data, method, url, asyn, type, respCallback);var data = "";

    		var data = "";
		    var type = "application/x-www-form-urlencoded";
		    var url = "buyers/get_user_address";
		    var asyn = "true";
		    var method = "POST";
		    var respCallback = function(resp) {
		    	var response = JSON.parse(resp)
		    	document.getElementById('address1').innerHTML = response[0].user_addressline1
		    	document.getElementById('address2').innerHTML = response[0].user_addressline2
		    	document.getElementById('city').innerHTML = response[0].user_city
		    	document.getElementById('statepin').innerHTML = response[0].user_state + '&nbsp; - &nbsp;' + response[0].user_pincode
		    	document.getElementById('country').innerHTML = response[0].user_country
		    }
    		var res = serverRequest(data, method, url, asyn, type, respCallback);var data = "";

    		var data = JSON.stringify({'id': prodID})
		    var type = "application/json";
		    var url = "buyers/get_product_details";
		    var asyn = "true";
		    var method = "POST";
		    var respCallback = function(resp) {
		    	var response = JSON.parse(resp)
		    	var name = response[0].home_product_name
		    	var priceJson = response[0].home_product_amount
		    	var price = JSON.parse(priceJson).cost
		    	var discountPerctentage = JSON.parse(priceJson).discount
		    	var discount = JSON.parse(priceJson).actual_price
		    	var imagejson = JSON.parse(response[0].home_product_images)
		    	var image = imagejson[0]
						
		    	document.getElementById('productImg').innerHTML = '<img src="'+ image +'" class="img-fluid img_delvry_date">'
		    	document.getElementById('prodName').innerHTML = name
		    	document.getElementById('prodPrice').innerHTML = price
		    	document.getElementById('prodDiscountpercentage').innerHTML = discountPerctentage
		    	document.getElementById('prodDiscount').innerHTML = discount
		    }
    		var res = serverRequest(data, method, url, asyn, type, respCallback);
		}

		function payment() {
			var paymethod = localStorage.getItem("paymethd")
			if (paymethod == "ccpay") {
				window.location.href = "payment"
			};

			if (paymethod == "dcpay") {
				window.location.href = "payment"
			};

			if (paymethod == "emipay") {
				window.location.href = "payment"
			};

			if (paymethod == "codpay") {
				window.location.href = "order-successful"
			};
		}	
	</script>