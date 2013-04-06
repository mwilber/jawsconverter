<?php

	include('mobile_device_detect.php');
	
	$isMobile = false;
	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	if( mobile_device_detect() && !$isiPad ){
		header('Location: http://jawsconverter.com/mobile.html');
	}

	$social = array();
	$social['title'] = "JAWS Converter";
	$social['description'] = "Measure your world in terms of Sharks!";
	$social['image'] = "http://jawsconverter.com/images/fp_icon.png";
	$social['link'] = "http://jawsconverter.com/";

?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?=$social['title']?></title>
	<meta name="description" content="<?=$social['description']?>">
	<meta name="author" content="Matthew Wilber">
	<meta property="og:title" content="<?=$social['title']?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?=$social['link']?>" />
	<meta property="og:image" content="<?=$social['image']?>" />
	<meta property="og:site_name" content="JAWS Converter" />
	<meta property="fb:admins" content="631337813" />
	<meta property="og:description" content="<?=$social['description']?>" />
	
	<!-- Twitter Summary Card -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?=$social['title']?>">
	<meta name="twitter:description" content="<?=$social['description']?>">
	<meta name="twitter:creator" content="@greenzeta">
	<meta name="twitter:image:src" content="<?=$social['image']?>">
	<meta name="twitter:domain" content="jawsconverter.com">
	
	<!-- Twitter App Card Metadata -->


	<meta name="viewport" content="width=810">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.facebook.multifriend.select.css" />

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	
	<script type="text/javascript" src="js/config.js"></script>
	<script type="text/javascript">
		var social = [];
		social['title'] = "<?=$social['title']?>";
		social['description'] = "<?=$social['description']?>";
		social['image'] = "<?=$social['image']?>";
		social['link'] = "<?=$social['link']?>";
	</script>
	
</head>
<body>
<div id="container">
	<img class="sharkcache" src="images/JAWS200.png"/>
	<img class="sharkcache" src="images/JAWS100.png"/>
	<div id="aboutbox">
		<a id="btnclose" href="#" onclick="return false;"><img src="images/btn_close.png"/></a>
		<h2>About JAWS Converter</h2>
		<div id="about" class="scroll-pane">
			<p><strong>Update: </strong> The JAWS system has been expanded to include weight measurement. 1 JAWS is roughly equivalent to 3 tons or 6000 pounds.<br/></p>
			<p>Using length of the shark from the movie &ldquo;JAWS&rdquo; as the base unit, everything in the universe can be measured in terms of JAWS. The JAWS system was first proposed by Writer/Director/Podcaster Kevin Smith of <a href="http://smodcast.com/" target="_blank">Smodcast.com</a> as a superior method of visualizing distances. 1 JAWS is roughly equivalent to 25 feet (7.5 meters). The JAWS system is best used for measuring the expanse between two travel-able points, such as the distance one must swim to reach the safety of shore while pursued by a man-eating shark.</p>
			<p>Informal use of the JAWS system includes parts of the fish to reference increments of the JAWS unit. For example 1.3 JAWS may be referred to as &ldquo;A JAWS and a head.&rdquo; Smaller units include &ldquo;a fin&rdquo;, &ldquo;a tail&rdquo; and &ldquo;a tooth&rdquo;. These terms, though used often, are not part of the official measurement system. JAWS may also be used as a method of converting imperial to metric units, such as feet to meters but is not recommended.</p>
			<p>JAWS Converter was created by Internet software developer Matthew Wilber. For more information, visit <a href="http://www.mwilber.com" target="_blank">mwilber.com</a>.</p>
		</div>
	</div>
	<header>
		<div id="likegroup">
		<div class="fb-like" data-href="<?=$social['link']?>" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>
		<g:plusone size="medium" href="<?=$social['link']?>"></g:plusone>
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=$social['link']?>" data-text="JAWS Converter - Measure your world in terms of Sharks!" data-hashtags="JAWS">Tweet</a>
		</div>
		<img src="images/logo.png" alt="JAWS CONVERTER" width="706" height="262"/>
	</header>
	<div id="main" role="main">
		<!--! begin app content -->
		<div id="menubar">
			<div>
				<span>SHARE:</span>
				<a id="tweeters" href="#" onclick="return false;"><img src="images/btn_tw.png" alt="Tweeters"/></a>
				<a id="facebook" href="#" onclick="return false;"><img src="images/btn_fb.png" alt="facebook"/></a>
				<a id="googleplus" href="#" onclick="return false;"><img src="images/btn_gp.png" alt="google plus"/></a>
				<a style="margin:-2px 20px;" href="https://play.google.com/store/apps/details?id=com.greenzeta.greenzeta.jawsconverter" target="_blank"><img src="images/playstore.png" style="height:40px;"/></a>
				<a id="info" href="#" onclick="return false;"><img src="images/btn_info.png" alt="info"/></a>
			</div>
		</div>
		<form id="frmmeasure">
			<select id="measureUnit">
				<option value="feet">Feet</option>
				<option value="meters">Meters</option>
				<option value="pounds">Pounds</option>
				<option value="kilograms">Kilograms</option>
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
	<a id="addtopage" href="#" onclick="AddToPage(); return false;" style="float:left; margin: 10px 60px; text-decoration:none; font-family: sans-serif; font-weight:bold;">Add To Your Facebook Page</a>

	<footer>
		<a style="float:left; width:auto;" href="https://play.google.com/store/apps/details?id=com.greenzeta.greenzeta.jawsconverter" target="_blank"><img src="images/playstore.png" style="height:45px;"/></a>
		<a style="float:left; width:auto;" href="https://chrome.google.com/webstore/detail/lbaefopnbomfajgakfbmoejkinmgcjed" target="_blank"><img src="images/chromestore.png" style="height:45px;"/></a>
  		<a id="gzlink" href="http://www.greenzeta.com" target="_blank">A GreenZeta Production</a>
 	</footer>
	<div id="fb-root"></div>
	<div id="jfmfs-dialog">
		<a href="#" class="button" onclick="$(this).parent().hide(); return false;">Close</a>
		<label>Message:</label><textarea id="jfmfs-message"></textarea>
		<div id="jfmfs-container"></div>
		<button id="jfmfs-post" class="button">POST</button>
	</div>
</div> <!--! end of #container -->
<script type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
  _gaq.push(['_setAccount', 'UA-76054-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<!--[if lt IE 8 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>