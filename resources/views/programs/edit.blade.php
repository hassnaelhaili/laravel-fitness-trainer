@extends('layout')
@section('content')


<div class="jumbotron container">
<form method="POST" action="{{'/programs/'.$program->id}}">
    @csrf
    
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input required type="text" required value="{{$program->title}}" class="form-control" name="title">
    </div>  
    <div class="mb-3">
        <label class="form-label">Week</label>  
        <input required type="number" value="{{$program->current_week_number}}" name="current_week_number">
    </div>
    <div class="mb-3">
        <label for="type">Select your program</label>
    <select required name="type">
        <option value="none" selected>Type</option>
        <option value="diet">Diet</option>
        <option  value="workout">Traing</option><br>
    </select>

    </div>
    <div class="mb-3">
        <label class="form-label">Day</label>
        <input required type="number" value="{{$program->current_day_number}}" name="current_day_number">        
    </div>

    <button type="submit">submit</button>
</form>
</div>

@endsection