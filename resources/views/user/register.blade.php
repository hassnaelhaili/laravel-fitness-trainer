@extends('layout')
@section('content')


    <form method="POST" action="{{route('register')}}">
        @csrf

        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <div class="mb-3">
            Name
            <input type="text" placeholder="Enter Name" name="request_name"  required>
        </div>
        <div class="mb-3">
             Email
            <input type="email" placeholder="Enter Email" name="request_email"  required>
        </div>
        <div class="mb-3">
            Password
            <input type="password" placeholder="Enter Password"  name="request_password"  required>
        </div>
        <div class="mb-3">
        	 Repeat Password
            <input type="password" placeholder="Repeat Password" name="request_confirm_password"  required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
