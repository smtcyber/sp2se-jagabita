<!-- Page Heading -->
<section class="content-header">
      <h1>
        Sejarah
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Profil Webdes</a></li>
        <li class="active">Tambah Sejarah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_sejarah'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group" >
    <label><b>Sejarah :</b></label>
    <textarea class="form-control" name="konten" required style="height: 400px;">Ketikkan Sejarah Disini...</textarea>
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