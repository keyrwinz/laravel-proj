<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
    	Mail::send(['text'=>'mail'], ['name', 'kevin'], function($message){
    		$message->to('keyrwinfelisilda@gmail.com', 'to keyrwin')->subject('Test Email');
    		$message->from('keyrwinfelisilda@gmail.com', 'keyrwin');
    	});
    }
}
