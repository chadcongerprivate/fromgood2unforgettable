// JavaScript Document
function playVideo() {
	// generate video
	$('#event-stream').html('<video onclick="this.play();" id="event-player" autoplay align="top" preload="auto" poster="'+posterPlay+'" data-setup="{}">'+videoSources+'</video>');
	
	$('#event-player').click(
		function(){
			$(this).attr('poster', posterloading);
		}
	);
	
	var video = document.getElementById( 'event-player' );

	//handler should be bound first
	video.addEventListener( "timeupdate", function () {
		if ( this.currentTime >= endtime ) {
			this.pause();
			endEvent();
		}
		
		// check if there are any actions to perform
		checkForAction(this.currentTime);

		if ( this.currentTime >= ctaTime && !ctaShowing && ctaTime ) {
			$( '.post-cta' ).removeClass( 'hidden' );
			$( '.pre-cta' ).addClass( 'hidden' );
			ctaToggle();
			ctaShowing = true;

			if(contactId != ''){
			 // tag as saw cta
			 infTag(tagSawCta, contactId);
			}
		}
	}, false );

	//suppose that video src has been already set properly
	video.load();
	video.play(); //must call this otherwise can't seek on some browsers, e.g. Firefox 4
	try {
		video.currentTime = starttime;
	} catch ( ex ) {
		//handle exceptions here
	}
}