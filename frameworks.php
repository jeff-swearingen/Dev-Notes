<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Frameworks &amp; Grids</title>
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
					
<h3>Frameworks &amp; Grids</h3>



<h4>Framework Types</h4>

<ol>
	<li>User Interface Framework:
    	<ul class="square">
        	<li>Usually contain CSS, JS, HTML, and images, including template and demo files</li>
            <li>Are fully functional development tools, contain structure and styling for forms, UI components, page layout, and scripting for site functionality</li>
            <li>Add most overhead but contain the most sets of tools for front-end web or web application development projects</li>
            <li>Examples: 
            <ul class="square">
                <li><a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a></li>
            </ul>
            
            </li>
        </ul>
    </li>
	<li>Comprehensive
            <ul class="square">
            <li>Examples: 
            <ul class="square">
                <li><a href="http://foundation.zurb.com/" target="_blank">Foundation</a>: Supports rapid prototyping and mobility</li>
                <li><a href="http://www.gumbyframework.com" target="_blank">Gumby</a>: Based on 960-Grid</li>
                <li><a href="http://www.yaml.de/" target="_blank">YAML: Yet Another Multicolumn Layout</a></li>
            </ul>
            </li>
        </ul>

    </li>
	<li>Minimal
        <ul class="square">
            <li>Examples: 
            <ul class="square">
                <li><a href="http://matthewhartman.github.com/base/" target="_blank">BASE</a></li>
                <li><a href="/dev/skeleton/examplecode/cabincss/cabin.css" target="_blank">Cabin CSS</a></li>
                <li><a href="http://imperavi.com/kube/" target="_blank">Kube</a></li>
                <li><a href="http://goldilocksapproach.com/" target="_blank">The Goldilocks Approach</a> Is an <code>em</code> based layout focusing on responsive design</li>
                <li><a href="http://www.getskeleton.com/" target="_blank">Skeleton</a></li>
            </ul>
            
            
            </li>
        </ul>
    </li>    
</ol>


<h4>Grid Systems</h4>

<ul class="square">
	<li><a href="http://960.gs/" target="_blank">960 Grid System</a>: Not responsive</li>
	<li><a href="http://cssgrid.net/" target="_blank">1140 CSS Grid</a>: Fluid from big screens to mobile</li>
    <li><a href="http://goldengridsystem.com/" target="_blank">Golden Grid System</a>: Folding columns, 16 columns fold to 8, 8 to 4, has good grid overlay system</li>
    <li><a href="http://www.columnal.com/" target="_blank">Columnal</a>: Mashup of 960 Grid System and 1140 for responsive design</li>
	<li><a href="http://baselinecss.com/grid.html" target="_blank">Baseline</a>: Focuses on typography but has page layout tools as well but on a fixed grid <span class="note">Is very much like a framework</span></li>
    <li><a href="http://fluidbaselinegrid.com/" target="_blank">Fluid Baseline Grid</a>: A lot like Baseline but has a fluid grid <span class="note">Is very much like a framework</span></li>
    <li><a href="http://responsive.gs/" target="_blank">Responsive</a>: Comes with 12, 16, or 24 columns</li>
    <li><a href="http://www.responsivegridsystem.com/" target="_blank">Responsive Grid System</a>: You get to specify the exact number of columns you want to use so you can create a great number of layouts <span class="note">Author recommended</span></li>
    <li><a href="http://unsemantic.com/" target="_blank">Unsemantic</a>: Responsive</li>   
    <li><a href="http://www.gridsystemgenerator.com/" target="_blank">Grid System Generator</a></li>
</ul>


<div class="williamsonNote">
<h3>James Williamson's Recommendations</h3>

<h4>Framework Tools</h4>

<p><a href="http://www.thegridsystem.org/" title="The Grid System" target="_blank">The Grid System</a><br>
Huge online resource for frameworks, grids, and responsive design.</p>


<p><a href="http://gridsetapp.com/" title="Gridset App" target="_blank">Gridset</a><br>
Gridset is an online app for building and storing custom grid layouts.</p>


<p><a href="http://goldenratiocalculator.com/" title="Golden Ratio" target="_blank">Golden Ratio Calculator</a><br>
Quick online app for finding column measurements based on the Golden Ratio.</p>


<p><a href="http://gridpak.com/" title="Gridpak" target="_blank">Gridpak</a><br>
Online grid generator that allows you to choose number of columns, padding, gutter, and set breakpoints.</p>


<p><a href="http://csswizardry.com/fluid-grids/" title="Fluid Grids" target="_blank">Fluid Grids</a><br>
A fluid grid calculator for building your own custom grid.</p>


<p><a href="http://necolas.github.com/normalize.css/" title="Normalize" target="_blank">Normalize</a><br>
Minimal CSS reset that focuses on ensuring consistent rendering of elements across all browsers. Included in a number of popular frameworks.</p>


<p><a href="http://framelessgrid.com" title="Frameless" target="_blank">Frameless</a><br>
Not a grid system, frameless is an approach that you can use to create your own, infinitely repeating responsive grids.</p>


<p><a href="http://zengrids.com/" title="Zen Grids" target="_blank">Zen Grids</a><br>
A responsive grid system for SASS that eliminates the need for pre-defined grid class attributes.</p>


<h4>Grid Systems</h4>


<p><a href="http://960.gs/" title="960 Grid" target="_blank">960 Grid</a><br>
The 960 Grid System is a fixed grid that targets 960px layout with either a 12 or 16 column layout. One of the most popular grid systems of all time, it has been adapted into multiple grid systems.</p>


<p><a href="http://cssgrid.net" title="1140 Grid" target="_blank">1140 Grid</a><br>
Fluid grid designed for an optimal size of 1140px. Comes with a full set of media queries for responsive layouts.</p>


<p><a href="http://www.columnal.com" title="Columnal" target="_blank">Columnal</a><br>
Responsive grid system inspired by many preceding grids, such as the 960 grid system. Designed for 1140px, the grid is fluid and designed to switch to mobile styles for smaller screens.</p>


<p><a href="http://www.designinfluences.com/fluid960gs" title="Fluid 960 Grid System" target="_blank">Fluid 960 Grid System</a><br>
A fluid version of the 960 Grid. Features both fluid and fixed versions of 12 and 16 column grids.</p>


<p><a href="http://fluidbaselinegrid.com" title="Fluid Baseline Grid" target="_blank">Fluid Baseline Grid </a><br>
Fluid grid with built-in typographic baseline grid. Contains multiple media queries for targeting common breakpoints, and normalize.css for browser reset styles.</p>


<p><a href="http://goldengridsystem.com" title="Golden Grid System" target="_blank">Golden Grid System</a><br>
Unique approach that starts with a 16 column grid and then folds the columns down as screen size decreases. Fully fluid design that also features elastic gutters and a baseline grid for typography.</p>


<p><a href="http://responsive.gs/" title="Responsive Grid System" target="_blank">Responsive.gs</a><br>
Fluid grid system that comes in 12, 16, and 24 column versions, features media queries for common devices, and has an optional style reset.</p>


<p><a href="http://www.responsivegridsystem.com" title="Responsive Grid System" target="_blank">Responsive Grid System</a><br>
Fluid grid system that lets you decide how many columns to use, and even allows you to mix the number of columns used within the same page.</p>


<p><a href="http://simplegrid.info" title="Simple Grid" target="_blank">Simple Grid </a><br>
Exactly as it says, Simple Grid is a straightforward, simple grid that allows you to quickly construct layouts. The grid doesn’t require extra classes for the end of columns and includes a LESS version for development.</p>


<p><a href="http://semantic.gs" title="The Semantic Grid System" target="_blank">The Semantic Grid System </a><br>
A responsive grid system that runs on SASS, LESS, or Stylus. Gives you the freedom to define the number of columns you want to use and whether to create fixed or fluid grids, all without adding additional markup or using non-semantic class names.</p>


<h4>Minimal Frameworks</h4>


<p><a href="http://www.newaeonweb.com.br/responsiveaeon" title="Aeon Framework" target="_blank">Aeon Framework</a><br>
Minimalist HTML5 framework that uses a responsive 12 column grid and basic styles for forms and typography. It has optional JavaScript components for building modal windows and adding responsive support to earlier browsers.</p>


<p><a href="http://www.amazium.co.uk" title="Amazium Framework" target="_blank">Amazium Framework</a><br>
Amazium is a responsive framework based on a 960 grid system with 12 columns. It also contains styling for typography, forms, and tables. It also features common media queries, interactive classes for showing and hiding elements, and code for crafting responsive images and video.</p>


<p><a href="http://matthewhartman.github.com/base" title="Base Framework" target="_blank">Base Framework </a><br>
Base is a streamlined CSS framework that uses a 12-column responsive grid system. 
It comes with a minimal HTML5 template, jQuery, and basic styles for typography, form elements, tables, and other common elements. It also features a default Javascript file with base enhancements & fallbacks and an optional LESS file that can be used for development.
</p>


<p><a href="http://csshor.us" title="CSSHórus" target="_blank">CSSHórus</a><br>
Basic CSS framework that contains a 16-column grid, basic element styles, a CSS reset, and common media queries to help your projects get up and running quickly.</p>


<p><a href="http://imperavi.com/kube/" title="Kube Framework" target="_blank">Kube Framework</a><br>
Kube provides a solid foundation for projects without dictating styling. Base level styles for type, forms, tables, buttons, and layout give you the building blocks for your site while still letting you control the overall style.</p>


<p><a href="http://www.getskeleton.com" title="Normalize" target="_blank">Skeleton</a><br>
One of the most popular minimal frameworks, Skeleton includes basic styling for type, forms, and buttons in a way that provides you with a foundation for your own designs. It also has a fixed grid that combines media queries to create adaptive sites for desktop and mobile.</p>


<p><a href="http://daneden.me/toast/" title="Toast Framework" target="_blank">Toast Framework</a><br>
Very simple framework that provides you with a grid, a CSS reset, and some basic type styles to get you started. The grid is based off of the “inline-block” display property to avoid some of the problems common to floats.</p>


<p><a href="http://titanthemes.com/titan-framework-a-css-framework-for-responsive-web-designs" title="Titan framework" target="_blank">Titan Framework</a><br>
Titan is a responsive framework that comes with a 12 and 16 column grid, a CSS reset, and basic type styles. The grid uses the same classes as the 960 grid, making it easy to transition projects from 960 to Titan.</p>


<h4>Comprehensive &amp; UI Frameworks</h4>


<p><a href="http://www.blueprintcss.org" title="Blueprint" target="_blank">Blueprint </a><br>
One of the original CSS frameworks that is still widely used today. Comes with a grid system, form and table styles, solid typography, plugins for tabs and sprites, and a large user base and documentation. </p>


<p><a href="http://twitter.github.com/bootstrap" title="Bootstrap" target="_blank">Bootstrap </a><br>
Started by Twitter, this UI Framework has become one of the most popular full-featured frameworks available. Designed for building both sites and applications.</p>


<p><a href="http://foundation.zurb.com/" title="Foundation" target="_blank">Foundation  </a><br>
Foundation is an extremely powerful framework for building prototypes and production code for multiple devices. Foundation includes extensive element styling and built-in UI functionality to help you quickly put together clickable prototypes or finished production sites.
</p>


<p><a href="http://gumbyframework.com" title="Gumby" target="_blank">Gumby </a><br>
Gumby is designed to allow you to create robust sites that work across devices and screen sizes. It features fixed or fluid grids, comprehensive element styling, UI widget functionality, and rapid prototyping tools.</p>


<p><a href="http://metroui.org.ua" title="Metro UI CSS" target="_blank">Metro UI CSS</a><br>
Much like Twitter’s Bootstrap, Metro UI is the result of an initial UI development project. Metro UI allows you to create sites with the Window’s 8 Metro styling and UI functionality. Although designed to help designers develop Window’s 8 apps, it can be used for any site.</p>


<p><a href="http://www.yaml.de/" title="YAML" target="_blank">YAML </a><br>
YAML (or Yet Another Multicolumn Layout) evolved from a static layout grid to a complete UI framework. It’s focus is on building responsive, accessible sites and features a wealth of documentation and developer tools.</p>


<p><a href="http://yuilibrary.com/" title="YUI Library" target="_blank">YUI Library</a><br>
Developed by Yahoo, the YUI Library is a massive collection of open source CSS and JavaScript libraries for building rich web user interfaces. From building simple sites to complex applications, YUI offers tools for developers at any level.</p></div>
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>