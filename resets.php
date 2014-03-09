<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>CSS Resets</title>
	<meta name="description" content="">
	<meta name="author" content="">
    <meta name="robots" content="noindex">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="icon" type="image/png" href="/images/favicon/skeleton.png" /> 

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<!-- The container is a centered 960px -->


<div class="container">
<!-- Give column value in word form (one, twoABCD, twelve) -->



<!-- Sweet nested columns cleared with a clearfix class -->
<div class="three columns sidebar">
	<nav>
    	
						
	<?php include('ssi/nav.ssi');?></nav>
					&nbsp;
</div>
                
<div class="twelve columns offset-by-one content">
					
	<?php include('ssi/header.ssi');?> 
					
                    
                    
                    
<h3 class="first">CSS Reset</h3>

<p>Could be useful to customize a reset to keep it efficient. Don't reset stuff that doesn't pertain to your site.</p>


<h4>Links</h4>

    <ul class="square">
        <li><a href="http://www.cssreset.com/" title="CSS Reset dot com" target="_blank">CSS Reset dot com</a></li>
        <li><a href="http://developer.yahoo.com/yui/3/cssreset/" title="YUI Reset" target="_blank">Yahoo's YUI 3 CSS Reset</a></li>
        <li><a href="http://www.maxdesign.com.au/articles/css-reset/" title="Max Design's Reset" target="_blank">Max Design's CSS Reset</a></li>
        <li><a href="http://meyerweb.com/eric/tools/css/reset/" title="Eric Meyer's CSS Reset" target="_blank">Eric Meyer's CSS Reset (with HTML5)</a></li>
	</ul>
    
<h4>Templates</h4>    
    <ul class="square">
    	<li><a href="http://html5boilerplate.com/" title="HTML5 Boilerplate" target="_blank">HTML5 Boilerplate</a> (Comprehensive Template)</li>
        <li><a href="http://html5reset.org/" title="HTML5 reset" target="_blank">HTML5 Reset</a> (Less comprehenisve than Boilerplate but has many resources)</li>
        <li><a href="http://necolas.github.com/normalize.css/" target="_blank">Normalize</a></li>
    </ul>

<h4>Generic Reset Sample:</h4>

<div class="excerpt">

<pre>
@-moz-viewport { 
     width: device-width; 
}
@-o-viewport { 
     width: device-width; 
}
@-webkit-viewport { 
     width: device-width; 
}
@-ms-viewport { 
     width: device-width; 
}
@viewport { 
     width: device-width; 
}
html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	vertical-align: baseline;
}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1.2;
}
ol { 
	padding-left: 1.4em;
	list-style: decimal;
}
ul {
	padding-left: 1.4em;
	list-style: square;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
a:focus {
	outline: thin dotted;
}
a:hover, a:active {
	outline: 0;
}
* { 
     -moz-box-sizing: border-box;
     box-sizing: border-box;
}
</pre>
</div>

<?php include('ssi/boxmodelreset.ssi');?> 

<?php include('ssi/link-outline.ssi');?> 

<h4>From CSS3 the Missing Manual:</h4>
<div class="excerpt">

<pre>html, body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	vertical-align: baseline;
}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1.2;
}
ol { 
	padding-left: 1.4em;
	list-style: decimal;
}
ul {
	padding-left: 1.4em;
	list-style: square;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}</pre>
</div>

<h4>From CSS the Missing Manual (original):</h4>

<div class="excerpt">
<pre>html, body, h1, h2, h3, h4, h5, h6, p, ol, ul, li, pre, code, address, variable, form, fieldset, blockquote {
	padding: 0;
	margin: 0;
	font-size: 100%;
	font-weight: normal;
}

table { 
	border-collapse: collapse; 
	border-spacing: 0; 
}

td, th, caption { 
	font-weight: normal; 
	text-align: left; 
}

img, fieldset { 
	border: 0; 
}

ol { 
	padding-left: 1.4em; 
	list-style: decimal; 
}

ul { 
	padding-left: 1.4em; 
	list-style:square; 
}

q:before, q:after { 
	content:'';
}

body {
	font-size: 62.5%;
}</pre>
</div>


<h4>From Dan Cederholm:</h4>

<div class="excerpt">

<pre>html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	font-size: 100%;
	vertical-align: baseline;
	border: 0;
	outline: 0;
	background: transparent;
	}
	
ol, ul {
	list-style: none;
	}

blockquote, q {
	quotes: none;
	}

:focus {
	outline: 0;
	}

table {
	border-collapse: collapse;
	border-spacing: 0;
	}
    
body {
	font-size: 62.5%;
}</pre>
</div><!-- end .excerpt -->


<h4>Limited Reset from James Williamson:</h4>
<div class="excerpt">

<pre>html, body, div, section, article, aside, header, hgroup, footer, nav, h1, h2, h3, h4, h5, h6, p, blockquote, address, time, span, em, strong, img, ol, ul, li, figure, canvas, video, th, td, tr {
	margin: 0;
	padding: 0;
	border: 0;
	vertical-align:baseline;
	font: inherit;
}</pre>
</div><!-- end .excerpt -->

<?php include('ssi/rems.ssi');?> 
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>