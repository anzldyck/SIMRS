</div>
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/') ?>admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/') ?>admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/') ?>admin/plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/dist/js/pages/dashboard2.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/') ?>admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/') ?>admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/') ?>admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/') ?>admin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/') ?>admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/') ?>admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/') ?>admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>admin/dist/js/adminlte.js"></script>
<!-- <script src="<?= base_url('assets/') ?>admin/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/') ?>admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>admin/dist/js/demo.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('assets/') ?>admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>scripts/main.js"></script>

<!-- page script -->
<script>
  $(document).ready(function(){

    // panggil fungsi 
    semuaData();
    dataNegara();
    dataProvinsi();
    dataProv();

    // refresh otomatis
    setInterval(function(){
        semuaData();
        dataNegara();
        dataProvinsi();
        dataProv();
    }, 3000);

    function semuaData(){
      $.ajax({
          url     : 'https://coronavirus-19-api.herokuapp.com/all',
          success : function(data){
            try{

                var json      = data;
                var kasus     = data.cases;
                var meninggal = data.deaths;
                var sembuh    = data.recovered;

                $('#data-kasus').html(kasus);
                $('#data-meninggal').html(meninggal);
                $('#data-sembuh').html(sembuh);

            } catch{
                alert('Errorr');
            }
          }
      });
    }

    function dataNegara(){
      $.ajax({
          url     : 'https://coronavirus-19-api.herokuapp.com/countries',
          success : function(data){
            try{

                var json = data;
                var html = [];

                if(json.length > 0){
                  var i;
                  for(i = 0; i < json.length; i++){
                    var dataNegara = json[i];
                    var namaNegara = dataNegara.country;

                    if(namaNegara === 'Indonesia'){
                      var kasus     = dataNegara.cases;
                      var meninggal = dataNegara.deaths;
                      var sembuh    = dataNegara.recovered;
                      $('#data-kasus-indo').html(kasus);
                      $('#data-meninggal-indo').html(meninggal);
                      $('#data-sembuh-indo').html(sembuh);
                    }
                  }
                }

            } catch{
                alert('Errorr');
            }
          }
      });
    }

    function dataProv(){
      $.ajax({
          url     : 'https://api.kawalcorona.com/indonesia/provinsi',
          success : function(data){
            try{

                var json = data;
                var html = [];

                if(json.length > 0){
                  var i;
                  for(i = 0; i < json.length; i++){
                    var dataProvinsi  = json[i];
                    var namaProvinsi   = dataProvinsi.Provinsi;

                    if(namaProvinsi === 'DKI Jakarta'){
                      var kasus     = dataProvinsi.Kasus_Posi;
                      var meninggal = dataProvinsi.Kasus_Meni;
                      var sembuh    = dataProvinsi.Kasus_Semb;
                      $('#data-kasus-dki').html(kasus);
                      $('#data-meninggal-dki').html(meninggal);
                      $('#data-sembuh-dki').html(sembuh);
                    }
                  }
                }

            } catch{
                alert('Errorr');
            }
          }
      });
    }

    function dataProvinsi(){
      $.ajax({
          url     : 'curl.php',
          type    : 'GET',
          success : function(data){
            try{

                $('#data-kasus-dki').html(data);
                $('#data-meninggal-dki').html(data);
                $('#data-sembuh-dki').html(data);

            } catch{
                alert('Errorr');
            }
          }
      });
    }


  });
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>