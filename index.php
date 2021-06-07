<!DOCTYPE html>
<?php
// Starting session
session_start();
if(isset($_SESSION['username']) && $_SESSION['username'] == 1) 
{
        $username=$_SESSION['username'];
} 
else if(!isset($_SESSION['username']) || (isset($_SESION['username']) && $_SESSION['username'] == 0))
{
        //session is not set
        header('Location:login.html');
}
?>
<html lang="en">


<!-- Mirrored from vuze.bootlab.io/preview/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 06:36:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>MAADESWARA GRAY BOARDS</title>

	<link href="css/app.css" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<nav class="sidebar sidebar-sticky">
			<div class="sidebar-content  js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <i class="align-middle" data-feather="layers"></i>
          <span class="align-middle">MGB</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item active">
						<a href="index.php" data-toggle="collapse" class="font-weight-bold sidebar-link">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
              <span class="sidebar-badge badge badge-primary">-</span>
            </a>

					</li>
					<li class="sidebar-item">
						<a href="#layouts" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Employe</span>
            </a>
						<ul id="layouts" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="1_emp_new.php">New</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="2_emp_update.php">Update</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="3_emp_details.php">Details</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#ui" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Raw Meterial</span>
            </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="4_raw_meterial_reg.php">Register</a></li>
						</ul>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="5_raw_meterial_pur.php">Purchased</a></li>
						</ul>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="6_raw_meterial_details.php">Details</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a href="#maps" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
                        <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Byers</span>
                        </a>
                        <ul id="maps" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="7_buy_new.php">Register</a></li>
						</ul>
						<ul id="maps" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="8_buy_invoice_generate.php">Create Invoice</a></li>
						</ul>
                        <ul id="maps" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="9_buy_invoice_update.php">Update Invoice</a></li>
						</ul>
						<ul id="maps" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="10_buy_details.php">Invoice Details</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a href="#charts" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
                            <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Salery</span>
                        </a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="11_payslip_create.php">Create Payslip</a></li>
						</ul>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="12_payslip_details.php">Payslip Details</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-white sticky-top">
				<a class="sidebar-toggle d-flex mr-3">
          <i class="align-self-center" data-feather="menu"></i>
        </a>

				<span class="align-middle"><b>MAADESWARA GRAY BOARDS</b></span>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle ml-2 d-inline-block d-sm-none" href="#" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle mt-n1" data-feather="settings"></i>
								</div>
							</a>
							<a href="php/logout.php"  class="btn btn-primary">Logout</a>
						</li>
                    </ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>

							<script>
								document.addEventListener("DOMContentLoaded", function(event) {
									$('#datetimepicker-dashboard').datetimepicker({
										inline: true,
										sideBySide: false,
										format: 'L'
									});
								});
							</script>
						</div>
						<div class="col-12 col-xl-4 d-none d-xl-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<h5 class="card-title mb-0">Advance Pay / Increment</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<form id="form_adv_inc" method="post">
										<select class="custom-select mb-3" id="adv_inc" required>
          									
        								</select>
										<div>
										<label class="form-check">
            							<input class="form-check-input" type="radio" name="adv_amo" value="advance" name="radios-example" required>
            							<span class="form-check-label">
              								Advance
            							</span>
          								</label>
										<label class="form-check">
            							<input class="form-check-input" type="radio" name="adv_amo" value="increment" name="radios-example" required>
										<span class="form-check-label">
											Increment
            							</span>
          								</label>
											</div>
									  <table class="table mb-0">
											<thead>
												<tr>
													<th class="text-right" colspan="2"><input type="number" minlength="2" class="form-control" id="amount" placeholder="Amount" required></th>
													<th class="text-right" colspan="2"><button type="submit" class="btn btn-primary">Update</button></th>
												</tr>
											</thead>
											<tbody>
												<tr><div id="result"></div></tr>
											</tbody>
										</table>
									</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card">
								<div class="card-header">
									<ul class="nav nav-pills card-header-pills pull-right" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#tab-4">BackUp</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tab-5">Settings</a>
										</li>
									</ul>
								</div>
								<div class="card-body">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="tab-4" role="tabpanel">
											<h5 class="card-title">Backup</h5>
											<p class="card-text">Take Entire Data Base.(MGB)</p>
											<a href="#" class="btn btn-primary">Make It</a>
										</div>
										<div class="tab-pane fade text-center" id="tab-5" role="tabpanel">
											<h5 class="card-title">User Account Details</h5>
											<p class="card-text">
												<input type="text"class="form-control" id="oldp" placeholder="Old Password" required><br>
												<input type="text"class="form-control" id="np" placeholder="New Password" required><br>
												<input type="text"class="form-control" id="rp" placeholder="Retype Password" required><br>
											</p>
											<a href="#" class="btn btn-primary">Update</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Employe Advance Pay Status</h5>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
											<th>EmpId</th>
											<th>Name</th>
											<th>Mobile</th>
											<th>Salery</th>
											<th>Advance</th>
										</tr>
										</thead>
										<tbody id="emp_det">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Invoice Status</h5>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
											<th>InvId</th>
											<th>Compney Name</th>
											<th>Name</th>
											<th>Date</th>
											<th>Mobile</th>
											<th>Total Amount</th>
											<th>Balance</th>
										</tr>
										</thead>
										<tbody id="bill_status">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								&copy; <a href="index.html" class="text-muted">MGB</a>
							</p>
						</div>
						<div class="col-6 text-right">
							
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
   <!-- Jquery Core Js -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/validation.jquery.json"></script>
    <!-- Code -->
    <script src="controler/index.js"></script>
	<script src="js/app.js"></script>
</body>
</html>