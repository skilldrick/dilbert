/*
Next steps:

Preload next image
Make it work without JavaScript (needs some cURL)



*/



$(document).ready(function () {
    setListeners();
    goForward();
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
	$('#next').submit(function () {
	    goForward();
	    return false;
	});

	$('#previous').submit(function () {
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
    

