<!-- Page Heading -->
<section class="content-header">
      <h1>
       Profil Wilayah Desa
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Profil Wilayah Desa</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_edit_wilayah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_wilayah->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_wilayah; ?>"/>
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->foto; ?>"/>
<div class="form-group" >
    <label><b>Luas Wilayah :</b></label>
     <input class="form-control" name="luas_wilayah" id="luas_wilayah" value="<?php echo $tampil->luas_wilayah; ?>" required>
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Pemukiman :</b></label>
     <input class="form-control" name="luas_pemukiman" id="luas_pemukiman" value="<?php echo $tampil->luas_pemukiman; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Persawahan :</b></label>
     <input class="form-control" name="luas_persawahan" id="luas_persawahan" value="<?php echo $tampil->luas_persawahan; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Perkebunan :</b></label>
     <input class="form-control" name="luas_perkebunan" id="luas_perkebunan" value="<?php echo $tampil->luas_perkebunan; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Pekarangan :</b></label>
     <input class="form-control" name="luas_pekarangan" id="luas_pekarangan" value="<?php echo $tampil->luas_pekarangan; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Tanaman :</b></label>
     <input class="form-control" name="luas_tanaman" id="luas_tanaman" value="<?php echo $tampil->luas_tanaman; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Perkantoran :</b></label>
     <input class="form-control" name="luas_perkantoran" id="luas_perkantoran" value="<?php echo $tampil->luas_perkantoran; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Luas Lainnya :</b></label>
     <input class="form-control" name="luas_lainnya" id="luas_lainnya" value="<?php echo $tampil->luas_lainnya; ?>">
     <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ket : ha/m<sup>2</sup></p>
</div>
<div class="form-group" >
    <label><b>Batas Wiayah Utara :</b></label>
     <input class="form-control" name="batas_utara" id="batas_utara" value="<?php echo $tampil->batas_utara; ?>">
</div>
<div class="form-group" >
    <label><b>Batas Wiayah Selatam :</b></label>
     <input class="form-control" name="batas_selatan" id="batas_selatan" value="<?php echo $tampil->batas_selatan; ?>">
</div>
<div class="form-group" >
    <label><b>Batas Wiayah Timur :</b></label>
     <input class="form-control" name="batas_timur" id="batas_timur" value="<?php echo $tampil->batas_timur; ?>">
</div>
<div class="form-group" >
    <label><b>Batas Wiayah Barat :</b></label>
     <input class="form-control" name="batas_barat" id="batas_barat" value="<?php echo $tampil->batas_barat; ?>">
</div>
<div class="form-group" >
    <label><b>Foto :</b></label>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto; ?>" onchange="tampilkanPreview(this,'preview')" />
      <br>
      <img src="<?php echo base_url().'assets/foto_wilayah/'.$tampil->foto ?>" width="50% auto">
      <img id="preview" src="" alt="" width="50% auto"/>
      <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/wilayah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>