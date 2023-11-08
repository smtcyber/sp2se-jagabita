<!-- Page Heading -->
<section class="content-header">
      <h1>
        Keterangan Tanah
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Keterangan Tanah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_kepemilikan_tanah/proses_tambah_kepemilikan_tanah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
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
    <label><b>Nomor Leter C :</b></label>
    <input class="form-control" name="no_leter_c" id="no_leter_c" placeholder="Ketikkan Nomor Leter C disini" required>
</div>
<div class="form-group" >
    <label><b>Nomor Persil :</b></label>
    <input class="form-control" name="no_persil" id="no_persil" placeholder="Ketikkan Nomor Percil disini" required>
</div>
<div class="form-group" >
    <label><b>Kelas :</b></label>
    <input class="form-control" name="kelas" id="kelas" placeholder="Ketikkan Kelas disini" required>
</div>
<div class="form-group" >
    <label><b>Luas :</b></label>
    <input class="form-control" name="luas" id="luas" placeholder="Ketikkan Luas disini" required>
</div>
<div class="form-group" >
    <label><b>Blok :</b></label>
    <input class="form-control" name="blok" id="blok" placeholder="Ketikkan Blok disini" required>
</div>
<div class="form-group" >
    <label><b>Desa :</b></label>
    <input class="form-control" name="desa" id="desa" placeholder="Ketikkan Desa disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tgl_pengantar" id="tgl1" placeholder="Ketikkan Tanggal Pengantar disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl2" placeholder="Ketikkan Tanggal Surat disini" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kepemilikan_tanah/kepemilikan_tanah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>