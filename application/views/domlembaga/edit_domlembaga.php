<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Lembaga
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Domisili Lembaga</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domlembaga/proses_edit_domlembaga'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_domlembaga->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_domlembaga; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK Pelapor :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Nama Lembaga :</b></label>
    <input class="form-control" name="nama_lembaga" id="nama_lembaga" value="<?php echo $tampil->nama_lembaga; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Lembaga :</b></label>
    <input class="form-control" name="alamat_lembaga" id="alamat_lembaga" value="<?php echo $tampil->alamat_lembaga; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Lembaga :</b></label>
    <input class="form-control" name="rt_lembaga" id="rt_lembaga" value="<?php echo $tampil->rt_lembaga; ?>" required>
    <input class="form-control" name="rw_lembaga" id="rw_lembaga" value="<?php echo $tampil->rw_lembaga; ?>" required>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_domlembaga/domlembaga');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>