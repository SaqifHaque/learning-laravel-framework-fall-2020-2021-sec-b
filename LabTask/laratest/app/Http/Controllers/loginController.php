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
        $user  = User::where('u_name', $req->uname)
                        ->where('password', $req->password)
                        ->first();
        if($user)
        {
            $req->session()->put('uname', $user->u_name);
            $req->session()->put('type', $user->type);

            if($user->type == "Admin"){
                return redirect()->route('admin.admindash');
            }
            else if($user->type == "Employee"){
                return redirect()->route('emp.empdash');
            }
        }
        else{
            return redirect()->route('login.login');
        }
    }
    
}
