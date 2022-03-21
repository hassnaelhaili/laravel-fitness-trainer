@extends('layout')
@section('content')

<h1>Program Week</h1>


<div class="container">
	<div>
	<a href="{{route('clients_index')}}"><button class="btn btn-secondary"> Back</button></a>
</div>
	<table class="table table-dark table-striped">
	<thead>
		<th>date</th>
		<th>description</th>
		<th>session duration</th>
	</thead>

	<tbody>

		@foreach($client->programs as $program)
			<tr>
					<td>{{$program->date}}</td>
					<td>{{$program->session_description}}</td>
					<td>{{$program->session_duration}}</td>
					
					<td><a href="{{route('program_edit',['program'=>$program->id])}}">edit program</a></td>
					<td><a href="{{route('program_show',['program'=>$program->id])}}">Show program</a></td>
					<td><a href="{{route('program_destroy',['program'=>$program->id])}}">Delete program</a></td>
			
			</tr>

		@endforeach
	</tbody>
</table>
<div>
	<a href="{{route('create_program_form',['client'=>$client->id])}}">Add program</button>
</div>
</div>	

@endsection