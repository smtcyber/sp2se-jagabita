<!-- Page Heading -->
<section class="content-header">
      <h1>
        Profil Wilayah Desa
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Profil Webdes</a></li>
        <li class="active">Tambah Profil Wilayah Desa</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_wilayah'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group" >
    <label><b>Luas Wilayah :</b></label>
    <input class="form-control" name="luas_wilayah" id="luas_wilayah" placeholder="Ketikkan Luas Wilayah disini" required>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Pemukiman :</b></label>
    <input class="form-control" name="luas_pemukiman" id="luas_pemukiman" placeholder="Ketikkan Luas Pemukiman disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Persawahan :</b></label>
    <input class="form-control" name="luas_persawahan" id="luas_persawahan" placeholder="Ketikkan Luas Persawahan disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Perkebunan :</b></label>
    <input class="form-control" name="luas_perkebunan" id="luas_perkebunan" placeholder="Ketikkan Luas Perkebunan disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Pekarangan :</b></label>
    <input class="form-control" name="luas_pekarangan" id="luas_pekarangan" placeholder="Ketikkan Luas Pekarangan disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Tanaman :</b></label>
    <input class="form-control" name="luas_tanaman" id="luas_tanaman" placeholder="Ketikkan Luas Tanaman disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Perkantoran :</b></label>
    <input class="form-control" name="luas_perkantoran" id="luas_perkantoran" placeholder="Ketikkan Luas Perkantoran disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Lainnya :</b></label>
    <input class="form-control" name="luas_lainnya" id="luas_lainnya" placeholder="Ketikkan Luas Lainnya disini">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Batas Wilayah Utara :</b></label>
    <input class="form-control" name="batas_utara" id="batas_utara" placeholder="Ketikkan Batas Wilayah Utara disini">
</div>
<div class="form-group" >
    <label><b>Batas Wilayah Selatan :</b></label>
    <input class="form-control" name="batas_selatan" id="batas_selatan" placeholder="Ketikkan Batas Wilayah Selatan disini">
</div>
<div class="form-group" >
    <label><b>Batas Wilayah Timur :</b></label>
    <input class="form-control" name="batas_timur" id="batas_timur" placeholder="Ketikkan Batas Wilayah Timur disini">
</div>
<div class="form-group" >
    <label><b>Batas Wilayah Barat :</b></label>
    <input class="form-control" name="batas_barat" id="batas_barat" placeholder="Ketikkan Batas Wilayah Barat disini">
</div>
<div class="form-group" >
    <label><b>Foto Wilayah :</b></label>
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