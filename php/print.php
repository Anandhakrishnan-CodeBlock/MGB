<?php
include("lib.php");
session_start();
if(isset($_POST['id_in']))
{
	$id_in = $_POST['id_in'];	
	$sql = "SELECT cname,date,name,gstno,address,mobile,weight,price,totalamount,gst,sgst,cgst,tgst,total,roundoff,invoiceno,advance,payed,balance,status FROM billing WHERE billid ='$id_in'";
    $result = mysqli_query($bd,$sql);
	if(!$result) 
    {
      echo "0";  
    }
    while($row = mysqli_fetch_array($result)) 
    {
    	echo $row['invoiceno'];
		echo "||";
    	echo $row['cname'];
		echo "||";
    	echo $row['date'];
		echo "||";
    	echo $row['name'];
		echo "||";
    	echo $row['gstno'];
		echo "||";
    	echo $row['address'];
		echo "||";
    	echo $row['mobile'];
		echo "||";
    	echo $row['weight'];
		echo "||";
    	echo $row['price'];
		echo "||";
		echo $row['totalamount'];
		echo "||";
    	echo $row['gst'];
		echo "||";
		echo $row['sgst'];
		echo "||";
		echo $row['cgst'];
		echo "||";
		echo $row['tgst'];
		echo "||";
		echo $row['total'];
		echo "||";
    	echo $row['roundoff'];
    	echo "||";
    	echo $row['advance'];
    	echo "||";
    	echo $row['payed'];
    	echo "||";
    	echo $row['balance'];
    	echo "||";
    	echo $row['status'];
    }
}
mysqli_close($bd);
?>
