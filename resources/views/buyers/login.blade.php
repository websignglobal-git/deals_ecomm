@include('common/buyer/header-scripts')
<?php session_start(); ?>

@if(isset($_SESSION["user_id"]))
	@include('buyers/my-account')
@else
	@include('buyers/login1')
@endif

@include('common/buyer/footer-scripts')
<script type="text/javascript" src="assets/js/login.js"></script>