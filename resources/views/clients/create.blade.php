@extends('layout')
@section('content')


    <form method="POST" action="{{route('create_client')}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Full Name</label>
            <input type="text" required class="form-control" name="full_name" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Paid At</label>
            <input type="date" required class="form-control" name="paid_at" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
