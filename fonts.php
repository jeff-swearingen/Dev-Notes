<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Fonts &amp; Typography</title>
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
    
    
    <!--<style>
ul, li {
    background: none repeat scroll 0 0 #FFFFFF;
    font-family: "Trebuchet MS";
    line-height: 1.5em;
    list-style: disc outside none;
    margin-left: 20px;
}
</style>-->

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

<h3>Fonts &amp; Typography</h3>
					
<h4>Font Shorthand</h4>
    
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
     line-height: 1.5em; <span class="grey">/* is invalid--would be overridden by font shorthand */</span>
     font: bold italic smaller Arial, sans-serif;
}</pre>


<p class="italic">It should be written like this:</p>

    
<pre>#content p {
     font: bold italic smaller Arial, sans-serif;
     line-height: 1.5em;
}</pre>
    

<h4>Line Height</h4>

<p>A good starting point is 140%. Not a hard and fast rule but generally works well:</p>
	
<pre>line-height: 140%;</pre>

<h4>Dropcap</h4>

<div class="dropCap cf">

<p>This is an example of a dropcap. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dapibus rutrum luctus. Quisque suscipit sagittis elit, vel pellentesque velit ullamcorper nec. Cras vitae sodales mauris. Nunc nibh arcu, tempor vel venenatis a, condimentum vitae ante. Quisque non magna vitae eros blandit volutpat. Vivamus vehicula convallis varius. Donec mollis facilisis hendrerit.</p>
</div>
       
<pre>
.dropcap p:first-of-type:first-letter { <span class="grey">/* Styles customized for this sample */</span>
     float: left;
     font: bold 62px "Helvetica Neue", Arial, Helvetica, sans-serif;
     margin: 6px 6px 0 0;
     line-height: .65; <span class="grey">/* Webkit/Firefox :first-of-type spacing reconciliation */</span>
}
.dropcap p {
     line-height: 18px;
}</pre>    
    

<h4>Letter Spacing</h4>    
<p>Letter spacing declaration looks like this:</p>    
    
<pre>letter-spacing: 5px;</pre>

<h5>Example:</h5>
<p class="letterSpacing">Letter spacing example</p>


<h4>Word Spacing</h4>        
<p>Word spacing declaration looks like this:</p>    
    
<pre>word-spacing: 5px;</pre>

<h5>Example:</h5>

<p class="wordSpacing">Word spacing example</p>
	    
<h4>Font Style and Weight</h4>

<p>Regarding text decoration you are basically limited by browsers to:</p>
    
<pre>font-style: italic; <span class="strong">(or normal)</span>
font-weight: bold; <span class="strong">(or normal)</span>
font-variant: small-caps; <span class="strong">(or uppercase or normal)</span></pre>

<?php include('ssi/display-tags.ssi');?>
    
<h4>Transforming Text</h4>
    
<pre>text-transform: <span class="fuchsia">uppercase</span>;
text-transform: <span class="fuchsia">lowercase</span>;
text-transform: <span class="fuchsia">capitalize</span>;</pre>
    

<h4>Text Decoration</h4>

    
<pre>text-decoration: <span class="fuchsia">blink</span>;
text-decoration: <span class="fuchsia">inherit</span>;
text-decoration: <span class="fuchsia">line-through</span>;
text-decoration: <span class="fuchsia">none</span>; <span class="strong">(is useful for removing underlined links)</span>
text-decoration: <span class="fuchsia">overline</span>;
text-decoration: <span class="fuchsia">underline</span>;</pre>
    



<h4>Text Sizing</h4>

<p>Probably the most common text sizing solution is using Ems. 1em equals 16 pixels so setting the font-size in the body declaration to 62.5% will make the body font equal to 10 pixels (16 x 0.625 = 10). So, the baseline text in your page will be reset to 10 pixels by default. From there it's easy to compute what other text sizes will look like. For example, 1.5em would be 15 pixels. 2em is 20 pixels.</p>


<h4>More info:</h4> 
    <ul class="square">
        <li><a href="http://www.alistapart.com/articles/howtosizetextincss/" target="_blank">http://www.alistapart.com/articles/howtosizetextincss/</a></li>
        <li><a href="http://clagnut.com/blog/348/" target="_blank">http://clagnut.com/blog/348/</a></li>
    </ul>

<p>Percentage based text allows full text-sizing control from the body declaration. For example, if the font-size: <em>small</em>; is changed in the body declaration, all the other descendant selectors will follow suit:</p>

    
<pre>body {
     font-size: small;
}
h1 {
     font-size: 150%;
}
h2 {
     font-size: 130%;
}
h3 {
     font-size: 120%;
}
ul li {
     font-size: 90%;
}
.note {
     font-size: 85%;
}</pre>
    

<?php include('ssi/rems.ssi');?> 



<h4>Common Web Fonts</h4>

<div id="fonts">

    <h4 class="times">Times</h4>
    <p class="times">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="helvetica">Helvetica</h4>    
    <p class="helvetica">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="courier">Courier</h4>
    <p class="courier">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="georgia">Georgia</h4>
    <p class="georgia">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="verdana">Verdana</h4>
    <p class="verdana">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="trebuchet">Trebuchet MS</h4>
    <p class="trebuchet">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="impact">Impact</h4>    
    <p class="impact">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="lucidaSans">Lucida Sans</h4>
    <p class="lucidaSans">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="lucidaConsole">Lucida Console</h4>
    <p class="lucidaConsole">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="serif">serif</h4>
    <p class="serif">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="sansSerif">sans-serif</h4>
    <p class="sansSerif">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="monospace">monospace</h4>
    <p class="monospace">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    
    <h4 class="cursive">cursive</h4>
    <p class="cursive">In lacus magna, rutrum at congue vitae, imperdiet a purus</p>
    


</div><!-- div #fonts -->

<?php include('ssi/drop-shadow-text.ssi');?> 


<h4>@font-face</h4>

<p>This allows you to use custom fonts hosted externally that may not be resident on a user's machine. These declarations need to go above all over styles and follow the order of <code>normal, italic, bold, bold-italic</code>:</p>


<pre>
&lt;style&gt;
<span class="grey">/* @font-face rule declarations */</span>
@font-face {
	font-family: 'Cantarell';
	src: url('_fonts/Cantarell-Regular-webfont.eot');
	src: url('_fonts/Cantarell-Regular-webfont.eot?#iefix') format('embedded-opentype'), url('_fonts/Cantarell-Regular-webfont.woff') format('woff'), url('_fonts/Cantarell-Regular-webfont.ttf') format('truetype'), url('_fonts/Cantarell-Regular-webfont.svg#webfont9UOzsjXz') format('svg');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Cantarell';
	src: url('_fonts/Cantarell-Oblique-webfont.eot');
	src: url('_fonts/Cantarell-Oblique-webfont.eot?#iefix') format('embedded-opentype'), url('_fonts/Cantarell-Oblique-webfont.woff') format('woff'), url('_fonts/Cantarell-Oblique-webfont.ttf') format('truetype'), url('_fonts/Cantarell-Oblique-webfont.svg#webfontRl4nowrT') format('svg');
	font-weight: normal;
	font-style:italic;
}

@font-face {
	font-family: 'Cantarell';
	src: url('_fonts/Cantarell-Bold-webfont.eot');
	src: url('_fonts/Cantarell-Bold-webfont.eot?#iefix') format('embedded-opentype'), url('_fonts/Cantarell-Bold-webfont.woff') format('woff'), url('_fonts/Cantarell-Bold-webfont.ttf') format('truetype'), url('_fonts/Cantarell-Bold-webfont.svg#webfontKr2CkGZp') format('svg');
	font-weight: bold;
	font-style:normal;
}

@font-face {
	font-family: 'Cantarell';
	src: url('_fonts/Cantarell-BoldOblique-webfont.eot');
	src: url('_fonts/Cantarell-BoldOblique-webfont.eot?#iefix') format('embedded-opentype'), url('_fonts/Cantarell-BoldOblique-webfont.woff') format('woff'), url('_fonts/Cantarell-BoldOblique-webfont.ttf') format('truetype'), url('_fonts/Cantarell-BoldOblique-webfont.svg#webfontQ1aSR0ux') format('svg');
	font-weight: bold;
	font-style:italic;
}
</pre>

<p class="note indent">The font stack still follows below but the @font is the first one in the stack followed by more common fonts as backup or for offline devices:</p>

<pre>
body {
	width: 600px;
	font-family: Cantarell, Arial, Helvetica, sans-serif;
}
&lt;/ style&gt;
</pre>


<h4>Font Resources</h4>

        <ul class="square">
            <li><a href="http://www.codestyle.org/" target="_blank">http://www.codestyle.org/</a></li>
            <li><a href="http://www.fontspring.com/" target="_blank">http://www.fontspring.com/</a></li>
            <li><a href="http://www.fontsquirrel.com/" target="_blank">http://www.fontsquirrel.com/</a></li>
            <li><a href="http://html.adobe.com/edge/webfonts/" target="_blank">Adobe Web Fonts</a></li>
            
        </ul>
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>