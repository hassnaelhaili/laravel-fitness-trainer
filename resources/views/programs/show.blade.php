@extends('layout')
@section('content')

<h1> Title : {{$program->title}}</h1>
<h2> Week : {{$program->week}}</h2>
<h3> type : {{$program->type}}</h3>
<h4> current_week_number : {{$program->current_week_number}}</h4>
<h5> current_day_number : {{$program->current_day_number}}</h5>
  

 <a href="{{'/programs/'.$program->id}}"></a>
 <button type="button" class="btn-secondary btn">back</button>
@endsection