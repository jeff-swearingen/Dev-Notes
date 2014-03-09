<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Navigation</title>
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
					
                    
                    
                    
<h3>Navigation</h3>

<h4>Simple Vertical Menu</h4>

<ul class="verticalNav">
  <li><a href="#" title="Home page">Home</a></li>
  <li><a href="#" title="browse our products">Products</a></li>
  <li><a href="#" title="read our blog">Blog</a></li>
  <li><a href="#" title="More about us">About</a></li>
  <li><a href="#" title="contact us">Contact</a></li>
</ul>

<h5>Markup:</h5>

<pre>&lt;ul class="verticalNav"&gt;
  &lt;li&gt;&lt;a href="#" title="Home page"&gt;<span class="highlight">Home</span>&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#" title="browse our products"&gt;<span class="highlight">Products</span>&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#" title="read our blog"&gt;<span class="highlight">Blog</span>&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#" title="More about us"&gt;<span class="highlight">About</span>&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#" title="contact us"&gt;<span class="highlight">Contact</span>&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>

<h5>CSS:</h5>

<pre>.verticalNav ul, .verticalNav li {
     margin: 0;
     padding: 0;
     list-style: none;
}
.verticalNav li a {
     display: block; <span class="grey">/* this initial setting will stretch to full width of containing element unless width is applied */</span>
     width: 8em; <span class="grey">/* width can also be applied to parent element (ul or li or ul, li) */</span>
     line-height: 2em; <span class="grey">/* evens out vertical spacing to the center */</span>
     font-size: 1em;
     text-decoration: none;
     background: #D5973C;
     color: white;
     padding: .2em 0 .2em 1em;
     border-bottom: .125em solid white;
}
.verticalNav li a:hover {
     background: #87492F;
     border-bottom: .125em solid white;
}
.verticalNav li a:focus {
     background: #333;
     border-bottom: .125em solid white;
}
.verticalNav li:last-child a {
     border-bottom: none;
}</pre>


<h4>Simple Horizontal Menu</h4>

<p>Sample:</p>

	
    <ul class="cf horizontalNav">
      <li><a href="#" title="Home page">Home</a></li>
      <li><a href="#" title="browse our products">Products</a></li>
      <li><a href="#" title="read our blog">Blog</a></li>
      <li><a href="#" title="More about us">About</a></li>
      <li><a href="#" title="contact us">Contact</a></li>
    </ul>
	
    
<h5>Markup:</h5>

<pre>&lt;div class="cf"&gt;
    &lt;ul class="horizontalNav"&gt;
      &lt;li&gt;&lt;a href="#" title="Home page"&gt;<span class="highlight">Home</span>&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" title="browse our products"&gt;<span class="highlight">Products</span>&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" title="read our blog"&gt;<span class="highlight">Blog</span>&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" title="More about us"&gt;<span class="highlight">About</span>&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" title="contact us"&gt;<span class="highlight">Contact</span>&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>


<h5>CSS:</h5>

<pre>
.cf:before,
.cf:after {
    content:"";
    display:table;
}
.cf:after {
    clear:both;
}
.horizontalNav ul, .horizontalNav li {
     margin: 0;
     padding: 0;
     list-style: none;
}
.horizontalNav li {
     float: left;
}
.horizontalNav li a {
     display: block; <span class="grey">/* this initial setting will stretch to full width of containing element unless width is applied */</span>
     width: 8em; <span class="grey">/* width can also be applied to parent element (ul or li or ul, li) */</span>
     line-height: 2em; <span class="grey">/* evens out vertical spacing to the center */</span>
     font-size: 1em;
     text-decoration: none;
     background: #D5973C;
     color: white;
     padding: .2em 0 .2em 1em;
     border-right: .125em solid white;
     border-bottom: none;
}
.horizontalNav li a:hover {
     background: #87492F;
     border-right: .125em solid white;
}
.horizontalNav li a:focus {
     background: #333;
     border-right: .125em solid white;
}
.horizontalNav li:last-child a {
     border-right: none;
}</pre>



<h4>Horizontal Menu With Dropdowns</h4>

<p>Sample:</p>

<div class="cf menu">
  <div class="cf menu">
    <ul class="topmenu">
      <li><a href="#" title="Home page" class="current">Home</a></li>
      <li><a href="#" title="browse our products">Products</a>
        <ul class="submenu">
          <li><a href="#" title="laptops">Laptops</a></li>
          <li><a href="#" title="tablets">Tablets</a></li>
          <li><a href="#" title="smartphones">Smartphones</a></li>
          <li><a href="#" title="accessories">Accessories</a></li>
        </ul>
      </li>
      <li><a href="blog.htm" title="read our blog">Blog</a>
        <ul class="submenu">
          <li><a href="#" title="recent articles">Recent articles</a></li>
          <li><a href="#" title="archives">Archives</a></li>
          <li><a href="#" title="favorite articles">Hall of fame</a></li>
        </ul>
      </li>
      <li><a href="about.htm" title="More about us">About</a></li>
      <li><a href="contact.htm" title="contact us">Contact</a>
        <ul class="submenu">
          <li><a href="#" title="customer service">Customer service</a></li>
          <li><a href="#" title="register for an account">Register</a></li>
          <li><a href="#" title="technical support">Technical support</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<h5>Markup:</h5>

<pre>&lt;div class="cf menu"&gt;
  &lt;div class="cf menu"&gt;
    &lt;ul class="topmenu"&gt;
      &lt;li&gt;&lt;a href="#" title="Home page" class="current"&gt;<span class="highlight">Home</span>&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#" title="browse our products"&gt;<span class="highlight">Products</span>&lt;/a&gt;
        &lt;ul class="submenu"&gt;
          &lt;li&gt;&lt;a href="#" title="laptops"&gt;<span class="highlight">Laptops</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="tablets"&gt;<span class="highlight">Tablets</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="smartphones"&gt;<span class="highlight">Smartphones</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="accessories"&gt;<span class="highlight">Accessories</span>&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
      &lt;li&gt;&lt;a href="blog.htm" title="read our blog"&gt;<span class="highlight">Blog</span>&lt;/a&gt;
        &lt;ul class="submenu"&gt;
          &lt;li&gt;&lt;a href="#" title="recent articles"&gt;<span class="highlight">Recent articles</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="archives"&gt;<span class="highlight">Archives</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="favorite articles"&gt;<span class="highlight">Hall of fame</span>&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
      &lt;li&gt;&lt;a href="about.htm" title="More about us"&gt;<span class="highlight">About</span>&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="contact.htm" title="contact us"&gt;<span class="highlight">Contact</span>&lt;/a&gt;
        &lt;ul class="submenu"&gt;
          &lt;li&gt;&lt;a href="#" title="customer service"&gt;<span class="highlight">Customer service</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="register for an account"&gt;<span class="highlight">Register</span>&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#" title="technical support"&gt;<span class="highlight">Technical support</span>&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>


<h5>CSS:</h5>

<pre>
.cf:before,
.cf:after {
    content:"";
    display:table;
}
.cf:after {
    clear:both;
}
div.menu {
     background: #916A31;
     height: 2.3em;
     margin-bottom: 2em;
}
<span class="grey">/*div*/</span>.menu ul, <span class="grey">/*div*/</span>.menu li {
     margin: 0;
     padding: 0;
     list-style: none;
     float: left;
     font-size: 100%;
}
.menu ul {
     background: #D5973C;
     height: 2em;
     width: 100%;
}
.menu li {
     position: relative;
}
.menu li a {
     display: block;
     line-height: 2em;
     padding: 0 1em;
     color: white;
     text-decoration: none;
     font-size: 1em;
     border-bottom: none;
}
.menu li a:hover, .topmenu li:hover > a {
     background: #916A31;
     height: 2em;
     padding-top: .3em;
     position: relative;
     top: -.3em;
     border-radius: .3em .3em 0 0;
     font-size: 1em;
     color: white;
}
.menu .current, a:hover.current, .topmenu li:hover a.current {
     background: #AD9B7F;
     color: #eee;
     padding-top: .3em;
     border-radius: .3em .3em 0 0;
     position: relative;
     top: -.3em;
     border-bottom: .3em solid #917F63;
     cursor: default;
}
<span class="grey">/*dropdown menu styles*/</span>
ul.submenu {
     float: none;
     background: #916A31;
     width: auto;
     height: auto;
     position: absolute;
     top: 2em;
     left: -9000em;
     max-height: 0;
     -moz-transition:max-height 0.15s ease-in-out;
     -webkit-transition:max-height 0.15s ease-in-out;
     -o-transition:max-height 0.15s ease-in-out;
     transition:max-height 0.15s ease-in-out;
     overflow: hidden;
}
ul.submenu li {
     float: none;
}
.topmenu li:hover ul {
     left: 0;
     max-height: 10em;
}
ul.submenu li a {
     border-bottom: 1px solid white;
     padding: .2em 1em;
     white-space: nowrap;
     font-size: 100%;
}
ul.submenu li:last-child a {
     border-bottom: none;
}
ul.submenu li a:hover {
     background: #D5973C;
     height: 2em;
     padding-top: .2em;
     top: 0;
     border-radius: 0;
     border-bottom: 1px solid white;
}</pre>

  <p><a href="http://www.red-team-design.com/css3-animated-dropdown-menu" target="_blank">http://www.red-team-design.com/css3-animated-dropdown-menu</a></p>                  

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>