<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datatable extends Model
{
    protected $fillable=['name', 'email', 'cnic', 'phone', 'address',];
}
