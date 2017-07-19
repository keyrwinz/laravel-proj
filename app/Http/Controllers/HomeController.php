<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;
use App\role;

class HomeController extends Controller
{
	public function home()
	{
		return view('welcome');
	}

	public function test()
	{
		//$users = user::find(1)->roles;
		$users = role::find(3)->users;
		return view('test', compact('users'));
	}
}
