<!-- Page Heading -->
<section class="content-header">
      <h1>
        Keterangan Tanah
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Keterangan Tanah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_kepemilikan_tanah/proses_edit_kepemilikan_tanah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_kepemilikan_tanah->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_tanah; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Luas :</b></label>
    <input class="form-control" name="luas" id="luas" value="<?php echo $tampil->luas; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nomor Leter C :</b></label>
    <input class="form-control" name="no_leter_c" id="no_leter_c" value="<?php echo $tampil->no_leter_c; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nomor Persil :</b></label>
    <input class="form-control" name="no_persil" id="no_persil" value="<?php echo $tampil->no_persil; ?>" required>
</div>
<div class="form-group" >
    <label><b>No. Akta Jual Beli :</b></label>
    <input class="form-control" name="kelas" id="kelas" value="<?php echo $tampil->kelas; ?>" required>
</div>
<div class="form-group" >
    <label><b>Batas Utara :</b></label>
    <input class="form-control" name="batas_utara" id="batas_utara" value="<?php echo $tampil->batas_utara; ?>" required>
</div>
<div class="form-group" >
    <label><b>Batas Timur :</b></label>
    <input class="form-control" name="batas_timur" id="batas_timur" value="<?php echo $tampil->batas_timur; ?>" required>
</div>
<div class="form-group" >
    <label><b>Batas Selatan :</b></label>
    <input class="form-control" name="batas_selatan" id="batas_selatan" value="<?php echo $tampil->batas_selatan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Batas Barat :</b></label>
    <input class="form-control" name="batas_barat" id="batas_barat" value="<?php echo $tampil->batas_barat; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nama Pemilik :</b></label>
    <input class="form-control" name="pemilik" id="pemilik" value="<?php echo $tampil->pemilik; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kepemilikan_tanah/kepemilikan_tanah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>