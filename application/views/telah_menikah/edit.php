<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Surat SKU Bensin
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Data</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_sku_bensin/proses_edit'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id; ?>" />
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", dengan NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", dengan NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
</div>
<div class="form-group" >
    <label><b>Konsumen :</b></label>
    <input class="form-control" name="konsumen" id="konsumen" value="<?php echo $tampil->konsumen; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Usaha :</b></label>
    <input class="form-control" name="jenis_usaha" id="jenis_usaha" value="<?php echo $tampil->jenis_usaha; ?>" required>
</div>
<hr>
<h4>Jumlah Alokasi</h4>
<hr>
<div class="form-group" >
    <label><b>Tempat Pengambilan :</b></label>
    <input class="form-control" name="tempat_pengambilan" id="tempat_pengambilan" value="<?php echo $tampil->tempat_pengambilan; ?>" required>
</div>
<div class="form-group" >
    <label><b>No Lembaga Penyalur :</b></label>
    <input class="form-control" name="no_penyalur" id="no_penyalur" value="<?php echo $tampil->no_penyalur; ?>" required>
</div>
<div class="form-group" >
    <label><b>Lokasi :</b></label>
    <input class="form-control" name="lokasi_penyalur" id="lokasi_penyalur" value="<?php echo $tampil->lokasi_penyalur ; ?>" required>
</div>
<div class="form-group">
    <label><b>Berlaku Sampai</b></label>
    <input type='date' name='tgl_menikah' value="<?= $tampil->tgl_menikah ?>" required class="form-control">
</div>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_sku_bensin/data');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>