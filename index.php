<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>JAWS Converter</title>
	<meta name="description" content="Description Here">
	<meta name="author" content="Matthew Wilber">
	<meta property="og:title" content="JAWS Converter" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://jawsconverter.herokuapp.com" />
	<meta property="og:image" content="https://jawsconverter.herokuapp.com/images/fp_icon.png" />
	<meta property="og:site_name" content="JAWS Converter" />
	<meta property="fb:admins" content="631337813" />
	<meta property="og:description" content="Description Here" />

	<meta name="viewport" content="width=800,initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.facebook.multifriend.select.css" />

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	
	<script type="text/javascript" src="js/config.js"></script>
	
</head>
<body>
<div id="container">
	<img class="sharkcache" src="images/JAWS200.png"/>
	<img class="sharkcache" src="images/JAWS100.png"/>
	<div id="aboutbox">
		<a id="btnclose" href="#"><img src="images/btn_close.png"/></a>
		<h2>About JAWS Converter</h2>
		<div id="about" class="scroll-pane">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue elit, in pulvinar nibh. Nullam porttitor mattis metus non interdum. Morbi vehicula risus sit amet libero condimentum sit amet ultrices nunc ornare. Proin nec risus non metus fringilla hendrerit. Nullam ipsum ligula, convallis tristique egestas eu, condimentum elementum lectus. Pellentesque consequat nisi et elit bibendum feugiat imperdiet lorem mattis. Pellentesque libero magna, aliquam non congue in, consectetur sit amet mauris. Praesent tristique orci lacus. Sed ut venenatis tellus. Vivamus nec libero sed erat venenatis tristique. Nunc feugiat diam non tellus fringilla imperdiet. Integer facilisis sollicitudin iaculis.</p>
			<p>Nullam eget hendrerit massa. Donec mattis diam a nibh condimentum quis sollicitudin velit placerat. Nam vitae lectus at dui consectetur dapibus et nec lorem. Nulla vulputate mauris a turpis fermentum eu commodo mauris porta. Mauris hendrerit erat et eros pretium vel ultrices arcu sollicitudin. Nulla sed est justo. Nunc iaculis lorem scelerisque purus mollis vestibulum. Cras a mi eget erat consectetur sollicitudin. Vestibulum lacus nunc, viverra sed dignissim placerat, aliquam vitae erat. Donec rutrum molestie nunc, at tincidunt libero interdum sit amet. Sed ac odio purus, elementum commodo felis.</p>
		</div>
	</div>
	<header>
		<img src="images/logo.png" alt="JAWS CONVERTER"/>
	</header>
	<div id="main" role="main">
		<!--! begin app content -->
		<div id="menubar">
			<div>
				<span>SHARE:</span>
				<a id="tweeters" href="#"><img src="images/btn_tw.png"/></a>
				<a id="facebook" href="#"><img src="images/btn_fb.png"/></a>
				<a id="googleplus" href="#"><img src="images/btn_gp.png"/></a>
				<a id="info" href="#"><img src="images/btn_info.png"/></a>
			</div>
		</div>
		<form id="frmmeasure">
			<select id="measureUnit">
				<option value="feet">Feet</option>
				<option value="meters">Meters</option>
			</select>
			<input id="measureSource" type="text" value="100"/>
			<input id="measureConvert" type="submit" value="Convert"/>
		</form>
		<div id="viewport">
			<div id="sharktank">
			</div>
		</div>
		<div id="result"></div>

		<!--! end app content -->
	</div>
	<div id="fb-root"></div>
	<div id="jfmfs-dialog">
		<a href="#" class="button" onclick="$(this).parent().hide(); return false;">Close</a>
		<label>Message:</label><textarea id="jfmfs-message"></textarea>
		<div id="jfmfs-container"></div>
		<button id="jfmfs-post" class="button">POST</button>
	</div>
</div> <!--! end of #container -->
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>


<!-- the mousewheel plugin -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

<script src="js/script.js"></script>
<script src="js/fb.js"></script>
<script type="text/javascript" src="js/libs/jquery.facebook.multifriend.select.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-76054-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>