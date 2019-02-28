<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    </head>
    <body class="login-body">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="login-wrap">
		  	<div class="login-bg">
		  		<img src="assets/img/bg-login.png">
		  	</div>
		  	<div class="container-fluid">
		  		<div class="row justify-content-center">
		  			<div class="col-xl-6 col-lg-8">
		  				<div class="login-section">	
		  					<div class="row no-gutters bg-primary">
		  						<div class="col-lg-5">
		  							<div class="sec-left text-center bg-white">
		  								<a href="#" title="" target="">
		  									<img src="assets/img/fieldsight.png" alt="fieldsight" height="100">
		  								</a>
		  								<p class="margin-top d-none d-md-block">
		  								FieldSight is the first humanitarian digital platform designed for project monitoring and infrastructure quality assurance. The platform is now being used to monitor more than 50,000 houses.
		  								</p>
		  							</div>
		  						</div>
		  						<div class="col-lg-7">
		  							<div class="sec-right">
		  								<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
											<li class="nav-item">
											    <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
											</li>
											<li class="nav-item">
											    <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Signup</a>
											</li>
										</ul>
										<div class="tab-content" id="pills-tabContent">
											<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
												<form autocomplete="off">
												  	<div class="form-group">
												    	<label for="inputEmail">Email Address</label>
												    	<input type="email" class="form-control" id="inputEmail" placeholder="e.g., bikrant@example.com">
												  	</div>
												  	<div class="form-group">
												    	<label for="inputPassword">Password</label>
												    	<input type="password" class="form-control" id="inputPassword" placeholder="e.g., **********">
												  	</div>
												  	<div class="row">
												  		<div class="col-sm-6">
												  			<div class="form-group">
														  		<div class="radio">
																  	<input class="checkbox-control" id="inputRemember" type="checkbox" value="" checked="checked">
									    							<label for="inputRemember">Remember me</label>
															  	</div>
														  	</div>
												  		</div>
												  		<div class="col-sm-6">
												  			<div class="form-group">
														  		<p class="help">
														  			<a href="#" title="" id="help-me">Need help?</a>
														  		</p>
														  	</div> 
												  		</div>
												  	</div>
												  	<ul class="list-inline">
												  		<li class="list-inline-item">
												  			<button type="submit" class="btn btn-secondary"><i class="la la-key"></i> Sign In</button>
												  		</li>
												  		<li class="list-inline-item">or use</li>
												  		<li class="list-inline-item">
												  			<button type="submit" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="la la-facebook"></i></button>
												  		</li>
												  		<li class="list-inline-item">
												  			<button type="submit" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Google"><i class="la la-google"></i></button>
												  		</li>
												  	</ul>
												</form>
											</div>
											<div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
												<form>
													<div class="form-group">
												    	<label for="inputSignupEmail">Email Address</label>
												    	<input type="email" class="form-control" id="inputSignupEmail" placeholder="e.g., bikrant@example.com">
												  	</div>
													<div class="form-group">
													    <label for="inputSignupUsername">Username</label>
													    <input type="text" class="form-control" id="inputSignupUsername" placeholder="e.g., bikrant">
													</div>
													<div class="form-group">
													    <label for="inputSignupPassword">Your Password</label>
													    <input type="password" class="form-control" id="inputSignupPassword" placeholder="e.g., **********">
													</div>
													<div class="form-group">
													    <label for="inputSignupRePassword">One More Time?</label>
													    <input type="password" class="form-control" id="inputSignupRePassword" placeholder="e.g., **********">
													</div>
													<p class="mt-3 additional-info">
														By signing up, you’re agreeing with FieldSight’s <a href="#" title="" target="_blank">Terms and Conditions Agreement</a> | <a href="#" title="" target="_blank">Privacy Policy</a>.
													</p>
													<ul class="list-inline">
												  		<li class="list-inline-item">
												  			<button type="button" class="btn btn-secondary" id="btn-signup"><i class="la la-user-plus"></i> Signup</button>
												  		</li>
												  		<li class="list-inline-item">or use</li>
												  		<li class="list-inline-item">
												  			<button type="submit" class="btn btn-secondary"><i class="la la-facebook"></i></button>
												  		</li>
												  		<li class="list-inline-item">
												  			<button type="submit" class="btn btn-secondary"><i class="la la-google"></i></button>
												  		</li>
												  	</ul>
												</form>
											</div>
											<div class="tab-pane fade" id="pills-thankyou" role="tabpanel" aria-labelledby="pills-thankyou-tab">
												<h5 class="mb-3">
													Thank you for joining Fieldsight!
												</h5>
												<p>
													An email has been sent to <strong>l3ikrant@gmail.com</strong>
												</p>
												<p>
													Please click on the link in the email to activate your account.
												</p>
												<button type="button" id="btn-backtologin" class="btn btn-secondary"><i class="la la-long-arrow-left"></i> Back to Login</button>
											</div>
											<div class="tab-pane fade" id="pills-reset" role="tabpanel" aria-labelledby="pills-reset-tab">
												<form>
													<div class="form-group">
													    <label for="inputResetEmail">Email address</label>
													    <input type="email" class="form-control" id="inputResetEmail">
													</div>
													<button type="submit" class="btn btn-secondary"><i class="la la-refresh"></i> Reset</button>
													<button type="button" id="btn-backtologinfromreset" class="btn btn-secondary"><i class="la la-long-arrow-left"></i> Back to Login</button>
												</form>
											</div>
										</div>
			  						</div>
			  					</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			</div>
		</div>
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>-->
	    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="assets/js/vendor/popper.min.js"></script>
	    <script src="assets/js/vendor/bootstrap.min.js"></script>
	    <script src="assets/js/plugins.js"></script>
		<script>
			$(document).ready(function(){
				//
				fn_login_vertically_center();

				//
				vph = $(window).height();
				$(".login-wrap").css("min-height", vph);
				//Converting img tag to parent div bg
				var imgSrc = $(".login-bg>img").attr("src");
	        	$('.login-bg').css({"background" : "url("+imgSrc+")", "background-position": "center", "background-size": "cover"});
	        	$(".login-bg>img").remove();

	        	//reset
	        	fn_login_eqheight();
			    
			    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
					fn_login_eqheight();
					fn_login_vertically_center();
				});

				fn_movebackground();
	        		
			});
			jQuery(window).on('resize', function() {
				//
				vph = $(window).height();
				$(".login-wrap").css("min-height", vph);

				//
				fn_login_eqheight();
				fn_login_vertically_center();
			});

			$("#help-me").click(function(){
			 	$('#pills-login').removeClass('active show');
			 	$('#pills-signup').removeClass('active show');
			 	$("#pills-login-tab").removeClass('active');
			 	$('#pills-reset').tab('show');

			 	fn_login_eqheight();
			 	fn_login_vertically_center();
			});

			$("#btn-signup").click(function(){
			 	$('#pills-signup').removeClass('active show');
			 	$("#pills-signup-tab").removeClass('active');
			 	$('#pills-thankyou').tab('show');

			 	fn_login_eqheight();
			 	fn_login_vertically_center();
			});

			$("#btn-backtologin").click(function(){
			 	$('#pills-thankyou').removeClass('active show');
			 	$('#pills-login').tab('show');
			 	$('#pills-login-tab').addClass('active');

			 	fn_login_eqheight();
			 	fn_login_vertically_center();
			});

			$("#btn-backtologinfromreset").click(function(){
			 	$('#pills-reset').removeClass('active show');
			 	$('#pills-login').tab('show');
			 	$('#pills-login-tab').addClass('active');

			 	fn_login_eqheight();
			 	fn_login_vertically_center();
			});

			function fn_login_vertically_center(){
			 	var svph = $(window).height();
			 	var slfh = $(".login-section").height();
			 	if(svph > (slfh + 60)){
			 		var tempHeight = svph - slfh;
			 		var tempHeight = tempHeight / 2;
			 		$(".login-section").css("margin-top", tempHeight);
			 		$(".login-section").css("margin-bottom", tempHeight);
			 	}else{
			 		$(".login-section").css("margin-top", 30);
			 		$(".login-section").css("margin-bottom", 30);
			 	}
			}

			function fn_movebackground(){
			 	//Background Scrolling Effect
				var lFollowX = 0,
			    lFollowY = 0,
			    x = 0,
			    y = 0,
			    friction = 1 / 30;

				function moveBackground() {
					x += (lFollowX - x) * friction;
					y += (lFollowY - y) * friction;
					
					translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

					$('.login-bg').css({
					    '-webit-transform': translate,
					    '-moz-transform': translate,
					    'transform': translate
					});

					window.requestAnimationFrame(moveBackground);
				}

				$(window).on('mousemove click', function(e) {
					var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
					var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
					lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
					lFollowY = (10 * lMouseY) / 100;
				});

				moveBackground();
			}

			//Equal Height
			function fn_login_eqheight(){
				if(jQuery(document).width() > 479) {
			    	var lHeight, rHeight;
					lHeight = $(".sec-left").outerHeight();
					rHeight = $(".sec-right").outerHeight();
					$(".sec-left" ).css("min-height", rHeight);
				}
			}
		</script>
    </body>
</html>
