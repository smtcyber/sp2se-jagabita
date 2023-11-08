<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Usaha
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Domisili Usaha</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domisili_usaha/proses_edit_domisili_usaha'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_domisili_usaha->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_domusaha; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly >
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Nama Perusahaan :</b></label>
    <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo $tampil->nama_perusahaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Usaha :</b></label>
    <input class="form-control" name="jenis_usaha" id="jenis_usaha" value="<?php echo $tampil->jenis_usaha; ?>" required>
</div>
<div class="form-group" >
    <label><b>Penanggung Jawab :</b></label>
    <input class="form-control" name="penanggung_jawab" id="penanggung_jawab" value="<?php echo $tampil->penanggung_jawab; ?>" required>
</div>
<div class="form-group" >
    <label><b>Status Bangunan :</b></label>
    <input class="form-control" name="status_bangunan" id="status_bangunan" value="<?php echo $tampil->status_bangunan; ?>" required>
</div>
<div class="form-group" >
    <label><b>No Telp :</b></label>
    <input class="form-control" name="no_telp" id="no_telp" value="<?php echo $tampil->no_telp; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Lembaga :</b></label>
    <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" value="<?php echo $tampil->alamat_perusahaan; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_domisili_usaha/domisili_usaha');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>