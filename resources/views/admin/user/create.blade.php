@extends('layouts.app')

@section('title', 'Add User')

@section('content')
<br>

<div class="row">
    <section class="content">
	<div class="col-lg-12">
		@include('msgs.success')
		<div class="panel panel-default">
			<div class="panel-heading">
				Create User<a href="{{ url('admin/user/index') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
			</div>
			<div class="panel-body">
				<div class="container-fluid">
					<section class="container col-sm-offset-3">
						<div class="container-page">
							<div class="col-sm-6">
								<form role="form"  action="{{ url('admin/user/create') }}" method="POST" enctype="multipart/form-data">

									{{ csrf_field() }}

									<div class="col-lg-12 center-block">
                                        <br>
                                        <div class="form-group">
											<label>First Name</label>
											<input class="form-control" name="firstname" id="firstname" required="required">
                                        </div>

                                        <div class="form-group">
											<label>Middle Name (Optional)</label>
											<input class="form-control" name="middlename" id="middlename">
                                        </div>

                                        <div class="form-group">
											<label>Last Name</label>
											<input class="form-control" name="lastname" id="lastname" required="required">
                                        </div>

                                        <div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" name="email" id="email" required="required">
                                        </div>

                                        <div class="form-group">
											<label>Phone Number</label>
											<input class="form-control" type="tel" name="phonenumber" id="phonenumber" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" id="image" class="form-control" required="required">
                                        </div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary">
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
