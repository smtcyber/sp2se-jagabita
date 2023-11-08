<!-- Page Heading -->
<section class="content-header">
      <h1>
        Izin Keramaian
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Izin Keramaian</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_ramai/proses_edit_ramai'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_ramai->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_ramai; ?>" />
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
    <label><b>Maksud Keramaian :</b></label>
    <input class="form-control" name="maksud" id="maksud" value="<?php echo $tampil->maksud; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kegiatan :</b></label>
    <input class="form-control" name="jenis_hiburan" id="jenis_hiburan" value="<?php echo $tampil->jenis_hiburan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Pelaksanaan :</b></label>
    <input class="form-control" name="tmpt_pelaksanaan" id="tmpt_pelaksanaan" value="<?php echo $tampil->tmpt_pelaksanaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Dusun,Rt,Rw Pelaksaan :</b></label>
    <input class="form-control" name="dusun1" id="dusun1" value="<?php echo $tampil->dusun1; ?>" required>
    <input class="form-control" name="rt1" id="rt1" value="<?php echo $tampil->rt1; ?>" required>
    <input class="form-control" name="rw1" id="rw1" value="<?php echo $tampil->rw1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Acara :</b></label>
    <input class="form-control" name="waktu_mulai" id="tgl1" value="<?php echo $tampil->waktu_mulai; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_ramai/ramai');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>