<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pernyataan Bersama
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Pernyataan Bersama</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_bersama/proses_edit_bersama'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_bersama->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_bersama; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK Pihak Pertama :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur Pihak Pertama :</b></label>
    <input class="form-control" name="umur" id="umur" value="<?php echo $tampil->umur; ?>" required>
</div><hr>
<div class="form-group" >
    <label><b>Nama Pihak Kedua :</b></label>
    <input class="form-control" name="nama_pihak_kedua" id="nama_pihak_kedua" value="<?php echo $tampil->nama_pihak_kedua; ?>" required>
</div>
<div class="form-group" >
    <label><b>Umur Pihak Kedua :</b></label>
    <input class="form-control" name="umur_pihak_kedua" id="umur_pihak_kedua" value="<?php echo $tampil->umur_pihak_kedua; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Pihak Kedua :</b></label>
    <input class="form-control" name="alamat_pihak_kedua" id="alamat_pihak_kedua" value="<?php echo $tampil->alamat_pihak_kedua; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Pihak Kedua :</b></label>
    <input class="form-control" name="rt_pihak_kedua" id="rt_pihak_kedua" value="<?php echo $tampil->rt_pihak_kedua; ?>" required>
    <input class="form-control" name="rw_pihak_kedua" id="rw_pihak_kedua" value="<?php echo $tampil->rw_pihak_kedua; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa dan Kecamatan Pihak Kedua :</b></label>
    <input class="form-control" name="desa_pihak_kedua" id="desa_pihak_kedua" value="<?php echo $tampil->desa_pihak_kedua; ?>" required>
    <input class="form-control" name="kecamatan_pihak_kedua" id="kecamatan_pihak_kedua" value="<?php echo $tampil->kecamatan_pihak_kedua; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_bersama/bersama');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>