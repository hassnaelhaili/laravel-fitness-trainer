

<form method="POST" action="/login">
	@csrf
	<div class="mb-3">
		email
		<input type="email" placeholder="Enter Email" name="email" required>

	</div>
	<div class="mb-3">
		password
		<input type="password" placeholder="Enter Password" name="password" required>

	</div>
	<a href="/register">
			<button type="button" class="btn btn-primary">Register</button>

	</a>
	<button type="submit" class="btn btn-primary">Submit</button>



</form>
