<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Tables</title>
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
					
<h3>Tables</h3>

<h4>Sample CSS Styled Table</h4>

      <div id="mainContent">
      <div class="article">
      <table border="0" cellpadding="0" cellspacing="0" id="gearTbl" summary="A comparison of camera specification for the gear I use on the road">
  <caption>
          Camera Specs
        </caption>
        <thead>
        <tr>
          <th scope="col">&nbsp;</th>
          <th scope="col" class="sony" abbr="sony">Sony DSC-F717</th>
          <th scope="col" class="fuji" abbr="fuji">Fuji FinePix F480</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="specs">Max Resolution</td>
          <td>2560 x 1920</td>
          <td>3264 x 2448</td>
        </tr>
        <tr class="odd">
          <td class="specs">Low Resolution</td>
          <td>640 x 480</td>
          <td>640 x 480</td>
        </tr>
        <tr>
          <td class="specs">Effective Pixels</td>
          <td>4.9 million</td>
          <td>8.0 million</td>
        </tr>
        <tr class="odd">
          <td class="specs">Sensor Type</td>
          <td>CCD</td>
          <td>CCD</td>
        </tr>
        <tr>
          <td class="specs">ISO Rating</td>
          <td>Auto, 100, 200, 400, 800</td>
          <td>Auto, 64, 100, 200, 400, 800</td>
        </tr>
        <tr class="odd">
          <td class="specs">Zoom Wide</td>
          <td>38 mm</td>
          <td>28 mm</td>
        </tr>
        <tr>
          <td class="specs">Zoom Tele</td>
          <td>190 mm (5 x)</td>
          <td>112 mm (4 x)</td>
        </tr>
        <tr class="odd">
          <td class="specs">Aperture range</td>
          <td>F2.0 - F2.4 / F8.0</td>
          <td>F2.7 - F5.4</td>
        </tr>
        <tr>
          <td class="specs">Storage type</td>
          <td>Memory Stick / Pro</td>
          <td>xD Picture Card + Internal</td>
        </tr>
        <tr class="odd">
          <td class="specs">Uncompressed format</td>
          <td>TIFF</td>
          <td>None / JPEG</td>
        </tr>
        <tr>
          <td class="specs">Weight </td>
          <td>659 g</td>
          <td>170 g</td>
        </tr>
        </tbody>
      </table></div>
      </div>

<p>Source code:</p>


<pre>
      &lt;div id=&quot;mainContent&quot;&gt;
      &lt;div class=&quot;article&quot;&gt;
      &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; id=&quot;gearTbl&quot; summary=&quot;A comparison of camera specification for the gear I use on the road&quot;&gt;
  &lt;caption&gt;Camera Specs&lt;/caption&gt; <span class="red">Only <code>padding</code> works consistently on most browsers for vertical spacing with the <code>caption</code> tag</span>
        &lt;thead&gt;
        &lt;tr&gt;
          &lt;th scope=&quot;col&quot;&gt;&nbsp;&lt;/th&gt;
          &lt;th scope=&quot;col&quot; class=&quot;sony&quot; abbr=&quot;sony&quot;&gt;Sony DSC-F717&lt;/th&gt;
          &lt;th scope=&quot;col&quot; class=&quot;fuji&quot; abbr=&quot;fuji&quot;&gt;Fuji FinePix F480&lt;/th&gt;
        &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td class=&quot;specs&quot;&gt;Max Resolution&lt;/td&gt;
          &lt;td&gt;2560 x 1920&lt;/td&gt;
          &lt;td&gt;3264 x 2448&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr class=&quot;odd&quot;&gt;
          &lt;td class=&quot;specs&quot;&gt;Low Resolution&lt;/td&gt;
          &lt;td&gt;640 x 480&lt;/td&gt;
          &lt;td&gt;640 x 480&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;specs&quot;&gt;Effective Pixels&lt;/td&gt;
          &lt;td&gt;4.9 million&lt;/td&gt;
          &lt;td&gt;8.0 million&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr class=&quot;odd&quot;&gt;
          &lt;td class=&quot;specs&quot;&gt;Sensor Type&lt;/td&gt;
          &lt;td&gt;CCD&lt;/td&gt;
          &lt;td&gt;CCD&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;specs&quot;&gt;ISO Rating&lt;/td&gt;
          &lt;td&gt;Auto, 100, 200, 400, 800&lt;/td&gt;
          &lt;td&gt;Auto, 64, 100, 200, 400, 800&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr class=&quot;odd&quot;&gt;
          &lt;td class=&quot;specs&quot;&gt;Zoom Wide&lt;/td&gt;
          &lt;td&gt;38 mm&lt;/td&gt;
          &lt;td&gt;28 mm&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;specs&quot;&gt;Zoom Tele&lt;/td&gt;
          &lt;td&gt;190 mm (5 x)&lt;/td&gt;
          &lt;td&gt;112 mm (4 x)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr class=&quot;odd&quot;&gt;
          &lt;td class=&quot;specs&quot;&gt;Aperture range&lt;/td&gt;
          &lt;td&gt;F2.0 - F2.4 / F8.0&lt;/td&gt;
          &lt;td&gt;F2.7 - F5.4&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;specs&quot;&gt;Storage type&lt;/td&gt;
          &lt;td&gt;Memory Stick / Pro&lt;/td&gt;
          &lt;td&gt;xD Picture Card + Internal&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr class=&quot;odd&quot;&gt;
          &lt;td class=&quot;specs&quot;&gt;Uncompressed format&lt;/td&gt;
          &lt;td&gt;TIFF&lt;/td&gt;
          &lt;td&gt;None / JPEG&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td class=&quot;specs&quot;&gt;Weight &lt;/td&gt;
          &lt;td&gt;659 g&lt;/td&gt;
          &lt;td&gt;170 g&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/tbody&gt;
      &lt;/table&gt;&lt;/div&gt;
      &lt;/div&gt;

</pre>

<p>CSS:</p>

<pre>#mainContent table#gearTbl {
	width: 90%;
	margin: 0 auto;
	background: #574f3e;
	border: 1px solid #333;
	border-collapse: collapse; <span class="grey">/* will only work on a 'table' tag and collapse down to the highest value when two borders of different values collapse */</span>
}

#mainContent #gearTbl thead {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 1.3em;
	color: #fff;
	font-weight: normal;
}

#mainContent #gearTbl tbody {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 1em;
	color: #fff;
	text-align: center;
}

#mainContent #gearTbl caption {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 2em;
	font-weight: bold;
	color: #666;
	text-align: left;
	padding-bottom: .5em;
}

#mainContent #gearTbl th {
	font-weight: normal;
	background: #444;
	vertical-align: bottom; <span class="grey">/* Only works for tables */</span>
	height: 190px;
	padding-bottom: 0.5em;
	border: 1px solid #333;
	text-align: center;
}

#mainContent #gearTbl th.sony {
	background: #444 url(../images/sony_dscf717.gif) no-repeat center;
}

#mainContent #gearTbl th.fuji {
	background: #444 url(../images/fuji_finepixf480.gif) no-repeat center;
}

#mainContent #gearTbl td {
	padding: 1.5em 1em; <span class="grey">/* Cell spacing doesn't really have a CSS attribute */</span>
	border: 1px solid #333;
}

#mainContent #gearTbl td.specs {
	text-align: left;
	font-weight: bold;
}

#mainContent #gearTbl tr.odd {
	background: #8c7e62;
}
	
#mainContent #gearTbl tr:hover {
	background: #333;
}

</pre>

<h3>Table Tricks</h3>

<h4>Zebra Rows CSS3</h4>

<table id="alternating">
  <tr>
    <td>First row</td>
  </tr><tr>
    <td>Second row</td>
  </tr>
  <tr>
    <td>Third row</td>
  </tr>
  <tr>
    <td>Fourth row</td>
  </tr>
  <tr>
    <td>Fifth row</td>
  </tr>
  <tr>
    <td>Sixth row</td>
  </tr>
  <tr>
    <td>Seventh row</td>
  </tr>
  <tr>
    <td>Eigth row</td>
  </tr>
</table>

<div class="abA">

<p>Markup:</p>

<pre>
&lt;table id=&quot;alternating&quot;&gt;
  &lt;tr&gt;
    &lt;td&gt;First row&lt;/td&gt;
  &lt;/tr&gt;&lt;tr&gt;
    &lt;td&gt;Second row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Third row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Fourth row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Fifth row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Sixth row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Seventh row&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Eigth row&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;</pre>

</div>



<div class="abB">

<p>CSS:</p>

<pre>
#alternating {
	width: 100%;
}

table#alternating {
	border: none;
}

#alternating td, #alternating tr {
	padding: 10px;
	text-align: left;
}

table#alternating tr:nth-child(odd) {
	background-color: #D8DFEE;
}

table#alternating tr:nth-child(even) {
	background-color: #e9edf1;
}
</pre>

</div>

<p class="clear" />




<p>Empty cells can be hidden with this declaration:</p>
    <dl>
	    <dt>empty-cells: hide;</dt>
    </dl>
                    
                    



</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>