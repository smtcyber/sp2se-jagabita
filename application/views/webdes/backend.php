<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Website Desa</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php echo base_url('assets_webdes/vendors/mdi/css/materialdesignicons.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets_webdes/vendors/aos/dist/aos.css/aos.css'); ?>" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?php echo base_url('assets_webdes/images/favicon.png'); ?>" />
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets_webdes/css/style.css'); ?>">
    <!-- endinject -->
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
        <style>
      html, body {
          height:100%;
          width:100%;
          margin:0;
          
      }
      .h_iframe iframe {
          width:100%;
          height:400px;
          
      }
      .h_iframe {
          height: auto;
          width:100%;
          
      }


    </style>
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                    <li class="nav-item">
                      <a href="https://smtindonesia.com/" class="nav-link">SMT Indonesia</a>
                    </li>
                    <li class="nav-item">
                      <a href="http://e-bumdes.com/" class="nav-link">E-Bumdes</a>
                    </li>
                    <li class="nav-item">
                      <a href="http://e-umkm.com/" class="nav-link">E-UMKM</a>
                    </li>
                  </ul>
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="mdi mdi-aa"></i></a>
                    </li>
                    <li class="nav-item">
                      <a target="_blank" href="<?php echo site_url('dashboard');?>" class="nav-link">Login Admin</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a style="text-decoration: none;" href="<?php echo site_url('webdes');?>">
                      <h2><b>WEBSITE DESA</b></h2>
                    </a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo site_url('webdes');?>">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('webdes/page_profil');?>">Profil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('webdes/page_lembaga');?>">Lembaga</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('webdes/page_potensi');?>">Potensi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('webdes/page_data');?>">Data</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('webdes/page_berita');?>">Berita</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('webdes/page_kontak');?>">Kontak</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <?php {
                      foreach ($sosmed->result() as $tampil) {
                  ?>
                  <ul class="social-media">
                    <li>
                      <a target="_blank" href="<?php echo $tampil->facebook; ?>">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="<?php echo $tampil->youtube; ?>">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a target="_blank" href="<?php echo $tampil->instagram; ?>">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                  <?php } } ?>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Flash news</span>
                <p class="mb-0">Berita Hangat dan Terakurat dari Website <?php echo $header->desa; ?>
<!--                                 Kecamatan
                                <?php 
                                  $teks = ucwords(strtolower($header->kecamatan));
                                  $pecah = explode(" ", $teks);
                                  $hasil = $pecah[1];
                                  echo $hasil;
                                ?>
                                Kabupaten
                                <?php 
                                  $teks = ucwords(strtolower($header->pemerintah));
                                  $pecah = explode(" ", $teks);
                                  $hasil = $pecah[2];
                                  echo $hasil;
                                ?> -->
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger">
                    <script type='text/javascript'>
                        <!--
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        //-->
                    </script>
                </span>
                <span class="text-danger">
                    <!-- Menampilkan Hari, Bulan dan Tahun -->
                  <div id="clock"></div>
                      <script type="text/javascript">
                      <!--
                      function showTime() {
                          var a_p = "";
                          var today = new Date();
                          var curr_hour = today.getHours();
                          var curr_minute = today.getMinutes();
                          var curr_second = today.getSeconds();
                          // if (curr_hour < 12) {
                          //     a_p = "AM";
                          // } else {
                          //     a_p = "PM";
                          // }
                          // if (curr_hour == 0) {
                          //     curr_hour = 12;
                          // }
                          // if (curr_hour > 12) {
                          //     curr_hour = curr_hour - 12;
                          // }
                          curr_hour = checkTime(curr_hour);
                          curr_minute = checkTime(curr_minute);
                          curr_second = checkTime(curr_second);
                       document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " Wib";
                       // document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                          }
                   
                      function checkTime(i) {
                          if (i < 10) {
                              i = "0" + i;
                          }
                          return i;
                      }
                      setInterval(showTime, 500);
                      //-->
                      </script>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            
            <?php $this->load->view($isi); ?>

          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <h2><b>WEBSITE DESA</b></h2>
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Dikembangkan oleh Pt. Sarana Mandiri Teknologi<br>
                    Dikelola oleh Pemerintah <?php echo $header->desa; ?><br>
                    Kecamatan
                                <?php 
                                  $teks = ucwords(strtolower($header->kecamatan));
                                  $pecah = explode(" ", $teks);
                                  $hasil = $pecah[1];
                                  echo $hasil;
                                ?>
                                Kabupaten
                                <?php 
                                  $teks = ucwords(strtolower($header->pemerintah));
                                  $pecah = explode(" ", $teks);
                                  $hasil = $pecah[2];
                                  echo $hasil;
                                ?>
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="https://www.facebook.com/saranamandiri.teknologi.9" target="_blank">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/channel/UCSgq3x4Nui3gO3grfO6RBtA" target="_blank">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/saranamandiri/" target="_blank">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                  <div class="row">
                    <?php if ($home2->num_rows()<1) { ?>
                      <h3 align="center">Belum ada postingan</h3>
                      <?php } else {
                          foreach ($home2->result() as $tampil) {
                      ?>
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="<?php echo base_url().'assets/foto_berita/'.$tampil->foto ?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              <?php echo $tampil->judul; ?>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } } ?>
                  </div>
                  

                </div>
                <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Mancanegara</h5>
                      <div class="count">></div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Dalam Negeri</h5>
                      <div class="count">></div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Desa</h5>
                      <div class="count">></div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Politik</h5>
                      <div class="count">></div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Pendidikan</h5>
                      <div class="count">></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2020 <a href="https://smtindonesia.com/" target="_blank" class="text-white"> www.smtindoneisa.com</a>
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="<?php echo base_url('assets_webdes/vendors/js/vendor.bundle.base.js');?>"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?php echo base_url('assets_webdes/vendors/aos/dist/aos.js/aos.js');?>"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url('assets_webdes/js/demo.js');?>"></script>
    <script src="<?php echo base_url('assets_webdes/js/jquery.easeScroll.js');?>"></script>
    <!-- End custom js for this page-->
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example3').DataTable()
        $('#example4').DataTable()
        $('#example2').DataTable({
          'paging'      : false,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : false,
          'info'        : false,
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
  </body>
</html>
