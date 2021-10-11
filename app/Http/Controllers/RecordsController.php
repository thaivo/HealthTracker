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

    public function create()   //function called "create"
    {
        return view('records.create');   //return "create" file from records -> view
    }

    public function store()   //function called "create"
    {
        $data = request()->validate([
            'weight' => 'required|min:0|max:99.99',
            'height' => 'required|min:0|max:99.99',
        ]);

//        $columns = Schema::getColumnListing('bmi_records'); // users table
//        dd($columns);
//
//        error_log(BmiRecord::all());

        $bmi = $data ['weight'] / ($data ['height'] * $data ['height']);

        auth()->user()->BmiRecords()->create([
            'weight' => $data ['weight'],
            'height' => $data ['height'],
            'bmi' => $bmi,
            'InRange' => $bmi <= 25,

        ]);
        return redirect('/profile/' . auth()->user()->id);

    }
}
