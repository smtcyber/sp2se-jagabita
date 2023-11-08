<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Usaha
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Domisili Usaha</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domisili_usaha/proses_tambah_domisili_usaha'?>" method="post" enctype="multipart/form-data" autocomplete="on">
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
    <label><b>Pekerjaan :</b></label>
    <input class="form-control" name="pekerjaan1" id="pekerjaan1" placeholder="Ketikkan Pekerjaan disini" required>
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
    <label><b>Alamat Perusahaan :</b></label>
    <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Ketikkan Alamat Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>RT Perusahaan :</b></label>
    <input class="form-control" name="rt_usaha" id="rt_usaha" placeholder="Ketikkan RT Usaha disini" required>
</div>
<div class="form-group" >
    <label><b>RW Perusahaan :</b></label>
    <input class="form-control" name="rw_usaha" id="rw_usaha" placeholder="Ketikkan RW Usaha disini" required>
</div>
<div class="form-group" >
    <label><b>Desa Perusahaan :</b></label>
    <input class="form-control" name="desa_usaha" id="desa_usaha" placeholder="Ketikkan Desa Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Kecamatan Perusahaan :</b></label>
    <input class="form-control" name="kecamatan_usaha" id="kecamatan_usaha" placeholder="Ketikkan Kecamatan Perusahaan disini" required>
</div>
<div class="form-group" >
    <label><b>Penghasilan :</b></label>
    <input class="form-control" name="penghasilan" id="penghasilan" placeholder="Ketikkan Penghasilan disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_domisili_usaha/domisili_usaha');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>