</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>
	<section>
		<div>
			<h1>U have logged in</h1>
			<button onclick="home()">Home</button>
		</div>
	</section>

	<script>
		function home() {
			console.log(localStorage.url)
			window.location.href = localStorage.url
		}
	</script>