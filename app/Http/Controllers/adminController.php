<?php

namespace App\Http\Controllers;

use App\Model\Flat;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public  function  admin()
    {
        $flats = Flat::all();
        $users = User::all();
        $bookflat = Flat::where('status', ' == ', ' 0 ')->get();
        return view('admin.admin' , compact('flats' , $flats , 'users' , $users, 'bookflat', $bookflat));
    }
    public function all()
    {
//        $users = User::all();
        $users = User::orderBy('created_at' , 'asc')->paginate(5);
        return view('admin.allusers',compact('users' , $users));
    }
    public function udelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
    public function create()
    {
        return view('admin.adduser');
    }

    public function store(Request $request)
    {
        $user =  new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->gender = $request->input('gender');
        $user->role = $request->input('role');
        $user->save();
        return redirect('/control')->with('success'  , 'User Added successfully');
    }

    public  function flatAccess()
    {
//        $flats =  Flat::all();
//        $flats = DB::table('flats')->paginate(1);
        $flats = Flat::orderBy('created_at' , 'desc')->paginate(8);
        $users = DB::select('SELECT * FROM users');
        return view('admin.flatAccess' , compact('flats' , $flats ,'users' , $users));
    }
    public function activate($flat)
    {
        $flats = Flat::find($flat);
        $flats->activate = 1;
        $flats->save();
        return back();

    }
    public function notActive()
    {
        $flats = DB::select('SELECT * FROM flats where activate = 0');
        $users = DB::select('SELECT * FROM users');
        return view('admin.notActive' , compact('flats' , $flats , 'users' , $users));
    }
    public function BookedFlats()
    {
        $flats = Flat::where('status', ' == ', ' 0 ')->paginate(5);
        $users = DB::select('SELECT * FROM users');
        return view('flats.bookedflats',compact('flats', $flats, 'users', $users));
    }

}
