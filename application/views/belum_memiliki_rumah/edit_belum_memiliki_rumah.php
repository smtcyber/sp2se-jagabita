<!-- Page Heading -->
<section class="content-header">
      <h1>
        Belum Memiliki Rumah
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Belum Memiliki Rumah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_belum_memiliki_rumah/proses_edit_belum_memiliki_rumah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_belum_memiliki_rumah->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_belum_memiliki_rumah; ?>" />
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
    <label><b>Keterangan :</b></label>
    <input class="form-control" name="keterangan" id="keterangan" value="<?php echo $tampil->keterangan; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_belum_memiliki_rumah/belum_memiliki_rumah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>