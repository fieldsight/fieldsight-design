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
		<link rel="stylesheet" href="assets/css/jquery-ui.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
			<?php include 'header.php';?>
			<div id="main-content" class="padding">
				<!-- Nav tabs -->
				<div class="tabbing">
					<ul class="tab-right">
						<li>
							<div class="btn-group">
							  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    View by Status
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="#">View by Form</a>
							  </div>
							</div>
						</li>
					</ul>
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab001" role="tab">General Forms</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab002" role="tab">Scheduled Forms</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab003" role="tab">Staged Form</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="tab001" role="tabpanel">
							<a href="#" title="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assignModal"><i class="la la-upload"></i> Assign New Form</a>
							<!--Assign Form-->
							<div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModalLabel" aria-hidden="true">
								<div class="modal-dialog model-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="assignModalLabel">Assign New Form</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="widget-info margin-top">
														<div class="widget-head">
															<h4>My Forms</h4>
														</div>
														<div class="widget-body">
															<div class="input-group input-group-sm margin-top">
																<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
															</div>
															<div class="form-group margin-top">
																<label class="custom-control custom-radio">
																  <input id="radio1" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
															<div class="form-group">
																<label class="custom-control custom-radio">
																  <input id="radio2" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
															<div class="form-group">
																<label class="custom-control custom-radio">
																  <input id="radio3" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
															<div class="form-group">
																<label class="custom-control custom-radio">
																  <input id="radio4" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="widget-info margin-top">
														<div class="widget-head">
															<h4>Library Forms</h4>
														</div>
														<div class="widget-body margin-top">
															<div class="input-group input-group-sm margin-top">
																<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
															</div>
															<div class="form-group margin-top">
																<label class="custom-control custom-radio">
																  <input id="radio11" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
															<div class="form-group">
																<label class="custom-control custom-radio">
																  <input id="radio12" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
															<div class="form-group">
																<label class="custom-control custom-radio">
																  <input id="radio13" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
															<div class="form-group">
																<label class="custom-control custom-radio">
																  <input id="radio14" name="radio" type="radio" class="custom-control-input">
																  <span class="custom-control-indicator"></span>
																  <span class="custom-control-description">Form Name</span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary"><i class="la la-upload"></i> Assign Form</button>
											<a href="#" class="btn btn-secondary"><i class="la la-file-text"></i> New Form</a>
										</div>
									</div>
								</div>
							</div>
							<a class="btn btn-sm btn-primary" data-toggle="collapse" href="#searchForm" aria-expanded="false" aria-controls="searchForm"><i class="la la-search"></i> Search</a>
							<!--Search Form-->
							<div class="collapse margin-top" id="searchForm">
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
							<!--Form List-->
							<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover margin-top">
								<thead>
									<tr>
										<th>S.N.</th>
										<th>Form Title</th>
										<th>Assigned Date</th>
										<th>Responses</th>
										<th>Education Material</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Daily Activity Report</td>
										<td>Sunday, May 07, 2017, 10:07:39 PM</td>
										<td>10</td>
										<td>
											<a href="#" class="badge badge-light" data-toggle="modal" data-target="#modalMaterial1"><i class="la la-book"></i> Materials</a>
											<!-- Modal -->
											<div class="modal fade" id="modalMaterial1" tabindex="-1" role="dialog" aria-labelledby="modalMaterial1Title" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalMaterial1Title">Education Material</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form>
																<div class="form-group">
																	<label for="inputEMTitle">Title</label>
																	<input type="text" class="form-control" id="inputEMTitle">
																</div>
																<div class="form-group">
																	<label for="inputEMText">Text</label>
																	<textarea class="form-control" id="inputEMText" rows="5"></textarea>
																</div>
																<div class="form-group">
																	<label>Saved Images</label>
																	<div class="row">
																		<div class="col-md-6">
																			<img src="assets/img/img-gallery-large.png" alt="">
																		</div>
																		<div class="col-md-6">
																			<img src="assets/img/img-gallery-large.png" alt="">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label for="inputEMUploadImages">Upload Images</label>
																	<div data-bind="fileDrag: fileData">
																	  <div class="image-upload-preview">
																		<img data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL" class="margin-bottom">
																	  </div>
																	  <div class="image-upload-input">
																		<input type="file" data-bind="fileInput: fileData, , customFileInput: { buttonClass: 'btn btn-success', fileNameClass: 'form-control', onClear: onClear, }" accept="image/*">
																	  </div>
																	</div>
																</div>
																<div class="form-group">
																	<label for="inputEMUploadImages">Upload PDF</label>
																	<div data-bind="fileDrag: multiFileData">
																	  <div class="image-upload-preview">
																		<img data-bind="attr: { src: multiFileData().dataURL }, visible: multiFileData().dataURL" class="margin-bottom">
																	  </div>
																	  <div class="image-upload-input">
																		<input type="file" multiple data-bind="fileInput: multiFileData, , customFileInput: { buttonClass: 'btn btn-success', fileNameClass: 'form-control', onClear: onClear, }" accept=".pdf">
																	  </div>
																	</div>
																</div>
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary">Save changes</button>
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<a class="badge badge-danger" href="#" role="button"><i class="la la-close"></i> Undeploy</a>
											<a class="badge badge-success" href="#" role="button"><i class="la la-edit"></i> Edit</a>
										</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Weekly Activity Report</td>
										<td>Sunday, May 07, 2017, 10:07:39 PM</td>
										<td>20</td>
										<td>
											<a href="#" class="badge badge-light" data-toggle="modal" data-target="#modalMaterial2"><i class="la la-book"></i> Materials</a>
											<!-- Modal -->
											<div class="modal fade" id="modalMaterial2" tabindex="-1" role="dialog" aria-labelledby="modalMaterial2Title" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalMaterial2Title">Education Material</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form>
																<div class="form-group">
																	<label for="inputEMTitle">Title</label>
																	<input type="text" class="form-control" id="inputEMTitle">
																</div>
																<div class="form-group">
																	<label for="inputEMText">Text</label>
																	<textarea class="form-control" id="inputEMText" rows="5"></textarea>
																</div>
																<div class="form-group">
																	<label>Saved Images</label>
																	<div class="row">
																		<div class="col-md-6">
																			<img src="assets/img/img-gallery-large.png" alt="">
																		</div>
																		<div class="col-md-6">
																			<img src="assets/img/img-gallery-large.png" alt="">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label for="inputEMUploadImages">Upload Images</label>
																	<div data-bind="fileDrag: fileData">
																	  <div class="image-upload-preview">
																		<img data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL" class="margin-bottom">
																	  </div>
																	  <div class="image-upload-input">
																		<input type="file" data-bind="fileInput: fileData, , customFileInput: { buttonClass: 'btn btn-success', fileNameClass: 'form-control', onClear: onClear, }" accept="image/*">
																	  </div>
																	</div>
																</div>
																<div class="form-group">
																	<label for="inputEMUploadImages">Upload PDF</label>
																	<div data-bind="fileDrag: multiFileData">
																	  <div class="image-upload-preview">
																		<img data-bind="attr: { src: multiFileData().dataURL }, visible: multiFileData().dataURL" class="margin-bottom">
																	  </div>
																	  <div class="image-upload-input">
																		<input type="file" multiple data-bind="fileInput: multiFileData, , customFileInput: { buttonClass: 'btn btn-success', fileNameClass: 'form-control', onClear: onClear, }" accept=".pdf">
																	  </div>
																	</div>
																</div>
															</form>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary">Save changes</button>
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<a class="badge badge-danger" href="#" role="button"><i class="la la-close"></i> Undeploy</a>
											<a class="badge badge-success" href="#" role="button"><i class="la la-edit"></i> Edit</a>
										</td>
									</tr>
									
								</tbody>
							</table>
						</div>
						</div>
						<div class="tab-pane" id="tab002" role="tabpanel">
							<div class="section-wrap">
								<div class="section-header">
									<h6>Underground Construction</h6>
								</div>
								<div class="section-body no-padding-bottom">
									<a href="#" title="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assignScheduleFormModal"><i class="la la-upload"></i> Assign New Form</a>
									<!--Assign Form-->
									<div class="modal fade" id="assignScheduleFormModal" tabindex="-1" role="dialog" aria-labelledby="assignScheduleFormModalLabel" aria-hidden="true">
										<div class="modal-dialog model-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="assignModalLabel">Assign New Form</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-6 col-sm-12">
															<div class="widget-info margin-top">
																<div class="widget-head">
																	<h4>My Forms</h4>
																</div>
																<div class="widget-body">
																	<div class="input-group input-group-sm margin-top">
																		<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
																	</div>
																	<div class="form-group margin-top">
																		<label class="custom-control custom-radio">
																		  <input id="radio1" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																	<div class="form-group">
																		<label class="custom-control custom-radio">
																		  <input id="radio2" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																	<div class="form-group">
																		<label class="custom-control custom-radio">
																		  <input id="radio3" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																	<div class="form-group">
																		<label class="custom-control custom-radio">
																		  <input id="radio4" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="widget-info margin-top">
																<div class="widget-head">
																	<h4>Library Forms</h4>
																</div>
																<div class="widget-body margin-top">
																	<div class="input-group input-group-sm margin-top">
																		<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
																	</div>
																	<div class="form-group margin-top">
																		<label class="custom-control custom-radio">
																		  <input id="radio11" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																	<div class="form-group">
																		<label class="custom-control custom-radio">
																		  <input id="radio12" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																	<div class="form-group">
																		<label class="custom-control custom-radio">
																		  <input id="radio13" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																	<div class="form-group">
																		<label class="custom-control custom-radio">
																		  <input id="radio14" name="radio" type="radio" class="custom-control-input">
																		  <span class="custom-control-indicator"></span>
																		  <span class="custom-control-description">Form Name</span>
																		</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary"><i class="la la-upload"></i> Assign Form</button>
													<a href="#" class="btn btn-secondary"><i class="la la-file-text"></i> New Form</a>
												</div>
											</div>
										</div>
									</div>
									<a class="btn btn-sm btn-primary" data-toggle="collapse" href="#searchScheduledForm" aria-expanded="false" aria-controls="searchScheduledForm"><i class="la la-search"></i> Search</a>
									<!--Search Form-->
									<div class="collapse margin-top" id="searchScheduledForm">
										<form>
											<div class="row">
												<div class="col-md-4">
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
									<!--Form List-->
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover margin-top">
											<thead>
												<tr>
													<th>S.N.</th>
													<th>Form Title</th>
													<th>Assigned Date</th>
													<th>End Date</th>
													<th>Responses</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Daily Activity Report</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>10</td>
													<td>
														<a class="badge badge-danger" href="#" role="button"><i class="la la-close"></i> Undeploy</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-edit"></i> Edit</a>
													</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Weekly Activity Report</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>20</td>
													<td>
														<a class="badge badge-danger" href="#" role="button"><i class="la la-close"></i> Undeploy</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-edit"></i> Edit</a>
													</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Daily Activity Report</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>15</td>
													<td>
														<a class="badge badge-danger" href="#" role="button"><i class="la la-close"></i> Undeploy</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-edit"></i> Edit</a>
													</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Weekly Activity Report</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>Sunday, May 07, 2017, 10:07:39 PM</td>
													<td>40</td>
													<td>
														<a class="badge badge-danger" href="#" role="button"><i class="la la-close"></i> Undeploy</a>
														<a class="badge badge-success" href="#" role="button"><i class="la la-edit"></i> Edit</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="section-wrap margin-top">
								<div class="section-header">
									<h6 class="clearfix">Deleted Responses <a class="btn btn-primary btn-sm pull-right" data-toggle="collapse" href="#collapseDeletedResponses" role="button" aria-expanded="false" aria-controls="collapseDeletedResponses">Show/Hide</a>
									</h6>
								</div>
								<div class="section-body collapse" id="collapseDeletedResponses">
									<ul class="deleted-responses-list">
										<li>
											First Tranche Final Inspection with
											<a href="#">No Submission</a>
										</li>
										<li>
											Daily Site Report with
											<a href="#">No Submission</a>
										</li>
										<li>
											Excavation with
											<a href="#">No Submission</a>
										</li>
										<li>
											Site Selection with
											<a href="#">No Submission</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab003" role="tabpanel">
							<div id="accordion" role="tablist">
							  <div class="card margin-bottom">
								<div class="card-header clearfix" role="tab" id="headingOne" >
									<div class="stage-name" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Stage Name #1
									</div>
									<div class="stage-action">
										<a href="#" title="" class="btn btn-sm btn-primary"><i class="la la-edit"></i> Edit</a>
										<a href="#" title="" class="btn btn-sm btn-danger"><i class="la la-close"></i> Delete</a>
									</div>
								</div>

								<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									<div class="sub-stages margin-top">
										<h3><i class="la la-sitemap"></i> Sub Stages :</h3>
										<ul id="stage-one-substages">
											<li class="clearfix">
												<span>1. </span>
												<div class="substage-name">
													<strong>Substage Name: </strong> Site Preparation
												</div>
												<div class="substage-form-name">
													<strong>Form Name: </strong> Site Preparation
												</div>
												<div class="substage-submission-status">
													<strong>Default Submission Status: </strong> 
													<select class="form-control form-control-sm">
														<option value="0">Pending</option>
														<option value="3">Approved</option>
													</select>
												</div>
												<div class="substage-educational-material">
													<strong>Educational Material: </strong> Yes
												</div>
												<div class="substage-form-action">
													<a href="#" title="" class="badge badge-primary"><i class="la la-edit"></i> Edit</a>
													<a href="#" title="" class="badge badge-success" data-toggle="modal" data-target="#modalMaterialsf1"><i class="la la-book"></i> Materials</a>
													<!-- Modal -->
													<div class="modal fade" id="modalMaterialsf1" tabindex="-1" role="dialog" aria-labelledby="modalMaterialsf1Title" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="modalMaterial1Title">Education Material</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form>
																		<div class="form-group">
																			<label for="inputEMTitle">Title</label>
																			<input type="text" class="form-control" id="inputEMTitle">
																		</div>
																		<div class="form-group">
																			<label for="inputEMText">Text</label>
																			<textarea class="form-control" id="inputEMText" rows="5"></textarea>
																		</div>
																		<div class="form-group">
																			<label>Saved Images</label>
																			<div class="row">
																				<div class="col-md-6">
																					<img src="assets/img/img-gallery-large.png" alt="">
																				</div>
																				<div class="col-md-6">
																					<img src="assets/img/img-gallery-large.png" alt="">
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="inputEMUploadImages">Upload Images</label>
																			<div data-bind="fileDrag: fileData">
																			  <div class="image-upload-preview">
																				<img data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL" class="margin-bottom">
																			  </div>
																			  <div class="image-upload-input">
																				<input type="file" data-bind="fileInput: fileData, , customFileInput: { buttonClass: 'btn btn-success', fileNameClass: 'form-control', onClear: onClear, }" accept="image/*">
																			  </div>
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="inputEMUploadImages">Upload PDF</label>
																			<div data-bind="fileDrag: multiFileData">
																			  <div class="image-upload-preview">
																				<img data-bind="attr: { src: multiFileData().dataURL }, visible: multiFileData().dataURL" class="margin-bottom">
																			  </div>
																			  <div class="image-upload-input">
																				<input type="file" multiple data-bind="fileInput: multiFileData, , customFileInput: { buttonClass: 'btn btn-success', fileNameClass: 'form-control', onClear: onClear, }" accept=".pdf">
																			  </div>
																			</div>
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-primary">Save changes</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="clearfix">
												<span>2. </span>
												<div class="substage-name">
													<strong>Substage Name: </strong> Site Preparation
												</div>
												<div class="substage-form-name">
													<strong>Form Name: </strong> Site Preparation
												</div>
												<div class="substage-submission-status">
													<strong>Default Submission Status: </strong> 
													<select class="form-control form-control-sm">
														<option value="0">Pending</option>
														<option value="3">Approved</option>
													</select>
												</div>
												<div class="substage-educational-material">
													<strong>Educational Material: </strong> Yes
												</div>
												<div class="substage-form-action">
													<a href="#" title="" class="badge badge-primary"><i class="la la-edit"></i> Edit</a>
													<a href="#" title="" class="badge badge-success"><i class="la la-book"></i> Materials</a>
												</div>
											</li>
										</ul>
									</div>
									<button type="button" class="btn btn-sm btn-primary margin-top"><i class="la la-save"></i> Save Changes</button>
								  </div>
								</div>
							  </div>
							  <div class="card margin-bottom">
								<div class="card-header" role="tab" id="headingTwo">
								  <div class="stage-name" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										Stage Name #2
									</div>
									<div class="stage-action">
										<a href="#" title="" class="btn btn-sm btn-primary"><i class="la la-edit"></i> Edit</a>
										<a href="#" title="" class="btn btn-sm btn-danger"><i class="la la-close"></i> Delete</a>
									</div>
								</div>
								<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
								  <div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								  </div>
								</div>
							  </div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		<?php include 'footer.php';?>
		<script src="assets/js/vendor/jquery-ui.min.js"></script>
		<script src="assets/js/vendor/knockout-3.4.2.js"></script>
		<script src="assets/js/vendor/knockout-file-bindings.js"></script>
		<script>
			$(document).ready(function(){ 
				$( "#accordion" ).sortable({
				  revert: true,
				  handle: "> .card-header",
				  opacity: 0.8,
				  cursor: "move"
				});
				$( "#stage-one-substages" ).sortable({
				  revert: true
				});
				$( "ul, li" ).disableSelection();
			});
			$(function(){
			  var viewModel = {};
			  viewModel.fileData = ko.observable({
				dataURL: ko.observable(),
				// base64String: ko.observable(),
			  });
			  viewModel.multiFileData = ko.observable({
				dataURLArray: ko.observableArray(),
			  });
			  viewModel.onClear = function(fileData){
				if(confirm('Are you sure?')){
				  fileData.clear && fileData.clear();
				}                            
			  };
			  viewModel.debug = function(){
				window.viewModel = viewModel;
				console.log(ko.toJSON(viewModel));
				debugger; 
			  };
			  ko.applyBindings(viewModel);
			});
		</script>
        <script src="assets/js/plugins.js"></script>
    </body>
</html>
