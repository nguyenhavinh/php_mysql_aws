<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Course;
use DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('courseId', 'desc')->paginate(10);
        //$staffs = DB::select('SELECT * FROM Staff');
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$staffs = Staff::orderBy('staffId', 'desc');
        $staffs = DB::select('SELECT * FROM Staff');
        return view('courses.create')->with('staffs', $staffs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'courseId' => 'required',
            'courseName' => 'required',            
        ]);
        $course = new Course;
        $course->courseId = $request->input('courseId');
        $course->courseName = $request->input('courseName');
        $course->staffId = $request->input('staffId');        
        $course->save();
        return redirect('/course')->with('success', 'New Course Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        $staff = DB::select(DB::raw("SELECT * FROM Staff WHERE Staff.staffId = '$course->staffId'"));
        //$courses = Course::find($id);
        return view('courses.show')->with('course', $course)->with('staff', $staff);
        //return $staff;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $staffs = DB::select('SELECT * FROM Staff');
        return view('courses.edit')->with('course', $course)->with('staffs', $staffs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [             
            'courseName' => 'required',            
        ]);
        $course = Course::find($id);
        $course->courseName = $request->input('courseName');
        $course->staffId = $request->input('staffId');        
        $course->save();
        return redirect('/course')->with('success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('/course')->with('success', 'Course Deleted');
    }
}
