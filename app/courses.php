@@include("./_top.php", {"title":"Courses"})

<h1 class='mb-2 clearfix'>Courses<div class="fab float-right mr-2" data-toggle="modal" data-target="#new-course-modal"><span class='icon-add'></span></div></h1>

<div class="two-cols-wrapper-lg course-list">
	<a href="#"><div class="card">Database Design and Analsyis OOP 1235<span class="count"><span class="icon-comment"></span> 123</span></div></a>
	<a href="#"><div class="card">Database Design and Analsyis OOP 1235<span class="count"><span class="icon-comment"></span> 123</span></div></a>
	<a href="#"><div class="card">Database Design and Analsyis OOP 1235<span class="count"><span class="icon-comment"></span> 123</span></div></a>
	<a href="#"><div class="card">Database Design and Analsyis OOP 1235<span class="count"><span class="icon-comment"></span> 123</span></div></a>
</div>
<!-- <div class="row">
	<div class="mb-3 mb-lg-0 col-lg-6 pr-lg-2"><div class="card">
		<div class="card-body">Courese name adsfa adsfa asdfa ads</div>
	</div></div>
	<div class="mb-3 mb-lg-0 col-lg-6 pl-lg-2"><div class="card">
		<div class="card-body">Courese name adsfa adsfa asdfa ads</div>
	</div></div>
</div>
<div class="row mb-lg-3 no-gutters">
	<div class="mb-3 mb-lg-0 col-lg-6 pr-lg-2"><div class="card">
		<div class="card-body">Courese name adsfa adsfa asdfa ads</div>
	</div></div>
	<div class="mb-3 mb-lg-0 col-lg-6 pl-lg-2"><div class="card">
		<div class="card-body">Courese name adsfa adsfa asdfa ads</div>
	</div>
</div> -->
</div>

<div class="modal fade" id='new-course-modal'>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
	      <div class="modal-body">
					<input class='form-control' type="text" name='course-name' placeholder="Name">
					<input class='mt-2 form-control' type="text" name='course-crn' placeholder="CRN">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-primary">Add</button>
	      </div>
	    </form>
    </div>
  </div>
</div>

@@include("./_bottom.php", {"scripts": []})