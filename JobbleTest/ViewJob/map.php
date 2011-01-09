<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


<title>Turkey - Look for a Job</title>
<link rel= "stylesheet" href="stylesheet1_0.css">	



<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="http://code.google.com/apis/gears/gears_init.js"></script>
<script type="text/javascript"> 

var initialLocation;
var toronto = new google.maps.LatLng(43.7, -79.6);
var browserSupportFlag = new Boolean();
var map;
var infowindow = new google.maps.InfoWindow();
var geocoder;

function initialize() {
  var myOptions = {
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  // Try W3C Geolocation method (Preferred)
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      contentString = "You are here";
      map.setCenter(initialLocation);
      infowindow.setContent(contentString);
      infowindow.setPosition(initialLocation);
      infowindow.open(map);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
 
  } else if (google.gears) {
    // Try Google Gears Geolocation
    browserSupportFlag = true;
    var geo = google.gears.factory.create('beta.geolocation');
    geo.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.latitude,position.longitude);
      contentString = "You are here";
      map.setCenter(initialLocation);
      infowindow.setContent(contentString);
      infowindow.setPosition(initialLocation);
      infowindow.open(map);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
 
  } else {
    // Browser doesn't support Geolocation
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }

}


function codeAddress() {
 var address = document.getElementById("address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });


}


function handleNoGeolocation(errorFlag) {
  if (errorFlag == true) {
    initialLocation = toronto;
    contentString = "Error: The Geolocation service failed. I'm guessing you're in Toronto";
  } else {
    initialLocation = toronto;
    contentString = "Error: Your browser doesn't support geolocation. I'm guessing you're in Toronto";
  }
  map.setCenter(initialLocation);
  infowindow.setContent(contentString);
  infowindow.setPosition(initialLocation);
  infowindow.open(map);
}


</script>

</head>


<body onload="initialize()">
  <?php include("../Login/members.php"); ?>
  <div id="canvas">
    <div id="navigation">   
      <?php include("../header.php"); ?>
    </div>
   
    <div id="header">
      <h1>the JOB map</h1>
    </div>
  </div>  
  <div id="map_canvas" style="width:75%; height:50%"></div>
    <div>
    <!--  <input id="address" type="textbox" value="Sydney, NSW"> -->
    <input type="button" value="Encode" onclick="codeAddress()">
  </div>
</body>
</html>