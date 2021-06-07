<?php
include("lib.php");
session_start();

//register
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['date']) && isset($_POST['age']) && isset($_POST['salery']) && isset($_POST['aadharno']) && isset($_POST['address']) && isset($_POST['mobile']))
{
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $gender = $_POST['gender'];
    
      $date1 = $_POST['date'];
      $date=date('Y-m-d',strtotime($date1));
    
      $age = $_POST['age'];
      $salery = $_POST['salery'];
      $aadharno = $_POST['aadharno'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
      
       $sql = "INSERT INTO emp (fname,lname,gender,date,age,salery,aadharno,address,mobile) VALUES('$fname','$lname', '$gender',
      '$date', $age, $salery, $aadharno, '$address', $mobile)";

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

//update
if(isset($_POST['empid']))
{
    
      $empid = $_POST['empid'];
    
      $sql = "SELECT fname,lname,gender,date,age,salery,aadharno,address,mobile FROM emp WHERE empid = '$empid'";
        
      $result = mysqli_query($bd,$sql);
   
      if(!$result) 
      {
         echo "0";  
      }
      while($row = mysqli_fetch_array($result)) 
      {
      echo "{$row['fname']}||".
           "{$row['lname']}||".
           "{$row['gender']}||".
           "{$row['date']}||".
           "{$row['age']}||".
           "{$row['salery']}||".
           "{$row['aadharno']}||".
           "{$row['address']}||".
           "{$row['mobile']}";
      } 
     
}

if(isset($_POST['empid']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['date']) && isset($_POST['age']) && isset($_POST['salery']) && isset($_POST['aadharno']) && isset($_POST['address']) && isset($_POST['mobile']))
{
   
      $empid = $_POST['empid'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $gender = $_POST['gender'];
    
      $date1 = $_POST['date'];
      $date=date('Y-m-d',strtotime($date1));
    
      $age = $_POST['age'];
      $salery = $_POST['salery'];
      $aadharno = $_POST['aadharno'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile'];
      
       $sql = "UPDATE emp SET fname ='$fname',lname ='$lname',gender ='$gender',date ='$date',age ='$age',salery ='$salery',aadharno ='$aadharno',address ='$address',mobile ='$mobile' WHERE empid ='$empid'";

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

//employe details
if(isset($_POST['emp_det']))
{
    
      $emp_det = $_POST['emp_det'];
    
      $sql = "SELECT * FROM emp";
        
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
	  echo "<td>".$row['gender']."</td>";
	  echo "<td>".$row['date']."</td>";
	  echo "<td>".$row['age']."</td>";
	  echo "<td>".$row['aatharno']."</td>";
	  echo "<td>".$row['address']."</td>";
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
mysqli_close($bd);
?>