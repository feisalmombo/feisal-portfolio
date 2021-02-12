@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
<br>
<div class="row">
<section class="content">
<div class="col-lg-12">
@include('msgs.success')
<div class="panel panel-default">
<div class="panel-heading">
    List of contacts
</div>
<div class="panel-body table-responsive">
    @if(count($contacts)>0)
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Duration</th>

            </tr>
        </thead>
        <tbody>

            @foreach($contacts as $key=>$contact)
            <tr class="odd gradeX">
            <td>{{$key + 1 }}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->message}}</td>
            <td>{{$contact->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>No Contact found</strong>
    </div>
    @endif
</div>
</div>
</div>
</div>
</section>
@endsection
