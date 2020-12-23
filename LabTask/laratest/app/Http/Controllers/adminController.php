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
    
}
