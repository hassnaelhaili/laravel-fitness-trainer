<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();

        return view('clients.index',['clients' => $clients]);
    }


    public function create()
    {
        return view('clients.create');
    }


    public function store(Request $request)
    {
        $client = new Client();
        $client->full_name = $request->full_name;
        $client->paid_at = $request->paid_at;
        $client->save();

        return redirect()->route('clients_index');
    }


    public function show(Client $client)
    {
        return view('clients.show',['client' => $client]);
    }


    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }


    public function update(Request $request, Client $client)
    {
        $client->full_name = $request->full_name;
        $client->paid_at = $request->paid_at;
        $client->save();
        return redirect()->route('clients_index');
    }


    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients_index');
    }
}
