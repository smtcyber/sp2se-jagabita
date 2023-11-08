<!-- Page Heading -->
<section class="content-header">
      <h1>
        Yatim
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Yatim</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Surat Keterangan Belum Kerja</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_yatim/proses_edit_yatim'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_yatim->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_yatim; ?>" />
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $tampil->nama_ayah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Tahun Ayah Meninggal :</b></label>
    <input class="form-control" name="tahun_meninggal" id="tahun_meninggal" value="<?php echo $tampil->tahun_meninggal; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Keperluan :</b></label>
    <input class="form-control" name="keperluan" id="keperluan" value="<?php echo $tampil->keperluan; ?>" required>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_yatim/yatim');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>