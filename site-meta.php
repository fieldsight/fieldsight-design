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
						<li class="breadcrumb-item"><a href="site.php">Site</a></li>
						<li class="breadcrumb-item active" aria-current="page">Site Meta Attributes</li>
					 </ol>
				</nav>
				<section class="panel">
                    <header class="panel-heading clearfix">
                        <h3><i class="la la-cogs"></i>Site Meta Attributes</h3>
                    </header>
					<div class="panel-body">
						<!-- Add New Organization-->
						<div id="newOrganization" class="margin-top">
							<form>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label for="input1" class="col-form-label">Input Label:</label>
										<input type="text" class="form-control" id="input1" value="Citizenship Number">
									</div>
									<div class="form-group col-md-4">
										<label for="input2" class="col-form-label">Input Type:</label>
										<select class="form-control" id="input2">
											<option>Text</option>
											<option>Number</option>
											<option>Date</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">&nbsp;</label>
										<br/>
										<button class="btn btn-danger" type="button"><i class="la la-close"></i> Remove</button>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label for="input3" class="col-form-label">Input Label:</label>
										<input type="text" class="form-control" id="input3" value="Home Owner Name">
									</div>
									<div class="form-group col-md-4">
										<label for="input4" class="col-form-label">Input Type:</label>
										<select class="form-control" id="input4">
											<option>Text</option>
											<option>Number</option>
											<option>Date</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label class="col-form-label">&nbsp;</label>
										<br/>
										<button class="btn btn-danger" type="button"><i class="la la-close"></i> Remove</button>
									</div>
								</div>
								<button type="submit" class="btn btn-success"><i class="la la-plus"></i> Add Field</button>
								<button type="submit" class="btn btn-primary"><i class="la la-save"></i> Save Form</button>
							</form>
						</div>
					</div>
                </section>
				
			</div>
		<?php include 'footer.php';?>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
		

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
