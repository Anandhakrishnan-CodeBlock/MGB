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

	<title>MPB - Invoice Details</title>

	<link href="css/app.css" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
				<nav class="sidebar sidebar-collapsed toggled sidebar-sticky">
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
							<li class="sidebar-item"><a class="sidebar-link" href="8_buy_invoice_generate.php">Create Invoice</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="9_buy_invoice_update.php">Update Invoice</a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="10_buy_details.php">Invoice Details</a></li>
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

					<h1 class="h3 mb-3">Update Invoice</h1>

					<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Select invoice to update details</h5>
									<h6 class="card-subtitle text-muted"></h6>
									<div id="result"></div>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col">Bill Id</th>
												<th scope="col">Invoice Id</th>
												<th scope="col">Compney Name</th>
												<th scope="col">Name</th>
												<th scope="col">Date</th>
												<th scope="col">Mobile</th>
												<th scope="col">Weight</th>
                                                <th scope="col">Price</th>
												<th scope="col">Total Amount</th>
												<th scope="col">GST</th>
												<th scope="col">Total GST</th>
												<th scope="col">Total+GST</th>
												<th scope="col">Payed</th>
												<th scope="col">Roundoff</th>
												<th scope="col">Status</th>
												<th scope="col">Pay Type</th>
												<th scope="col">Balance</th>
												<th scope="col">Print</th>
											</tr>
										</thead>
										<tbody id="buy_det">
										</tbody>
									</table>
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
	<script>
function update(view)
{
	var payed="payed_"+view;
	document.getElementById("payed_"+view).disabled = false;
	document.getElementById(view).disabled = true;
	document.getElementById("save_"+view).disabled = false;
}
function save(view)
{
var data = view;
var arr = data.split('_');
var billid = arr[1];
var payed = document.getElementById("payed_"+billid).value;
$.ajax({
type : "POST",
url : "php/buy.php",
data :  {billid:billid,payed:payed},
cache : false,
success:function(response) 
{
 if(response==0)
  {
	document.getElementById("payed_"+billid).disabled = true;
	$("#result").html("<big><font color=#FF0000>Problem During Updating Invoice</font></big>").show().fadeOut( 5000 );
	sleep(5);
	location.reload(true);
  }
  else
  {
	 document.getElementById("payed_"+billid).disabled = true;
     $('#result').html("<big><font color=#00ff00>Invoice Updated Successfully</font></big>").show().fadeOut( 5000 );
	 setTimeout(function(){ location.reload(true); }, 2000);  
  } 
}
});			
}

	</script>
</body>
</html>