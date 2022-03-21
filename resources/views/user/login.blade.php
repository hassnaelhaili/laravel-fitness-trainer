@extends('layout')
@section('content')


    <form method="POST" action="{{route('program_update',['program' => $program->id])}}">
        @csrf
        <div class="mb-3">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
        </div>
        <div class="mb-3">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection