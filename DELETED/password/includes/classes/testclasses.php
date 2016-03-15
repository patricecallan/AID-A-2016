<?php
require_once('Item.php');

$item = new Item("1","khhfd");
	 $item->setPrice("1.99");
	 $item->setImage("image1");
echo "<tr>
        <th> Item </th>
        <th> Description </th>
        <th> price </th>
        </tr>";
echo "<td> $item </td>" ;
//echo $item->getPrice();

$item2 = new Item("2","Description 2");
	 $item2->setPrice("1.98");
	 $item2->setImage("image2");
	 echo $item2;
	 
$item3 = new Item("3","Description 3");
	 $item3->setPrice("18.25");
	 $item3->setImage("image3");
	 echo $item3;
//echo $item->getPrice();




?>
