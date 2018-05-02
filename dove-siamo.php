<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		img {
			height: 400px;
		}
		nav {
			margin-top: 20px;
			margin-bottom: 40px;
		}
		body {
			background-image: url('images/sfondo2.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		nav ul > li > a {
			font-weight: 900;
		}
	</style>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
 

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm">
      
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Oreficeria "Oro puro"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dove-siamo.html">Dove siamo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          I nostri gioielli
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Artigianato Sardo</a>
          <a class="dropdown-item" href="#">Collane e ciondoli</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Bracciali e anelli</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contatti</a>
      </li>
    </ul>
  </div>
</nav>
    </div>
  </div>  

<div class="container">
  <div class="row">
    <div class="col-md-2">
     
    </div>
    <div class="col-md-8">
         <div id="map"></div>
    <script>

      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: 39.207700, lng: 9.135579}, 
        });

        var image = 'http://2.bp.blogspot.com/_p6UGbKXwgLA/SOzcDdEKneI/AAAAAAAAAwU/EkvOYFnkqrY/S220-s35/fleur011.gif';

        var infowindow = new google.maps.InfoWindow({
          content: "<h3>Oro Puro</h3><p>Laboratorio artigiano e gioielleria. Vendita e lavorazione di materiali preziosi </p>",
          maxWidth: 200
        });

        var marker = new google.maps.Marker({
          position: {lat: 39.207700, lng: 9.135579},
          map: map,
          icon: image
        });
        infowindow.open(map, marker);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBnCMGOQvSAnDwPA4MFuBtmRjJW0_DRuM&callback=initMap">
    </script>
    </div>
    <div class="col-md-2">
     
    </div>
  </div>
</div>

</body>
</html>