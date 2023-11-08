<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pernyataan Bersama
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Pernyataan Bersama</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_bersama/proses_tambah_bersama'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik Pihak Pertama :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur Pihak Pertama :</b></label>
    <input class="form-control" name="umur" id="umur" placeholder="Ketikkan Umur Pihak Pertama disini" required>
</div><hr>
<div class="form-group" >
    <label><b>Nama Pihak Kedua :</b></label>
    <input class="form-control" name="nama_pihak_kedua" id="nama_pihak_kedua" placeholder="Ketikkan Nama Pihak Kedua disini" required>
</div>
<div class="form-group" >
    <label><b>Umur Pihak Kedua :</b></label>
    <input class="form-control" name="umur_pihak_kedua" id="umur_pihak_kedua" placeholder="Ketikkan Nama Pihak Kedua disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Pihak Kedua :</b></label>
    <input class="form-control" name="alamat_pihak_kedua" id="alamat_pihak_kedua" placeholder="Ketikkan Alamat Pihak Kedua disini" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Pihak Kedua :</b></label>
    <input class="form-control" name="rt_pihak_kedua" id="rt_pihak_kedua" placeholder="Ketikkan RT Pihak Kedua disini" required>
    <input class="form-control" name="rw_pihak_kedua" id="rw_pihak_kedua" placeholder="Ketikkan RW Pihak Kedua disini" required>
</div>
<div class="form-group" >
    <label><b>Desa dan Kecamatan Pihak Kedua :</b></label>
    <input class="form-control" name="desa_pihak_kedua" id="desa_pihak_kedua" placeholder="Ketikkan Desa Pihak Kedua disini" required>
    <input class="form-control" name="kecamatan_pihak_kedua" id="kecamatan_pihak_kedua" placeholder="Ketikkan Kecamatan Pihak Kedua disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl1" placeholder="Ketikkan Tanggal Surat disini" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_bersama/bersama');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>