<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Links</title>
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
					
                    
<h3>Links</h3>

<h4>Pseudo Selector Order</h4>

<p>Use this phrase to memorize: <strong>L</strong>o<strong>V</strong>e/<strong>HA</strong>te</p>
  
<pre>
    <span class="link-2">a:link { color: #f00; }</span>
    <span class="visited">a:visited { color: #808; }</span>
    <span class="hover">a:hover { color: #f0f; }</span>
    <span class="active">a:active { color: #00f; }</span>
</pre>    
<p class="note">NOTE: They must be in that order to work.</p>

<p>Another <code>pseudo-selector</code> is <code>focus</code>:</p>

<pre>a:focus {
    color: #333;
}
</pre>    


<p>Also, <code>a:visited</code> styling is very limited now due to security concerns so <code>text-decoration</code> or <code>background</code> values will only work if the parent <code>a</code> tag also has those <code>properties</code>. For example:</p>    

<pre>
a:link {
    color: #916226;
    text-decoration: none;
    <span class="red">background: red;</span>
}
a:visited {
    color: #687d8d;
    <span class="red">background: blue;</span>
}</pre>


<p id="links">Demo: <a href="http://www.google.com" target="_blank">LINK</a></p>

<h5>Demo Code:</h5>

<pre>#links a {
    text-decoration: none;
}
#links a:hover {
    color: #f0f;
    text-decoration: underline;
    font-weight: bold;
}
#links a:visted {
    color: #808;
}
#links a:active {
    color: #00f;
}
</pre>    
    
<p id="backgroundcolor">Or you could use a background color for highlighting: <a href="http://www.google.com" target="_blank">LINK</a></p>

<h5>Background Color Code:</h5>   
 
<pre>#backgroundcolor a:hover {
    color: #fff;
    font-weight: normal;
    background-color: #000;
    padding: 0 2px;
}
#backgroundcolor a {
    text-decoration: none;
}
#backgroundcolor a:visted {
    color: #808;
}
#backgroundcolor a:active {
    color: #00f;
}
</pre>

<?php include('ssi/link-outline.ssi');?>  

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>