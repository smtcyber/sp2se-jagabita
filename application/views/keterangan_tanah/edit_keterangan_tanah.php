<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kepemilikan Tanah
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Kepemilikan Tanah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_keterangan_tanah/proses_edit_keterangan_tanah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_keterangan_tanah->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_tanah; ?>" />
<br>
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Nomor Objek Pajak :</b></label>
    <input class="form-control" name="no_objek_pajak" id="no_objek_pajak" value="<?php echo $tampil->no_objek_pajak; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Luas Tanah : (m<sup>2</sup>)</b></label>
    <input class="form-control" name="luas_tanah" id="luas_tanah" value="<?php echo $tampil->luas_tanah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Luas Bangunan : (m<sup>2</sup>) </b></label>
    <input class="form-control" name="luas_rumah" id="luas_rumah" value="<?php echo $tampil->luas_rumah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Keperluan : </b></label>
    <input class="form-control" name="keperluan" id="keperluan" value="<?php echo $tampil->keperluan; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_keterangan_tanah/keterangan_tanah');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div></div></div></div></div>