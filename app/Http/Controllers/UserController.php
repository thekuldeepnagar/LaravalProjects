<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
                return "Username and passsword is not define";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    
    }
    function register(Request $req)
    {
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->mobile=$req->number;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
