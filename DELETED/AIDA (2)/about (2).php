<?php require 'header.php'; ?>



<body>
	<div class="container">
		<div class ="sixteen columns">

		<?php require 'navbar.php'; ?>

		<hr/>
	</div>  
  <div class="sixteen columns">

<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">

var map;

function initMap() {
  var myLatLng = {lat: 53.826889, lng: -1.592806};
 

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Leeds Beckett Headingly'
  });
}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDar5EpiPCE6B5K4KwRWeNEBF1l1kOU2H0&callback=initMap">
    </script>
  </body>
</html>

	</div>

<div class ="sixteen columns"> 

 <?php require 'footer.php'; ?> 

</div>

	</div>

</body>

</html>