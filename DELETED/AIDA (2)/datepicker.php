<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker - Display multiple months</title>
  
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
</head>
</html>