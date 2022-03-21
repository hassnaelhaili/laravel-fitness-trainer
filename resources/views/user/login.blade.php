@extends('layout')
@section('content')


    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-3">
             Email
            <input type="email" placeholder="Enter Email" name="email" required>
        </div>
        <div class="mb-3">
        Password
            <input type="password" placeholder="Enter Password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
