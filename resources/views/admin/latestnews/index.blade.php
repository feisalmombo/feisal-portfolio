@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<br>
<div class="row">
<section class="content">
<div class="col-lg-12">
@include('msgs.success')
<div class="panel panel-default">
<div class="panel-heading">
    List of Latest News
    <a href="{{ url('admin/latestnews/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add News</a>
</div>
<div class="panel-body table-responsive">
    @if(count($latestnews)>0)
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Image</th>
                <th>Links</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Duration</th>

            </tr>
        </thead>
        <tbody>

            @foreach($latestnews as $key=>$latestnew)
            <tr class="odd gradeX">
            <td>{{$key + 1 }}</td>
            <td>{{$latestnew->news_title}}</td>
            <td>
                <a href="{{ asset('storage/'.$latestnew->news_image) }}" target="_blank" type="button" class="btn btn-warning"><i class="fa fa-download" arial-hidden="true"></i></a>
             </td>
            <td>{{$latestnew->news_link}}</td>
            <td>Show</td>
            <td>Edit</td>
            <td>Delete</td>
            <td>{{$latestnew->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>No Latest news found</strong>
    </div>
    @endif
</div>
</div>
</div>
</div>
</section>
@endsection
