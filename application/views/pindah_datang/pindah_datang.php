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
        <xsall>Pindah Datang</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Pindah Datang</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
<?php echo $this->session->flashdata('message'); ?>
<!-- <a href="<?php echo site_url().'/c_pindah_datang/tambah_pindah_datang'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a><hr> -->
<?php } ?>
    <div class="box-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">No KK</div></th>
                      <th><div align="left">Nama Kepala Keluarga</div></th>
                      <th><div align="left">Alamat Tujuan</div></th>
                      <th><div align="left">Tanggal Surat</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">No KK</div></th>
                      <th><div align="left">Nama Kepala Keluarga</div></th>
                      <th><div align="left">Alamat Tujuan</div></th>
                      <th><div align="left">Tanggal Surat</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($pindah_datang)) { ?>
                  <tr>
                    <td colspan="4">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($pindah_datang->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->no_kk; ?></td>
                      <td valign="left"><?php echo $tampil->nama; ?></td>
                      <td valign="left"><?php echo $tampil->alamat_tujuan; ?></td>
                      <td valign="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_surat))); ?></td>
                      <td valign="left"><div align="left">
                          <a class="btn btn-warning btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_pindah_datang/edit_pindah_datang/<?php echo $tampil->id_pindah_datang ?>" title="Edit Pindah Datang"><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_pindah_datang/proses_hapus_pindah_datang/<?php echo $tampil->id_pindah_datang ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success btn-xs">Print</button>
                            <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a style="color:black;" target="_blank" href="<?php echo base_url()?>index.php/c_pindah_datang/pindah_datang_cetak/<?php echo $tampil->id_pindah_datang ?>"><b>Print Kades</b></a></li>
                              <li><a style="color:black;" target="_blank" href="<?php echo base_url()?>index.php/c_pindah_datang/pindah_datang_cetak1/<?php echo $tampil->id_pindah_datang ?>"><b>Print Atas Nama</b></a></li>
                            </ul>
                          </div></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
     
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
         text: 'Grafik Statistik Surat Pindah Datang',
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