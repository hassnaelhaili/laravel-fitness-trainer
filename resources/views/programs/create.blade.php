@extends('layout')
@section('content')


    <form method="POST" action="{{route('program_store',['client'=> $client->id])}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Date</label>
            <input type="date" required class="form-control" name="date" >
        </div>
        <div class="mb-3">
            <label  class="form-label">description</label>
            <input type="text" required class="form-control" name="description" >
        </div>
          <div class="mb-3">
            <label  class="form-label">session duration</label>
            <input type="number" required class="form-control" name="session_duration" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
