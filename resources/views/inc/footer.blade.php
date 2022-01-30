<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} <a href="#">Emil Sadekin Islam</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins') }}/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist') }}/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins') }}/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('plugins') }}/raphael/raphael.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('plugins') }}/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins') }}/chart.js/Chart.min.js"></script>
<!-- Toastr JS -->
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist') }}/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist') }}/js/pages/dashboard2.js"></script>
<!-- ENPT JS -->
<script src="{{ asset('enpt.js') }}"></script>
{!! Toastr::message() !!}
</body>
</html>
