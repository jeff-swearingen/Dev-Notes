<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Responsive Web Design</title>
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
    				
	<?php include('ssi/header.ssi');?> 
					
<h3>Responsive Web Design</h3>

<p>To make a device display the full-width of a page, in the <code>head</code> after this <code>meta</code> tag <span class="paragraphPre">&lt;meta charset="UTF-8"&gt;</span> add this:</p>

<pre>
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width"&gt;
</pre>

<p>Or, instead of modifying every page's doctype declaration, just add this to the top of your CSS <span class="note">but add vendor prefixes</span>:</p>

<pre>@-moz-viewport { 
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
}</pre>

<p class="note">This article recommends both methods to cover all your bases:</p>

<p><a href="http://menacingcloud.com/?c=cssViewportOrMetaTag" target="_blank">http://menacingcloud.com/?c=cssViewportOrMetaTag</a></p>


<h3>Media Query Strategies</h3>

<h4>Adjust Columns</h4>
<p>Bring column count for tables down to 2 or 3 at most. Avoiding floats in mobile-targeted query allows you to stack a page's content containers on top of each other.</p>

<h4>Flexible Widths</h4>

<p>For phones and tablets set the widths of your content divs to Auto or 100%. This converts the page from a fixed-width design to a liquid, or flexible, design and will conform to the width of a small device in portrait or landscape mode.</p>

<h4>Tighten White Space</h4>

<p>Shrink <code>margin</code> and <code>padding</code> for smaller devices for better readability.</p>

<h4>Change Navigation Menus</h4>

<p>Various menu conversion methods:</p>

<ul class="square">
	<li><a href="http://css-tricks.com/convert-menu-to-dropdown/" target="_blank">http://css-tricks.com/convert-menu-to-dropdown/</a></li>
	<li><a href="http://bradfrostweb.com/blog/web/responsive-nav-patterns/" target="_blank">http://bradfrostweb.com/blog/web/responsive-nav-patterns/</a></li>
	<li><a href="http://bradfrostweb.com/blog/web/complex-navigation-patterns-for-responsive-design/" target="_blank">http://bradfrostweb.com/blog/web/complex-navigation-patterns-for-responsive-design/</a></li>   
</ul>

<h4>Using Breakpoints</h4>
<p>Here's a general example of some media query breakpoints for separate kinds of devices:</p>

<pre><span class="grey">/* Large desktop */</span>
<span class="mediaQuery">@media (min-width: 1200px) {</span>

body {
	width: 85%;
	max-width: 1980px;
	min-width: 1200px;
}

nextelement (
}
<span class="maroon bold">}</span>
<span class="grey">/* Portrait tablet to landscape and desktop */</span>
<span class="mediaQuery">@media (min-width: 768px) and (max-width: 979px) {</span> 

body {
	width: 90%;
	max-width: 979px;
	min-width: 768px;
	font-size: 80%;
}

nextelement (
}
<span class="mediaQuery">}</span>

<span class="grey">/* Landscape phone to portrait tablet */</span>
<span class="mediaQuery">@media (max-width: 767px) {</span>

body {
	width: 90%;
	max-width: 767px;
	min-width: 481px;
	font-size: 80%;
}

nextelement (
}
<span class="mediaQuery">}</span>

<span class="grey">/* Landscape phones and down */</span>
<span class="mediaQuery">@media (max-width: 480px) {</span>
body {
	width: 90%;
	max-width: 480px;
}

nextelement (
}
<span class="mediaQuery">}</span>
</pre>

<h4>Use Background Images</h4>

<p>In your <code>screen.css</code> and <code>mobile.css</code>, have a different sized background images. For example:</p>

<p class="note">Screen</p>
<pre>.logo { 
     width: 960px;
     height: 120px; 
     background-image: url(images/large_logo.png)
}</pre>

<p class="note">Mobile</p>
<pre>.logo { 
     width: 320px;
     height: 60px; 
     background-image: url(images/small_logo.png)
}</pre>

<p>Strategies for altering the layout of a page for different devices:</p>
<p><a href="http://www.lukew.com/ff/entry.asp?1514" target="_blank">http://www.lukew.com/ff/entry.asp?1514</a></p>




<h4>Respond JS for Media Queries to be Read by IE 8 and Earlier</h4>

<p>Download and install this script on your site for IE compliance:</p>

<p><a href="http://tinyurl.com/7w49a6z" target="_blank">http://tinyurl.com/7w49a6z</a></p>

<pre>
<span class="grey">&lt;!--[if lte IE 8]&gt;</span> 
&lt;script src="respond.min.js"&gt;&lt;/script&gt;
<span class="grey">&lt;![endif]--&gt;</span>
</pre>

<p class="note">Respond.js will not work using <code>@import</code> for your style sheets, e.g.;</p>

<pre>@import url(css/small.css) (max-width: 320px);</pre>

<p>Media queries can also be added to style links like this:</p>

<pre>&lt;linkhref="css/small.css" rel="stylesheet" <span class="red">media="(max-width:480px)"</span>&gt;
&lt;linkhref="css/large.css" rel="stylesheet" <span class="red">media="(min-width:769px)"</span>&gt;
&lt;linkhref="css/medium.css" rel="stylesheet" <span class="red">media="(min-width:481px) and (max-width:768px)"</span>&gt;</pre>

<p>It's also possible to string multiple expressions together:</p>

<pre>
&lt;link rel="stylesheet" <span class="red">media="screen and (orientation: portrait) and (min-width: 800px)"</span> href="800wide-portrait-screen.css" /&gt;
</pre>

<p>Or have them in a list separated by a comma:</p>

<pre>
&lt;link rel="stylesheet" <span class="red">media="screen and (orientation: portrait) and (min-width: 800px)</span><span class="blue">, projection</span><span class="red">"</span> href="800wide-portrait-screen.css" /&gt;
</pre>

<h4>Importing Media Queries</h4>

<p>If you <code>import</code> a media query style sheet it must be placed before any written styles on the imported sheet. Here's what the top of that sheet should look like:</p>

<pre>
@import url(css/base.css); <span class="grey">/* no media query, applies to all */</span> 
@import url(css/medium.css) (min-width: 481px) and (max-width: 768); 
@import url(css/small.css) (max-width: 480px);
</pre>

<h4>Media Query Capabilities</h4>

<p><code>width:</code> The viewport width.</p>

<p><code>height:</code> The viewport height.</p>

<p><code>device-width:</code> The rendering surface's width (for our purposes, this is typically the screen width of a device).</p>

<p><code>device-height:</code> The rendering surface's height (for our purposes, this is typically the screen height of a device).</p>

<p><code>orientation:</code> This capability checks whether a device is portrait or landscape in orientation.</p>

<p><code>aspect-ratio:</code> The ratio of width to height based upon the viewport width and height. A 16:9 widescreen display can be written as <code>aspect-ratio: 16/9</code>.</p> 

<p><code>device-aspect-ratio:</code> This capability is similar to <code>aspect-ratio</code> but is based upon the width and height of the device rendering surface, rather than viewport.</p>

<p><code>color:</code> The number of bits per color component. For example, <code>min-color: 16</code> will check that the device has 16-bit color.</p>

<p><code>color-index:</code> The number of entries in the color lookup table of the device. Values must be numbers and cannot be negative.</p>

<p><code>monochrome:</code> This capability tests how many bits per pixel are in a monochrome frame buffer. The value would be a number (integer), for example monochrome: 2, and cannot be negative.</p> 

<p><code>resolution:</code> This capability can be used to test screen or print resolution; for example, <code>min-resolution: 300dpi</code>. It can also accept measurements in dots per centimetre; for example, <code>min-resolution: 118dpcm</code>.</p>

<p><code>scan:</code> This can be either progressive or interlace features largely particular to TVs. For example, a 720p HD TV (the p part of 720p indicates "progressive") could be targeted with <code>scan: progressive</code> whilst a 1080i HD TV (the i part of 1080i indicates "interlaced") could be targeted with <code>scan: interlace</code>.</p>

<p><code>grid:</code> This capability indicates whether or not the device is grid or bitmap based.</p>

<p>All the above features, with the exception of <code>scan</code> and <code>grid</code>, can be prefixed with min or max to create ranges. For example, consider the following code snippet:</p> 

<pre>@import url("phone.css") screen and (min-width:200px) and (max-width:360px);</pre> 

<p>Here, a minimum <code>(min)</code> and maximum <code>(max)</code> have been applied to width to set a range. The <code>phone.css</code> file will only be imported for screen devices with a minimum viewport width of 200 pixels and a maximum viewport width of 360 pixels.</p>

<h4>Basic Media Query CSS Structure (Desktop)</h4>

<pre>
<span class="grey">/* Put your reset styles here */
/* Put styles for desktop and basic styles for all devices here */</span>
body { 
     <span class="grey">/* properties for body here */</span>
} 

<span class="grey">/* medium display only */</span>
<span class="mediaQuery">@media (min-width: 481px) and (max-width: 768px) {</span>
body { 
     <span class="grey">/* properties that only apply to tablets */</span>
}
<span class="mediaQuery">}</span> 

<span class="grey">/* small display only */</span>
<span class="mediaQuery">@media (max-width: 480px) {</span>
body {
     <span class="grey">/* properties that only apply to phones */</span>
}
<span class="mediaQuery">}</span>
</pre>

<h4>Media Query CSS Structure (Mobile First)</h4>

<pre><span class="grey">/* Put your reset styles here */ 
/* Put styles for mobile and basic styles for all devices here*/</span> 
body { 
     <span class="grey">/* properties for body here */</span>
}

<span class="grey">/* medium display only */</span>
<span class="mediaQuery">@media (min-width: 481px) and (max-width: 768px) {</span>
body {
     <span class="grey">/* properties that only apply to tablets */</span>
}
<span class="mediaQuery">}</span>

<span class="grey">/* large display only */</span> 
<span class="mediaQuery">@media (min-width: 769px) {</span>
body {
     <span class="grey">/* properties that only apply to phones */</span>
}
<span class="mediaQuery">}</span>
</pre>

<?php include('ssi/boxmodelreset.ssi');?>

<h4>Flexible Grids</h4>
<p>There are no standard sizes for all phones and tablets so it's best to create flexible-width pages.</p>

<p>HTML Markup:</p>

<pre>&lt;div class="columns"&gt;
     &lt;div class="one-third"&gt;
    	<span class="grey">...content goes here...</span>
     &lt;/div&gt;
     &lt;div class="two-thirds"&gt;
    	<span class="grey">...content goes here...</span>
     &lt;/div&gt;
&lt;/div&gt;</pre>

<p>CSS:</p>

<pre>.columns { 
     width: auto; <span class="grey">/* same as 100% */</span> 
     max-width: 1200px; 
}
.columns:after { 
     content: ""; 
     display: table; 
     clear: both;
}
.one-third { 
     float: left; 
     width: 33%;
}
.two-thirds { 
     float: left;
     width: 67%;
}</pre>

<h4>Converting Fixed Width to Flexible Grids</h4>

<p>It's pretty easy, all you have to do is follow this formula:</p>
<p class="indent note">target &divide; context = result</p>

<p>For example, in the CSS below:</p>

<pre>body {  <span class="grey">/* or a containing div */</span>  
     width: 960px;
}
.sidebar { 
     float: left; 
     width: 180px;
}
.main {
     float: left;
     width: 780px;
}</pre>

<p class="indent note">180 &divide; 960 (total width) = .1875 x100 = 18.75%<br>
780 &divide; 960 (total width) = .8125 x100 = 81.25%</p>

<p>So the conversion would look like this (don't round up values):</p>

<pre>body {  <span class="grey">/* or a containing div */</span>  
     <span class="red">width: auto;</span>
}
.sidebar { 
     float: left; 
     <span class="red">width: 18.75%;</span>
}
.main {
     float: left;
     <span class="red">width: 81.25%;</span>
}</pre>

<p class="note">You can use the same formula to convert pixel-sized type to ems. Say you have paragraph text that's 18 pixels (the target). The default size of regular text (the context) is 16 pixels. Just divide 18 by 16 to get the new size in ems: 1.125em.</p>

<h4>Testing Responsive Designs</h4>

<ul class="square">
	<li><a href="http://responsivepx.com/" target="_blank">http://responsivepx.com/</a></li>
	<li><a href="http://www.responsinator.com/" target="_blank">http://www.responsinator.com/</a> <span class="note">Requires uploading files</span></li>
	<li><a href="http://html.adobe.com/edge/inspect/" target="_blank">http://html.adobe.com/edge/inspect/</a></li>   
</ul>

<h4>Fluid Images</h4>
<p>Add the following style to CSS:</p>

<pre>img {
     max-width: 100%;
}</pre>

<p>Locate every <code>img</code> tag in the page and remove the <code>height</code> and <code>width</code> attributes.</p>

<pre>&lt;img src="bunny.jpg" width="320" height="200" alt="bunny"&gt;</pre>

<p class="indent"><em>into this:</em></p> 

<pre>&lt;img src="bunny.jpg" alt="bunny"&gt;</pre>

<p>Breaking the size and float in separate classes is the more flexible then combining them into a single class:</p>

<pre>.imgSmall {
     max-width: 40%;
}
.imgLeft {
     float: left;
}
</pre>

<p>Then apply both classes to the image:</p>
<pre>&lt;img src="bunny.jpg" alt="bunny" <span class="red">class="imgSmall imgLeft"</span>&gt;</pre>

<?php include('ssi/ie8-responsive-img.ssi');?>

<?php include('ssi/ie8-responsive-img.ssi');?>

<h4>Flexible Videos and Flash</h4>
<p>For HTML5 <code>video</code> tag or <code>embed</code> Flash content use this in the CSS Reset:</p>

<pre>img, video, embed, object { 
     max-width: 100%;
}</pre>

<p class="note">For videos embedded in an <code>iframe</code> use the FitVids JS: <a href="http://fitvidsjs.com/" target="_blank">http://fitvidsjs.com/</a></p>
</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>