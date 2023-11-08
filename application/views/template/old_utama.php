<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>sp2se Sindanghurip</title>
  <link href="<?php echo base_url('assets/images/SMT2.png'); ?>" rel="icon">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css'); ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css" rel="stylesheet'); ?>">

  <!-- custom style -->
  <link href="<?php echo base_url('assets/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">

  <!-- sweet alert -->
  <link href="<?php echo base_url('assets/dist/sweetalert2.css'); ?>" rel="stylesheet">

  <!-- select2 -->
  <link href="<?php echo base_url('assets/dist/css/select2.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/dist/css/select2.min.css'); ?>" rel="stylesheet">

  <!-- Fungsi Penanggalan -->
  <link href="<?php echo base_url('assets/calendar/css/jscal2.css');?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/calendar/css/border-radius.css');?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/calendar/css/steel/steel.css');?>" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('assets/calendar/js/jscal2.js');?>"></script>
  <script src="<?php echo base_url('assets/calendar/js/lang/en.js');?>"></script>
  <script type="text/javascript">//<![CDATA[
      var cal = Calendar.setup({
          onSelect: function(cal) { cal.hide() }
      });
      cal.manageFields("f_btn1", "f_date1", "%Y-%m-%d");
      cal.manageFields("f_btn2", "f_date2", "%b %e, %Y");
      cal.manageFields("f_btn3", "f_date3", "%e %B %Y");
      cal.manageFields("f_btn4", "f_date4", "%A, %e %B, %Y");
//]]></script>

<style type="text/css">
  .preloader {
    position: fixed;
    top: 0;
    left : 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
}
</style>
</head>

<body id="page-top">
<div class="preloader">
  <div class="loading">
    <img src="<?php echo base_url('assets/images/loading2.gif'); ?>" width="130">
  </div>
</div>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <img src="<?php echo base_url('assets/images/SMT2.png'); ?>" height="25" width="100">&nbsp;&nbsp;&nbsp;<a class="navbar-brand mr-1" href="<?php echo site_url('dashboard/home');?>"><b>SP2SE</b></a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="hidden" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Welcome <?php echo $this->session->userdata('nama') ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?php echo site_url('dashboard/Register');?>">Registrasi</a>
          <a class="dropdown-item" href="<?php echo site_url('dashboard/ganti_password');?>">Ganti Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('dashboard/logout');?>" onclick="return confirm('Apakah anda yakin ingin logout ?')">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard/home');?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('c_penduduk/penduduk');?>">
          <i class="fas fa-fw fa-list"></i>
          <span>Data Penduduk</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('c_header/header');?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Kepala Desa</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Daftar Surat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Daftar Surat :</h6>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('c_kartu_keluarga/kartu_keluarga');?>">Ket Kartu Keluarga</a>
          <a class="dropdown-item" href="<?php echo site_url('c_pendaftaran_ktp/pendaftaran_ktp');?>">Pendaftaran KTP</a>
          <a class="dropdown-item" href="<?php echo site_url('c_ahli_waris/pelapor');?>">Ket Ahli Waris</a>
          <a class="dropdown-item" href="<?php echo site_url('c_andon_nikah/andon_nikah');?>">Ket Andon Nikah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_beda_identitas/beda_identitas');?>">Ket Beda Identitas</a>
          <a class="dropdown-item" href="<?php echo site_url('c_skbn/skbn');?>">Blm Kawin/Janda/Duda</a>
          <a class="dropdown-item" href="<?php echo site_url('c_bp_ktp/bp_ktp');?>">Belum Punya KTP</a>
          <a class="dropdown-item" href="<?php echo site_url('c_belum_memiliki_rumah/belum_memiliki_rumah');?>">Belum Punya Rumah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_daftar_nikah/daftar_nikah');?>">Ket Daftar Nikah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domisili_tinggal/domisili_tinggal');?>">Ket Domisili Tinggal</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domisili_usaha/domisili_usaha');?>">Ket Domisili Usaha</a>
          <a class="dropdown-item" href="<?php echo site_url('c_gadai/gadai');?>">Pernyataan Gadai</a>
          <a class="dropdown-item" href="<?php echo site_url('c_ramai/ramai');?>">Ket Izin Keramaian</a>
          <a class="dropdown-item" href="<?php echo site_url('c_jual_beli/jual_beli');?>">Pernyataan Jual Beli</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kehilangan/kehilangan');?>">Ket Kehilangan</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kelahiran/kelahiran');?>">Ket Kelahiran</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kematian/kematian');?>">Ket Kematian</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kenal_lahir/kenal_lahir');?>">Ket Kenal Lahir</a>
          <a class="dropdown-item" href="<?php echo site_url('c_ktp_sementara/ktp_sementara');?>">Ket KTP Sementara</a>
          <a class="dropdown-item" href="<?php echo site_url('c_keterangan_tanah/keterangan_tanah');?>">Kepemilikan Tanah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_keterangan_jalan/keterangan_jalan');?>">Ket Perjalanan</a>
          <a class="dropdown-item" href="<?php echo site_url('c_pindah_datang/pindah_datang');?>">Ket Pindah Datang</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kepemilikan_tanah/kepemilikan_tanah');?>">Ket Tanah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_sktm/sktm');?>">Ket Tidak Mampu</a>
          <a class="dropdown-item" href="<?php echo site_url('c_sku/sku');?>">Ket Usaha</a>
          <a class="dropdown-item" href="<?php echo site_url('c_lain_lain/lain_lain');?>">Keterangan Lain-lain</a>
          <a class="dropdown-item" href="<?php echo site_url('c_pernyataan/pernyataan');?>">Pernyataan Umum</a>
          <a class="dropdown-item" href="<?php echo site_url('c_skck/skck');?>">Surat SKCK</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domlembaga/domlembaga');?>">Domisili Lembaga</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domsekolah/domsekolah');?>">Domisili Sekolah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domperusahaan/domperusahaan');?>">Domisili Perusahaan</a>
          <a class="dropdown-item" href="<?php echo site_url('c_bersama/bersama');?>">Pernyataan Bersama</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-archive"></i>
          <span>Rekap Surat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Rekap Surat :</h6>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo site_url('c_kartu_keluarga/tampil_rekap_kartu_keluarga');?>">Ket Kartu Keluarga</a>
          <a class="dropdown-item" href="<?php echo site_url('c_pendaftaran_ktp/tampil_rekap_pendaftaran_ktp');?>">Pendaftaran KTP</a>
          <a class="dropdown-item" href="<?php echo site_url('c_ahli_waris/tampil_rekap_ahli_waris');?>">Ket Ahli Waris</a>
          <a class="dropdown-item" href="<?php echo site_url('c_andon_nikah/tampil_rekap_andon_nikah');?>">Ket Andon Nikah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_beda_identitas/tampil_rekap_beda_identitas');?>">Ket Beda Identitas</a>
          <a class="dropdown-item" href="<?php echo site_url('c_skbn/tampil_rekap_skbn');?>">Blm Kawin/Janda/Duda</a>
          <a class="dropdown-item" href="<?php echo site_url('c_bp_ktp/tampil_rekap_bp_ktp');?>">Belum Memiliki KTP</a>
          <a class="dropdown-item" href="<?php echo site_url('c_belum_memiliki_rumah/tampil_rekap_belum_memiliki_rumah');?>">Belum Memiliki Rumah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_daftar_nikah/tampil_rekap_daftar_nikah');?>">Ket Daftar Nikah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domisili_tinggal/tampil_rekap_domisili_tinggal');?>">Ket Domisili Tinggal</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domisili_usaha/tampil_rekap_domisili_usaha');?>">Ket Domisili Usaha</a>
          <a class="dropdown-item" href="<?php echo site_url('c_gadai/tampil_rekap_gadai');?>">Pernyataan Gadai</a>
          <a class="dropdown-item" href="<?php echo site_url('c_ramai/tampil_rekap_ramai');?>">Ket Izin Keramaian</a>
          <a class="dropdown-item" href="<?php echo site_url('c_jual_beli/tampil_rekap_jual_beli');?>">Pernyataan Jual Beli</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kehilangan/tampil_rekap_kehilangan');?>">Ket Kehilangan</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kelahiran/tampil_rekap_kelahiran');?>">Ket Kelahiran</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kematian/kematian');?>">Ket Kematian</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kenal_lahir/tampil_rekap_kenal_lahir');?>">Ket Kenal Lahir</a>
          <a class="dropdown-item" href="<?php echo site_url('c_ktp_sementara/tampil_rekap_ktp_sementara');?>">Ket KTP Sementara</a>
          <a class="dropdown-item" href="<?php echo site_url('c_keterangan_tanah/tampil_rekap_keterangan_tanah');?>">Kepemilikan Tanah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_keterangan_jalan/tampil_rekap_keterangan_jalan');?>">Ket Perjalanan</a>
          <a class="dropdown-item" href="<?php echo site_url('c_pindah_datang/tampil_rekap_pindah_datang');?>">Ket Pindah Datang</a>
          <a class="dropdown-item" href="<?php echo site_url('c_kepemilikan_tanah/tampil_rekap_kepemilikan_tanah');?>">Ket Tanah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_sktm/tampil_rekap_sktm');?>">Ket Tidak Mampu</a>
          <a class="dropdown-item" href="<?php echo site_url('c_sku/tampil_rekap_sku');?>">Ket Usaha</a>
          <a class="dropdown-item" href="<?php echo site_url('c_lain_lain/tampil_rekap_lain_lain');?>">Keterangan Lain-lain</a>
          <a class="dropdown-item" href="<?php echo site_url('c_pernyataan/tampil_rekap_pernyataan');?>">Pernyataan Umum</a>
          <a class="dropdown-item" href="<?php echo site_url('c_skck/tampil_rekap_skck');?>">Surat SKCK</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domlembaga/tampil_rekap_domlembaga');?>">Domisili Lembaga</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domsekolah/tampil_rekap_domsekolah');?>">Domisili Sekolah</a>
          <a class="dropdown-item" href="<?php echo site_url('c_domperusahaan/tampil_rekap_domperusahaan');?>">Domisili Perusahaan</a>
          <a class="dropdown-item" href="<?php echo site_url('c_bersama/bersama');?>">Pernyataan Bersama</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard/anggota');?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Pegawai</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard/pengguna');?>">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Pengguna</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard/logout');?>" onclick="return confirm('Apakah anda yakin ingin logout ?')">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view($isi); ?>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin.min.js');?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js');?>"></script>

  <!-- SB Admin Scripts - Include with every page -->
  <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>

  <!-- sweet alert -->
  <script src="<?php echo base_url('assets/dist/sweetalert2.all.min.js');?>"></script>

  <!-- select2 -->
  <script src="<?php echo base_url('assets/dist/js/select2.min.js');?>"></script>
  <script src="<?php echo base_url('assets/dist/js/select2.js');?>"></script>
  <script src="<?php echo base_url('assets/dist/js/select2.full.js');?>"></script>
  <script src="<?php echo base_url('assets/dist/js/select2.full.min.js');?>"></script>

<script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
</script>

<script>
  $('#selector').select2();
</script>

<script>
  $('#tgl1').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl2').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl3').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl4').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl5').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl6').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl7').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl8').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl9').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });

  $('#tgl10').datepicker({
    format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
  });



  function printContent(el) {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el) .innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>

<script type="text/javascript">
    function tampilkanPreview(userfile,idpreview) {
        var gb = userfile.files;
        //loop untuk  merender gambar
        for (var i = 0; i < gb.length; i++) {
            //buat variabel
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                }) (preview);
                //membaca URL gambar
                reader.readAsDataURL(gbPreview);
            }
            else{
                alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif, atau .jpg");
            }
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#submit').submit(function(e) {
            e.preventDefault();
                    $.ajax({
                        url:'<?php echo base_url();?>index.php/page/do_upload',
                        type:"post",
                        data:new FormData(this),
                        processData:false,
                        contentType:false,
                        chace:false,
                        async:false,
                        success: function(data) {
                            alert("Upload Image Berhasil.");
                        }
                    });
        });
    });
</script>
</body>

</html>
