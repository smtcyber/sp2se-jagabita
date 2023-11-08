<!-- Page Heading -->
<section class="content-header">
      <h1>
        Beda Identitas
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Beda Identitas</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_beda_identitas/proses_tambah_beda_identitas'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
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
    <label><b>Pekerjaan :</b></label>
    <input class="form-control" name="pekerjaan_b" id="pekerjaan_b" placeholder="Ketikkan Beda Pekerjaan disini" required>
</div>
<div class="form-group" >
    <label><b>Status Perkawinan :</b></label>
    <select class="form-control" name="status_kawin_b" id="status_kawin_b" required>
        <option value="-">--pilih--</option>
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
        <option value="Cerai Mati">Cerai Mati</option>
    </select>
</div>

</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Beda Identitas</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Kartu Yang Benar :</b></label>
    <input class="form-control" name="pada_kartu" id="pada_kartu" placeholder="Ketikkan Kartu Yang Benar disini" required>
</div>
<div class="form-group" >
    <label><b>Beda Identitas :</b></label>
    <input class="form-control" name="b_identitas" id="b_identitas" placeholder="Ketikkan Beda Identitas disini" required>
</div>
<div class="form-group" >
    <label><b>Data Sebenarnya :</b></label>
    <input class="form-control" name="sebenarnya" id="sebenarnya" placeholder="Ketikkan Data Sebenarnya disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl2" placeholder="Ketikkan Tanggal Surat disini" required>
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_beda_identitas/beda_identitas');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>