<!-- Page Heading -->
<section class="content-header">
      <h1>
        Rekap Surat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Rekap Surat</a></li>
        <li class="active">Rekap Semua Surat</li>
      </ol>
</section>
<br>
<section class="content">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><b>Rekap Semua Surat</b></h3>
<br>
<h3 class="mb-3">SP2SE | <?php echo $header->desa; ?></h3>
<hr>
<form role="form" action="<?php echo site_url().'/dashboard/rekap_data'?>" method="post" autocomplete="on"/>
<div class="form-group" style="color:black">
	<br>
	<label><b>Dari Tanggal</b></label>
	<input class="form-control" name="T1" id="tgl1" placeholder="Ketikkan Tanggal Mulai Disini" required />
</div><hr>
<div class="form-group">
	<label><b>Sampai Tanggal</b></label>
	<input class="form-control" name="T2" id="tgl2" placeholder="Ketikkan Sampai Tanggal Disini" required />
</div><hr>
<div class="form-group">
	<button type="submit" class="btn btn-success"><i class="fa fa-eye"></i> Tampilkan Data</button>
	<button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-times"></i> Batal</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>