@extends('layouts.app')

@section('content')
    <h1>Student Enrollment</h1> 
    <a href="/student" class="btn btn-primary">GO BACK</a>
    <br>
    <h3>Select courses in the list below to enroll: </h3>
    <br>
    {!! Form::open(['action' => ['StudentsController@saveenroll', $student->studentId], 'method' => 'POST']) !!}        
    <table class="table">
        <tr>
            <th>Student Information</th>
            <th>Course information</th>
        </tr>
        <tr>
            <th>
                <h5>Student ID: {{$student->studentId}}</h5>
                <h5>Student Name: {{$student->fullName}}</h5>                
            </th>
            <th>
                @if (count($courses) > 0)
                    @foreach ($courses as $course)
                        <h5>
                        <input type="checkbox" name="coursesEnroll[]" id="{{$course->courseId}}" value="{{$course->courseId}}">
                        <label for="{{$course->courseId}}">{{$course->courseName}}</label>  
                        </h5>
                    @endforeach
                @else
                    <h5>NO COURSE FOUND, PLEASE CREATE COURSE FIRST</h5>
                @endif
            </th>
        </tr>
    </table>            
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}

@endsection