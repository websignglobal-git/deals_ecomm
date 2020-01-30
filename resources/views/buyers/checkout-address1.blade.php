</section>
<style type="text/css">
.header_bg_clr{
	background: transparent;
}
body{
	background-color: #fff;
}
</style>
	<section class="checkout_address_cmn">
		<div class="checkout_address_main">
			<div class="checkout_logo">
				<p class="logo_checkout"><a href="#" class="logo_a">Deals of market</a></p>
			</div>
			<div class="checkout_del_address">
				<p class="delivery_head">Select a delivery address</p>
				<p class="delivery_txt">Enter the name and address you'd like your order to be delivered to. Please indicate also whether your invoice address is the same as the delivery address entered. When finished, click the "Continue" button.</p>
			</div>
			<hr class="chekout_addr_hr">
			<div class="cmn_form_chekout_addr">
				<p class="address_head">Enter a new delivery address.</p>
				<p class="address_head1">When finished, click the "Continue" button.</p>
				<div class="cmn">
					<!-- {{-- <div class="form-group">
					    <label class="lbl_chek_addrs">Full name : </label>
					    <input type="text" class="form-control input_checkaddress" id="fname_checkadd">
				   </div> --}}{{-- 
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Mobile number : </label>
					    <input type="number" class="form-control input_checkaddress" id="mbl_checkadd">
				   </div> --}} -->
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Address Line 1 </label>
					    <input type="text" class="form-control input_checkaddress"  onKeyup="address1('keyup')"  onChange="address1('change')" id="addl1_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Address Line 2</label>
					    <input type="text" class="form-control input_checkaddress" onKeyup="address2('keyup')"  onChange="address2('change')" id="addl2_checkadd">
				   </div> {{-- 
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Landmark e.g. near st.xavier engg college: </label>
					    <input type="text" class="form-control input_checkaddress" id="landmark_checkadd">
				   </div> --}}
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Town/City: </label>
					    <input type="text" class="form-control input_checkaddress" onKeyup="city('keyup')"  onChange="city('change')" id="city_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">State: </label>
					    <input type="text" class="form-control input_checkaddress" onKeyup="state('keyup')"  onChange="state('change')" id="state_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Pincode : </label>
					    <input type="number" class="form-control input_checkaddress" onKeyup="pincode('keyup')"  onChange="pincode('change')" id="pincode_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Country: </label>
					    <input type="text" class="form-control input_checkaddress" onKeyup="country('keyup')"  onChange="country('change')" id="country_checkadd">
				   </div>
				   <div class="chk_addr_btn">
					   <button type="button" onclick="chkout(this)" class="btn_chk-adrs">Continue</button>
				   </div>
				</div>
			</div>
		</div>
	</section>

	<script>
		function address1(e) {
			var address1val = document.getElementById('addl1_checkadd').value;
			if (address1val.length < 3) {
				if(e=='change')
				alertify.alert('Please enter the address').set({title:"Deals Of Market"});
				document.getElementById('addl1_checkadd').style.border = "1px solid red"
			}
			else {
				document.getElementById('addl1_checkadd').style.border = ""
			}
		}

		function address2(e) {
			var address2val = document.getElementById('addl2_checkadd').value
			if (address2val == "") {
				if(e=='change')
				alertify.alert('Please enter the address').set({title:"Deals Of Market"});
				document.getElementById('addl2_checkadd').style.border = "1px solid red"
			}
			else {
				document.getElementById('addl2_checkadd').style.border = ""
			}
		}

		function city(e) {
			var cityval = document.getElementById('city_checkadd').value
			if (cityval == "") {
				if(e=='change')
				alertify.alert('Please enter the city').set({title:"Deals Of Market"});
				document.getElementById('city_checkadd').style.border = "1px solid red"
			}
			else {
				document.getElementById('city_checkadd').style.border = ""
			}
		}

		function state(e) {
			var stateval = document.getElementById('state_checkadd').value
			if (stateval == "") {
				if(e=='change')
				alertify.alert('Please enter the state').set({title:"Deals Of Market"});
				document.getElementById('state_checkadd').style.border = "1px solid red"
			}
			else {
				document.getElementById('state_checkadd').style.border = ""
			}
		}

		function pincode(e) {
			var pinval = document.getElementById('pincode_checkadd').value
			if (pinval == "") {
				if(e=='change')
				alertify.alert('Please enter the state').set({title:"Deals Of Market"});
				document.getElementById('pincode_checkadd').style.border = "1px solid red"
			}
			else {
				document.getElementById('pincode_checkadd').style.border = ""
			}
		}

		function country(e) {
			var countryval = document.getElementById('country_checkadd').value
			if (countryval == "") {
				if(e=='change')
				alertify.alert('Please enter the state').set({title:"Deals Of Market"});
				document.getElementById('country_checkadd').style.border = "1px solid red"
			}
			else {
				document.getElementById('country_checkadd').style.border = ""
			}
		}

		function chkout(e) {


			// var fullname = document.getElementById('fname_checkadd').value
			// var mblnum = document.getElementById('mbl_checkadd').value
			var pincod = document.getElementById('pincode_checkadd').value
			var address1 = document.getElementById('addl1_checkadd').value
			var address2 = document.getElementById("addl2_checkadd").value
			// var landamrk = document.getElementById('landmark_checkadd').value
			var city = document.getElementById('city_checkadd').value
			var state = document.getElementById('state_checkadd').value
			var country = document.getElementById('country_checkadd').value

			if (address1 == "") {
				alertify.alert('Enter your address1...').set({title:"Deals Of Market"});
				document.getElementById('addl1_checkadd').style.border = "1px solid red"
				document.getElementById('addl1_checkadd').focus()
			} else if (address2 == "") {
				document.getElementById('addl2_checkadd').style.border = ""
				alertify.alert('Enter  your phone address2...').set({title:"Deals Of Market"});
				document.getElementById('addl2_checkadd').style.border = "1px solid red"
				document.getElementById('addl2_checkadd').focus()
			} else if (city == "") {
				alertify.alert('Enter  your city...').set({title:"Deals Of Market"});
				document.getElementById('city_checkadd').style.border = "1px solid red"
				document.getElementById('city_checkadd').focus()
			} else if (state == "") {
				alertify.alert('Enter  your State...').set({title:"Deals Of Market"});
				document.getElementById('state_checkadd').style.border = "1px solid red"
				document.getElementById('state_checkadd').focus()
			}
			else if (country == "") {
				alertify.alert('Enter  your Country...').set({title:"Deals Of Market"});
				document.getElementById('country_checkadd').style.border = "1px solid red"
				document.getElementById('country_checkadd').focus()
			}
			else{

				var dataJson = JSON.stringify({
					"pincode": pincod,
					"addressline1": address1,
					"addressline2": address2,
					"city": city,
					"state": state,
					"country": country,
				})

				var data = dataJson;
		        var type = "application/json";
		        var url = "buyers/add_address";
		        var asyn = "true";
		        var method = "POST";
		        var respCallback = function(resp) {
		            if (resp == "success") {
		            	window.location.href = "payment-methode"
		            };
		            if (resp == "error") {
		                alert("Error saving the data");
		            };
		        }
		        var res = serverRequest(data, method, url, asyn, type, respCallback);
			}
	}
	</script>
