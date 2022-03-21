@extends('layout')
@section('content')


    <form method="POST" action="{{route('register'}}">
        @csrf

        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <div class="mb-3">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        </div>  
        <div class="mb-3">
        	<label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        </div>     

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
