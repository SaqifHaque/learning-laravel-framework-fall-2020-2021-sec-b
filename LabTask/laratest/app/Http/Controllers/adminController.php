<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class adminController extends Controller
{
    public function Admin()
    {
        return view('admin.admindash');
    }
    public function addEmp()
    {
        return view('admin.addEmp');
    }
    public function createEmp(Request $req)
    {
        $user = new User();

        $user->u_name     = $req->u_name;
        $user->password     = $req->password;
        $user->fullname    = $req->fullname;
        $user->type         = "Employee";
        $user->c_name = $req->c_name;
        $user->contact      = $req->contact;

        if ($user->save()) {
            return redirect()->route('admin.admindash');
        }
        else{
            echo "Server Error";
        }
    }
    
}
