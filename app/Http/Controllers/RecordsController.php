<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function create()   //function called "create"
    {
        return view('records.create');   //return "create" file from records -> view
    }
}
