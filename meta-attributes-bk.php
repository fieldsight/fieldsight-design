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
								<div id="newOrganization" class="padding bg-gray margin-top">
									<form>
										<div class="form-group">
											<label for="input1" class="col-form-label">Input Label:</label>
											<input type="text" class="form-control" id="input1" value="Citizenship Number">
											<small id="input1Help" class="form-text text-muted">Text in this field will appear as a label for your form field.</small>
										</div>
										<div class="form-group">
											<label for="input2" class="col-form-label">Input Type:</label>
											<select class="form-control" id="input2">
												<option>Text</option>
												<option>Number</option>
												<option>Radio Button</option>
												<option>Checkbox</option>
												<option>Select</option>
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
												<li>Fieldsight <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
												<li>Naxa Pvt. Ltd <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
												<li>Build Change <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
												<li>Microsoft Corpotation <a href="#" title=""><i class="la la-close"></i>Delete</a></li>
											</ul>
											<small id="input1Help" class="form-text text-muted">Options for your Multiple Choice form field</small>
										</div>

										<button type="submit" class="btn btn-primary"><i class="la la-plus"></i> Add to Form</button>
									</form>
								</div>
							</div>
							<div class="col-md-8">
								<div class="table-responsive margin-top">
									<table class="table table-metalist table-hovered table-bordered">
										<thead class="thead-default">
											<tr>
												<th>S.N.</th>
												<th>Input Label</th>
												<th>Input Type</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>1.</th>
												<td>Full Name</td>
												<td>Text</td>
												<td>
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<th>2.</th>
												<td>Address</td>
												<td>Text Area</td>
												<td>
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<th>3.</th>
												<td>Gender</td>
												<td>Radio</td>
												<td>
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<th>4.</th>
												<td>Hobbies</td>
												<td>Checkbox</td>
												<td>
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<th>5.</th>
												<td>Education</td>
												<td>Select</td>
												<td>
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<th rowspan="3">6.</th>
												<td>Projects</td>
												<td>Multiple Choice</td>
												<td rowspan="3">
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
											<tr>
												<td>Project 1</td>
												<td>Option</td>
											</tr>
											<tr>
												
												<td>Project 2</td>
												<td>Option</td>
											</tr>
											<tr>
												<th>7.</th>
												<td>Citizenship Number</td>
												<td>Number</td>
												<td>
													<a href="#" title="" class="btn btn-success btn-xs"><i class="la la-edit"></i> Edit</a>
													&nbsp;
													<a href="#" title="" class="btn btn-danger btn-xs"><i class="la la-close"></i> Delete</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
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
