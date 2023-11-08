<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kop Surat
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
<form role="form" action="<?php echo site_url().'/c_header/proses_edit_header'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_header->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_kuwu; ?>" />
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->logo; ?>"/>
<div class="form-group" style="color:black">
    <label><b>Alamat :</b></label>
    <input class="form-control" name="K5" id="K5" value="<?php echo $tampil->alamat; ?>" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Desa :</b></label>
    <input class="form-control" name="desa" id="desa" value="<?php echo $tampil->desa; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Kecamatan :</b></label>
    <input class="form-control" name="K3" id="K3" value="<?php echo $tampil->kecamatan; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Kode Pos :</b></label>
    <input class="form-control" name="K6" id="K6" value="<?php echo $tampil->kode_pos; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Nama Kantor :</b></label>
    <input class="form-control" name="K4" id="K4" value="<?php echo $tampil->jabatan; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Pemerintah :</b></label>
    <input class="form-control" name="K2" id="K2" value="<?php echo $tampil->pemerintah; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Email :</b></label>
    <input class="form-control" name="K1" id="K1" value="<?php echo $tampil->email; ?>" />
</div>
<div class="form-group" style="color:black">
    <label><b>Logo :</b></label>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->logo; ?>" onchange="tampilkanPreview(this,'preview')" />
                            <img src="<?php echo base_url().'assets/logo/'.$tampil->logo ?>" width="60" height="80">
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
    <a class="btn btn-danger" href="<?php echo site_url('c_header/header');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>