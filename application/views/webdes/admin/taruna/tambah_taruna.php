<!-- Page Heading -->
<section class="content-header">
      <h1>
        Karang Taruna
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Profil Webdes</a></li>
        <li class="active">Tambah Karang Taruna</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_taruna'?>" method="post" autocomplete="on" />
<div class="form-group" >
    <label><b>Jabatan :</b></label>
    <input class="form-control" name="jabatan" id="jabatan" placeholder="Ketikkan Jabatan disini">
</div>
<div class="form-group" >
    <label><b>Nama Pengurus :</b></label>
    <input class="form-control" name="nama_pengurus" id="nama_pengurus" placeholder="Ketikkan Nama Pengurus disini">
</div>
<div class="form-group" >
    <label><b>Alamat :</b></label>
    <input class="form-control" name="alamat" id="alamat" placeholder="Ketikkan Alamat Lengkap disini">
</div>
<div class="form-group" >
    <label><b>Tanggal Bergabung :</b></label>
    <input class="form-control" name="tgl_bergabung" id="tgl1" placeholder="Ketikkan Tanggal Bergabung disini" >
</div>
<br><br>
<div class="form-group" align="left">
	<button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button>
	<button type="reset" class="btn btn-success"><i class='fa fa-refresh'></i> Reset</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class='fa fa-times'></i> Batal</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>