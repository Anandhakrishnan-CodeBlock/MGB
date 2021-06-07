
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
         
      $sql = "INSERT INTO raw_reg (cname,name,gstno,address,mobile,email) VALUES('$cname','$name','$gstno','$address',$mobile,'$email')";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "0"; 
         echo (mysqli_error($bd));  
      }
      else 
      {
         echo "1";
      }  
}
if(isset($_POST['data']) && isset($_POST['sup_up_reg']))
{
      
      $sql = "SELECT regid,cname from raw_reg";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "Error On Loding..";  
      }
     echo "<option selected disabled>Select Compney Name</option>";
      while($row = mysqli_fetch_array($result))
     {   
      echo "<option id=".$row['regid']."  value=".$row['cname'].">".$row['cname']."</option>";
     }
}
if(isset($_POST['select']) && isset($_POST['suplier_select']))
{
    
      $select = $_POST['select'];
      $suplier_select = $_POST['suplier_select'];
    
      $sql = "SELECT regid,cname,name,gstno,address,mobile,email FROM raw_reg WHERE cname = '$suplier_select'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
       echo (mysqli_error($bd));  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "{$row['regid']}||".
           "{$row['cname']}||".
           "{$row['name']}||".
           "{$row['gstno']}||".
           "{$row['address']}||".
           "{$row['mobile']}||".
           "{$row['email']}";
      } 
     
}
if(isset($_POST['sup_reg_up'])  && isset($_POST['cname1']) && isset($_POST['id1']) && isset($_POST['name1']) && isset($_POST['gstno1']) && isset($_POST['address1']) && isset($_POST['mobile1']) && isset($_POST['email1']))
{
      $id = $_POST['id1'];
      $cname = $_POST['cname1'];  
      $name = $_POST['name1'];
      $gstno = $_POST['gstno1'];
      $address = $_POST['address1'];
      $mobile = $_POST['mobile1'];
      $email = $_POST['email1'];
         
      $sql = "UPDATE raw_reg SET cname ='$cname',name ='$name',gstno ='$gstno',address ='$address',mobile ='$mobile',email ='$email' WHERE regid = $id";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "0";
         echo (mysqli_error($bd));  
      }
      else 
      {
         echo "1";
      }  
}
if(isset($_POST['data1']))
{
      
      $sql = "SELECT cname from raw_reg";

      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "Error On Loding..";  
      }
	  echo "<option selected disabled>Select Compney Name</option>";
      while($row = mysqli_fetch_array($result))
	  {	
 		echo "<option value=".$row['cname'].">".$row['cname']."</option>";
	  }
}
if(isset($_POST['select']) && isset($_POST['value']))
{
    
      $select = $_POST['select'];
	  $value = $_POST['value'];
    
      $sql = "SELECT gstno,address,mobile FROM raw_reg WHERE cname = '$value'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
		 echo (mysqli_error($bd));  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "{$row['gstno']}||".
           "{$row['address']}||".
           "{$row['mobile']}";
      } 
     
}
if(isset($_POST['reg']) &&isset($_POST['cname']) && isset($_POST['inid']) && isset($_POST['date']) && isset($_POST['item']) && isset($_POST['gstno']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['weight']) && isset($_POST['unit']) && isset($_POST['price']) && isset($_POST['status']))
{
	  
      $cname = $_POST['cname'];
	  $inid = $_POST['inid'];
	
      $date1 = $_POST['date'];
      $date=date('Y-m-d',strtotime($date1));
	
      $item = $_POST['item'];
      $gstno = $_POST['gstno'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
      $weight = $_POST['weight'];
      $unit = $_POST['unit'];
      $price = $_POST['price'];
      $status = $_POST['status'];
         
      $sql = "INSERT INTO raw_pur(cname,inid,date,item,gstno,address,mobile,weight,unit_price,total_price,status) VALUES('$cname','$inid','$date','$item',$gstno,'$address','$mobile','$weight','$unit','$price','$status')";

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

if(isset($_POST['select']) && isset($_POST['up_puid']))
{
    
      $select = $_POST['select'];
	  $puid = $_POST['up_puid'];
    
      $sql = "SELECT cname,inid,date,item,gstno,address,mobile,weight,unit_price,total_price,status FROM raw_pur WHERE purid = '$puid'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
		 echo (mysqli_error($bd));  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "{$row['inid']}||".
           "{$row['cname']}||".
		   "{$row['date']}||".
           "{$row['item']}||".
		   "{$row['gstno']}||".
           "{$row['address']}||".
		   "{$row['mobile']}||".
           "{$row['weight']}||".
           "{$row['unit_price']}||".
           "{$row['total_price']}||".
           "{$row['status']}";
      } 
     
}
if(isset($_POST['up_reg'])  && isset($_POST['puid']) && isset($_POST['cname']) && isset($_POST['inid']) && isset($_POST['date']) && isset($_POST['item']) && isset($_POST['gstno']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['weight']) && isset($_POST['unit']) && isset($_POST['price']) && isset($_POST['status']))
{
	  $puid = $_POST['puid'];
      $cname = $_POST['cname'];
	  $inid = $_POST['inid'];
	
      $date1 = $_POST['date'];
      $date=date('Y-m-d',strtotime($date1));
	
      $item = $_POST['item'];
      $gstno = $_POST['gstno'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
      $weight = $_POST['weight'];
      $unit = $_POST['unit'];
      $price = $_POST['price'];
      $status = $_POST['status'];
         
      $sql = "UPDATE raw_pur SET cname ='$cname',inid ='$inid',item ='$item',date ='$date',gstno ='$gstno',address ='$address',mobile ='$mobile',weight ='$weight',unit_price ='$unit',total_price ='$price',status ='$status' WHERE purid = $puid";

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

//purchased details
if(isset($_POST['pur_det']))
{
    
      $pur_det = $_POST['pur_det'];
    
      $sql = "SELECT * FROM raw_pur";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "<big>Problem During Displaying Purchased Details</big>";  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "<tr>";
	  echo "<td>".$row['purid']."</td>";
      echo "<td>".$row['inid']." ".$row['lname']."</td>";
	  echo "<td>".$row['cname']."</td>";
	  echo "<td>".$row['gstno']."</td>";
	  echo "<td>".$row['date']."</td>";
	  echo "<td>".$row['address']."</td>";
	  echo "<td>".$row['mobile']."</td>";
      echo "<td>".$row['weight']."</td>";
      echo "<td>".$row['unit_price']."</td>";
      echo "<td>".$row['total_price']."</td>";
	  if($row['status'] == 'Payed')
	  {
		   echo "<td style=color:#00ff00>".$row['status']."</td>";
	  }
      else
	  {
		  echo "<td style=color:#FF0000>".$row['status']."</td>";  
	  }
	  echo "</tr>";
      } 
     
}
mysqli_close($bd);
?>