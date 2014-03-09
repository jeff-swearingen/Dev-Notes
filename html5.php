<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>HTML5</title>
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
					
                    
<h3>HTML5 Notes</h3>

    <p>Writing out basic structure in HTML5 markup is useful. Also, with practice, you may know what CSS you're going to use as well before you even start coding:</p>
    
<pre>
&lt;!DOCTYPE html&gt; 
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width"&gt;        
&lt;title&gt;<span class="highlight">Title</span>&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;header&gt;<span class="highlight">Header</span>&lt;/header&gt;
     &lt;nav&gt;<span class="highlight">Nav</span>&lt;/nav&gt;
     &lt;div&gt;<span class="highlight">Content</span>&lt;/div&gt;
     &lt;article&gt;<span class="highlight">Article</span>&lt;/article&gt;
     &lt;aside&gt;<span class="highlight">Aside</span>&lt;/aside&gt;
     &lt;footer&gt;<span class="highlight">Footer</span>&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;    
</pre>


<h4>Structuring Content With Markup</h4>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width"&gt;
&lt;title&gt;<span class="highlight">Welcome to Desolve</span>&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
 	&lt;header id="pageHeader"&gt;<span class="highlight">Header content goes here.</span>&lt;/header&gt;<span class="grey">&lt;!--May not be only header tag on page so ID is kept--&gt;</span>
	&lt;nav id="mainNav"&gt;<span class="highlight">Navigation goes here.</span>&lt;/nav&gt;<span class="grey">&lt;!--Same as above--&gt;</span>
   
	&lt;section id="content"&gt;<span class="grey">&lt;!--Section tag is generic, non-syndicated grouping of content--&gt;</span>
    	&lt;div class="banner"&gt;<span class="highlight">Banner content goes here.</span>&lt;/div&gt;
    	&lt;article id="home"&gt;<span class="highlight">Article content goes here.</span>&lt;/article&gt;
    	&lt;aside&gt;<span class="highlight">Sidebar goes here.</span>&lt;/aside&gt;<span class="grey">&lt;!--Aside tag is related to siblings within its container (without being part of the article). Also, may or may not have an ID tag assigned--&gt;</span>
	&lt;/div&gt;
   
	&lt;footer id="pageFooter"&gt;<span class="highlight">Footer content goes here.</span>&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>


<?php include('ssi/html5-blockconversion.ssi');?> 

<h4>HTML5 Reset</h4>

<ul class="square">
	<li><a href="http://html5reset.org/" title="HTML5 reset" target="_blank">HTML5 Reset</a></li>
    <li><a href="http://html5boilerplate.com/" title="HTML5 Boilerplate" target="_blank">HTML5 Boilerplate</a></li>
</ul>
  


<h4>HTML5 Shiv for Older Versions of IE</h4>

<pre>
&lt;title&gt;Sample Title&lt;/title&gt;
<span class="grey">&lt;!--[if lt IE 9]&gt;
&lt;script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">&lt;/script&gt;
&lt;![endif]--&gt;</span>
</pre>


<h4>HTML5 Resources</h4>

<p><a href="http://html5doctor.com/" target="_blank">HTML5 Doctor</a></p>
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>