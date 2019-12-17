</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>
	<section class="checkout_cmn">
		<div class="checkout_main">
			<div class="checkout_logo">
				<p class="logo_checkout"><a href="#" class="logo_a">Deals of market</a></p>
			</div>
			<div class="checkout_cmn_login">
				<p class="login_p">Login</p>
				<p class="check_login_labl">Phone Number</p>
				<div class="form-group">
				    <input type="tel" id="login_number" class="form-control mail_num_checkout" maxlength="10">
			    </div>
			    <p class="check_login_labl">Password</p>
			    <div class="form-group">
				    <input type="password" id="login_pass" class="form-control mail_num_checkout">
			    </div>
			    <div class="chkout_coninue_btn">
				  <button class="continue_btn btn_click_save" onclick="continuelogin()" type="button">Continue</button>
			    </div>
			    <div class="forget_pass_checkout">
			    	<details>
			    		<summary>Need Help?</summary>
			    		<a href="#" class="forgt_pass">Forget password</a>
			    	</details>
			    </div>
			</div>
			<div class="cmn_signup_checkout">
				<hr class="chckout_hr1"><p class="chckout_hr_p">New to Deals of market?</p><hr class="chckout_hr2">
			</div>
			<div class="cmn_signup_btn">
				<a href="register" class="sign_btn_a"><button class="sign_btn_choutpg">Create Your deals of market account</button></a>
			</div>
		</div>
	</section>

	<script>
		function continuelogin() {
			var mainurl = localStorage.url
			var num = document.getElementById('login_number').value
			var pass = document.getElementById('login_pass').value

			if (num == "") {
				alert("Enter your number...")
				document.getElementById('login_number').style.border = "2px solid red"
				document.getElementById('login_number').focus()
			} else if (pass == "") {
				document.getElementById('login_number').style.border = ""
				alert("Enter your password...")
				document.getElementById('login_pass').style.border = "2px solid red"
				document.getElementById('login_pass').focus()
			}
			document.getElementById('login_pass').style.border = ""

			var data = JSON.stringify({
	            "num": num,
	            "pass": pass
	        });
	        var type = "application/json";
	        var url = "buyer-login";
	        var asyn = "true";
	        var method = "POST";

	        var respCallback = function(resp) {
	            	console.log(resp)
	            if (resp == '"success"') {
	            	window.location.href = localStorage.url
	            }

	            if (resp == '"error"') {
	            	alert('Incorrect Phone Number or Password')
	            }
	        }
	        var res = serverRequest(data, method, url, asyn, type, respCallback);
		}
	</script>