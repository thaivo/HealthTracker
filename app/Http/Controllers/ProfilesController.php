<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));

    }
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));

    }
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'gender'=>'',
            'DateOfBirth' =>'',
        ]);

        $user->profile()->update($data);

        return redirect("/profile/{$user->id}");
    }

    public function load(User $users){
        if (auth()->user()->is_admin !== 1){
            abort(\Illuminate\Http\Response::HTTP_FORBIDDEN);
        }
        //ddd(User::all()->where('is_admin','=',0)->toArray());
        $data = User::all()->where('is_admin','=',0);
        //ddd($data);
        //ddd(auth()->user());
        return view('profiles.admin_index', ['users'=>$data]);
    }
}
