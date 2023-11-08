<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Kematian</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data Kematian</a></li>
        <li class="active">Data Kematian</li>
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
<?php } ?>
<!-- DataTables Example -->
        <div class="box-body">
          <a class="btn btn-success" onclick="printContent('div1')">Print Data</a><hr>
          <div id="div1">
          <h4>Data Kematian Penduduk <?php echo $header->desa; ?></h4>
            <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">KK</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Tanggal Kematian</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($penduduk)) { ?>
                  <tr>
                    <td colspan="4">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($penduduk->result() as $tampil) {
                    ?>
                    <tr>
                      <td><div align="left"><?php echo $no++; ?></div></td>
                      <td><?php echo $tampil->no_ktp; ?></td>
                      <td><?php echo $tampil->no_kk; ?></td>
                      <td><?php echo $tampil->nama; ?></td>
                      <td valign="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->deleted_at))); ?></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>
</div>        
 
