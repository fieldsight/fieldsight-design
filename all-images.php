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
						<li class="breadcrumb-item"><a href="site-detail.php">Site</a></li>
						<li class="breadcrumb-item active" aria-current="page">All Images</li>
					 </ol>
				</nav>
				<div class="widget-info margin-top bg-white padding">
					<div class="widget-head">
						<h4>All Images</h4>
						<a href="#" class="btn btn-xs btn-primary">
							<i class="la la-download"></i> Download All
						</a>
					</div>
					<div class="widget-body">
						<ul class="row photolist">
							<li class="col-md-2">
								<div class="photo-holder photo-item">
									<img src="http://app.fieldsight.org/media/chapakot/attachments/1521025970023.jpg" img-title="Hello" alt="">
								</div>
							</li>
							<li class="col-md-2">
								<div class="photo-holder photo-item">
									<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
								</div>
							</li>
							<li class="col-md-2">
								<div class="photo-holder photo-item">
									<img src="assets/img/img-gallery.jpg" img-title="Image Title" alt="">
								</div>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		<?php include 'footer.php';?>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/vendor/jquery.bsPhotoGallery.js"></script>
        <script type="text/javascript">
        	opts = {
			   "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-12",
			    "shortText" : false
			}
        	$('ul.photolist').bsPhotoGallery(opts);
        </script>
        <!-- <script>
			$(document).ready(function(){ 
				$('.photo-item img').on('click',function(){
					var title = $(this).attr('img-title');
					var src = $(this).attr('src');
					var img = '<img src="' + src + '" class="img-responsive"/>';
					var html = '';
					html += img;  	


					  //Start of new code
					  var index = $(this).parent('div').index();
					  
					 
					  html += '<div style="height:25px;clear:both;display:block;">';
					  html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
					  html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
					  html += '</div>';
					  //End of new code

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
		</script> -->
    </body>
</html>
