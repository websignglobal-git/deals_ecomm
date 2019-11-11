{{-- admin header script --}}
@include("../common/admin/admin-header-scripts")
{{-- admin left menu --}}
@include("../common/admin/admin-left-menu")
<section id="contents">
	{{-- admin header --}}
	@include("../common/admin/admin-header")

	<div class="welcome">
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

	<div class="container-fluid" id="btncls">
		<div class="row">
			<div class="col">
				<button class="btn btn-outline-light" type="button" onclick="frstDropdown()"><i class="fa fa-plus-circle addbtn"></i></button>
			</div>
		</div>
	</div>

	<div class="container-fluid" id="canclbtn">
		<div class="row">
			<div class="col">
				<button class="btn btn - btn-outline-danger" type="button" onclick="canclBtn()"><i class="fa fa-times"></i>Cancel</button>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div id="productdiv">
					
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" id="nxtbtn">
		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-outline-light" onclick="nxtBtn()">Next</button>
			</div>
		</div>
	</div>

	<div id="frmDiv"  class="container">
		<form name="prodForm">
			<div class="form-group">
				<label for="prodName" class="form-label">Product Name</label>
				<div class="">
					<input name="prodName" type="text" class="form-control" onblur="prodName_validate()" placeholder="Enter your Product Name here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Product Description</label>
				<div class="">
					<textarea name="prodDescription" id="txtEditor" type="text" class="form-control" placeholder="Enter Description Here..."></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="prodPrice" class="form-label">Actual Price</label>
				<div class="">
					<input name="prodPrice" type="number" class="form-control" onblur="prodPrice_validate()" placeholder="Product Price">
				</div>
			</div>
			<div class="form-group">
				<label for="prodDiscount" class="form-label">Discount %</label>
				<div class="">
					<input name="prodDiscount" type="number" class="form-control" onblur="prodDiscount_validate()" placeholder="Distount %">
				</div>
			</div>
			<div class="form-group">
				<label for="prodDiscountPrice" class="form-label">Discount Price</label>
				<div class="">
					<input name="prodDiscountPrice" type="number" class="form-control" onblur="prodDiscountPrice_validate()" placeholder="Product Discount Price">
				</div>
			</div>
			<div class="form-group">
				<label for="prodQuantity" class="form-label">Quantity</label>
				<div class="">
					<input name="prodQuantity" type="number" class="form-control" onblur="prodQuantity_validate()" placeholder="Enter number of quantity here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Payment Method</label>
				<div class="form-check">
					<label for="creditcardPayment" class="form-check-label"><input name="creditcardPayment" type="checkbox" value="ccpay" class="form-check-input" checked="checked">Credit Card Payment</label>
				</div>
				<div class="form-check">
					<label for="debitcardPayment" class="form-check-label"><input name="debitcardPayment" type="checkbox" value="dcpay" class="form-check-input" checked="checked">Debit Card Payment</label>
				</div>
				<div class="form-check">
					<label for="emiPayment" class="form-check-label"><input name="emiPayment" type="checkbox" value="emipay" class="form-check-input" checked="checked">EMI Options</label>
				</div>
				<div class="form-check">
					<label for="codPayment" class="form-check-label"><input name="codPayment" type="checkbox" value="codpay" class="form-check-input" checked="checked">Cash on Delivery</label>
				</div>
			</div>
			<div class="form-group">
				<label for="prodManufacturer" class="form-label">Manufacturer</label>
				<div class="">
					<input name="prodManufacturer" type="text" class="form-control" onblur="prodManufacturer_validate()" placeholder="Enter Manufacturer name...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Choose images to upload</label>
			  	<div class="custom-file">
			    	<input name="productImg1" type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input name="productImg2" type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input name="productImg3" type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input name="productImg4" type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<div class="form-group">
			  	<div class="custom-file">
			    	<input name="productImg5" type="file" class="custom-file-input">
			    	<label class="custom-file-label">Choose file</label>
			  	</div>
			</div>
			<label class="form-label">Select Specifications</label>
			<div id="attr1">
				<div class="form-row">
					<div id="attributeList" class="form-group col-md-5"></div>
					<div class="col-md-3"></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"></div>
					<div class="form-check form-group text-right col-md-2">
						<label for="productAttr" class="form-check-label"><input name="productAttr" type="checkbox" class="form-check-input productAttr">Highlight</label>
					</div>
				</div>
				<div class="form-group">
					<textarea name="prodSpecs" id="txtAttrid1" type="text" class="form-control" placeholder="Enter Description Here..."></textarea>
				</div>
			</div>
			<div id="attr2">
				<div class="form-row">
					<div id="attributeList1" class="form-group col-md-5"></div>
					<div class="col-md-3"></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"></div>
					<div class="form-check form-group text-right col-md-2">
						<label for="productAttr" class="form-check-label"><input name="productAttr" type="checkbox" class="form-check-input productAttr">Highlight</label>
					</div>
				</div>
				<div class="form-group">
					<textarea name="prodSpecs" type="text" id="txtAttrid2" class="form-control" placeholder="Enter Description Here..."></textarea>
				</div>
			</div>
			<div id="attr3">
				<div class="form-row">
					<div id="attributeList2" class="form-group col-md-5"></div>
					<div class="col-md-3"></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"></div>
					<div class="form-check form-group text-right col-md-2">
						<label for="productAttr" class="form-check-label"><input name="productAttr" type="checkbox" class="form-check-input productAttr">Highlight</label>
					</div>
				</div>
				<div class="form-group">
					<textarea name="prodSpecs" type="text" id="txtAttrid3" class="form-control" placeholder="Enter Description Here..."></textarea>
				</div>
			</div>
			<div id="attr4">
				<div class="form-row">
					<div id="attributeList3" class="form-group col-md-5"></div>
					<div class="col-md-3"></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"></div>
					<div class="form-check form-group text-right col-md-2">
						<label for="productAttr" class="form-check-label"><input name="productAttr" type="checkbox" class="form-check-input productAttr">Highlight</label>
					</div>
				</div>
				<div class="form-group">
					<textarea name="prodSpecs" type="text" id="txtAttrid4" class="form-control" placeholder="Enter Description Here..."></textarea>
				</div>
			</div>
			<div id="duplicateAttr">
				<div class="form-row">
					<div id="attributeList4" class="form-group col-md-5"></div>
					<div class="col-md-3"></div>
					<div class="form-group col-md-1 text-right">
						<button id="attdelBtn" class="btn btn-outline-danger" type="button" btnId ="2" onclick="delAttrBtn(this)" disabled><i class="fa fa-trash"></i></button>
					</div>
					<div class="form-group col-md-1 text-right">
						<button class="btn btn-outline-primary" type="button" onclick="addattBtn()"><i class="fa fa-plus-circle"></i></button>
					</div>
					<div class="form-check form-group text-right col-md-2">
						<label for="productAttr" class="form-check-label"><input name="productAttr" type="checkbox" class="form-check-input productAttr">Highlight</label>
					</div>
				</div>
				<div class="form-group">
					<textarea name="prodSpecs" type="text" id="txtAttrid5" class="form-control" placeholder="Enter Description Here..."></textarea>
				</div>
			</div>
		</form>
		<div class="form-group">
			<button type="submit" onclick="productValidate()" class="btn btn-outline-success">Submit</button>
		</div>

</section>
{{-- admin footer script --}}
@include("../common/admin/admin-footer-scripts")
{{-- admin footer --}}
@include("../common/admin/admin-footer")