<!-- Page Heading -->
<section class="content-header">
      <h1>
        Ahli Waris
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Data</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_ahli_waris/proses_edit_pelapor'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_pelapor->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_pelapor; ?>" />
<h4 style="color:red"><b>Data Pelapor</b></h4>
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", dengan NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", dengan NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<hr>

<h4 style="color:red"><b>Data Pemberi Waris</b></h4 style="color:red">
<hr>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pelapor" id="nama_pelapor" value="<?php echo $tampil->nama_pelapor; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pelapor" id="nik_pelapor" value="<?php echo $tampil->nik_pelapor; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Tanggal Meninggal :</b></label>
    <input class="form-control" name="tgl_meninggal" id="tgl2" value="<?php echo $tampil->tgl_meninggal; ?>">
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>