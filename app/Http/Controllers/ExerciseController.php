<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\User;

class ExerciseController extends Controller
{
    public function index(){

        $exercises = Exercise::all();

        //dd(Exercise::all());
        return view('exercises.index',['exercises' => $exercises]);
    }

    public function create(){

        return view('exercises.create');

    }

    public function details(Exercise $exercise){

        return view('exercises.details',['exercise' => $exercise]);
    }

    public function calculate(){

        $exercises = Exercise::all();
        return view('exercises.calculate',['exercises' => $exercises]);
    }

    public function store(){

        request()->validate([
            'title' => 'required',
            'howto' => 'required',
            'calories' => 'required',
            'areas' => 'required',
        ]);

        Exercise::create([
            'title' => request('title'),
            'howto' => request('howto'),
            'calories' => request('calories'),
            'areas' => request('areas'),
        ]);

        return redirect('/exercises');
    }

    public function edit(Exercise $exercise){

        return view('exercises.edit',['exercise' => $exercise]);
    }

    public function update(Exercise $exercise){

        request()->validate([
            'title' => 'required',
            'howto' => 'required',
            'calories' => 'required',
            'areas' => 'required',
        ]);

        $exercise->update([
            'title' => request('title'),
            'howto' => request('howto'),
            'calories' => request('calories'),
            'areas' => request('areas'),
        ]);

        return redirect('/exercises');
    }

    public function erase(Exercise $exercise){
        $exercise->delete();

        return redirect('/exercises');
    }
}
