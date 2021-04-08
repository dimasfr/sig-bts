<?php
	$eyedentity=($_GET["id"]);
	$query=$koneksi->prepare("SELECT * from data_site where id = $eyedentity");
	$query->execute();
	while($data=$query->fetch()){
	$lati=$data['Latitude'];
	$long=$data['Longitude'];
?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOHiVawuHJneNzKVH5AWoqMoodpQDQLA"></script>
    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;

      function initialize() {
        var inti = {lat: <?php echo $lati ?>, lng: <?php echo $long?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: inti
        });

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
          addMarker(event.latLng, map);
        });

        // Add a marker at the center of the map.
        addMarker(inti, map);
      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map" style="width:100%;height:400px;"></div>
<?php 
}
?>