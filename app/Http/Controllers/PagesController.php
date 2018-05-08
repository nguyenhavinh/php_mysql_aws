<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function staff_index(){
        return view('pages.staff');
    }
    public function course_index(){
        return view('pages.course');
    }
    public function student_index(){
        return view('pages.student');
    }
}
