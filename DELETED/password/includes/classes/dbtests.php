<?php
try {
  $connection = new PDO ('mysql:host=patricecallan.co.uk.mysql;dbname=patricecallan_c','patricecallan_c','dBpa22Word');  
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo $e->getMessage();
    die();
}


$sql = "SELECT * FROM books";

  /*** prepare statement ***/

  $stmt = $connection->prepare($sql);

  /*** execute our SQL query ***/

  $stmt->execute();

  /*** bind the results ***/

  $stmt->bind_result($id, $author, $title,$genre);

  /*** loop over the result set ***/

  print "<table border = 1 >"; 

  while ($stmt->fetch()){ 

  print "  <tr>"; 

  print "    <td>" . $author . "</td>"; 

  print "    <td>" . $title . "</td>"; 

  print "    <td>" . $genre . "</td>"; 

  print "  </tr>"; 

  } 

  print "</table>"; 
      


?>