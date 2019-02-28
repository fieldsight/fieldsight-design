<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Page Not Found</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    </head>
    <body>
        <div class="bg-primary">
            <div class="error-content-wrap">
                <div class="container">
                    <div class="error-inner-content-wrap">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="message-left-wrap">
                                    <h3>Oops!</h3>
                                    <h3>Looks like you got lost!</h3>
                                    <p>
                                    It looks like you're trying to access a page that either has been deleted or never even existed.
                                    </p>
                                    <a href="#" title="" traget="" class="btn btn-primary"><i class="la la-home"></i> Take Me Home</a>
                                    <a data-toggle="collapse" href="#collapseServerErrorMessage" role="button" aria-expanded="false" aria-controls="collapseServerErrorMessage" id="btnServerErrorMessage" class="btn btn-warning"><i class="la la-exclamation"></i> Server Error Message</a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="message-right-wrap">
                                    <h1>404</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="extraMessageContainer" class="container manage-gap">
            <div class="collapse mt-4 mb-4" id="collapseServerErrorMessage">
                <div class="card card-body">
                    <div id="summary">
                      <h1>DoesNotExist at /fieldsight/project-dashboard/137000000/</h1>
                      <pre class="exception_value">Project matching query does not exist.</pre>
                      <table class="meta">

                        <tbody><tr>
                          <th>Request Method:</th>
                          <td>GET</td>
                        </tr>
                        <tr>
                          <th>Request URL:</th>
                          <td>http://fieldsight.naxa.com.np/fieldsight/project-dashboard/137000000/</td>
                        </tr>

                        <tr>
                          <th>Django Version:</th>
                          <td>1.8.18</td>
                        </tr>

                        <tr>
                          <th>Exception Type:</th>
                          <td>DoesNotExist</td>
                        </tr>


                        <tr>
                          <th>Exception Value:</th>
                          <td><pre>Project matching query does not exist.</pre></td>
                        </tr>


                        <tr>
                          <th>Exception Location:</th>
                          <td>/srv/fieldsight/kobocat/local/lib/python2.7/site-packages/django/db/models/query.py in get, line 334</td>
                        </tr>

                        <tr>
                          <th>Python Executable:</th>
                          <td>/usr/local/bin/uwsgi</td>
                        </tr>
                        <tr>
                          <th>Python Version:</th>
                          <td>2.7.12</td>
                        </tr>
                        <tr>
                          <th>Python Path:</th>
                          <td><pre>['/srv/fieldsight/kobocat/local/lib/python2.7/site-packages/savReaderWriter',
                     '.',
                     '',
                     '/srv/fieldsight/kobocat/lib/python2.7',
                     '/srv/fieldsight/kobocat/lib/python2.7/plat-x86_64-linux-gnu',
                     '/srv/fieldsight/kobocat/lib/python2.7/lib-tk',
                     '/srv/fieldsight/kobocat/lib/python2.7/lib-old',
                     '/srv/fieldsight/kobocat/lib/python2.7/lib-dynload',
                     '/usr/lib/python2.7',
                     '/usr/lib/python2.7/plat-x86_64-linux-gnu',
                     '/usr/lib/python2.7/lib-tk',
                     '/srv/fieldsight/kobocat/local/lib/python2.7/site-packages',
                     '/srv/fieldsight/kobocat/src/django-digest',
                     '/srv/fieldsight/kobocat/src/python-json2xlsclient',
                     '/srv/fieldsight/kobocat/src/pyxform',
                     '/srv/fieldsight/kobocat/lib/python2.7/site-packages',
                     '/srv/fieldsight/fieldsight-kobocat']</pre></td>
                        </tr>
                        <tr>
                          <th>Server time:</th>
                          <td>Thu, 3 Jan 2019 12:05:43 +0545</td>
                        </tr>
                      </tbody></table>
                    </div>
                </div>
            </div>
        </div>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>-->
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                fn_message_vertically_center();
                fn_content_vertically_center();
                
                $('#collapseServerErrorMessage').on('shown.bs.collapse', function () {
                    $('html, body').animate({
                        scrollTop: $("#extraMessageContainer").offset().top
                    }, 2000);
                })
            });
            jQuery(window).on('resize', function() {
                fn_message_vertically_center();
                fn_content_vertically_center();
            });
            function fn_message_vertically_center(){
                var svph = $(window).height();
                var eicwh = $(".error-inner-content-wrap").height();
                if(svph > eicwh){
                    var tempHeight = svph - 120;
                    $(".error-inner-content-wrap").css("height", tempHeight);
                }
             }
             function fn_content_vertically_center(){
                var svph = $(window).height();
                var eicwh = $(".error-inner-content-wrap").height();
                var lmh = $(".message-left-wrap").height();
                var rmh = $(".message-right-wrap").height();
                if(svph > eicwh){
                    var tempHeight = eicwh - lmh;
                    tempHeight = tempHeight / 2;
                    $(".message-left-wrap").css("margin-top", tempHeight);
                    $(".message-left-wrap").css("margin-bottom", tempHeight);

                    tempHeight = eicwh - rmh;
                    tempHeight = tempHeight / 2;
                    $(".message-right-wrap").css("margin-top", tempHeight);
                    $(".message-right-wrap").css("margin-bottom", tempHeight);
                }
             }
        </script>
    </body>
</html>
