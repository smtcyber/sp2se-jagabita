<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Lembaga
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Domisili Lembaga</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domlembaga/proses_tambah_domlembaga'?>" method="post" enctype="multipart/form-data" autocomplete="on">
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
    <label><b>Nama Lembaga :</b></label>
    <input class="form-control" name="nama_lembaga" id="nama_lembaga" placeholder="Ketikkan Nama Lembaga disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Lembaga :</b></label>
    <input class="form-control" name="alamat_lembaga" id="alamat_lembaga" placeholder="Ketikkan Alamat Lembaga disini" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Lembaga :</b></label>
    <input class="form-control" name="rt_lembaga" id="rt_lembaga" placeholder="Ketikkan RT Lembaga disini" required>
    <input class="form-control" name="rw_lembaga" id="rw_lembaga" placeholder="Ketikkan RW Lembaga disini" required>
</div>
<div class="form-group" >
    <label><b>Desa dan Kecamatan Lembaga :</b></label>
    <input class="form-control" name="desa_lembaga" id="desa_lembaga" placeholder="Ketikkan Desa Lembaga disini" required>
    <input class="form-control" name="kecamatan_lembaga" id="kecamatan_lembaga" placeholder="Ketikkan Kecamatan Lembaga disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Lembaga :</b></label>
    <input class="form-control" name="jenis_lembaga" id="jenis_lembaga" placeholder="Ketikkan Jenis Lembaga disini" required>
</div>
<div class="form-group" >
    <label><b>Status Lembaga :</b></label>
    <input class="form-control" name="status_lembaga" id="status_lembaga" placeholder="Ketikkan Status Lembaga disini" required>
</div>
<div class="form-group" >
    <label><b>Tahun Lembaga :</b></label>
    <input class="form-control" name="tahun_lembaga" id="tgl1" placeholder="Ketikkan Tahun Lembaga disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_domlembaga/domlembaga');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>