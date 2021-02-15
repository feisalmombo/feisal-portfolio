@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<br>
<div class="row">
<section class="content">
<div class="col-lg-12">
@include('msgs.success')
<div class="panel panel-default">
<div class="panel-heading">
    List of Skills
    <a href="{{ url('admin/skills/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add Skill</a>
</div>
<div class="panel-body table-responsive">
    @if(count($skills)>0)
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Details</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Duration</th>

            </tr>
        </thead>
        <tbody>

            @foreach($skills as $key=>$skill)
            <tr class="odd gradeX">
            <td>{{$key + 1 }}</td>
            <td>{{$skill->skills_name}}</td>
            <td>{{$skill->skills_description}}</td>
            <td>Show</td>
            <td>Edit</td>
            <td>
                <a href='#{{ $skill->id }}' data-toggle="modal" type="button" class="btn btn-danger"><i class="fa fa-trash" arial-hidden="true"></i></a>
                <div class="modal fade" id="{{ $skill->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Delete</strong></h4>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete Skill Name? <h9 style="color: blue;">{{ $skill->skills_name }}</h9>
                            </div>
                            <form action="admin/skills/{{ $skill->id }}/destroy" method="POST" role="form">

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
            <td>{{$skill->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>No Skill found</strong>
    </div>
    @endif
</div>
</div>
</div>
</div>
</section>
@endsection
