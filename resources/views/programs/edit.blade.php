@extends('layout')
@section('content')


    <form method="POST" action="{{route(')}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Date</label>
            <input type="date" required class="form-control" value="{{$program->date}}" name="date" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="txte" required class="form-control" value="{{$program->session_description}}"  name="description" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Session Duration</label>
            <input type="number" required class="form-control" value="{{$program->session_duration}}"  name="session duration" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
