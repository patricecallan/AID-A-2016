<html>
  <head>
    <style type="text/css">
      html, body { height: 100%;   margin: 0; padding: 0; }
      #map { height: 100%; 
       
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">

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
  
  var home;
  
  controlDiv.style.padding = '5px';
  var controlUI = document.createElement('div');
  controlUI.style.backgroundColor = 'yellow';
  controlUI.style.border='1px solid';
  controlUI.style.cursor = 'pointer';
  controlUI.style.textAlign = 'center';
  controlUI.title = 'Set map to London';
  controlDiv.appendChild(controlUI);
  var controlText = document.createElement('div');
  controlText.style.fontFamily='Arial,sans-serif';
  controlText.style.fontSize='12px';
  controlText.style.paddingLeft = '4px';
  controlText.style.paddingRight = '4px';
  controlText.innerHTML = '<b>Home<b>'
  controlUI.appendChild(controlText);
});
}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDar5EpiPCE6B5K4KwRWeNEBF1l1kOU2H0&callback=initMap">
    </script>
  </body>
</html>