<?php require 'header.php'; ?>
<body>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <?php require 'navbar.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns" style="margin-top: 5%">
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
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDar5EpiPCE6B5K4KwRWeNEBF1l1kOU2H0&callback=initMap">
    </script>
  </body>
</html>

            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
                <?php require 'footer.php'; ?>
            </div>
        </div>
    </div>
</body>