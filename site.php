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
				<section class="panel">
                    <header class="panel-heading clearfix">
                        <h3><i class="la la-map-marker"></i>Sites</h3>
						<div class="panel-heading-right">
							<select class="form-control form-control-sm" id="inputSiteFilter">
								<option value="select" selected="selected">Select your option</option>
								<option value="rejected">Rejected</option>
								<option value="flagged">Flagged</option>
								<option value="pending">Pending</option>
								<option value="approved">Approved</option>
								<option value="progress">Progress</option>
								<option value="identifier">Identifier</option>
								<option value="sitename">Name</option>
							</select>
							<a class="btn btn-sm btn-primary" data-toggle="collapse" href="#searchSite" aria-expanded="false" aria-controls="searchSite"><i class="la la-search"></i> Search</a>
							<a href="new-site.php" title="" class="btn btn-sm btn-primary"><i class="la la-plus"></i> Add New</a>
							<a href="site-meta.php" title="" class="btn btn-sm btn-primary"><i class="la la-cogs"></i> Meta Attributes</a>
							<a href="bulk-upload.php" title="" class="btn btn-sm btn-primary"><i class="la la-files-o"></i> Bulk Site  Upload</a>
						</div>
                    </header>
					<div class="panel-body">
						<!--Search Organization-->
						<div class="collapse margin-top" id="searchSite">
							<form class="padding">
								<div class="row">
									<div class="col-md-6 ml-md-auto">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
										  <span class="input-group-btn">
											<button class="btn btn-primary" type="button"><i class="la la-search"></i> Search</button>
										  </span>
										</div>
									</div>
									<div class="col-md-3"></div>
								</div>
							</form>
						</div>
						<!--Site Listing-->
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
							<div class="col-md-4 col-sm-6">
								<a href="site-detail.php" title="" class="site-item-wrap  margin-top clearfix">
									<div class="logo">
										<img src="assets/img/logo-org1.jpg" alt="" width="100" height="100">
									</div>
									<div class="basic-info clearfix">
										<h4>Site Name</h4>
										<span>#SITEID200</span>
										<p>Old Baneshwor, Kathmandu, Nepal</p>
									</div>
									<ul class="icon-listing clearfix margin-top">
										<li>
											<i class="la la-exclamation"></i>
											10
										</li>
										<li>
											<i class="la la-flag"></i>
											5
										</li>
										<li>
											<i class="la la-hourglass-half"></i>
											8
										</li>
										<li>
											<i class="la la-thumbs-up"></i>
											100
										</li>
									</ul>
									<div class="progress margin-top">
									  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!--Pagination-->
						<nav class="margin-top" aria-label="page-navigation">
						  <ul class="pagination justify-content-center">
							<li class="page-item disabled">
							  <a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
							  <a class="page-link" href="#">Next</a>
							</li>
						  </ul>
						</nav>
                </section>
				
			</div>
		<?php include 'footer.php';?>
		
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
		
    </body>
</html>
