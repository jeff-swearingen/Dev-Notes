<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>CSS3</title>
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
    
<h3>CSS3</h3>    

<?php include('ssi/vendor-extensions.ssi');?>
					
<h4>CSS3 Border Extensions</h4>

<p>These effects are not finalized in the specifications yet but will work in Mozilla and WebKit browsers:</p>

<div class="bordertestCSS3">
	
<pre>.bordertestCSS3 {
     width: 95%;
     padding: 10px 20px 10px 0px;
     border: 1px solid #fff; 
     border-radius: 7px; <span class="red">(Curve strength &mdash; default setting left in for later adoption)</span>
     -moz-border-radius: 7px; <span class="red">(Mozilla extension)</span>
     -webkit-border-radius: 10px; <span class="red">(Safari &amp; Chrome extension)</span>
     box-shadow: 5px 5px 10px #000; <span class="red">(Default setting left in for later adoption)</span>
     -moz-box-shadow: 5px 5px <span class="green">10px</span> #000; <span class="red">(10px highlight is the &quot;blur&quot; radius)</span>
     -webkit-box-shadow: 5px 5px 10px #000;
}</pre>
</div>


<?php include('ssi/rems.ssi');?>
<?php include('ssi/css3-resources.ssi');?>
<?php include('ssi/drop-shadow-image.ssi');?> 
<?php include('ssi/drop-shadow-text.ssi');?> 


<h4>Background Color Alpha Transparency in CSS3</h4>

<p>This <strong><em>does not</em></strong> work in IE. A hypothetical element:</p>
<div class="transpContainer">
    <div class="transbackground">
    <pre class="transparency">.transparency {
         width: 90%;
         margin: 10px auto;
         padding: 10px;
         background-color: #f8f8f8; <span class="red">(leave first BG color value for IE)</span>
         background-color: rgb<span class="red">a</span>(250, 250, 250, <span class="red">.90</span>); <span class="red">(The &quot;a&quot; is for alpha and the .90 is for the percentage of alpha transparency)</span>
         border: 1px solid #ccc;
    }</pre>
    </div>
</div>

<!--<hr />-->


<h4>Zebra Rows CSS3</h4>

<table id="alternating">
  <tr>
    <td>First row</td>
  </tr><tr>
    <td>Second row</td>
  </tr>
  <tr>
    <td>Third row</td>
  </tr>
  <tr>
    <td>Fourth row</td>
  </tr>
  <tr>
    <td>Fifth row</td>
  </tr>
  <tr>
    <td>Sixth row</td>
  </tr>
  <tr>
    <td>Seventh row</td>
  </tr>
  <tr>
    <td>Eigth row</td>
  </tr>
</table>

<h5>Mark-up:</h5>

<pre>&lt;table id="alternating"&gt;
  &lt;tr&gt;
    &lt;td&gt;First row&lt;/td&gt;
  &lt;/tr&gt;&lt;tr&gt;
    &lt;td&gt;Second row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Third row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Fourth row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Fifth row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Sixth row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Seventh row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Eigth row&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;</pre>

<h5>CSS:</h5>
                    
<pre>#alternating {
	width: 100%;
}
#alternating td, #alternating tr {
	border: none;
	padding: 10px;
	text-align: left;
}
table#alternating tr:nth-child(odd) {
	background-color: #D8DFEE;
}
table#alternating tr:nth-child(even) {
	background-color: #e9edf1;
}</pre>

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>