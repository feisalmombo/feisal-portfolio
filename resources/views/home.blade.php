@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Main content -->
<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
    <a href="{{ url('/view/all/users') }}">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Users</span>
          <span class="info-box-number">12</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    </div>


    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{{ url('/view/all/users') }}">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-file"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Projects</span>
              <span class="info-box-number">899</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
        </div>

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
    <a href="{{ url('/contacts/all') }}">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-phone"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Latest Works</span>
          <span class="info-box-number">230</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <a href="{{ url('/subscriber-email') }}">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-bank"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Portfolio</span>
          <span class="info-box-number">34</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- /.row -->

  <!-- Main row -->
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection
