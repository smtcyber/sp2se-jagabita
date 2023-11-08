<!-- Page Heading -->
<section class="content-header">
      <h1>
       Potensi Desa
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Potensi Desa</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_edit_potensi'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_potensi->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_potensi; ?>"/>
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->foto; ?>"/>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Alam :</b></label>
    <textarea class="form-control" name="potensi_sda"><?php echo $tampil->potensi_sda; ?></textarea>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Manusia :</b></label>
    <textarea class="form-control" name="potensi_sdm"><?php echo $tampil->potensi_sdm; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Sosial :</b></label>
    <textarea class="form-control" name="potensi_sosial"><?php echo $tampil->potensi_sosial; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Ekonomi :</b></label>
    <textarea class="form-control" name="potensi_ekonomi"><?php echo $tampil->potensi_ekonomi; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Keterangan Lain :</b></label>
    <textarea class="form-control" name="keterangan"><?php echo $tampil->keterangan; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Foto :</b></label>
   <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto; ?>" onchange="tampilkanPreview(this,'preview')" />
      <br>
      <img src="<?php echo base_url().'assets/foto_potensi/'.$tampil->foto ?>" width="50% auto">
      <img id="preview" src="" alt="" width="50% auto"/>
      <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/potensi');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>