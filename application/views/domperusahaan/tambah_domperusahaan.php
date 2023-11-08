<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Perusahaan
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Domisili Perusahaan</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domperusahaan/proses_tambah_domperusahaan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik Pemilik :</b></label>
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
    <label><b>Kabupaten Pemilik :</b></label>
    <input class="form-control" name="kabupaten_pemilik" id="kabupaten_pemilik" placeholder="Ketikkan Kabupaten Pemilik disini" required>
</div><hr>
<div class="form-group" >
    <label><b>Nama Perusahaan :</b></label>
    <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Ketikkan Nama Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Perusahaan :</b></label>
    <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Ketikkan Alamat Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Perusahaan :</b></label>
    <input class="form-control" name="rt_perusahaan" id="rt_perusahaan" placeholder="Ketikkan RT Perusahaan disini" required>
    <input class="form-control" name="rw_perusahaan" id="rw_perusahaan" placeholder="Ketikkan RW Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan dan Kabupaten Perusahaan :</b></label>
    <input class="form-control" name="desa_perusahaan" id="desa_perusahaan" placeholder="Ketikkan Desa Perusahaan disini" required>
    <input class="form-control" name="kecamatan_perusahaan" id="kecamatan_perusahaan" placeholder="Ketikkan Kecamatan Perusahaan disini" required>
    <input class="form-control" name="kabupaten_perusahaan" id="kabupaten_perusahaan" placeholder="Ketikkan Kabupaten Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Bidang Perusahaan :</b></label>
    <input class="form-control" name="bidang_perusahaan" id="bidang_perusahaan" placeholder="Ketikkan Bidang Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Usaha :</b></label>
    <input class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Ketikkan Bidang Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Masa Berlaku :</b></label>
    <input class="form-control" name="masa_berlaku" id="tgl1" placeholder="Ketikkan Masa Berlaku disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_domperusahaan/domperusahaan');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>