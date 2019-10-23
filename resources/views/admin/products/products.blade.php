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
					<input type="email" class="form-control" placeholder="Enter your Product Name here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Product Description</label>
				<div class="2">
					<textarea id="txtEditor" class="form-control" placeholder=""></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Poduct Price</label>
				<div class="">
					<input type="email" class="form-control" placeholder="Product Price">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Discount %</label>
				<div class="">
					<input type="email" class="form-control" placeholder="Distount %">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Quantity</label>
				<div class="">
					<input type="email" class="form-control" placeholder="Enter number of quantity here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Shipping Methods</label>
				<div class="">
					<input type="email" class="form-control" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Manufacturer</label>
				<div class="">
					<input type="email" class="form-control" placeholder="Enter Manufacturer name...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Email</label>
				<div class="">
					<input type="email" class="form-control" placeholder="Email">
				</div>
			</div>
			<label class="form-label">Select Specifications</label>
			<div class="form-row">
				<div id="attributeList" class="form-group col-md-4">
					<select name="AttributeList" class="custom-select form-control">
						<option value="">select</option>
					</select>
				</div>
				<div class="col-md-1"></div>
				<div class="form-group col-md-5">
					<input type="text" class="form-control" placeholder="Enter the Specifications...">
				</div>
				<div class="form-group col-md-1 d-flex justify-content-end">
					<button class="btn btn-outline-danger" type="button"><i class="fa fa-trash"></i></button>
				</div>
				<div class="form-group col-md-1 d-flex justify-content-end">
					<button class="btn btn-outline-primary" type="button"><i class="fa fa-plus-circle"></i></button>
				</div>
			</div>
		</form>
	</div>
</section>
{{-- admin footer script --}}
@include("../common/admin/admin-footer-scripts")
{{-- admin footer --}}
@include("../common/admin/admin-footer")