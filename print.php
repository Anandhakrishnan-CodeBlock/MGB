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
<!-- Mirrored from vuze.bootlab.io/preview/html/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Feb 2019 06:36:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>MGB - Invoice</title>

	<link href="css/app.css" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<div class="main">
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"></h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body m-sm-3 m-md-5">
									<!--<img src="img/logo.png" width="90px" height="90px" style="margin-left: auto;">-->
									<div class="mb-3">
										<font size="6"><strong>INVOICE</strong></font>
										<br /><strong>MAADESWARA GRAY BOARDS</strong>
									</div>
									
									<div class="row">
										<div class="col-md-6">
											<div class="text-muted">Invoice No.</div>
											<strong><div id="billid"></div></strong>
										</div>
										<div class="col-md-6 text-md-right">
											<div class="text-muted">Invoice Date</div>
											<strong><div id="date"></div></strong>
										</div>
									</div>

									<hr class="my-4" />

									<div class="row mb-4">
										<div class="col-md-6">
											<div class="text-muted">From</div>
											<strong>MAADESWARA GRAY BOARDA</strong>
											<p>
												R Anandhakrishnan <br>
												33-BDFPA-6383K-1ZJ<br>
												3/1350 Chinnaputhur,<br> 
												Vadavalli Village,<br> 
												Kumaran Kundru Road,<br>
												Periaputhur Post,<br>
												Pogalur Via, Annur(TK)<br> 
												Coimbatore 641653<br>
												<a href="#">maadeswaragrayboards@gmail.com</a><br>
												9994609369
											</p>
										</div>
										<div class="col-md-6 text-md-right">
											<div class="text-muted">To</div>
											<strong><div id="cname"></div></strong>
											    <div id="name"></div>
											    <div id="gstno"></div>
												<div id="address"></div>
											    <div id="mobile"></div>
												<a href="#">info@appstack.com</a>
											
										</div>
									</div>

									<table class="table table-sm">
										<thead>
											<tr>
												<th>Description</th>
												<th></th>
												<th class="text-right">Quantity</th>
												<th class="text-right">Price</th>
												<th class="text-right">Total Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Gryboard</td>
												<td></td>
												<td class="text-right"><div id="weight"></div></td>
												<td class="text-right"><div id="price"></div></td>
												<td class="text-right"><div id="totalamount"></div></td>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th class="text-right">SGST</th>
												<th class="text-right">CGST</th>
												<th class="text-right">GST</th>
												<th class="text-right">Total TAX</th>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td class="text-right"><div id="sgst"></div></td>
												<td class="text-right"><div id="cgst"></div></td>
												<td class="text-right"><div id="gst"></div></td>
												<td class="text-right"><div id="tgst"></div></td>
											</tr>
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">Total Amount + TAX</th>
												<td class="text-right"><div id="total"></div></td>
											</tr>
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">Round Off</th>
												<td class="text-right"><div id="r"></div></td>
											</tr>
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">G.Total</th>
												<th class="text-right"><div id="roundoff"></div></th>
											</tr>
										</tbody>

										<tfoot style="border-top: 2px solid black; font-size: 20px">
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">Advance</th>
												<th class="text-right"><div id="advance"></div></th>
											</tr>
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">Amount Payed</th>
												<th class="text-right"><div id="payed"></div></th>
											</tr>
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">Balance</th>
												<th class="text-right"><div id="balance"></div></th>
											</tr>
											<tr>
												<th></th>
												<th></th>
												<th class="text-right">&nbsp;</th>
												<th class="text-right">Payment Status</th>
												<th class="text-right"><div id="status"></div></th>
											</tr>
										</tfoot>
										</table>
										<br><br><br><br><br><br><br><br><br><br><br><br>
									    
										<table  class="table table-sm">
											<tr>
												<td>If you have any question concerning this invoice,
													<br> Kaindly contact MAADESWARA GRAY BOARDA, 
													<br>9994609369 and maadeswaragrayboards@gmail.com</td>
												<th>Reciver Signature</th>
												<th></th>
												<th></th>
												<th>Signature</th>
											</tr>
									    </table>
									<div class="text-center">
										<p class="text-sm">
											<strong>This Is Computer Generated Invoice.</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
<!-- Jquery Core Js -->
    <script src="js/jquery/jquery.min.js"></script>
	<script src="controler/print.js"></script>

	<script src="js/app.js"></script>
</body>
</html>