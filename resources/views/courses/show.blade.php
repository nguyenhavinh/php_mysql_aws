@extends('layouts.app')

@section('content')
    <h1>Show Course</h1>    
    <a href="/course" class="btn btn-primary">GO BACK</a>    
    <table class="table">
        <tr>
            <th><h4>Attribute</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>Course Id</th>
            <th>{{$course->courseId}}</th>
        </tr>
        <tr>
            <th>Course Name</th>
            <th>{{$course->courseName}}</th>
        </tr>
        <tr>
            <th>Teaching Staff</th> 
            <th>           
                @if(count($staff) > 0)
                    @foreach($staff as $s)
                        <p>{{$s->fullName}}</p>
                    @endforeach
                @else
                    <p>NO STAFF FOUND</p>
                @endif
            </th>
        </tr>
        <tr>
            <th>Student Enrolled</th>
            <th>
                @if(count($students) > 0)
                    <h5>Number of students in this course: {{count($students)}}</h5>
                    <table class="table">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                        </tr>
                    @foreach($students as $student)
                        <tr>
                        <th>{{$student->studentId}}</th><th>{{$student->fullName}}</th>
                        </tr>
                    @endforeach
                    </table>
                @else
                    <p>NO STAFF FOUND</p>
                @endif
            </th>
        </tr>
        <tr>
            <th>Created At</th>
            <th>{{$course->created_at}}</th>
        </tr>
        <tr>
            <th>Update At</th>
            <th>{{$course->updated_at}}</th>
        </tr>        
    </table>
@endsection