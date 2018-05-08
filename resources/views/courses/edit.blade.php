@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1> 
    <table>
        <tr>   
        <th><a href="/course" class="btn btn-primary">GO BACK</a></th>    
        <th>
        {!! Form::open(['action' => ['CoursesController@destroy', $course->courseId], 'method' => 'POST', 'class' => 'pull-right'])!!}        
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('DELETE', ['class'=>'btn btn-danger'])}}            
        {!! Form::close() !!}
        </th>
        <tr>
    </table>
    {!! Form::open(['action' => ['CoursesController@update', $course->courseId], 'method' => 'POST']) !!}        
        <table class="table">
        <tr>
            <th><h4>Attribute Name</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>{{Form::label('courseId', 'Course ID')}}</th>
            <th>{{Form::label('courseId', $course->courseId)}}</th>
        </tr>
        <tr>
            <th>{{Form::label('courseName', 'Course Name')}}</th>
            <th>{{Form::text('courseName', $course->courseName, ['class' =>'form-control', 'placeholder' => 'Input Course Name'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('staffId', 'Teaching Staff')}}</th>
            <th><select class="form-control" name="staffId">
                @foreach($staffs as $staff)
                    <option value="{{$staff->staffId}}" <?php if($staff->staffId == $course->staffId) echo "SELECTED";?> >
                        {{$staff->fullName}}
                    </option>
                @endforeach
            </select>
            </th>
        </tr>        
        </table>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('UPDATE', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}

@endsection