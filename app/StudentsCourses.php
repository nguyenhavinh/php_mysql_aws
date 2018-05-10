<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsCourses extends Model
{
    protected $table = 'Students_Courses';    
    public $primaryKey = 'id';
    public $timestamps = 'true';

    public function course(){
        return $this->belongsTo('App\Course', 'courseId');
    }
    public function student(){
        return $this->belongsTo('App\Student', 'studentId');
    }
}
