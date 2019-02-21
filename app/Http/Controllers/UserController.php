<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user =  Auth::user();
        return view('account')->with('user' , $user);
    }
    public function update(Request $request)
    {
        $user =  Auth::user();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
//        $user->gender = $request->input('gender');
        $user->save();
        return redirect('/home')->with('success'  , 'Acoount Updated');
    }
}
