<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function index(){
        $Users = User::paginate(5);
        return view('admin.users.index',compact('Users'));
    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password'=>'required|string|min:6|max:25',
            'role'=>'required|in:1,0'
        ]);
        $User = new User();
        $User->first_name = $request->first_name;
        $User->last_name = $request->last_name;
        $User->username = $request->username;
        $User->password = Hash::make($request->password);
        $User->role = $request->role;
        $User->save();
        return redirect()->route('users.index');
    }
    public function edit($id){
        $User = User::findOrFail($id);
        return view('admin.users.edit',compact('User'));
    }
    public function update($id,Request $request){
        $User = User::findOrFail($id);
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$id,
            'password'=>'sometimes|string|min:6|max:25',
            'role'=>'required|in:1,0'
        ]);
        $User->first_name = $request->first_name;
        $User->last_name = $request->last_name;
        $User->username = $request->username;
        $User->role = $request->role;
        if ($request->filled('password'))
            $User->password = Hash::make($request->password);
        $User->save();
        return redirect()->route('users.index');
    }
    public function destroy($id){
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('users.index');
    }
}
