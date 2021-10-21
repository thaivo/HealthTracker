<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', [
            'user' => $user,
            'records' => DB::table('bmi_records')->where('user_id', '=', $user->id)->paginate(2)
        ]);

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

    public function loadUsers(User $users){
        if (auth()->user()->is_admin !== 1){
            abort(\Illuminate\Http\Response::HTTP_FORBIDDEN);
        }
        //ddd(User::all()->where('is_admin','=',0)->toArray());
        $data = User::all()->where('is_admin','=',0);
        //ddd($data);
        //ddd(auth()->user());
        return view('profiles.admin_index', ['users'=>$data]);
    }

    public function accessAParticularUserDetail(User $user){
        //ddd($user);
        //ddd();
        return view('profiles.admin_access_a_particular_user_detail', ['profile'=>Profile::all()->where('user_id','=',$user->id)->first()]);
    }

    public function editAParticularUser(User $user){
        //ddd($user);
        return view('profiles.admin_edit_a_particular_user',['user'=>Profile::find($user->id)]);
    }

    public function updateAParticularUser(User $user){
        $data = request()->validate([
            'title'=>'required',
            'gender' => '',
            'DateOfBirth' => ''
        ]);
        $userId = DB::table('profiles')->select('user_id')->where('id', '=', \request('id'))->first();
        DB::update('update profiles set title=?, gender=?, DateOfBirth=? where user_id =?',[$data['title'],$data['gender'],$data['DateOfBirth'],$userId->user_id]);
        return view('profiles.admin_access_a_particular_user_detail',['profile'=>Profile::find($user->id)]);
    }

    public function deleteAParticularUser(User $user){
        Profile::destroy([$user->id]);
        $user->delete();
        return redirect('/admin/users');
    }

    public function createNewUser(){
        //ddd(auth()->user()->email);
        return view('profiles.admin_create_new_user');
    }

    public function storeNewUser(){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'title' => 'required',
        ]);
        User::create([
            'name' => \request('name'),
            'email' => \request('email'),
            'password' => Hash::make(\request('password')),
        ]);

        $userId = DB::table('users')->select('id')->where('name', '=', \request('name'))->where('email','=',\request('email'))->get();
        Profile::created([
            'user_id' => $userId,
            'title' => \request('title'),
            'gender' => \request('DateOfBirth')
        ]);
        return redirect('/admin/users');
    }
}
