<link rel="stylesheet" href="style.css" type="text/css">

<?php 
$mysqli_conn = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","dBpa22Word","patricecallan_c") or die("Error " . mysqli_error($link)); 
		if ($mysqli_conn -> connect_errno) {//check the connection
			print "Failed to connect to MySQL: (" . $mysqli_conn -> connect_errno . ") " . $mysqli_conn -> connect_error;
		}

$query = "SELECT * FROM books"; 

$result = mysqli_query($mysqli_conn, $query)  or exit ("Error in query: $query. ".mysqli_error()); 

while ($row = mysqli_fetch_assoc($result))    { 

echo "<tr>
        <th>Book ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Delete?</th>
    </tr>"; 

echo "<td>".$row['id']."</td>"; 

echo "<td>".$row['title']."</td>"; 

echo "<td>".$row['author']."</td>"; 

echo "<td>".$row['genre']."</td>"; 

echo "<td><a href=deleteanimalaction.php?id=".$row["id"].">Delete</a></td>"; 

echo "</tr>";
}
?>