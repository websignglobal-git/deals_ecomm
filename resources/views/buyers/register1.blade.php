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
	            <input type="text" id="reg_name" class="form-control name_text_box" onKeyup="nameval('keyup')"  onChange="nameval('change')" name="name" placeholder="Your Full Name">
	          </div>
	        </div>
	        <div class="reg_name_row">
	          <div class="reg_mobile">
	            <label class="reg_mob_num mob_label check_login_labl">Mobile number</label>
	            <div class="reg_cmn_drop_dwn">
		            <div class="reg_mobile_num_input">
		               <input type="tel" id="reg_phone" class="form-control name_text_box" maxlength="10" onKeyup="phNumber('keyup')"  onChange="phNumber('change')" placeholder="Your mobile number" name="">
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="reg_name_row">
	          <div class="reg_name">
	            <label class="email_label check_login_labl">Your Email</label>
	            <input type="email" id="reg_email" class="form-control name_text_box" onKeyup="emailVal('keyup')" onChange="emailVal('change')" name="name" placeholder="Your E-Mail address">
	          </div>
	        </div>
	        <div class="reg_name_row">
	          <div class="reg_name">
	            <label class="pwd_label check_login_labl">Password</label>
	            <input type="password" id="reg_pass" class="form-control name_text_box" name="name" onKeyup="userPwd('keyup')" onChange="userPwd('change')" placeholder="Password atleast 6 characters">
	            <input type="checkbox" class="mrg_btm_psw" onclick="passwordvisible()">Show Password
	            <p class="pwd_text">Password must be atleast 6 characters</p>
	          </div>
	          <div class="pwd_req">
	            <ul class="pwd_verify">
	              <li>We will send you a text to verify your phone.</li>
	              <li>Message and Data rates may apply.</li>
	            </ul>
	          </div>
	        </div>
	        <div class="reg_contnue_btn"><button class="btn btn-success btn-block btn_reg_save btn_continue" id="myBtn" onclick="regContinue()">Continue</button></div>
	        <div class="already_accnt"><p>Already have an account? <a href="login">Sign in</a></p></div>
	      </div>
		</div>
	</section>

<script>
	function passwordvisible() {
	  var x = document.getElementById("reg_pass");
	  if (x.type === "password") {
	    x.type = "text";
	  } else {
	    x.type = "password";
	  }
	}
	function nameval(e) {
		var num = document.getElementById('reg_name').value
		if (num.length < 3) {
			if(e=='change')
			alertify.alert('Please enter the correct Name').set({title:"Deals Of Market"});
			document.getElementById('reg_name').style.border = "1px solid red"
		} else {
			document.getElementById('reg_name').style.border = ""
		}		
	}

	function phNumber(e) {
		var num = document.getElementById('reg_phone').value
		if (num.length > 10 || num.length <10 ) {
			if(e=='change')
			alertify.alert('Please enter 10 digit number').set({title:"Deals Of Market"});
			document.getElementById('reg_phone').style.border = "1px solid red"
		} else {
			document.getElementById('reg_phone').style.border = ""
		}		
	}

	function emailVal(e) {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
		var email = document.getElementById('reg_email').value
		if (email.match(mailformat)) {
			document.getElementById('reg_email').style.border = ""
		} else {
			if(e=='change')
			alertify.alert('enter correct email address').set({title:"Deals Of Market"});
			document.getElementById('reg_email').style.border = "1px solid red"
		}
	}

	function userPwd(e) {
		var decimal =  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/;
		var password = document.getElementById('reg_pass').value;
		if (password.match(decimal)) {
			document.getElementById('reg_pass').style.border = ""
		} else{
			if(e=='change')
			alertify.alert('enter a password with atleast one uppercase, one lowercase, one number and one special charcter with minimum 6 charcter and maximum 15 character').set({title:"Deals Of Market"});
			document.getElementById('reg_pass').style.border = "1px solid red"
		};
	}

	function regContinue() {
		var mainurl = localStorage.url

		var name = document.getElementById('reg_name').value
		var num = document.getElementById('reg_phone').value
		var email = document.getElementById('reg_email').value
		var password = document.getElementById('reg_pass').value

		if (name == "") {
			alertify.alert('Enter your name...').set({title:"Deals Of Market"});
			document.getElementById('reg_name').style.border = "1px solid red"
			document.getElementById('reg_name').focus()
		} else if (num == "") {
			document.getElementById('reg_name').style.border = ""
			alertify.alert('Enter  your phone number...').set({title:"Deals Of Market"});
			document.getElementById('reg_phone').style.border = "1px solid red"
			document.getElementById('reg_phone').focus()
		} else if (email == "") {
			alertify.alert('Enter  your email...').set({title:"Deals Of Market"});
			document.getElementById('reg_email').style.border = "1px solid red"
			document.getElementById('reg_email').focus()
		} else if (password == "") {
			alertify.alert('Enter  your password...').set({title:"Deals Of Market"});
			document.getElementById('reg_pass').style.border = "1px solid red"
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

		var input = document.getElementById("reg_pass");
		input.addEventListener("keyup", function(event) {
		  if (event.keyCode === 13) {
		   event.preventDefault();
		   document.getElementById("myBtn").click();
		  }
		});
</script>
















