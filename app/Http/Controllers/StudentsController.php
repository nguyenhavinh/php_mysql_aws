<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Course;
use App\Student;
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('studentId', 'desc')->paginate(10);
        //$staffs = DB::select('SELECT * FROM Staff');
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'studentId' => 'required',
            'fullName' => 'required',
            'email' => 'required',            
        ]);
        $student = new Student;
        $student->studentId = $request->input('studentId');
        $student->fullName = $request->input('fullName');
        $student->email = $request->input('email');        
        $student->save();
        return redirect('/student')->with('success', 'New Student Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        //$courses = Course::find($id);
        $courses = DB::select(DB::raw("SELECT * FROM Students_Courses WHERE Students_Courses.studentId = '$student->studentId'"));
        return view('students.show')->with('student', $student)->with('courses', $courses);
        //return $courses;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
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
            'fullName' => 'required',
            'email' => 'required',            
        ]);
        $student = Student::find($id);        
        $student->fullName = $request->input('fullName');
        $student->email = $request->input('email');        
        $student->save();
        return redirect('/student')->with('success', 'Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with('success', 'Student Deleted');
    }
    public function enroll($id)
    {
        $student = Student::find($id);
        //$courses = DB::select('SELECT * FROM Courses');
        $courses = Course::pluck('courseId', 'courseName');
        return view('students.enroll')->with('student', $student)->with('courses',$courses);
    }
}
