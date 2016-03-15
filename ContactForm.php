<?php require 'header.php'; ?>
<body>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <?php require 'navbar.php'; ?>
            </div>
        </div>
        <div class="row">
            <div class="one-half column" style="margin-top: 5%">
                <form action="send.php" method="post">
                    Your Name: <input name="name" required="" type="text"><br>
                    Comment: 
                    <textarea name="comment" required="">
                    </textarea><br>
                    Your Email: <input name="email" required="" type=
                    "email"><br>
                    Date of Birth: <input name="date" required="" type=
                    "date"><br>
                    <input name="submit" type="submit" value="Send!">
                </form>
    
            </div>
        </div>

        <div class="row">
            <div class="one-half column">
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

  </head>
  <body>
    <div id="map"></div>
    <script>
var map;

function initMap() {
  var myLatLng = {lat: 53.826889, lng: -1.592806};
 

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Leeds Beckett Headingly'
  });
}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDar5EpiPCE6B5K4KwRWeNEBF1l1kOU2H0&callback=initMap"
    async defer></script>

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