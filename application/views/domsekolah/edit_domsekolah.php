<!-- Page Heading -->
<section class="content-header">
      <h1>
        Domisili Sekolah
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Domisili Sekolah</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'c_domsekolah/proses_edit_domsekolah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_domsekolah->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_domsekolah; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK Pelapor :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Nama Sekolah :</b></label>
    <input class="form-control" name="nama_sekolah" id="nama_sekolah" value="<?php echo $tampil->nama_sekolah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Sekolah :</b></label>
    <input class="form-control" name="alamat_sekolah" id="alamat_sekolah" value="<?php echo $tampil->alamat_sekolah; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Sekolah :</b></label>
    <input class="form-control" name="rt_sekolah" id="rt_sekolah" value="<?php echo $tampil->rt_sekolah; ?>" required>
    <input class="form-control" name="rw_sekolah" id="rw_sekolah" value="<?php echo $tampil->rw_sekolah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa dan Kecamatan Sekolah :</b></label>
    <input class="form-control" name="desa_sekolah" id="desa_sekolah" value="<?php echo $tampil->desa_sekolah; ?>" required>
    <input class="form-control" name="kecamatan_sekolah" id="kecamatan_sekolah" value="<?php echo $tampil->kecamatan_sekolah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Sekolah :</b></label>
    <input class="form-control" name="jenis_sekolah" id="jenis_sekolah" value="<?php echo $tampil->jenis_sekolah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tahun Sekolah :</b></label>
    <input class="form-control" name="tahun_sekolah" id="tgl1" value="<?php echo $tampil->tahun_sekolah; ?>" required>
</div>
<div class="form-group" >
    <label><b>NPSN :</b></label>
    <input class="form-control" name="npsn" id="npsn" value="<?php echo $tampil->npsn; ?>" required>
</div>
<div class="form-group" >
    <label><b>NSS :</b></label>
    <input class="form-control" name="nss" id="nss" value="<?php echo $tampil->nss; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_domSekolah/domSekolah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>