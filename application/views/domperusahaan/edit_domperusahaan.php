<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Perusahaan
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Domisili Perusahaan</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_domperusahaan/proses_edit_domperusahaan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_domperusahaan->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_domperusahaan; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK Pemilik :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div><hr>
<div class="form-group" >
    <label><b>Nama Perusahaan :</b></label>
    <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="<?php echo $tampil->nama_perusahaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Perusahaan :</b></label>
    <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" value="<?php echo $tampil->alamat_perusahaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Perusahaan :</b></label>
    <input class="form-control" name="rt_perusahaan" id="rt_perusahaan" value="<?php echo $tampil->rt_perusahaan; ?>" required>
    <input class="form-control" name="rw_perusahaan" id="rw_perusahaan" value="<?php echo $tampil->rw_perusahaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan dan Kabupaten Perusahaan :</b></label>
    <input class="form-control" name="desa_perusahaan" id="desa_perusahaan" value="<?php echo $tampil->desa_perusahaan; ?>" required>
    <input class="form-control" name="kecamatan_perusahaan" id="kecamatan_perusahaan" value="<?php echo $tampil->kecamatan_perusahaan; ?>" required>
    <input class="form-control" name="kabupaten_perusahaan" id="kabupaten_perusahaan" value="<?php echo $tampil->kabupaten_perusahaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Bidang Perusahaan :</b></label>
    <input class="form-control" name="bidang_perusahaan" id="bidang_perusahaan" value="<?php echo $tampil->bidang_perusahaan; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Usaha :</b></label>
    <input class="form-control" name="jenis_usaha" id="jenis_usaha" value="<?php echo $tampil->jenis_usaha; ?>" required>
</div>
<div class="form-group" >
    <label><b>Masa Berlaku :</b></label>
    <input class="form-control" name="masa_berlaku" id="tgl1" value="<?php echo $tampil->masa_berlaku; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_domperusahaan/domperusahaan');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>