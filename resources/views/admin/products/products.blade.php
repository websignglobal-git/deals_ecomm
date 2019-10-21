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

	<div id="frmDiv" class="container-fluid">
		<div class="accordion" id="accordion">
		  	<div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		    	<div class="card-header" id="headingOne">
		       		<button class="btn" type="button">Collapsible Group Item #1</button>
		    	</div>
		    	<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
		      		<div class="card-body">

		      		</div>
		    	</div>
		  	</div>

		  	<div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		    	<div class="card-header" id="headingTwo">
		        	<button class="btn" type="button">Collapsible Group Item #2</button>
		    	</div>
		    	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      		<div class="card-body">

		      		</div>
		    	</div>
		  	</div>

		  	<div class="card" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		    	<div class="card-header" id="headingThree">
		        	<button class="btn" type="button">Collapsible Group Item #3</button>
		    	</div>
		    	<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      		<div class="card-body">

		      		</div>
		    	</div>
		  	</div>
		</div>
	</div>	

</section>

{{-- admin footer script --}}
@include("../common/admin/admin-footer-scripts")

{{-- admin footer --}}
@include("../common/admin/admin-footer")
