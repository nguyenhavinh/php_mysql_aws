@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>
    <a href="/student" class="btn btn-primary">GO BACK</a>       
    {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}        
        <table class="table">
        <tr>
            <th><h4>Attribute Name</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>{{Form::label('studentId', 'Student ID')}}</th>
            <th>{{Form::text('studentId', '', ['class' =>'form-control', 'placeholder' => 'Input Student Id'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('fullName', 'Full Name')}}</th>
            <th>{{Form::text('fullName', '', ['class' =>'form-control', 'placeholder' => 'Input Full Name'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('email', 'Email')}}</th>
            <th>{{Form::text('email', '', ['class' =>'form-control', 'placeholder' => 'Input Email Address'])}}</th>
        </tr>        
        </table>
        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}
@endsection