<!-- Page Heading -->
<section class="content-header">
      <h1>
        Sosial Media
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Profil Webdes</a></li>
        <li class="active">Tambah Sosial Media</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_tambah_sosmed'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group" >
    <label><b>Facebook :</b></label>
    <input class="form-control" name="facebook" id="facebook" placeholder="Ketikkan url Facebook disini">
</div>
<div class="form-group" >
    <label><b>Youtube :</b></label>
    <input class="form-control" name="youtube" id="youtube" placeholder="Ketikkan url Youtube disini">
</div>
<div class="form-group" >
    <label><b>Instagram :</b></label>
    <input class="form-control" name="instagram" id="instagram" placeholder="Ketikkan url Instagram disini">
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