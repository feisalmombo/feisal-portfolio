@extends('layouts.app')

@section('title', 'Users')

@section('content')
<br>
<div class="row">
<section class="content">
<div class="col-lg-12">
@include('msgs.success')
<div class="panel panel-default">
<div class="panel-heading">
    List of Users
    <a href="{{ url('admin/user/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add User</a>
</div>
<div class="panel-body table-responsive">
    @if(count($users)>0)
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Image</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Duration</th>

            </tr>
        </thead>
        <tbody>

            @foreach($users as $key=>$user)
            <tr class="odd gradeX">
            <td>{{$key + 1 }}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->middle_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
            <td>
                <a href="{{ asset('storage/'.$user->userphoto_path) }}" target="_blank" type="button" class="btn btn-warning"><i class="fa fa-download" arial-hidden="true"></i></a>
            </td>
            <td>Show</td>
            <td>Edit</td>
            <td>Delete</td>
            <td>{{$user->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>No User found</strong>
    </div>
    @endif
</div>
</div>
</div>
</div>
</section>
@endsection
