<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Course;
use DB;
class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::orderBy('staffId', 'desc')->paginate(10);
        //$staffs = DB::select('SELECT * FROM Staff');
        return view('staffs.index')->with('staffs', $staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('staffs.create');
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
            'staffId' => 'required',
            'fullName' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required'
        ]);
        $staff = new Staff;
        $staff->staffId = $request->input('staffId');
        $staff->fullName = $request->input('fullName');
        $staff->email = $request->input('email');
        $staff->phoneNumber = $request->input('phoneNumber');
        $staff->save();
        return redirect('/staff')->with('success', 'New Staff Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::find($id);
        //$courses = Course::find($id);
        $courses = DB::select(DB::raw("SELECT * FROM Courses WHERE Courses.staffId = '$staff->staffId'"));
        return view('staffs.show')->with('staff', $staff)->with('courses', $courses);
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
        $staff = Staff::find($id);
        return view('staffs.edit')->with('staff', $staff);
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
            'phoneNumber' => 'required'
        ]);
        $staff = Staff::find($id);        
        $staff->fullName = $request->input('fullName');
        $staff->email = $request->input('email');
        $staff->phoneNumber = $request->input('phoneNumber');
        $staff->save();
        return redirect('/staff')->with('success', 'Staff Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect('/staff')->with('success', 'Staff Deleted');
    }
}
