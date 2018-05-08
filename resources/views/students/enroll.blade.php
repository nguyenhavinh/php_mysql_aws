@extends('layouts.app')

@section('content')
    <h1>Student Enrollment</h1> 
    <a href="/student" class="btn btn-primary">GO BACK</a>
    <br>
    <h3>Select courses in the list below to enroll: </h3>
    <br>
    {!! Form::open(['action' => ['StudentsController@update', $student->studentId], 'method' => 'POST']) !!}        
        {{Form::select('courses', $courses)}}
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}

@endsection