@extends('layouts.app')

@section('content')
    <h1>Create Courses</h1>    
    <a href="/course" class="btn btn-primary">GO BACK</a>           
    {!! Form::open(['action' => 'CoursesController@store', 'method' => 'POST']) !!}        
        <table class="table">
        <tr>
            <th><h4>Attribute Name</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>{{Form::label('courseId', 'Course ID')}}</th>
            <th>{{Form::text('courseId', '', ['class' =>'form-control', 'placeholder' => 'Input Course Id'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('courseName', 'Course Name')}}</th>
            <th>{{Form::text('courseName', '', ['class' =>'form-control', 'placeholder' => 'Input Course Name'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('staffId', 'Teaching Staff')}}</th>
            <th><select class="form-control" name="staffId">
                @foreach($staffs as $staff)
                    <option value="{{$staff->staffId}}">{{$staff->fullName}}</option>
                @endforeach
            </select>
            </th>
        </tr>        
        </table>
        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}
@endsection