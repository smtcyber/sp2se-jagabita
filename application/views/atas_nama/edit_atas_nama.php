<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kepala Desa
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Kepala Desa</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_atas_nama/proses_edit_atas_nama'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_atas_nama->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id; ?>" />
<div class="form-group" style="color:black">
    <label><b>Atas Nama :</b></label>
    <input class="form-control" name="atas_nama" id="atas_nama" value="<?php echo $tampil->atas_nama; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Status :</b></label>
    <input class="form-control" name="status" id="status" value="<?php echo $tampil->status; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Jabatan :</b></label>
    <input class="form-control" name="jabatan" id="jabatan" value="<?php echo $tampil->jabatan; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Pangkat :</b></label>
    <input class="form-control" name="pangkat" id="pangkat" value="<?php echo $tampil->pangkat; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>NIP :</b></label>
    <input class="form-control" name="nip" id="nip" value="<?php echo $tampil->nip; ?>">
</di</div>
</div>
</div>
</div>
</div>
<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_atas_nama/atas_nama');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>