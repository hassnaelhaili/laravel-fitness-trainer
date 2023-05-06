<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<h1>welcome to home page</h1>


	@if(auth()->user()->type === 'coach')
		<a href="/programs">
			<button>View Programs</button>
		<a>
	@endif

	<a href="/logout">
		<button>logout</button>
	<a>
	



</body>
</html>