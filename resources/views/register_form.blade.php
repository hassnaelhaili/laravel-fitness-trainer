
<h1>Register Here Please</h1>

<form method="POST"  action="/register-post">
	
	@csrf

	email
	<input type="email" name="email">

	name
	<input type="text" name="name">

	password
	<input type="password" name="password">

	confirm password
	<input type="password" name="confirm">

	<button type="submit"> Register </button>


</form>