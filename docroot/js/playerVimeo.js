// JavaScript Document
function playVideo() {
	// generate video
	var options = {
        id: videoId,
		autoplay: true,
		title:false,
    };

    var video = new Vimeo.Player('event-stream', options);
	
	// set volume
	video.setVolume(1);
	
	// set current time
	if(starttime > 0){
		video.setCurrentTime(starttime);
	}
	
	//handler should be bound first
	video.on( "timeupdate", function (data) {
		currentTime = parseInt(data.seconds);
		
		// check if there are any actions to perform
		checkForAction(currentTime);

		if ( currentTime >= ctaTime && !ctaShowing && ctaTime ) {
			$( '.post-cta' ).removeClass( 'hidden' );
			$( '.pre-cta' ).addClass( 'hidden' );
			ctaToggle();
			ctaShowing = true;

			if(contactId != ''){
			 // tag as saw cta
			 infTag(tagSawCta, contactId);
			}
		}else{
			//console.log(ctaTime - currentTime);
		}
	});
	
	// end event
	video.on( "ended", function () {
		endEvent();
	});

	
}