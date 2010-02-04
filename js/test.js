/*
NEXT STEPS:

Make the whole thing work without JavaScript
Make it work in Firefox
Click on image to go to next

 */

$(document).ready(function () {
    getNext(33190);
});

function getNext(current, previous) {
    var getURL = 'http://www.skilldrick.co.uk/test/inc/process.php';
    getURL += '?strip=' + current;
    if(previous) {
	getURL += '&previous=1';
    }
    $.getJSON(getURL, function(data) {

	$('#picturebox').html(
	    '<img src="' + data.url + '" rel="' + data.number + '" />');
    });
}

$('#next').submit(function () {
    goForward();
    return false;
});

$('#previous').submit(function () {
    goBackward();
    return false;
});

function goForward() {
    var current = $('#picturebox img').attr('rel');
    getNext(current);
}

function goBackward() {
    var current = $('#picturebox img').attr('rel');
    getNext(current, true);
}
    

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