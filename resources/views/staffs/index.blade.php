@extends('layouts.app')

@section('content')
    <h1>Staffs</h1>
    <a href="/staff/create" class="btn btn-primary">CREATE NEW STAFF</a>    
    @if(count($staffs) > 0)
        <table class="table">
            <tr>
                <th><h4>Staff ID</h4></th>
                <th><h4>Staff Name</h4></th>
                <th><h4>Operation Functions</h4></th>
            </tr>        
        @foreach($staffs as $staff)
            <tr>
                <th>{{$staff->staffId}}</th>
                <th>{{$staff->fullName}}</th>
                <th>
                    <a href="/staff/{{$staff->staffId}}" class="btn btn-primary">DETAIL</a>                    
                    <a href="/staff/{{$staff->staffId}}/edit" class="btn btn-danger">EDIT/DELETE</a>
                </th>
            </tr>            
        @endforeach
        </table>    
        {{$staffs->links()}}
    @else
        <p>NO STAFF FOUND</p>
    @endif
@endsection