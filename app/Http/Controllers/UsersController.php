<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Auth;
use DB;


class UsersController extends Controller
{
    //
    function show()
    {
        $users = Users::all()->toArray();
        return view('perfil', ['users'=>$users]);
    }
    public function index()
    {
        $niu =  Auth::user()->niu; 
        $users = DB::table('users')
                ->get();
        return view('perfil', ['users'=>$users]);
    }
}
