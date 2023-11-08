<!-- Page Heading -->
<section class="content-header">
      <h1>
        Belum Punya KTP
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Belum Punya KTP</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_bp_ktp/proses_edit_bp_ktp'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_bp_ktp->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_bp_ktp; ?>" />
<br>
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK Pemilik :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Untuk Persyaratan :</b></label>
    <input class="form-control" name="untuk_persyaratan" id="untuk_persyaratan" value="<?php echo $tampil->untuk_persyaratan; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_bp_ktp/bp_ktp');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div></div></div></div></div>