@extends('layout')
@section('content')


    <h1>Full Name : {{$client->full_name}}</h1>
    <h3>Paid At : {{$client->paid_at}}</h3>
    <h6>Created :{{$client->created_at}}</h6>
    <h6>Updated : {{$client->updated_at}}</h6>


    <a href="{{route('clients_index')}}" >
        <button type="button" class="btn-secondary btn" >Back</button>
    </a>

@endsection
