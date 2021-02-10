@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
<div class="col-lg-12">
    <h1 class="page-header">All contacts</h1>
</div>

<div class="row">
<section class="content">
<div class="col-lg-12">
@include('msgs.success')
<div class="panel panel-default">
<div class="panel-heading">
    List of contacts
    <a href="{{ url('/setting/contact/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Reply</a>
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
                <th>Created at</th>
                <th>Delete</th>

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
            <td>
                <a href='#{{ $contact->id }}' data-toggle="modal" type="button" class="btn btn-danger"><i class="fa fa-trash" arial-hidden="true"></i></a>
                <div class="modal fade" id="{{ $contact->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Delete</strong></h4>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete Name? <h9 style="color: blue;">{{ $contact->name }} </h9>
                            </div>
                            <form action="setting/contact/{{ $contact->id  }}" method="POST" role="form">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>

                                    <button type="submit" class="btn btn-danger">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
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
