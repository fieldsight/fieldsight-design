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
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="login-wrap">
		  	<div class="login-bg">
		  		<img src="assets/img/bg-login.png">
		  	</div>
		  	<div class="container-fluid">
		  		<div class="row justify-content-center">
		  			<div class="col-lg-6">
		  				<div class="login-section">	
		  					<div class="row">
		  						<div class="col-lg-5">
		  							<div class="sec-left text-center">
		  								<a href="#" title="" target="">
		  									<img src="assets/img/fieldsight.png" alt="fieldsight" height="100">
		  								</a>
		  								<p class="margin-top">
		  								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
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
												<form>
												  	<div class="form-group">
												    	<label for="inputEmail">Email address</label>
												    	<input type="email" class="form-control" id="inputEmail">
												  	</div>
												  	<div class="form-group">
												    	<label for="inputPassword">Password</label>
												    	<input type="password" class="form-control" id="inputPassword">
												  	</div>
												  	<div class="row">
												  		<div class="col-md-6">
												  			<div class="form-group">
														  		<div class="radio">
																  	<input class="checkbox-control" id="inputRemember" type="checkbox" value="" checked="checked">
									    							<label for="inputRemember">Remember me</label>
															  	</div>
														  	</div>
												  		</div>
												  		<div class="col-md-6">
												  			<div class="form-group">
														  		<p class="help">
														  			<a href="#" title="">Need help?</a>
														  		</p>
														  	</div> 
												  		</div>
												  	</div>
												  	<button type="submit" class="btn btn-secondary"><i class="la la-key"></i> Sign In</button>
												</form>
											</div>
											<div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
												<h6>We will need..</h6>
												<form>
													<div class="form-group">
													    <label for="inputSignupEmail">Your first name</label>
													    <input type="text" class="form-control" id="inputSignupEmail">
													</div>
													<div class="form-group">
													    <label for="exampleInputEmail1">Email address</label>
													    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
													</div>
													<div class="form-group">
													    <label for="exampleInputPassword1">Password</label>
													    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
													</div>
													<button type="submit" class="btn btn-seycondar">Submit</button>
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
				//Converting img tag to parent div bg
				var imgSrc = $(".login-bg>img").attr("src");
        		$('.login-bg').css({"background" : "url("+imgSrc+")", "background-position": "center", "background-size": "cover"});
        		$(".login-bg>img").remove();

        		//Equal Height
        		function fn_login_eqheight(){

        			var lHeight, rHeight;
					lHeight = $(".sec-left").height();
					rHeight = $(".sec-right").height();
					if(rHeight>lHeight){
						$(".sec-left" ).height(rHeight);
						//$(".sec-right" ).height(rHeight);
						//$(".sec-right").css("height", "auto");
					}else if(rHeight==lHeight){
						// $(".sec-left").css("height", "auto");
						// $(".sec-right").css("height", "auto");
					}else{
						//$(".sec-right" ).height(lHeight);
					}

        		}

        		fn_login_eqheight();

				$(document).bind("click", function() {
				 	 fn_login_eqheight();
				});
				
				//Background Scrolling Effect
				// var lFollowX = 0,
			 //    lFollowY = 0,
			 //    x = 0,
			 //    y = 0,
			 //    friction = 1 / 30;

				// function moveBackground() {
				//   x += (lFollowX - x) * friction;
				//   y += (lFollowY - y) * friction;
				  
				//   translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

				//   $('.login-bg').css({
				//     '-webit-transform': translate,
				//     '-moz-transform': translate,
				//     'transform': translate
				//   });

				//   window.requestAnimationFrame(moveBackground);
				// }

				// $(window).on('mousemove click', function(e) {

				//   var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
				//   var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
				//   lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
				//   lFollowY = (10 * lMouseY) / 100;

				// });

				// moveBackground();
			});

			jQuery(document).on('ready', function() {
        jQuery(window).on('resize', function() {
            /* Tablet Portrait size to standard 960 (devices and browsers) */
            if (jQuery(document).width() < 959 && jQuery(document).width() > 768) {
               //change the attributes from the div #home_content (first parameter: the attribute, what it needs to be)
               jQuery('#home_content').attr('class','sixteen columns');
               jQuery('#slider').attr('class','sixteen columns');

            }
            else{
                //change it back to normal (how the class was)
                jQuery('#home_content').attr('class','nine columns');
                jQuery('#slider').attr('class','nine columns');
            }

            /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
            if(jQuery(document).width() < 767 && jQuery(document).width() > 480) {
                //code
            }
            else{

            }

            /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
            if(jQuery(document).width() < 479) {
                //code
            }   
            else{

            }
        }).trigger('resize'); // Trigger resize handlers.       
    });
		</script>
    </body>
</html>
