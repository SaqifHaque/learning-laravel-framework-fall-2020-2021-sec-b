<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class employeeController extends Controller
{
    public function Employee()
    {
        return view('emp.empdash');
    }
    
}
