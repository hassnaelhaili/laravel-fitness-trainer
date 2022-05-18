CVC


<form method="POST"  action="/register">
	
	@csrf

	smya
	<input type="text" name="full_name"><br>

	email
	<input type="email" name="e_mail"><br>
	
	password
	<input type="password" name="password"><br>

	confirm password
	<input type="password" name="confirm"><br>
	
	phone
	<input type="number" name="phone"><br>

	profile picture

  <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*">
 <br>

	job title
	<input type="text" name="job_title"><br>

	gender
	<label for="gender"> Select you gender</label>
 <select name="gender">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="other">other</option><br>
</select>

	<br>
	city
	<input type="text" name="city"> <br>

	country
	<input type="text" name="country"> <br> 

	type
	<label for="type">Select your type</label>
	<select name="type">
		<option value="none" selected>Type</option>
		<option value="coach">Coach</option>
		<option value="client">Client</option><br>
	</select>
	
	bio
	<input type="text" name="bio">

	<button type="submit"> Register </button>
	<br>
	<a href="login">already registerd</a>

</form>