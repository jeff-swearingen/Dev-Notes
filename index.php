<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Home/Basics</title>
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
   
    
    <?php include('ssi/declaration-block.ssi');?> 
                    

<h3>Doctype Declaration</h3>

<p>Best to use the HTML5 version:</p>

<pre>
&lt;!doctype html&gt;
 &lt;html&gt;
  &lt;head&gt;
   &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;<span class="highlight">Title</span>&lt;/title&gt;
  &lt;/head&gt;
 &lt;body&gt;

 &lt;/body&gt;
&lt;/html&gt;
</pre>

<p>Additionally, in HTML5 the style tag reads just like this:</p>
<pre>
&lt;style&gt;

&lt;/style&gt;
</pre>
  

<h3>The Cascade</h3>
	<ul class="square">
        <li><em>The last style applied wins</em></li>
        <li>Embedded style will overwrite linked stylesheet if embedded CSS is below the linked CSS</li>
        <li>Inline style will overwrite anything else</li>
	</ul>
    
<h3>Specificity</h3>

<p>In the conflict between two selectors that inheritance can't solve, the specificity of the selector is used to determine which selector has precedence.</p>

<p><em>The more specific rule (the higher number) wins</em></p>

<table class="specificity">
<thead>
<tr>
<th scope="col" class="col1">Selector</th>
<th scope="col">Inline</th>
<th scope="col">ID</th>
<th scope="col">Class</th>
<th scope="col">Element</th>
<th scope="col">Total</th>
</tr>
</thead>

  <tbody><tr>
    <td class="col1">&lt;p style=&quot;color: red&quot;&gt;</td>
    <td>1</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>1000</td>
  </tr>
  <tr>
    <td class="col1">p</td>
    <td class="yellow">0</td>
    <td class="yellow">0</td>
    <td class="yellow">0</td>
    <td class="yellow">1</td>
    <td class="yellow">1</td>
  </tr>
  <tr>
    <td class="col1">h1.special</td>
    <td>0</td>
    <td>0</td>
    <td>1</td>
    <td>1</td>
    <td>11</td>
  </tr>
  <tr>
    <td class="col1">#mainContent h2</td>
    <td class="yellow">0</td>
    <td class="yellow">1</td>
    <td class="yellow">0</td>
    <td class="yellow">1</td>
    <td class="yellow">101</td>
  </tr>
</tbody></table>
 
 
    
<p>If specificity deconfliction doesn't work then the problem is with your cascade.</p>    
    
<h4>Specificity Strategy</h4>

<ul class="square">
	<li>Don't mix class and ID selectors without having a plan that guides when they are to be used</li>
	<li>Sections of ID selectors can be hard to overwrite later if not accounted for</li>
	<li>If you find yourself writing descendent selectors with three or more selectors, consider revising your strategy</li>            
</ul>

<h4>Use Inheritance to Your Advantage</h4>

<ul class="square">
	<li>If you are familiar with your page structure, you should be able to identify global formatting across your site</li>
	<li>Those formatting needs can then be written as global styles on parent elements, and inherited by the rest of the site</li>
	<li>This results in fewer rules to write and easier styles to maintain</li>            
</ul>

<h4>Think About How Styles Relate to One Another</h4>

<ul class="square">
	<li>New designers often make the mistake of styling each element individually as it's encountered</li>
	<li>This leads to bloated style sheets and hard to maintain styles</li>
	<li>Thinking of styles as related formatting allows you to plan and write organized style sheets</li>            
</ul>


<h3>!Important Declaration</h3>

<p>Is a last resort in CSS deconfliction and should never be used without a valid reason because it will overwrite EVERYTHING.</p>

<pre>
p {
   color: red <span class="important">!important</span>;
}
</pre>


<?php include('ssi/boxmodel.ssi');?> 
<?php include('ssi/boxmodelreset.ssi');?> 


<h3>Borders</h3>

<p>Elements can have two sets of borders. For example, note the <code>border-top</code> in addition to the wrap around <code>border</code>:</p>

    
<pre>.sidebar {
    width: 30%;
    float: right;
    margin: 10px;
    background: #faebc7;
    padding: 10px 20px;
    <span class="red bold">border: 1px dotted #fc6512;
    border-top: 20px solid #fc6512;</span>
}</pre>

<p>Border values can also be done in shorthand:</p>

    
<pre>.borderTest {
    border-width: 1px 4px 9px 7px;
    border-color: red green blue black;
    border-style: solid dotted dashed outset;
}</pre>
    
    <div class="borderTest">
    	<p>Test</p>
    </div>



<h4>Border Styles</h4>

<div id="borderStyle">
    <p class="borderStyleSolid">This is the solid border style.</p>
    <p class="borderStyleDotted">This is the dotted border style.</p>
    <p class="borderStyleDashed">This is the dashed border style.</p>
    <p class="borderStyleDouble">This is the double border style.</p>
    <p class="borderStyleGroove">This is the groove border style.</p>
    <p class="borderStyleRidge">This is the ridge border style.</p>
    <p class="borderStyleInset">This is the inset border style.</p>
    <p class="borderStyleOutset">This is the outset border style.</p>
</div>


<h3>Color</h3>


<h4>RGB Percentages</h4>
  
<pre>element {
     color: rgb(23%,24%,18%);
}</pre>
    

<h5>or</h5>

    
<pre>element {
     color: rgb(227,237,194);
}</pre>
    

<h5>Alpha Channel Working Example:</h5>

<pre class="alpha">element {
     color: rgb<span class="red">a</span>(0,0,0,.75);
}</pre>



<h4>Named Colors</h4>

<div class="namedColors">
<table class="namedColors">
  <tbody><tr>
    <td class="black">Black = #000000</td>
    <td class="greentext">Green = #008000</td>
  </tr>
  <tr>
    <td class="silver">Silver = #C0C0C0</td>
    <td class="lime">Lime = #00FF00</td>
  </tr>
  <tr>
    <td class="grey">Grey = #808080</td>
    <td class="olive">Olive = #808000</td>
  </tr>
  <tr class="darkBackground">
    <td class="white">White = #FFFFFF</td>
    <td class="yellow">Yellow = #FFFF00</td>
  </tr>
  <tr>
    <td class="maroon">Maroon = #800000</td>
    <td class="navy">Navy = #000080</td>
  </tr>
  <tr>
    <td class="red">Red = #FF0000</td>
    <td class="blue">Blue = #0000FF</td>
  </tr>
  <tr>
    <td class="purple">Purple = #800080</td>
    <td class="teal">Teal = #008080</td>
  </tr>
  <tr>
    <td class="fuchsia">Fuchsia = #FF00FF</td>
    <td class="aqua">Aqua = #00FFFF</td>
  </tr>
</tbody></table>
</div><!-- Close div .namedColors -->

<p>In 6 digit hexadecimal color values like this #FFCC99, <span class="red">FF</span> represents the <span class="red">RED</span> value, <span class="greentext">CC</span> is the <span class="greentext">GREEN</span> value, and <span class="blue">99</span> is the <span class="blue">BLUE</span> value.</p>
                    

<?php include('ssi/display-tags.ssi');?>

</div><!-- Close twelve columns offset-by-one content -->
                
 
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>