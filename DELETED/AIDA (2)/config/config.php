<?php
$link = mysqli_connect("patricecallan.co.uk.mysql","patricecallan_c","dBpa22Word","patricecallan_c") or die("Error " . mysqli_error($link)); 

$config['base_url']='http://patricecallan.co.uk/';
//Database
$db['hostname'] = 'patricecallan.co.uk.mysql';
$db['username'] = 'patricecallan_c';
$db['password'] = 'dBpa22Word';
$db['database'] = 'patricecallan_c';
$db['dbdriver'] = 'mysqli';
?>

<link rel="stylesheet" href="/resources/demos/style.css">

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      numberOfMonths: 3,
      showButtonPanel: true
    });
  });
  </script>
