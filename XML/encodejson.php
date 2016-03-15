<?php 
include "db_connect.php";
$sql = "select * from books"; //replace with your table name 

$result = mysqli_query($connection,$sql);
  $jsondata = array();
  while($row=mysqli_fetch_row($result)){
  $jsondata['Book_Information'][]=$row;
  }
  echo json_encode($jsondata);
?>