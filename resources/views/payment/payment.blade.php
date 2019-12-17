@include('common/buyer/header-scripts')
<?php session_start(); ?>

@if(isset($_SESSION["user_id"]))
	@include('payment/payment1')
@else
	@include('buyers/login1')
@endif

@include('common/buyer/footer-scripts')