<link rel="stylesheet" href="style.css" type="text/css">

<?php

/* 1. ESTABLISH THE CONNECTION TO THE DB - USING DB DETAILS IN config.php */
		//This connection information could go in the 'init.php' file	
		//NOTE THE USE OF THE mysqli OO INTERFACE/METHODS
		$mysqli_conn = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","dBpa22Word","patricecallan_c") or die("Error " . mysqli_error($link)); 
		if ($mysqli_conn -> connect_errno) {//check the connection
			print "Failed to connect to MySQL: (" . $mysqli_conn -> connect_errno . ") " . $mysqli_conn -> connect_error;
		}
	    //string to create a table
		$tableCreate = "CREATE TABLE books1 (    id int(11) NOT NULL auto_increment,
  			title varchar(255) NOT NULL, 
  			author varchar(255) NOT NULL, 
  			genre varchar(255) NOT NULL, 
	  		PRIMARY KEY (id)
	    )";
		// Drop the table (as we manipulate this data we wish to recreate)
		$query_str = "DROP TABLE IF EXISTS books1 CASCADE ";
		$mysqli_conn -> query($query_str);
	 
	 /* 2.CREATE A TABLE AND INSERT DATA */
		if ($mysqli_conn -> query($tableCreate) === TRUE) {
			print "<b> Table  'books1' successfully created.</b>";
		}
		$query_str = "INSERT INTO `books1` VALUES (1, 'Bridget Jones: Mad About the Boy', 'Fielding, Helen', 'Romance')";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `books1` VALUES (2, 'Gone Girl ', 'Flynn, Gillian', 'Mystery')";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `books1` VALUES (3, 'Da Vinci Code,The', 'Brown, Dan', 'Crime')";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `books1` VALUES (4, 'Twilight', 'Meyer, Stephenie', 'YA Fiction')";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `books1` VALUES (5, 'Man and Boy', 'Parsons, Tony', 'Fiction')";
		$mysqli_conn -> query($query_str);
		$query_str = "INSERT INTO `books1` VALUES (6, 'The Fault in Our Stars', 'Green, John', 'YA Fiction')";
		$mysqli_conn -> query($query_str);
	/* 3. GET RESULTS FROM QUERY AND DISPLAY DATA */	
		$result = $mysqli_conn->query("SELECT * FROM books1");
        print " Query returned ". $result->num_rows . " rows ";; 
        //The function to display data is below
        displayData($result);
		
	/* 4. UPDATE DATA (set all passwords to secret) AND DISPLAY */		
	     print "Changing genre to 'Unknown'; - Affected rows (UPDATE): = ";
	    $mysqli_conn->query("UPDATE books1 SET genre='Unknown'");
  	   
  		print $mysqli_conn->affected_rows;
  		$result = $mysqli_conn->query("SELECT * FROM books1");
  		displayData($result); 
  		
		
	/* 5. DELETE  DATA (delete green) AND DISPLAY */	
		$mysqli_conn->query("DELETE FROM books1 WHERE author = 'Parsons, Tony'");
		print "Deleting row with author = Parsons, Tony";
   		$result = $mysqli_conn->query("SELECT * FROM books1");
  		displayData($result); 
	

	echo 'The function to display the data';
	  function displayData($result){
		print "<table border = 1 >"; 
  			while ($row = $result->fetch_assoc()){ 
  			 
  				print "    <tr>
                            <th>Book ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                            </tr>"; 
				print "    <td>" . $row["id"] . "</td>"; 
  				print "    <td>" . $row["title"] . "</td>"; 
  				print "    <td>" . $row["author"] . "</td>"; 
  				print "    <td>" . $row["genre"] . "</td>"; 
  		
  			} 
  		print "</table>"; 
       }//end of display function
       
?>