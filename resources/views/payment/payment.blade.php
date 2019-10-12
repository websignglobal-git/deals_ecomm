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


