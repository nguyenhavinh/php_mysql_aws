<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{    
    protected $table = 'Staff';
    public $incrementing = false;
    public $primaryKey = 'staffId';
    public $timestamps = 'true';
}
