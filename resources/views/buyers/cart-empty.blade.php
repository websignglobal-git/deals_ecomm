@include('common/buyer/header-scripts')
@include('common/buyer/header')
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
section.cart-empty_cmn {
    margin: 100px 30px;
}
.cart_empty_head {
    font-size: 25px;
    margin-bottom: 10px;
}
.cart_empty_sub {
    font-size: 16px;
}
</style>
<section class="cart-empty_cmn">
	<div class="cart_empty_head">
		Your Shopping Cart is empty.
	</div>
	<div class="cart_empty_sub">
		Your Shopping Cart lives to serve. Give it purpose--fill it with books, CDs, videos, DVDs, electronics, and more. If you already have an account, Sign In to see your Cart.
Continue shopping on the <a href ="Dealsofmarket.com" class="deals_link">Dealsofmarket.com</a>
	</div>
</section>
@include('common/buyer/footer')
@include('common/buyer/footer-scripts')
