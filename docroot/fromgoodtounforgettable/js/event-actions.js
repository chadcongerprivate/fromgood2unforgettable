// tag to infusionsoft
function infTag(tagId, contactId){
        var url = 'https://webinars.motivatingthemasses.com/fromgoodtounforgettable/ajax/int-tag/?contactId=' + contactId + '&tagId=' + tagId;
        $.get(url);
}

// tag to database
function dbTag(tagId, contactId){
        var url = 'https://webinars.motivatingthemasses.com/fromgoodtounforgettable/ajax/tag-to-db/?contactId=' + contactId + '&tagId=' + tagId;
        $.get(url);
}

// timed tag to infusionsoft
function timedTag(minutes, seconds, tagId, contactId){
	var totalSeconds = minutes * 60 + seconds;
	setTimeout(function(){infTag(tagId, contactId);}, totalSeconds * 1000);
}

// scroll to anchor
function scrollToSelector(cssSelector, miliseconds, offset){
	var offset   = offset || 0;
	var position = $(cssSelector);
    $('html,body').animate({scrollTop: position.offset().top - offset }, miliseconds);
 }

// timed show
function showElement(minutes, seconds, cssSelector){
	var totalSeconds = minutes * 60 + seconds;
	setTimeout(function(){
		$(cssSelector).removeClass('hide');
		$(cssSelector).removeClass('hidden');
		}, totalSeconds * 1000);
}

// timed hide
function hideElement(minutes, seconds, cssSelector){
	var totalSeconds = minutes * 60 + seconds;
	setTimeout(function(){
		$(cssSelector).addClass('hide');
		$(cssSelector).addClass('hidden');
		}, totalSeconds * 1000);
}

// make video biggest it can be in it's container
function containVideo() {
	var vw = $( '#video-container' ).width();
	var vh = $( '#video-container' ).height();
	var vr = vw / vh;
	var ratio = 16 / 9;

	if ( vr > ratio && vw > 992) {
		$( '#event-stream' ).addClass( 'video-full' );
		$( '#event-stream' ).removeClass( 'embed-responsive' );
		$( '#event-stream' ).removeClass( 'embed-responsive-16by9' );
	} else {
		$( '#event-stream' ).removeClass( 'video-full' );
		$( '#event-stream' ).addClass( 'embed-responsive' );
		$( '#event-stream' ).addClass( 'embed-responsive-16by9' );
	}
}

function runAction(aName){
	type      = actions[aName]['type'];
	selector  = actions[aName]['selector'];
	tag       = actions[aName]['tag'];
	
	switch(type){
		case 'tag':
			if(contactId != ''){
				infTag(tag, contactId);
			}
		break;
		case 'show':
			showElement(0, 0, selector);
			
			if(contactId != '' && tag != ''){
				infTag(tag, contactId);
			}
		break;
		case 'hide':
			showElement(0, 0, selector);
			
			if(contactId != '' && tag != ''){
				infTag(tag, contactId);
			}
		break;
	}
    
	console.log('running action '+ aName);
	
	delete actions[aName];
}

function checkForAction(time){
	time = Math.floor(time);
	
	
	if (typeof actions['action'+time] !== 'undefined') {
		runAction('action'+time);
	}
	if (typeof actions['action'+time+'b'] !== 'undefined') {
    	runAction('action'+time+'b');
	}
	if (typeof actions['action'+time+'c'] !== 'undefined') {
    	runAction('action'+time+'c');
	}
	if (typeof actions['action'+time+'d'] !== 'undefined') {
    	runAction('action'+time+'d');
	}
}


function endEvent() {
	$( '#video-container' ).html( '<div id="event-ended"><img class="img-responsive img-responsive-center" src="images/event-ended.jpg"></div>' )
}

function ctaToggle() {
	
	var el = $( '.cta-content' ),
		curHeight = el.height(),
		autoHeight = el.css( 'height', 'auto' ).height();

	if ( curHeight == 0 ) {
		el.height( curHeight ).animate( {
			height: autoHeight
		}, 1000 );

		$('.cta-toggle').addClass('cta-expanded');
		$('.cta-toggle i').addClass('fa-flip-vertical');
	} else {
		el.animate( {
			height: '0px'
		}, 1000 );

		$('.cta-toggle').removeClass('cta-expanded');
		$('.cta-toggle i').removeClass('fa-flip-vertical');
	}
	
}

