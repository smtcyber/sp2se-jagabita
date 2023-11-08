<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pekerjaan
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Pekerjaan</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Surat Keterangan Pekerjaan</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_pekerjaan/proses_edit_pekerjaan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_pekerjaan->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_pekerjaan; ?>" />
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
    <label><b>Pekerjaan Sebelumnya :</b></label>
    <input class="form-control" name="pekerjaan_lama" id="pekerjaan_lama" value="<?php echo $tampil->pekerjaan_lama; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Pekerjaan Sekarang :</b></label>
    <input class="form-control" name="pekerjaan_sekarang" id="pekerjaan_sekarang" value="<?php echo $tampil->pekerjaan_sekarang; ?>" required>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_pekerjaan/pekerjaan');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>