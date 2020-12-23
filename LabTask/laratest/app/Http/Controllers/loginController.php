<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
    public function Login()
    {
        return view('login.login');
    }

    public function ValidateLogin(Request $req)
    {
        $user  = User::where('email', $req->email)
                        ->where('password', $req->password)
                        ->first();
        if(count($user) > 0)
        {
            $req->session()->put('email', $user->email);
            $req->session()->put('type', $user->type);
            
    		return redirect()->route('home.index');
        }
        else{
            echo "failed";
        }
    }
    
}
