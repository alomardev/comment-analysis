@@include("./_top.php", {"title":"Login"})

<div class="card" id='login-card'>
	<div class="card-body">
	<h4 class="card-title">Login</h4>
		<form>
				<input type="text" class="form-control mt-4" name='username' placeholder="Username">
				<input type="password" class="form-control mt-2" name='password' placeholder="Password">
				<button type="submit" class="btn btn-primary mt-3">Login</button>
		</form>
	</div>
</div>

@@include("./_bottom.php", {"scripts": []})