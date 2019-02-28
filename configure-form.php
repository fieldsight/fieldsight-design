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
						<li class="breadcrumb-item active" aria-current="page">Configure Form</li>
					 </ol>
				</nav>
				<div class="row">
					<div class="col-md-4">
						<div class="widget-info bg-white padding" >
							<div class="widget-head">
								<h4>Stages</h4>
							</div>
							<div class="widget-body">
								<ul class="stage-list">
									<li class="active"><span>1.</span> Stage Name</li>
									<li><span>2.</span> Stage Name</li>
									<li><span>3.</span> Stage Name</li>
									<li><span>4.</span> Stage Name</li>
									<li><span>5.</span> Stage Name</li>
								</ul>

								<a data-toggle="collapse" href="#addStage" aria-expanded="false" aria-controls="addStage" title="" class="btn btn-sm btn-primary margin-top"><i class="la la-plus"></i> New Stage</a>

								<!--Add Stage-->
								<div class="collapse margin-top" id="addStage">
									<form class="padding-top">
										<div class="form-group">
										    <label for="inputStageName">Name</label>
										    <input type="text" class="form-control" id="inputStageName">
										</div>
										<div class="form-group">
										    <label for="inputStageDescription">Description</label>
										    <textarea class="form-control" id="inputStageDescription" rows="3"></textarea>
										</div>
										<div class="form-group">
										    <button type="submit" class="btn btn-sm btn-primary"><i class="la la-save"></i> Save</button>
										</div>

									</form>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget-info bg-white padding">
							<div class="widget-head">
								<h4>1. Stage Name</h4>
							</div>
							<div class="widget-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
							</div>
							<div class="widget-head margin-top padding-left">
								<h4>Sub Stages</h4>
							</div>
							<div class="widget-body overflow-auto">
								<ul class="stage-list padding-left">
									<li class="active"><span>1.</span> Sub Stage Name</li>
									<li><span>2.</span> Sub Stage Name</li>
									<li><span>3.</span> Sub Stage Name</li>
									<li><span>4.</span> Sub Stage Name</li>
									<li><span>5.</span> Sub Stage Name</li>
								</ul>

								<a data-toggle="collapse" href="#addSubStage" aria-expanded="false" aria-controls="addSubStage" title="" class="btn btn-sm btn-primary margin-top"><i class="la la-plus"></i> New Sub Stage</a>

								<!--Add Stage-->
								<div class="collapse margin-top" id="addSubStage">
									<form class="padding-top">
										<div class="form-group">
										    <label for="inputSubStageName">Name</label>
										    <input type="text" class="form-control" id="inputSubStageName">
										</div>
										<div class="form-group">
										    <label for="inputSubStageDescription">Description</label>
										    <textarea class="form-control" id="inputSubStageDescription" rows="3"></textarea>
										</div>
										<div class="form-group">
										    <label for="inputSubStageForm">Form</label>
										    <select class="form-control" id="inputSubStageForm"></select>
										</div>
										<div class="form-group">
										    <label for="inputSubStageWeight">Weight</label>
										    <input type="number" min="0" max="100" class="form-control" id="inputSubStageWeight">
										</div>
										<div class="form-group">
										    <label for="inputSubStageTags">Tags</label>
										    <select class="form-control" id="inputSubStageTags">
										    	<option value="1">One</option>
										    	<option value="2">Two</option>
										    	<option value="3">Three</option>
										    	<option value="4">Four</option>
										    </select>
										</div>
										<div class="form-group">
										    <button type="submit" class="btn btn-sm btn-primary"><i class="la la-save"></i> Save</button>
										</div>

									</form>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget-info bg-white padding" data-mh="eq-panel">
							<div class="widget-head">
								<h4>1. Sub Stage Name</h4>
							</div>
							<div class="widget-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php include 'footer.php';?>
		<script src="assets/js/vendor/jquery.matchHeight.js"></script>
		<script src="assets/js/vendor/selectize.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
        	$('#inputSubStageForm').selectize({
			    theme: 'forms',
			    maxItems: 1,
			    valueField: 'id',
			    labelField: 'title',
			    searchField: ['title', 'owner'],
			    options: [
			        {id: 1, title: 'Form Naxa', date: '3/18/2018', owner: 'Arun Bhandari'},
			        {id: 2, title: 'Form Easy', date: '2/18/2018', owner: 'Bikrant Giri'},
			        {id: 3, title: 'Form Fieldsight', date: '2/18/2018', owner: 'Justin'},
			    ],
			    render: {
			        option: function(data, escape) {
			            return '<div class="option">' +
			                    '<span class="title">' + escape(data.title) + '</span>' +
			                    '<span class="date">' + escape(data.date) + '</span>' +
			                    '<span class="owner">' + escape(data.owner) + '</span>' +
			                '</div>';
			        }
			    }
			});
			$('#inputSubStageTags').selectize({
				plugins: ['remove_button'],
			    maxItems: null
			});

			var panelHeight = $(window).height() - $("#header").height() - 79;
			$(".widget-info" ).each(function() {
				$(this).css('min-height', panelHeight);
			});
			
        </script>
		
    </body>
</html>
