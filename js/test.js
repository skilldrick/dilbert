/*
NEXT STEPS:

Make the whole thing work without JavaScript
Make it work in Firefox
Click on image to go to next


Preload next image
Make it work without JavaScript (needs some cURL)



*/


$(document).ready(function () {
    setListeners();
});

function getNext(current, previous) {
    var basedir = document.location.href
    basedir = basedir.substring(0, basedir.lastIndexOf('/') + 1);
    var getURL = basedir + 'inc/process.php';
    getURL += '?strip=' + current;
    if(previous) {
	getURL += '&previous=1';
    }
    $.getJSON(getURL, function(data) {
	$('#picturebox').html(
	    '<img src="' + data.url + '" rel="' + data.number + '" />');
    });
}

    function setListeners() {
	$('#next').click(function () {
	    goForward();
	    return false;
	});

	$('#previous').click(function () {
	    goBackward();
	    return false;
	});
	
	$(document).keydown(function (e) {
	    if(!e) {
		e = window.event;
	    }
	    switch(e.keyCode) {
	    case 37:
		goBackward();
		break;
	    case 39:
		goForward();
		break;
	    }
	});
    }
    

function goForward() {
    var current = $('#picturebox img').attr('rel');
    getNext(current);
}

function goBackward() {
    var current = $('#picturebox img').attr('rel');
    getNext(current, true);
}
    

