@extends('layouts.app')

@section('title', 'Add Project')

@section('content')
<br>

<div class="row">
    <section class="content">
	<div class="col-lg-12">
		@include('msgs.success')
		<div class="panel panel-default">
			<div class="panel-heading">
				Create Project<a href="{{ url('admin/project') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<section class="container col-sm-offset-3">
						<div class="container-page">
							<div class="col-sm-6">
								<form role="form"  action="{{ url('admin/project') }}" method="POST" enctype="multipart/form-data">

									{{ csrf_field() }}

									<div class="col-lg-12 center-block">
                                        <br>
                                        <div class="form-group">
											<label>Title</label>
											<input class="form-control" name="project_title" id="project_title" required="required">
                                        </div>

                                        <div class="form-group">
											<label>Detail</label>
											<input class="form-control" name="project_detail" id="project_detail" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="project_attachment" id="project_attachment" class="form-control" required="required">
                                        </div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary center-block">
												Save
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection
