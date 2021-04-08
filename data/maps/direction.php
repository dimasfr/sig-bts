<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
    <style>
   html { height: 100% }
   #panel{padding:5px;}
      .input {
   height: 25px;
   padding: 2px;
   width: 200px;
      }
   #btn{
     height: 31px;
     background: #267BA8;
     border: none;
     padding: 5px;
     color: #fff;
   }
   #map-canvas { height: 550px; width:100%; }
   *{
   margin: 0;
   padding: 0;
  }

    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;
   
  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var latlng = new google.maps.LatLng(-7.95905, 112.648);
    var mapOptions = {
   zoom: 13,
   center: latlng
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    directionsDisplay.setMap(map);
  }
 
  function calcRoute() {
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;
    var request = {
     origin:start,
     destination:end,
     travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
   if (status == google.maps.DirectionsStatus.OK) {
     directionsDisplay.setDirections(response);
   }
    });
  }
 
  google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
 <div class="wrap">
  <div id="panel" align="center">
    <input class="input" id="start" type="text" value="Institute Teknologi Nasional Malang Kampus 2">
    <input class="input" id="end" type="text" value="Universitas Brawijaya">
    <input id="btn" type="button" value="Search" onclick="calcRoute()">
  </div>
  <div id="map-canvas"></div>
 </div>
  </body>
</html>