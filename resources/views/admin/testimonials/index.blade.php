@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')
<br>
<div class="row">
<section class="content">
<div class="col-lg-12">
@include('msgs.success')
<div class="panel panel-default">
<div class="panel-heading">
    List of Testimonials
    <a href="{{ url('admin/testimonials/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add Testimonial</a>
</div>
<div class="panel-body table-responsive">
    @if(count($testimonials)>0)
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Occupation</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Duration</th>

            </tr>
        </thead>
        <tbody>

            @foreach($testimonials as $key=>$testimonial)
            <tr class="odd gradeX">
            <td>{{$key + 1 }}</td>
            <td>{{$testimonial->personal_name}}</td>
            <td>{{$testimonial->testimonial_description}}</td>
            <td>
                <a href="{{ asset('storage/'.$testimonial->testimonial_image) }}" target="_blank" type="button" class="btn btn-warning"><i class="fa fa-download" arial-hidden="true"></i></a>
            </td>
            <td>{{$testimonial->testimonial_occupation}}</td>
            <td>Show</td>
            <td>Edit</td>
            <td>Delete</td>
            <td>{{$testimonial->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>No Testimonial found</strong>
    </div>
    @endif
</div>
</div>
</div>
</div>
</section>
@endsection
