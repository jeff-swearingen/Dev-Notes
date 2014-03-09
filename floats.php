<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Using Floats</title>
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
					
                    
                    
                    
<h3>Using Floats</h3>
        <h4>CSS Vertical Align property info:</h4>
        	<p><a href="http://www.w3schools.com/cssref/pr_pos_vertical-align.asp" target="_blank">http://www.w3schools.com/cssref/pr_pos_vertical-align.asp</a></p>

<h4>Floating</h4>

<ul class="square">
    <li>left - <span class="note">default</span></li>
    <li>right</li>
    <li>inherit - <span class="note">whatever the parent is doing</span></li>
    <li>none</li>
</ul>

<p>Float elements are removed from normal document flow. Anything not floated below will move up to occupy former space.</p>

<h4>Document Flow</h4>
        <ul class="square">
            <li>Normal document flow (inline images, etc.) can be useful instead of floats if it's called for</li>
            <li>Inline images will flow left to right then wrap</li>
            <li>Block level images will stack vertically</li>    
        </ul>


	<h4>Blocks</h4>

        <p>Elements have both a:</p>
            <ul class="square">
            	<li>Content block - Border, padding, width</li>
                <li>Containing block - Margin edges</li>
            </ul>

        
<?php include('ssi/margin-collapse.ssi');?>        

<?php include('ssi/html5-blockconversion.ssi');?> 
        
<?php include('ssi/display-tags.ssi');?>       
        
<!--    <h4>Visibility</h4>
    	
        
<pre>.none {
 	visibility: hidden;  <span class="note">not visible but it still takes up space in the layout</span>
}

.none {
 	display: none;  <span class="note">gone and will probably not be read by screen readers</span>
}</pre> -->       
        
<h4>Float property</h4>
<p>Is the preferred method of positioning elements on a page. Absolute
or relative positioning is not needed in the CSS when using floats. Is
very simple to create columns and you have to make sure your outer box
is wide enough to contain the combined width of the columns.</p>

<p>Float elements are removed from normal document flow. Anything not floated below will move up to occupy former space.</p>

<ul class="square">
	<li>left <span class="note">is the default</span></li>
	<li>right</li>
	<li>inherit <span class="note">whatever the parent is doing</span></li>
	<li>none</li>            
</ul>

<h4>Floating Column</h4>

<p>Williamson recommends for a simple enough two column layout to float left column left and right column right. Column drop (breakage) can happen if you do column1 float: left; and column2 float: left;</p>

<pre>.col1 {
	background: rgb(237, 228, 214);
	height: 500px;
	float: left;
	width: 600px;
	padding: 20px;
}
.col2 {
	background: rgb(173, 169, 130);
	height: 500px;
	float: right;
	padding: 20px;
	width: 260px;
}</pre>


<p>3 Column Layout</p>


<pre>.col1 {
	background: rgb(237, 228, 214);
	height: 500px;
	float: left;
	padding: 20px;
	width: 266.6px;
	margin-right: 20px;
}
.col2 {
	background: rgb(219,126,64);
	height: 500px;
	float: left;
	padding: 20px;
	width: 266.6px;
	<span class="note">margin-right removed from here because .col3 is floated right</span>
}
.col3 {
	background: rgb(173, 169, 130);
	height: 500px;
	float: right; <span class="note">floating it right gets rid of small gap on right</span>
	padding: 20px;
	width: 266.6px;
}</pre>


<?php include('ssi/boxmodelreset.ssi');?>
<?php include('ssi/sibling-selector-cancel.ssi');?> 

<h4>Creating Equal-Height Columns</h4>

<pre>section, aside {
	padding-bottom: 1000em;
	margin-bottom: -1000em;
}

article { <span class="grey">/* article is the wrapper around the section and aside */</span>
	overflow: hidden;
	background: rgb(219, 126, 64);
}</pre>



<h4>Fixed positioning</h4>
<p>Might be good for a logo, menu, or bug because it will keep that
object in one place on the page no matter how you resize the browser.</p>



<h4>Clearing Floats</h4>

<ul class="square">
	<li>left <span class="note">nothing can float to my left</span></li>
	<li>right <span class="note">nothing can float to my right</span></li>    
	<li>both <span class="note">nothing can float to left or right and restores normal document flow</span></li>     
</ul>


<p>Use an empty <code>p</code> tag to clear floats:</p>

<pre>&lt;p class=&quot;clear&quot; /&gt;</pre>
<h5>CSS:</h5>


<pre>p.clear {
	clear: both;
	height: 0; <span class="grey">/* Only for IE */</span>
	margin: 0;
	padding: 0;
}</pre>


<p>With this CSS formatting the empty <code>p</code> tag does not take up space on the browser page.</p>

<h4>Clearfix Technique</h4>

<p>Instead of adding a clear class to a <code>&lt;br /&gt;</code>, <code>&lt;span&gt;</code>, or <code>&lt;p&gt;</code>, clearfix can be used:</p>


<pre>.clearfix:after {
 	content: "";
 	<span class="grey">/* content: "."; */ /* "." is needed for FF 3.5 and earlier */ </span>    
 	display: block;
 	clear: both;
}</pre>


<p id="clearfix">A more robust method is doing:</p>

<pre>.clearfix:before,.clearfix:after {
 	content: "";
 	<span class="grey">/* content: "."; */ /* "." is needed for FF 3.5 and earlier */ </span>    
 	display: table;
}
.clearfix:after {
 	clear: both;
}</pre>

<pre><span class="grey">
&lt;!--[if lt IE 8]&gt;
&lt;style&gt;
/* For IE &lt; 8 (trigger hasLayout) */
.clearfix {
	zoom:1;
}
&lt;/style&gt;
&lt;![endif]--&gt;
</span></pre>

<h5>Example:</h5>

<div class="clearfix">

<p>Morbi posuere egestas ligula, id porta erat feugiat eget. Aenean nisl nisi, dignissim et elementum at, cursus non mi. Nulla auctor nibh et augue elementum sed vulputate massa tincidunt. Integer est elit, pharetra ac ornare eget, ornare in ante.</p>
<section class="cf">

	<div class="redSquare">
    
    </div>
	<div class="blueSquare">
     
	</div>
</section><!-- close .cf -->
<p>Phasellus varius auctor elit, at sollicitudin nulla accumsan ac. Quisque iaculis interdum arcu, vel iaculis erat ullamcorper at. Sed lobortis nunc consequat magna posuere commodo. Quisque hendrerit pretium neque, in tempus elit ultrices in.</p>

</div>

<h5>Markup:</h5>

<pre>&lt;p&gt;<span class="grey">Morbi posuere egestas ligula, id porta erat feugiat eget. Aenean nisl nisi, dignissim et elementum at, cursus non mi. Nulla auctor nibh et augue elementum sed vulputate massa tincidunt. Integer est elit, pharetra ac ornare eget, ornare in ante.</span>&lt;/p&gt;

    &lt;section class="cf"&gt;
        &lt;div class="red"&gt;
        &lt;/div&gt;
        
        &lt;div class="blue"&gt;
        &lt;/div&gt;
    &lt;/section&gt;<span class="grey">&lt;!-- close .cf --&gt;</span>

&lt;p&gt;<span class="grey">Phasellus varius auctor elit, at sollicitudin nulla accumsan ac. Quisque iaculis interdum arcu, vel iaculis erat ullamcorper at. Sed lobortis nunc consequat magna posuere commodo. Quisque hendrerit pretium neque, in tempus elit ultrices in.</span>&lt;/p&gt;</pre>

<h5>CSS:</h5>

<pre>.cf:before,
.cf:after {
    content:"";
    display:table;
}
.cf:after {
    clear:both;
}
.red {
	float: left;
	height: 100px;
	width: 100px;
	background: red;
	margin-right: 10px;
}
.blue {
	float: left;
	height: 100px;
	width: 100px;
	background: blue;
	margin-right: 10px;
}
</pre>

<h4>Containing Floats</h4>

<p>Instead of clearing, the parent elements of floating elements can be set to overflow: hidden; but only works 90% of the time. For instance, if an element has a drop shadow it will not be contained in the overflow.</p>

<p>A containing element can also be floated to contain all the floated elements within.</p>

<p><code>Overflow</code>, <code>hidden</code>, or <code>clear</code> are probably most effective.</p>
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>