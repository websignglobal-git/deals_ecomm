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
					{{-- <div class="form-group">
					    <label class="lbl_chek_addrs">Full name : </label>
					    <input type="text" class="form-control input_checkaddress" id="fname_checkadd">
				   </div> --}}{{-- 
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Mobile number : </label>
					    <input type="number" class="form-control input_checkaddress" id="mbl_checkadd">
				   </div> --}}
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Address Line 1 </label>
					    <input type="text" class="form-control input_checkaddress" onblur="address1()" id="addl1_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Address Line 2</label>
					    <input type="text" class="form-control input_checkaddress" onblur="address2()" id="addl2_checkadd">
				   </div> {{-- 
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Landmark e.g. near st.xavier engg college: </label>
					    <input type="text" class="form-control input_checkaddress" id="landmark_checkadd">
				   </div> --}}
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Town/City: </label>
					    <input type="text" class="form-control input_checkaddress" onblur="city()" id="city_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">State: </label>
					    <input type="text" class="form-control input_checkaddress" onblur="state()" id="state_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Pincode : </label>
					    <input type="number" class="form-control input_checkaddress" onblur="pincode()" id="pincode_checkadd">
				   </div>
				   <div class="form-group">
					    <label class="lbl_chek_addrs">Country: </label>
					    <input type="text" class="form-control input_checkaddress" onblur="country()" id="country_checkadd">
				   </div>
				   <div class="chk_addr_btn">
					   <button type="button" onclick="chkout(this)" class="btn_chk-adrs">Continue</button>
				   </div>
				</div>
			</div>
		</div>
	</section>

{{-- by ranto --}}
	<script>
		document.getElementById('addl1_checkadd').focus()
		
		function address1() {
			var address1 = document.getElementById('addl1_checkadd')
			var add1val = address1.value
			if (add1val == "") {
				address1.style.border = '2px solid red'
				address1.focus()
				return false
			}
			address1.style.border = ""
			document.getElementById('addl2_checkadd').focus()
			return true
		}

		function address2() {
			var address2 = document.getElementById('addl2_checkadd')
			var add2val = address2.value
			if (add2val == "") {
				address2.style.border = '2px solid red'
				address2.focus()
				return false
			}
			address2.style.border = ""
			document.getElementById('city_checkadd').focus()
			return true
		}

		function city() {
			var city = document.getElementById('city_checkadd')
			var cityval = city.value
			if (cityval == "") {
				city.style.border = '2px solid red'
				city.focus()
				return false
			}
			city.style.border = ""
			document.getElementById('state_checkadd').focus()
			return true
		}

		function state() {
			var state = document.getElementById('state_checkadd')
			var stateval = state.value
			if (stateval == "") {
				state.style.border = '2px solid red'
				state.focus()
				return false
			}
			state.style.border = ""
			document.getElementById('pincode_checkadd').focus()
			return true
		}

		function pincode() {
			var pincode = document.getElementById('pincode_checkadd')
			var pinval = pincode.value
			var pinlength = pinval.length
			if (pinval == "" || pinlength > 6) {
				pincode.style.border = '2px solid red'
				pincode.focus()
				return false
			}
			pincode.style.border = ""
			document.getElementById('country_checkadd').focus()
			return true
		}

		function country() {
			var country = document.getElementById('country_checkadd')
			var countryval = country.value
			if (countryval == "") {
				country.style.border = '2px solid red'
				country.focus()
				return false
			}
			country.style.border = ""
			return true
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
	</script>
