<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Moment.js -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>

<!-- Daterangepicker -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- Bootstrap Datepicker -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.10.0/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Timepicker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- SlimScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>

<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<!-- Sidebar Active Link Script -->
<script>
  $(function () {
    const url = window.location.href;

    // Sidebar menu
    $('ul.sidebar-menu a').filter(function () {
      return this.href === url;
    }).parent().addClass('active');

    // Treeview menu
    $('ul.treeview-menu a').filter(function () {
      return this.href === url;
    }).parentsUntil('.sidebar-menu > .treeview-menu').addClass('active');
  });
</script>

<!-- DataTables Initialization -->
<script>
  $(function () {
    $('#example1').DataTable({
      responsive: true
    });

    $('#example2').DataTable({
      paging: true,
      lengthChange: false,
      searching: false,
      ordering: true,
      info: true,
      autoWidth: false
    });
  });
</script>

<!-- Select2 + CKEditor Initialization -->
<script>
  $(function () {
    // Initialize Select2
    $('.select2').select2();

    // Initialize CKEditor
    if (document.getElementById('editor1')) {
      CKEDITOR.replace('editor1');
    }
    if (document.getElementById('editor2')) {
      CKEDITOR.replace('editor2');
    }
  });
</script>
