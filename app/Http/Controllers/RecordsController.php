<?php

namespace App\Http\Controllers;

use App\Models\BmiRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class RecordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('records.create');
    }

    public function store()
    {
        $data = request()->validate([
            'weight' => 'required|min:0|max:99.99',
            'height' => 'required|min:0|max:99.99',
        ]);


        $bmi = $data ['weight'] / ($data ['height'] * $data ['height']);

        auth()->user()->BmiRecords()->create([
            'weight' => $data ['weight'],
            'height' => $data ['height'],
            'bmi' => $bmi,
            'InRange' => 18.5 <= $bmi and $bmi <= 24.9,

        ]);
        return redirect('/profile/' . auth()->user()->id);

    }
    public function show(\App\Models\BmiRecord $record)
    {
        return view('records.show', compact('record'));  //match post ot anything else to variable of post
    }
    public function edit(BmiRecord $record)
    {
       ///$this->authorize('update', $record->id);
        return view('records.edit', compact('record'));

    }
    public function update(BmiRecord $record)
    {
       $this->authorize('update', $record->id);

       $data = request()->validate([
          'weight' => 'required',
           'height' => 'required'

        ]);

        $record->id->update($data);
        return redirect('/profile/' . auth()->user()->id);
    }
    public function erase(int $id){

        BmiRecord::where('id', $id)->delete();

        return redirect('/profile/' . auth()->user()->id);    }
}
