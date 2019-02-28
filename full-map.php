<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
			<?php include 'header.php';?>
			<div id="main-content" class="padding">
				<nav aria-label="breadcrumb" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="organization.php">Organization</a></li>
						<li class="breadcrumb-item active" aria-current="page">Organization Map</li>
					 </ol>
				</nav>
				<div class="widget-info margin-top bg-white padding">
					<div class="widget-head">
						<h4>Site Map</h4>
					</div>
					<div class="widget-body">
						<div class="map-radio-wrap">
							<div class="radio">
							  	<input class="switch" id="form_status" type="radio" name="map-radio-group" value="" checked="checked">
    							<label for="form_status">Form Status</label>
						  	</div>
						  	<div class="radio">
							  	<input class="switch" id="project_progress" type="radio" name="map-radio-group" value="">
    							<label for="project_progress">Site Progress</label>
						  	</div>
						</div>
						<div id="osMap" class="full-map"></div>
					</div>
				</div>
				
			</div>
		<?php include 'footer.php';?>
		<script src="assets/js/vendor/leaflet.js"></script>
		<script>
			$(document).ready(function(){ 
				var map = L.map('osMap', {
					center: [51.505, -0.09],
					zoom: 13
				});
					
			});
		</script>
        <script src="assets/js/plugins.js"></script>
    </body>
</html>
