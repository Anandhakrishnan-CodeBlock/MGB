<?php
// Starting session
session_start();
// Destroying session
unset($_SESSION["username"]);
session_destroy();
header("location: ../login.html");
mysqli_close($bd);
?>