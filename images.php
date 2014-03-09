<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Images</title>
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
					
<h3>Styling Images</h3>

<h4>Background Images</h4>

	
<pre>Element {
     background-color: #fff;        
     background-image: url(bg-image.png);
     background-repeat: no-repeat; <span class="red">(repeat, repeat-x, repeat-y)</span>
     background-position: center; <span class="red">(bottom, left, right, top)</span> <span class="black">or double variables</span> <span class="red">(left center, center center, right top, left bottom, center top, etc.)</span>
     background-attachment: fixed; <span class="red">(or scroll)</span>
}</pre>                                    
    
    
<p>Shorthand version:</p>

<pre>Element {
     background: #fff url(bg-image.png) fixed center center no-repeat;
}</pre>
      
    
<?php include('ssi/page-height.ssi');?> 



<!--

<div id="twothirds">
<pre>.photo {
	background: url(drop_shadow.gif) right bottom no-repeat;
}
.photo img {
	border: 1px solid #666;
	background: #fff;
	padding: 4px;
	position: relative;
	top: -5px;
	left: -5px;
}
.figure {
	float: right;
	width: 210px;
	margin: 20px 0 10px 10px;
}
.figure p {
	font: 1.1em/normal Arial, Helvetica, sans-serif;
	text-align: center;
	margin-top: 10px;
	padding-top: 5px;
	height: 5em;
}</pre>
</div>

<div class="figure">
	<div class="photo"> <img src="images/grass.jpg" alt="Grass" width="200" height="200" /></div>
<p>This is a drop shadow.</p>
</div>
<p class="clear" />-->


<?php include('ssi/drop-shadow-image.ssi');?> 


<h4>Background Images as Bullets in a List</h4>

<div id="announcement">
        <ul>
            <li>Lorem Ipsum Dolor Sat</li>
            <li>Quis nostrum exercitationem ullam</li>
            <li>Eius modi tempora incidunt</li>
            <li>Quis autem vel eum iure reprehenderit</li>
            <li> Sed quia non numquam eius modi tempora incidu</li>
            <li>Nemo enim ipsam voluptate</li>   
    	</ul>
	</div>
    
    
    

	<p>Sample code:</p>

	
<pre>#announcement li {
    background: url("../_images/bullet.png") no-repeat <span class="fuchsia">0 9px</span>; <span class="red">(Background Position like that will allow two line wrap without breaking)</span>
    list-style: none outside none;
    margin-left: 5px;
    padding: 4px 0 4px 25px;
}</pre>

   

<h4>Additional Background Image Bullets</h4>

<p class="red">CONTENT TO BE FORMATTED</p>
    
    
<!--a {
	color: #207ebf;
	text-decoration: none;
	font-weight: bold;
	border-bottom: 2px solid #f60;
}

a:visited {
	color: #6e97bf;
}

a:hover {
	color: #fff;
	background: #6e97bf;
	border-bottom-color: #6e97bf;
}

#legal a {
	color: #666;
	border: none;
	background: url(images/email.gif) no-repeat left center;
	padding-left: 20px;
	margin-left: 10px;
}

#resources a {
	border-bottom: none;
	padding-right: 22px;
}

#resources a:hover {
	color: #fff;
	background: #6e97bf;
}

a[href^='http://'] {
	background: url(images/globe.png) no-repeat right top;
}

a[href$='.pdf'] {
	background: url(images/acrobat.png) no-repeat right top;
}

a[href$='.zip'] {
	background: url(images/zip.png) no-repeat right top;
}

a[href$='.doc'] {
	background: url(images/word.png) no-repeat right top;
}

<a href="file:///Users/jss_ca_1999/Documents/Tutorials/CSS2e_MM_TUTORIALS/09/links/links-jeff.html">file:///Users/jss_ca_1999/Documents/Tutorials/CSS2e_MM_TUTORIALS/09/links/links-jeff.html</a>

-->
</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>