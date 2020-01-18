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
	            <h5>Create Account</h5>
	        <div class="reg_name_row">
	          <div class="reg_name">
	            <label class="name_label check_login_labl">Your Name</label>
	            <input type="text" id="reg_name" class="form-control name_text_box" name="name" placeholder="Your Full Name">
	          </div>
	        </div>
	        <div class="reg_name_row">
	          <div class="reg_mobile">
	            <label class="reg_mob_num mob_label check_login_labl">Mobile number</label>
	            <div class="reg_cmn_drop_dwn">
		            <div class="reg_mobile_num_input">
		               <input type="tel" id="reg_phone" class="form-control name_text_box" maxlength="10"  onChange="phNumber()" placeholder="Your mobile number" name="">
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="reg_name_row">
	          <div class="reg_name">
	            <label class="email_label check_login_labl">Your Email</label>
	            <input type="email" id="reg_email" class="form-control name_text_box" onChange="emailVal()" name="name" placeholder="Your E-Mail address">
	          </div>
	        </div>
	        <div class="reg_name_row">
	          <div class="reg_name">
	            <label class="pwd_label check_login_labl">Password</label>
	            <input type="text" id="reg_pass" class="form-control name_text_box" name="name" onChange="userPwd()" placeholder="Password atleast 6 characters">
	            <p class="pwd_text">Password must be atleast 6 characters</p>
	          </div>
	          <div class="pwd_req">
	            <ul class="pwd_verify">
	              <li>We will send you a text to verify your phone.</li>
	              <li>Message and Data rates may apply.</li>
	            </ul>
	          </div>
	        </div>
	        <div class="reg_contnue_btn"><button class="btn btn-success btn-block btn_reg_save btn_continue" onclick="regContinue()">Continue</button></div>
	        <div class="already_accnt"><p>Already have an account? <a href="login">Sign in</a></p></div>
	      </div>
		</div>
	</section>

<script>
	function phNumber() {
		var num = document.getElementById('reg_phone').value
		if (num.length > 10 || num.length <10 ) {
			alert("enter 10 digit number")
			document.getElementById('reg_phone').style.border = "2px solid red"
			document.getElementById('reg_phone').focus()
		} else {
			document.getElementById('reg_phone').style.border = ""
		}		
	}

	function emailVal() {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
		var email = document.getElementById('reg_email').value
		if (email.match(mailformat)) {
			document.getElementById('reg_email').style.border = ""
		} else {
			alert("enter correct email address")
			document.getElementById('reg_email').style.border = "2px solid red"
			document.getElementById('reg_email').focus()
		}
	}

	function userPwd() {
		var decimal =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;
		var password = document.getElementById('reg_pass').value;
		if (password.match(decimal)) {
			document.getElementById('reg_pass').style.border = ""
		} else{
			alert("enter a password with atleast one uppercase, one lowercase, one number and one special charcter with minimum 6 charcter and maximum 15 character")
			document.getElementById('reg_pass').style.border = "2px solid red"
			document.getElementById('reg_pass').focus()
		};
	}

	function regContinue() {
		var mainurl = localStorage.url

		var name = document.getElementById('reg_name').value
		var num = document.getElementById('reg_phone').value
		var email = document.getElementById('reg_email').value
		var password = document.getElementById('reg_pass').value

		if (name == "") {
			alert("Enter your name...")
			document.getElementById('reg_name').style.border = "2px solid red"
			document.getElementById('reg_name').focus()
		} else if (num == "") {
			document.getElementById('reg_name').style.border = ""
			alert("Enter your phone number...")
			document.getElementById('reg_phone').style.border = "2px solid red"
			document.getElementById('reg_phone').focus()
		} else if (email == "") {
			alert("Enter your email...")
			document.getElementById('reg_email').style.border = "2px solid red"
			document.getElementById('reg_email').focus()
		} else if (password == "") {
			alert("Enter the password...")
			document.getElementById('reg_pass').style.border = "2px solid red"
			document.getElementById('reg_pass').focus()
		}

		var data=JSON.stringify({
					"user_name":name,
					"user_phone":num,
					"user_email":email,
					"user_password":password});
		var type="application/json";
		var url="buyer-register";
		var asyn="true";
		var method="POST";
		var respCallback = function(resp){
			if (mainurl == "http://localhost/deals_ecomm/public/view-cart") {
				if (resp == "success") {
					window.location.href="checkout-address"
				}
				if (resp == "number exits") {
					alert("number exist")
					window.location.href="login"
				}
			} else {
				if (resp == "success") {
					window.location.href=mainurl
				}
				if (resp == "number exits") {
					alert("number exist")
					window.location.href="login"
				}
			}
		}
		var res = serverRequest(data,method,url,asyn,type,respCallback);
	}
</script>
















