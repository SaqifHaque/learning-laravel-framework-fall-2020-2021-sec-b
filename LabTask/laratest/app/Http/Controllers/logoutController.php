<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class logoutController extends Controller
{
    public function index(Request $req){
    	$req->session()->flush();

    	return redirect()->route('login.login');
    }
}