<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SP2SE SMT Indonesia</title>
  <link href="<?php echo base_url('assets/images/icon_spob.png'); ?>" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
    <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css'); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'); ?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/select2/dist/css/select2.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/sweetalert/sweetalert2.css'); ?>">

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
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet">
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  <style type="text/css">
  .preloader {
    position: fixed;
    top: 0;
    left : 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background : black transparent;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
}
</style>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="preloader">
  <div class="loading">
    <img src="<?php echo base_url('assets/images/loading3.gif'); ?>" width="200">
  </div>
</div>
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo site_url('dashboard/home');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SMT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-envelope"></i> SP2SE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/man-icon.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Welcome - <?php echo $this->session->userdata('nama') ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/man-icon.png'); ?>" class="img-circle" alt="User Image">

                <p>
                  Welcome - <?php echo $this->session->userdata('nama') ?>
                  <small><?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('dashboard/anggota');?>" class="btn btn-default btn-flat">User</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('dashboard/logout');?>" onclick="return confirm('Apakah anda yakin ingin logout ?')" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/images/man-icon.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama') ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
        <li>
          <a href="<?php echo site_url('dashboard/home');?>">
            <i class="fa fa-home"></i> <span>Home</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Data Penduduk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li>
              <a href="<?php echo site_url('c_penduduk/penduduk');?>">
                <i class="fa fa-list"></i> <span>List Penduduk</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green">
                    <?php
                            $jumlah = $this->db->query("SELECT * FROM tpenduduk GROUP BY id_penduduk")->num_rows();
                            echo "".$jumlah;
                            ?>
                  </small>
                </span>
                <span class="pull-right-container">
                </span>
              </a>
            </li>
             <li><a href="<?php echo site_url('dashboard/berdasarkan');?>"><i class="fa fa-circle-o"></i> Opsi Penduduk</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Fitur Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li>
                <a href="<?php echo site_url('c_header/header');?>">
                  <i class="fa fa-list"></i> <span>Kop Surat</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('c_kepdes/kepdes');?>">
                  <i class="fa fa-user"></i> <span>Edit Kepala Desa</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('c_atas_nama/atas_nama');?>">
                  <i class="fa fa-user"></i> <span>Edit Atas Nama</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Daftar Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class="fa fa-circle-o"></i> Ket Ahli Waris</a></li>
            <li><a href="<?php echo site_url('c_sku/sku');?>"><i class="fa fa-circle-o"></i> Ket Usaha</a></li>
            <li><a href="<?php echo site_url('c_domisili_usaha/domisili_usaha');?>"><i class="fa fa-circle-o"></i> Ket Domisili Usaha</a></li>
            <li><a href="<?php echo site_url('c_domisili_tinggal/domisili_tinggal');?>"><i class="fa fa-circle-o"></i> Ket Domisili Tinggal</a></li>
            <li><a href="<?php echo site_url('c_pendaftaran_ktp/pendaftaran_ktp');?>"><i class="fa fa-circle-o"></i> Pendaftaran KTP</a></li>
            <li><a href="<?php echo site_url('c_beda_identitas/beda_identitas');?>"><i class="fa fa-circle-o"></i> Ket Beda Identitas</a></li>
            <li><a href="<?php echo site_url('c_kartu_keluarga/kartu_keluarga');?>"><i class="fa fa-circle-o"></i> Ket Kartu Keluarga</a></li>
            <li><a href="<?php echo site_url('c_andon_nikah/andon_nikah');?>"><i class="fa fa-circle-o"></i> Ket Andon Nikah</a></li>
            <li><a href="<?php echo site_url('c_skbn/skbn');?>"><i class="fa fa-circle-o"></i> Blm Kawin/Janda/Duda</a></li>
            <li><a href="<?php echo site_url('c_bp_ktp/bp_ktp');?>"><i class="fa fa-circle-o"></i> Belum Punya KTP</a></li>
            <li><a href="<?php echo site_url('c_belum_memiliki_rumah/belum_memiliki_rumah');?>"><i class="fa fa-circle-o"></i> Belum Punya Rumah</a></li>
            <li><a href="<?php echo site_url('c_daftar_nikah/daftar_nikah');?>"><i class="fa fa-circle-o"></i> Ket Daftar Nikah</a></li>
            <li><a href="<?php echo site_url('c_gadai/gadai');?>"><i class="fa fa-circle-o"></i> Pernyataan Gadai</a></li>
            <li><a href="<?php echo site_url('c_ramai/ramai');?>"><i class="fa fa-circle-o"></i> Ket Izin Keramaian</a></li>
            <li><a href="<?php echo site_url('c_jual_beli/jual_beli');?>"><i class="fa fa-circle-o"></i> Pernyataan Jual Beli</a></li>
            <li><a href="<?php echo site_url('c_kehilangan/kehilangan');?>"><i class="fa fa-circle-o"></i> Ket Kehilangan</a></li>
            <li><a href="<?php echo site_url('c_kelahiran/kelahiran');?>"><i class="fa fa-circle-o"></i> Ket Kelahiran</a></li>
            <li><a href="<?php echo site_url('c_kematian/kematian');?>"><i class="fa fa-circle-o"></i> Ket Kematian</a></li>
            <li><a href="<?php echo site_url('c_kenal_lahir/kenal_lahir');?>"><i class="fa fa-circle-o"></i> Ket Kenal Lahir</a></li>
            <li><a href="<?php echo site_url('c_ktp_sementara/ktp_sementara');?>"><i class="fa fa-circle-o"></i> Ket KTP Sementara</a></li>
            <li><a href="<?php echo site_url('c_keterangan_tanah/keterangan_tanah');?>"><i class="fa fa-circle-o"></i> Kepemilikan Tanah</a></li>
            <li><a href="<?php echo site_url('c_keterangan_jalan/keterangan_jalan');?>"><i class="fa fa-circle-o"></i> Ket Perjalanan</a></li>
            <li><a href="<?php echo site_url('c_pindah_datang/pindah_datang');?>"><i class="fa fa-circle-o"></i> Ket Pindah Datang</a></li>
            <li><a href="<?php echo site_url('c_kepemilikan_tanah/kepemilikan_tanah');?>"><i class="fa fa-circle-o"></i> Ket Tanah</a></li>
            <li><a href="<?php echo site_url('c_sktm/sktm');?>"><i class="fa fa-circle-o"></i> Ket Tidak Mampu</a></li>
            <li><a href="<?php echo site_url('c_lain_lain/lain_lain');?>"><i class="fa fa-circle-o"></i> Keterangan Lain-lain</a></li>
            <li><a href="<?php echo site_url('c_pernyataan/pernyataan');?>"><i class="fa fa-circle-o"></i> Pernyataan Umum</a></li>
            <li><a href="<?php echo site_url('c_skck/skck');?>"><i class="fa fa-circle-o"></i> Surat SKCK</a></li>
            <li><a href="<?php echo site_url('c_domlembaga/domlembaga');?>"><i class="fa fa-circle-o"></i> Domisili Lembaga</a></li>
            <li><a href="<?php echo site_url('c_domsekolah/domsekolah');?>"><i class="fa fa-circle-o"></i> Domisili Sekolah</a></li>
            <li><a href="<?php echo site_url('c_domperusahaan/domperusahaan');?>"><i class="fa fa-circle-o"></i> Domisili Perusahaan</a></li>
            <li><a href="<?php echo site_url('c_bersama/bersama');?>"><i class="fa fa-circle-o"></i> Pernyataan Bersama</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i>
            <span>Rekap Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('c_ahli_waris/tampil_rekap_ahli_waris');?>"><i class="fa fa-circle-o"></i> Ket Ahli Waris</a></li>
            <li><a href="<?php echo site_url('c_sku/tampil_rekap_sku');?>"><i class="fa fa-circle-o"></i> Ket Usaha</a></li>
            <li><a href="<?php echo site_url('c_domisili_usaha/tampil_rekap_domisili_usaha');?>"><i class="fa fa-circle-o"></i> Ket Domisili Usaha</a></li>
            <li><a href="<?php echo site_url('c_domisili_tinggal/tampil_rekap_domisili_tinggal');?>"><i class="fa fa-circle-o"></i> Ket Domisili Tinggal</a></li>
            <li><a href="<?php echo site_url('c_pendaftaran_ktp/tampil_rekap_pendaftaran_ktp');?>"><i class="fa fa-circle-o"></i> Pendaftaran KTP</a></li>
            <li><a href="<?php echo site_url('c_beda_identitas/tampil_rekap_beda_identitas');?>"><i class="fa fa-circle-o"></i> Ket Beda Identitas</a></li>
            <li><a href="<?php echo site_url('c_kartu_keluarga/tampil_rekap_kartu_keluarga');?>"><i class="fa fa-circle-o"></i> Ket Kartu Keluarga</a></li>
            <li><a href="<?php echo site_url('c_andon_nikah/tampil_rekap_andon_nikah');?>"><i class="fa fa-circle-o"></i> Ket Andon Nikah</a></li>
            <li><a href="<?php echo site_url('c_skbn/tampil_rekap_skbn');?>"><i class="fa fa-circle-o"></i> Blm Kawin/Janda/Duda</a></li>
            <li><a href="<?php echo site_url('c_bp_ktp/tampil_rekap_bp_ktp');?>"><i class="fa fa-circle-o"></i> Belum Memiliki KTP</a></li>
            <li><a href="<?php echo site_url('c_belum_memiliki_rumah/tampil_rekap_belum_memiliki_rumah');?>"><i class="fa fa-circle-o"></i> Belum Memiliki Rumah</a></li>
            <li><a href="<?php echo site_url('c_daftar_nikah/tampil_rekap_daftar_nikah');?>"><i class="fa fa-circle-o"></i> Ket Daftar Nikah</a></li>
            <li><a href="<?php echo site_url('c_gadai/tampil_rekap_gadai');?>"><i class="fa fa-circle-o"></i> Pernyataan Gadai</a></li>
            <li><a href="<?php echo site_url('c_ramai/tampil_rekap_ramai');?>"><i class="fa fa-circle-o"></i> Ket Izin Keramaian</a></li>
            <li><a href="<?php echo site_url('c_jual_beli/tampil_rekap_jual_beli');?>"><i class="fa fa-circle-o"></i> Pernyataan Jual Beli</a></li>
            <li><a href="<?php echo site_url('c_kehilangan/tampil_rekap_kehilangan');?>"><i class="fa fa-circle-o"></i> Ket Kehilangan</a></li>
            <li><a href="<?php echo site_url('c_kelahiran/tampil_rekap_kelahiran');?>"><i class="fa fa-circle-o"></i> Ket Kelahiran</a></li>
            <li><a href="<?php echo site_url('c_kematian/kematian');?>"><i class="fa fa-circle-o"></i> Ket Kematian</a></li>
            <li><a href="<?php echo site_url('c_kenal_lahir/tampil_rekap_kenal_lahir');?>"><i class="fa fa-circle-o"></i> Ket Kenal Lahir</a</a>></a>
            <li><a href="<?php echo site_url('c_ktp_sementara/tampil_rekap_ktp_sementara');?>"><i class="fa fa-circle-o"></i> Ket KTP Sementara</a></li>
            <li><a href="<?php echo site_url('c_keterangan_tanah/tampil_rekap_keterangan_tanah');?>"><i class="fa fa-circle-o"></i> Kepemilikan Tanah</a></li>
            <li><a href="<?php echo site_url('c_keterangan_jalan/tampil_rekap_keterangan_jalan');?>"><i class="fa fa-circle-o"></i> Ket Perjalanan</a></li>
            <li><a href="<?php echo site_url('c_pindah_datang/tampil_rekap_pindah_datang');?>"><i class="fa fa-circle-o"></i> Ket Pindah Datang</a></li>
            <li><a href="<?php echo site_url('c_kepemilikan_tanah/tampil_rekap_kepemilikan_tanah');?>"><i class="fa fa-circle-o"></i> Ket Tanah</a></li>
            <li><a href="<?php echo site_url('c_sktm/tampil_rekap_sktm');?>"><i class="fa fa-circle-o"></i> Ket Tidak Mampu</a></li>
            <li><a href="<?php echo site_url('c_lain_lain/tampil_rekap_lain_lain');?>"><i class="fa fa-circle-o"></i> Keterangan Lain-lain</a></li>
            <li><a href="<?php echo site_url('c_pernyataan/tampil_rekap_pernyataan');?>"><i class="fa fa-circle-o"></i> Pernyataan Umum</a></li>
            <li><a href="<?php echo site_url('c_skck/tampil_rekap_skck');?>"><i class="fa fa-circle-o"></i> Surat SKCK</a></li>
            <li><a href="<?php echo site_url('c_domlembaga/tampil_rekap_domlembaga');?>"><i class="fa fa-circle-o"></i> Domisili Lembaga</a></li>
            <li><a href="<?php echo site_url('c_domsekolah/tampil_rekap_domsekolah');?>"><i class="fa fa-circle-o"></i> Domisili Sekolah</a></li>
            <li><a href="<?php echo site_url('c_domperusahaan/tampil_rekap_domperusahaan');?>"><i class="fa fa-circle-o"></i> Domisili Perusahaan</a></li>
            <li><a href="<?php echo site_url('c_bersama/bersama');?>"><i class="fa fa-circle-o"></i> Pernyataan Bersama</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard/anggota');?>">
            <i class="fa fa-users"></i> <span>Perangkat Desa</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">
                <?php
                        $jumlah = $this->db->query("SELECT * FROM anggota GROUP BY anggota_id")->num_rows();
                        echo "".$jumlah;
                        ?>
              </small>
            </span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard/pengguna');?>">
            <i class="fa fa-wrench"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-purple">
                <?php
                        $jumlah = $this->db->query("SELECT * FROM pengguna GROUP BY pengguna_id")->num_rows();
                        echo "".$jumlah;
                        ?>
              </small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('dashboard/logout');?>" onclick="return confirm('Apakah anda yakin ingin logout ?')">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php $this->load->view($isi); ?>


    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>



<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/bower_components/chart.js/Chart.js');?>"></script>
<!-- AdminLTE admin demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/admin2.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js');?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js');?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js');?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js');?>"></script>

<script src="<?php echo base_url('assets/sweetalert/sweetalert2.min.js');?>"></script>
<script src="<?php echo base_url('assets/sweetalert/sweetalert2.js');?>"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example3').DataTable()
    $('#example4').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#example6').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#tgl1').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl2').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl3').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl4').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl5').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl6').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl7').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl8').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl9').datepicker({
      format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })

    //Date picker
    $('#tgl10').datepicker({
     format: "yyyy-mm-dd",
    changeMonth: true,
    changeYear: true,
    autoclose: true,
    todayHighlight: true
    })


    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<script type="text/javascript">
    function copy_text() {
        document.getElementById("pilih").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
</script>

<script>
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

<script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
</script>


</body>
</html>
