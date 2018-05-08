@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <a href="/student/create" class="btn btn-primary">CREATE NEW STUDENT</a>    
    @if(count($students) > 0)
        <table class="table">
            <tr>
                <th><h4>Student ID</h4></th>
                <th><h4>Student Name</h4></th>
                <th><h4>Email</h4></th>
                <th><h4>Operation Functions</h4></th>
            </tr>        
        @foreach($students as $student)
            <tr>
                <th>{{$student->studentId}}</th>
                <th>{{$student->fullName}}</th>
                <th>{{$student->email}}</th>
                <th>
                    <a href="/student/{{$student->studentId}}" class="btn btn-primary">DETAIL</a>     
                    <a href="/student/{{$student->studentId}}/enroll" class="btn btn-primary">ENROLL</a>                    
                    <a href="/student/{{$student->studentId}}/edit" class="btn btn-danger">EDIT/DELETE</a>
                </th>
            </tr>            
        @endforeach
        </table>    
        {{$students->links()}}
    @else
        <p>NO STUDENT FOUND</p>
    @endif
@endsection