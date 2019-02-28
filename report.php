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
						<li class="breadcrumb-item active" aria-current="page">Report</li>
					 </ol>
				</nav>
				<section class="panel margin-top ">
                    <header class="panel-heading clearfix">
                        <h3><i class="la la-file-text"></i> Export Report</h3>
                    </header>
					<div class="panel-body padding-top">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="btn-group btn-group-toggle date-preset-filters margin-bottom" data-toggle="buttons">
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="lastYear" autocomplete="off" value="lastyear"> Last Year
									  </label>
									  <label class="btn btn-primary">
									    <input type="radio" name="options" id="lastMonth" value="lastmonth" autocomplete="off"> Last Month
									  </label>
									  <label class="btn btn-primary active">
									    <input type="radio" name="options" id="customDate" value="customdate" autocomplete="off" checked> Custom Date
									  </label>
									</div>
								</div>
								<div class="col-md-6">
									<div id="customDatePicker" class="margin-bottom">
										<div class="input-daterange input-group" id="datepicker">
											<span class="input-group-addon">From</span>
										    <input type="text" class="input-sm form-control" name="start" id="inputDateStart"/>
										    <span class="input-group-addon">To</span>
										    <input type="text" class="input-sm form-control" name="end" id="inputDateEnd"/>
										</div>
									</div>
								</div>
							</div>
							<ul class="reporting-form-list margin-top">
								<li>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">General Forms</span>
									</label>
									<div class="reporting-forms">
										<div class="btn-group" data-toggle="buttons">
										  <label class="btn btn-outline-primary">
										    <input type="checkbox" autocomplete="off"><i class="la la-file-text-o"></i> Naxa Form
										  </label>
										  <label class="btn btn-outline-primary">
										    <input type="checkbox" autocomplete="off"><i class="la la-file-text-o"></i> Fieldsight Form
										  </label>
										  <label class="btn btn-outline-primary">
										    <input type="checkbox" autocomplete="off"><i class="la la-file-text-o"></i> UNOPS Form
										  </label>
										</div>
									</div>
								</li>
								<li>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Schedule Forms</span>
									</label>
									<div class="reporting-forms">
										<div class="btn-group" data-toggle="buttons">
										  <label class="btn btn-outline-primary">
										    <input type="checkbox" autocomplete="off"><i class="la la-file-text-o"></i> Naxa Form
										  </label>
										  <label class="btn btn-outline-primary">
										    <input type="checkbox" autocomplete="off"><i class="la la-file-text-o"></i> Fieldsight Form
										  </label>
										  <label class="btn btn-outline-primary">
										    <input type="checkbox" autocomplete="off"><i class="la la-file-text-o"></i> UNOPS Form
										  </label>
										</div>
									</div>
								</li>
							</ul>
							<button class="btn btn-primary margin-top" type="submit"><i class="la la-download"></i> Download Data</button>
						</form>
					</div>
				</section>
				
			</div>
		<?php include 'footer.php';?>
		<script src="assets/js/vendor/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script>
        	$(document).ready(function(){
        		$(".date-preset-filters :input").change(function() {
					//console.log(this.value); // points to the clicked input button
					if(this.value == "customdate"){
						$("#customDatePicker").removeClass('d-none');
					}else{
						$("#customDatePicker").addClass('d-none');
					}
				});
        		$('.input-daterange').datepicker({
	        		todayBtn: "linked",
	        		clearBtn: true,
				    todayHighlight: true,
				    startDate: '-3d',
				    endDate: '0d'
				});
        	});
        </script>
    </body>
</html>
