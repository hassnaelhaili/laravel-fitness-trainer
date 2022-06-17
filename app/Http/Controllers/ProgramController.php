<?php

namespace App\Http\Controllers;
use App\Models\Program;

use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index()
    {
        $user_id = auth()->id();

        $programs = Program::where('user_id', $user_id)->get();

        return view('programs.index',compact('programs'));
    }

   
    public function create()
    {
        return view('programs.create'); 

    }

   
    public function store(Request $request)
    {

    /*    $request->validate([
            'title'               => 'required',
            'type'                => 'required',
            'current_week_number' => 'required',
            'current_day_number'  => 'required',
        ]);
*/ 

        $program = [
            'type' => $request->type,
            'user_id' => auth()->id(),
            'title'               => $request->title,
            'current_week_number' => $request->current_week_number,
            'current_day_number'  => $request->current_day_number,
        ];


        $program = Program::create($program);

       // $user = auth()->user();

       // $user->programs()->save($request->all());



        return redirect()->to('/programs');
    }

    

    public function show(Program $program)
    {

        return view('programs.show',['program' => $program]);

    }

    
    public function edit(Program $program)
    {

        return view('programs.edit',['program' => $program]);

    }


    public function update(Request $request, Program $program)
     {


       $request ->validate([
            'title'               => 'required',
            'type'                => 'required',
            'current_week_number' => 'required',
            'current_day_number'  => 'required',
        ]);

       /*
        $program->title               = $request->title;
        $program->type                = $request->type;
        $program->current_week_number = $request->current_week_number;
        $program->current_day_number  = $request->current_week_number;
       // $program->save();
        */
        $program->update($request->all());
       return redirect()->to('/programs.index',['program' => $program]);

       // return redirect()->to('/programs');
    }



    public function destroy($id)
    {
        $program->delete();
           return redirect()->back('programs.index');
        //->with('success','program deleted');

            //return redirect()->to('/programs');


    }

}
