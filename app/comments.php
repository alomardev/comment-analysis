@@include("./_top.php", {"title":"Comments"})

<div class='page-title clearfix'>Course Name<span class='float-md-right'> (CE123)</span></div>
<form action="" method="POST" class="card" id="comment-form">
	<div class="card-header">Enter your feedback</div>
	<div class="card-body">
		<textarea class='form-control' name="feedback_message" rows="5"></textarea>
	</div>
	<div class="card-footer clearfix">
		<div class="float-left btn pl-0 text-secondary"><small id='char-limit'>0/200</small></div>
		<button name='btn_post' class="float-right btn btn-primary">Post</button>
		<button name='btn_clear' class="float-right btn btn-secondary mr-2">Clear</button>
	</div>
</form>
<hr>
<div class='clearfix mb-3'>
	<small class='float-right'><span class="text-success" id='positive-count'>123+</span> <span class="text-danger" id='negative-count'>334-</span></small>
	<small class='float-left total-info'><span class="icon-comment d-inline-block"></span><span id='total-count'>1234</span></small>
</div>

<div id="comments-container">
	<!-- auto generate
	<div class="comment">
		<div>[comment]</div>
		<small>[date]</small>
	</div>
	-->
</div>

@@include("./_bottom.php", {"scripts": []})