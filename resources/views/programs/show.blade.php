@extends('layout')
@section('content')


    <h1>Date : {{$program->date}}</h1>
    <h3>Description : {{$program->description}}</h3>
    <h4>Session Duration : {{$program->session_duration}}</h4>
    <h6>Created :{{$program->created_at}}</h6>
    <h6>Updated : {{$program->updated_at}}</h6>




    <a href="{{route('programs_index',['client'=> $program->client_id])}}" >
        <button type="button" class="btn-secondary btn" >Back</button>
    </a>

@endsection



