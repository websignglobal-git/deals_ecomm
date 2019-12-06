{{-- admin header script --}}
@include("../common/admin/admin-header-scripts")
{{-- admin left menu --}}
@include("../common/admin/admin-left-menu")
<section id="contents" >
	{{-- admin header --}}
	@include("../common/admin/admin-header")
	<div class="loader-bar">
		
	</div>
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
	<div class="container-fluid addbtn" id="btncls">
		<div class="row">
			<div class="col">
				<button class="btn btn-outline-light" type="button" onclick="frstDropdown()"><i class="fa fa-plus-circle addbtnplus"></i></button>
			</div>
		</div>
	</div>
	<div class="container-fluid canclbtn" id="canclbtn">
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
				<div id="editcate">
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid nxtbtn" id="nxtbtn">
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
					<input name="prodName" type="text" class="form-control formdata" onblur="prodName_validate()" placeholder="Enter your Product Name here...">
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
					<input name="prodPrice" type="number" class="form-control formdata" onblur="prodPrice_validate()" placeholder="Product Price">
				</div>
			</div>
			<div class="form-group">
				<label for="prodDiscount" class="form-label">Discount %</label>
				<div class="">
					<input name="prodDiscount" type="text" class="form-control formdata" maxlength="5" onblur="this.value = this.value.replace(/[^0-9|.]/g, '') + '%'; prodDiscount_validate()" onkeyup="this.value = this.value.replace(/[^0-9|.]./g, '')" placeholder="Distount %">
				</div>
			</div>
			<div class="form-group">
				<label for="prodDiscountPrice" class="form-label">Discount Price</label>
				<div class="">
					<input name="prodDiscountPrice" type="number" class="form-control formdata" onblur="prodDiscountPrice_validate()" placeholder="Product Discount Price">
				</div>
			</div>
			<div class="form-group">
				<label for="prodCgstPrice" class="form-label">C-GST</label>
				<div class="">
					<input name="prodCgstPrice" type="text" maxlength="5" class="form-control formdata" onblur="this.value = this.value.replace(/[^0-9|.]/g, '') + '%'; prodcgst_validate()" onkeyup="this.value = this.value.replace(/[^0-9|.]/g, '')" placeholder="Enter Central GST Percentage here...">
				</div>
			</div>
			<div class="form-group">
				<label for="prodSgstPrice" class="form-label">S-GST</label>
				<div class="">
					<input name="prodSgstPrice" type="text" maxlength="5" class="form-control formdata" onblur="this.value = this.value.replace(/[^0-9|.]/g, '') + '%'; prodsgst_validate()" onkeyup="this.value = this.value.replace(/[^0-9|.]/g, '')" placeholder="Enter State GST Percentage here...">
				</div>
			</div>
			<div class="form-group">
				<label for="prodIgstPrice" class="form-label">I-GST</label>
				<div class="">
					<input name="prodIgstPrice" type="text" maxlength="5" class="form-control formdata" onblur="this.value = this.value.replace(/[^0-9|.]/g, '') + '%'; prodigst_validate()" onkeyup="this.value = this.value.replace(/[^0-9|.]/g, '')" placeholder="Enter Integrated GST Percentage here...">
				</div>
			</div>
			<div class="form-group">
				<label for="prodQuantity" class="form-label">Quantity</label>
				<div class="">
					<input name="prodQuantity" type="number" class="form-control formdata" onblur="prodQuantity_validate()" placeholder="Enter number of quantity here...">
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Payment Methods</label>
				<div class="form-check">
					<label for="creditcardPayment" class="form-check-label"><input name="creditcardPayment" type="checkbox" value="ccpay" class="form-check-input formdata" checked="checked">Credit Card Payment</label>
				</div>
				<div class="form-check">
					<label for="debitcardPayment" class="form-check-label"><input name="debitcardPayment" type="checkbox" value="dcpay" class="form-check-input formdata" checked="checked">Debit Card Payment</label>
				</div>
				<div class="form-check">
					<label for="emiPayment" class="form-check-label"><input name="emiPayment" type="checkbox" value="emipay" class="form-check-input formdata" checked="checked">EMI Options</label>
				</div>
				<div class="form-check">
					<label for="codPayment" class="form-check-label"><input name="codPayment" type="checkbox" value="codpay" class="form-check-input formdata" checked="checked">Cash on Delivery</label>
				</div>
			</div>
			<div class="form-group">
				<label for="prodManufacturer" class="form-label">Manufacturer</label>
				<div class="">
					<input name="prodManufacturer" type="text" class="form-control formdata" onblur="prodManufacturer_validate()" placeholder="Enter Manufacturer name...">
				</div>
			</div>
			<div id="uploadimg" class="form-group">
				<label class="form-label">Images</label>
				<div class="custom-file">
					<input id="productImg1" name="productImg1" type="file" class="custom-file-input" onchange="productimg1(this)">
					<label class="custom-file-label">Choose file</label>
				</div>
			</div>
			<div id="uploadimg" class="form-group">
				<div class="custom-file">
					<input id="productImg2" name="productImg2" type="file" class="custom-file-input" onchange="productimg2(this)">
					<label class="custom-file-label">Choose file</label>
				</div>
			</div>
			<div id="uploadimg" class="form-group">
				<div class="custom-file">
					<input id="productImg3" name="productImg3" type="file" class="custom-file-input" onchange="productimg3(this)">
					<label class="custom-file-label">Choose file</label>
				</div>
			</div>
			<div id="uploadimg" class="form-group">
				<div class="custom-file">
					<input id="productImg4" name="productImg4" type="file" class="custom-file-input" onchange="productimg4(this)">
					<label class="custom-file-label">Choose file</label>
				</div>
			</div>
			<div id="uploadimg" class="form-group">
				<div class="custom-file">
					<input id="productImg5" name="productImg5" type="file" class="custom-file-input" onchange="productimg5(this)">
					<label class="custom-file-label">Choose file</label>
				</div>
			</div>
			<label class="form-label">Uploaded Images</label>
			<div class="form-group image">
				<div id="uploadedImg1" class="imageuplded">
					
				</div>
				<div id="uploadedImg2" class="imageuplded">
					
				</div>
				<div id="uploadedImg3" class="imageuplded">
					
				</div>
				<div id="uploadedImg4" class="imageuplded">
					
				</div>
				<div id="uploadedImg5" class="imageuplded">
					
				</div>
			</div>
			<label class="form-label">Specifications</label>
			<div id="editspec">
				
			</div>
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
						<button id="attaddBtn" class="btn btn-outline-primary" type="button" onclick="addattBtn()"><i class="fa fa-plus-circle"></i></button>
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
			<button type="submit" id="submitbtn" onclick="productValidate()" class="btn btn-outline-success">Submit</button>
			<button type="submit" id="savebtn" onclick="productEdit(this)" class="btn btn-outline-success">Save</button>
			<div id="errorDiv" class="errordiv">
				
			</div>
		</div>
	</section>
	<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header pophead">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body popbody">
					<div>
						<h6 class="h6txt">Description</h6>
						<div class="description">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div>
								<h6 class="h6txt">Price</h6>
								<div class="amount">
									<table id="productPrice" class="table table-bordered pricetable">
										<thead class="thead tablehead">
											<tr class="tableheadrow">
												<th>Type</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody class="tbody tablebody">
											<tr class="tablebodyrow">
												<td>Cost</td>
												<td id="costPrice"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>Actual Price</td>
												<td id="actualPrice"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>Discount</td>
												<td id="discountPercentage"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div>
								<h6 class="h6txt">G.S.T</h6>
								<div class="gst">
									<table id="gstPrice" class="table table-bordered pricetable">
										<thead class="thead tablehead">
											<tr class="tableheadrow">
												<th>Type</th>
												<th>G.S.T</th>
											</tr>
										</thead>
										<tbody class="tbody tablebody">
											<tr class="tablebodyrow">
												<td>CGST</td>
												<td id="cgstPrice"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>SGST</td>
												<td id="sgstPrice"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>IGST</td>
												<td id="igstPrice"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div>
								<h6 class="h6txt">Payment Methods</h6>
								<div class="paymentmtd">
									<table id="gstPrice" class="table table-bordered pricetable">
										<thead class="thead tablehead">
											<tr class="tableheadrow">
												<th>Type</th>
												<th>Method</th>
											</tr>
										</thead>
										<tbody class="tbody tablebody">
											<tr class="tablebodyrow">
												<td>EMI Pay</td>
												<td id="emipay"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>Cash on Delivery</td>
												<td id="codpay"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>Debit card Payment</td>
												<td id="dcpay"></td>
											</tr>
											<tr class="tablebodyrow">
												<td>Credit card Payment</td>
												<td id="ccpay"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div>
								<h6 class="h6txt">Specifications</h6>
								<div class="specs">
									<table id="specsTable" class="table table-bordered pricetable">
										<thead class="thead tablehead">
											<tr class="tableheadrow">
												<th>Type</th>
												<th>Specifications</th>
											</tr>
										</thead>
										<tbody id="specsbody" class="tbody tablebody">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<h6 class="h6txt">HighLights</h6>
								<div class="highlights">
									<table id="highlightsTable" class="table table-bordered pricetable">
										<thead class="thead tablehead">
											<tr class="tableheadrow">
												<th>Type</th>
												<th>HighLights</th>
											</tr>
										</thead>
										<tbody id="highlightsbody" class="tbody tablebody">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- admin footer script --}}
	@include("../common/admin/admin-footer-scripts")
	{{-- admin footer --}}
	@include("../common/admin/admin-footer")