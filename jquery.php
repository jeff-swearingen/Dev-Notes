<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>jQuery</title>
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
	<h1>jQuery Notes</h1>
</header>

<hr class="large" />                    
                    
                    
<h3>jQuery</h3>

<h4>What is jQuery?</h4>

<p>jQuery is a <strong>library</strong>, or set of helpful add-ons, to the <strong>JavaScript</strong> programming language. It may seem counterintuitive to learn how to use a library before learning the actual language, but there are a few good reasons for this.</p>

<ol>
    <li>It takes a while to become comfortable with JavaScript, and it&#39;s trickier to manipulate DOM elements directly with JavaScript than with jQuery. In order to help you build awesome websites faster, we&#39;re starting you off with jQuery.</li>
    <li>jQuery provides a simple interface for the underlying JavaScript. It&#39;s easier for many users to learn jQuery first, then dive into the nitty-gritty JavaScript details later.</li>
    <li>jQuery is much better at giving you immediate, visual results than regular JavaScript. By the end of this lesson, you&#39;ll have built your own interactive button!</li>
</ol>

<p class="note">Note: Anytime the browser is updated with information from the server that's DOM manipulation (AJAX).</p>


<h4>Basics</h4>

<p>A jQuery document begins with the <code>$</code> symbol:</p>
                    
<pre><span class="red">$</span>(document).ready(function() {
    $('div').fadeOut(1000);
});</pre>


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


<!--<p>You get the document ready on the first line, set up whatever HTML element you want the user to click on the second line, and make whatever effect happen (such as a div fading away) on the third line. The second line is optional—for now, we'll make our effects happen without making the user click the mouse.</p>-->


<ol>
	<li><strong>1st line:</strong> get the <code>document</code> ready</li>
    <li><strong>2nd line:</strong> set up whatever <code>HTML</code> element you want the user to click</li>
    <li><strong>3rd line:</strong> make whatever effect happen (such as a div fading away). The second line is optional—for now, we'll make our effects happen without making the user click the mouse</li>
</ol>

<p><code>$()</code> is a function (a kind of action) that turns whatever's inside the parentheses into a jQuery object—that is, something jQuery can work with.</p>

<p>Simple example of turning something into a jQuery object:</p>

<pre>var paragraph = $('p');</pre>

<!--<p>The <code>variable</code> 'paragraph'</p>--> 
                    
<h4>Linking Your HTML and JavaScript Files</h4>

<p>You can either link locally or through remotely hosted scripts:</p>

<pre>&lt;script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"&gt;&lt;/script&gt;</pre>


<h4>Getting Started</h4>

<p>The <code>$(document).ready();</code> <strong>event</strong> handler syntax works like this:</p>

<ol>
<li><code>$()</code> says, &quot;hey, jQuery things are about to happen!&quot;</li>
<li>Putting <code>document</code> between the parentheses tells us that we&#39;re about to work our magic on the HTML <code>document</code> itself.</li>
<li><code>.ready();</code> is a <strong>function</strong>, or basic action, in jQuery. It says &quot;hey, I&#39;m going to do stuff as soon as the HTML document is ready&quot;</li>
<li>Whatever goes in <code>.ready()</code>&#39;s parentheses is the jQuery <strong>event</strong> that occurs as soon as the HTML document is ready.</li>
</ol>

<p>So,</p>

<pre><code>$(document).ready(something);</code></pre>

<p>says: &quot;when the HTML document is ready, do <code>something</code>!&quot; (We&#39;ll show you how to replace <code>something</code> with an action in the next exercise.)</p>

<p><span class="note">Note</span> that <code>.ready();</code> ends with a semicolon. This tells jQuery that you&#39;re done giving it a command.</p>

<h5>Example:</h5>

<pre>
&lt;script type="text/javascript"&gt;
    $("document").ready ( function () {
    alert("the page just loaded!");
    });
&lt;/script&gt;
</pre>


<h4>Using Functions</h4>
<p>When we say &quot;function,&quot; you can think &quot;action.&quot; Functions are the basic unit of doing work in jQuery.</p>

<p><code>$()</code> is a <strong>function</strong> (a kind of action) that turns whatever's inside the parentheses into a jQuery object—that is, something jQuery can work with.</p>

<p>For this reason, jQuery includes a <code>function</code> keyword. The syntax looks like this:</p>

<pre>function(){
    jQuery magic;
}</pre>

<p>If we add our function inside our <code>.ready()</code>, jQuery will run the code in our function as soon as the HTML document loads. The syntax would then look like this:</p>

<pre>$(document).ready(function() {
    jQuery magic;
});</pre>

<p>Remember, we end our jQuery statements with a semicolon (<code>;</code>).</p>


<h4>Electronic Slide Demo</h4>

<p>HTML:</p>

<pre>&lt;!DOCTYPE html>
&lt;html&gt;
 &lt;head&gt;
  &lt;title&gt;Ta Daaa!&lt;/title&gt;
  &lt;link rel='stylesheet' type='text/css' href='stylesheet.css'/&gt;
  &lt;script type='text/javascript' src='script.js'&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div&gt;&lt;br/&gt;&lt;strong&gt;I'm the Header!&lt;/strong&gt;&lt;/div&gt;   
 &lt;/body&gt;
&lt;/html&gt;</pre>


<p>CSS:</p>

<pre>div {
    position: absolute;
    margin: -10px 0 0 -8px;
    height: 60px;
    width: 100%;
    background-color: #008800;
    color: #FFFFFF;
    font-family: Verdana, Arial, Sans-Serif;
    display:none;
}</pre>


<p>jQuery:</p>

<pre>$(document).ready(function() {
    $('div').slideDown('slow');
});</pre>

<script>
$(document).ready(function() {
    $('div.test1').slideDown('slow');
});
</script>

<div class="test1"><br/><strong>I'm the Header!</strong></div>


<p>Here's a breakdown of what's going on in the jQuery syntax:</p>

<pre>$(document).ready(function() {
    $('div').action(howfast);
});</pre>

<p>The <em>action</em> is <code>slideDown</code> and <em>howfast</em> should be <code>'slow'</code>:</p>

<pre>$('div').slideDown('slow');</pre>


<h4>Adding a Function</h4>

<p><strong>Functions</strong> are the basic unit of action in jQuery. The main entry point of most jQuery applications is a block of code that looks like this:</p>

<pre><code>$(document).ready(function() {
    Do something
});</code></pre>

<p>Let's go through it bit by bit:</p>

<ol>
    <li><code>$(document)</code> is a jQuery object. The <code>$()</code> is actually a function in disguise; it turns the <code>document</code> into a jQuery object</li>
    <li><code>.ready()</code> is a type of function; you can think of it as sort of a helper that runs the code inside its parentheses as soon as the HTML document is ready</li>
    <li><code>function(){}</code> is the action that <code>.ready()</code> will perform as soon as the HTML document is loaded. <em>In the above example, the</em> <code>Do something</code> <em>placeholder is where those actions would go</em></li>
</ol>

<p>Here are some simple examples:</p>

<pre>$(document).ready(function() {
   $('div').hide();     
});</pre>


<p>As it's set up, this script calls for every <code>div</code> on the page to fade up to 100% opacity on <code>mouseenter</code>:</p>

<pre>$(document).ready(function(){
    $('div').mouseenter(function() {
            $('div').fadeTo('fast', 1);
    });
});</pre>

<p>Or every <code>div</code> to fade to 50% opacity on <code>mouseleave</code>:</p>

<pre>$(document).ready(function(){
    $('div').mouseleave(function() {
            $('div').fadeTo('fast', 0.5);            
    });
});</pre>

<h4>Functions Explained</h4>

<p>A function is made up of three parts: the <code>function</code> keyword, any inputs that function takes (they go between the <code>()</code>s and are separated by commas if there are more than one), and whatever actions the function should perform (these go between the <code>{}</code>s). The general form is:</p>

<pre><code>function(input1, input2, etc) {
    Do a thing
    Do another thing
    Do yet another thing!
}
</code></pre>

<p>One of the nice things about jQuery is that you can give a function just about anything as an input—even another function! That&#39;s why <code>.ready()</code> can take <code>function</code> between its parentheses; it&#39;s taking a function as input.</p>

<p class="note">Codeacademy has more about functions in the <a href="http://codecademy.com/tracks/javascript">JavaScript track</a>.</p>

<h4>Assigning Values</h4>

<p>The <code>=</code> sign is used to <strong>assign</strong> values. For instance, in jQuery, you can write:</p>

<pre><code>var paragraph = $(&#39;p&#39;);</code></pre>

<p>Which stores the jQuery object <code>$(&#39;p&#39;)</code> in the <strong>variable</strong> <code>$p</code> . A <code>variable</code> is just a handy name we use to store jQuery values.</p>

<p>Why would we do this? Well, sometimes our jQuery code gets really long, and it can be nice to store it in small variables for later use.</p> 

<p>For example, if we wanted to modify a deeply nested HTML element, we could do this:</p>

<pre>$(document).ready(function() {
    var $item = $(&#39;div ul li ol li&#39;);
    $item.fadeOut(&#39;fast&#39;);
});</pre>

<p>Working example:</p>

<pre>$(document).ready(function() {
    var $target = $('div ul li ol li:last-child');
    $target.fadeOut('fast');
});</pre>

<p>You probably noticed that we used both <code>$</code> and <code>$()</code> in the last exercise:</p>

<pre><code>var paragraph = $(&#39;p&#39;);</code></pre>

<p>There&#39;s a subtle difference between the two.</p>

<p><code>$p</code> is just a variable name. There is <em>no</em> magic associated with the <code>$</code> in <code>$p</code>; it&#39;s just a convention for saying, &quot;hey, this variable contains a jQuery object.&quot; We could call <code>$p</code> anything we want: <code>$paragraph</code>, <code>paragraph</code>, <code>space_cows</code>, whatever! It&#39;s just helpful for people reading our code to see <code>$p</code>, since this is a concise way of saying &quot;hey, there&#39;s a <code>&#39;p&#39;</code> jQuery object in here.&quot;</p>

<p><code>$()</code>, on the other hand, <em>is</em> magic. This is the function in disguise that creates jQuery objects. If you&#39;re making a jQuery object, you gotta use it!</p>



<h3 id="features">Features</h3>

<h4>jQuery Selectors and Filters: Overview</h4>

<ul class="disc">
	<li>jQuery selectors and filters retrieve content from the document so it can be manipulated using other fuctions (think of this as the "Query" part "jQuery")<ul>
    	<li>jQuery selectors return an array of objects that match the selection criteria</li>
        <li>jQuery filters operate on a selector to further refine the results array that the selector returns</li></ul>
    </li>
	<li>This array is <em>not</em> a set of DOM elements</li>
	<li>It is a collection of jQuery objects taht provide a large number of predefined functions for further operating on the objects</li>    
</ul>

<h4>jQuery Selectors correspond directly to their CSS counterparts</h4>

<p><img src="images/jquery-selectors.png" alt="Filter Purpose" width="659" height="311" /></p>


<h4>Filters</h4>

<p>Filters work with <code>selectors</code> to provide even more fine-grained control over how elements are selected in the document.</p>

<p>Types of filters:</p>

<ol>
	<li><strong>Basic</strong>: Provides basic filtering, like getting the first, last, and even- and odd-numbered items in a returned set</li>
	<li><strong>Content</strong>: Filteres a set of elements based on the content, like whether an element contains a particular string</li>
	<li><strong>Visibility</strong>: Filters a set of elements using the visibility setting of each element as a test</li>
	<li><strong>Attribute</strong>: Examines a given attribute on an element to determine whether it should be filtered out</li>
	<li><strong>Child</strong>: Selects elements based upon their relationship with their parent element</li>
	<li><strong>Form</strong>: Provides specialized filters that operate on form elements</li>    
</ol>

<h4>Using jQuery Filters</h4>
<p>You can refine a selector by including elements that match certain conditions, like position or index:</p>
<p><img src="images/filter-purpose.png" alt="Filter Purpose" width="585" height="287" /></p>


<p class="note">Filters are similar to <a href="selectors.php#structuralPseudoClass" target="_blank">structural pseudo-class selectors and nth-child selectors</a> in CSS.</p>

<p>Examples of filter syntax:</p>

<pre>$("document").ready(function() {
        $("p:first").css("border", "3px solid red");
        <span class="grey">//$("p:last").css("border", "3px solid red");
        //$("p:even").css("border", "3px solid red");
        //$("p:odd").css("border", "3px solid red");
        //$(".a:first").css("border", "3px solid red");
        //$(".b:even").css("border", "3px solid red");
        //$("p:gt(1)").css("border","3px solid red");
        //$("p:not(p:eq(2))").css("border", "3px solid red");</span>
});</pre>

<p>Filters can also be combined:</p>

<pre>$("document").ready(function() {
	$<span class="red">("p:first,p:last")</span>.css("border","3px solid red");
});</pre>

<h4>Attribute Filters</h4>

<p><img src="images/attribute-purpose.png" alt="Attribute Purpose" width="597" height="287" /></p>

<p class="note">Filters are almost exactly like <a href="selectors.php#attributeSelectors" target="_blank">Attribute Selectors</a> in CSS.</p>

<p>Examples in jQuery:</p>

<pre>$("document").ready(function() {
    $("p[class]").css("border", "3px solid red");
    <span class="grey">//$("p[id=para1]").css("border", "3px solid red");
    //$("a[href$=.pdf]").after("&lt;img src='images/small_pdf_icon.gif' align='absbottom' /&gt;");
    //$("p[id^=para]").css("border", "3px solid red");
    //$("p[id^=para][lang*=en-]").css("border", "3px solid red");</span>
});</pre>

<p>Sample markup:</p>

<pre>&lt;ul id="list1"&gt;
    &lt;li class="a"&gt;item 1&lt;/li&gt;
    &lt;li class="a"&gt;item 2&lt;/li&gt;
    &lt;li class="b"&gt;item 3&lt;/li&gt;
    &lt;li class="b"&gt;item 4&lt;/li&gt;
&lt;/ul&gt;
&lt;p class="a"&gt;This is paragraph 1&lt;/p&gt;
&lt;p id="para1"&gt;This is paragraph 2&lt;/p&gt;
&lt;p class="b"&gt;This is paragraph 3&lt;/p&gt;
&lt;p id="para4" lang="en-us"&gt;This is paragraph 4&lt;/p&gt;</pre>

<h4>Content and Visibility Filters</h4>

<p><img src="images/content-visibility-purpose.png" alt="Content &amp; Visibility Filters" width="676" height="306" /></p>

<p class="note">Filters are almost exactly like <a href="selectors.php#nthChildSelectors" target="_blank">Child Selectors</a> in CSS.</p>

<p>Sample jQuery script:</p>

<pre>$("document").ready(function() {
        $("p:contains(3)").css("border", "3px solid red");
        <span class="grey">//$("p:parent").css("border", "3px solid red");
        //$("ul:has(li[class=a])").css("border", "3px solid red");
        //$("ul li:nth-child(3)").css("border", "3px solid red");
        //$("ul li:nth-child(2n)").css("border", "3px solid red");</span>
});</pre>

<p>Sample markup:</p>

<pre>&lt;ul id="list1"&gt;
	&lt;li class="a"&gt;item 1&lt;/li&gt;
	&lt;li class="a"&gt;item 2&lt;/li&gt;
	&lt;li class="b"&gt;item 3&lt;/li&gt;
	&lt;li class="b"&gt;item 4&lt;/li&gt;
&lt;/ul&gt;

&lt;p class="a"&gt;This is paragraph 1&lt;/p&gt;
&lt;p id="para1"&gt;This is paragraph 2&lt;/p&gt;
&lt;p class="b"&gt;This is paragraph 3&lt;/p&gt;
&lt;p&gt;This is paragraph 4&lt;/p&gt;</pre>


<h4>Form Selectors</h4>

<p>Form selectors work like other selectors but start with a colon (:) like a regular filter:</p>

<p><img src="images/forms-purpose.png" alt="Form Selectors" width="674" height="321" /></p>

<p>These filters help with forms that are in a particular state:</p>

<p><img src="images/forms-purpose2.png" alt="Form Selectors part 2" width="658" height="169" /></p>

<p>Sample form script:</p>

<pre>$("document").ready(function() {
	$("form :input").css("border", "3px solid red");
        <span class="grey">//$("form :text").css("border", "3px solid red");
        //$("form :text:enabled").css("border", "3px solid red");
        //$("form :checked").css("border", "3px solid red");
        //$("form :checkbox:checked").css("border", "3px solid red");</span>
});</pre>


<p>Sample form markup:</p>

<pre>&lt;form action="" method="post"&gt;

&lt;table class="style1"&gt;
&lt;tbody&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            First Name&lt;/td&gt;
        &lt;td&gt;
            &lt;input id="FirstName" type="text" /&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            Last Name&lt;/td&gt;
        &lt;td&gt;
            &lt;input id="LastName" type="text" /&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            Disabled Element&lt;/td&gt;
        &lt;td&gt;
            &lt;input id="Text1" type="text" disabled="disabled"/&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            Gender&lt;/td&gt;
        &lt;td&gt;
            &lt;input id="Male" type="radio" checked="checked"/&gt;M&lt;input id="Female" type="radio" /&gt;F&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            What products are you interested in?&lt;/td&gt;
        &lt;td&gt;
            &lt;input id="Checkbox1" type="checkbox" checked="checked"/&gt;&lt;label for="Checkbox1"&gt;Widgets&lt;/label&gt;&lt;br /&gt;
            &lt;input id="Checkbox2" type="checkbox" /&gt;&lt;label for="Checkbox1"&gt;Hibbity Jibbities&lt;/label&gt;&lt;br /&gt;
            &lt;input id="Checkbox3" type="checkbox" checked="checked"/&gt;&lt;label for="Checkbox1"&gt;SplashBangers&lt;/label&gt;&lt;br /&gt;
            &lt;input id="Checkbox4" type="checkbox" /&gt;&lt;label for="Checkbox1"&gt;Whatzits&lt;/label&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            Comments:&lt;/td&gt;
        &lt;td&gt;
            &lt;textarea id="Comments" cols="40" name="S1" rows="5"&gt;&lt;/textarea&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;
            Optional life story file&lt;/td&gt;
        &lt;td&gt;
            &lt;input id="File1" type="file" /&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;&nbsp;
            &lt;/td&gt;
        &lt;td&gt;&nbsp;
            &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td class="style2"&gt;&nbsp;
            &lt;/td&gt;
        &lt;td&gt;
            &lt;input id="Submit1" type="submit" value="submit" /&gt; &lt;input id="Reset1" 
                type="reset" value="reset" /&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/tbody&gt;&lt;/table&gt;

&lt;/form&gt;</pre>


<h4>Traversing Document Information</h4>

<p>You can traverse the information returned from a document easily:</p>

<p><img src="images/traversing.png" alt="Form Selectors part 2" width="665" height="250" /></p>


<p>Sample script:</p>

<pre>$("document").ready(function() {
        // Inspect the length and size() of a result set
        alert("There are " + $("p").length + " &lt;p&gt; elements");

        // use the get() and get(index) to retrieve DOM elements
        var elems = $("li").get();
        alert("There are " + elems.length + " &lt;li&gt; tags");
        alert($("li").get(0));

        // use the find function
        $("ul").find("li.b").css("border", "3px solid red");

        // use the each function
        var leftmargin = 0;
        var border = 3;
        $("p").each(function() {
            $(this).css("border", border+"px solid red");
            $(this).css("margin-left", leftmargin);
            border += 2;
            leftmargin += 10;
        });
});</pre>

<p>Sample markup:</p>

<pre>&lt;ul id="list1"&gt;
     &lt;li class="a"&gt;item 1&lt;/li&gt;
     &lt;li class="a"&gt;item 2&lt;/li&gt;
     &lt;li class="b"&gt;item 3&lt;/li&gt;
     &lt;li class="b"&gt;item 4&lt;/li&gt;
&lt;/ul&gt;
&lt;p class="a"&gt;This is paragraph 1&lt;/p&gt;
&lt;p id="para1"&gt;This is paragraph 2&lt;/p&gt;
&lt;p class="b"&gt;This is paragraph 3&lt;/p&gt;
&lt;p id="para2"&gt;This is paragraph 4&lt;/p&gt;</pre>


<h4>Statement Chaining</h4>

<p>Statements can be chained together like this instead of writing out separate lines of code:</p>

<pre>$(selector)<span class="red">.fn1().fn2().fn3()</span>;</pre>


<h4>Creating, Setting, and Getting Content</h4>

<p>To create new HTML content, you simply pass a string containing new HTML to the <code>$()function:</code>. For example:</p>

<pre>var newHeader = $("&lt;h1&gt;My New Header&lt;/h1&gt;");
var myStr = $("&lt;h1&gt;My New Header&lt;/h1&gt;");
var newHeader = $(myStr);</pre>


<input type="range" id="range-1" min="0" max="100" step="20" value="0">
<output>0</output>
<script>
	$( "#range-1").on( "change", function() {
		$( this ).next( "output" )
			.val( $( this ).val() );
	});
</script>





</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>