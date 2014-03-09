<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Shorthand</title>
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
					
<h3>Shorthand</h3>
<p>When only two values are mentioned instead of four in a clockwise
fashion, e.g., margin: 15px 30px, the first values are top and bottom
while the second are for right and left. If there are three values, e.g;</p>

    
	<pre>margin: 0 0 <span class="red">1.5em</span>;</pre>


<p>The first value is the top, the second is the right <em>and</em> left, while the third is the bottom.</p>

<div class="excerpt">
<h4><em>From CSS: The Missing Manual</em> p. 131</h4>
<p>CSS offers a shorthand property called <em><strong>font</strong></em>, which lets you combine the following properties into a single line: <em><strong>font-style</strong></em> (page 125), <em><strong>font-variant</strong></em> (page 125), <em><strong>font-weight</strong></em> (page 124), <em><strong>font-size</strong></em> (page 119), <em><strong>line-height</strong></em> (page 128) and <em><strong>font-family</strong></em> (page 113). For example, the declaration <em><strong>font: italic bold small caps 18px/150% Arial, Helvetica, sans-serif;</strong></em> creates bold, italicized type in small caps, using 18px Arial (or Helvetica or sans-serif) with a line height of 150 percent. Keep these rules in mind:</p>

	<ul class="square">
        <li>You don't have to include every one of these properties, but you must include the font size and font family: <strong>font: 1.5em Georgia, Times, serif;</strong></li>
        <li>Use a single space between each property value. You use a comma only to separate fonts in a list like this: <strong>Arial, Helvetica, sans-serif</strong></li>
        <li>When specifying the line height, add a slash after the font size followed by the line-height value, like this: <em><strong>1.5em/150% or 24px/37px</strong></em></li>
        <li>The last two properties must be <em><strong>font-size</strong></em> (or font-size/line-height) followed by <em><strong>font-family</strong></em>, in that order. All the other properties may be written in any order. For example both <em><strong>font: italic bold small-caps 1.5em Arial;</strong></em> and <em><strong>font: bold small-caps italic 1.5em Arial;</strong></em> are the same</li>
	</ul>        
        
<p>Finally, omitting a value from the list is the same as setting that value to normal. Say you created a &lt;p&gt; tag style that formatted all paragraphs in bold, italics, and small caps with a line height of 2000 percent (not that you'd actually do that). If you then created a class style named, say, <em><strong>.special-Paragraph</strong></em> with the following font declaration <em><strong>font: 1.5em Arial;</strong></em> and applied it to one paragraph on the page, then that paragraph would not inherit the italics, bold, small caps, or line-height. Omitting those four values in the <em><strong>.specialParagraph</strong></em> style is the same as writing this: <em><strong>font: normal normal normal 1.5em/normal Arial/;</strong></em>.</p>
</div>

<h3>Font Shorthand</h3>

<pre>#content p {
     font-family: Arial, sans-serif;
     font-weight: bold;
     font-style: italic;
     font-size: smaller;
}</pre>
    

<p class="italic">Can be changed to:</p>

    
<pre>#content p {
     font: bold italic <span class="red">1.5em Arial, sans-serif;</span>
}</pre>
    
	
<p><span class="red">Size and family</span> <strong>MUST</strong> come last in that specific order.</p> 

<p>Also, the font declaration shorthand should come as the first line because it will add its own values as unseen defaults that will override any previously declared properties, e.g.;</p>


<pre>#content p {
     line-height: 1.5em; <span class="note">(is invalid--would be overridden by font shorthand)</span>
     font: bold italic smaller Arial, sans-serif;
}</pre>


<p><em>It should be written like this:</em></p>

    
<pre>#content p {
     font: bold italic smaller Arial, sans-serif;
     line-height: 1.5em;
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