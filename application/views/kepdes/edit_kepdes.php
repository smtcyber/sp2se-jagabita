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
<form role="form" action="<?php echo site_url().'/c_kepdes/proses_edit_kepdes'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_kepdes->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_nama_kades; ?>" />
<div class="form-group" style="color:black">
    <label><b>Nama Kepala Desa :</b></label>
    <input class="form-control" name="nama_kades" id="nama_kades" value="<?php echo $tampil->nama_kades; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Jabatan :</b></label>
    <input class="form-control" name="jabatan" id="jabatan" value="<?php echo $tampil->jabatan; ?>" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Pangkat :</b></label>
    <input class="form-control" name="pangkat" id="pangkat" value="<?php echo $tampil->pangkat; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Nip :</b></label>
    <input class="form-control" name="nip" id="nip" value="<?php echo $tampil->nip; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Foto Kades :</b></label>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto_kades; ?>" onchange="tampilkanPreview(this,'preview')" />
                            <img src="<?php echo base_url().'assets/foto_kades/'.$tampil->foto_kades ?>" width="60" height="80">
                            <img id="preview" src="" alt="" height="80" width="60"/>
                            <p class="help-block">&nbsp;*Format Foto : *.jpg, *.png. </p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kepdes/kepdes');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>