<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class dbaseController extends Controller
{
    public function dbase()
    {
    	$users = test::paginate(5);
    	//$users = test::simplePaginate(5);
    	return view('dbase', compact('users'));
    }
}
