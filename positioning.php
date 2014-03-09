<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

     <!-- Basic Page Needs
  ================================================== -->
     <meta charset="utf-8">
     <title>Positioning</title>
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
                     
                 
<!-- -------------------------- 
         DO NOT DELETE
         DO NOT DELETE
         DO NOT DELETE
         DO NOT DELETE
         DO NOT DELETE
         DO NOT DELETE
         DO NOT DELETE
         DO NOT DELETE               
--------------------------- -->                 
                 
<h3>Positioning</h3>


<h4>Types of Positioning Methods</h4>

<p>An element is in either <em>normal-flow</em>, <em>floated</em>, or <em>absolutely positioned</em>.</p> 

<p><code>Static</code> and <code>relative</code> are in <em>normal-document-flow</em> (can control position of elements around it because it’s relative to the containing element)</p>

<p>Since <code>static</code> follows normal document flow anyway it's rarerly, if ever, assigned unless you want to override a previous created style that already has a position of <code>absolute</code>, <code>relative</code>, or <code>fixed</code>.</p>

<p><code>Absolute</code> and <code>fixed</code> are in <em>absolute-document-flow</em></p>

<p><code>Absolute</code> is good for something never moving away from its assigned coordinates</p>

<p><code>Fixed</code> is good for a bug or menu and is always <em>fixed</em> in the viewport while scrolling</p>

<h4>Absolute Positioning</h4>
<p>After the position property, you list one or more properties (<code>top</code>, <code>bottom</code>, <code>left</code>, or <code>right</code>). If you want the element to take up less than the available width (to make a thin sidebar, for example), then you can set the width property. To place a page’s banner in an exact position from the top and left edges of the browser window, create a style like this:</p>

<pre>
.banner {
     position: absolute;
     left: 100px;
     top: 50px;
     width: 760px;
}
</pre>

<p><a href="http://www.jdesignonline.com/dev/cssnotes/images/absolute.png" target="_blank">Visual Example</a></p>


<p>In order for absolute positioning to work there needs to be a frame of reference for the absolute positions which is the relative positioned containing (or outer) div. Absolute positioning requires a containing block. If no containing block, it will use the outer border of the window space. It's a misnomer. Relative position makes the outer div a reference point for the items positioned absolutely.</p>


<pre>div#outer {
     position: relative;
     width: 750px;
     height: 500px;
     margin: 15px auto; <span class="red">&quot;auto&quot; centers a box on the page</span>
     background-color: #369;
     border: solid 1px black;
}</pre>



<p><strong>Relative position</strong> = reference point for absolute positioning, not for positioning things. Makes an absolute positioned element a good candidate for a relative position object.</p>





<ol>
     <li>Used for slight tweaks to layout by offsetting an element in a specific direction (move something up or over a little bit)</li>
     <li>Provides a positioning value for container elements</li>
</ol>

<pre>.element1 {
     background: rgb(211, 206, 61);
     position: relative;
     top: 10px;
     left: 10px;
}</pre>



<div id="relative">
  <div id="absolute">
        <p>This box is using absolute positioning</p>
    </div>
</div>

<ul class="square">
     <li><strong>A tag is positioned relative to the browser window</strong> if it has an absolute position and it’s not inside any other tag that has either absolute, relative, or fixed positioning applied to it</li>
     <li><strong>A tag is positioned relative to the edges of another element</strong> if it’s inside another tag with absolute, relative, or fixed positioning</li>
</ul>

<h4>Add a Caption to an Image Using Positioning</h4>

<div class="sampleCaption">
    <img src="images/sample-dandelion.png" width="190" height="190" alt="Dandelion">
    <span>The dreaded dandelion</span>
</div>

<p>HTML markup:</p>

<pre>&lt;div class="sampleCaption"&gt;
    &lt;img src="images/sample-dandelion.png" width="190" height="190" alt="Dandelion"&gt;
    &lt;span&gt;The dreaded dandelion&lt;/span&gt;
&lt;/div&gt;</pre>

<p>CSS:</p>

<pre>.sampleCaption {
     display: inline-block;
     width: 190px;
     height: 190px;
     margin: 15px;
     position: relative;     
}
.sampleCaption span {
     position: absolute;
     bottom: 5%;
     left: 5%;
     right: 5%;
     background-color: rgba(255,255,255,.8);
     padding: .5em;
     font: 400 1.4em Titillium, Arial, sans-serif;
     color: #666;
     border: 1px dotted #000;
     text-align: center;
}</pre>

<h4>HTML5 Version</h4>

<p>HTML5 markup:</p>

<pre>&lt;figure&gt;
     &lt;img src="../images/sample-dandelion.png" width="190" height="190" alt="Dandelion"&gt;
     &lt;figcaption&gt;The dreaded dandelion&lt;/figcaption&gt;
&lt;/figure&gt;
</pre>

<p>CSS:</p>

<pre>figure {
     display: inline-block;
     width: 190px;
     height: 190px;
     margin: 15px;
     position: relative;
}
figcaption {
     position: absolute;
     bottom: 5%;
     left: 5%;
     right: 5%;
     background-color: rgba(255,255,255,.8);
     padding: .5em;
     font: 400 .9em Titillium, Arial, sans-serif;
     color: #666;
     border: 1px dotted #000;
}</pre>


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



<h3>Clearing Floats</h3>

<ul class="square">
     <li>left <span class="note">nothing can float to my left</span></li>
     <li>right <span class="note">nothing can float to my right</span></li>    
     <li>both <span class="note">nothing can float to left or right and restores normal document flow</span></li>     
</ul>


<p>Use an empty <code>p</code> tag to clear floats:</p>

<pre class="fakecode">&lt;p class=&quot;clear&quot; /&gt;</pre>
<p>CSS:</p>


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
     display: block;
     clear: both;
}</pre>


<p>A more robust method is doing:</p>

<pre>.clearfix:before,.clearfix:after {
     content: "";
     display: table;
}
.clearfix:after {
     clear: both;
}</pre>

<pre>
&lt;!--[if lt IE 8]&gt;
&lt;style&gt;
/* For IE &lt; 8 (trigger hasLayout) */
.clearfix {
     zoom:1;
}
&lt;/style&gt;
&lt;![endif]--&gt;
</pre>



<h4>Containing Floats</h4>

<p>Instead of clearing, the parent elements of floating elements can be set to overflow: hidden; but only works 90% of the time. For instance, if an element has a drop shadow it will not be contained in the overflow.</p>

<p>A containing element can also be floated to contain all the floated elements within.</p>

<p><code>Overflow</code>, <code>hidden</code>, or <code>clear</code> are probably most effective.</p>


<h3>Collapsing Margins</h3>

<p>Vertical margins between elements that touch will collapse into each other. If one element has a 30px bottom margin above an element with a 15px top margin, that space would only be 30 pixels because of the collapse. <em>If there is a higher value between the two, the higher value will win</em>.</p>

<p>To prevent this, use top or bottom padding instead.</p> 

<div class="bodyHighlight">

       <p>Noticed in Firefox that shorthand doesn't work on certain block level elements so properties must be typed out separately, e.g;</p>
       
       
<pre>#announcement {
     background: url(images/scroll_middle.jpg) repeat-y center top;
     <span class="red">margin-top: 115px;</span>
     zoom: 1;
}</pre>
</div>

<h4>Padding</h4>

<p>Length can also be a percentage.</p>

<p><em>Noticed in Firefox that shorthand doesn't work on block level elements so properties must be typed out separately, e.g;</em></p>
     
    
<pre>#announcement h2 {
     background: url(images/scroll_top.jpg) no-repeat center top;
     padding-top: 70px;
     padding-right: 70px;
     padding-bottom: 70px;
     padding-left: 70px;
}</pre>



<h4>Overflow</h4>

<ul class="square">
    <li class="nobullet">Overflow: <code>visible</code> - Will go over the border boundary</li>
    <li class="nobullet">Overflow: <code>hidden</code> - Will not go over boundary *</li>
    <li class="nobullet">Overflow: <code>scroll</code> - Scrollbars will be added</li>
</ul>

<ul class="square">
     <li>Declaration is added to the element underneath, not the floating object above</li>                                                                        <li><code>Zoom: 1</code> needs to be added for IE 6 or it won't work</li>
</ul>

<h4>Z-index</h4>
<p><code>Z-index</code> can be set on any positioned element and has three possible values: <code>auto</code> | <code>&lt;integer&gt;</code> |  <code>inherit</code> </p>
<p>By default, positioned elements are stacked on top of each other based on where they are encountered in the source order, with the last object on top. By setting the <code>z-index</code> property you can control the stacking order of positioned elements. Items are ordered based on &quot;stacking context.&quot; The root element forms the initial stacking context, with other stacking contexts being created by applying a z-index value other than &quot;auto.&quot;</p>
<p>Within each stacking context, elements are stacked in this order:</p>

<ul class="square">
    <li>The background and borders of the element forming the stacking context</li>
    <li>Any child stacked elements with a negative <code>z-index</code></li>
    <li>Elements in normal flow</li>
    <li>Non-positioned floats</li>
    <li>Any child stacked elements with a <code>z-index</code> of <code>zero</code> or <code>auto</code></li>
    <li>Any child stacked elements with a positive <code>z-index</code> value, lowest to highest</li>
</ul>

<section class="containerZ">
    <div class="element1Z">One</div>
    <div class="element2Z">Two</div>
    <div class="element3Z">Three</div>
</section>

<p>CSS:</p>

<pre>
.container div {
     margin-bottom: 25px;
     width: 50px;
     height: 50px;
     padding: 25px;
     font: 1.6em bold Arial, Helvetica, sans-serif;
     color: white;
}
.container {
     background: rgb(237,228,214);
     padding: 25px;
     height: 100px;
     position: relative;
     margin-top: 25px;
     border: 1px solid black;
     z-index: 1;
}
.element1 {
     background: rgb(211, 206, 61);
     position: absolute;
     left: -50px;
     top: -10px;
     z-index: -1;
}
.element2 {
     background: rgb(85, 66, 54);
     position: absolute;
     left: 25px;
     top: 50px;
     z-index: 3;
}
.element3 {
     background: rgb(247,120,37);
     position: absolute;
     left: 100px;
     top: 100px;
     z-index: 2;
}
</pre>

<p>HTML markup:</p>

<pre>&lt;section class=&quot;container&quot;&gt;
    &lt;div class=&quot;element1&quot;&gt;One&lt;/div&gt;
    &lt;div class=&quot;element2&quot;&gt;Two&lt;/div&gt;
    &lt;div class=&quot;element3&quot;&gt;Three&lt;/div&gt;
&lt;/section&gt;</pre>

<?php include('ssi/page-height.ssi');?> 

<?php include('ssi/sibling-selector-cancel.ssi');?> 


                 

</div><!-- Close twelve columns offset-by-one content -->
             
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>