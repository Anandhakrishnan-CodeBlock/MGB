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

	<title>MPB - Employe Register</title>

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
							<li class="sidebar-item active"><a class="sidebar-link" href="1_emp_new.php">New</a></li>
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

					<h1 class="h3 mb-3">New Employe Register</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Enter Details</h5>
								</div>
								<div class="card-body">
                        <div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">
									<div class="card-body">
											<form id="emp_reg" method="post">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">First name</label>
														<input type="text" class="form-control" id="fname" placeholder="First name" minlength="2" pattern="[a-zA-Z]{2,25}" title="Please use only alphabet, Character length 2 to 10" required>
													</div>
													<div class="form-group col-md-6">
														<label for="inputLastName">Last name</label>
														<input type="text" class="form-control" id="lname" placeholder="Last name" minlength="1" pattern="[a-zA-Z]{1,20}" title="Please use only alphabet, Character length 1 to 10"  required>
													</div>
												</div>
                                                <div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">Gender</label>
														<div>
														<label class="form-check">
            											<input class="form-check-input" type="radio" name="gender" value="male" name="radios-example" required>
            											<span class="form-check-label">
              											Male
            											</span>
          												</label>
														<label class="form-check">
            											<input class="form-check-input" type="radio" name="gender" value="female" name="radios-example" required>
														<span class="form-check-label">
														Female
            											</span>
          												</label>
														</div>
													</div>
													<div class="form-group col-md-6">
														<label for="date">Date</label>
														<input class="form-control" type="date" name="date" id="date" title="Please select date"  required>
													</div>
                                                    <div class="form-group col-md-6">
														<label for="date">Age</label>
														<input type="text" class="form-control" id="age" placeholder="Age" maxlength="2" pattern="[0-9]{2,2}" title="Please use only numbers" minlength="2" required>
													</div>
                                                    <div class="form-group col-md-6">
														<label for="date">Salery Per Day</label>
														<input type="text" class="form-control" id="salery" placeholder="Salery" maxlength="3" pattern="[0-9]{3,3}" title="Please use only numbers" minlength="2" required>
													</div>
												</div>
												<div class="form-group">
													<label for="inputaadhaar">Aadhaar No</label>
													<input type="text" class="form-control" id="aadharno" placeholder="Aadhaar No" maxlength="12" pattern="[0-9]{12,12}" title="Please use only numbers" minlength="12" required>
												</div>
												<div class="form-group">
													<label for="inputAddress">Address</label>
													<textarea class="form-control" rows="2" id="address" placeholder="Address" title="Please enter address" required></textarea>
												</div>
												<div class="form-group">
													<label for="inputAddress2">Mobile No</label>
													<input type="text" class="form-control" id="mobile" placeholder="Mobile No" maxlength="10" pattern="[0-9]{10,10}" title="Please use only numbers, Character of 10" minlength="10" required>
												</div>
												<button type="submit" class="btn btn-primary">Register</button>
												<button type="clear" class="btn btn-primary">Clear</button>
											</form>
                                        
										</div>
									<div id="msg" class="msg"></div>
								</div>
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
    <script src="js/jquery/validation.jquery.json"></script>
	<script>
		function checkforblank() {
    
    var location = document.getElementById('gender');
    var invalid = location.value == "Please Select";
 
    if (invalid) {
        alert('Please enter first name');
        location.className = 'error';
    }
    else {
        location.className = '';
    }
    
    return !invalid;
}
	</script>
    <!-- Code -->
    <script src="controler/emp.js"></script>
	<script src="js/app.js"></script>
</body>
</html>