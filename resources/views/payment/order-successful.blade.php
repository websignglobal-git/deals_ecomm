@include('common/buyer/header-scripts')
@include('common/buyer/header')
<?php if(session_status() == PHP_SESSION_NONE){session_start();} ?>

@if(isset($_SESSION["user_id"]))
	@include('payment/order-successful1')
@else
	@include('buyers/login1')
@endif

@include('common/buyer/footer')
@include('common/buyer/footer-scripts')