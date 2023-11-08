<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Detail Perangkat Desa</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Data Perangkat Desa</a></li>
        <li class="active">Detail Perangkat Desa</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Detail Perangkat Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<div id="div1">
<table class="table table-bordered">
<form role="form" action="" method="" enctype="multipart/form-data"/>
<?php foreach($detail_anggota->result() as $tampil) {?>
<tbody>
	<tr>
		<th rowspan="6" align="center" valign="center" width="300"><label>Foto :</label><br><a href="<?php echo base_url().'assets/anggota/'.$tampil->anggota_foto ?>"
		target="_blank">
		<img src="<?php echo base_url().'assets/anggota/'.$tampil->anggota_foto ?>"
		width="200" height="260"></a></th>
	</tr>
	<tr>
		<th><label>Nama :</label><input class="form-control" name="T1" id="T1"
		value="<?php echo $tampil->anggota_nama; ?>" readonly /></th>
	</tr>
	<tr>
		<th><label>Nik :</label><input class="form-control" name="no_ktp" id="no_ktp"
		value="<?php echo $tampil->no_ktp; ?>" readonly /></th>
	</tr>
	<tr>
		<th><label>Nip :</label><input class="form-control" name="T3" id="T3"
		value="<?php echo $tampil->anggota_jk; ?>" readonly /></th>
	</tr>
	<tr>
		<th><label>Jabatan :</label><input class="form-control" name="jabatan" id="jabatan"
		value="<?php echo $tampil->jabatan; ?>" readonly /></th>
	</tr>
	<tr>
		<th><label>Jenis Kelamin :</label><input class="form-control" name="C1" id="C1"
		value="<?php echo $tampil->anggota_jk; ?>" readonly /></th>
	</tr>

</tbody>
</table>

<?php } ?>
</form>
</div>

<div class="box-footer" align="center">
          <a class="btn btn-primary" onclick="printContent('div1')" style="color:white"><i class="fa fa-print">
		</i> Cetak </a>
		<a class="btn btn-danger"class="btn btn-danger" href="<?php echo site_url('dashboard/anggota');?>"><i class="fa fa-undo"></i>
        Kembali</a><br>
          </div>
        </div>
</div>
</div>
</section>