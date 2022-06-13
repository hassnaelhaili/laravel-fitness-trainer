@extends('layout')

@section('content')

<div class="jumbotron container">
	<a class="btn btn-primary btn-lg" href="/programs/create" role="button">Create New program</a>

	@csrf
	 <table class="table table-dark table-striped">

 	<thead>
 		<th scope="col">#id</th>
      	<th scope="col">Title</th>
     	<th scope="col">Week</th>
     	<th scope="col">Day</th>
     	<th scope="col">Type</th>
    </tr>
 		


 	</thead>
 	<tbody>

 		@foreach($programs as $program)

 			<tr>
 				<td>{{$program->id}}</td>
 				<td>{{$program->title}}</td>
 				<td>{{$program->current_week_number}}</td>
 				<td>{{$program->current_day_number}}</td>
 				<td>{{$program->type}}</td>
 				<td><a href={{'/programs/'.$program->id.'/edit'}}>Edit Program</a></td>
 				<td><a href="/programs/show">view program</a></td>
 				<td><a href="/programs/show">view exersices</a></td>
 				<td><a href="/programs">Delete</a></td>

 			</tr>
 		@endforeach

 	</tbody>
 </table>
</div>
	
</div>
@endsection