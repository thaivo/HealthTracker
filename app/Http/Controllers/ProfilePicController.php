<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilePic;
use App\Models\User;

class ProfilePicController extends Controller
{
    public function index()
    {
        $profilePic = ProfilePic::all();
        return view('profilePic.profilePic' , compact('user'));
    }
}
