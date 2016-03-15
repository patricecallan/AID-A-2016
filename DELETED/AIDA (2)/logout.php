<?php 
session_start(); 

$appUserEmail = $_SESSION["authenticatedUserEmail"]; 

session_destroy();

session_start(); //Start a new session so a message can be created

$_SESSION["message"] =  "User with $appUserEmail has now been logged out from the system. Thank you."; 

header("Location: loginpage.php");   // Relocate back to the login page 
?>
     	