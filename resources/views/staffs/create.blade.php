@extends('layouts.app')

@section('content')
    <h1>Create Staff</h1>
    <a href="/staff" class="btn btn-primary">GO BACK</a>       
    {!! Form::open(['action' => 'StaffsController@store', 'method' => 'POST']) !!}        
        <table class="table">
        <tr>
            <th><h4>Attribute Name</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>{{Form::label('staffId', 'Staff ID')}}</th>
            <th>{{Form::text('staffId', '', ['class' =>'form-control', 'placeholder' => 'Input Staff Id'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('fullName', 'Full Name')}}</th>
            <th>{{Form::text('fullName', '', ['class' =>'form-control', 'placeholder' => 'Input Full Name'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('email', 'Email')}}</th>
            <th>{{Form::text('email', '', ['class' =>'form-control', 'placeholder' => 'Input Email Address'])}}</th>
        </tr>
        <tr>
            <th>{{Form::label('phoneNumber', 'Phone Number')}}</th>
            <th>{{Form::text('phoneNumber', '', ['class' =>'form-control', 'placeholder' => 'Input Phone Number'])}}</th>
        </tr>
        </table>
        {{Form::submit('SUBMIT', ['class'=>'btn btn-primary'])}}        
    {!! Form::close() !!}
@endsection