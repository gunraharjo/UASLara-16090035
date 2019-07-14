<!-- Jquery Core Js -->
<script src=" {{ asset('private/public/asset/plugins/jquery/jquery.min.js') }}"></script>
   
<!-- Bootstrap Core Js -->
<script src=" {{ asset('private/public/asset/plugins/bootstrap/js/bootstrap.js') }}"></script>


<!-- Select Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
 <!-- Jquery DataTable Plugin Js -->
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/jszip.min.js') }} "></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('private/public/asset/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
 
 <script src="{{ asset('private/public/asset/js/pages/tables/jquery-datatable.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>


<!-- Waves Effect Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/jquery-countto/jquery.countTo.js') }}"></script>


<!-- Morris Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/raphael/raphael.min.js') }}"></script>

<script src="{{ asset('private/public/asset/plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src=" {{ asset('private/public/asset/plugins/chartjs/Chart.bundle.js') }}"></script>


<!-- Flot Charts Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/flot-charts/jquery.flot.js') }}"></script>

<script src="{{ asset('private/public/asset/plugins/flot-charts/jquery.flot.resize.js') }}"></script>

<script src=" {{ asset('private/public/asset/plugins/flot-charts/jquery.flot.pie.js') }}"></script>

<script src="{{ asset('private/public/asset/plugins/flot-charts/jquery.flot.categories.js') }}"></script>

<script src="{{ asset('private/public/asset/plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('private/public/asset/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>


<!-- Custom Js -->
<script src="{{ asset('private/public/asset/js/admin.js') }}"></script>

<script src="{{ asset('private/public/asset/js/pages/index.js') }}"></script>

<!-- Demo Js -->
<script src="{{ asset('private/public/asset/js/demo.js') }}"></script>

 
 

{{--  <script>
    $(document).ready(function() { 
        $('#table').DataTable();
    });
</script>  --}}
<script type="text/javascript">
    $('#delete').click(function(e){
          e.preventDefault()
          if (confirm('Are you sure?')) {
              $(e.target).closest('form').submit()
          }
      });
    </script>