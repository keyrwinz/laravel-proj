<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\country;

class HomeController extends Controller
{
	public function home()
	{
		return view('welcome');
	}

	public function test()
	{
		$posts = country::find(2)->posts;
		return $posts;
	}
}
