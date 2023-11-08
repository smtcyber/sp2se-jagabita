<!-- Page Heading -->
<section class="content-header">
      <h1>
        Keterangan Perjalanan
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Keterangan Perjalanan</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_keterangan_jalan/proses_tambah_keterangan_jalan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1"required>
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
    <label><b>Blok :</b></label>
    <input class="form-control" name="blok" id="blok" placeholder="Ketikkan Blok disini" required>
</div>
<div class="form-group" >
    <label><b>Akan Pergi ke :</b></label>
    <input class="form-control" name="pergi_ke_jalan" id="pergi_ke_jalan" placeholder="Ketikkan Pergi ke jalan disini" required>
</div>
<div class="form-group" >
    <label><b>Tujuan :</b></label>
    <input class="form-control" name="tujuan_jalan" id="tujuan_jalan" placeholder="Ketikkan Luas jalan disini" required>
</div>
<div class="form-group" >
    <label><b>Waktu Lamanya :</b></label>
    <input class="form-control" name="lama_jalan" id="lama_jalan" placeholder="Ketikkan Lama disini" required>
</div>
<div class="form-group" >
    <label><b>Keterangan :</b></label>
    <input class="form-control" name="ket_jalan" id="ket_jalan" placeholder="Ketikkan Keterangan disini" required>
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
    <a class="btn btn-danger" href="<?php echo site_url('c_keterangan_jalan/keterangan_jalan');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>