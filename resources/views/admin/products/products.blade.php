{{-- admin header script --}}
@include("../common/admin/admin-header-scripts")
{{-- admin left menu --}}
@include("../common/admin/admin-left-menu")
<section id="contents">
	{{-- admin header --}}
	@include("../common/admin/admin-header")
	<div class="welcome cmnhght">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h2>Products</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cmnhght" id="btncls">
		<div class="row">
			<div class="col">
				<button class="btn btn-outline-light" type="button" onclick="frstDropdown()"><i class="fa fa-plus-circle addbtn"></i></button>
			</div>
		</div>
	</div>
	<div class="container-fluid cmnhght" id="canclbtn">
		<div class="row">
			<div class="col">
				<button class="btn btn - btn-outline-danger" type="button" onclick="canclBtn()"><i class="fa fa-times"></i>Cancel</button>
			</div>
		</div>
	</div>
	<div class="container-fluid cmnhght">
		<div class="row">
			<div class="col">
				<div id="productdiv">
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cmnhght" id="nxtbtn">
		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-outline-light" onclick="nxtBtn()">Next</button>
			</div>
		</div>
	</div>
	<div id="frmDiv" class="container">
		<form>
			<div class="form-group">
				<label class="form-label">Product Name</label>
				<div class="">
					<input type="text" class="form-control" placeholder="Enter your Product Name here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Product Description</label>
				<div class="2">
					<textarea type="text" id="txtEditor" class="form-control" placeholder=""></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Poduct Price</label>
				<div class="">
					<input type="number" class="form-control" placeholder="Product Price">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Discount %</label>
				<div class="">
					<input type="number" class="form-control" placeholder="Distount %">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Quantity</label>
				<div class="">
					<input type="number" class="form-control" placeholder="Enter number of quantity here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Shipping Methods</label>
				<div class="form-check">
					<label class="form-check-label"><input type="checkbox" class="form-check-input">Credit Card Payment</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input type="checkbox" class="form-check-input">Debit Card Payment</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input type="checkbox" class="form-check-input">EMI Options</label>
				</div>
				<div class="form-check">
					<label class="form-check-label"><input type="checkbox" class="form-check-input">Cash on Delivery</label>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Manufacturer</label>
				<div class="">
					<input type="text" class="form-control" placeholder="Enter Manufacturer name...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Choose images to upload</label>
			  	<div class="custom-file">
			    	<input type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-3">
					<label class="">Select Specifications</label>
					<select class="form-control" name="attributeTitle">
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
					</select>
				</div>
				<div class="col-md-2"></div>
				<div class="form-group col-md-5">
					<label class="">Enter Value</label>
					<input type="text" class="form-control" name="attributeAnswer">
				</div>
				<div class="form-group col-md-1 d-flex align-items-end justify-content-end">
					<label style="padding-top: 47px;"></label>
					<button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
				</div>
				<div class="form-group col-md-1 d-flex align-items-end justify-content-end">
					<label style="padding-top: 47px;"></label>
					<button type="button" class="btn btn-outline-info" onclick="addAttribute()"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div id="attributeID" class="form-row">
				
			</div>
		</form>
	</div>
</section>
{{-- admin footer script --}}
@include("../common/admin/admin-footer-scripts")
{{-- admin footer --}}
@include("../common/admin/admin-footer")