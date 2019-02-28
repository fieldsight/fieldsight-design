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
						<li class="breadcrumb-item"><a href="project-detail.php">Project</a></li>
						<li class="breadcrumb-item active" aria-current="page">Site Detail</li>
					 </ol>
				</nav>
				<div class="org-profile-top-action">
					<div class="action-left">
					
					</div>
					<div class="action-right">
						<span class="dropdown">
							<a href="#" id="dropdownMenuButtonReport" class=" btn btn-sm btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-file-text"></i> Data
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonReport">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exportModal"><i class="la la-reply"></i> View Responses</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#exportModal"><i class="la la-list"></i> Generate Report</a>
							</div>
						</span>
						<span class="dropdown">
							<a href="#" id="dropdownMenuButtonManage" class=" btn btn-sm btn-xs btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-cogs"></i> Manage
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonManage">
								<a class="dropdown-item" href="#"><i class="la la-user"></i> People</a>
								<a class="dropdown-item" href="#"><i class="la la-tasks"></i> Forms</a>
								<a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
							</div>
						</span>
					</div>
				</div>
				<section class="org-profile-body margin-top">
					<div class="row">
						<div class="col-lg-8 col-sm-12">
							<div class="org-profile-head padding clearfix bg-white gh-col">
								<div class="row">
									<div class="col-lg-6 col-sm-12">
										<div class="org-profile-basic-info-left clearfix ">
											<div class="org-profile-logo">
												<img src="assets/img/logo-org1.jpg" width="123" height="123" alt="">
											</div>
											<div class="org-profile-basic-info">
												<h2>Site Name</h2>
												<p>
												Old Baneshwor, Kathmandu<br/>
												Nepal
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-12">
										<ul class="org-profile-stat-list clearfix margin-top">
											<li>
												<a href="#" class="org-profile-stat-item" title="">
													<i class="la la-th-list"></i>
													<div class="org-mini-stat-info">
														<span>10</span>
														Submissions
													</div>
												</a>
											</li>
											<li>
												<a href="#" class="org-profile-stat-item" title="">
													<i class="la la-users"></i>
													<div class="org-mini-stat-info">
														<span>4</span>
														Users
													</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
							</div>-->
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
							</div>
							<div class="widget-info margin-top bg-white padding gh-col">
								<div class="widget-head">
									<h4>About Us</h4>
									<a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#moreMetaAttribute">
									  <i class="la la-plus"></i> View All
									</a>
									<div class="modal fade" id="moreMetaAttribute" tabindex="-1" role="dialog" aria-labelledby="moreMetaAttributeTitle" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h6 class="modal-title" id="moreMetaAttributeTitle">Meta Attributes</h6>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <div class="row">
												<div class="col-md-6">
													<div class="meta-item">
														<p>
															<strong>Name</strong><br/>
															Bikrant Giri
														</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="meta-item">
														<p>
															<strong>Contact Number</strong><br/>
															9800000000
														</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="meta-item margin-top-sm">
														<p>
															<strong>Email Address</strong><br/>
															l3ikrant@gmail.com
														</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="meta-item margin-top-sm">
														<p>
															<strong>Web Address</strong><br/>
															www.bikrantgiri.com.np
														</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="meta-item margin-top-sm">
														<p>
															<strong>Temp Address</strong><br/>
															Balaju, Kathmandu
														</p>
													</div>
												</div>
											</div>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
								</div>
								<div class="widget-body">
									<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
									</p>
									<br/>
									<h6><strong>Meta Data</strong></h6>
									<div class="row">
										<div class="col-md-3">
											<div class="meta-item">
												<p>
													<strong>Name</strong><br/>
													Bikrant Giri
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="meta-item">
												<p>
													<strong>Contact Number</strong><br/>
													9800000000
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="meta-item">
												<p>
													<strong>Email Address</strong><br/>
													l3ikrant@gmail.com
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="meta-item">
												<p>
													<strong>Web Address</strong><br/>
													www.bikrantgiri.com.np
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="meta-item margin-top-sm">
												<p>
													<strong>Temp Address</strong><br/>
													Balaju, Kathmandu
												</p>
											</div>
										</div>
									</div>
									<!-- <p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
									</p> -->
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-12">
							<div class="widget-info widget-site-map margin-top bg-white padding">
								<div class="widget-head">
									<h4>Site Map</h4>
									<a href="full-map.php" title="" class="btn btn-sm btn-xs btn-primary" target="_blank"><i class="la la-map"></i> Full Map</a>
								</div>
								<div class="widget-body">
									<div id="osMap" class="full-map ah-col"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-7">
							<!-- Nav tabs -->
							<div class="tabbing margin-top" data-mh="eqtd">
								<ul class="nav nav-tabs" role="tablist">
								  <li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab001" role="tab">Pending <span class="badge badge-info">1500</span></a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab002" role="tab">Flagged <span class="badge badge-warning">200</span></a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab003" role="tab">Rejected <span class="badge badge-danger">100</span></a>
								  </li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content tab-custom-height">
									<div class="tab-pane active" id="tab001" role="tabpanel">
									  	<div class="table-responsive">
											
											<!-- <table class="table table-striped table-hover">
											    <tbody>
											    	<tr>
														<td class="align-middle">
															<a title="View submission detail" href="#"><strong>Household Survey (घरधुरी सर्वेक्षण)</strong></a>
															<br/>
															<a href="#" title="View details of user"><small><i class="la la-user"></i>chapakot</small></a>
															&nbsp;
															<small class="site_icon_float" style=""><i class="la la-clock-o" aria-hidden="true"></i> 2 hours, 47 minutes ago</small>
														</td>
													</tr>
													<tr>
														<td class="align-middle">
															<a title="View submission detail" href="#"><strong>Household Survey (घरधुरी सर्वेक्षण)</strong></a>
															<br/>
															<a href="#" title="View details of user"><small><i class="la la-user"></i>chapakot</small></a>
															&nbsp;
															<small class="site_icon_float" style=""><i class="la la-clock-o" aria-hidden="true"></i> 2 hours, 47 minutes ago</small>
														</td>
													</tr>
													<tr>
														<td class="align-middle">
															<a title="View submission detail" href="#"><strong>Household Survey (घरधुरी सर्वेक्षण)</strong></a>
															<br/>
															<a href="#" title="View details of user"><small><i class="la la-user"></i>chapakot</small></a>
															&nbsp;
															<small class="site_icon_float" style=""><i class="la la-clock-o" aria-hidden="true"></i> 2 hours, 47 minutes ago</small>
														</td>
													</tr>
													<tr>
														<td class="align-middle">
															<a title="View submission detail" href="#"><strong>Household Survey (घरधुरी सर्वेक्षण)</strong></a>
															<br/>
															<a href="#" title="View details of user"><small><i class="la la-user"></i>chapakot</small></a>
															&nbsp;
															<small class="site_icon_float" style=""><i class="la la-clock-o" aria-hidden="true"></i> 2 hours, 47 minutes ago</small>
														</td>
													</tr>
													
													
											    </tbody>
											</table> -->
										</div>
										<a href="#" title="" class="btn btn-sm btn-outline-primary">View All</a>
									  </div>
									<div class="tab-pane" id="tab002" role="tabpanel">...</div>
									<div class="tab-pane" id="tab003" role="tabpanel">...</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<div class="col-md-12">
									<div class="widget-info margin-top bg-white padding" id="recentPicutres" data-mh="eqtd">
										<div class="widget-head">
											<h4>Recent Pictures</h4>
										</div>
										<!-- <div class="scrollingSlider">
											<div>
												<div class="photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div>
												<div class="photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div>
												<div class="photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div>
												<div class="photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div>
												<div class="photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
										</div> -->
										<div class="row">
											<div class="col-md-4">
												<div class="photo-holder photo-item">
													<img src="http://app.fieldsight.org/media/chapakot/attachments/1521025970023.jpg" img-title="Hello" alt="">
												</div>
											</div>
											<div class="col-md-4">
												<div class="photo-holder photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div class="col-md-4">
												<div class="photo-holder photo-item">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div class="col-md-4">
												<div class="photo-holder photo-item margin-top">
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>
											<div class="col-md-4">
												<div class="photo-holder photo-item margin-top">
													<img src="http://app.fieldsight.org/media/chapakot/attachments/1521025970023.jpg" img-title="Hello" alt="">
												</div>
											</div>
											<div class="col-md-4">
												<div class="photo-holder margin-top">
													<a href="all-images.php" title="" class="count-holder">
														<span class="align-middle">100+</span>
													</a>
													<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
												</div>
											</div>											
										</div>

									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="mini-stat padding-large margin-top clearfix">
								<div class="row">
									<div class="col-md-6">
										<div class="mini-stat-info">
											<span>6804</span>
											Weekly Visitors
										</div>
									</div>
									<div class="col-md-6 clearfix">
										<div id="weekly-visitors" class="linechart mt-2 pull-right"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="mini-stat padding-large margin-top clearfix">
								<div class="row">
									<div class="col-md-6">
										<div class="mini-stat-info">
											<span>8000</span>
											Weekly Submissions
										</div>
									</div>
									<div class="col-md-6 clearfix">
										<div id="weekly-submissions" class="barchart mt-2 pull-right"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="mini-stat padding-large margin-top clearfix">
								<div class="row">
									<div class="col-md-6">
										<div class="mini-stat-info">
											<span>1500</span>
											Weekly Active Supervisors
										</div>
									</div>
									<div class="col-md-6 clearfix">
										<div id="weekly-active-supervisors" class="linechart mt-2 pull-right"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<a href="#" class="mini-stat padding-large margin-top clearfix">
								<span class="mini-stat-icon"><i class="la la-exclamation"></i></span>
								<div class="mini-stat-info">
									<span>10</span>
									Rejected Submissions
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<a href="#" class="mini-stat padding-large margin-top clearfix">
								<span class="mini-stat-icon"><i class="la la-flag"></i></span>
								<div class="mini-stat-info">
									<span>5</span>
									Flagged Submissions
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="mini-stat padding-large margin-top clearfix">
								<span class="mini-stat-icon"><i class="la la-hourglass-half"></i></span>
								<div class="mini-stat-info">
									<span>10</span>
									Pending Submissions
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="mini-stat padding-large margin-top clearfix">
								<span class="mini-stat-icon"><i class="la la-thumbs-up"></i></span>
								<div class="mini-stat-info">
									<span>100</span>
									Approved Submissions
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-12">
							
							<div class="tabbing margin-top">
								<ul class="nav nav-tabs" role="tablist">
								  <li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Project Manager</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Reviewers</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab3" role="tab">Site Supervisors</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab4" role="tab">Contractors</a>
								  </li>
								</ul>

								
								<div class="tab-content">
								  <div class="tab-pane active" id="tab1" role="tabpanel">...</div>
								  <div class="tab-pane" id="tab2" role="tabpanel">...</div>
								  <div class="tab-pane" id="tab3" role="tabpanel">...</div>
								  <div class="tab-pane" id="tab4" role="tabpanel">...</div>
								</div>
							</div>
						</div>
					</div> -->
					<div class="row">
						<div class="col-md-6">
							<div class="widget-info margin-top bg-white padding">
								<div class="widget-head">
									<h4>Form Submissions</h4>
								</div>
								<div class="widget-body">
									<div id="submission-chart"></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget-info margin-top bg-white padding">
								<div class="widget-head">
									<h4>Site Progress</h4>
								</div>
								<div class="widget-body">
									<div id="siteprogress-chart"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="widget-info widget-scrolling-large-list margin-top bg-white padding">
								<div class="widget-head">
									<h4>Site Logs</h4>
								</div>
								<div class="widget-body">
									<div class="log-wrap">
										<h6>Today</h6>
										<ul class="log-list">
											<li>
												<span class="time">10:32:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">09:20:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">07:15:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>	
										</ul>
									</div>
									<div class="log-wrap margin-top">
										<h6>Yesterday</h6>
										<ul class="log-list">
											<li>
												<span class="time">10:32:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">09:20:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">07:15:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>	
										</ul>
									</div>
									<div class="log-wrap margin-top">
										<h6>April 30, 2018</h6>
										<ul class="log-list">
											<li>
												<span class="time">10:32:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">09:20:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">07:15:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>	
										</ul>
									</div>
									<div class="log-wrap margin-top">
										<h6>April 29, 2018</h6>
										<ul class="log-list">
											<li>
												<span class="time">10:32:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">09:20:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>
											<li>
												<span class="time">07:15:30 AM</span>
												<img src="assets/img/img-avatar.jpg" alt="">
												<a href="#" title=""><strong>Rajendra Bajracharya</strong></a> submitted a response for general form <a href="#" title=""><strong>Daily Activity Report</strong></a> in site <a href="#" title=""><strong>Maharajgunj Metropolitan Police Circle</strong></a>.
											</li>	
										</ul>
									</div>
									<div class="row justify-content-center">
										<div class="col-md-6 col-lg-4">
											<a href="#" title="" class="btn btn-primary btn-sm btn-block margin-top">Load More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </section>
				
			</div>

			<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg modal-xl" role="document">
				    <div class="modal-content">
				      	<div class="modal-header">
				        	<h5 class="modal-title" id="exportModalLabel">Export Report</h5>
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          		<span aria-hidden="true">&times;</span>
				        	</button>
				      	</div>
				      	<div class="modal-body bg-light">
				      		<div class="row">
				      			<div class="col-md-4 col-lg-3">
				      				<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
									  <li class="nav-item">
									    <a class="nav-link active" id="modalTab01-tab" data-toggle="tab" href="#modalTab01" role="tab" aria-controls="modalTab01" aria-selected="true">Project Summary</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" id="modalTab02-tab" data-toggle="tab" href="#modalTab02" role="tab" aria-controls="modalTab02" aria-selected="false">Sites Export</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link" id="modalTab03-tab" data-toggle="tab" href="#modalTab03" role="tab" aria-controls="modalTab03" aria-selected="false">Form Data</a>
									  </li>
									</ul>
				      			</div>
				      			<div class="col-md-8 col-lg-9">
				      				<div class="tab-content" id="myTabContent">
									  <div class="tab-pane fade show active" id="modalTab01" role="tabpanel" aria-labelledby="modalTab01-tab">
									  	<form>
											<div class="form-row">
											    <div class="form-group col-md-3">
												    <label for="filterRegion">Region:</label>
												    <select class="form-control form-control-sm" id="filterRegion">
												    	<option>1</option>
												    	<option>2</option>
												    	<option>3</option>
												    	<option>4</option>
												    </select>
											    </div>
											    <div class="form-group col-md-3">
											     	<label for="filterSiteType">Site Type:</label>
												    <select class="form-control form-control-sm" id="filterSiteType">
												    	<option>1</option>
												    	<option>2</option>
												    	<option>3</option>
												    	<option>4</option>
												    </select>
											    </div>
											    <div class="form-group col-md-3">
											      <label for="filterStartDate">Start Date:</label>
											      <input type="date" class="form-control form-control-sm" id="filterStartDate">
											    </div>
											    <div class="form-group col-md-3">
											      <label for="filterEndDate">End Date:</label>
											      <input type="date" class="form-control form-control-sm" id="filterEndDate">
											    </div>
											</div>
										</form>
									  	<ul class="checkbox-list">
							        		<li>
							        			<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" >
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">General Forms</span>
												</label>
												<ul>
													<li>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" >
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description">Retrofitting Go/No-Go with Measurement</span>
														</label>
													</li>
													<li>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" >
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description">Retrofitting Go/No-Go Survey</span>
														</label>
													</li>
													<li>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" >
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description">TSC Visitors - STFC</span>
														</label>
													</li>
												</ul>
							        		</li>
							        		<li>
							        			<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" >
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Stage Forms</span>
												</label>
												<ul>
													<li>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" >
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description">General Inspection</span>
														</label>
													</li>
													<ul>
														<li>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" >
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">General Information</span>
															</label>
														</li>
														<li>
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" >
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">General Information (ALL structural typ.)</span>
															</label>
														</li>
													</ul>
												</ul>
							        		</li>
							        	</ul>
									  </div>
									  <div class="tab-pane fade" id="modalTab02" role="tabpanel" aria-labelledby="modalTab02-tab">
									  	<form>
											<div class="form-row">
											    <div class="form-group col-md-4">
												    <label for="filterRegion">Region:</label>
												    <select class="form-control form-control-sm" id="filterRegion">
												    	<option>1</option>
												    	<option>2</option>
												    	<option>3</option>
												    	<option>4</option>
												    </select>
											    </div>
											    <div class="form-group col-md-4">
											      <label for="filterStartDate">Start Date:</label>
											      <input type="date" class="form-control form-control-sm" id="filterStartDate">
											    </div>
											    <div class="form-group col-md-4">
											      <label for="filterEndDate">End Date:</label>
											      <input type="date" class="form-control form-control-sm" id="filterEndDate">
											    </div>
											</div>
										</form>
									  </div>
									  <div class="tab-pane fade" id="modalTab03" role="tabpanel" aria-labelledby="modalTab03-tab">...</div>
									</div>
				      			</div>
				      		</div>
				      	</div>
				      	<div class="modal-footer">
				        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				        	<button type="button" class="btn btn-primary">PDF</button>
							  <button type="button" class="btn btn-primary">Excel</button>
				      	</div>
				    </div>
			  	</div>
			</div>

		<?php include 'footer.php';?>
		<script src="assets/js/vendor/leaflet.js"></script>
		<script src="assets/js/vendor/slick.min.js"></script>
		<script src="assets/js/vendor/jquery.matchHeight.js"></script>
		<script>
			//jquery depreciated function
			jQuery.browser = {};
			(function () {
			    jQuery.browser.msie = false;
			    jQuery.browser.version = 0;
			    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
			        jQuery.browser.msie = true;
			        jQuery.browser.version = RegExp.$1;
			    }
			})();
		</script>
		<script src="assets/js/vendor/jquery.sparkline.js"></script>
		<script>

			$(document).ready(function(){ 
		        /** This code runs when everything has been loaded on the page */

       			var dailyVisitors = [300,200,500,700,654,987,457];
		        $('.barchart').sparkline(dailyVisitors, {type: 'bar', barColor: '#00628E', height: '40', width: '100%', barWidth: '5', barSpacing: '2', chartRangeMinX: '0'} );
		        $('.linechart').sparkline(dailyVisitors, {type: 'line', highlightLineColor: '#00628E', height: '40', width: '100%', lineWidth: '2',spotRadius: '2', lineColor:'#00628E', spotColor: '#00628E', minSpotColor: '#00628E', maxSpotColor: '#00628E', highlightSpotColor: '#ffc107', valueSpots: {'-1:': '#00628E'}, chartRangeMinX: '0'} ); 

        


				$('.task-detail-handler').on('click', function(event){
				   event.stopPropagation();
				   $(this).siblings('.task-detail-content').collapse('toggle');
				   var hsText = $(this).text();
				   if(hsText == 'See Detail'){
				   		$(this).text('Hide Detail');
				   }else{
				   		$(this).text('See Detail');
				   }
				 });

				

				$('.dropdown-menu li, .loading-content').on('click', function(event){
				   event.stopPropagation();
				 });
				
				 $('.notification-tabs > ul > li > a').on('click', function(event){
				  event.stopPropagation();
				  $(this).tab('show')
				 });

				var map = L.map('osMap', {
					center: [51.505, -0.09],
					zoom: 13
				});
				$(".widget-scrolling-large-list > .widget-body, .widget-scrolling-list > .widget-body").niceScroll({cursorborder:"",cursorcolor:"#00628e",horizrailenabled:false});
				
				$('.scrollingSlider').slick({
				  slidesToShow: 4,
				  arrows: false,
				  autoplay : true,
				  infinite: false,
				  responsive: [
					{
					  breakpoint: 768,
					  settings: {
						arrows: false,
						slidesToShow: 3
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						arrows: false,
						centerMode: true,
						slidesToShow: 1
					  }
					}
				  ]
				});
				$('.photo-item img').on('click',function(){
					var title = $(this).attr('img-title');
					var src = $(this).attr('src');
					var img = '<img src="' + src + '" class="img-responsive"/>';
					var html = '';
					html += img;  	
					$('#myModalLabel').modal();
					$('#myModalLabel').on('shown.bs.modal', function(){
						$('#myModalLabel .modal-header .modal-title').html(title);
						$('#myModalLabel .modal-body').html(html);
					});
					$('#myModalLabel').on('hidden.bs.modal', function(){
						$('#myModalLabel .modal-header .modal-title').html('');
						$('#myModalLabel .modal-body').html('');
					});
				});	

				var height = 0;
				$(".gh-col" ).each(function() {
				    height += $(this).height();
				});
				height = height + 14;
				$(".ah-col" ).height(height);

				var rpHeight = $("#recentPicutres").height();
				var tbHeight = $(".tab-custom-height>.active").height();
				if(rpHeight > tbHeight){
					$(".tab-custom-height>.tab-pane" ).each(function() {
					    $(this).height(rpHeight - 51);
					});
				}


				$("#myTabContent .tab-pane").niceScroll({cursorborder:"",cursorcolor:"#00628e"});
				//fn_generate_report_modal_height();
			});

			$('#exportModal').on('shown.bs.modal', function(){
						fn_generate_report_modal_height();
					});

			jQuery(window).on('resize', function() {
				//
				fn_generate_report_modal_height();
				$("#myTabContent .tab-pane").getNiceScroll().resize();
			});

			function fn_generate_report_modal_height(){
			 	var svph = $(window).height();
			 	var modal_header_height = $("#exportModal .modal-header").outerHeight();
			 	var modal_footer_height = $("#exportModal .modal-footer").outerHeight();
			 	var modal_body_padding =  $("#exportModal .modal-body").innerHeight() - $("#exportModal .modal-body").height();
			 	var modal_outer_gap = $(window).width() - $('.modal-xl').width();
			 	var temp_height = svph - (modal_header_height + modal_footer_height + modal_body_padding + modal_outer_gap);

			 	if($(window).width() > 480){
			 		$("#myTabContent .tab-pane").css("height", temp_height);
			 	}
			 }

		</script>
        <script src="assets/js/plugins.js"></script>
    </body>
</html>
