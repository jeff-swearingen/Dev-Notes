<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

     <!-- Basic Page Needs
  ================================================== -->
     <meta charset="utf-8">
     <title>Selectors</title>
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
      <link href="css/selectors.css" rel="stylesheet" type="text/css" />
      

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
                                
<h3>Content</h3>

<p><a href="http://www.w3.org/TR/selectors/#selectors" target="_blank">http://www.w3.org/TR/selectors/#selectors</a></p>

<h3 class="first">Selectors:</h3>
 
<p>The selector tells a web browser which element or elements on a page to style&mdash;like a headline, paragraph, image, or link. In Figure   2-2, the p selector refers to the &lt;p&gt; tag. This selector makes web browsers format all &lt;p&gt; tags by using the formatting directions in this style. With the wide range of selectors that CSS offers and a little creativity, you’ll master your pages’ formatting.</p>
      
<pre>Element (or tag): <strong><span class="strong">h1 to h6, p, ul, li, etc.</span></strong>
      Class: <strong><span class="strong">.author</span></strong>
      ID: <strong><span class="strong">#header</span> {</strong> or something like <strong><span class="strong">div#content {</span></strong>     
      <strong>Grouped (or compound) Selector:</strong> h1, h2, address, p, ul, li, etc. 
      <span>(no need to write a selector for each, can be grouped separated by comma)</span>
      <strong>Descendent Selector:</strong> #mainContent h1
      <strong>Pseudo-Class Selectors:</strong>     :link  |  :visited  |  :hover     |  :active
</pre>      

<p class="note">For pseudo-class selectors, they must be in the LVHA order in the CSS or they'll overwrite each other. Also, there is no space between the element and the colon, e.g., <code>a:link</code>.</p>

      <?php include('ssi/declaration-block.ssi');?> 


<h4>Element Specific Selectors</h4>

<p>In the following the formatting will only apply to an H2 with the .news class applied:</p>

<pre>
h2.news {
      font-family: Arial;
      font-size: 2em;
      font-color: blue;
}
</pre>

<p><span class="note">Will also work with IDs</span></p>



<h4>ID selector (p. 53 of CSS the Missing Manual)</h4>
<p>CSS reserves the ID selector for identifying a unique part of the page, like a banner, navigation bar, or the main content area.</p>

<ul>
      <li>To use a style several times on a page, you must use classes. For example, when you have more than one photo on your page, use a class selector to apply styling—like a border—to each <code>img</code> tag you wish to style</li>
      <li>Use IDs to identify sections that occur only once per page. CSS-based layout often use ID selectors to identify the unique parts of a web page, like a sidebar or footer</li>
      <li><strong>Consider using an ID selector to sidestep style conflicts, since web browsers give ID selectors priority over class selectors</strong>.
For example, when a browser encounters two styles that apply to the same tag but specify different background colors, the ID's background color wins</li>
</ul>

<h4>Universal Selector</h4>

<p>Is a wildcard or scorched Earth method of styling and will overwrite everything on a page. No real practical use for it but it's there:</p>

<pre>*{
     color: red;
}
</pre>

<p>The code above will make EVERY element on the site red. </p>

<h4>Grouping Selectors</h4>

<p>Elements are separated by a comma. Useful for similarly styled elements. The following code is valid:</p>

<pre>
h1 {
     color: red;
}
h1, h2 {
     font-family: Georgia;
     font-size: 1.4em;
     font-weight: normal;
}
</pre>

<h4>Descendent Selectors</h4>

<p>They are selectors following another element, class, or ID so they will only work in that assigned element.

For example, only h2's inside an <code>article</code> tag in the markup will have that color assignment:</p>

<pre>
article h2 {
     color: #7D6855;
}
</pre>

<h4>Child Combinator</h4>

<p>Using a child combinator (the greater than &gt; symbol) after the <code>article</code>, it will format only the first <code>h2</code> inside an article and not the following <code>h2</code> tags that also may be in the same article.</p>

<pre>
article > h2 {
     padding: 0 25px;
}
</pre>


<h4>Adjacent Selectors</h4>

<p>Using an Adjacent Combinator (+), it will find every single paragraph following an h2 if they're in the same parent.</p>

<pre>
h2 + p {
     margin-top: .6em;
     font-style: italic;
}
</pre>

<p>To group adjacent selectors, the syntax would look like this:</p>

<pre>
h1 + p, h2 + p {
     margin-top: .6em;
     font-style: italic;
}
</pre>

<h4 id="attributeSelectors">Attribute Selectors</h4>

<p>Are used so that title tags or file extensions can be sought out to add styling. Here's a simple example:</p>

<pre>
a[href$="pdf"] {
     color: red;
}
</pre>

<p>They can get very detailed. More examples here:</p>

<p><a href="https://developer.mozilla.org/en-US/docs/CSS/Attribute_selectors" target="_blank">https://developer.mozilla.org/en-US/docs/CSS/Attribute_selectors</a></p>


<h4 id="structuralPseudoClass">Structural Pseudo-Class Selectors</h4>

<pre>
span:first-child {
     font-size: 1.3em;
     font-weight: bold;
     color: maroon;
}
h2:first-of-type {/* There is also a :last-of-type */
     border-bottom: 1px solid #42403E;
}
p:only-child {/* There is also a :only-of-type */
     font-style: italic;
     text-align: center;
}
</pre>

<p>Sample <code>last-child</code> selector. Note the bottom border of &quot;Five&quot; is not there:</p>


<div class="sampleLast-child">
<ul>
     <li><a href="#" target="_blank">One</a></li>
     <li><a href="#" target="_blank">Two</a></li>
     <li><a href="#" target="_blank">Three</a></li>
     <li><a href="#" target="_blank">Four</a></li>
     <li><a href="#" target="_blank">Five</a></li>
</ul>
</div>

<p>Markup:</p>

<pre>&lt;div class="sampleLast-child"&gt;
&lt;ul&gt;
     &lt;li&gt;&lt;a href="#" target="_blank"&gt;One&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href="#" target="_blank"&gt;Two&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href="#" target="_blank"&gt;Three&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href="#" target="_blank"&gt;Four&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href="#" target="_blank"&gt;Five&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

<p>CSS:</p>

<pre>
<span class="fadedText">.sampleLast-child</span> ul li {
     margin: 0;
     padding: 0;
     list-style: none;
}
<span class="fadedText">.sampleLast-child</span> li a {
     display: block;
     width: 8em;
     line-height: 2em;
     font-size: 1em;
     text-decoration: none;
     background:  #D5973C;
     color: white;
     padding: .2em 0 .2em 1em;
     border-bottom: .125em solid black;
}
<span class="fadedText">.sampleLast-child</span> li a:hover, <span class="fadedText">sampleLast-child</span> li a:focus {
     background: #87492F;
}
<span class="fadedText">.sampleLast-child</span> <span class="red">li:last-child a</span> {
     border-bottom: none;
}
</pre>






<p>More information on types of Structural Pseudo-Class Selectors:</p>

<p><a href="http://www.javascriptkit.com/dhtmltutors/structuralcss.shtml" target="_blank">http://www.javascriptkit.com/dhtmltutors/structuralcss.shtml</a></p>

<h4 id="nthChildSelectors">Nth-Child Selectors</h4>

<p>You can pass values into arguments. Instead of assigning classes to list items, you can target single or multiple list items or table rows just in the declaration.</p>


<h4>Simple Nth Child Selectors</h4>

<p>The declaration below will target the second element in the list:</p>

<pre>li:nth-child(2) {
     background: tan;
}</pre>

<div class="nthChild">

<div class="nthChild2">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>

<p>The n combined with 2n is a grouping element that targets every second element in the list:</p>

<pre>li:nth-child(2n) { 
     background: tan;
}</pre>

<div class="nthChild2n">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>


<p>Odd is a keyword that will format all odd numbered rows the tan value. 'Even' will format even rows:</p>


<pre>
.li:nth-child(odd) {     
     background: tan;
}
</pre>


<div class="nthChildOdd">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>


<p>This is an example of an offset. The formatting starts at the 5th row and every 5 rows after will be formatted.</p>

<pre>
li:nth-child(5n+5) { 
     background: tan;
}
</pre>


<div class="nthChildOffset5">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>

<p>A negative offset will go backwards. This starts at the 8th row and formats every second row up to the top of the list:</p>

<pre>
li:nth-child(-2n+8) { 
     background: tan;
}
</pre>


<div class="nthChildNegativeOffset">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>

<p>This is formatting every 5th row minus 1 row, so rows four, nine, fourteen, and nineteen are highlighted:</p>

<pre>
li:nth-child(5n-1) {
     /*background: tan;
}
</pre>


<div class="nthChildNegativeOffsetMinusOne">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>

<h4>Complex Nth Child Selectors</h4>

<p>This the two nth child selectors are daisy-chained together. li:nth-child(1n+6) is formatting item six and every row after while :nth-last-child(1n+6) is starting from sixth from the bottom (fifteen) and formatting every row previous until they meet:</p>

<pre>
li:nth-child(1n+6):nth-last-child(1n+6) {
     background: tan;
}
</pre>


<div class="nthChildDaisy">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>


<p>Daisy chains only work in a contiguous selection. In a non-contiguous selection a group must be used (separated by a ',' instead of a ':'</p>

<pre>
li:nth-child(-1n+5), li:nth-last-child(-1n+5) {
     background: tan;
}
</pre>


<div class="nthChildGrouped">
<ol>
  <li>item one</li>
  <li>item two</li>
  <li>item three</li>
  <li>item four</li>
  <li>item five</li>
  <li>item six</li>
  <li>item seven</li>
  <li>item eight</li>
  <li>item nine</li>
  <li>item ten</li>
  <li>item eleven</li>
  <li>item twelve</li>
  <li>item thirteen</li>
  <li>item fourteen</li>
  <li>item fifteen</li>
  <li>item sixteen</li>
  <li>item seventeen</li>
  <li>item eighteen</li>
  <li>item nineteen</li>
  <li>item twenty</li>
</ol>
</div>

<h4>Pseudo Element Selectors and Generated Content</h4>

<p>Content to be added</p>

                                

</div><!-- Close twelve columns offset-by-one content -->
                         
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
      

<!-- End Document ================================================== -->
</body>
</html>