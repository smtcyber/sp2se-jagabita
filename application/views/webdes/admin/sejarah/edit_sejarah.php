<!-- Page Heading -->
<section class="content-header">
      <h1>
       Sejarah
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Sejarah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'webdes/proses_edit_sejarah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_sejarah->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_sejarah; ?>"/>
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->foto; ?>"/>
<div class="form-group" >
    <label><b>Sejarah :</b></label>
    <textarea class="form-control" name="konten" required style="height: 400px;"><?php echo $tampil->konten; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Foto :</b></label>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto; ?>" onchange="tampilkanPreview(this,'preview')" />
                            <br>
                            <img src="<?php echo base_url().'assets/foto_sejarah/'.$tampil->foto ?>" width="50% auto">
                            <img id="preview" src="" alt="" width="50% auto"/>
                            <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/sejarah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>