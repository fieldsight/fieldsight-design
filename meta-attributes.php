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
						<div class="row">
							<div class="col-md-4">
								<!-- Add New Organization-->
								<div id="newOrganization" class="padding  margin-top">
									<form>
										<div class="form-group">
											<label for="input1" class="col-form-label">Input Label:</label>
											<input type="text" class="form-control" id="input1" value="Qualification">
											<small id="input1Help" class="form-text text-muted">Text in this field will appear as a label for your form field.</small>
										</div>
										<div class="form-group">
											<label for="input2" class="col-form-label">Input Type:</label>
											<select class="form-control" id="input2">
												<option>Text</option>
												<option>Number</option>
												<option>Radio Button</option>
												<option>Checkbox</option>
												<option selected>Select</option>
												<option>Date</option>
											</select>
											<small id="input1Help" class="form-text text-muted">Type of input you want.</small>
										</div>
										<div class="form-group">
											<label for="input2" class="col-form-label">Options:</label>
											<a class="btn btn-xs btn-xs-indi btn-success pull-right" data-toggle="collapse" href="#collapseAddOption" role="button" aria-expanded="false" aria-controls="collapseAddOption">
											    <i class="la la-plus"></i> Add Option
											</a>
											<div class="clearfix"></div>
											<div class="collapse" id="collapseAddOption">
											  	<div class="margin-top">
											    	<div class="form-group">
														<label for="input10" class="col-form-label">Option Title:</label>
														<input type="text" class="form-control" id="input10">
													</div>
											  	</div>
											</div>
											<ul class="multiple-option-list">
												<li>Master Degree <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
												<li>Bachelor Degree <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
												<li>High School <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
												<li>Primary School <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
											</ul>
											<small id="input1Help" class="form-text text-muted">Options for your Multiple Choice form field</small>
										</div>
										<div class="form-group">
											<label for="input2" class="col-form-label">Placeholder:</label>
											<input type="text" class="form-control" id="input2" value="Placeholder">
											<small id="input1Help" class="form-text text-muted">Description for this field</small>
										</div>
										<div class="form-group">
											<label for="input3" class="col-form-label">Help Text:</label>
											<textarea class="form-control" id="input3"></textarea>
											<small id="input1Help" class="form-text text-muted">Description for this field</small>
										</div>

										<button type="submit" class="btn btn-primary"><i class="la la-plus"></i> Add to Form</button>
									</form>
								</div>
							</div>
							<div class="col-md-8">
								<ul id="sortable-fields" class="form-field-list bg-gray margin-top">
									<li>
										<div class="form-field-item">
											<div class="form-group">
												<label for="input11" class="col-form-label">Full Name:</label>
												<span class="field-type"><strong>Type :</strong> Text</span>
												<div class="clearfix"></div>
												<input type="text" class="form-control" id="input11" value="" placeholder="Placeholder">
												<small id="input1Help" class="form-text text-muted">Additional useful text for users.</small>
											</div>
											<div class="form-action">
												<a href="#" class="btn btn-sm btn-primary" title=""><i class="la la-plus"></i></a>
												<br/>
												<a href="#" class="btn btn-sm btn-danger" title=""><i class="la la-close"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="form-field-item margin-top">
											<div class="form-group">
												<label for="input12" class="col-form-label">Password:</label>
												<span class="field-type"><strong>Type :</strong> Password</span>
												<div class="clearfix"></div>
												<input type="password" class="form-control" id="input12" value="" placeholder="******">
												<small id="input1Help" class="form-text text-muted">Additional useful text for users.</small>
											</div>
											<div class="form-action">
												 <a href="#" class="btn btn-sm btn-primary" title=""><i class="la la-plus"></i></a>
												<br/>
												<a href="#" class="btn btn-sm btn-danger" title=""><i class="la la-close"></i></a>
											</div>
										</div>
									</li>
									<li class="active">
										<div class="form-field-item margin-top">
											<div class="form-group">
												<label for="input13" class="col-form-label">Qualification:</label>
												<span class="field-type"><strong>Type :</strong> Select</span>
												<div class="clearfix"></div>
												<select class="form-control" id="input13">
													<option>Master Degree</option>
													<option>Bachelor Degree</option>
													<option>High School</option>
													<option>Primary School</option>
												</select>
												<small id="input1Help" class="form-text text-muted">Additional useful text for users.</small>
											</div>
											<div class="form-action">
												<a href="#" class="btn btn-sm btn-primary" title=""><i class="la la-plus"></i></a>
												<br/>
												<a href="#" class="btn btn-sm btn-danger" title=""><i class="la la-close"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="form-field-item margin-top">
											<div class="form-group">
												<label for="input14" class="col-form-label">Address:</label>
												<span class="field-type"><strong>Type :</strong> Multiline Text</span>
												<div class="clearfix"></div>
												<textarea class="form-control" id="input14" ></textarea>
												<small id="input1Help" class="form-text text-muted">Additional useful text for users.</small>
											</div>
											<div class="form-action">
												 <a href="#" class="btn btn-sm btn-primary" title=""><i class="la la-plus"></i></a>
												<br/>
												<a href="#" class="btn btn-sm btn-danger" title=""><i class="la la-close"></i></a>
											</div>
										</div>
									</li>
								</ul>
								<br/>
								<button type="submit" class="btn btn-primary"><i class="la la-save"></i> Save Changes</button>

							</div>
						</div>
						
						
					</div>
                </section>
				
			</div>
		<?php include 'footer.php';?>
		<script src="assets/js/vendor/jquery-ui.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
		<script>
		  $( function() {
		    $( "#sortable-fields" ).sortable({
		    	//handle: ".btn-field-handle",
		      placeholder: "ui-state-highlight"
		    });
		    $( "#sortable-fields" ).disableSelection();
		  } );
 		 </script>

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
