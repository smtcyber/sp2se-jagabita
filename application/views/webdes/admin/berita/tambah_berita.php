<!-- Page Heading -->
<section class="content-header">
      <h1>
        Berita Desa
            <small>Buat Berita Baru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Berita Webdes</a></li>
        <li class="active">Tambah Berita Desa</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_berita'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group" >
    <label><b>Judul Berita :</b></label>
    <input class="form-control" name="judul" id="judul" placeholder="Ketikkan Judul Berita disini" required>
</div>
<div class="form-group" >
    <label><b>Sub Judul :</b></label>
    <input class="form-control" name="sub_judul" id="sub_judul" placeholder="Ketikkan Sub Judul Berita disini" required>
</div>
<div class="form-group" >
    <label><b>Isi Berita :</b></label>
    <textarea class="form-control" name="artikel" required style="height: 500px;" placeholder="Ketikkan Isi Berita Disini..."></textarea>
</div>
<div class="form-group" >
    <label><b>Kategori Berita :</b></label>
    <select class="form-control" name="tipe_berita" id="tipe_berita" required>
        <option value="-">--pilih--</option>
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
    <input class="form-control" name="sumber" id="sumber" placeholder="Ketikkan Sumber Berita disini" required>
</div>
<div class="form-group" >
    <label><b>Foto Berita :</b></label>
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