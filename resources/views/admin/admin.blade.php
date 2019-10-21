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
						<h2>Welcome to Dashboard</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="statistics">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="box">
						<i class="fa fa-envelope fa-fw bg-primary"></i>
						<div class="info">
							<h3>1,245</h3> <span>Emails</span>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
						<i class="fa fa-file fa-fw danger"></i>
						<div class="info">
							<h3>34</h3> <span>Projects</span>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
						<i class="fa fa-users fa-fw success"></i>
						<div class="info">
							<h3>5,245</h3> <span>Users</span>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="charts">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="chart-container">
						<h3>Chart</h3>
						<canvas id="myChart"></canvas>
					</div>
				</div>
				<div class="col-md-6">
					<div class="chart-container">
						<h3>Chart2</h3>
						<canvas id="myChart2"></canvas>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="admins">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="box">
						<h3>Admins:</h3>
						<div class="admin">
							<div class="img">
								<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance" alt="admin">
							</div>
							<div class="info">
								<h3>Joge Lucky</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="admin">
							<div class="img">
								<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907137/small/1501685404/enhance" alt="admin">
							</div>
							<div class="info">
								<h3>Joge Lucky</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="admin">
							<div class="img">
								<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907019/small/1501685403/enhance" alt="admin">
							</div>
							<div class="info">
								<h3>Joge Lucky</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box">
						<h3>Moderators:</h3>
						<div class="admin">
							<div class="img">
								<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907114/small/1501685404/enhance" alt="admin">
							</div>
							<div class="info">
								<h3>Joge Lucky</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="admin">
							<div class="img">
								<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance" alt="admin">
							</div>
							<div class="info">
								<h3>Joge Lucky</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="admin">
							<div class="img">
								<img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="admin">
							</div>
							<div class="info">
								<h3>Joge Lucky</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='statis text-center'>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="box bg-primary">
						<i class="fa fa-eye"></i>
						<h3>5,154</h3>
						<p class="lead">Page views</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box danger">
						<i class="fa fa-user-o"></i>
						<h3>245</h3>
						<p class="lead">User registered</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box warning">
						<i class="fa fa-shopping-cart"></i>
						<h3>5,154</h3>
						<p class="lead">Product sales</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box success">
						<i class="fa fa-handshake-o"></i>
						<h3>5,154</h3>
						<p class="lead">Transactions</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="chrt3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="chart-container">
						<canvas id="chart3" width="100%"></canvas>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

{{-- admin footer script --}}
@include("../common/admin/admin-footer-scripts")

{{-- admin footer --}}
@include("../common/admin/admin-footer")
