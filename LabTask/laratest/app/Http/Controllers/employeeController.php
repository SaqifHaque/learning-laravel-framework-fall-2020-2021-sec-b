<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Job;

class employeeController extends Controller
{
    public function Employee()
    {
        return view('emp.empdash');
    }
    public function addJob(Request $req)
    {
        $Job = new Job();

        $Job->c_name     = $req->c_name;
        $Job->j_title     = $req->j_title;
        $Job->location    = $req->location;
        $Job->salary    = $req->salary;

        if ($Job->save()) {
            return redirect()->route('emp.empdash');
        }
        else{
            echo "Server Error";
        }
    }
    
}
