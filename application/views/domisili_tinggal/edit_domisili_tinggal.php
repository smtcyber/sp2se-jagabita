<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Tempat Tinggal
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Domisili Tempat Tinggal</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domisili_tinggal/proses_edit_domisili_tinggal'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_domisili_tinggal->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_domtinggal; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<!-- <div class="form-group" style="color:black">
    <label><b>Alamat Domisili :</b></label>
    <input class="form-control" name="alamat_domisili" id="keperluan" value="<?php echo $tampil->alamat_domisili; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>RT Domisili :</b></label>
    <input class="form-control" name="rt_domisili" id="keperluan" value="<?php echo $tampil->rt_domisili; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>RW Domisili :</b></label>
    <input class="form-control" name="rw_domisili" id="keperluan" value="<?php echo $tampil->rw_domisili; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Desa/Kel, Kecamatan, Kabupaten :</b></label>
    <input class="form-control" name="desa1" id="keperluan" value="<?php echo $tampil->desa1; ?>" required>
    <input class="form-control" name="kecamatan1" id="keperluan" value="<?php echo $tampil->kecamatan1; ?>" required>
    <input class="form-control" name="kabupaten1" id="keperluan" value="<?php echo $tampil->kabupaten1; ?>" required>
</div>

<div class="form-group" >
    <input type="hidden" class="form-control" name="tgl_surat" id="tgl2" value="<?php echo $tampil->tgl_surat; ?>">
</div>
</div> -->
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_domisili_tinggal/domisili_tinggal');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>

</div></div></div></div></div>