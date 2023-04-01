<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <a class="btn btn-sm btn-primary" href="keluar.php"><i class="fa fa-power-off"></i> Logout</a>
          </div>
        </div>
      </div>
    </div>
<!-- end log out modal -->

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href=""> Chandra Kusuma wijaya (201843501521) </a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.0.5 -->
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo VENDORURL."/jquery/jquery.min.js"; ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo VENDORURL."/bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo VENDORURL."/overlayScrollbars/js/jquery.overlayScrollbars.min.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo JSURL."/adminlte.js"; ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo JSURL."/demo.js"; ?>"></script>

<!-- PAGE vendor -->
<script src="<?php echo VENDORURL."/select2/js/select2.full.min.js";?>"></script>
<script src="<?php echo JSURL."/jquery.dataTables.min.js";?>"></script>
<script src="<?php echo JSURL."/dataTables.bootstrap4.min.js";?>"></script>
<!-- end PAGE SCRIPTS -->

<!-- PAGE SCRIPTS -->
<script src="<?php echo VENDORURL."/pages/dashboard2.js"; ?>"></script>

<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
   });
</script>


<?php include INCDIR ."/".$page1.".php"; ?>

</body>
</html>
