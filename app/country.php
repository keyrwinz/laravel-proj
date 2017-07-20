<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    public function posts()
    {
    	return $this->hasManyThrough('App\Post', 'App\User', 'countries_id', 'user_id', 'id');
    }
}
