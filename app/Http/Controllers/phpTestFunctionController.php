<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class phpTestFunctionController extends Controller
{
    public function index(Request $request){

    	// $user_ip = $_SERVER['REMOTE_ADDR'];
    	return view('testOfPhpFunctions.testOfPhpFunctions', compact('user_ip'));
    }

   


    public function tokens(){


    	return view('testOfPhpFunctions.token');
    }
}
