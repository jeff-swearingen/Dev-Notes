<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>IE Issues</title>
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

<h3>Internet Explorer</h3>

<?php include('ssi/ie-reconciliation.ssi');?> 

<h4>For IE8 to Stay in IE8 Mode</h4>
<p>Using this will prevent it from reverting to earlier versions:</p>

<pre>
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;
</pre>

<h4>Importing or Linking IE Style Sheets</h4>
<p>To import an IE stylesheet use this conditional comment in <span class="red">red</span>:</p>


<pre>&lt;head&gt;
     &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
     &lt;title&gt;<span class="highlight">Page Title</span>&lt;/title&gt;
     &lt;link href=&quot;css/main.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot; /&gt;
     <span class="red">&lt;!--[if IE 6]&gt;&lt;style type=&quot;text/css&quot;&gt;@import url(&quot;css/ie6.css&quot;);&lt;/style&gt;&lt;![endif]--&gt;</span>   
&lt;/head&gt;
</pre>

<p>Other IE version style sheets can be imported or linked:</p>

<pre>
<span class="grey">&lt;!--[if IE 7]&gt;&lt;linkhref="IE7_styles.css" rel="stylesheet"&gt;&lt;![endif]--&gt;
&lt;!--[if IE 6]&gt;&lt;style&gt;@importurl(IE6_styles.css)&lt;![endif]--&gt;</span>
</pre>

<p>For a single IE style sheet that includes everything less than or equal to IE 8, use <code>lte</code>:</p>

<pre>
<span class="grey">&lt;!--[if lte IE 8]&gt;&lt;linkhref="IE_styles.css"rel="stylesheet"&gt;&lt;![endif]--&gt;</span>
</pre>

<p>Make sure that the IE styles come <em>after</em> the earlier defined styles so they can override them:</p>
<pre>
&lt;linkhref="global_styles.css" rel="stylesheet" type="text/css" /&gt;
<span class="grey">&lt;!--[ifIE8]&gt;&lt;linkhref="IE8_styles.css"rel="stylesheet"type="text/css" /&gt;&lt;![endif]--&gt;
&lt;!--[iflteIE7]&gt;&lt;linkhref="IE_old_styles.css" rel="stylesheet" type="text/css" /&gt;&lt;![endif]--&gt;</span>
</pre>

<h4>Various IE bug fixes</h4>

<pre>
* html {
	position: relative; 
	zoom: 1;
}  
</pre>

<p>If it doesn't work it is also element specific sometimes, e.g.:</p>

<pre>
#banner {
	position: relative; 
	zoom: 1;
}
</pre>

<p>In Internet Explorer, floats, list items, and absolutely positioned elements display differently depending on whether or not they have layout. For example, to make sure an element contains any floated elements inside them, you can add this style to your CSS: <code>.clear { zoom: 1; }</code> Then, add that class to any element that contains a floated element. The point of that style isn't really to zoom into the links. Although the IE-only zoom property lets you zoom into a page element (using JavaScript), it also triggers layout in IE 6 and 7. For reasons known only to Microsoft (and the extraterrestrials), switching on layout forces IE 6 and 7 to contain any floated elements inside a containing tag. The zoom property isn’t the only one that switches on layout in IE. Several other (real) CSS properties also give an element layout: position: absolute; float: left; float: right; display: inline-table; any width value; and any height value.</p>


<pre>.clear { 
	zoom: 1;
}
</pre>


<p>If an object (a) is placed near an absolutely positioned object (b), (a) will revert back to it's original position instead of the newly assigned one. Add <code>position: relative;</code> to get it to work:</p>

<pre>
#banner #logo {
	margin-left: 60px;
	<span class="red">position: relative;</span>
}
</pre>

<p>Browsers position inline elements (images) differently relative to the baseline of other elements around them. Use CSS force the image to display as a block-level element:</p>

<pre>
#main .figure img {
	display: block;
}
</pre>

<p><code>width: 100%;</code> is required in IE 6 for an elastic page layout going the width of the page:</p>

<pre>
#contentWrapper {
	clear: both;
	position: relative;
	<span class="red">width: 100%;</span>
}
</pre>


<h4>IE Quirks Mode</h4>

<p>Quirks mode will be engaged if any of these legal conditions are present:</p>

	<ul class="square">
    	<li>When the document type declaration is absent or incomplete</li>
        <li>When an HTML 3 or earlier document is encountered</li>
        <li>When an HTML 4.0 document type declaration is used but a system identifier (URI) is not present</li>
        <li>When a comment or other unrecognized content appears before the document type declaration</li>
        <li>When there are errors <em>anywhere</em> in the document</li>
        <li>IE 6: when there is an XML declaration prior to the document type declaration</li>
	</ul>



    <p>If this particular DOCTYPE is used it will make IE render in Standards mode as opposed to Quirks mode:</p>

<pre>&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;        
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;   
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
&lt;head&gt;
&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
&lt;title&gt;<span class="highlight">Page Title</span>&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;<span class="red"></span></pre>



<h4>IE6 Whitespace Bug - UL Bulleted Lists</h4>

    <ul class="square">
        <li><a href="#">apple</a></li>
        <li><a href="#">orange</a></li>
        <li><a href="#">banana</a></li>
    </ul>


<p>The main ingredients are the list items and their contained anchors. I've actually only seen the whitespace bug when those anchors are set to <code>display: block;</code> as well. Removing ALL whitespace between each <code>li</code> should have done the trick, actually, since that’s what triggers the bug in IE6. But let’s look at another way:</p>

<p>You'll want to quarantine this fix and all other hacks or &quot;patches&quot; for IE - do this via conditional comments. This way you keep your IE-only fixes quarantined for easy maintenance, plus if they involve non-valid workarounds your main CSS will still validate. OK, here you go:</p>

<div class="indent"><p><strong>1.</strong> Target IE6 only with the following conditional comment:</p>

<pre><span class="grey">&lt;!--[if IE 6]&gt;&lt;style type=&quot;text/css&quot;&gt;@import url(&quot;ie6.css&quot;);&lt;/style&gt;&lt;![endif]--&gt;</span></pre>

<p class="note">Important! Place that line in your HTML head, AFTER your main style sheet inclusion.</p>

<p><strong>2.</strong> Create a new CSS file for IE6 only... named '<code>ie6.css</code>' or however you've referenced it in the CC above.</p>

<p><strong>3.</strong> Add the following to your newly created <code>ie6.css</code> file:</p>

<p class="indent"><span class="fuchsia">li { height: 1em; }</span> <span class="grey">/* fix damn whitespace bug */</span></p></div>

<p>Giving the list items an explicit height fixes the bug. But depending on your design you probably don't want the more well-behaved browsers to see it. Thanks to the conditional comments, that height declaration gets served to IE6 only. You can actually use this method to serve IE6 any <em>corrections</em> it requires... and it likely could need a few. Just add fixes to your ie6.css file and be happy.</p>

<p>Hopefully that does the trick. If not, here's a couple other solutions - sometimes depending on your other code, you need to try different methods:</p>

	<ul class="square">
        <li>Andy Budd recommends adding any width or height value to your <code>li</code> tags, essentially what we did above</li>
        <li>John Hicks details a float/clear solution, read the comments for others</li>
        <li>More on <span class="grey">conditional comments</span> here: <a href="http://www.quirksmode.org" target="_blank">quirksmode.org</a></li>
	</ul>
    
<p>From: <a href="http://www.webmasterworld.com/css/3545536.htm" target="_blank">http://www.webmasterworld.com/css/3545536.htm</a></p>

                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>