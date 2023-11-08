<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Pengguna</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Pengguna</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
  <?php echo $this->session->flashdata('message'); ?>
<a href="<?php echo site_url().'/dashboard/tambah_pengguna'?>" class="btn btn-danger btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a><hr>
<?php } ?>
<div class="box-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
  <tr>
  <th width="5%"><div align="center">No</div></th>
  <th width="15%"><div align="center">Nama Pegawai</div></th>
  <th width="10%"><div align="center">Username</div></th>
  <th width="5%"><div align="center">Password</div></th>
  <th width="10%"><div align="center">Level Pengguna</div></th>
  <th width="5%"><div align="center">Status</div></th>
  <th width="12%"><div align="center">Tanggal Update</div></th>
      <?php
        $level = $this->session->userdata("level");
        if ($level == 1) { ?>
  <th width="13%"><div align="center">Aksi</div></th>
      <?php } ?>
  </tr>
</thead>
<tbody>
<?php if (empty($pengguna)) { ?>
  <tr>
    <td colspan="7">Data Tidak Ditemukan</td>
    </tr>
<?php } else {
  $no=1;
  foreach ($pengguna->result() as $tampil) {
    $level = $tampil->pengguna_level;
    if ($level ==0) {
      $level = "NULL";
    } else if ($level ==1) {
      $level = "Administrator";
    } else if ($level ==2) {
      $level = "Staff";
    } else if ($level ==3) {
      $level = "Manager";
    } else {
      $level = "Guest";
    }

    $status=$tampil->pengguna_blokir;
    if ($status=="T") {
      $status="<span class='label label-success'>Active</span>";
    } else {
      $status="<span class='label label-danger'>Banned</span>";
    }

?>
  <tr>
    <td><div align="center"><?php echo $no++; ?></div></td>
    <td><div align="center"><?php echo $tampil->anggota_nama ?></div></td>
    <td><div align="center"><?php echo $tampil->pengguna_username ?></div></td>
    <td><div align="center"><?php echo $tampil->pengguna_password ?></div></td>
    <td><div align="center"><?php echo $level ?></div></td>
    <td><div align="center"><?php echo $status ?></div></td>
    <td><div align="center">
    <?php echo $Tgl=date("d F Y", strtotime($tampil->pengguna_tglupdate)); ?></div></td>
        <?php
        $level = $this->session->userdata("level");
        if ($level == 1) { ?>
<!--     <td><div align="center">    
      <a class="btn btn-primary btn-xs btn-rounded" href="<?php echo base_url()?>index.php/dashboard/edit_pengguna/<?php echo $tampil->pengguna_id ?>" title="Edit Data Pengguna">
      <i class="fa fa-edit"></i> Edit</a>
      <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/dashboard/proses_hapus_pengguna/<?php echo $tampil->pengguna_id ?>" onclick="return confirm('Anda yakin menghapus Data ini?')" title="Hapus Data Pengguna">
      <i class="fa fa-trash"></i> Hapus</a>
  </div></td> -->
  <?php } ?>
</tr>
<?php } } ?>
</tbody>
<tfoot>
<tr>
    <?php
    $level = $this->session->userdata("level");
    if ($level == 1) { ?>
  <td colspan="7"><div align="right"><b>Jumlah Record</b></div></td>
    <?php } else { ?>
  <td colspan="6"><div align="right"><b>Jumlah Record</b></div></td>
    <?php } ?>
  <td><div align="center"><b><?php echo $pengguna->num_rows(); ?></b></div></td>
</tr>
</tfoot>
</table><hr>
</div>
</div>
</div>
</div>