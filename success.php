<?php
session_start();

   if (! isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
   	    header("location: login.php");
   }

?>
<h2>you have logged in!</h2>