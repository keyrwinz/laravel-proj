<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;
use App\email;

class dbaseController extends Controller
{
    public function dbase()
    {
    	$users = email::find(1)->test();
    	//$users = test::simplePaginate(5);
    	return view('dbase', compact('users'));
    }
}
