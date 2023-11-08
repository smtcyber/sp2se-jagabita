<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Sekolah
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Domisili Sekolah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domsekolah/proses_tambah_domsekolah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik Pelapor :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div><hr>
<div class="form-group" >
    <label><b>Nama Sekolah :</b></label>
    <input class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="Ketikkan Nama Sekolah disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Sekolah :</b></label>
    <input class="form-control" name="alamat_sekolah" id="alamat_sekolah" placeholder="Ketikkan Alamat Sekolah disini" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Sekolah :</b></label>
    <input class="form-control" name="rt_sekolah" id="rt_sekolah" placeholder="Ketikkan RT Sekolah disini" required>
    <input class="form-control" name="rw_sekolah" id="rw_sekolah" placeholder="Ketikkan RW Sekolah disini" required>
</div>
<div class="form-group" >
    <label><b>Desa dan Kecamatan Sekolah :</b></label>
    <input class="form-control" name="desa_sekolah" id="desa_sekolah" placeholder="Ketikkan Desa Sekolah disini" required>
    <input class="form-control" name="kecamatan_sekolah" id="kecamatan_sekolah" placeholder="Ketikkan Kecamatan Sekolah disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Sekolah :</b></label>
    <input class="form-control" name="jenis_sekolah" id="jenis_sekolah" placeholder="Ketikkan Jenis Sekolah disini" required>
</div>
<div class="form-group" >
    <label><b>Tahun Sekolah :</b></label>
    <input class="form-control" name="tahun_sekolah" id="tgl1" placeholder="Ketikkan Tahun Sekolah disini" required>
</div>
<div class="form-group" >
    <label><b>NPSN :</b></label>
    <input class="form-control" name="npsn" id="npsn" placeholder="Ketikkan npsn disini" required>
</div>
<div class="form-group" >
    <label><b>NSS :</b></label>
    <input class="form-control" name="nss" id="nss" placeholder="Ketikkan nss disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_domsekolah/domsekolah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>