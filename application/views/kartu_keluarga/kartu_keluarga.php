<!DOCTYPE html>
<html>
  <head>
   <style>
   .chart{
     z-index:999;} 
  </style>
  </head>
<body>
<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Kartu Keluarga</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Kartu Keluarga</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <?php echo $this->session->flashdata('message'); ?>
            <?php
              $level = $this->session->userdata("level");
              if ($level == 1) { ?>
<!--             <a href="<?php echo site_url().'/c_kartu_keluarga/tambah_kartu_keluarga'?>" class="btn btn-primary btn-rounded">
            <i class="fa fa-plus fa-white"></i> &nbsp;Tambah Surat</a><hr> -->
            <?php } ?>
            <div class="box-body">
            <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Status KK</div></th>
                      <th><div align="left">Berkas</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Status KK</div></th>
                      <th><div align="left">Berkas</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($kartu_keluarga)) { ?>
                  <tr>
                    <td colspan="5">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($kartu_keluarga->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->no_ktp; ?></td>
                      <td valign="left"><?php echo $tampil->nama; ?></td>
                      <td valign="left"><?php echo $tampil->status_kk; ?></td>
                      <td valign="left"><?php echo $tampil->berkas; ?></td>
                      <td valign="left"><div align="left">
                          <a class="btn btn-primary btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_kartu_keluarga/edit_kartu_keluarga/<?php echo $tampil->no_daftar ?>" title="Edit Kartu Keluarga"><i class="fa fa-edit"></i> Edit Surat</a>
                          <a class="btn btn-warning btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_kartu_keluarga/edit_status/<?php echo $tampil->no_daftar ?>" title="Edit Status"><i class="fa fa-edit"></i> Edit Status</a>
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_kartu_keluarga/proses_hapus_kartu_keluarga/<?php echo $tampil->no_daftar ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data Penduduk"><i class="fa fa-trash"></i> Hapus</a>

                          <div class="btn-group">
                            <button type="button" class="btn btn-success btn-xs">Opsi Print</button>
                            <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a style="color:black;" target="_blank" href="<?php echo base_url()?>index.php/c_kartu_keluarga/kartu_keluarga_cetak/<?php echo $tampil->no_daftar ?>"><b>Print Kades</b></a></li>
                              <li><a style="color:black;" target="_blank" href="<?php echo base_url()?>index.php/c_kartu_keluarga/kartu_keluarga_cetak1/<?php echo $tampil->no_daftar ?>"><b>Atas Nama</b></a></li>
                              <li><a style="color:black;" href="<?php echo base_url()?>index.php/c_kartu_keluarga/kartu_keluarga_excel/<?php echo $tampil->no_daftar ?>"><b>Export Excel</b></a></li>
                              <li><a style="color:black;" href="<?php echo base_url()?>index.php/c_kartu_keluarga/kartu_keluarga_word/<?php echo $tampil->no_daftar ?>"><b>Export Word</b></a></li>
                            </ul>
                          </div></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

<section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div id="chart" style="height:350px"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
</body>
</html>
    <!--Load chart js-->
    <!-- chart -->
    <script src="<?php echo base_url('assets/highcharts/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/highcharts/highcharts.js');?>"></script>
    <script src="<?php echo base_url('assets/highcharts/modules/exporting.js');?>"></script>
    <script src="<?php echo base_url('assets/highcharts/modules/offline-exporting.js');?>"></script>
    <script type="text/javascript">
      jQuery(function(){
       new Highcharts.Chart({
        chart: {
         renderTo: 'chart',
         type: 'column',
        },
        title: {
         text: 'Grafik Statistik Kartu Keluarga',
         x: -20
        },
        subtitle: {
         text: '',
         x: -20
        },
        xAxis: {
         categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                          'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
        },
        yAxis: {
         title: {
          text: 'Total Surat'
         }
        },
        series: [{
         name: 'Data dalam bulan',
         data: <?php echo json_encode($grafik); ?>
        }]
       });
      }); 
      </script>