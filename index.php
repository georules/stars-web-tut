<?include "header.php"?>

<div class="container">
  <div class="row">
    <div class="span3 sidebar datsidebar">
      <ul class="well2 nav nav-list sidenav affix" data-spy="affix" data-offset-bottom="250" data-offset-top="41">
          <li class="nav-header">FSU STARS Web Coding</li>
          <li><a href="#start">Getting Started</a></li>
          <li class="nav-header">Making Boxes and Circles</li>
          <li><a href="#divs">Making Boxes</a></li>
          <li><a href="#marpad">Margin and Padding</a></li>
          <li><a href="#borders">Adding Borders</a></li>
          <li><a href="#columns">Side by Side Boxes</a></li>
          <li><a href="#rounding">Rounding the Corners</a></li>
          <li class="nav-header">Fonts and Colors</li>
          <li><a href="#fonts">Choosing Fonts</a></li>
          <li><a href="#colorcode">Color Codes</a></li>
          <li><a href="#colorweb">Color Palettes</a></li>
          <li><a href="#usingcolors">Using Colors</a></li>
          <li class="nav-header">Images</li>
          <li><a href="#upimg">Uploading Images</a></li>
          <li><a href="#useimg">Using Images</a></li>
          <li class="nav-header">Making a Page</li>
          <li><a href="#basiclayout">A Basic Web Page</a></li>
          <li><a href="#write">Write Content</a></li>
          <li><a href="#fontscolors">Fonts and Colors</a></li>
					<li class="nav-header">Do More</li>
					<li><a href="#domore">More things to Do</a></li>
      </ul>
    </div>

<div class="span9 content">

<div class="page-header">
<h1>FSU STARS</h1>
<h3>Web Code Camp</h3>
</div>

<div id="start" class="row-fluid">
<h3>Getting Started</h3>
<p><ol><li>Click the magnifying glass in the top right of the screen.</li>
<li>Type in textedit.</li><li>Click the textedit program to open it.</li></ol></p>
<img src="img/textedit.png"><br><br>
<p>We will copy in links to our websites into this text editor to save them.</p>

<p>Ask nearby helpers when you have questions!</p>
</div>

<div class="page-header"><h2>Making Boxes and Circles</h2></div>

<div id="divs" class="row-fluid">
<h3>Making Boxes</h3>
<p>Boxes are made on webpages using a "div tag". A divider (div) is a section of a page that makes a box.  Boxes can have widths and heights, borders, margins, and paddings.</p>
<img src="img/box-model.gif">
<p>To decide what a box should look like, you need to give it a class name in HTML (HyperText Markup Language).  That class name is styled in CSS (Cascading Style Sheets).</p>
<p>Open this website to see HTML and CSS code.  <a href="http://cssdesk.com/zbTNh" target="_blank">CSS Desk Hello World<img src="img/link.png"></a> you can edit HTML/CSS and see the result of your code instantly.</p>
<img src="img/cssdesk1.png">
</div>

<div id="marpad" class="row-fluid">
<h3>Margin and Padding</h3>

<p>On the CSS Desk Hello World page, you can see that margin and padding is styled for the class ".hello".  This is done by selecting a certain number of pixels that you want for margin and padding.</p>
<p>Margins and Paddings are styled by choosing the number of pixels to have on the top, right, bottom, and left sides of the box.</p>
<ol>
<li>Add another div with a class of 'goodbye' into the HTML, and make it say Goodbye World!</li>
<blockquote>&lt;div class=&quot;goodbye&quot;&gt;Goodbye World!&lt;/div&gt;</blockquote>
<li>Notice that you can't even see this box, it just sits on the blue background, without any styling of its own.  Let's style the class '.goodbye'!</p>
<li>Add another class called '.goodbye' into the CSS with these styles:</li>
<blockquote>.goodbye { <br>
&nbsp;&nbsp;background:#CC4444;<br>
&nbsp;&nbsp;margin: 40px;<br>
&nbsp;&nbsp;padding: 100px;<br>
&nbsp;&nbsp;text-align:center;<br>
}</blockquote>
<li>This box used just one margin pixel number and one padding pixel number to specify what margin and padding to have all around the box.  It's a shortcut so that you don't have to specify the top, right, bottom, left every time if you want these numbers to be the same</li>
<li>Choose a margin and padding you like for these boxes.</li>
</ol>
</div>

<div id="borders" class="row-fluid">
<h3>Adding Borders</h3>
<p>Borders can be added to boxes.  Try this border for the '.hello' class.</p>
<blockquote>border: 5px solid #000000;</blockquote>
<p>The border has how many pixels large it should be, what kind of border, and then a color.  We will talk about color codes later.</p>
<p>Try some different border types and different sizes for the borders.</p>
<ul><li>solid</li><li>dotted</li><li>dashed</li><li>double</li></ul>
</div>

<div id="columns" class="row-fluid">
<h3>Side by Side Boxes</h3>
<p>So far, you might have noticed all of these boxes are on top of each other.  You can make boxes side-by-side by setting thier width and floating them.</p><p>Check out this <a href="http://cssdesk.com/g8pJp" target="_blank">CSS Desk on Side by Side boxes <img src="img/link.png"></a></p>
<p>The box1 class has a width and height of 100 pixels, and are floating to the left.  Try spacing out these boxes with margin and padding.  Try floating them to the right.  Try making more boxes!</p>
</div>

<div id="rounding" class="row-fluid">
<h3>Rounding the Corners</h3>
<p>All websites are actually a bunch of boxes, styled with colors, rounded corners, and images.</p>
<ol><li>Make a new class called '.rounded' in the CSS.</li>
<blockquote>.rounded { <br>
&nbsp;&nbsp;border-radius: 25px;<br>
}</blockquote>
<li>Add the circle class to some of your divs.</li>
<blockquote>&lt;div class=&quot;box rounded&quot;&gt;</blockquote>
<li>Choose an amount of rounding that you like by changing the px for border-radius.</li>
</ol> 

<h4>Making Circles</h4>
<p>How do you make a circle out of a box?  You round the corners <em>a lot</em>!</p>
<ol><li>Make a new class called '.circle' in the CSS.</li>
<blockquote>.circle { <br>
&nbsp;&nbsp;width: 100px;<br>
&nbsp;&nbsp;height: 100px;<br>
&nbsp;&nbsp;border-radius: 25px;<br>
&nbsp;&nbsp;text-align:center;<br>
}</blockquote>
<li>Add the circle class to some of your divs.</li>
<blockquote>&lt;div class=&quot;box circle&quot;&gt;</blockquote>
<li>This doesn't look like a circle just yet -- increase the border-radius until you have a circle!</li>
</ol> 
</div>

<?include "save.php"?>

<div class="page-header"><h2>Fonts and Colors</h2></div>

<div id="fonts">
<div class="row-fluid">
<h3>Choosing Fonts</h3>
<p>There are three main types of fonts: <span style="font-family:serif;font-size:150%"><strong>Serif</strong>,</span> <span style="font-size:150%;font-family:sans-serif"><strong>Sans-Serif</strong>,</span> and <span style="font-size:150%;font-family:monospace"><strong>Monospace</strong></span>.  Check them out at this <a href="http://cssdesk.com/4Ft8K" target="blank">CSS Desk on Fonts! <img src="img/link.png"></a></p>
<p>There are only so many fonts that <a href="http://www.w3schools.com/cssref/css_websafe_fonts.asp" target="_blank">all web browsers have. <img src="img/link.png"></a>.  If you want to use other fancy fonts, there are websites like the <a href="http://www.google.com/fonts/" target="_blank">Google Fonts website <img src="img/link.png"></a> that will show you how to use more varied fonts.</p>

<ol><li>What kind of font is this website is using?</li><li>What kind of fonts do websites you usually go to use?</li><li>What is your favorite font from the Google Fonts website?</li></ol> 
</div>

<div class="row-fluid">
<p>Let's use some cool fonts.</p>
<ol>
<li>Open up <a href="http://cssdesk.com/yz5TS" target="_blank">CSS Desk for My Favorite Fonts <img src="img/link.png"></a></li>
<li>Choose some fonts that you like from the Google fonts website.  Use the fonts on the boxes given and make more boxes with fonts you like.  You can make as many classes and boxes as you like.</li>

<div class="row-fluid">
<div class="span12 well">
<div class="span3">
<p>1.  To use a fancy Google Font, find a font you like and then click the arrow pointing to the right.</p>
<img src="img/fontbutton.png">
</div>
<div class="span8">
<p>2.  Then, copy the link code to the top of the HTML section of your CSS Desk page.</p>
<img src="img/fontlink.png">
</div>
<div class="span8">
<p>3.  Finally, copy the font-family code into a class in the CSS section of your CSS Desk page</p>
<img src="img/fontcss.png">
</div>
</div>
</div>

<li>Try CSS codes like <blockquote>font-size:150%;</blockquote> or <blockquote>font-size:50%</blockquote> and see what happens to the font.</li>
</ol>
</div>
<?php include "save.php"?>
</div>

<div id="colorcode"> 
<div class="row-fluid">
<h3>Color Codes</h3>
<p>Colors on the web work with special hexidecimal codes.  Rather than counting from 0 to 9, a hexidecmial number counts from 0 to F.  How do you count with letters?  Like this:</p>
<h4 class="well center">0 1 2 3 4 5 6 7 8 9 A B C D E F</h4>
<p>Pretty different!  What this lets us do is count to bigger numbers with a smaller number of characters.  Color codes include how much <span style="color:red">red you want</span>, how much <span style="color:green;">green you want</span>, and how much <span style="color:blue;">blue you want</span>.  These are the primary colors of light.  They tell the pixels in your screen how bright these colors should be.</p>
<table class="table table-striped table-bordered" style="margin:0 auto">
<tr><th>Code</th><th style="color:red">Red</th><th style="color:green">Green</th><th style="color:blue">Blue</th><th>Color</th></tr>
<tr><td><a href="http://www.colorcombos.com/colors/000000" target="_blank">#000000 <img src="img/link.png"></a></td>
<td>00</td><td>00</td><td>00</td><td style="background-color:#000000"></td></tr>
<tr><td><a href="http://www.colorcombos.com/colors/FF0000" target="_blank">#FF0000 <img src="img/link.png"></a></td>
<td>FF</td><td>00</td><td>00</td><td style="background-color:#FF0000"></td></tr>
<tr><td><a href="http://www.colorcombos.com/colors/00FF00" target="_blank">#00FF00 <img src="img/link.png"></a></td>
<td>00</td><td>FF</td><td>00</td><td style="background-color:#00FF00"></td></tr>
<tr><td><a href="http://www.colorcombos.com/colors/0000FF" target="_blank">#0000FF <img src="img/link.png"></a></td><td>00</td><td>00</td><td>FF</td><td style="background-color:#0000FF"></td></tr>
<tr><td><a href="http://www.colorcombos.com/colors/FFFFFF" target="_blank">#FFFFFF <img src="img/link.png"></a></td><td>FF</td><td>FF</td><td>FF</td><td style="background-color:#FFFFFF"></td></tr>
</table>
<br>
<p>How do you get other colors like <span style="color:#DFDF44">yellow #DFDF44</span>, <span style="color:#FF1CAE">pink #FF1CAE</span>, <span style="color:#00DCDC">cyan #00DCDC</span>, <span style="color:#8B4513">brown #8B4513</span>, or <span style="color:#c0c0c0">grey #C0C0C0</span>?  <a href="http://www.colorpicker.com/" target="_blank">You mix them together! <img src="img/link.png"></a></p>
<p>There are actually over <strong><em>16 million color codes</em></strong> to choose from.</p>
</div>
</div>

<div id="colorweb">
<div class="row-fluid">
<h3>Color Palettes</h3>
<p>Choosing a group of colors which look nice together can be done by choosing a color pallet.  Use the <a href="http://colorschemedesigner.com" target="_blank">Color Scheme Designer <img src="img/link.png"></a> to choose a set of colors that you like.  Write down some hex codes that you want to remember for later.</p>
</div>

<div class="row-fluid">
<div class="span6">
<img src="img/scheme.png">
<p>Choose a grouping of colors that you like.  You do not have to make use of all of the colors the designer suggests for you.  This tool simply shows you combinations of colors that may compliement each other across the color wheel.</p>
</div>
<div class="span5">
<p>Move the dots to choose colors.</p>
<img src="img/wheel.png">
</div>
</div>
<br/>
<div class="row-fluid">
<div class="span6">
<img src="img/ccode.png" class="pull-left">
</div>
<div class="span5">
<p>See the color selections you've made.  You can also choose "light page example" and "dark page example" to see how the colors you chose might be used on a website.</p>
</div>

</div>
<br/>
<div class="row-fluid">
<p>Try some more websites to choose color palettes.  What tool do you like best?</p> 
<ol>
<li><a href="http://www.colourlovers.com/palettes" target="_blank">http://www.colourlovers.com/palettes</a></li>
<li><a href="http://www.colorcombos.com/" target="_blank">http://www.colorcombos.com/</a></li>
<li><a href="http://kuler.adobe.com" target="_blank">http://kuler.adobe.com</a></li>
</ol>
<p>Try to identify the color palettes used on websites you like.</p>  
</div>
</div>
<div id="usingcolors"> 
<div class="row-fluid">
<h3>Using Colors</h3>
<p>You can use colors to decide the color of the background of a box or the color of a font.  The background color is changed with <blockquote>background-color: #FFFFFF;</blockquote> and the font color is changed with <blockquote>color: #000000;</blockquote>  By default, background-color is #FFFFFF (white) and color is #000000 (black).</p>

<ol>
<li>Open this <a href="http://cssdesk.com/fhtRK" target="_blank">CSS Desk for Colors <img src="img/link.png"></a></li>
<li>Show off your favorite colors by creating some circle div's in HTML and then styling that circle with a color class.</li>
<li>Make a color scheme of 3-5 colors that look good togetheri under "My Color Scheme".</li>
<li>Change the color of the fonts if you cannot read the text easily for a circle.</li>
</ol>
</div>

<div class="row-fluid">
<div class="span12 well">
<div class="span5">
<p>Make more circles by copying the circle dividers.  Change thier colors by changing the color class "color1" to color2, 3, 4, ...</p>
<img src="img/csscolor.png">
</div>
<div class="span5">
<p>Make more colors by creating more color classes.  Change the color codes to colors you like.<p>
<img src="img/htmlcolor.png">
</div> 
</div>
</div>
<?include "save.php"?>
</div>

<div class="page-header"><h2>Images</h2></div>

<div id="upimg">
<div class="row-fluid">
<h3>Uploading Images</h3>
<?php include "lorem.php"?>
</div>
</div>

<div id="useimg"> 
<div class="row-fluid">
<h3>Using Images</h3>
<?php include "lorem.php"?>

</div>

<?php include "save.php"?>
</div>

<div class="page-header"><h2>Making a Page</h2></div>

<div id="basiclayout" class="row-fluid">
<h3>A Basic Web Page</h3>
<?php include "lorem.php"?>
</div>

<div id="write">
<div class="row-fluid">
<h3>Write Content</h3>
<?php include "lorem.php"?>

</div>
</div>

<div id="fontscolors">
<div class="row-fluid">
<h3>Fonts and Colors</h3>
<?php include "lorem.php"?>

</div>

<?php include "save.php"?>
</div>
<div class="page-header"><h2>Do More</h2></div>
<div id="domore" class="row-fluid">
<h3>More things to Do</h3>
<p>The following codes use JavaScript to draw and animate.  Play with them if you have more time!</p>
<p>Draw pictures with code at <a target="_blank" href="https://www.khanacademy.org/cs/tutorials/drawing">Khan Academy <img src="img/link.png"></a></p>
<p>Play with Javascript:
<ol>
<li><a href="http://tributary.io/tributary/2958568/" target="_blank">Rainbow lines</a></li>
<li><a href="http://tributary.io/inlet/2958511" target="_blank">Animated box</a></li>
<li><a href="http://tributary.io/inlet/3343586" target="_blank">Rainbow triangles</a></li>
<li><a href="http://tributary.io/inlet/5342452" target="_blank">Circle Geometries</a></li>
<li><a href="http://tributary.io/inlet/5342691" target="_blank">Circle Geometries Animated</a></li>
<li><a href="http://tributary.io/inlet/5530602" target="_blank">Lava Circles</a></li>

</ol>

</div>



<!--end-->
</div>
</div>
</div>
<?include "footer.php"?>
