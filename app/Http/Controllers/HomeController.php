<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\post;
use App\video;

class HomeController extends Controller
{
	public function home()
	{
		return view('welcome');
	}

	public function test()
	{
		$post = post::find(1);
		$video = video::find(1);
		return view('test', compact('post'), compact('video'));
	}
}
