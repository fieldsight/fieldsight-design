<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"> -->
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    </head>
    <body class="donor-page overflow-off">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<header id="header" class="main-header clearfix">
			<div class="brand clearfix">
				<a href="#" title="" class="logo">
					<img src="assets/img/logo.png" alt="Field Sight" width="168" height="32">
				</a>
			</div>
			<div class="top-nav clearfix">
				<ul class="right-nav clearfix">
					<li class="dropdown">
						<a href="#" id="dropdownMenuButtonNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="la la-bell"></i>
							<span class="badge badge-warning">4</span>
						</a>
						<div class="dropdown-menu large-dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonNotification">
							<div class="dropdown-header">Notifications (12) </div>
							<div classs="dropdown-item">
									<div class="notification-item">
										<div class="notification-avatar pull-left" href="">
											<i class="avatar-icon la la-bolt"></i>
										</div>
										<div class="notification-highlight">
											<p class="notification-highlight-excerpt">
												<a href="#">hemant</a> submitted a response for General form <a href="#"> Daily Activity Report</a> in site <a href="#">Kobarasian (SAPTARI)</a>
											</p>
											<p class="notification-highlight-time">Dec 18, 2017, 6:14 PM</p>
										</div>
									</div>
							</div>
							<div classs="dropdown-item">
									<div class="notification-item">
										<div class="notification-avatar pull-left" href="">
											<i class="avatar-icon la la-bolt"></i>
										</div>
										<div class="notification-highlight">
											<p class="notification-highlight-excerpt">
												<a href="#">hemant</a> submitted a response for General form <a href="#"> Daily Activity Report</a> in site <a href="#">Kobarasian (SAPTARI)</a>
											</p>
											<p class="notification-highlight-time">Dec 18, 2017, 6:14 PM</p>
										</div>
									</div>
							</div>
							<div class="dropdown-item">
								<div class="notification-item">
									<div class="notification-avatar pull-left" href="">
										<i class="avatar-icon la la-bolt"></i>
									</div>
									<div class="notification-highlight">
										<p class="notification-highlight-excerpt">
											<a href="#">hemant</a> submitted a response for General form <a href="#"> Daily Activity Report</a> in site <a href="#">Kobarasian (SAPTARI)</a>
										</p>
										<p class="notification-highlight-time">Dec 18, 2017, 6:14 PM</p>
									</div>
								</div>
							</div>
							<div class="dropdown-item">
								<div class="notification-item">
									<div class="notification-avatar pull-left" href="">
										<i class="avatar-icon la la-bolt"></i>
									</div>
									<div class="notification-highlight">
										<p class="notification-highlight-excerpt">
											<a href="#">hemant</a> submitted a response for General form <a href="#"> Daily Activity Report</a> in site <a href="#">Kobarasian (SAPTARI)</a>
										</p>
										<p class="notification-highlight-time">Dec 18, 2017, 6:14 PM</p>
									</div>
								</div>
							</div>
							<div class="dropdown-divider"></div>
							<div class="dropdown-header">
								<div class="row">
									<div class="col text-left">
										<a href="#" title="">View All</a>
									</div>
									<div class="col text-right">
										<a href="#" title="">Mark all as read</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" id="dropdownMenuButtonUser" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="user-avatar">
								<img src="assets/img/img-avatar.jpg" alt="">
							</div>
							<span class="hidden-sm hidden-xs">Bikrant</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButtonUser">
							<a class="dropdown-item" href="#"><i class="la la-user"></i> My Profile</a>
							<a class="dropdown-item" href="#"><i class="la la-key"></i> Change Password</a>
							<a class="dropdown-item" href="login.php"><i class="la la-sign-out"></i> Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</header>

		<div id="main-container">
            <div id="map" class="map-holder"></div>
            <aside class="sidebar sb-top-left togglepanels">
                <div class="content-holder">
                    <div class="input-group bs-2 mb-3">
                      <input type="text" class="form-control" placeholder="Search donor.." aria-label="Hydropower" aria-describedby="button-search">
                      <div class="input-group-append">
                        <button class="btn btn-light" type="button" id="button-search"><i class="la la-search"></i></button>
                      </div>
                    </div>
                    <div class="panel-wrap">
                        <div class="panel-header mb-3">
                            <div class="btn-group btn-group-sm btn-group-block btn-2" role="group">
                              <button id = "clear" type="button" class="btn btn-outline-primary">Clear</button>
                              <button id="apply_button" type="button" class="btn btn-primary">Apply</button>
                            </div>
                        </div>
                        <div class="panel-section margin-top">
                            <div class="scrolling-wrap sh-400">
    							<div class="form-group">
                                    <label for="multi-prepend-append" class="control-label"><strong>Projects</strong></label>
                                    <ul class="toggle-list">
                                        <li>
                                            <span><a href="#" title=""><strong>Store files up to 5TB each. Anything you create with Docs, Sheets, or Slides won’t use up any of your storage.</strong></a></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <span><a href="#" title=""><strong>Lamjung</strong></a></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <span><a href="#" title=""><strong>Kathmandu</strong></a></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <span><a href="#" title=""><strong>Bardiya</strong></a></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="multi-prepend-append1" class="control-label"><strong>Progress</strong></label>
                                    <div class="input-group">
                                        <select id="multi-prepend-append1" class="form-control select2-multiple" multiple>
                                            <option id = "p0" value="0_0">0%</option>
                                            <option id = "p1-20" value="1_20">1-20%</option>
                                            <option id = "p21-40" value="21_40">21-40%</option>
                                            <option id = "p41-60" value="41_60">41-60%</option>
                                            <option id = "p61-80" value="61_80">61-80%</option>
                                            <option id = "p81-100" value="81_100">81-100%</option>
                                            <option id = "p100" value="100_100">100%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="multi-prepend-append2" class="control-label"><strong>Form Status</strong></label>
                                    <div class="input-group">
                                        <select id="multi-prepend-append2" class="form-control select2-multiple" multiple>
                                            <option value = "0" id="pending">Pending</option>
                                            <option value = "1" id="outstanding">Outstanding</option>
                                            <option value = "2" id="approved">Approved</option>
                                            <option value = "3" id="rejected">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <aside class="sidebar sidebar-md sb-top-right togglepanels" >
                <div class="content-holder">
                    <div class="map-controls">
                        <div id = "zoomin" class="mc-item">
                            <i class="la la-plus"></i>
                        </div>
                        <div id = "zoomout" class="mc-item">
                            <i class="la la-minus"></i>
                        </div>
                        <div id = "refresh" class="mc-item">
                            <i class="la la-refresh"></i>
                        </div>
                        <div id = "eye-slash" class="mc-item">
                            <i class="la la-eye-slash"></i>
                        </div>
                    </div>
                    <div class="scrolling-wrap sh-custom mt-3">
                        <div class="tabbing tab-panel">
                            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="tab001-tab" data-toggle="tab" href="#tab001" role="tab" aria-controls="tab001" aria-selected="true"><i class="la la-crosshairs"></i> Layers</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="tab002-tab" data-toggle="tab" href="#tab002" role="tab" aria-controls="tab002" aria-selected="false"><i class="la la-map"></i> Base Layers</a>
                              </li>
                            </ul>
                            <div class="tab-content bg-white" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab001" role="tabpanel" aria-labelledby="tab001-tab">

                                    <ul class="toggle-list">
                                        <li>
                                            <span><strong>River</strong></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <span><strong>Road</strong></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <span><strong>Trans</strong></span>
                                            <label class="switch switch-xxs">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                              <div class="tab-pane fade" id="tab002" role="tabpanel" aria-labelledby="tab002-tab">
                                <ul class="maptype-list">
                                    <li id = "osm" class="baselyr active">
                                        <span class="img-maptype mt-terrain"></span>
                                        <h6>OpenStreet Map</h6>
                                    </li>
                                    <li id="osm_style" class = "baselyr">
                                        <span class="img-maptype mt-satellite"></span>
                                        <h6>Styled OSM</h6>
                                    </li>
                                    <li id="googleStreets" class = "baselyr">
                                        <span class="img-maptype mt-openstreet"></span>
                                        <h6>Google Streets</h6>
                                    </li>
                                    <li id = "googleTerrain" class = "baselyr">
                                        <span class="img-maptype mt-dark"></span>
                                        <h6>Google Terrain</h6>
                                    </li>
                                    <li id = "googleSat" class = "baselyr">
                                        <span class="img-maptype mt-positron"></span>
                                        <h6>Google Satellite</h6>
                                    </li>
                                    <li id = "googleHybrid" class = "baselyr">
                                        <span class="img-maptype mt-hybrid"></span>
                                        <h6>Google Hybrid</h6>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            
                        </div> 
                        <div class="panel-wrap mt-3">
                                <div class="panel-header">
                                    <h6><strong>View Sites By</strong></h6>
                                </div>
                                <div class="panel-section">
                                    <ul class="widget-list mt-3" >
                                        <li>
                                            <div class="form-group">
                                                <select class="select2" name="state" id="inputStatus">
                                                    <option name = "siteProgressOption">Projects</option>
                                                    <option name = "siteProgressOption">Site Progress</option>
                                                    <option name = "formStatusOption">Form Status</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id = "legend">
                                        <div id = "form_legend">
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </aside>

        </div>
			
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>-->
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="assets/js/vendor/popper.min.js"></script>
		<script src="assets/js/vendor/jquery-ui.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

		<script src="assets/js/vendor/jquery.nicescroll.min.js"></script>
		<script src="assets/js/vendor/select2.min.js"></script>
		<script src="assets/js/leaflet/leaflet-src.js"></script>
        <script src="assets/js/vendor/jQDateRangeSlider-min.js"></script>
        <script src="assets/js/leaflet/leaflet.markercluster-src.js"></script>
        <script src="assets/js/gradstop.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script>
        	$(document).ready(function(){
                

                //Map Height
                mapHeight();
                mapInnerContentHeight();
                window.onresize = function(event) {
                    mapHeight();
                    mapInnerContentHeight();
                }

                function mapHeight() {
                    vph = $(window).height();
                    vph = vph - $("#header").height();
                    $("#map").height(vph);
                }

                function mapInnerContentHeight(){
                    vph = $(window).height();
                    vph = vph - $("#header").height() - 48;
                    $(".sh-custom").height(vph);
                    
                }

                //Make it scroll
                if ($.fn.niceScroll) {
                    $(".scrolling-wrap").niceScroll({
                        cursorcolor: "#00628E",
                        cursorborderradius: "0px",
                        cursorborder:"",
                        cursorwidth: "8px",
                        //autohidemode: false
                    });
                    $(".scrolling-wrap").mouseover(function() {
                      $(".scrolling-wrap").getNiceScroll().resize();
                    });
                }

                $(".widget-header").click(function(){
                    $(this).find('i').toggleClass('la-plus-square');
                });


                
                $('.select2').select2();
                
                
                $("#dateslider").dateRangeSlider();
				$(".select2-multiple").select2({
					minimumResultsForSearch: -1,
					placeholder: "Select",
					allowClear: true,
					theme: "bootstrap"
				});
				
				$('#eye-slash').on('click',function(){
					//console.log($(".togglepanels").css('display'));
					// if($(".togglepanels").css('display') == "block"){
					// 	$(".togglepanels").css('display','none');
					// }
					// else {
					// 	$(".togglepanels").css('display','block');
					// }
                    if($(".panel-wrap").css('display') == "block"){
                        $(".panel-wrap").css('display','none');
                    }
                    else {
                        $(".panel-wrap").css('display','block');
                    }
                    if($(".tab-panel").css('display') == "block"){
                        $(".tab-panel").css('display','none');
                    }
                    else {
                        $(".tab-panel").css('display','block');
                    }
					
				});
				

				
				/*$("#projects").on('click',function(){
					if($(this).is(':checked')){
						$("#multi-prepend-append").val("").trigger('change');
					}
					
				});
				$("#multi-prepend-append").on('change',function(){
					console.log($(this).val().length);
					if($(this).val().length !=0){
						console.log("here");
						$("#projects")[0].checked = false;
					}
				});
				$("#site_progress").on('click',function(){
				
				});
				$("#form_status").on('click',function(){
				
				});		*/

				/*$("#inputStatus").on('change',function(){
					var name = $("#inputStatus option:selected").attr('name');
					//console.log(name);
					if(name == "siteProgressOption"){ console.log("site progress");
						$("#siteProgress").css('display','block');
						$("#formStatus").css('display','none');
					}
					else {
						$("#formStatus").css('display','block');
						$("#siteProgress").css('display','none');
					}
					
					
				});*/
				
        	});
        </script>
        <script>
            $(document).ready(function(){
				var projectList = [
					{
						"id": 129,
						"latitude": "27.717673005",
						"longitude": "85.359375",
						"type_label": "School",
						"organization_label": "NAXA",
						"name": "Tanahun",
						"phone": "",
						"fax": "",
						"email": "",
						"address": "",
						"website": "",
						"donor": "",
						"public_desc": "",
						"additional_desc": "",
						"logo": "https://naxafieldsight.s3.amazonaws.com/logo/IMG_3852.PNG",
						"is_active": true,
						"location": "SRID=4326;POINT (176.8359375000000000 27.3717673005230466)",
						"date_created": "2018-03-11T09:28:12.362695Z",
						"cluster_sites": true,
						"site_meta_attributes": "[{u'question_name': u'Additional_Question_', u'question_text': u'Additional Question ', u'is_deleted': False, u'question_type': u'Text'}]",
						"type": 1,
						"organization": 12,
						"geo_layers": []
					},
					{
						"id": 130,
						"latitude": "27.8",
						"longitude": "85.459375",
						"type_label": "road",
						"organization_label": "DFID",
						"name": "Lamjung",
						"phone": "",
						"fax": "",
						"email": "",
						"address": "",
						"website": "",
						"donor": "",
						"public_desc": "",
						"additional_desc": "",
						"logo": "https://naxafieldsight.s3.amazonaws.com/logo/IMG_3852.PNG",
						"is_active": true,
						"location": "SRID=4326;POINT (176.8359375000000000 27.3717673005230466)",
						"date_created": "2018-03-11T09:28:12.362695Z",
						"cluster_sites": true,
						"site_meta_attributes": "[{u'question_name': u'Additional_Question_', u'question_text': u'Additional Question ', u'is_deleted': False, u'question_type': u'Text'}]",
						"type": 1,
						"organization": 40,
						"geo_layers": []
					},
					{
						"id": 131,
						"latitude": "27.76",
						"longitude": "85.489375",
						"type_label": "road",
						"organization_label": "DFID",
						"name": "Kathmandu",
						"phone": "",
						"fax": "",
						"email": "",
						"address": "",
						"website": "",
						"donor": "",
						"public_desc": "",
						"additional_desc": "",
						"logo": "https://naxafieldsight.s3.amazonaws.com/logo/IMG_3852.PNG",
						"is_active": true,
						"location": "SRID=4326;POINT (176.8359375000000000 27.3717673005230466)",
						"date_created": "2018-03-11T09:28:12.362695Z",
						"cluster_sites": true,
						"site_meta_attributes": "[{u'question_name': u'Additional_Question_', u'question_text': u'Additional Question ', u'is_deleted': False, u'question_type': u'Text'}]",
						"type": 1,
						"organization": 40,
						"geo_layers": []
					},
					{
						"id": 132,
						"latitude": "27.76",
						"longitude": "85.489375",
						"type_label": "road",
						"organization_label": "DFID",
						"name": "Lalitpur",
						"phone": "",
						"fax": "",
						"email": "",
						"address": "",
						"website": "",
						"donor": "",
						"public_desc": "",
						"additional_desc": "",
						"logo": "https://naxafieldsight.s3.amazonaws.com/logo/IMG_3852.PNG",
						"is_active": true,
						"location": "SRID=4326;POINT (176.8359375000000000 27.3717673005230466)",
						"date_created": "2018-03-11T09:28:12.362695Z",
						"cluster_sites": true,
						"site_meta_attributes": "[{u'question_name': u'Additional_Question_', u'question_text': u'Additional Question ', u'is_deleted': False, u'question_type': u'Text'}]",
						"type": 1,
						"organization": 40,
						"geo_layers": []
					}
				];
				
				var siteList = [{"crs": {"type": "name", "properties": {"name": "EPSG:4326"}}, "type": "FeatureCollection", "features": [{"status": 1, "geometry": {"type": "Point", "coordinates": [85.3243088722229, 27.714875814507074]}, "id": 8884, "project": "PWD Empowerment", "progress": 40, "type": "Feature", "properties": {"phone": "", "identifier": "TSHG", "name": "Tanahun", "address": ""}}, {"status": 1, "geometry": {"type": "Point", "coordinates": [85.41, 27.85]}, "id": 8883, "project": "PWD Empowerment in Tanahun and Lamjung Districts", "progress": 0, "type": "Feature", "properties": {"phone": "", "identifier": "LSHG", "name": "Lamjung", "address": ""}},{"status": 3, "geometry": {"type": "Point", "coordinates": [85.0243088722229, 27.214875814507074]}, "id": 8884, "project": "PWD Empowerment", "progress": 70, "type": "Feature", "properties": {"phone": "", "identifier": "TSHG", "name": "Kathmandu", "address": ""}},{"status": 2, "geometry": {"type": "Point", "coordinates": [85.9243088722229, 27.914875814507074]}, "id": 8884, "project": "PWD Empowerment", "progress": 90, "type": "Feature", "properties": {"phone": "", "identifier": "TSHG", "name": "Lalitpur", "address": ""}},{"status": 0, "geometry": {"type": "Point", "coordinates": [85.3243088722229, 27.614875814507074]}, "id": 8884, "project": "PWD Empowerment", "progress": 85, "type": "Feature", "properties": {"phone": "", "identifier": "TSHG", "name": "Tanahun", "address": ""}},{"status": 2, "geometry": {"type": "Point", "coordinates": [85.9243088722229, 27.714875814507074]}, "id": 8884, "project": "PWD Empowerment", "progress": 0, "type": "Feature", "properties": {"phone": "", "identifier": "TSHG", "name": "Lamjung", "address": ""}},{"status": 1, "geometry": {"type": "Point", "coordinates": [85.2243088722229, 27.414875814507074]}, "id": 8884, "project": "PWD Empowerment", "progress": 100, "type": "Feature", "properties": {"phone": "", "identifier": "TSHG", "name": "Kathmandu", "address": ""}}]}];

                
				map = L.map('map', {
					  center: [27.717245,85.323959],
					  zoom: 6,
					  zoomControl:false
					  //scrollWheelZoom: false
					  //layers: [streetLayer ]
				});
				
				osm_style = L.tileLayer("http://tile.stamen.com/terrain/{z}/{x}/{y}.jpg", {
                    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a>.'
                });
				
				osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				  attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
				});
				
				googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
				  maxZoom: 20,
				  subdomains:['mt0','mt1','mt2','mt3']
				});
				googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
				  maxZoom: 20,
				  subdomains:['mt0','mt1','mt2','mt3']
				});
				googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
				  maxZoom: 20,
				  subdomains:['mt0','mt1','mt2','mt3']
				});
				googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
				  maxZoom: 20,
				  subdomains:['mt0','mt1','mt2','mt3']
				});
				var none = "";
				var baseLayers = {
				  "OpenStreetMap": osm,
				  "Google Streets": googleStreets,
				  "Google Hybrid": googleHybrid,
				  "Google Satellite": googleSat,
				  "Google Terrain": googleTerrain
				};
				
				map.addLayer(osm_style);
				
				for(var i=0;i<projectList.length; i++){
					$(".projects").html($(".projects").html()+"<option value='"+projectList[i].name+"'>"+projectList[i].name+"</option>");
				}
                
						
				
				var geojsonMarkerStyle = {
					radius: 8,
					fillColor: "#ff7800",
					color: "#000",
					weight: 1,
					opacity: 1,
					fillOpacity: 0.8
				};
				
				markers = L.markerClusterGroup({ animateAddingMarkers : true });//{ animateAddingMarkers : true }
				
				var total_sites = L.geoJSON(siteList,{
					pointToLayer: function(feature, latlng){
						return L.circleMarker(latlng, geojsonMarkerStyle);
								
					},
					onEachFeature: function onEachFeature(feature, layer){
						markers.addLayer(layer);
					}
				});//.addTo(map);
				
				//console.log(markers);
				
				
				
				map.addLayer(markers);
				
				var gradient = gradStop({
					stops: projectList.length,
					inputFormat: 'hex',
					colorArray: ['#FF0000', '#FFFF00', '#008000']
				});
				//console.log(gradient);
				
				var projectColor = gradient;
				var progressColor = ["#FF0000","#f66565","#f4c08c","#FFFF00","#7FFF00","#00FF00","#069806"];
				var formStatusColor = ["#FF0000","#f4c08c","#FFFF00","#069806"];
				
				//var projectValue = [""];
				var progressValue = ["0","1-20","21-40","41-60","61-80","81-99","100"];
				var formStatusValue = ["Pending","Outstanding","Approved","Rejected"];
				
				$("#zoomin").on('click',function(){console.log("zoomin");
					map.setZoom(map.getZoom() + 1);
				});


				$("#zoomout").on('click',function(){console.log("zoomout");
					map.setZoom(map.getZoom() - 1);
				});
				
				$("#refresh").on('click', function(){console.log("mc-item");
					map.setView([27.717245,85.323959],6);
				});
				
				
				prevBase_highlighted  = "osm";
				baseLyrs = ['osm', 'googleStreets', 'googleHybrid','googleSat', 'googleTerrain'];
				$(".baselyr").on('click',function(){
					//console.log($('#'+prevBase_highlighted).children());
					$('#'+prevBase_highlighted).children(".img-maptype").css('border','2px solid #E5E5DF');
				
					var baselyr = $(this)[0].id;
					//console.log($(this)[0].children[0]);
					$(this).children(".img-maptype").css('border','2px solid black');
					var baselyrobj = window[$(this)[0].id];
					for(var i=0; i<baseLyrs.length;i++){
						if(map.hasLayer(window[baseLyrs[i]])){
							map.removeLayer(window[baseLyrs[i]]);
						}
						if(baseLyrs[i] == baselyr){
							map.addLayer(window[$(this)[0].id]);
						}
					}
					prevBase_highlighted = $(this)[0].id;
					
				});
				
				

				var markers1 = null;
				
				function changeColor(map_layer, status){ console.log(map_layer);
					var map_layer_json = map_layer._layers;
					$.each(map_layer_json,function(key){
						//console.log(map_layer_json[key]);
						if(status == "Projects"){
							for(var i = 0; i<projectList.length; i++){
								if(map_layer_json[key].feature.properties.name == projectList[i].name){
									map_layer_json[key].setStyle({"fillColor":projectColor[i]});
								} 
							}
						}
						else if(status == "Site Progress"){
							//console.log(map_layer_json[key]);
							if(map_layer_json[key].feature.progress == 0){
								map_layer_json[key].setStyle({"fillColor":progressColor[0]});
								//map_layer_json[key].options.fillColor='#FF0000';
							}
							else if(map_layer_json[key].feature.progress > 0 && map_layer_json[key].feature.progress <= 20){
								map_layer_json[key].setStyle({"fillColor":progressColor[1]});
							}
							else if(map_layer_json[key].feature.progress > 20 && map_layer_json[key].feature.progress <= 40){
								map_layer_json[key].setStyle({"fillColor":progressColor[2]});
							}
							else if(map_layer_json[key].feature.progress > 40 && map_layer_json[key].feature.progress <= 60){
								map_layer_json[key].setStyle({"fillColor":progressColor[3]});
							}
							else if(map_layer_json[key].feature.progress > 60 && map_layer_json[key].feature.progress <= 80){
								map_layer_json[key].setStyle({"fillColor":progressColor[4]});
							}
							else if(map_layer_json[key].feature.progress > 80 && map_layer_json[key].feature.progress <= 99){
								map_layer_json[key].setStyle({"fillColor":progressColor[5]});
							}
							if(map_layer_json[key].feature.progress == 100){
								map_layer_json[key].setStyle({"fillColor":progressColor[6]});
							}
						}
						else if(status == "Form Status"){
							if(map_layer_json[key].feature.status == 0){
								map_layer_json[key].setStyle({"fillColor":formStatusColor[0]});
							}
							else if(map_layer_json[key].feature.status == 1){
								map_layer_json[key].setStyle({"fillColor":formStatusColor[1]});
							}
							else if(map_layer_json[key].feature.status == 2){
								map_layer_json[key].setStyle({"fillColor":formStatusColor[2]});
							}
							else if(map_layer_json[key].feature.status == 3){
								map_layer_json[key].setStyle({"fillColor":formStatusColor[3]});
							}
						}
						
					});
				}
				
				
				changeColorOf = null;
				function changeLegend(changeColorOf,status){
					$("#form_legend").html("");
					if(status == "Projects"){
						for(var i = 0; i< projectList.length;i++){
							$("#form_legend").html($("#form_legend").html()+'<div class="circle" style = "border:1px solid black; background:'+projectColor[i]+';"></div><span>'+projectList[i].name+'</span><br/>');
						}
						changeColor(changeColorOf, status);
					}
					else if(status == "Site Progress"){
						for(var j = 0; j<progressValue.length;j++){
							$("#form_legend").html($("#form_legend").html()+'<div class="circle" style = "border:1px solid black; background:'+progressColor[j]+';"></div><span>'+progressValue[j]+'%</span><br/>' );
						}
						
						changeColor(changeColorOf, status);
					}
					else{
						formStatusValue
						for(var k = 0; k< formStatusValue.length; k++){
							$("#form_legend").html($("#form_legend").html()+'<div class="circle" style = "border:1px solid black; background:'+formStatusColor[k]+';"></div><span>'+formStatusValue[k]+'</span><br/>');
						}
						
						changeColor(changeColorOf, status);
					}
				}
				
				
				$("#inputStatus").on('change',function(){
					console.log("changed_inputstatus");
					if(markers1==null){
						changeColorOf = total_sites;
					}else{
						changeColorOf = filtered_sites;
					}
					var choose_status = $("#inputStatus").val();
					console.log(choose_status);
					changeColor(changeColorOf, choose_status);
					changeLegend(changeColorOf,choose_status);
				});
				

				
				changeColor(total_sites, 'Site Progress');
				changeLegend(total_sites,'Projects');
				
				$("#apply_button").on('click',function(){
					var siteListArray1 = jQuery.extend(true, {}, siteList);
					var multi_project = $("#multi-prepend-append").val();
					var choose_status = $("#inputStatus").val();
					progress = $("#multi-prepend-append1").val();
					form_status = $("#multi-prepend-append2").val();
					//console.log(JSON.stringify(siteListArray1));
					//console.log(JSON.stringify(siteList));
						
						//console.log(siteListArray1);
						//console.log(multi_project);
						
						for(i = siteListArray1[0].features.length-1; i>=0 ;i--){
							
							//console.log(siteList[0].features[i].properties.name);
							var match = 1;
							if(multi_project.length>0){
								//console.log("multi_project>0");
								for(var j=0; j<multi_project.length;j++){
									//console.log(siteListArray1[0].features[i].properties.name);
									//console.log(multi_project[j]);
									//console.log(i);
									if(siteListArray1[0].features[i].properties.name == multi_project[j]){ //console.log("entered");
										match = 0;
										
										//console.log(multi_project[j]);
									}
									else { //console.log("not entered");
										match++;
										
									}
								}
							
								if(match >= multi_project.length){//console.log("sitelistarray>0");
									siteListArray1[0].features.splice(i, 1);
								}
							}
							
								if(progress.length>0){ //console.log("progress_length>0");
									var yes = 1;
									for(var k = 0; k<progress.length; k++){
										//console.log(progress[k]);
										progress_max = parseInt(progress[k].split("_")[1]);
										progress_min = parseInt(progress[k].split("_")[0]);
										//console.log(progress_max);
										if(siteListArray1[0].features[i] != undefined){
											if(siteListArray1[0].features[i].progress <= progress_max && siteListArray1[0].features[i].progress >= progress_min){ //console.log("progress_entered");
												yes = 0;
												//break;
												//console.log(progress[k]);
											}
											else{ //console.log("progress_not_entered");
												yes++;
											}
										}
									}
									if(yes >= progress.length){
										siteListArray1[0].features.splice(i, 1);
									}
								}
								
								
								if(form_status.length>0){
									//console.log(form_status);
									var status_matched = 1;
									for(var l = 0; l<form_status.length; l++){//console.log(form_status[i]);
										if(siteListArray1[0].features[i] != undefined){
											if(siteListArray1[0].features[i].status == form_status[l]){ //console.log("status_entered");
												status_matched = 0;
												//break;
												//console.log(progress[k]);
											}
											else{//console.log("status_not entered");
												status_matched++;
											}
										}
									}
									if(status_matched >= form_status.length){
										siteListArray1[0].features.splice(i, 1);
									}
										
								}
								/*else {
									if(choose_status == "Site Progress"){
											//manage style
										}
									else{
											//manage style
									}
								}*/
								
							
						}
						//console.log(siteListArray1);
						map.removeLayer(total_sites);
						map.removeLayer(markers);
						//console.log(filtered_sites);
						
						if(markers1!=null){
							map.removeLayer(markers1);
						}
						markers1 = L.markerClusterGroup({ animateAddingMarkers : true });
						filtered_sites = L.geoJSON(siteListArray1[0],{
							pointToLayer: function(feature, latlng){
								return L.circleMarker(latlng, geojsonMarkerStyle);
								
							},
							onEachFeature: function onEachFeature(feature, layer){
								markers1.addLayer(layer);
							}
						});
						
						map.addLayer(markers1);
						console.log(filtered_sites);
						console.log(choose_status);
						if(choose_status==null){
							choose_status="Site Progress";
						}
						changeLegend(filtered_sites, choose_status);

				});
				//console.log(siteList);
				
				$("#clear").on('click',function(){
					$("#multi-prepend-append").val(null).trigger('change');
					$("#multi-prepend-append1").val(null).trigger('change');
					$("#multi-prepend-append2").val(null).trigger('change');
					var choose_status = $("#inputStatus").val();
					if(markers1 != null){
						map.removeLayer(markers1);
						markers1 = null;
					}
					map.addLayer(markers);
					changeColorOf = total_sites;
					changeColor(changeColorOf, choose_status);
				});
            });

        </script>
		
    </body>
</html>
