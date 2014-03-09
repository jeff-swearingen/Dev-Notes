<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--><head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Edge Animate</title>
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
    
    <style>

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
	<h1>Edge Animate</h1>
	</header>				

<h3>Basics</h3>
 
<h4>Stacking Order</h4>

<p>Can be controlled by: 

<ol>
	<li>Layers order in Elements Panel, or</li>
	<li><strong>Ctrl-[</strong> for down and <strong>Ctrl-]</strong> for up, or</li>
	<li><strong>Ctrl-Shift-[</strong> for send to back and <strong>Ctrl-Shift-]</strong> for bring to front</li>
</ol>

<h4>Shape or Symbol Editing</h4>

<p>Best to use the Transform Tool:</p>

<img src="/dev/skeleton/images/edge/transform-tool.png" alt="transform tool">     


<!-- 5. Animating Elements -->

           
<h3>Manual Animation</h3>

<h4>How to Start</h4>

<p>If moving on the X or Y axis take these steps:</p>

<ol>
	<li>In the Timeline drag the Playhead to 0 (it can be scrubbed to another time in the Timeline if needed)</li>
	<li>Under Position and Size in the Properties Panel, click on the the keyframe symbol for the X or Y value:<br>
<br>
<img src="/dev/skeleton/images/edge/position-size.png" alt="Position and Size Panel" width="275" height="109"></li>
	<li>Go to Timeline and drag Playhead out to 1 second or desired time</li>
    <li>In the Timeline property for the Artwork click the Add Keyframe icon</li>
    <li>Go to Stage and move Artwork somewhere on the X-Axis of the Stage</li>
    <li>After Artwork is moved the second Keyframe in the Timeline turns black to indicate that there's been a change in position of the Object</li>
    <li>Right-click on black Keyframe and select "Create Transition"</li>
    <li>A new animation/transition is created</li>    
</ol>            

<h4>Adding Additional Properties</h4>

<p>With the same animation a new property can be added to the Timeline. For example:</p> 

<ol>
	<li>Drag the Playhead to the 0 marker</li>
	<li>Click on the Keyframe marker for Opacity at the top of the Properties Panel</li>
	<li>A new entry for Opacity will appear under the Object so move the scrub value down to 0</li>  
    <li>Drag Playhead out to 1 second</li>
    <li>Under Opacity in the Timeline click "Add Keyframe"</li>
    <li>Scrub Opacity up to 100%</li>
    <li>Right click on blackened Keyframe marker at the 1 second mark of Timeline and select "Create Transition"</li>   
</ol>

<h4>Adding a Y-Axis</h4>  

<p>Again with the same animation, add a Y-Axis by:</p>
              
<ol>
	<li>Clicking the Keyframe marker next to the Y in Position and Size in the Properties Panel</li>
	<li>On the Stage, grab the Object/Artwork and move it up vertically to the desired location</li>
	<li>In the Timeline a new entry for Top has been created</li>
    <li>Move Playhead out to 1 second (it will go to X-Axis position set earlier)</li>
    <li>Drag Object down to desired Y-Axis location</li>
    <li>On new black Keyframe marker in the Timeline, right click and select "Create Transition"</li>
    <li>Object/Artwork will now move diagonally from top-left to lower right of Stage</li> 
</ol>


<h3>Automated Animation</h3>

<p>Automating animation saves a lot of time by following these basic steps:</p>

<ol>
	<li>Go to Assets and drag one onto the Stage</li>
	<li>In Timeline activate Auto Keyframe (K) and Auto Transition (X) buttons<br>
<br>
<img src="/dev/skeleton/images/edge/autoKF-autoTrans.png" alt="Auto Keyframe and Auto Transition buttons" width="130" height="34">
</li>
	<li>Select Artwork on Stage and click on the X-Axis Keyframe marker under Position and Size in the Properties Panel</li>
    <li>Go to Timeline and drag Playhead to 1 second</li>
    <li>Go to Stage and move Artwork to the desired location to the right</li>
    <li>Edge creates a new ending Keyframe and transition automatically</li>       
</ol>          
               

<h4>Adding Additional Properties</h4>

<p>With the same animation a new property can be added to the Timeline. For example:</p> 

<ol>
	<li>Drag the Playhead to the 0 second time-marker</li>
	<li>Click on the Keyframe marker for Opacity at the top of the Properties Panel</li>
	<li>A new entry for Opacity will appear under the Object so move the scrub value down to 0</li>  
    <li>Drag Playhead out to 1 second</li>
    <li>Scrub Opacity up to 100%</li>
    <li>Edge automatically creates a new additional ending Keyframe and transition</li>   
</ol>

<h4>Adding a Y-Axis and Rotation</h4>  

<p>Again with the same animation add a Y-Axis and Rotation by:</p>
              
<ol>
	<li>Grabbing the Playhead and scrubbing it to 0 seconds</li>
	<li>Then click the Keyframe marker next to the Y in "Position and Size" in the Properties Panel then under Transform by clicking "Rotate"</li>
	<li>On the Stage, grab the Object/Artwork and move it up vertically to the desired location</li>
	<li>In the Timeline a new value for Top has been created</li>
    <li>Move Playhead out to 1 second (it will go to X-Axis position set earlier)</li>
    <li>Then drag Artwork down to desired Y-Axis location at the bottom</li>
    <li>Finally, in the Timeline change value for rotate to 360&deg;</li>
    <li>Object/Artwork will now move diagonally from top-left to lower right of Stage while rotating 360&deg;</li> 
</ol>

<p>Through all of this the only Keyframe markers added were at the beginning of each step.</p>

<h3>Toggle Pin</h3>

<p>The Toggle Pin will automatically keep track of what's moving and add those movements to the Timeline:</p>

<ol>
	<li>Go to the Timeline Panel</li>
    <li>Activate the Auto Keyframe, Auto Transition, and Toggle Pin buttons:<br><br>
<img src="/dev/skeleton/images/edge/toggle-pin.png" alt="Toggle Pin" width="131" height="34"></li> 
	<li>Above the Playhead you'll see the blue Toggle Pin icon which can be moved independently of the Playhead</li>
    <li>Drag the Toggle Pin icon out to the 1 second mark</li>
    <li>Next, drag the blue box on the left out off the left border of the Stage</li>
    <li>That creates an animation automatically off from the left to the original position of the blue box at the start</li>
    <li>Keep the red box off Stage at the left and now move the red box just off the Stage on the right</li>
    <li>Now both shapes appear from off Stage on either side and meet in the middle</li>
</ol>

<h4>Adding Additional Properties Using the Toggle Pin</h4>

<ol>
	<li>Move Playhead to 0 second mark</li>
    <li>Shift-select each shape</li>
    <li>Go up to Properties Panel and reduce Opacity to zero</li>
    <li>When playback is enabled the Opacity is added back to 100% during the duration of the animation without having to manually add any Keyframes</li>
    
</ol>

<h4>Toggle Pin Used in Reverse</h4>

<ol>
	<li>In the existing animation, with the Toggle Pin enabled move the Playhead out to 2 seconds</li>
    <li>Drag the blue box just inside the left edge of the Stage and the red box just inside the right edge of the Stage</li>
    <li>Turn off Toggle Pin and press play</li>
</ol>

<p>To summarize, (from Chris Grover) the Toggle Pin allows us to work with a composition for where we want our animation to resolve but still work at the 0-second time marker and be able to see into the future to where all of those animated elements are going to end up. Saves an incredible amount of time because typically animation projects work backwords from the original composition to the areas where we start our animations from.</p>


<h4>Easing</h4>

<p>By using Easing more realistic movement effects can be added to animated objects. By default movement effects are set to linear so the movement across all segments of time is always the same so Easing helps avoid that.</p>

<p>To add an Easing effect:</p>

<ol>
	<li>In the Timeline, select the entire transition for the Left value of the red and blue squares</li>
	<li>Click on Easing button next to the Toggle Pin icon</li>
	<li>Select Ease Out > Bounce</li>
	<li>Both squares will now meet in the middle and bounce off each other</li>
	<li>Or different Easing effects can be added to each square as desired</li>
</ol>
             
<h4>Animating with Clipping Tool and Background Position</h4>
<p><strong>Part 1:</strong></p>

<ol>
	<li>Put Artwork on Stage</li>
	<li>Turn on Auto-Keyframe, Auto-Transition, and Toggle Pin buttons</li>
	<li>Go to Stage and select Artwork</li>
	<li>Go to top panel and select Clipping-Tool icon (highlight to Artwork on Stage will turn green)</li>
	<li>Next go to Timeline and select the Toggle Pin and drag it out to 1 second</li>
	<li>Go back to Stage and grab bottom of clip and drag it to the top (Artwork on Stage will be covered with grey). The Toggle Pin will have created</li>
	<li>The Toggle Pin will have created a transition automatically in the timeline and when played back the Artwork will be revealed vertically over 1 second</li>
	</ol>
<p><strong>Part 2:</strong></p>
<ol>
  <li>Start over with transitions deleted and Artwork selected with Clipping tool</li>
  <li>Turn on Auto-Keyframe, Auto-Transition, and Toggle Pin buttons</li>
  <li>Drag Toggle Pin out to 1 second</li>
  <li>Go to Stage, grab circle indicator in center of Artwork and shift-drag it out of view to the right</li>
  <li>In the Timeline a new transition has been created automatically for the Background Position</li>
  <li>Drag Playhead back and forth to see the reveal that's been created</li>
  </ol>
<h4>Combining Transformations</h4>
<p>The Transform Tool allows multiple CSS properties to be edited at once:</p>
<ol>
  <li>Go to Assets, drag Artwork (red apple) onto Stage</li>
  <li>Next, go to Timeline and disable Auto-Keyframe,  Auto-Transition, and Toggle Pin buttons</li>
  <li>On Stage select the Artwork then go to top left Panel and select the Transform Tool (Q) [next to arrow icon]</li>
  <li>Back in the Artwork grab the registration mark in the center and drag it to the lower right of the apple</li>
  <li>On Timeline select Auto Keyframe and Auto Transition buttons</li>
  <li>Reselect apple then click Keyframe icon in the Transform section of Properties Panel</li>
  <li>On Timeline drag the Playhead out to 2 seconds and change the Rotate property to 95&deg;</li>
  <li>Next, drag the Playhead out to 3 seconds and change Rotation property to 75&deg;</li>
  <li>In the Timeline, select the segment from 95&deg; to 75&deg; (between the 2 and 3 second marks) and go to Easing button and select Ease Out &gt; Quad(ratic) and review</li>
  <li>Drag Playhead back to 0 mark, make sure apple is selected, go to Properties and select Y-Axis Keyframe marker under Position and Size then on the Stage use the down arrow key to align the bottom of the apple with the bottom of the Stage</li>
  <li>With the apple selected on the Stage move the Playhead out in small increments and any time the apple creates a vertical gap above or below the bottom of the Stage use the cursor keys to nudge it back down or up as needed</li>
  <li>Next drag the Playhead out to 1.4 seconds or so then drag a guide to the center of the apple</li>
  <li>Select the apple and nudge it to the left with the cursor key. A new row for Left will appear in the Timeline so continue to drag the Playhead a little further down and repeat as needed left or right while the apple rolls down </li>
  <li>This is used so that the apple moves while it also rolls to provide a little more realism</li>
  <li>Finally, to shorten the animation for realism, in the Timeline select the Roll-up section (top bar) for the apple layer, grab the right edge and drag it back to 1.25 or 1.5 seconds as needed</li></ol>
<h4>Working With Sprite Animations <span class="note">(to use in Slot Machine?)</span></h4>
<p>Sprite sheets can be used for animations as well. For example, the apples in this sprite sheet are spaced 100px apart:</p>
<ol>
  <li>Drag apple sprite to center of Stage</li>
  <li>With sprite selected click the Clipping Tool icon in top left panel, selected Artwork in Stage will have green highlight, grab right hand side and drag to the left down to 100px (exact input can be made by going to the &quot;Clip&quot; section in the Properties panel</li>
  <li>Go back to Stage, select Artwork, click Transform Tool in top panel, and shift-drag registration point to center of apple on the left</li>
  <li>Go back to toolbar and select arrow then select Artwork in Stage and shift-drag to center of Stage</li>
  <li>Click on Timeline panel and uncheck Auto-Transition Mode but keep Auto-Keyframe button depressed</li>
  <li>Select Artwork back on Stage, go to Image tab in Properties panel and select Keyframe marker icon for X&amp;Y, Background Position now shows up in Timeline panel</li>
  <li>Drag Playhead out to .25 seconds then go back to Image tab in Properties and drag X to -100px</li>
  <li>Next drag Playhead out to .5 seconds then go back to Image tab in Properties and drag X to -200px</li>
  <li>Repeat for .75, 1, 1.25 seconds with Playhead while each time subtracting an additional -100 pixels from the X value after each increment (1.25 should be -500px)</li>
  <li>Preview and an animation plays in place</li>
</ol>

<!-- 6. Making Adjustments to Animations -->


<h3>Making Adjustments to Animations</h3>

<h4>Adjusting an Existing Animation</h4>
<p>Additional animations can be added to exisiting animations. In this example we'll work with the falling apple animation to start:</p>

<ol>
	<li>With <strong>Auto-Keyframe</strong> and <strong>Auto-Transition</strong> selected, select apple and shift-drag to constrain direction to vertical so that only the bottom half of the apple is visible at the top of the Stage</li>
	<li>Drag Playhead to 2 second mark and use Down cursor to bottom-align apple to Stage</li>
	<li>Drag Playhead back to 0 seconds and to add another Keyframe marker, right-click apple and select Add Keyframe &gt; Opacity, then in the Timeline scrub Opacity down to 0%</li>
	<li>Grab Playhead and drag out to 1 second mark and scrub Opacity up to 100%</li>
	<li>Next, in the Timeline grab the entire transition for Top, click <strong>Easing</strong> icon and choose Ease Out &gt; Bounce</li>
	<li>To add rotation, drag Playhead back to just after the first apple bounce (about .75 seconds) and turn <strong>Auto-Transition</strong> off</li>
	<li>Select apple on Stage and under Transform tab in Properties click Rotate keyframe marker and set to 5&deg;</li>
	<li>Drag Playhead to 0 seconds and set Rotation to 0&deg;</li>
	<li>Then move Playhead to just after the 2nd bounce (about 1.5 seconds mark) and set Rotation to -5&deg;</li>
	<li>Then drag Playhead to the end and set Rotation to 0&deg;</li>
	<li>Since no Transitions were added for the apple Rotations, right-click the final Rotation keyframe and select &quot;Create Transition&quot;</li>
	<li>Finally, to shorten the animation for realism, in the Timeline grab the top transition (Roll-up) for apple and grab the right edge of the segment and drag everything to the 1 second mark</li>
</ol>

<h4>Moving an Animation Without Adding Keyframes</h4>

<ol>
	<li>Move the cursor to the end of the animation</li>
	<li>Turn off <strong>Auto-Transition</strong>, <strong>Auto-Keyframe</strong>, and <strong>Toggle Pin</strong></li>
	<li>Move the Artwork to the desired place on the screen and replay</li>    
</ol>

<h4>Copying and Pasting Animation Properties</h4>

<ol>
	<li>A file with an existing animation is required</li>
	<li>From Library, add new object to Stage</li>
	<li>Click on <strong>Roll-up Bar</strong> of existing animated object (top bar)</li>
	<li>Command/Ctrl-C</li>
	<li>Select new Artwork on Stage and hit Command/Ctrl-V</li>
	<li><span class="note">On the timeline, the applied animation starts by default <em>after</em> the copied animation but can be dragged back by selecting the roll-up bar so they play at the same time</span></li>
</ol>
<h4>Changing Artwork on Existing Animation</h4>

<ol>
	<li>Select existing animation on Stage</li>
	<li>Go to Image Panel</li>
	<li>Click "Change Image Source" button on right of image file line and double click a different image from the Library (Artwork must already be in the Library for this to work)</li>
    <li>New Artwork appears on the Stage</li>        
</ol>
                    
<p><strong>To edit the size of the new Artwork without altering the animation:</strong></p>

<ol>
	<li>Go to Timeline</li>
	<li>Turn <em>off</em> <strong>Auto-Transition</strong>, <strong>Auto-Keyframe</strong>, and <strong>Toggle Pin</strong></li>
	<li>Select updated Artwork and add a new height or width properties in the "Position and Size" tab of the Properties panel</li></ol>                    
                    
<h4>Looping an Animation</h4>

<ol>
	<li>Grab the Playhead and move it to the desired time (3 seconds for this example) out beyond the end of the animation</li>
	<li>Go to the Actions row at the top of the timeline and click on the Insert Trigger icon on its right-hand side</li>
	<li>In the new Trigger window, select the Play button (or handcode the proper JS)</li>
	<li>For this animation, when the browser gets to 3 seconds it will replay the animation</li>
    <li>Once a JS action is created by a Trigger, the Trigger can be dragged anywhere left or right on the Timeline</li>
    <li>To make the animation smoother drag the Playhead to the 2.5 second mark and insert a Keyframe for Opacity at 100% then drag the Playhead to 2.75 seconds and reduce Opacity to 0%</li>     
</ol>

<p class="note">Since Edge doesn't execute JS in Preview Mode, preview it in a browser to review (Command/Ctrl + Return)</p>

<!-- 7. Working With Symbols -->


<h3>Working With Symbols</h3>

<h4>Creating a Symbol</h4>

<p>Symbols can be created by combining assets from the Library on the Stage.</p>

<ol>
	<li>From Assets, drag a red apple and green apple onto the Stage</li>
	<li>Select the desired assets and right-click and select "Convert to Symbol"</li>
	<li>Next, name the symbol then it will appear in the Symbols group in the Library Panel</li>
	<li>A duplicated symbol is called an <strong>Instance</strong> (visible in the Timeline) and if the parent Symbol is edited in Isolation Mode, then all child intances will also receive those edits, although they can be scaled differently from the Stage</li>        
</ol>

<p class="note">Symbol animations can also be duplicated</p>

<h4>Creating a Symbol from an Existing Animation</h4>
<p>This makes use of the Lynda example file from Edge Animate Essential Training (7.2 - Creating Animated Symbols)</p>
<ol>
  <li>At 1 second mark click on apple, right-click &gt; Convert to Symbol...</li>
  <li>Name the new symbol <em>animated-apple</em> and hit return</li>
  <li>If you go over to the Symbols tab and double-click the animated-apple symbol icon an editing instance will open up and you'll see a separate Timeline dedicated to just the <em>animated-apple</em> symbol. Click back to Stage</li>
  <li>If the <em>animated-apple</em> symbol is cloned it will have the same animation playing, even after editing the symbol animation</li>
</ol>

<h4>Controlling Symbol Playback</h4>
<p>This is useful for overriding the embedded timing in an animated symbol directly from the Timeline. This makes use of the Lynda example file from Edge Animate Essential Training (7.3 - Controlling Symbol Playback):</p>
<ol>
  <li>At 1 second mark in the Timeline select Roll-up bar for apple or go to Stage and select apple, then right-click and select Convert to Symbol...</li>
  <li>Name symbol <em>animated-apple</em></li>
  <li>Go back to Timeline and you'll see that a <strong>Playback</strong> sub-layer (with a button) has been created in the <em>animated-apple</em> layer this allows us to control the playback of the Symbol to start or stop it over the Timeline
    <ol>
      <li>The Playback button contains the following features: 
        <ol>
          <li>"Play" or "Play From..."</li>
          <li>"Play Reverse" or "Play Reverse From..."</li>
          <li>"Stop" or "Stop At..."</li>
          </ol>
        </li>
      </ol>
  </li>
  <li>Now drag the Playhead back to 0 and then on the Stage, select the text for &quot;An apple a day...&quot; and turn <em>on</em> <strong>Auto-Keyframe</strong> and <strong>Auto-Transition</strong> buttons</li>
  <li>Go to Opacity, activate keyframe marker and scrub value to 0%</li>
  <li>Scrub the Playhead out to 1 second and turn Opacity up to 100%</li>
  <li>Now go to the Playback sub-layer under the <em>animated-apple</em> layer and choose &quot;Stop&quot; and a 'stop' action icon will show up on the Playback sub-layer at the 0 second mark</li>
  <li>Grab the Playhead and scrub it out to .75 seconds</li>
  <li>Go back to Playback sub-layer and chose &quot;Play&quot;</li>
  <li>Note that in the Timeline the encapsulated <em>animated-apple</em> symbol animation starts playing at .75 seconds (as opposed to at the 0 second marker) and plays for 1 second, pushing the Timeline out to 1.75 seconds</li></ol></div><!-- Close twelve columns offset-by-one content -->
               
</div><!-- Close .container div -->
 
<!-- Note: To clear columns (both nested and just stacked columns right inside the
.container, you can give the parent a class of "clearfix," wrap each row of columns in a
"<div class='row'>" or follow the last column in a row with a "<br class='clear'>." They
all work and it's up to your personal preference. -->
    

<!-- End Document ================================================== -->
</body>
</html>