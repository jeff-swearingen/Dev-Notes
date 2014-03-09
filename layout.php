<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Layout</title>
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
				                   
<h3>Layout</h3>

	<h4>Types of Layouts</h4>
    
    <ul class="square">
        <li><strong>Fixed</strong> - Static layout, stays the same</li>
        <li><strong>Fluid</strong> - Resizing keeps two column (or whatever) when browser is squeezed <span class="note">user can still set minimum and maximum widths in CSS</span></li>
        <li><strong>Responsive</strong> - Very similar to Fluid but can respond to orientation of device or height or width. But layout changes if squeezed so three columns can turn into one but then they're stacked. Great for multiple devices</li>        
    </ul>    
    
    <p>Responsive uses the <code>@media</code> media query, for example:</p>

<pre>
<span class="mediaQueryColor">@media all and (min-width: 780px) {</span>

body {
 	width: 85%;
 	max-width: 1280px;
 	min-width: 960px;
}
<span class="mediaQueryColor">}</span>

<span class="mediaQueryColor">@media all and (min-width: 481px) and (max-width: 780px) {</span>

body {
 	width: 90%;
 	max-width: 780px;
 	min-width: 485px;
 	font-size: 80%;
}
<span class="mediaQueryColor">}</span>

<span class="mediaQueryColor">@media all and (max-width: 480px) {</span>

body {
 	width: 90%;
 	max-width: 480px;
}
<span class="mediaQueryColor">}</span>
</pre>
    
<h4>Fluid/Flexible Layout Pros</h4>

<div class="square">
<ul class="square">
	<li>Layout conforms to the current resolution</li>
    <li>User has the freedom to resize browser with no negative effect</li>
    <li>Not tied to designing pixe-perfect designs</li>
    <li>The design is more based on how elements relate to one another</li>
</ul>
</div>


<h4>Fluid/Flexible Layout Cons</h4>


<ul class="square">
	<li>Have to give up control over your design (not pixel perfect)</li>
    <li>Spacing issues can be common in flexible layouts, especially at resolution extremes</li>
    <li>Flexible layouts require more planning and the code is generally more complex</li>
</ul>

<h4>Calculating a Fluid/Flexible Layout</h4>

    <ol>
        <li>As with fixed, define a target resolution &amp; grid</li>
        <li>To make calculating percentages easier, mock-up the layout at an ideal size (as in target resolution)</li>
        <li>Use your ideal measurements to calculate percentage values</li>
        <li>Remember that <em>margins and padding calculate their value as a percentage of the PARENT element</em></li>
    </ol>

<p>In other words, columns in the layout would be calculated according to the width of the body tag (e.g., 960px). Child elements inside a particular column would have their widths calculated on the whole column width but the margins and padding inside those elements have their percentages calculated to the width of the content column as it is the PARENT element in question.</p> 

<p>Visual reference:</p>

<div class="layoutPlan"><img src="images/fluid-layout-plan.png" alt="Fluid Layout Plan" width="551" height="415" /></div>

<p>Sample CSS for 2 column fluid/flexible column layout based on image above:</p>

<pre>
.col1 {
	float: left;
	width: 60%;
	padding-left: 2%;
}
.col2 {
	float: right;
	font-size: 90%;
	line-height: 1.6;
	width: 34%;
	padding-right: 2%;
}
.news { <span class="grey">/* relates to child columns in column 1 */</span>
	font-size: 90%;
	line-height: 1.8;
	background: rgb(237,226,197);
	float: left;
	width: 44.5%;
	padding: 1.75%;
	margin-right: 4%;
}
.news + .news {
	margin-right: 0;
}
</pre>

<?php include('ssi/boxmodelreset.ssi');?> 

<h4>Images in Fluid Layout</h4>

<p>Compare an absolutely sized image with a percentage-based image. For the second image, strip the height and then do a comparative sizing for the width value based on its size to the first image. Once that's determined, delete the first image tag.</p>

<ol class="note">
	<li>Remember that the percentage-based image width is based on that of the parent element, not the combined wrapper</li>
    <li>Original image must be a decent size to begin with so when page expands it does not degrade in quality</li>
</ol>

<pre>
&lt;p&gt;
&lt;img src="images/448_400.jpg" alt="nyc" width="448" height="400"&gt;
&lt;img src="images/448_400.jpg" alt="nyc" width="63%"&gt;
<span class="sampleText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae neque sit amet ipsum convallis hendrerit sed eget dolor. Etiam ultrices sagittis velit et tincidunt. Nunc dui enim, condimentum in consequat nec, dapibus quis lorem. Mauris non nisl nunc, sit amet elementum metus. Fusce euismod orci ac libero accumsan non vulputate justo posuere. Fusce quis augue eu nisl dignissim luctus. Cras pretium, mauris quis sagittis placerat, mauris odio feugiat leo, nec eleifend sem ante sed nunc. Sed non ante justo. Morbi rhoncus, risus vel adipiscing aliquam, neque lorem viverra dui, eget volutpat massa elit aliquet risus. Integer lacinia rutrum ornare.</span>&lt;/p&gt;
</pre>



<p><img src="images/448_400.jpg" alt="nyc" width="63%" class="imgScale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae neque sit amet ipsum convallis hendrerit sed eget dolor. Etiam ultrices sagittis velit et tincidunt. Nunc dui enim, condimentum in consequat nec, dapibus quis lorem. Mauris non nisl nunc, sit amet elementum metus. Fusce euismod orci ac libero accumsan non vulputate justo posuere. Fusce quis augue eu nisl dignissim luctus. Cras pretium, mauris quis sagittis placerat, mauris odio feugiat leo, nec eleifend sem ante sed nunc. Sed non ante justo. Morbi rhoncus, risus vel adipiscing aliquam, neque lorem viverra dui, eget volutpat massa elit aliquet risus. Integer lacinia rutrum ornare. </p> 

<p class="clear"></p>

<p>Alternatively, a class can be applied to the <code>img</code> tag (with all size values stripped) so the image will never exceed the width of the parent column.</p>

<p>Markup:</p>

<pre>
&lt;div class="news"&gt;
&lt;p&gt;<span class="sampleText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae neque sit amet ipsum convallis hendrerit sed eget dolor. Etiam ultrices sagittis velit et tincidunt. Nunc dui enim, condimentum in consequat nec, dapibus quis lorem. Mauris non nisl nunc, sit amet elementum metus. Fusce euismod orci ac libero accumsan non vulputate justo posuere. Fusce quis augue eu nisl dignissim luctus. Cras pretium, mauris quis sagittis placerat, mauris odio feugiat leo, nec eleifend sem ante sed nunc. Sed non ante justo. Morbi rhoncus, risus vel adipiscing aliquam, neque lorem viverra dui, eget volutpat massa elit aliquet risus. Integer lacinia rutrum ornare.</span>&lt;/p&gt;
&lt;/div&gt;

&lt;div class="news"&gt;
    <span class="fuchsia">&lt;img src="images/256_256.jpg" alt="nyc" class="imgFlex"&gt;</span>
&lt;/div&gt;
</pre>

<p>CSS:</p>

<pre>.news {
	width: 30%;
	padding: 1.75%;
	font-size: 90%;
	line-height: 1.8;
	background: rgb(237,226,197);
	margin: 4% 4% 0 0;
	float: left;
}
.news + .news {
	margin-right: 0;
}
.imgFlex {
	max-width: 100%;
}
</pre>

<?php include('ssi/sibling-selector-cancel.ssi');?>
<?php include('ssi/margin-collapse.ssi');?>
<?php include('ssi/page-height.ssi');?> 
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>