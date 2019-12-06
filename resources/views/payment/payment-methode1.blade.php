</section>
<style type="text/css">
	.header_bg_clr {
		background: transparent;
	}

	body {
		background-color: #fff;
	}

	.loader-bar {
		display: none;
		position: fixed;
		z-index: 1000;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		/*background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/disp/04de2e31234507.564a1d23645bf.gif');*/
		background-image: url('assets/images/loader/cart_loader.gif');
		background-position: 50% 50%;
		background-color: rgba(225,225,225,0.5);
		background-repeat: no-repeat;
	}

	body.loading {
		overflow: hidden;
	}

	body.loading .loader-bar {
		display: block;
	}

	.errordiv {
		color: red;
		font-size: 20px;
	}

	.image {
		display: flex;
		justify-content: space-around;
	}
</style>
	<section class="payment_methode_cmn">
		<div class="loader-bar">
		
		</div>
		<div class="payment_methode_main">
			<div class="checkout_logo">
				<p class="logo_checkout"><a href="#" class="logo_a">Deals of market</a></p>
			</div>
			<div class="payment_meth_head">
				<p class="payment_meth_head1">Select a payment method</p>
			</div>
			<div class="payment_meth_sub">
				<div class="payment_meth_box">
					<p class="paybox_head">Enter how you'd like to pay below, and we'll save it as an option.</p>
				</div>
				<p class="paybox_sub_head">Another payment method</p>
				<hr class="pay_hr">
				<div class="pay_methods">
					<div class="radio cmn_payopyin">
				      <label id="ccpayment" class="optio_radio1"><input type="radio" id="creditcardpay" class="optio_input" name="optradio">Credit Card Payment</label>
				    </div>
				    <div class="radio cmn_payopyin">
				      <label id="dcpayment" class="optio_radio1"><input type="radio" id="debitcardpay" class="optio_input" name="optradio">Debit Card Payment</label>
				    </div>
				    <div class="radio cmn_payopyin">
				      <label id="emipayment" class="optio_radio1"><input type="radio" id="emipay" class="optio_input" name="optradio">EMI Payment</label>
				    </div>
				    <div class="radio cmn_payopyin">
				      <label id="codpayment" class="optio_radio1"><input type="radio" id="codpay" class="optio_input" name="optradio">Cash on devlivery</label>
				    </div>
				    <div class="pay_meth_btn">
				    	{{-- <a href="order-summary"></a> --}}
				    	<button type="button" id="paymentmthd" onclick="paymentmtd()" class="pay_methode_btn">Continue</button>
				    </div>
				</div>
			</div>
		</div>
	</section>

{{-- by ranto --}}
	<script>
		document.body.className = "loading"

		function getPaymentmthd() {
			var id = localStorage.buynow_prod_id
			var data = JSON.stringify({'id':id})
		    var type = "application/json";
		    var url = "buyers/get_payment_method";
		    var asyn = "true";
		    var method = "POST";

		    var respCallback = function(resp) {
		    	var response = JSON.parse(resp)
		    	var paymethd = JSON.parse(response[0].home_product_payment_method)
		    	var ccpay = paymethd.Credit_card_Payment
		    	var dcpay = paymethd.Debit_card_Payment
		    	var emipay = paymethd.EMI_Pay
		    	var codpay = paymethd.Cash_on_Delivery
		    	if (ccpay == "") {
		    		document.getElementById('creditcardpay').disabled = true;
		    		document.getElementById('ccpayment').style.background = "rgba(0,0,0,0.6)";
		    	};

		    	if (dcpay == "") {
		    		document.getElementById('debitcardpay').disabled = true;
		    		document.getElementById('dcpayment').style.background = "rgba(0,0,0,0.6)";
		    	};

		    	if (emipay == "") {
		    		document.getElementById('emipay').disabled = true;
		    		document.getElementById('emipayment').style.background = "rgba(0,0,0,0.6)";
		    	};

		    	if (codpay == "") {
		    		document.getElementById('codpay').disabled = true;
		    		document.getElementById('codpayment').style.background = "rgba(0,0,0,0.6)";
		    	};
			document.body.className = ""
		    }
		    var res = serverRequest(data, method, url, asyn, type, respCallback);
		}

		function paymentmtd() {
			var ccpay = document.getElementById('creditcardpay')
			var dcpay = document.getElementById('debitcardpay')
			var emipay = document.getElementById('emipay')
			var codpay = document.getElementById('codpay')
			if (ccpay.checked) {
				localStorage.setItem('paymethd', 'ccpay')
				window.location.href = "order-summary"
			}

			if (dcpay.checked) {
				localStorage.setItem('paymethd', 'dcpay')
				window.location.href = "order-summary"
			}

			if (emipay.checked) {
				localStorage.setItem('paymethd', 'emipay')
				window.location.href = "order-summary"
			}

			if (codpay.checked) {
				localStorage.setItem('paymethd', 'codpay')
				window.location.href = "order-summary"
			}
		}
	</script>