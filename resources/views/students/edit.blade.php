@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1> 
    <table>
        <tr>   
        <th><a href="/student" class="btn btn-primary">GO BACK</a></th>    
        <th>
        {!! Form::open(['action' => ['StudentsController@destroy', $student->studentId], 'method' => 'POST', 'class' => 'pull-right'])!!}        
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('DELETE', ['class'=>'btn btn-danger'])}}            
        {!! Form::close() !!}
        </th>
        <tr>
    </table>
    {!! Form::open(['action' => ['StudentsController@update', $student->studentId], 'method' => 'POST']) !!}        
        <table class="table">
        <tr>
            <th><h4>Attribute Name</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>{{Form::label('studentId', 'Student ID')}}</th>
            <th>{{Form::label('studentId', $student->studentId)}}</th>
        </tr>
        <tr>
            <th>{{Form::label('fullName', 'Full Name')}}</th>
            <th>{{Form::text('fullName', $student->fullName, ['class' =>'form-control', 'placeholder' => 'Input Full Name'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('email', 'Email')}}</th>
            <th>{{Form::text('email', $student->email, ['class' =>'form-control', 'placeholder' => 'Input Email Address'])}}</th>
        </tr>        
        </table>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('UPDATE', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}

@endsection