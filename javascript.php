<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>JavaScript</title>
	<meta name="description" content="">
	<meta name="author" content="">
    <meta name="robots" content="noindex">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="icon" type="image/png" href="/images/favicon/skeleton.png" /> 

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/docs.css">
    <link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
	<!-- JS LINKS -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<style>
div.test1 {
    position: relative;
    margin: -10px 0 30px -8px;
    height: 60px;
    width: 90%;
    background-color: #008800;
    color: #FFFFFF;
    font-family: Verdana, Arial, Sans-Serif;
    display:none;
}
div.test1 strong {
	color: white;
    font-weight: bold;
	margin-left: 2em;
}
</style>
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
					
<header>
	<h1>JavaScript Notes</h1>
</header>

<hr class="large" />
					
                    
                    
                    
<h3>JavaScript</h3>

<h4>Statements</h4>

<p>A JavaScript statement is a basic programming unit, usually representing a single step in a JavaScript program. Think of a statement as a sentence:</p>
                    
<pre><span class="grey">&lt;script&gt;</span>
    alert('Hello World!');
<span class="grey">&lt;/script&gt;</span></pre>

<p>Each statement ends with a semicolon— it's like a period at the end of a sentence. The semicolon makes it clear that the step is over and that the JavaScript interpreter should move on to the next action.</p>

<h4>Functions</h4>
<p>Functions are like verbs in a sentence. They get things done.</p>

<pre>
    <span class="red">alert</span>('Hello World!');
    <span class="red">document.write</span>('Hello World!');
</pre>

<p>Note: <em>document.write</em> publishes something directly to the web page.</p>

<h4>Data</h4>
<p>In JavaScript, the three most basic types of data are <em>number</em>, <em>string</em>, and <em>Boolean</em>.</p>

<h5>Numbers</h5>
<p>You can perform calculations, for example:</p>

<pre>
    document.write(5 + 15);
</pre>

<h5>Strings</h5>
<p>You can perform calculations, for example:</p>

<pre>
    alert(<span class="red">'Hello World!'</span>);
</pre>

<p>You can use either a single quote ' or double " quote:</p>

<pre>
    alert(<span class="red">"Hello World!"</span>);
</pre>

<h5>Booleans</h5>
<p>Are only ever two values: <em>true</em> or <em>false</em>:</p>

<h5>Variables</h5>
<p>Is a way to store information that can vary but that you can use later.</p>

<p>What you name your variables is up to you, but there are a few rules you must follow when naming variables:</p>

<ul class="disc">
<li><strong>Variable names must begin with a letter, $, or _.</strong> In other words, you can't begin a variable name with a number or punctuation: so <em>1thing</em>, and <em>&amp;thing</em> won't work, but score, <em>$score</em>, and <em>_score</em> are fine.</li>

<li><strong>Variable names can only contain letters, numbers, $, and _.</strong> You can't use
spaces or any other special characters anywhere in the variable name: <em>fish&amp;chips</em>
and <em>fish and chips</em> aren't legal, but <em>fish_n_chips</em> and <em>plan9</em> are.</li>

<li><strong>Variable names are case-sensitive.</strong> The JavaScript interpreter sees uppercase and
lowercase letters as distinct, so a variable named <em>SCORE</em> is different from a variable
named <em>score</em>, which is also different from variables named <em>sCoRE</em> and <em>Score</em>.</li>

<li><strong>Avoid keywords.</strong> Some words in JavaScript are specific to the language itself:
<em>var</em>, for example, is used to create a variable, so you can't name a variable var. In addition, some words, like <em>alert, document, and window</em>, are considered special properties of the web browser. You'll end up with a JavaScript error if you try to use those words as variable names. You can find a list of some reserved words
in Table 2-1. Not all of these reserved words will cause problems in all browsers, but it's best to steer clear of these names when naming variables.</li>
</ul>

<p class="note"><a href="http://www.javascripter.net/faq/reserved.htm" target="_blank">Reserved keywords for Javascript </a></p>

<p>Once a variable is created, you can store any type of data that you'd like in it. To do so, you use the = sign. For example, to store the number 0 in a variable named <em>score</em>, you could type this code:</p>

<pre>
    var score;
    score = 0;
</pre>

<p>The first line of code above creates the variable; the second line stores the number 0 in the variable. The equal sign is called an <em>assignment operator</em>, because it's used to assign a value to a variable. You can also create a variable and store a value in it with just a single JavaScript statement like this:</p>
<pre>
    var score = 0;
</pre>

<p>You can store strings, numbers, and Boolean values in a variable:</p>

<pre>
    var firstName = 'Peter';
    var lastName = 'Parker';
    var age = 22;
    var isSuperHero = true;
</pre>

<section class="bodyHighlight">
<h4>Tip:</h4>

<p>To save typing, you can declare multiple variables with a single <em>var</em> keyword, like this:</p>
<pre>
    var x, y, z;
</pre>

<p>You can even declare and store values into multiple variables in one JavaScript statement:</p>

<pre>
    var isSuperHero=true, isAfraidOfHeights=false;
</pre>
</section>

<p>Once you've stored a value in a variable, you can access that value simply by using the variable's name. For example, to open an alert dialog box and display the value stored in the variable <em>score</em>, you'd type this:</p>
<pre>
    alert(score);
</pre>

<p>Notice that you don't use quotes with a variable—that's just for strings, so the code <em>alert('score')</em> will display the word "score" and not the value stored in the variable score. Now you can see why strings have to be enclosed in quote marks: The JavaScript interpreter treats words without quotes as either special JavaScript objects (like the <em>alert()</em> command) or as variable names.</p>

<section class="bodyHighlight">
<h4>Note:</h4>

<p>You should only use the <em>var</em> keyword once for each variable—when you first create the variable.
After that, you're free to assign new values to the variable without using <em>var</em>.</p>
</section>


<h5>Arrays</h5>

<p>An array must be contained in a bracket like this<code>[]</code> for the JS interpreter to render it:

<pre>
    var days = <span class="red">[</span>'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'<span class="red">]</span>;
</pre>



<br>
<br>
<br>
<br>
<br>

<p>############################</p>

<p>You can target a selector (ID, class, or element) inside this container <code>$()</code>. Remember to wrap the targeted element with single <code>$('element')</code> or double <code>$("element")</code> quotes:

<pre>$('#heading').someAction</pre>
<p>or</p>
<pre>$('.button').someAction</pre>
<p>or</p>
<pre>$('div').someAction</pre>


<h4>Syntax</h4>

<p>jQuery's format is predictable, and it always looks like this:</p>

<pre>1   $(document).ready(<strong>function</strong>() {
2     $(thingToClick).event(<strong>function</strong>() {
3         $(thingToAffect).effect();
4       });
5     });</pre>


<ol>
	<li><strong>1st line:</strong> get the <code>document</code> ready</li>
    <li><strong>2nd line:</strong> set up whatever <code>HTML</code> element you want the user to click</li>
    <li><strong>3rd line:</strong> make whatever effect happen (such as a div fading away). The second line is optional—for now, we'll make our effects happen without making the user click the mouse</li>
</ol>

<p><code>$()</code> is a function (a kind of action) that turns whatever's inside the parentheses into a jQuery object—that is, something jQuery can work with.</p>

<p>Simple example of turning something into a jQuery object:</p>

<pre>var paragraph = $('p');</pre>

<!--<p>The <code>variable</code> 'paragraph'</p>--> 
                    
<h4><!-- Close twelve columns offset-by-one content --></h4>
</div>
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>