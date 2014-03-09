<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>CSS Best Practices</title>
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
    <link rel="stylesheet" href="css/examples.css">
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
					
                    
                    
                    
<h3>CSS Best Practices</h3>

<h4>Classes or IDs?</h4>

<p>IDs are good for singleton elements <code>header, nav, content, aside, footer</code>, etc., but it's best to not bind them to other selectors to avoid specificity problems.</p>

    <!--<ul class="square">
        <li>Use classes and IDs carefully and sparingly</li>
        <li>Use multiple style sheets</li>
        <li>Use &lt;div&gt; to create context (for main section of page or a sidebar)</li>
        <li>Use shorthand properties in declaration blocks</li>
        <li>Use sprites for small images</li>
        <li>Keep your code organized</li>
        <li>Keep a library of CSS templates</li>
        <li>Declare your XHTML pages with a DOCTYPE of xhtml1 (will put IE in standards mode)</li>
        <li>Use consistent naming conventions (e.g., camelCase)</li>
        <li>Use plenty of comments</li>
	</ul>-->


<?php include('ssi/class-names.ssi');?> 

<?php include('ssi/combining-classes.ssi');?>

    
<h4>Footer Best Practice</h4>

<pre>#pageFooter {
	clear: both; <span class="grey">/* establishes normal document flow */</span>
	overflow: hidden; <span class="grey">/* keeps height of floating elements even--depending of page setup */</span>
	height: 150px;
}</pre>


<?php include('ssi/link-outline.ssi');?> 

<?php include('ssi/sibling-selector-cancel.ssi');?>

<?php include('ssi/css-minifiers.ssi');?>                      

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>