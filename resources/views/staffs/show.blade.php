@extends('layouts.app')

@section('content')
    <h1>Show Staff</h1>    
    <a href="/staff" class="btn btn-primary">GO BACK</a>    
    <table class="table">
        <tr>
            <th><h4>Attribute</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>Staff Id</th>
            <th>{{$staff->staffId}}</th>
        </tr>
        <tr>
            <th>Full Name</th>
            <th>{{$staff->fullName}}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>{{$staff->email}}</th>
        </tr>
        <tr>
            <th>Phone Number</th>
            <th>{{$staff->phoneNumber}}</th>
        </tr>
        <tr>
            <th>Created At</th>
            <th>{{$staff->created_at}}</th>
        </tr>
        <tr>
            <th>Update At</th>
            <th>{{$staff->updated_at}}</th>
        </tr>
        <tr>
            <th>Holding Classes</th>
            <th>{{$staff->created_at}}</th>
        </tr>
    </table>
@endsection