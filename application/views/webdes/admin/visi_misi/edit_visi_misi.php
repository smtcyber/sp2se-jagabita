<!-- Page Heading -->
<section class="content-header">
      <h1>
        Visi Misi
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Visi Misi</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_edit_visi_misi'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_visi_misi->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_visi_misi; ?>"/>
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->foto; ?>"/>
<div class="form-group" >
    <label><b>Visi :</b></label>
    <textarea class="form-control" name="visi" required style="height: 100px;"><?php echo $tampil->visi; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Misi :</b></label>
    <textarea class="form-control" name="misi" required style="height: 200px;"><?php echo $tampil->misi; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Foto :</b></label>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto; ?>" onchange="tampilkanPreview(this,'preview')" />
                            <br>
                            <img src="<?php echo base_url().'assets/foto_visi_misi/'.$tampil->foto ?>" width="50% auto">
                            <img id="preview" src="" alt="" width="50% auto"/>
                            <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/visi_misi');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>