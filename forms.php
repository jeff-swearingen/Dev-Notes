<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Forms</title>
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
					                    
                    
<h3>Forms</h3>             

<h4>Form Reset</h4>
<p>It's good to start with a basic form reset for cross-browser consistency:</p>


<pre>form * {background: none;}
		
input[type=text], input[type=password], input[type=submit],textarea, button {
     -webkit-appearance: none;
     -moz-appearance: none;
     border: 1px solid #666;
     background: none;
     -webkit-border-radius: 0;
     -moz-border-radius: 0;
     border-radius: 0;
     padding: 0;
     margin: 0;
}</pre>

<h4>Use Normalize</h4>
<p>In addition to a reset, <a href="/dev/skeleton/examplecode/normalize/normalize.css" target="_blank">Normalize</a> is excellent for minimizing cross-browser default form styles.</p>


<h4>HTML5 Form Attributes</h4>

<p>Using the HTML5 validation API, you can validate a form using these attributes in the form code:</p>

<p>autofocus <span class="note">Will place cursor in the first field by default</span></p>
<p>autocomplete <span class="note">Indicates that element's value may be remembered for future entries</span></p>
<p>novalidate, formnovalidate <span class="note">Indicates browser should not validate form</span></p>
<p>pattern <span class="note">Restricts the input of a field to match a regular expression pattern (e.g., if you want to restrict form to five digits because it has to be a ZIP code then it has to match a pattern to work) </span></p>
<p>placeholder <span class="note">In the input tag, just add placeholder="desired text" and that will be the background text until you fill the field</span></p>
<p>readonly <span class="note">Combined with a value string, e.g., value="sample text" readonly, then that input field will have that text as read only and cannot be replaced by anything else </span></p>
<p>required <span class="note">Tells form that when required is in the input tag, that the form won't work without it being filled out</span></p>



<h4>Text Selection APIs</h4>






<!--<form action="http://google.com/search">
	<label for="searchbox">Search</label>
	<input id="searchbox" name="q" />

	<input type="checkbox" id="imagescheckbox" name="tbm" value="isch" />
	<label for="imagescheckbox">Images</label>
</form>-->

              
<form action="">
  
  <!-- Label and text input -->
  <label for="regularInput">Regular Input</label>
  <input type="text" id="regularInput" />
 
  <!-- Label and textarea -->
  <label for="regularTextarea">Regular Textarea</label>
  <textarea id="regularTextarea"></textarea>
 
  <!-- Label and select list -->
  <label for="selectList">Select List</label>
  <select id="selectList">
    <option value="Option 1">Option 1</option>
    <option value="Option 2">Option 2</option>
    <option value="Option 3">Option 3</option>
  </select>
 
  <!-- Wrap checkbox/radio button groups in fieldsets -->
  <fieldset>
    
    <!-- Give the fieldset a label -->
    <label for="">Checkboxes</label>
 
    <!-- Wrap each checkbox in a label, then give it the input and span for the text option -->
    <label for="regularCheckbox">
      <input type="checkbox" id="regularCheckbox" value="checkbox 1" />
      <span>Regular Checkbox</span>
    </label>
 
    <label for="secondRegularCheckbox">
      <input type="checkbox" id="secondRegularCheckbox" value="checkbox 2" />
      <span>Regular Checkbox</span>
    </label>
  </fieldset>
 
  <fieldset>
    <label for="">Radio Buttons</label>
    <label for="regularRadio">
      <input type="radio" name="radios" id="regularRadio" value="radio 1" />
      <span>Regular Radio</span>
    </label>
    <label for="secondRegularRadio">
      <input type="radio" name="radios" id="secondRegularRadio" value="radio 2" />
      <span>Regular Radio</span>
    </label>
  </fieldset>
 
  <button type="submit">Submit Form</button>
 
</form>              
              
              
              
                    

</div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>