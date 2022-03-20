@extends('layout')
@section('content')


    <form method="POST" action="{{route('update_client',['client' => $client->id])}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Full Name</label>
            <input type="text" required class="form-control" value="{{$client->full_name}}" name="full_name" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Paid At</label>
            <input type="date" required class="form-control" value="{{$client->paid_at}}"  name="paid_at" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
