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
        $user  = User::where('uname', $req->uname)
                        ->where('password', $req->password)
                        ->first();
        if($user)
        {
            $req->session()->put('uname', $user->u_name);
            $req->session()->put('type', $user->type);

            if($user->type === "Admin"){
                return redirect()->route('home.index');
            }
            else{
                return redirect()->route('home.index');
            }
        }
        else{
            echo "failed";
        }
    }
    
}
