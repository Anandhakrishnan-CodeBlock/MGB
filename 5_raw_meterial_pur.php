<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from vuze.bootlab.io/preview/html/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 06:36:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>MPB - Raw Meterial</title>

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
							<li class="sidebar-item active"><a class="sidebar-link" href="5_raw_meterial_pur.php">Purchased</a></li>
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
							<button type="button" class="btn btn-primary">Logout</button>
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
											<a class="nav-link show active" data-toggle="tab" href="#tab-1">Purchase Entry</a>
										</li>
										<li class="nav-item">
											<a class="nav-link show" data-toggle="tab" href="#tab-2">Update Purchase Entry</a>
										</li>
									</ul>
								</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane fade active show" id="tab-1" role="tabpanel">
										<div class="tab-pane fade show active" id="account" role="tabpanel">
									       <div class="card-body">
											<form id="raw_pur">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">Compney Name</label>
														<select class="form-control mb-3" id="c_select"  name="c_select">
                                                      
                                                        </select>
													</div>
													<div class="form-group col-md-6"><br><br>
													<div id="msg"></div>	
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col-md-6">
													    <label for="inputAddress2">Invoice No</label>
													    <input type="text" class="form-control" id="inid" placeholder="Invoice Id" pattern="[0-9]" title="Please enter invoice id" required>
													</div>
                                                    <div class="form-group col-md-6">
														<label for="date">Date</label>
														<input class="form-control" type="date" id="date" name="date" required/>
													</div>
												</div>
												<div class="form-group">
													<label for="inputaadhaar">Item Description</label>											
													<textarea class="form-control" rows="2" id="item" placeholder="Item" title="Please enter item Details" required></textarea>
													<br>
                                                    <input type="text" class="form-control" id="gstno" placeholder="GST NO" disabled required>
												</div>
                                                <div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputAddress2">Address</label>
													<textarea class="form-control" rows="2" id="address" placeholder="Address" title="Please enter address" disabled required></textarea>
												</div>
                                                <div class="form-group col-md-6">
													<label for="inputAddress2">Mobile No</label>
													<input type="text" class="form-control" id="mobile" placeholder="Mobile No" maxlength="10" pattern="[0-9]{10,10}" title="Please use only numbers, Character of 10" minlength="10" disabled required>
												</div>
                                                </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
													<label for="inputAddress">Weight (Ton)</label>
													<input type="text" class="form-control" id="weight" placeholder="Weight" pattern="[0-9]" title="Please enter weight" minlength="1" required>
												</div>
												<div class="form-group col-md-6">
													<label for="inputAddress">Unit Prise</label>
													<input type="text" class="form-control" id="unit" placeholder="Unit Price" pattern="[0-9]" title="Please enter price" minlength="1" required>
												</div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
													<label for="inputAddress">Total Prise</label>
													<input type="text" class="form-control" id="price" placeholder="Total Price" pattern="[0-9]" title="Please enter totalprice" minlength="1" required>
												</div>
													<div class="form-group col-md-6">
														<label for="inputFirstName">Bill Status</label>
														<div>
														<label class="form-check">
            											<input class="form-check-input" type="radio" name="status" value="Payed" name="radios-example" required>
            											<span class="form-check-label">
              											Payed
            											</span>
          												</label>
			
															
														<label class="form-check">
            											<input class="form-check-input" type="radio" name="status" value="Pending" name="radios-example" required>
														<span class="form-check-label">
														Pending
            											</span>
          												</label>
														</div>
													</div>
												</div>
												<button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
											</form>
										</div>
									<div id="msg1"></div>
								</div>
								</div>
								<div class="tab-pane fade text-left" id="tab-2" role="tabpanel">
									<div class="tab-pane fade show active" id="account" role="tabpanel">
									       <div class="card-body">
											<form id="raw_up_pur">
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputFirstName">Purchase Id</label>
														<input type="text" class="form-control" id="up_puid" placeholder="Purchase Id"  title="Please enter purchase id">
													</div>
													<div class="form-group col-md-6">
														<label for="inputFirstName">Compney Name</label>
														<input type="text" class="form-control" id="up_cname" placeholder="Compney Name"  title="Please enter compney name" required>
													</div>
													<div class="form-group col-md-6">
														<div id="msg2"></div>
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col-md-6">
													    <label for="inputAddress2">Invoice No</label>
													    <input type="text" class="form-control" id="up_inid" placeholder="Invoice Id" pattern="[0-9]" title="Please enter invoice id" required>
													</div>
                                                    <div class="form-group col-md-6">
														<label for="date">Date</label>
														<input class="form-control" type="date" id="up_date" name="date" required/>
													</div>
												</div>
												<div class="form-group">
													<label for="inputaadhaar">Item Description</label>											
													<textarea class="form-control" rows="2" id="up_item" placeholder="Item" title="Please enter item Details" required></textarea>
													<br>
                                                    <input type="text" class="form-control" id="up_gstno" placeholder="GST NO" disabled required>
												</div>
                                                <div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputAddress2">Address</label>
													<textarea class="form-control" rows="2" id="up_address" placeholder="Address" title="Please enter address" disabled required></textarea>
												</div>
                                                <div class="form-group col-md-6">
													<label for="inputAddress2">Mobile No</label>
													<input type="text" class="form-control" id="up_mobile" placeholder="Mobile No" maxlength="10" pattern="[0-9]{10,10}" title="Please use only numbers, Character of 10" minlength="10" disabled required>
												</div>
                                                </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
													<label for="inputAddress">Weight (Ton)</label>
													<input type="text" class="form-control" id="up_weight" placeholder="Weight" pattern="[0-9]" title="Please enter weight" minlength="1" required>
												</div>
												<div class="form-group col-md-6">
													<label for="inputAddress">Unit Prise</label>
													<input type="text" class="form-control" id="up_unit" placeholder="Unit Price" pattern="[0-9]" title="Please enter price" minlength="1" required>
												</div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
													<label for="inputAddress">Total Prise</label>
													<input type="text" class="form-control" id="up_price" placeholder="Total Price" pattern="[0-9]" title="Please enter totalprice" minlength="1" required>
												</div>
													<div class="form-group col-md-6">
														<label for="inputFirstName">Bill Status</label>
														<div>
														<label class="form-check">
            											<input class="form-check-input" type="radio" name="up_status" value="Payed" name="radios-example" required>
            											<span class="form-check-label">
              											Payed
            											</span>
          												</label>
			
															
														<label class="form-check">
            											<input class="form-check-input" type="radio" name="up_status" value="Pending" name="radios-example" required>
														<span class="form-check-label">
														Pending
            											</span>
          												</label>
														</div>
													</div>
												</div>
												<button type="submit" class="btn btn-primary">Update</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
											</form>
										</div>
									<div id="msg3"></div>
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