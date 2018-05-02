// JavaScript Document
function showComments(){
		var id = '#comment' + chatSeconds;
		$(id).removeClass('hide');
		
		// move placeholder
		$('#chat-placeholder').insertBefore(id);
		
		// add 1 second
		chatSeconds++;
		// loop everysecond
		setTimeout(function(){ showComments() }, 1000);
}

function setUserName(){
	// hide choose username
	$('#choose-username').addClass('hide');
	// show comment textarea
	$('#post-comment').removeClass('hide');
	// set username
	$('#chosen-username').html('Commenting as ' + $('#choose-username-field').val());
	
	// resize chat
	stretchChat();
}

function postUserComment(){
	console.log('posting comment');
	var comment = '<div id="chat-placeholder"></div><div class="comment"><span class="username">Comment From ' + $('#choose-username-field').val() + '</span><span class="comment-body">' + $('#comment-text').val() + '</span></div>';
	
	// replace placeholder with comment and new placeholder
	$('#chat-placeholder').replaceWith(comment);
	
	// clear comment value
	$('#comment-text').val('');
}

function stretchChat(){
	var logoHeaderH = $('#logo-header').height();
	var chatHeaderH = $('#chat-header').height();
	var windowH     = $(window).height();
	var chatH = windowH - logoHeaderH - chatHeaderH - 45;
	$('#comment-container').css('height', chatH + 'px');
}
function loadAutoChat(url){
    $.get(url, function(chatCode){
		$('#main-chat-container').html(chatCode);
		showComments();
		stretchChat();
	
		$('#set-username').bind('click', function(){
			var username = $('#choose-username-field').val();
			if(username != ''){
				setUserName();
			}
		});
		
		$('#send-comment').bind('click', function(){
			console.log('here');
			var comment = $('#comment-text').val();
			if(comment != ''){
				postUserComment();
			}
		});
	});
};

$(function() {
    loadAutoChat(autoChatUrl);
});