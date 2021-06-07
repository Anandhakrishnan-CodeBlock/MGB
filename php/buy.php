
<?php
include("lib.php");
session_start();
if(isset($_POST['cname']) && isset($_POST['name']) && isset($_POST['gstno']) && isset($_POST['address'])  && isset($_POST['email']) && isset($_POST['mobile']))
{
      $cname = $_POST['cname'];
      $name = $_POST['name'];
      $gstno = $_POST['gstno'];
      $address = $_POST['address'];
	  $email = $_POST['email'];
      $mobile = $_POST['mobile'];
         
      $sql = "INSERT INTO byers (cname,name,gstno,address,mobile,email) VALUES('$cname','$name','$gstno','$address','$mobile','$email')";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "0";  
      }
      else 
      {
         echo "1";
      }  
}
if(isset($_POST['data']))
{
      
      $sql = "SELECT byersid,cname from byers";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "Error On Loding..";  
      }
	  echo "<option selected disabled>Select Compney Name</option>";
      while($row = mysqli_fetch_array($result))
	  {	
 		echo "<option id =".$row['byersid'].">".$row['cname']."</option>";
	  }
}
if(isset($_POST['select']) && isset($_POST['value']))
{
    
      $select = $_POST['select'];
	  $value = $_POST['value'];
    
      $sql = "SELECT name,gstno,address,mobile FROM byers WHERE byersid = '$value'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo (mysqli_error($bd));  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "{$row['name']}||".
		   "{$row['gstno']}||".
           "{$row['address']}||".
           "{$row['mobile']}";
      } 
     
}
if(isset($_POST['inid']) && isset($_POST['cname']) && isset($_POST['name']) && isset($_POST['date']) && isset($_POST['gstno'])  && isset($_POST['address']) && isset($_POST['mobile'])  && isset($_POST['weight'])  && isset($_POST['price'])  && isset($_POST['tamount']) && isset($_POST['gst']) && isset($_POST['sgst']) && isset($_POST['cgst']) && isset($_POST['tgst']) && isset($_POST['total']) && isset($_POST['roundoff']) && isset($_POST['payed'])  && isset($_POST['status'])  && isset($_POST['pay_type'])  && isset($_POST['balance']))
{
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
    $pay_type = $_POST['pay_type'];
    if($pay_type == 'Advance')
    {
      $advance = $payed;
    }
	  $balance = $_POST['balance'];
         
      $sql = "INSERT INTO billing (invoiceno,cname,name,date,gstno,address,mobile,weight,price,totalamount,gst,sgst,cgst,tgst,total,roundoff,payed,status,pay_type,balance,advance) VALUES('$inid','$cname','$name','$date','$gstno','$address','$mobile','$weight','$price','$tamount','$gst','$sgst','$cgst','$tgst','$total',
	     '$roundoff','$payed','$status','$pay_type','$balance','$advance')";

      $result = mysqli_query($bd,$sql);
   	  
      if(!$result) 
      {
		 echo "0";
          
      }
      else 
      {
         echo "1";
      }  
}
if(isset($_POST['billid']) && isset($_POST['load']))
{
    
	  $billid = $_POST['billid'];
    
      $sql = "SELECT * FROM billing WHERE billid = '$billid'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo (mysqli_error($bd));  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "{$row['invoiceno']}||".
		       "{$row['date']}||".
           "{$row['cname']}||".
           "{$row['name']}||".
           "{$row['gstno']}||".
           "{$row['address']}||".
           "{$row['mobile']}||".
           "{$row['weight']}||".
           "{$row['price']}||".
           "{$row['totalamount']}||".
           "{$row['payed']}||".
           "{$row['gst']}||".
           "{$row['sgst']}||".
           "{$row['cgst']}||".
           "{$row['tgst']}||".
           "{$row['total']}||".
           "{$row['roundoff']}||".
           "{$row['status']}||".
           "{$row['pay_type']}||".
           "{$row['balance']}||".
           "{$row['advance']}";
      } 
     
}
if(isset($_POST['reg_up']) && isset($_POST['billid']) && isset($_POST['inid']) && isset($_POST['cname']) && isset($_POST['name']) && isset($_POST['date']) && isset($_POST['gstno'])  && isset($_POST['address']) && isset($_POST['mobile'])  && isset($_POST['weight'])  && isset($_POST['price'])  && isset($_POST['tamount']) && isset($_POST['gst']) && isset($_POST['sgst']) && isset($_POST['cgst']) && isset($_POST['tgst']) && isset($_POST['total']) && isset($_POST['roundoff']) && isset($_POST['advance']) && isset($_POST['payed'])  && isset($_POST['status']) && isset($_POST['instatus']) && isset($_POST['balance'])  && isset($_POST['oper_type']))
{
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
    $advance = $_POST['advance'];
	  $payed = $_POST['payed'];
    $status = $_POST['status'];
	  $pay_type = $_POST['instatus'];
    $balance = $_POST['balance']; 
    $oper_type = $_POST['oper_type'];
    
    if($oper_type == 'Update')  
    {
       $sql = "UPDATE billing SET invoiceno ='$inid',cname ='$cname',name ='$name',date ='$date',gstno ='$gstno',address ='$address',mobile ='$mobile',weight ='$weight',price ='$price',totalamount='$tamount',gst='$gst',sgst='$sgst',cgst='$cgst',tgst='$tgst',
     total='$total',roundoff='$roundoff',advance='$advance' ,payed='$payed',status='$status',pay_type='$pay_type',balance='$balance' WHERE billid = $billid";

      $result = mysqli_query($bd,$sql);
      
      if(!$result) 
      {
         echo (mysqli_error($bd));    
      }
      else 
      {
         echo "1";
      }
    }
    elseif($oper_type == 'Insert')  
    {
       $sql = "INSERT INTO billing (invoiceno,cname,name,date,gstno,address,mobile,weight,price,totalamount,gst,sgst,cgst,tgst,total,roundoff,payed,status,pay_type,balance,advance) VALUES('$inid','$cname','$name','$date','$gstno','$address','$mobile','$weight','$price','$tamount','$gst','$sgst','$cgst','$tgst','$total',
       '$roundoff','$payed','$status','$pay_type','$balance','$advance')";

      $result = mysqli_query($bd,$sql);
      
      if(!$result) 
      {
         echo (mysqli_error($bd));    
      }
      else 
      {
         echo "1";
      }
    }
    else
    {
      echo (mysqli_error($bd));
    }  
        
}
if(isset($_POST['buy_det']))
{
      
      $sql = "SELECT * from billing ORDER BY billid DESC";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "Error On Loding..";  
      }
      while($row = mysqli_fetch_array($result))
	  {	
 		echo "<tr>";
 		echo "<td>".$row['billid']."</td>";
	    echo "<td>".$row['invoiceno']."</td>";
 		echo "<td>".$row['cname']."</td>";									
 		echo "<td>".$row['name']."</td>";
 		echo "<td>".$row['date']."</td>";
 		echo "<td>".$row['mobile']."</td>";
 		echo "<td>".$row['weight']."</td>";
 		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['totalamount']."</td>";
 		echo "<td>".$row['gst']."</td>";
 		echo "<td>".$row['tgst']."</td>";
 		echo "<td>".$row['total']."</td>";
 		echo "<td>".$row['payed']."</td>";
 		echo "<td>".$row['roundoff']."</td>";
		if($row['payed'] < $row['roundoff'])
		{
		  echo "<td>"."<a style=color:#FF0000>".$row['status']."</a></td>";	
		}
		else
		{
		  echo "<td>"."<a style=color:#00ff00>".$row['status']."</a></td>";	  
		}
 		if($row['pay_type'] == "Cash On Deliver")
		{
		  echo "<td>"."<a style=color:#00ff00>".$row['pay_type']."</a></td>";
		}
		else
		{
		  echo "<td>"."<a style=color:#FF0000>".$row['pay_type']."</a></td>";		  
		}
    echo "<td>".$row['balance']."</td>";
		echo "<td>"."<a target=_blank href=./print.php?id_in=".$row['billid'].">Print</a></td>";
 		echo "</tr>";
	  }
}

mysqli_close($bd);
?>