<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\sendMail;
use App\user;

class mailController extends Controller
{
    public function send()
    {
    	Mail::send(new SendMail());
    }

    public function email()
    {
    	return view('email');
    }
}
