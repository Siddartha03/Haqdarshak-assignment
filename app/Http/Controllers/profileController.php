<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;

class profileController extends Controller
{
    public function formSubmit(Request $req)
    {
        $req->validate([
            'name'=>"required|min:4",
            'email'=>"required | email",
            'password' => 'required|alphaNum|confirmed|min:6'
        ]);
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;

        $p = new \App\profile;
        $p->name = $name;
        $p->email = $email;
        $p->password = $password;
        $p->save();

        return view('signin');
    }  
    public function login(Request $req)
    {
        $req->validate([
            'email'=>"required | email",
            'password' => 'required|alphaNum|min:6'
        ]);
        $email = $req->email;
        return view("finance",compact('email'));
    }
}