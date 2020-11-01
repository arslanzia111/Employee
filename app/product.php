<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function customer()
    {
        return $this->belongsToMany('App\customer');
    }
}
