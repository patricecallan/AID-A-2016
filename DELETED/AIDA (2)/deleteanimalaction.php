<link rel="stylesheet" href="style.css" type="text/css">

<?php 
$mysqli_conn = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","dBpa22Word","patricecallan_c") or die("Error " . mysqli_error($link)); 
		if ($mysqli_conn -> connect_errno) {//check the connection
			print "Failed to connect to MySQL: (" . $mysqli_conn -> connect_errno . ") " . $mysqli_conn -> connect_error;
		}

// if id provided, then delete that record

$id = $_GET['id'];

// create query to delete record

$query = "DELETE FROM books WHERE id = '$id' ";

$result = mysqli_query($mysqli_conn, $query) or exit("Error in query: $query. " . mysqli_error($mysqli_conn));

// see if any rows were affected

if (mysqli_affected_rows($mysqli_conn) > 0) {

//If so , return to calling page(stored in the server variables as HTTP_REFERER

header("Location: {$_SERVER['HTTP_REFERER']}");

} else {

// print error message

echo "Error in query: $query. " . mysqli_error($mysqli_conn);

exit ;

}
?>