<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;

class HomeController extends Controller
{
	public function home()
	{
		return view('welcome');
	}

	public function test()
	{
		$user = user::find(3);
		$mobiles = user::find(3)->mobile;
		return view('test', compact('mobiles'), compact('user'));
	}
}
