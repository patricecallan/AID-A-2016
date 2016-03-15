<?php 
  //Database connection

  include "db_connect.php";


//Tell the browser what kind of file is come in

  header("Content-Type: image/jpeg");


//execute the SQL query and return records

  $result = mysqli_query($connection, "SELECT * FROM graph_results");


$num_poller = mysqli_num_rows($result);

  $total_votes = 0;


//fetch the data from the database

  while ($row = mysqli_fetch_assoc($result)) {

  $total_votes += $row{'num_votes'};

  //calculating total number of votes

  }


//nulling the pointer $result

  mysqli_data_seek($result, 0);


$font = 'arial.ttf';


//Set starting point for drawing

  $y = 50;


//Specify constant values

  $width = 700;

  //Image width in pixels

  $bar_height = 20;

  //Bars height

  $height = $num_poller * $bar_height * 1.5 + 70;

  //Calculating image height

  $bar_unit = ($width - 400) / 100;

  //Distance on the bar chart standing for 1 unit


//Create the image resource

  $image = imagecreate($width, $height);


//We are making four colors, white, black, blue and red

  $white = imagecolorallocate($image, 255, 255, 255);

  $black = imagecolorallocate($image, 0, 0, 0);

  $red = imagecolorallocate($image, 255, 0, 0);

  $blue = imagecolorallocate($image, 0, 0, 255);


//Create image background

  imagefill($image, $width, $height, $white);

  //Draw background shape

  imagerectangle($image, 0, 0, $width - 1, $height - 1, $black);

  //Output header

  imagestring($image, 16, $width / 3 + 50, $y - 20, 'Poll Results', $black);


while ($row = mysqli_fetch_object($result)) {

  if ($total_votes > 0)

  $percent = intval(round(($row -> num_votes / $total_votes) * 100));

  else

  $percent = 0;


 //Output header for a particular value

  imagestring($image, 12, 10, $y + ($bar_height / 2), $row -> book_type, $black);


 //Output percentage for a particular value

  imagestring($image, 12, 170, $y + ($bar_height / 2), $percent . '%', $red);


 $bar_length = $percent * $bar_unit;


 //Draw a shape that corresponds to 100%

  imagerectangle($image, $bar_length + 221, $y - 2, (220 + (100 * $bar_unit)), $y + $bar_height, $black);

  //Output a bar for a particular value

  imagefilledrectangle($image, 220, $y - 2, 220 + $bar_length, $y + $bar_height, $blue);

  //Output the number of votes

  imagestring($image, 12, 250 + 100 * $bar_unit, $y + ($bar_height / 2), $row -> num_votes . ' votes cast.', $black);


 //Going down to the next bar

  $y = $y + ($bar_height * 1.5);


}


//Output the newly created image in jpeg format

  imagejpeg($image);


//Free up resources

  imagedestroy($image);
?>

