<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home | SP2SE <?php echo $header->desa; ?>
        <small>Home</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
      <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>
                <div id="clock"></div>
              <script type="text/javascript">
    
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
               document.getElementById('clock').innerHTML="Login, " + curr_hour + ":" + curr_minute + ":" + curr_second + " WIB";
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
           
              <!-- Menampilkan Hari, Bulan dan Tahun -->
              <script type='text/javascript'>
                
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
              </script></h3>

              </b></h3>
              <hr>
              <p align="center"><img src="<?php echo base_url().'assets/logo/'.$header->logo ?>" width="90" height="107"></p>
              <p style="font-size: 15px;" align="center"><b>KANTOR <?php echo ucwords(strtoupper($header->desa)) ?><br>KECAMATAN <?php 
                              $teks = $header->kecamatan;
                              $pecah = explode(" ", $teks);
                              $hasil = $pecah[1];
                              echo $hasil;
                      ?> <?php 
                              $teks = $header->kecamatan;
                              $pecah = explode(" ", $teks);
                              $hasil = $pecah[2];
                              echo $hasil;
                      ?> <br>KABUPATEN <?php 
                              $teks = $header->pemerintah;
                              $pecah = explode(" ", $teks);
                              $hasil = $pecah[2];
                              echo $hasil;
                      ?></b></p>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <div class="box-body">
                <div id="chart" style="height:228px"></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content" style="margin-top: -25px;">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Pembuatan Surat Terakhir</b></h3>
              <hr>
              <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama Surat</div></th>
                      <th><div align="left">Link</div></th>
                      <th><div align="left">Tanggal</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama Surat</div></th>
                      <th><div align="left">Link</div></th>
                      <th><div align="left">Tanggal</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($notif)) { ?>
                  <tr>
                    <td colspan="4">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($notif->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->surat; ?></td>
                      <td valign="left"><a href="<?php echo base_url().'/'.$tampil->link; ?>"><span class='label label-success'>Lihat  Surat</span></a></td>
                      <td valign="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal))); ?></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        </div>
      </section>

<script src="<?php echo base_url('assets/highcharts/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/highcharts/highcharts.js');?>"></script>
    <script src="<?php echo base_url('assets/highcharts/modules/exporting.js');?>"></script>
    <script src="<?php echo base_url('assets/highcharts/modules/offline-exporting.js');?>"></script>
    <script type="text/javascript">
      jQuery(function(){
       new Highcharts.Chart({
        chart: {
         renderTo: 'chart',
         type: 'line',
        },
        title: {
         text: '<b>Grafik Statistik Surat</b>',
         x: -20
        },
        subtitle: {
         text: '',
         x: -20
        },
        xAxis: {
         categories: ['', '', '', '', '', '',
                          '', '', '', '', '', '']
        },
        yAxis: {
         title: {
          text: 'Total Surat'
         }
        },
        series: [{
         name: 'Data tiap bulan',
         data: <?php echo json_encode($grafik); ?>
        }]
       });
      }); 
      </script>