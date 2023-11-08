<!-- Page Heading -->
<section class="content-header">
      <h1>
        Jual Beli
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Jual Beli</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pihak Pertama</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_jual_beli/proses_edit_jual_beli'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_jual_beli->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_jb; ?>" />
</div>
<div class="form-group">
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur :</b></label>
    <input class="form-control" name="umur" id="umur" value="<?php echo $tampil->umur; ?>" required>
</div>
</div>
</div>
</div>

<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pihak Kedua</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama1" id="nama1" value="<?php echo $tampil->nama1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Umur :</b></label>
    <input class="form-control" name="umur1" id="umur1" value="<?php echo $tampil->umur1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan:</b></label>
    <input class="form-control" name="pekerjaan1" id="pekerjaan1" value="<?php echo $tampil->pekerjaan1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat :</b></label>
   <input class="form-control" name="alamat1" id="alamat1" value="<?php echo $tampil->alamat1; ?>" required>
    <input class="form-control" name="rt1" id="rt1" value="<?php echo $tampil->rt1; ?>" required>
    <input class="form-control" name="rw1" id="rw1" value="<?php echo $tampil->rw1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin :</b></label>
    <select class="form-control" name="kelamin1" id="kelamin1">
        <option value="<?php echo $tampil->kelamin1; ?>"><?php echo $tampil->kelamin1; ?></option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
</div>
</div>
</div>

<div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Rincian Jual Beli</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Uang Jaminan :</b></label>
    <input class="form-control" name="uang" id="uang" value="<?php echo $tampil->uang; ?>" required>
</div>
<div class="form-group" >
    <label><b>Blok Sawah :</b></label>
    <input class="form-control" name="blok" id="blok" value="<?php echo $tampil->blok; ?>" required>
</div>
<div class="form-group" >
    <label><b>Luas Sawah :</b></label>
    <input class="form-control" name="luas" id="luas" value="<?php echo $tampil->luas; ?>" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Utara :</b></label>
    <input class="form-control" name="utara" id="utara" value="<?php echo $tampil->utara; ?>" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Timur:</b></label>
    <input class="form-control" name="timur" id="timur" value="<?php echo $tampil->timur; ?>" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Selatan :</b></label>
    <input class="form-control" name="selatan" id="selatan" value="<?php echo $tampil->selatan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Barat:</b></label>
    <input class="form-control" name="barat" id="barat" value="<?php echo $tampil->barat; ?>" required>
</div>
<div class="form-group" >
    <label><b>Persil :</b></label>
    <input class="form-control" name="persil" id="persil" value="<?php echo $tampil->persil; ?>">
    <input class="form-control" name="no" id="no" value="<?php echo $tampil->no; ?>">
    <input class="form-control" name="nop" id="nop" value="<?php echo $tampil->nop; ?>">
</div>
<div class="form-group" >
    <label><b>Saksi 1 :</b></label>
    <input class="form-control" name="saksi1" id="saksi1" value="<?php echo $tampil->saksi1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Saksi 2 :</b></label>
    <input class="form-control" name="saksi2" id="saksi2" value="<?php echo $tampil->saksi2; ?>" required>
</div>
</div>
</div>
</div>
</section>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_jual_beli/jual_beli');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>