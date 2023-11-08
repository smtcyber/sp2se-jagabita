<!-- Page Heading -->
<section class="content-header">
      <h1>
        Ahli Waris
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Data</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_ahli_waris/proses_tambah_pelapor'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<h4 style="color:red"><b>Data Orang Meninggal</b></h4>
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div><hr>

<h4 style="color:red"><b>Data Almarhum/Almarhumah</b></h4>

<div class="form-group">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="Ketikkan Nama Pelapor disini">
</div>
<div class="form-group">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pelapor" id="nik_pelapor" placeholder="Ketikkan Ni Pelapor disini">
</div>
<div class="form-group">
    <label><b>Tanggal Meninggal :</b></label>
    <input class="form-control" name="tgl_meninggal" id="tgl2" placeholder="Ketikkan Tanggal Meninggal disini">
</div>
<!--<div class="form-group">-->
<!--    <label><b>Tanggal Surat :</b></label>-->
<!--    <input class="form-control" name="tgl_surat" id="tgl1" placeholder="Ketikkan Tanggal Surat disini">-->
<!--</div>-->
</div>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>