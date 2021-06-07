<?php
include("lib.php");
session_start();


if(isset($_POST['bill_status']))
{
    
      $bill_status = $_POST['bill_status'];
    
      $sql = "SELECT billid,cname,name,date,mobile,roundoff,payed FROM billing WHERE status='Pending'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "<big>Problem During Displaying Invoice Details</big>";  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "<tr>";
	  echo "<td>".$row['billid']."</td>";
      echo "<td>".$row['cname']."</td>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['date']."</td>";
      echo "<td>".$row['mobile']."</td>";
      echo "<td>".$row['roundoff']."</td>";
	  if($row['payed'] < $row['roundoff'])
	  {
		  echo "<td style=color:#FF0000>".$row['payed']."</td>"; 
	  }
      else
	  {
		   echo "<td style=color:#00ff00>".$row['payed']."</td>";
	  }
	  echo "</tr>";
      } 
     
}

if(isset($_POST['adv_inc']))
{
    
      $adv_inc = $_POST['adv_inc'];
    
      $sql = "SELECT empid,fname,lname FROM emp";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "<big>Problem During Displaying Employ Details</big>";  
      }
	  echo "<option disabled selected>Select Employe</option>";
      while($row = mysqli_fetch_array($result)) 
      {
	  echo "<option value=".$row['empid'].">".$row['empid']." ".$row['fname']." ".$row['lname']."</option>";
      } 
     
}

if(isset($_POST['emp_det']))
{
    
      $emp_det = $_POST['emp_det'];
    
      $sql = "SELECT empid,fname,lname,mobile,salery,advance FROM emp WHERE advance !=0";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "<big>Problem During Displaying Employe Details</big>";  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "<tr>";
	  echo "<td>".$row['empid']."</td>";
      echo "<td>".$row['fname']." ".$row['lname']."</td>";
      echo "<td>".$row['mobile']."</td>";
      echo "<td>".$row['salery']."</td>";
	  if($row['advance'] == 0)
	  {
		   echo "<td style=color:#00ff00>".$row['advance']."</td>";
	  }
      else
	  {
		  echo "<td style=color:#FF0000>".$row['advance']."</td>";  
	  }
	  echo "</tr>";
      } 
     
}

if(isset($_POST['empid']) && isset($_POST['option']) && isset($_POST['amount']))
{
    
      $empid = $_POST['empid'];
      $option = $_POST['option'];
      $amount = $_POST['amount'];
    
	  if($empid=="")
	  {
		 echo "0"; 
	  }
	  elseif($option=="advance")
	  {
		  
		$sql = "UPDATE emp SET advance = advance+'$amount' WHERE empid ='$empid'";
        $result = mysqli_query($bd,$sql);
		if(!$result) 
      	{
         echo "a0";  
      	}
		else
		{
		 echo "a1";	  
		}
	  }
	  elseif($option=="increment")
	  {
		
		$sql1 = "UPDATE emp SET salery = salery+'$amount' WHERE empid ='$empid'";
        $result1 = mysqli_query($bd,$sql1);
		if(!$result1) 
      	{
         echo "i0"; 
      	}
		else
		{
		 echo "i1";	  
		}
	  }
	  else
	  {
		echo "0";  
	  }     
}
mysqli_close($bd);
?>