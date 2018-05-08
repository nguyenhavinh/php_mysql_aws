@extends('layouts.app')

@section('content')
    <h1>Edit Staff</h1> 
    <table>
        <tr>   
        <th><a href="/staff" class="btn btn-primary">GO BACK</a></th>    
        <th>
        {!! Form::open(['action' => ['StaffsController@destroy', $staff->staffId], 'method' => 'POST', 'class' => 'pull-right'])!!}        
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('DELETE', ['class'=>'btn btn-danger'])}}            
        {!! Form::close() !!}
        </th>
        <tr>
    </table>
    {!! Form::open(['action' => ['StaffsController@update', $staff->staffId], 'method' => 'POST']) !!}        
        <table class="table">
        <tr>
            <th><h4>Attribute Name</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>{{Form::label('staffId', 'Staff ID')}}</th>
            <th>{{Form::label('staffId', $staff->staffId)}}</th>
        </tr>
        <tr>
            <th>{{Form::label('fullName', 'Full Name')}}</th>
            <th>{{Form::text('fullName', $staff->fullName, ['class' =>'form-control', 'placeholder' => 'Input Full Name'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('email', 'Email')}}</th>
            <th>{{Form::text('email', $staff->email, ['class' =>'form-control', 'placeholder' => 'Input Email Address'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('phoneNumber', 'Phone Number')}}</th>
            <th>{{Form::text('phoneNumber', $staff->phoneNumber, ['class' =>'form-control', 'placeholder' => 'Input Phone Number'])}}</th>
        </tr>
        </table>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('UPDATE', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}

@endsection