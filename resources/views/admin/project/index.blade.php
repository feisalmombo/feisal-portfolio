@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<br>
<section class="content">
<div class="row">
	<div class="col-lg-12">
		@include('msgs.success')
		<div class="panel panel-default">
			<div class="panel-heading">
                List of Projects
                <a href="{{ url('admin/project/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add Project</a>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Project Title</th>
                      <th>Project Details</th>
                      <th>Project Image</th>
                      <th>Duration</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
				{{--  @else
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>No Project found</strong>
				</div>
				@endif  --}}
			</div>
		</div>
	</div>
</div>

</section>
@endsection
