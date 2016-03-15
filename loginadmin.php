<?php 
session_start();
//$link = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","zjeX9qXM","patricecallan_c") or die("Error " . mysqli_error($link)); 
// Check if we have established an authenticated

if (!isset($_SESSION["authenticatedUserEmail"])) {

$_SESSION["message"] = "You must be logged in to see Admin page. Please Login";

header("Location: loginpage.php");

//Go back and login

}

//If this page hasn't been redirected (we are allowed in) then we can display

?> 

<?php require 'header.php'; ?>



<body>
	<div class="container">
		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>
	</div>  
  <div class="sixteen columns">


<h2>You must be logged in to view this page.</h2> 
<p>Your session variables are as follows:</p> 

<?php print "<p>Email = " . $_SESSION["authenticatedUserEmail"] . "</p>";
print "<p>Customer ID =. " . $_SESSION['uid'] . "</p>";
?>

	</div>

<div class ="sixteen columns"> 

 <?php require 'footer.php'; ?> 

</div>

	</div>

</body>

</html>