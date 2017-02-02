<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
        $users = \DB::select('select * from users');
        return view('lista',['users'=>$users]);
    }
    public function usuario(Request $request){
        $value = \Auth::user()->id;


        $user = \DB::table('users')->where('id', '=', $value)->get();
        

        return view('auth.user',['user' => $user]);

    }
}
