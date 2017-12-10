<?php
header("Access-Control-Allow-Origin: *"); // allows cross orgin ajax

include('../included/webinar-include.php');
$chatSeconds = $now - $unixStartTime;
$comments    = array_map('str_getcsv', file('auto-chat-comments.csv'));
?>
<div id="chat-container">
<div id="chat-header">
<div id="choose-username">
<div class="container-fluid">
    <div class="row">
    	<div class="col-xs-9 col-sm-12 col-md-8">
        <input id="choose-username-field" class="form-control" type="text" placeholder="Choose Username..." value="">
        </div>
        <div class="col-xs-3 col-sm-12 col-md-4">
        <div class="button-spacer visible-sm"></div>
        <button id="set-username" class="btn btn-block btn-primary">Set</button>
        </div>
    </div>
</div>
</div>
<div id="post-comment" class="hide">
<div class="container-fluid">
	<div class="row">
    	<div class="col-xs-12">
        <div id="chosen-username"></div>
        <textarea id="comment-text" rows="3" class="form-control" placeholder="Send questions or comments"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-6">
        <button id="send-comment" class="btn btn-block btn-primary">Send</button>
        </div>
    </div>
</div>
</div>
</div>
<div id="comment-container">
<?php
// when this changes to 1 a placeholder will be placed for a user comment
$commentsShowing = 0;
foreach($comments as $key => $comment){
	if($key != 0){ // skip headers
		
		$commentId = 'comment'.$comment[0];
		$username = 'Comment From '.$comment[1];
		
		if($comment[1] == 'admin'){
			$username = '<span class="ng-chat-comment">MTM</span>';
		}
		
		$class = '';
		if($comment[0] > $chatSeconds){
			$class = ' hide';
		}else{
			$commentsShowing++;
		}
		// add placeholder above the 1st comment that isn't hidden
		if($commentsShowing == 1){
?>
<div id="chat-placeholder"></div>
<?php	
	
		}
?>
<div id="<?=$commentId?>" class="comment<?=$class?>"><span class="username"><?=$username?></span><span class="comment-body"><?=$comment[2]?></span></div>
<?php
		
	}
	
}
?>
</div>
</div>