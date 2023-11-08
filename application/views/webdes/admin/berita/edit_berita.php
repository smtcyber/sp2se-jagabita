<!-- Page Heading -->
<section class="content-header">
      <h1>
       Berita Desa
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Berita Desa</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_edit_berita'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_berita->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_berita; ?>"/>
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->foto; ?>"/>
<div class="form-group" >
    <label><b>Judul Berita :</b></label>
     <input class="form-control" name="judul" id="judul" value="<?php echo $tampil->judul; ?>" required>
</div>
<div class="form-group" >
    <label><b>Sub Judul Berita :</b></label>
     <input class="form-control" name="sub_judul" id="sub_judul" value="<?php echo $tampil->sub_judul; ?>" required>
</div>
<div class="form-group" >
    <label><b>Isi Berita :</b></label>
    <textarea class="form-control" name="artikel" required style="height: 500px;"><?php echo $tampil->artikel; ?></textarea>
</div>
<div class="form-group" >
    <label><b>Kategori Berita :</b></label>
    <select class="form-control" name="tipe_berita" id="tipe_berita" required>
        <option value="<?php echo $tampil->tipe_berita; ?>"><?php echo $tampil->tipe_berita; ?></option>
        <option value="Berita Mancanegara">Berita Mancanegara</option>
        <option value="Berita Dalam Negeri">Berita Dalam Negeri</option>
        <option value="Berita Desa">Berita Desa</option>
        <option value="Politik">Politik</option>
        <option value="Kuliner">Kuliner</option>
        <option value="Olahraga">Olahraga</option>
        <option value="Pendidikan">Pendidikan</option>
        <option value="Teknologi">Teknologi</option>
        <option value="Gaya Hidup">Gaya Hidup</option>
        <option value="Traveling">Traveling</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Sumber Berita :</b></label>
     <input class="form-control" name="sumber" id="sumber" value="<?php echo $tampil->sumber; ?>" required>
</div>
<div class="form-group" >
    <label><b>Foto Berita :</b></label>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto; ?>" onchange="tampilkanPreview(this,'preview')" />
                            <br>
                            <img src="<?php echo base_url().'assets/foto_berita/'.$tampil->foto ?>" width="50% auto">
                            <img id="preview" src="" alt="" width="50% auto"/>
                            <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/berita');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>