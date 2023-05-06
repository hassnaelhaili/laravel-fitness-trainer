@extends('layout')

@section('content')
    <a href="{{route('create_client_form')}}">
        <button type="button" class="btn btn-secondary">Add Client</button>
    </a>

    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Full Name</th>
            <th scope="col">Paid At</th>

        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->full_name}}</td>
                <td>{{$client->paid_at}}</td>
                <td><a href="{{route('show_client',['client' => $client->id])}}">Show</a></td>
                <td><a href="{{route('edit_client',['client' => $client->id])}}">Edit</a></td>
                <td><a href="{{route('destroy_client',['client' => $client->id])}}">Delete</a></td>
                <td><a href="{{route('programs_index',['client' => $client->id])}}">View Program</a></td>

            </tr>
        @endforeach

        </tbody>
    </table>



@endsection
