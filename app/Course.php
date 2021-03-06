<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Courses';
    public $incrementing = false;
    public $primaryKey = 'courseId';
    public $timestamps = 'true';

    public function studentscourses(){
        return $this->hasMany('App\StudentsCourses', 'courseId');
    }
}
