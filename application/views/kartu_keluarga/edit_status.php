<!-- Page Heading -->
<section class="content-header">
      <h1>
          Kartu Keluarga
            <small>Edit Status</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Status</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_kartu_keluarga/proses_edit_status'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_status->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="B1" id="B1" value="<?php echo $tampil->no_daftar; ?>" />
<div class="form-group" style="color:black">
    <label><b>Status KK:</b></label>
    <select class="form-control" name="status_kk" id="status_kk">
        <option value="<?php echo $tampil->status_kk; ?>"><?php echo $tampil->status_kk; ?></option>
        <option value="Proses di Kelurahan">Proses di Kelurahan</option>
        <option value="Proses di Kecamatan">Proses di Kecamatan</option>
        <option value="Proses di Dispencapil">Proses di Dispencapil</option>
        <option value="Sudah Jadi">Sudah Jadi</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Berkas :</b></label>
    <select class="form-control" name="berkas" id="berkas">
        <option value="<?php echo $tampil->berkas; ?>"><?php echo $tampil->berkas; ?></option>
        <option value="Lengkap">Lengkap</option>
        <option value="Tidak Lengkap">Tidak Lengkap</option>
    </select>
</div>
</div>
<hr>
<div class="form-group" align="left">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kartu_keluarga/kartu_keluarga');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>