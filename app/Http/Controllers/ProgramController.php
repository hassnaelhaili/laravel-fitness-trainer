<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Client;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index(Client $client)
    {
 
        return view('programs.index', [  'client' => $client]);
    }

    public function create(Client $client)
    {
    
        return view('programs.create', [ 'client' => $client]);

    }

    
    public function store(Request $request, Client $client)
    {
        $program = new Program();
        $program->client_id = $client->id;
        $program->date = $request->date;
        $program->session_description = $request->description;
        $program->session_duration = $request->session_duration;
        $program->save();

       return  view('programs.index', [ 'client' => $client]);
        
    }

   
    public function show(Program $program)
    {

        return view('programs.show', ['program' => $program]);
    }


    public function edit(Program $program)
    {

         return view('programs.edit', ['program' => $program]);

    }


    public function update(Request $request, Program $program)
    {
        
        $program->date = $request->date;
        $program->session_description = $request->description;
        $program->session_duration = $request->session_duration;
        $program->save();

         return  view('programs.index', [ 'client' => $program->client]);
    }

      public function destroy(Program $program)

    {
        $client = $program->client;

        $program->delete();
        
        return view('programs.index', [  'client' => $client]);

    }
}
