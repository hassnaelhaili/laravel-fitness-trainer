@extends('programs.layout')
@section('content')



<form>
	@csrf
	<div class="mb-3">
		<label class="form-label">Title</label>
		<input type="text" required class="form-control" name="title">
	</div>	
	<div class="mb-3">
		<label class="form-label">type</label>	
		<input type="" name="">
	</div>
	<div class="mb-3">
		<label class="form-label">type</label>
		<input type="" name="">		
	</div>
	<div class="mb-3">
		<label class="form-label"></label>
		<input type="" name="">		
	</div>
</form>

@endsection



