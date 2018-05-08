@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    <a href="/course/create" class="btn btn-primary">CREATE NEW COURSE</a>        
    @if(count($courses) > 0)
        <table class="table">
            <tr>
                <th><h4>Course ID</h4></th>
                <th><h4>Course Name</h4></th>
                <th><h4>Operation Functions</h4></th>
            </tr>        
        @foreach($courses as $course)
            <tr>
                <th>{{$course->courseId}}</th>
                <th>{{$course->courseName}}</th>
                <th>
                    <a href="/course/{{$course->courseId}}" class="btn btn-primary">DETAIL</a>                    
                    <a href="/course/{{$course->courseId}}/edit" class="btn btn-danger">EDIT/DELETE</a>
                </th>
            </tr>            
        @endforeach
        </table>    
        {{$courses->links()}}
    @else
        <p>NO COURSE FOUND</p>
    @endif
@endsection