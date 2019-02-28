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
		<style>
			/* this stylesheet is used when generating a PDF with PrinceXML or any other tool that understands the CSS used. */
      /* define a page */
      @page {
         size: 5.5in 8.5in;  
         margin: 70pt 60pt 70pt;
      }

      @page:first {
         size: 5.5in 8.5in;  
         margin: 0;
      }

      img {
        max-width: 100%;
      }

      div.frontcover { 
        page: cover; 
        content: url("http://localhost/sliced/Field%20Sight/assets/img/img-gallery.jpg");
        width: 100%;
        height: 100%; 
        display: none;
      }

      @media print{
      	div.frontcover { 
      		display: block;
      	}
      }

      /* styles for the right hand spread
      Bottom left we display the title of the book, bottom right the page using a CSS counter, top right the content of the current chapter */
      @page:right{ 
         @bottom-left {
             margin: 10pt 0 30pt 0;
             border-top: .25pt solid #666;
      	   content: "Our Cats";
             font-size: 9pt;
             color: #333;
         }
         @bottom-right { 
             margin: 10pt 0 30pt 0;
             border-top: .25pt solid #666;
             content: counter(page);
             font-size: 9pt;
         }
         @top-right {
         	   content:  string(doctitle);
         	   margin: 30pt 0 10pt 0;
         	   font-size: 9pt;
         	   color: #333;
         }
      }

      /* styles for the left hand spread 
      Bottom right book title, bottom left current page */
      @page:left {

         @bottom-right {
             margin: 10pt 0 30pt 0;
             border-top: .25pt solid #666;
      	     content: "Field Sight";
             font-size: 9pt;
             color: #333;
         }
         @bottom-left { 
             margin: 10pt 0 30pt 0;
             border-top: .25pt solid #666;
             content: counter(page);
             font-size: 9pt;
         }
      }

      /* first page */
      @page:first {
        @bottom-right {
          content: normal;
          margin: 0;
        }

        @bottom-left {
          content: normal;
          margin: 0;
        }
      }

      /* reset chapter and figure counters on the body */
      body {
      	counter-reset: chapternum figurenum;
      	font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
      	line-height: 1.5;
      	font-size: 11pt;
      }

      /* get the title of the current chapter - this will be the content of the h1 
      reset figure counter as figures start from 1 in each chapter */
      h1 {
          string-set: doctitle content();
          page-break-before: always;
          counter-reset: figurenum;
          counter-reset: footnote;
          line-height: 1.3;
      }

      /* increment chapter counter */
      h1.chapter:before {
          counter-increment: chapternum;
          content: counter(chapternum) ". ";
      }

      /* increment and display figure counter */
      figcaption:before {
      	counter-increment: figurenum;
      	content: counter(chapternum) "-" counter(figurenum) ". ";
      }

      /* footnotes */
      .fn {
        float: footnote;
      }

      .fn {
        counter-increment: footnote;
      }

      .fn::footnote-call {
        content: counter(footnote);
        font-size: 9pt;
        vertical-align: super;
        line-height: none;
      }

      .fn::footnote-marker {
        font-weight: bold;
      }

      @page {
        @footnotes {
          border-top: 0.6pt solid black;
          padding-top: 8pt;
        }
      }

      h1,h2,h3,h4,h5 {
      	font-weight: bold;
      	page-break-after: avoid;
      	page-break-inside:avoid;
      }

      h1+p, h2+p, h3+p {
      	page-break-before: avoid;
      }

      table, figure {
      	page-break-inside: avoid;
      }

      ul.toc {
      	list-style: none;
      	margin: 0;
      	padding: 0;
      }

      /* create page numbers using target-counter in the TOC */
      ul.toc a::after {
        content: leader('.') target-counter(attr(href), page);
      }

      ul.toc li {
      	line-height: 2;
      }

      ul.toc li a {
      	text-decoration: none;
      }

      a {
      	color: #000;
      }

      /* add page number to cross references */
      a.xref:after {
        content: " (page " target-counter(attr(href, url), page) ")";
      }
			body {-webkit-print-color-adjust: exact;}
		</style>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        
		<div class="text-center padding d-print-none">
			<a href="javascript:void(0);" title="" onclick="window.print();" class="btn btn-sm btn-primary"><i class="la la-print"></i> Print Report</a>
		</div>
		
		<div class="frontcover" style="position: relative;">
			<div class="cover-layout" style="position: absolute; bottom: 0; z-index: 999">
				<h3>Hello</h3>
			</div>
		</div>

		<div id="print-wrapper" class="bg-white">
								<h1 id="ch1" class="chapter">The First Cat Show</h1>
		<p>On the day for judging, at Ludgate Hill I took a ticket and the train for the Crystal Palace. Sitting alone in the comfortable cushioned compartment of a "first class," I confess I felt somewhat more than anxious as to the issue of the experiment. Yes; what would it be like? Would there be many cats? How many? How would the animals comport themselves in their cages? Would they sulk or cry for liberty, refuse all food? or settle down and take the situation quietly and resignedly, or give way to terror? I could in no way picture to myself the scene; it was all so new. Presently, and while I was musing on the subject, the door was opened, and a friend got in. "Ah!" said he, "how are you?" "Tolerably well," said I; "I am on my way to the Cat Show." "What!" said my friend, "that surpasses everything! A show of cats! Why, I hate the things; I drive them off my premises when I see them. You'll have a fine bother with them in their cages! Or are they to be tied up? Anyhow, what a noise there will be, and how they will clutch at the bars and try and get out, or they will strangle themselves with their chains." "I am sorry, very sorry," said I, "that you do not like cats. For my part, I think them extremely beautiful, also very graceful in all their actions, and they are quite as domestic in their habits as the dog, if not more so. They are very useful in catching rats and mice; they are not deficient in sense; they will jump up at doors to push up latches with their paws. I have known them knock at a door by the knocker when wanting admittance. They know Sunday from the week-day, and do not go out to wait for the meat barrow on that day; they——" "Stop," said my friend, "I see you do like cats, and I do not, so let the matter drop." "No," said I, "not so. That is why I instituted this Cat Show; I wish every one to see how beautiful a well-cared-for cat is, and how docile, gentle, and—may I use the term?—cossetty. Why should not the cat that sits purring in front of us before the fire be an object of interest, and be selected for its colour, markings, and form? Now come with me, my dear old friend, and see the first Cat Show."</p>

							</div>

		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>-->
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        
    </body>
</html>
