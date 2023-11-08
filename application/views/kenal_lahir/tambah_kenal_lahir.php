<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kenal Lahir
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Kenal Lahir</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_kenal_lahir/proses_tambah_kenal_lahir'?>" method="post" enctype="multipart/form-data" autocomplete="on">
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
    <label><b>Agama :</b></label>
    <select class="form-control" name="agama1" id="agama1" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Kampung :</b></label>
    <input class="form-control" name="kampung" id="kampung" placeholder="Ketikkan Kampung disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Ketikkan Nama Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ayah :</b></label>
    <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Ketikkan Pekerjaan Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ayah :</b></label>
    <input class="form-control" name="alamat_ayah" id="alamat_ayah" placeholder="Ketikkan Alamat Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Umur Ayah:</b></label>
    <input class="form-control" name="umur_ayah" id="umur_ayah" placeholder="Ketikkan Umur Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Ketikkan Nama Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Ketikkan Pekerjaan Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" placeholder="Ketikkan Alamat Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Umur Ibu:</b></label>
    <input class="form-control" name="umur_ibu" id="umur_ibu" placeholder="Ketikkan Umur Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>No Pengantar :</b></label>
    <input class="form-control" name="no_pengantar" id="no_pengantar" placeholder="Ketikkan Nomor Pengantar disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tanggal_pengantar" id="tgl1" placeholder="Ketikkan Tanggal Pengantar disini" required>
</div>
<div class="form-group" >
    <label><b>Anak Ke :</b></label>
    <input class="form-control" name="anak_ke" id="anak_ke" placeholder="Ketikkan Anak Ke disini" required>
</div>
<div class="form-group" >
    <label><b>Keperluan :</b></label>
    <input class="form-control" name="keperluan" id="keperluan" placeholder="Ketikkan Keperluan disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_kenal_lahir/kenal_lahir');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>