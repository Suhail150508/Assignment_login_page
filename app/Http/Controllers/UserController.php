<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.user_list',compact('users'));

    }
    public function create()
    {
        return view('user.user_create');

    }

    public function store(Request $request)
    {
      $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);
        
        User::create($validate);

        return redirect()->route('users.index');
    }
}
