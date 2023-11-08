<!-- Page Heading -->
<section class="content-header">
      <h1>
        Rekap Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Rekap Data</a></li>
        <li class="active">Daftar Nikah</li>
      </ol>
</section>
<br>
<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_daftar_nikah/daftar_nikah_rekap'?>" target="_blank"
method="post" autocomplete="on"/>
<div class="form-group" style="color:black">
	<label><b>Dari Tanggal</b></label>
	<input class="form-control" name="T1" id="tgl1" placeholder="Ketikkan Tanggal Mulai Disini" required />
	<p class="help-block">Contoh : dd/mm/yyyy</p>
</div><hr>
<div class="form-group">
	<label><b>Sampai Tanggal</b></label>
	<input class="form-control" name="T2" id="tgl2" placeholder="Ketikkan Sampai Tanggal Disini" required />
	<p class="help-block">Contoh : dd/mm/yyyy</p>
</div><hr>
<div class="form-group">
	<button type="submit" class="btn btn-primary"><i class="fa fa-eye"></i> Tampilkan Data</button>
	<button type="reset" class="btn btn-success"><i class="fa fa-refresh"></i> Reset</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-times"></i> Batal</button>
</div>
</form>
</div>
</div>
</div>
</div>