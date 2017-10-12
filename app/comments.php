@@include("./_top.php", {"title":"Comments"})

<h1 class='clearfix'>Course Name<span class='float-right'>#CE123</span></h1>
<form action="" method="POST" class="card" id="comment-form">
	<div class="card-header">Enter your feedback</div>
	<div class="card-body">
		<textarea class='form-control' name="feedback" rows="5"></textarea>
	</div>
	<div class="card-footer clearfix">
		<div class="float-left btn pl-0 text-secondary"><small>0/200</small></div>
		<button class="float-right btn btn-primary">Post</button>
		<button class="float-right btn btn-secondary mr-2">Clear</button>
	</div>
</form>
<hr>
<div class='clearfix mb-3'>
	<small class='float-right'><span class="text-success">123+</span> <span class="text-danger">334-</span></small>
	<small class='float-left total-info'><span class="icon-comment d-inline-block"></span>1234</small>
</div>
<!-- auto generate by php -->

<div class="comment">
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem similique facere quasi iure, maiores nulla assumenda dicta ullam sint quas enim libero, soluta explicabo esse aliquid. Sunt, ratione, voluptates!</div>
	<small>12/12/17</small>
</div>
<div class="comment">
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem similique facere quasi iure, maiores nulla assumenda dicta ullam sint quas enim libero, soluta explicabo esse aliquid. Sunt, ratione, voluptates!</div>
	<small>12/12/17</small>
</div>
<div class="comment">
	<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptatem similique facere quasi iure, maiores nulla assumenda dicta ullam sint quas enim libero, soluta explicabo esse aliquid. Sunt, ratione, voluptates!</div>
	<small>12/12/17</small>
</div>

@@include("./_bottom.php", {"scripts": []})