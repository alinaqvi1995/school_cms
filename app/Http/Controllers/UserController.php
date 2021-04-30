<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function viewUser($id)
    {
        $user = User::where('id', $id)->get();
        return view('view', compact('user'));
    }

    public function editUser($id)
    {
        $users = User::find($id);
        return view('edit', compact('users'));
    }

    public function updateUser(Request $request)
    {
        $user= User::find($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return back();
    }

    public function delUser($id)
    {
        User::where('id', $id)->delete();
        return view('welcome');
    }
}
