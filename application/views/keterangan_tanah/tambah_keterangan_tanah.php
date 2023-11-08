<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kepemilikan Tanah
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Kepemilikan Tanah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_keterangan_tanah/proses_tambah_keterangan_tanah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
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
    <label><b>Nomor Objek Pajak :</b></label>
    <input class="form-control" name="no_objek_pajak" id="no_objek_pajak" placeholder="Ketikkan Nomor Objek Pajak disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_keterangan_tanah/keterangan_tanah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>