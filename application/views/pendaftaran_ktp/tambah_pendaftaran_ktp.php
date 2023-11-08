<!-- Page Heading -->
<section class="content-header">
      <h1>
            Pendaftaran KTP
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Pedaftaran KTP</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_pendaftaran_ktp/proses_tambah_pendaftaran_ktp'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Agama :</b></label>
    <select class="form-control" name="agama1" id="agama1" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Golongan Darah :</b></label>
    <select class="form-control" name="gol_darah" id="gol_darah" required>
        <option value="-">--pilih--</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
        <option value="AB">AB</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Pekerjaan :</b></label>
    <input class="form-control" name="pekerjaan1" id="pekerjaan1" placeholder="Ketikkan Pekerjaan disini" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Status Kawin :</b></label>
    <select class="form-control" name="s_kawin" id="s_kawin" required>
        <option value="-">--pilih--</option>
        <option value="Kawin">Kawin</option>
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Permohonan KTP :</b></label>
    <select class="form-control" name="permohonan_ktp" id="permohonan_ktp" required>
        <option value="-">--pilih--</option>
        <option value="Baru">Baru</option>
        <option value="Perpanjang">Perpanjang</option>
        <option value="Pergantian">Pergantian</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Kode Pos :</b></label>
    <input class="form-control" name="kode_pos" id="kode_pos" placeholder="Ketikkan Kode Pos disini" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Status KTP :</b></label>
    <select class="form-control" name="status_ktp" id="status_ktp" required>
        <option value="-">--pilih--</option>
        <option value="Proses di Kelurahan">Proses di Kelurahan</option>
        <option value="Proses di Kecamatan">Proses di Kecamatan</option>
        <option value="Proses di Dispencapil">Proses di Dispencapil</option>
        <option value="Sudah Jadi">Sudah Jadi</option>
    </select>
</div>
<!-- <div class="form-group" style="color:black">
    <label><b>Foto :</b></label><br>
    <input type="file" name="F1" id="F1" onchange="tampilkanPreview(this, 'preview')" />
</div> -->
<div class="form-group" style="color:black">
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl1" placeholder="Ketikkan Tanggal Surat disini" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Berkas :</b></label>
    <select class="form-control" name="berkas" id="berkas" required>
        <option value="-">--pilih--</option>
        <option value="Lengkap">Lengkap</option>
        <option value="Tidak Lengkap">Tidak Lengkap</option>
    </select>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_pendaftaran_ktp/pendaftaran_ktp');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>