<!-- Page Heading -->
<section class="content-header">
      <h1>
        Visi Misi
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Profil Webdes</a></li>
        <li class="active">Tambah Visi Misi</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_visi_misi'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group" >
    <label><b>Visi :</b></label>
    <textarea class="form-control" name="visi" required style="height: 100px;">Ketikkan Visi Disini...</textarea>
</div>
<div class="form-group" >
    <label><b>Misi :</b></label>
    <textarea class="form-control" name="misi" required style="height: 100px;">Ketikkan Misi Disini...</textarea>
</div>
<div class="form-group" >
    <label><b>Foto :</b></label>
    <input class="form-control" type="file" name="F1" id="F1" onchange="tampilkanPreview(this, 'preview')" />
    <p class="help-block">&nbsp;Format : *.jpg, *.png, *.gif, dll</p>
</div>
<br><br>
<div class="form-group" align="left">
	<button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button>
	<button type="reset" class="btn btn-success"><i class='fa fa-refresh'></i> Reset</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class='fa fa-times'></i> Batal</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</b>