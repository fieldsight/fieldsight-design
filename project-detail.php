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
						<li class="breadcrumb-item active" aria-current="page">Project Detail</li>
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
					<div class="org-profile-head padding clearfix bg-white">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="org-profile-basic-info-left clearfix ">
									<div class="org-profile-logo">
										<img src="assets/img/logo-org1.jpg" width="123" height="123" alt="">
									</div>
									<div class="org-profile-basic-info">
										<h2>Project Youth</h2>
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
									<li>
										<a href="#" title="" class="org-profile-stat-item">
											<i class="la la-map-marker"></i>
											<div class="org-mini-stat-info">
												<span>5</span>
												Sites
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
                    </div>
                    <div class="row">
						<div class="col-lg-6 col-sm-12">
							<div class="widget-info margin-top bg-white padding">
								<div class="widget-head">
									<h4>Site Map</h4>
								</div>
								<div class="widget-body">
									<div id="osMap" class="full-map"></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="widget-info widget-scrolling-large-list margin-top bg-white padding">
										<div class="widget-head">
											<h4>Sites</h4>
											<a class="btn btn-xs btn-primary" data-toggle="modal" href="#addSite" data-target="#siteModal"><i class="la la-plus"></i></a>
											<div class="modal fade" id="siteModal" tabindex="-1" role="dialog" aria-labelledby="siteModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="projectModalLabel">New Site</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form>
															  <div class="form-group">
																<label for="recipient-name" class="form-control-label">Input Field:</label>
																<input type="text" class="form-control" id="recipient-name">
															  </div>
															  
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-sm btn-primary"><i class="la la-plus"></i> Add Site</button>
															<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<a class="btn btn-xs btn-primary" data-toggle="collapse" href="#searchSite" aria-expanded="false" aria-controls="searchSite"><i class="la la-search"></i></a>
										</div>
										<div class="widget-body">
											<!--Search Projects-->
											<div class="collapse margin-bottom" id="searchSite">
												<form>
													<div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
														<span class="input-group-btn">
															<button class="btn btn-primary" type="button"><i class="la la-search"></i> Search</button>
														</span>
													</div>
												</form>
											</div>
											<a href="#" class="project-item-wrap clearfix">
												<div class="project-logo">
													<img src="assets/img/logo-org1.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Site Name</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap clearfix margin-top">
												<div class="project-logo">
													<img src="assets/img/logo-org1.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Site Name</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap clearfix margin-top">
												<div class="project-logo">
													<img src="assets/img/logo-org1.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Site Name</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap clearfix margin-top">
												<div class="project-logo">
													<img src="assets/img/logo-org1.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Site Name</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap clearfix margin-top">
												<div class="project-logo">
													<img src="assets/img/logo-org1.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Site Name</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap clearfix margin-top">
												<div class="project-logo">
													<img src="assets/img/logo-org1.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Site Name</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="widget-info widget-scrolling-large-list margin-top bg-white padding">
										<div class="widget-head">
											<h4>Project Manager</h4>
											<a class="btn btn-xs btn-primary" data-toggle="modal" href="#addProjectManager" data-target="#projectManagerModal"><i class="la la-plus"></i></a>
											<div class="modal fade" id="projectManagerModal" tabindex="-1" role="dialog" aria-labelledby="projectManagerModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="projectManagerModalLabel">New Project Manager</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															  <span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form>
															  <div class="form-group">
																<label for="recipient-name" class="form-control-label">Input Field:</label>
																<input type="text" class="form-control" id="recipient-name">
															  </div>
															  
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-sm btn-primary"><i class="la la-plus"></i> Add Project Manager</button>
															<button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<a class="btn btn-xs btn-primary" data-toggle="collapse" href="#searchProjectManager" aria-expanded="false" aria-controls="searchProjectManager"><i class="la la-search"></i></a>
										</div>
										<div class="widget-body">
											<!--Search Projects-->
											<div class="collapse margin-bottom" id="searchProjectManager">
												<form>
													<div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
														<span class="input-group-btn">
															<button class="btn btn-primary" type="button"><i class="la la-search"></i> Search</button>
														</span>
													</div>
												</form>
											</div>
											<a href="#" class="project-item-wrap clearfix">
												<div class="project-logo">
													<img src="assets/img/img-avatar.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Bikrant Giri</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap margin-top clearfix">
												<div class="project-logo">
													<img src="assets/img/img-avatar.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Bikrant Giri</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap margin-top clearfix">
												<div class="project-logo">
													<img src="assets/img/img-avatar.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Bikrant Giri</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap margin-top clearfix">
												<div class="project-logo">
													<img src="assets/img/img-avatar.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Bikrant Giri</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap margin-top clearfix">
												<div class="project-logo">
													<img src="assets/img/img-avatar.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Bikrant Giri</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
											<a href="#" class="project-item-wrap margin-top clearfix">
												<div class="project-logo">
													<img src="assets/img/img-avatar.jpg" alt="" width="50" height="50">
												</div>
												<div class="project-basic-info">
													<h4>Bikrant Giri</h4>
													<p>Old Baneshwor, Kathmandu, Nepal</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="widget-info margin-top bg-white padding">
								<div class="widget-head">
									<h4>Tabular Report</h4>
									<a class="btn btn-xs btn-primary" href="#"><i class="la la-plus"></i></a>
								</div>
								<div class="widget-body">
									<div class="table-responsive">
									  	<table class="table table-bordered table-hover tabular-report">
									    	<thead class="thead-default">
									    		<tr>
									    			<th scope="col" rowspan="2">Site ID</th>
									    			<th scope="col" rowspan="2">Site Name</th>
									    			<th scope="col">Inspection Phase</th>
									    			<th scope="col" colspan="2">Monitoring Phase</th>
									    			<th scope="col">Another Title</th>
									    			<th scope="col">Another Title</th>
									    			<th scope="col">Another Title</th>
									    		</tr>
									    		<tr>
									    			<th scope="col">Inspection</th>
									    			<th scope="col">Monitoring</th>
									    			<th scope="col">Final Monitoring</th>
									    			<th scope="col">Another Title</th>
									    			<th scope="col">Another Title</th>
									    			<th scope="col">Another Title</th>
									    		</tr>
									    	</thead>
									    	<tbody>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-success">2</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-warning">Value</td>
									    			<td class="cell-danger">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-success">2</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-warning">Value</td>
									    			<td class="cell-danger">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-success">2</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-warning">Value</td>
									    			<td class="cell-danger">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    			<td class="cell-inactive">Value</td>
									    		</tr>
									    		<tr>
									    			<th scope="row">BG4589</th>
									    			<td>Balaju Site</td>
									    			<td class="cell-success">2</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-success">Value</td>
									    			<td class="cell-warning">Value</td>
									    			<td class="cell-danger">Value</td>
									    		</tr>									    		
									    	</tbody>
									  	</table>
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
									<a class="nav-link active" data-toggle="tab" href="#tab1" role="tab">Scheduled</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab2" role="tab">Staged</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab3" role="tab">General</a>
								  </li>
								</ul>

								
								<div class="tab-content">
									<div class="tab-pane active" id="tab1" role="tabpanel">
										<table class="table table-responsive table-hover">
											<thead class="thead-default">
												<tr>
												  <th>S.N.</th>
												  <th>Form Title</th>
												  <th>Created</th>
												  <th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>KAP: Monitoring on Maternal and Child Health - SECTION 7: DEMOGRAPHIC INFORMATION </td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>
														<a class="badge badge-primary" href="#" role="button"><i class="la la-eye"></i> View</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-download"></i> Download</a>
													</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>KAP: Monitoring on Maternal and Child Health - SECTION 4. CHILD CARE </td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>
														<a class="badge badge-primary" href="#" role="button"><i class="la la-eye"></i> View</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-download"></i> Download</a>
													</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>KAP: Monitoring on Maternal and Child Health - SECTION 7: DEMOGRAPHIC INFORMATION </td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>
														<a class="badge badge-primary" href="#" role="button"><i class="la la-eye"></i> View</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-download"></i> Download</a>
													</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>KAP: Monitoring on Maternal and Child Health - SECTION 4. CHILD CARE </td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>
														<a class="badge badge-primary" href="#" role="button"><i class="la la-eye"></i> View</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-download"></i> Download</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="tab-pane" id="tab2" role="tabpanel">...</div>
									<div class="tab-pane" id="tab3" role="tabpanel">...</div>
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
						<div class="col-lg-8 col-md-12">
							<div class="widget-info margin-top bg-white padding">
								<div class="widget-head">
									<h4>About Us</h4>
								</div>
								<div class="widget-body">
									<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="widget-info margin-top bg-white padding">
								<div class="widget-head">
									<h4>Contact Info</h4>
								</div>
								<div class="widget-body">
									<ul class="contact-info-list">
										<li>
											<i class="la la-phone"></i> 01-0204060
										</li>
										<li>
											<i class="la la-fax"></i> 01-1030507
										</li>
										<li>
											<i class="la la-envelope-o"></i> info@domainname.com
										</li>
										<li>
											<i class="la la-globe"></i> www.domainname.com
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                </section>
				
			</div>
			<!--Export Modal-->
						<div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exportModalLabel">Export Report</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
									<div class="form-item-wrapper checkbox-listing">
										<ul>
											<li>
												<input type="checkbox" id="itemAll" data-id="itemAll" data-name="itemAll" /> 
												<label for="itemAll">Select All</label>
												<ul>
													<li>
														<input type="checkbox" data-id="item" data-name="Item" id="item" />
														<label for="item">Stage 1</label>
														<ul>
															<li><input type="checkbox" id="subitem1" data-id="subitem1" data-name="Subitem 1" /> 
															<label for="subitem1">Substage 1</label>
															</li>
															<li><input type="checkbox" id="subitem2" data-id="subitem2" data-name="Subitem 2" /> 
															<label for="subitem2">Substage 2</label>
															</li>
															<li><input type="checkbox" id="subitem3" data-id="subitem3" data-name="Subitem 3" /> 
															<label for="subitem3">Substage 3</label>
															</li>
														</ul>
													</li>
													<li>
														<input type="checkbox" data-id="item2" data-name="Item2" id="item2" />
														<label for="item2">Stage 2</label>
														<ul>
															<li><input type="checkbox" id="subitem21" data-id="subitem21" data-name="Subitem 21" /> 
															<label for="subitem21">Substage 21</label>
															</li>
															<li><input type="checkbox" id="subitem22" data-id="subitem22" data-name="Subitem 22" /> 
															<label for="subitem22">Substage 22</label>
															</li>
															<li><input type="checkbox" id="subitem23" data-id="subitem23" data-name="Subitem 23" /> 
															<label for="subitem23">Substage 23</label>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Export</button>
								  </div>
								</div>
							</div>
						</div>
			
			
		<?php include 'footer.php';?>
		<script src="assets/js/vendor/leaflet.js"></script>
		<script src="assets/js/vendor/slick.min.js"></script>
		<script>
			$(document).ready(function(){ 
				var map = L.map('osMap', {
					center: [51.505, -0.09],
					zoom: 13
				});
				$(".widget-scrolling-large-list > .widget-body, .widget-scrolling-list > .widget-body").niceScroll({cursorborder:"",cursorcolor:"#00628e"});
				
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
					var src = $(this).attr('img-large');
					var img = '<img src="' + src + '" class="img-responsive"/>';
					var html = '';
					html += img;  	
					$('#myModalLabel').modal();
					$('#myModalLabel').on('shown.bs.modal', function(){
						$('#myModalLabel .modal-header .modal-title').html(title);
						$('#myModalLabel .modal-body').html(html);
					})
					$('#myModalLabel').on('hidden.bs.modal', function(){
						$('#myModalLabel .modal-header .modal-title').html('');
						$('#myModalLabel .modal-body').html('');
					});
				});	
			});
		</script>
        <script src="assets/js/vendor/jquery.deepcheckbox.min.js"></script>
		<script>
			    $('.form-item-wrapper').deepcheckbox();
		</script>
        <script src="assets/js/plugins.js"></script>
    </body>
</html>
