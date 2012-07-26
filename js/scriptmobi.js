/* Author: Matthew Wilber mwilber@gmail.com

*/

/////////////////////////////////////////////////////////////////////////////
//	Event Handlers
/////////////////////////////////////////////////////////////////////////////


$(document).ready(function(){
	
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
	
	$('#facebook').click(function(){
		var url = "http://www.facebook.com/sharer.php?u="+escape(social['link']);
		openpopup(url,'gplus',550,450);
	});
	
	$('#tweeters').click(function(){
		var twcontent = escape(social['title'])+" - "+escape(social['description'])+" "+escape(social['link']);
		openpopup('http://twitter.com/home?status='+twcontent,'tweeters',550,450);
	});
	
	$('#googleplus').click(function(){
		var url = "https://plus.google.com/share?url="+escape(social['link']);
		openpopup(url,'gplus',550,450);
	});
	
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
			// SourceLen must been in feet at this point
			JAWSlen = Math.round((ftLen / 25)*100)/100;
			break;
		case "pounds":
			//Convert to tons
			ftLen = sourceLen * 0.0005;
			JAWSlen = Math.round((ftLen / 3)*100)/100;
			break;
		case "kilograms":
			// Convert to pounds
			ftLen = sourceLen * 0.4535923744953;
			//Convert to tons
			ftLen = ftLen * 0.0005;
			JAWSlen = Math.round((ftLen / 3)*100)/100;
			break;
		default:
			ftLen = sourceLen;
			// SourceLen must been in feet at this point
			JAWSlen = Math.round((ftLen / 25)*100)/100;
			break;
	}
	DebugOut('ftLen: '+ftLen);
	
	
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
	
	_gaq.push(['_trackEvent', 'Convert', 'clicked', '\''+JAWSlen+'\'']);
	
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

