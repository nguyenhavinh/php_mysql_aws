@extends('layouts.app')

@section('content')
    <h1>Show Student</h1>    
    <a href="/student" class="btn btn-primary">GO BACK</a>    
    <table class="table">
        <tr>
            <th><h4>Attribute</h4></th>
            <th><h4>Value</h4></th>
        </tr>
        <tr>
            <th>Student Id</th>
            <th>{{$student->studentId}}</th>
        </tr>
        <tr>
            <th>Full Name</th>
            <th>{{$student->fullName}}</th>
        </tr>
        <tr>
            <th>Email</th>
            <th>{{$student->email}}</th>
        </tr>        
        <tr>
            <th>Created At</th>
            <th>{{$student->created_at}}</th>
        </tr>
        <tr>
            <th>Update At</th>
            <th>{{$student->updated_at}}</th>
        </tr>
        <tr>
            <th>Enrolled In</th>
            <th>
                @if(count($courses) > 0)
                    @foreach($courses as $c)
                        <p>{{$c->courseName}}</p>
                    @endforeach
                @else
                    <p>NO COURSE FOUND</p>
                @endif
            </th>
        </tr>
    </table>
@endsection