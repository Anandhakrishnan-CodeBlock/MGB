<?php
include("lib.php");
session_start();


      $billid = $_POST['billid'];
      $inid = $_POST['inid'];
      $cname = $_POST['cname'];
      $name = $_POST['name'];
	 
	  $date1 = $_POST['date'];
      $date=date('Y-m-d',strtotime($date1));
	
      $gstno = $_POST['gstno'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
	
	  $weight = $_POST['weight'];
      $price = $_POST['price'];
	  $tamount = $_POST['tamount'];
	  $gst = $_POST['gst'];
	  $sgst = $_POST['sgst'];
	  $cgst = $_POST['cgst'];
	  $tgst = $_POST['tgst'];
	  $total = $_POST['total'];
	  $roundoff = $_POST['roundoff'];
	  $payed = $_POST['payed'];
      $status = $_POST['status'];
	  $billstatus = $_POST['instatus'];
         
       $sql = "UPDATE billing SET invoiceno ='$inid',cname ='$cname',name ='$name',date ='$date',gstno ='$gstno',address ='$address',mobile ='$mobile',weight ='$weight',price ='$price',totalamount='$tamount',gst='$gst',sgst='$sgst',cgst='$cgst',tgst='$tgst',
	   total='$total',roundoff='$roundoff',payed='$payed',status='$status',billstatus='$billstatus' WHERE billid = $billid";

      $result = mysqli_query($bd,$sql);
   	  
      if(!$result) 
      {
		 echo (mysqli_error($bd));
          
      }
      else 
      {
         echo "1";
      }  


mysqli_close($bd);
?>