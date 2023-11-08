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
        Pekerjaan Penduduk
            <small>Form Search</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Penduduk Berdasarkan Pekerjaan</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Penduduk Berdasarkan Pekerjaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
<?php echo $this->session->flashdata('message'); ?>
<?php } ?>
<a class="btn btn-success" onclick="printContent('div1')">Print Data</a>
    <div class="box-body">
        <div id="div1">
          <h4>Penduduk <?php echo $header->desa; ?> yang berpeluang menerima Bansos</h4>
            <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Pekerjaan</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($bansos)) { ?>
                  <tr>
                    <td colspan="3">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($bansos->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->no_ktp; ?></td>
                      <td valign="left"><?php echo $tampil->nama; ?></td>
                      <td valign="left"><?php echo $tampil->pekerjaan; ?></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
          </div1>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>