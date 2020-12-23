<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class registrationController extends Controller
{
    public function Registration()
    {
        return view('login.registration');
    }

    public function Register(Request $req)
    {
        $user = new User();

        $user->u_name     = $req->u_name;
        $user->password     = $req->password;
        $user->fullname    = $req->fullname;
        $user->type         = "Employee";
        $user->c_name = $req->c_name;
        $user->contact      = $req->contact;

        if ($user->save()) {
            return redirect()->route('login.login');
        }
        else{
            echo "Server Error";
        }
    }  
}
