<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.2.1
    </div>
    <strong>
        &copy; {{date('Y')}} My Portfolio. All Rights Reserved. <a href="#" target="_blank"></a>
    </strong>
</footer>


<!-- jQuery 3 -->
<script src="{{asset('portfolio/temp/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('portfolio/temp/dist/js/permission_ajax.js')}}"></script>

<!--JQueryFile -->
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('portfolio/temp/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('portfolio/temp/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('portfolio/temp/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- SlimScroll -->
<script src="{{asset('portfolio/temp/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('portfolio/temp/bower_components/fastclick/lib/fastclick.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('portfolio/temp/dist/js/adminlte.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('portfolio/temp/dist/js/demo.js')}}"></script>

<!-- AdminLTE for requests funs -->
<!-- page script -->
<script>


  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>



