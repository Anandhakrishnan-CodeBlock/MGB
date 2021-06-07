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

	<title>MPB - Billing</title>

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
						<a href="index.html" data-toggle="collapse" class="font-weight-bold sidebar-link">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
              <span class="sidebar-badge badge badge-primary">-</span>
            </a>

					</li>
					<li class="sidebar-item">
						<a href="#layouts" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Employe</span>
            </a>
						<ul id="layouts" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="emp_reg.php">New</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="emp_upd.php">Update</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="emp_sal.php">Salery</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a href="#ui" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Raw Meterial</span>
            </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="raw_meterial_reg.php">Register</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="raw_meterial_pur.php">Purchased</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a href="#maps" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
                        <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Byers</span>
                        </a>
                        <ul id="maps" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="buy_reg.php">Register</a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="buy_bill.php">Billing</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="buy_upd.php">Update</a></li>
						</ul>
					</li>
                    <li class="sidebar-item">
						<a href="#charts" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Repoart</span>
                        </a>
						<ul id="charts" class="sidebar-dropdown list-unstyled collapse ">
							<li class="sidebar-item"><a class="sidebar-link" href="report.php">Report</a></li>
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

					<h1 class="h3 mb-3">Invoice</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Enter Invoice Details</h5>
								</div>
								<div class="card-body">
                                    <div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">
									<div class="card-body">
											<form id="bill_reg" name="bill_reg">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">Compney Name</label>
														<select class="form-control mb-3" id="c_select" required>
                                                        
                                                        </select>
													</div>
													<div class="form-group col-md-6">
														<label for="date">Date</label>
														<input class="form-control" type="date" name="date" id="date" required/>
													</div>
												</div>
												<div id="msg"></div>
												<div class="form-group">
													<label for="inputaadhaar">Purchased Bill</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Name" disabled><br>
                                                    <input type="text" class="form-control" id="gstno" placeholder="GST NO" disabled>
												</div>
                                                <div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputAddress2">Address</label>
													<textarea class="form-control" rows="2" id="address" placeholder="Address" title="Please enter address" required disabled></textarea>
												</div>
                                                <div class="form-group col-md-6">
													<label for="inputAddress2">Mobile No</label>
													<input type="number" class="form-control" id="mobile" placeholder="Mobile No" disabled>
												</div>
                                                </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-4">
													<label for="inputAddress">Weight (Ton)</label>
													<input type="number" class="form-control" id="weight" placeholder="Weight" pattern="[0-9]" title="Please enter weight" minlength="1" required>
												</div>
												<div class="form-group col-md-4">
													<label for="inputAddress">Price (Ton)</label>
													<input type="number" class="form-control" id="price" placeholder="Price" pattern="[0-9]" title="Please enter price" minlength="1" required>
												</div>
                                                <div class="form-group col-md-4">
													<label for="inputAddress">Total Amount</label>
													<input type="number" class="form-control" id="tamount" placeholder="Total Amount" pattern="[0-9]" title="Please enter amount" minlength="1" required>
												</div>
                                                <div class="form-group col-md-3">
													<label for="inputAddress">GST</label>
													<input type="number" class="form-control" id="gst" placeholder="GST" pattern="[0-9]" title="Please enter gst" minlength="1" required>
												</div>
												<div class="form-group col-md-3">
													<label for="inputAddress">SGST</label>
													<input type="number" class="form-control" id="sgst" placeholder="SGST" pattern="[0-9]" title="Please enter sgst" minlength="1" required disabled>
												</div>
												<div class="form-group col-md-3">
													<label for="inputAddress">CGST</label>
													<input type="number" class="form-control" id="cgst" placeholder="CGST" pattern="[0-9]" title="Please enter cgst" minlength="1" required disabled>
												</div>
												<div class="form-group col-md-3">
													<label for="inputAddress">Total GST</label>
													<input type="number" class="form-control" id="t_gst" placeholder="Total GST" pattern="[0-9]" title="Please enter cgst" minlength="1" required>
												</div>
                                                </div>
                                                <div class="form-row">
													<div class="form-group col-md-3">
													<label for="inputAddress">Total Amount + GST</label>
													<input type="number" class="form-control" id="total" placeholder="Total" pattern="[0-9]" title="Please enter payed" minlength="1" required>
												    </div>
													<div class="form-group col-md-3">
													<label for="inputAddress">Round Off</label>
													<input type="number" class="form-control" id="roundoff" placeholder="Rounoff" pattern="[0-9]" title="Roundoff value" minlength="1" required>
												    </div>
                                                    <div class="form-group col-md-3">
													<label for="inputAddress">Payed</label>
													<input type="number" class="form-control" id="payed" placeholder="Payed" pattern="[0-9]" title="Please enter payed" minlength="1" required>
												    </div>
													<div class="form-group col-md-3">
														<label for="inputFirstName">Bill Status</label>
														<input type="text" class="form-control" id="status" placeholder="Status" required disabled>
													</div>
												</div>
												<button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-primary" >Clear</button>
											</form>
										<div id="msg1"></div>
										</div>
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
    
    <!-- Code -->
    <script src="controler/buy.js"></script>
	<script src="js/app.js"></script>
</body>
</html>