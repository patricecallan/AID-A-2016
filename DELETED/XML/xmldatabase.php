<?php 
header ("Content-Type:text/xml");//Tell browser to expect xml
$connection = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","dBpa22Word","patricecallan_c") or die("Error " . mysqli_error($connection)); 
$query = "SELECT * FROM books"; 
$result = mysqli_query($connection, $query) or die ("Error in query: $query. ".mysql_error()); 
//Top of xml file
$_xml = '<?xml version="1.0"?>'; 
$_xml .="<books>"; 
while($row = mysqli_fetch_array($result)) { 
$_xml .="<book>"; 
$_xml .="<book_id>".$row['id']."</book_id>"; 
$_xml .="<book_title>".$row['title']."</book_title>"; 
$_xml .="<book_author>".$row['author']."</book_author>"; 
$_xml .="<book_genre>".$row['genre']."</book_genre>"; 
$_xml .="</book>"; 
} 
$_xml .="</books>"; 

//Parse and create an xml object using the string
$xmlobj=new SimpleXMLElement($_xml);
//And output
print $xmlobj->asXML();
$xmlobj->asXML('books.xml');

?>