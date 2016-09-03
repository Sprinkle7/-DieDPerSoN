<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class UsersRegistration extends Controller
{
    //
    public function index()
    {
    	$Users = DB::table('users')->get();
    	return view('users', compact('Users'));
    }
}
