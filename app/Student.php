<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'Student';
    public $incrementing = false;
    public $primaryKey = 'studentId';
    public $timestamps = 'true';
}
