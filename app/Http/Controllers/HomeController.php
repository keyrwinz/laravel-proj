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
		$user = user::find(1);
		$usernum = user::find(1)->passport;
		return view('test', compact('user'), compact('usernum'));
	}
}
