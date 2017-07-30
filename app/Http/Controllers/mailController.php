<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\newMail;
use App\user;

class mailController extends Controller
{
    public function send()
    {
    	Mail::send(new newMail());
    }

    public function email()
    {
    	return view('email');
    }
}
