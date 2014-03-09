<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Lists</title>
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
    <link rel="stylesheet" href="css/lists.css">
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
					
<h3>Horizontal Lists</h3>

<pre>
li {
     display: inline;
     list-style: none;
}
</pre>



<h3>Menu With Tabs</h3>

    <ul class="square">
        <li>Apples</li>
        <li>Spaghetti</li>
        <li>Green Beans</li>
        <li>Milk</li>
        <li>Italian Bread</li>
    </ul>

<div class="clearfix">    
    <ul class="minitabs">
        <li><a href="/">Apples</a></li>
        <li><a href="/">Spaghetti</a></li>
        <li><a href="/">Green Beans</a></li>
        <li><a href="/">Milk</a></li>
        <li><a href="/">Italian Bread</a></li>
    </ul>
</div>
   
<p>Or</p>
    
<div class="clearfix"> 
	<ul class="minitabs">
        <li><a href="/">Apples</a></li>
        <li><a href="/" class="active">Spaghetti</a></li>
        <li><a href="/">Green Beans</a></li>
        <li><a href="/">Milk</a></li>
        <li><a href="/">Italian Bread</a></li>
    </ul>
</div>



<p>Markup:</p>

<pre>&lt;ul id=&quot;minitabs&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Apples&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Spaghetti&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Green Beans&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Milk&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Five Foot Loaf of Anthony's Italian Bread&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>

<p>Or</p>  

<pre>&lt;ul id=&quot;minitabs&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Apples&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot; <span class="red">class=&quot;active&quot;</span>&gt;Spaghetti&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Green Beans&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Milk&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Five Foot Loaf of Anthony's Italian Bread&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>



<pre>.minitabs {
     margin: 0;
     padding: 0 0 20px 10px;
     border-bottom: 1px solid #696;
}
.minitabs li {
     margin: 0;
     padding: 0;
     display: inline;
     list-style: none;
     background: none;   
}
.minitabs a {
     float: left;
     line-height: 14px;
     font-weight: bold;
     margin: 0 10px 4px 10px;
     text-decoration: none;
     color: #9c9;
}
.minitabs a.active, .minitabs a:hover {
     border-bottom: 4px solid #696;
     padding-bottom: 2px;
     color: #363;
}
.minitabs a:hover {
     color: #696;
}</pre>



    
<h3>Menus With Background Images</h3>

<p>Sample 1:</p>

<ul class="linkDemo">
    <li><a href="http://www.google.com" target="_blank">This</a></li>
    <li><a href="http://www.google.com" target="_blank">That</a></li>
    <li><a href="http://www.google.com" target="_blank">Other</a></li>
</ul>

<p class="clear" />


<p>CSS:</p>
    
<pre>ul.linkDemo {
     margin: 0;
     padding: 0;
}
ul.linkDemo li { <span class="grey">/* fix for this page only */</span>
     padding: 0;
     list-style: none;
}
.linkDemo a {
     display: block;
     float: left;
     width: 175px;
     height: 25px;
     background: url(nav_rollover.jpg) no-repeat left bottom;
     color: white;
     font-weight: bold;
     padding-left: 25px;
     text-decoration: none;
}
.linkDemo a:hover {
     background-position: left top;
     color: #f8b449;
}</pre>
    

<p>Sample 2:</p>

  <ul class="mainNav">
    <li><a href="/index.html" class="homeLink">Home</a></li>
    <li class="feature"><a href="/features/" class="featureLink">Features</a></li>
    <li><a href="/experts/" class="expertLink">Experts</a></li>
    <li><a href="/quiz/" class="quizLink">Quiz</a></li>
    <li><a href="/projects/" class="projectLink">Projects</a></li>
    <li><a href="/horoscopes/" class="horoscopeLink">Horoscopes</a></li>
  </ul>

<p><span class="red">Modifications</span> in the CSS were made to have this work on this page from the original code:</p>

    
<pre>.mainNav {
     margin: 0;
     padding: 0;
     list-style: none;
     border-left: 1px dashed #999;
     overflow: hidden;
     zoom: 1; <span class="grey">/* IE 6 bug fix */</span>
}
.mainNav li {
     float: left;
     width: 8.5em; <span class="red">original was 12em</span>
     <span class="red">margin: 0;</span>
     <span class="red">padding: 0;</span>
}
.mainNav a {
     color: #000;
     font-size: 11px;
     text-transform: uppercase;
     text-decoration: none;
     border: 1px dashed #999;
     border-left: none;
     padding: 5px 5px 5px 30px; <span class="red">orignal: 7px 5px 7px 30px</span>
     display: block;
     background-color: #e7e7e7;
     background-image:  url(../images/nav.png);
     background-repeat: no-repeat;
     background-position: 0 2px;
     zoom: 1; <span class="grey">/* IE 6 bug fix */</span>
}
.mainNav a:hover {
     font-weight: bold;
     background-color: #b2f511;
     background-position: 3px 50%;
}
.home .homeLink, 
.feature .featureLink, 
.expert .expertLink, 
.quiz .quizLink, 
.project .projectLink, 
.horoscope .horoscopeLink {
     background-color: #fff;
     background-position: 3px 100%;
     padding-right: 15px;
     padding-left: 30px;
     font-weight: bold;
}</pre>

    
<p>Sample 3:</p>


<div class="intro">
	<ul class="sampleNav">
    	<li class="t-intro"><a href="#">Introduction</a></li>
        <li class="t-about"><a href="#">About</a></li>
        <li class="t-news"><a href="#">News &amp; Events</a></li>    
        <li class="t-sponsors"><a href="#">Sponsors</a></li>    
    </ul>
</div> 


<p class="clear" />

<p>HTML:</p>

<pre>&lt;div id=&quot;intro&quot;&gt;
	&lt;ul id=&quot;nav&quot;&gt;
    	&lt;li id=&quot;t-intro&quot;&gt;&lt;a href=&quot;#&quot;&gt;Introduction&lt;/a&gt;&lt;/li&gt;
        &lt;li id=&quot;t-about&quot;&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
        &lt;li id=&quot;t-news&quot;&gt;&lt;a href=&quot;#&quot;&gt;News &amp; Events&lt;/a&gt;&lt;/li&gt;    
        &lt;li id=&quot;t-sponsors&quot;&gt;&lt;a href=&quot;#&quot;&gt;Sponsors&lt;/a&gt;&lt;/li&gt;    
    &lt;/ul&gt;
&lt;/div&gt; 
</pre>

<p>CSS:</p>

<pre>.sampleNav {
     float: left;
     width: 650px;
     margin: 0;
     padding: 10px 0 0 46px;
     list-style: none;
     background: #ffcb2d url(../images/nav_bg.gif) repeat-x bottom left;
}
ul.sampleNav  {
     margin-bottom: 50px;
}
.sampleNav li {
     float: left;
     margin: 0 1px 0 0;
     padding: 0;
     font-family: &quot;Lucida Grande&quot;, sans-serif;
     font-size: .80em;
     list-style: none;
}
.sampleNav a {
     float: left;
     display: block;
     margin: 0;
     padding: 4px 8px;
     color: #333;
     text-decoration: none;
     border: 1px solid #9b8748;
     border-bottom: none;
     background: #f9e9a9 url(../images/off_bg.gif) repeat-x top left;
}
.sampleNav a:hover, div.intro .t-intro a {
     color: #333;
     padding-bottom: 5px;
     border-color: #727377;
     background: #fff url(../images/on_bg.gif) repeat-x top left;
}
</pre>

<h3>Sprites Example</h3>

<p>This is built from an unordered list and one background image:</p>
    
	<div id="subNav">
		<ul id="gearSubNav">
			<li><a href="gear/boards.htm" class="boards">Boards</a></li>
			<li><a href="gear/swimwear.htm" class="swimwear">Swimwear</a></li>
			<li><a href="gear/wetsuits.htm" class="wetsuits">Wetsuits</a></li>
			<li><a href="gear/etc.htm" class="etc last">Etc.</a></li>
		</ul>
	</div>
<p class="clear" />

<p>HTML code:</p>
	
<pre class="maroon">&lt;div id=&quot;subNav&quot;&gt;
     &lt;ul id=&quot;gearSubNav&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;gear/boards.htm&quot; class=&quot;boards&quot;&gt;Boards&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;gear/swimwear.htm&quot; class=&quot;swimwear&quot;&gt;Swimwear&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;gear/wetsuits.htm&quot; class=&quot;wetsuits&quot;&gt;Wetsuits&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;gear/etc.htm&quot; class=&quot;etc last&quot;&gt;Etc.&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt; 
</pre>
    
<p>CSS:</p>


<pre>#gearSubNav {
     width: 340px;
     <span class="grey">/*margin: 0 auto;*/</span>
     list-style: none;
}
#gearSubNav li {
    float: left;
    margin: 0;
    padding: 0;
}
#gearSubNav a {
    display: block;
    width: 70px;
    height: 20px;
    font-family: &quot;Orator Std&quot;, Orator, sans-serif;
    font-size: .9em;
    text-align: center;
    padding-top: 100px; <span class="grey">/* make room for the image */</span>
    margin-right: 20px;
    border: none;
    background: url(../images/GroundswellSprites.png);
	text-decoration: none;
    color: #b36b00;	
}
#gearSubNav a:hover {
    color: #000;
}
#gearSubNav a.last {
        margin-right: 0;
}


<span class="grey fakecode">/* ===== gear subnav icons ===== */</span>

#gearSubNav a.boards { background-position: -490px -60px; }
#gearSubNav a.swimwear { background-position: -210px -60px; }
#gearSubNav a.wetsuits { background-position: -70px -60px; }
#gearSubNav a.etc { background-position: -350px -60px; }

#gearSubNav a.boards:hover { background-position: -420px -60px; }
#gearSubNav a.swimwear:hover { background-position: -140px -60px; }
#gearSubNav a.wetsuits:hover { background-position: -0px -60px; }
#gearSubNav a.etc:hover { background-position: -280px -60px; }
</pre>

    
<h3>Sprites Coordinates Example Sheet from Bill Weinman</h3>    
    
<div id="spritessheet">   

<div id="column1">

<pre><strong>Name/Usage</strong>           
-------------------- 
Contact icon (off)   
Contact icon (on)    
Navigation Current   
Navigation (on)      
Navigation (off)     
wetsuit (on)         
wetsuit (off)        
swim (on)            
swim (off)           
sandals (on)         
sandals (off)        
surfboard (on)       
surfboard (off)</pre>    
</div>

<div id="column2">

<pre><strong>original filename</strong>    
-------------------  
contact_icon_dual.gif
                     
nav_current.jpg      
nav_rollover.jpg     
                     
wetsuit-on.jpg       
wetsuit-off.jpg      
swim-on.jpg          
swim-off.jpg         
sandals-on.jpg       
sandals-off.jpg      
board-on.jpg         
board-off.jpg</pre>          
</div>

<div id="column3">
<pre><strong>Offset X, Y</strong> 
------------
0, 0        
0, 29       
86, 0       
286, 0      
286, 25     
0, 60       
70, 60      
140, 60     
210, 60     
280, 60     
350, 60     
420, 60     
490, 60</pre>     
</div>

<div id="column4">
<pre><strong>Dimensions W, H</strong> 
---------------------
86, 29
86, 29
200, 50         
200, 25         
200, 25         
70, 91
70, 91
70, 91
70, 91
70, 91
70, 91
70, 91
70, 91</pre>
</div>

<div id="column5">
<pre><strong>Notes</strong>
--------------------------------------


Trebuchet MS 17pt #abb0b3 (#999)?
Trebuchet MS 17pt #fc9
Trebuchet MS 17pt #fff</pre>
</div>



<p><img src="images/GroundswellSprites.png" width="560" height="191" alt="Sprite example" /></p>

</div>

                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>