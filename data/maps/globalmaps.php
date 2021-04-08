<?php include 'proses.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps V3 API Sample</title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script type="text/javascript">

      var map;
      var infoWindow;
     
      function initialize(lt,lg) {
        var mapDiv = document.getElementById('map-canvas');
        map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(-7.95905, 112.648),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        
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
        
        infoWindow = new google.maps.InfoWindow();
          for (var i = 0 ; i < infoid.length; i++) {
            createMarker(infoid[i],infolati[i],infolong[i],infoname[i],infotipe[i]);
          }
            createMarker(infoid[1],infolati[1],infolong[1],infoname[1],infotipe[1]);
        }
     
        function createMarker(inid,lt,lg,message,tipe) {
          var latLng = new google.maps.LatLng(lt,lg);
          var image ;
          if (tipe=='TSEL') {
            image = 'pic/tsel.png';
          }
          else if (tipe=='ISAT') {
            image = 'pic/isat.png';
          }
          else if (tipe=='XL') {
            image = 'pic/xl.png';
          }
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon:image
          });
     
          google.maps.event.addListener(marker, 'click', function() {
            var myHtml = '<strong> Cell Id : '+inid+'<br/>Name : '+message;
            infoWindow.setContent(myHtml);
            infoWindow.open(map, marker);
          });
        }
     
    </script>
  </head>
    <body style="font-family: Arial; border: 0 none;" onload="initialize(-7.983908, 112.621391)">
    <div id="map-canvas" style="width: 100%; height: 580px"></div>
  </body>
</html>