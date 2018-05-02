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
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm">
      
    	<?php include('navbar.php'); ?>
    </div>
  </div>  

  <div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-8">
     <?php include('slideshow.php'); ?>
    </div>
    <div class="col-md-2">
      
  </div>
 </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>