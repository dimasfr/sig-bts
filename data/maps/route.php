<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Menggambar garis di Google Maps</title>
    <style>
   html { height: 100% }
   #map-canvas { height: 550px;}
   *{
   margin: 0;
   padding: 0;
  }
  @media print {
   #map-canvas {
     height: 500px;
     margin: 0;
   }
    }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
  function initialize() {
     var mapOptions = {
   zoom: 15,
   center: new google.maps.LatLng(-7.97160,112.66874),
   mapTypeId: google.maps.MapTypeId.TERRAIN
    };
 
    var map = new google.maps.Map(document.getElementById('map-canvas'),
     mapOptions);
 
    var mapCoordinates = [
   new google.maps.LatLng(-7.97581,112.67173),
   new google.maps.LatLng(-7.97481,112.67227),
   new google.maps.LatLng(-7.97350,112.67273),
   new google.maps.LatLng(-7.97209,112.67318),
   new google.maps.LatLng(-7.97162,112.67340),
   new google.maps.LatLng(-7.97110,112.67235),
   new google.maps.LatLng(-7.97055,112.67117),
   new google.maps.LatLng(-7.97001,112.67000),
   new google.maps.LatLng(-7.96939,112.66879),
   new google.maps.LatLng(-7.96902,112.66801),
   new google.maps.LatLng(-7.96863,112.66716),
   new google.maps.LatLng(-7.96820,112.66589),
   new google.maps.LatLng(-7.96793,112.66505),
   new google.maps.LatLng(-7.96885,112.66459),
   new google.maps.LatLng(-7.96940,112.66445),
   new google.maps.LatLng(-7.97027,112.66433),
   new google.maps.LatLng(-7.97094,112.66422),
   new google.maps.LatLng(-7.97134,112.66409),
   new google.maps.LatLng(-7.97180,112.66493),
   new google.maps.LatLng(-7.97146,112.66516),
   new google.maps.LatLng(-7.97274,112.66690),
   new google.maps.LatLng(-7.97254,112.66702),
   new google.maps.LatLng(-7.97336,112.66811),
   new google.maps.LatLng(-7.97372,112.66867),
   new google.maps.LatLng(-7.97382,112.66902),
   new google.maps.LatLng(-7.97465,112.67009),
   new google.maps.LatLng(-7.97511,112.67077),
   new google.maps.LatLng(-7.97577,112.67168),
    ];
    var mapPath = new google.maps.Polyline({
   path: mapCoordinates,
   geodesic: true,
   strokeColor: '#0000FF',
   strokeOpacity: 1.0,
   strokeWeight: 3
    });
 
    mapPath.setMap(map);
  }
 
  google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 
  </head>
  <body>
 <div class="wrap">
  <div id="map-canvas"></div>
 </div> 
  </body>
</html>
