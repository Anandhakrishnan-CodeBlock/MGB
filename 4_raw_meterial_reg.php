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


<!-- Mirrored from vuze.bootlab.io/preview/html/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 06:36:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>MPB - Purchase Registration</title>

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
							<li class="sidebar-item active"><a class="sidebar-link" href="4_raw_meterial_reg.php">Register</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="5_raw_meterial_pur.php">Purchased</a></li>
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

					<h1 class="h3 mb-3">Raw Meterial</h1>							
						  <div class="col-12 col-lg-10">
							<div class="card">
								<div class="card-header">
									<ul class="nav nav-tabs card-header-tabs pull-right" role="tablist">
										<li class="nav-item">
											<a class="nav-link show active" data-toggle="tab" href="#tab-1">Suplier Register</a>
										</li>
										<li class="nav-item">
											<a class="nav-link show" data-toggle="tab" href="#tab-2">Update Suplier</a>
										</li>
									</ul>
								</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane fade active show" id="tab-1" role="tabpanel">
										<div class="tab-pane fade show active" id="account" role="tabpanel">

									       <div class="card-body">
											<form id="raw_reg" method="post">
												<div class="form-group">
													<label for="inputaadhaar">Compney Details</label>
                                                    <input type="text" class="form-control" id="cname" placeholder="Compney Name" minlength="2" pattern="[a-zA-Z]{2,25}" title="Please use only alphabet, Character length 2 to 10" required><br>
                                                    <input type="text" class="form-control" id="name" placeholder="Name" minlength="2" pattern="[a-zA-Z]{2,25}" title="Please use only alphabet, Character length 2 to 10" required><br>
                                                    <input type="text" class="form-control" id="gstno" placeholder="GST NO" maxlength="15" pattern="[a-zA-Z0-9]{15}" title="Please use only alphabet, Character length of 15"required><br>
                                                    <textarea class="form-control" rows="2" id="address" placeholder="Address" title="Please enter address" required></textarea><br>
													<input type="text" class="form-control" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter proper email format" required><br>
                                                    <input type="text" class="form-control" id="mobile" placeholder="Mobile No" maxlength="10" pattern="[0-9]{10,10}" title="Please use only numbers, Character of 10" minlength="10" required>
												</div>
												<button type="submit" class="btn btn-primary">Register</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
											</form>
										</div>
									<div id="msg"></div>

								</div>
								</div>
								<div class="tab-pane fade text-left" id="tab-2" role="tabpanel">
									<div class="tab-pane fade show active" id="account" role="tabpanel">

									       <div class="card-body">
											<form id="sup_reg_up" method="post">
												<div class="form-group">
													<label for="inputaadhaar">Compney Name</label>
                                                    <select class="form-control mb-3" id="suplier_select"  name="suplier_select">
                                                      
                                                    </select><br>
                                                    <div id="msg1"></div>
                                                    <label for="inputaadhaar">Name</label>
                                                    <input type="text" class="form-control" id="name1" placeholder="Name" minlength="2" pattern="[a-zA-Z]{2,25}" title="Please use only alphabet, Character length 2 to 10" required><br>
                                                    <label for="inputaadhaar">GST NO</label>
                                                    <input type="text" class="form-control" id="gstno1" placeholder="GST NO" maxlength="15" pattern="[a-zA-Z0-9]{15}" title="Please use only alphabet, Character length of 15"required><br>
                                                    <label for="inputaadhaar">Address</label>
                                                    <textarea class="form-control" rows="2" id="address1" placeholder="Address" title="Please enter address" required></textarea><br>
                                                    <label for="inputaadhaar">Email</label>
													<input type="text" class="form-control" id="email1" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter proper email format" required><br>
													<label for="inputaadhaar">Mobile</label>
                                                    <input type="text" class="form-control" id="mobile1" placeholder="Mobile No" maxlength="10" pattern="[0-9]{10,10}" title="Please use only numbers, Character of 10" minlength="10" required>
												</div>
												<button type="submit" class="btn btn-primary">Update</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
											</form>
										</div>
									<div id="msg2"></div>

								</div>
								</div>
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
					</div>
				</div>
			</footer>
		</div>
	</div>
   <!-- Jquery Core Js -->
    <script src="js/jquery/jquery.min.js"></script>
    
    <!-- Code -->
    <script src="controler/raw.js"></script>
	
	<script src="js/app.js"></script>
</body>
</html>