<?php
include("lib.php");
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
  // username and password sent from form 
    
      $username = $_POST['username'];
      $password = $_POST['password']; 
      
      $sql = "SELECT id FROM login WHERE username = '$username' and password = '$password'";

      $result = mysqli_query($bd,$sql);
      
      $count = mysqli_num_rows($result);
   
      if($count == 1) 
      {
         //$row = mysqli_fetch_array($sql);
         $_SESSION["username"] = $username;
         //echo $username;
         //echo "-";
         echo $username;
          //header("location: ../index.php");
          //exit();
      }
      else 
      {
         $error = "Your Login Name or Password is invalid";
      }  
}
mysqli_close($bd);
?>