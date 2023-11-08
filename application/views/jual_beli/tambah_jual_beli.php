<!-- Page Heading -->
<section class="content-header">
      <h1>
        Jual Beli
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Jual Beli</li>
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
<form role="form" action="<?php echo site_url().'/c_jual_beli/proses_tambah_jual_beli'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur :</b></label>
    <input class="form-control" name="umur" id="umur" placeholder="Ketikkan Umur disini" required>
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
    <input class="form-control" name="nama1" id="nama1" placeholder="Ketikkan Nama disini" required>
</div>
<div class="form-group" >
    <label><b>Umur :</b></label>
    <input class="form-control" name="umur1" id="umur1" placeholder="Ketikkan Umur disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan:</b></label>
    <input class="form-control" name="pekerjaan1" id="pekerjaan1" placeholder="Ketikkan Pekerjaan disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat :</b></label>
    <input class="form-control" name="alamat1" id="alamat1" placeholder="Ketikkan Alamat disini" required>
    <input class="form-control" name="rt1" id="rt1" placeholder="Ketikkan RT disini" required>
    <input class="form-control" name="rw1" id="rw1" placeholder="Ketikkan RW disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin :</b></label>
    <select class="form-control" name="kelamin1" id="kelamin1">
        <option value="-">--pilih--</option>
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
    <input class="form-control" name="uang" id="uang" placeholder="Ketikkan Jumlah Uang disini" required>
</div>
<div class="form-group" >
    <label><b>Blok Sawah :</b></label>
    <input class="form-control" name="blok" id="blok" placeholder="Ketikkan Blok Sawah disini" required>
</div>
<div class="form-group" >
    <label><b>Luas Sawah :</b></label>
    <input class="form-control" name="luas" id="luas" placeholder="Ketikkan Pekerjaan disini" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Utara :</b></label>
    <input class="form-control" name="utara" id="utara" placeholder="Ketikkan disini" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Timur:</b></label>
    <input class="form-control" name="timur" id="timur" placeholder="Ketikkan disini" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Selatan :</b></label>
    <input class="form-control" name="selatan" id="selatan" placeholder="Ketikkan disini" required>
</div>
<div class="form-group" >
    <label><b>Sebelah Barat:</b></label>
    <input class="form-control" name="barat" id="barat" placeholder="Ketikkan disini" required>
</div>
<div class="form-group" >
    <label><b>Persil :</b></label>
    <input class="form-control" name="persil" id="persil" placeholder="Ketikkan Persil disini">
    <input class="form-control" name="no" id="no" placeholder="Ketikkan No disini">
    <input class="form-control" name="nop" id="nop" placeholder="Ketikkan Nop disini">
</div>
<div class="form-group" >
    <label><b>Saksi 1 :</b></label>
    <input class="form-control" name="saksi1" id="saksi1" placeholder="Ketikkan Nama Saksi 1 disini" required>
</div>
<div class="form-group" >
    <label><b>Saksi 2 :</b></label>
    <input class="form-control" name="saksi2" id="saksi2" placeholder="Ketikkan Nama Saksi 2 disini" required>
</div>
</div>
</div>
</div>
</section>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_jual_beli/jual_beli');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>