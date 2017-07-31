<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
	public function test()
    {
        return $this->hasMany('App\test')->paginate(2);
    }
}
