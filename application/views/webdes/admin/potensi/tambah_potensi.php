<!-- Page Heading -->
<section class="content-header">
      <h1>
        Potensi Desa
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Profil Webdes</a></li>
        <li class="active">Tambah Potensi Desa</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_potensi'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group" >
    <label><b>Potensi Sumber Daya Alam :</b></label>
    <textarea class="form-control" name="potensi_sda" id="potensi_sda" placeholder="Ketikkan Potensi Sumber Daya Alam disini"></textarea>
</div>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Manusia :</b></label>
    <textarea class="form-control" name="potensi_sdm" id="potensi_sdm" placeholder="Ketikkan Potensi Sumber Daya Manusia disini"></textarea>
</div>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Sosial :</b></label>
    <textarea class="form-control" name="potensi_sosial" id="potensi_sosial" placeholder="Ketikkan Potensi Sumber Daya Sosial disini"></textarea>
</div>
<div class="form-group" >
    <label><b>Potensi Sumber Daya Ekonomi :</b></label>
    <textarea class="form-control" name="potensi_ekonomi" id="potensi_ekonomi" placeholder="Ketikkan Potensi Sumber Daya Ekonomi disini"></textarea>
</div>
<div class="form-group" >
    <label><b>Keterangan Lain :</b></label>
    <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Ketikkan Keterangan Lain disini"></textarea>
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