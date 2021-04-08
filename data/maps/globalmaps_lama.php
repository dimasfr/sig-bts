<?php include 'proses_lama.php'; ?>
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
        
        infoWindow = new google.maps.InfoWindow();
          for (var i = 0 ; i < infoid.length; i++) {
            createMarker(infoid[i],infolati[i],infolong[i],infoname[i],infotipe[i]);
          }
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