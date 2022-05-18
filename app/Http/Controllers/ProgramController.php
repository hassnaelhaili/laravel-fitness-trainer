<?php

namespace App\Http\Controllers;
use App\Program;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    
    public function index()
    {
        $program = Program::all();

        return view('programs.index',compact('program'));
    }

   
    public function create()
    {
        return view('programs.create'); 

    }

   
    public function store(Request $request)
    {
        $request ->validete([
            'title'               => 'required',
            'type'                => 'required',
            'current_week_number' => 'required',
            'current_day_number'  => 'required',
        ]);

        $program = Program::create($request->all());
        return redirect()->back('programs.index')->with('success','program added');
    }

    

    public function show($Program program)
    {
        return view('programs.show', compact('program'));

    }

    
    public function edit($id)
    {
        return view('programs.edit',['program' => $program]);
    }


       public function update(Request $request, $id)
     {
        $request ->validete([
            'title'               => 'required',
            'type'                => 'required',
            'current_week_number' => 'required',
            'current_day_number'  => 'required',
        ]);

        $program = Program::update($request->all());
        return redirect()->back('programs.index')
        ->with('success','program updated');
    }



        public function destroy($id)
    {
        $program->delete();
           return redirect()->back('programs.index')
        ->with('success','program deleted');

    }

}
