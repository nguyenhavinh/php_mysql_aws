<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsCourses extends Model
{
    protected $table = 'StudentsCourses';    
    public $primaryKey = 'id';
    public $timestamps = 'true';
}
