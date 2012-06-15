/* Author: Matthew Wilber mwilber@gmail.com

*/

/////////////////////////////////////////////////////////////////////////////
//	Event Handlers
/////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
	
	FB.init({appId: FBconfig.app.id, status : true, cookie: true, xfbml : true});
	SetFrame();
	
	$('#btnclose').click(function(){$('#aboutbox').fadeOut();});
	$('#info').click(function(){
		$('#aboutbox').fadeIn();
		$('.scroll-pane').jScrollPane(
			{
				showArrows: false,
				verticalGutter: 15
			}
		);
	});
	
	$('#measureConvert').click(UnitConvert);
	$('#frmmeasure').submit(UnitConvert);
	
});

$('body').bind('AuthorizedUser', function(event, authObj) {
	fb_auth.id = authObj.authResponse.userID;
	fb_auth.token = authObj.authResponse.accessToken;
	
	if( fb_auth.id != '' && fb_auth.token != ''){
		DebugOut('FB User logged in:');
		DebugOut(fb_auth);
	}
});

$('body').bind('UnauthorizedUser', function() {
	DebugOut('FB User NOT logged in. Try calling Login() method:');
	DebugOut(fb_auth);
});

$('body').bind('LikeStatus', function(event, pLikeStatus) {
	if(pLikeStatus){
		//user likes target
		DebugOut('user likes target');
		window.location = FBconfig.likegate.redirect;
	}else{
		//user does not like target
		DebugOut('user does not like target');
		window.location = FBconfig.likegate.gatepage;
	}
});

function UnitConvert(){
	
	DebugOut('converting');
	var result = '';
	var JAWSlen = 0;
	var JAWSimages = 0;
	var ftLen = 0;
	var sourceLen = $('#measureSource').val();
	
	// sanitize input
	sourceLen = parseInt(sourceLen, 10);
	// Handle non-numeric input as zero
	if( isNaN(sourceLen) ) sourceLen = 0;
	
	DebugOut('sourceLen: '+sourceLen);
	
	// Convert other units
	switch($('#measureUnit').val()){
		case "meters":
			ftLen = Math.round(sourceLen / .3048 * 100) * .01;
			break;
		default:
			ftLen = sourceLen;
			break;
	}
	DebugOut('ftLen: '+ftLen);
	
	// SourceLen must been in feet at this point
	JAWSlen = Math.round((ftLen / 25)*10)/10;
	
	DebugOut('JAWSlen: '+JAWSlen);
	
	// Insert the jaws images
	JAWSimages = Math.ceil(JAWSlen);
	DebugOut('JAWSimages: '+JAWSimages);
	
	var JAWSscale = 600/(200*JAWSlen);
	var JAWSwidth = 200*JAWSscale;
	DebugOut('JAWSwidth: '+JAWSwidth);
	
	if( JAWSscale > 1 ){
		JAWSscale = 1;
		JAWSwidth = 200*JAWSscale;
		$('#viewport').css('width',JAWSwidth*JAWSlen).css('marginLeft',((620-(JAWSwidth*JAWSlen))/2));
	}else{
		$('#viewport').css('width',600).css('marginLeft',10);
	}
	
	$('#sharktank').html('').css('width',JAWSwidth*JAWSimages);
	for( idx=1; idx <= JAWSimages; idx++ ){
		$('#sharktank').prepend('<img src="images/JAWS200.png" width="'+JAWSwidth+'" height="'+(66*JAWSscale)+'"/>')
	}
	
	result = sourceLen + " " + $('#measureUnit').val().charAt(0).toUpperCase() + $('#measureUnit').val().slice(1) + " = " + JAWSlen+" JAWS";
	
	$('#result').html(result);
	
	return false;
}

/////////////////////////////////////////////////////////////////////////////
//	Utility Functions
/////////////////////////////////////////////////////////////////////////////

// If the browser has a console, write to it.
function DebugOut(newline){
	try{
		if (typeof console == "object"){ 
			console.log(newline);
		}
	}catch(err){
		
	}
	
}

// Open a popup centered on the screen.
function openpopup(url,name,width,height)
{
	// Set up the window attrubutes
	var attributes = "toolbar=0,location=0,height=" + height;
	attributes = attributes + ",width=" + width;
	var leftprop, topprop, screenX, screenY, cursorX, cursorY, padAmt;
	
	// Get the clients screen size
	if(navigator.appName == "Microsoft Internet Explorer") {
		screenY = screen.height;
		screenX = screen.width;
	}else{
		screenY = window.outerHeight;
		screenX = window.outerWidth;
	}
	
	// Set the x/y position relative to the center of the screen
	leftvar = (screenX - width) / 2;
	rightvar = (screenY - height) / 2;
	if(navigator.appName == "Microsoft Internet Explorer") {
		leftprop = leftvar;
		topprop = rightvar;
	}else {
		leftprop = (leftvar - pageXOffset);
		topprop = (rightvar - pageYOffset);
	}
	attributes = attributes + ",left=" + leftprop;
	attributes = attributes + ",top=" + topprop;

	// Open the window
	window.open(url,name,attributes)
}

