<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kenal Lahir
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Kenal Lahir</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_kenal_lahir/proses_edit_kenal_lahir'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_kenal_lahir->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_kenal_lahir; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control" name="R1" id="selector" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $tampil->nama_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ayah :</b></label>
    <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?php echo $tampil->pekerjaan_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ayah :</b></label>
    <input class="form-control" name="alamat_ayah" id="alamat_ayah" value="<?php echo $tampil->alamat_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Umur Ayah:</b></label>
    <input class="form-control" name="umur_ayah" id="umur_ayah" value="<?php echo $tampil->umur_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo $tampil->nama_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?php echo $tampil->pekerjaan_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" value="<?php echo $tampil->alamat_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Umur Ibu:</b></label>
    <input class="form-control" name="umur_ibu" id="umur_ibu" value="<?php echo $tampil->umur_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>No Pengantar :</b></label>
    <input class="form-control" name="no_pengantar" id="no_pengantar" value="<?php echo $tampil->no_pengantar; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tanggal_pengantar" id="tgl1" value="<?php echo $tampil->tanggal_pengantar; ?>" required>
</div>
<div class="form-group" >
    <label><b>Anak Ke :</b></label>
    <input class="form-control" name="anak_ke" id="anak_ke" value="<?php echo $tampil->anak_ke; ?>" required>
</div>
<div class="form-group" >
    <label><b>Keperluan :</b></label>
    <input class="form-control" name="keperluan" id="keperluan" value="<?php echo $tampil->keperluan; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kenal_lahir/kenal_lahir');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>