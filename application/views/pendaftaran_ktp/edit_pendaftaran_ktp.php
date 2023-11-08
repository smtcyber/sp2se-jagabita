<!-- Page Heading -->
<section class="content-header">
      <h1>
            Pendaftaran KTP
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Pedaftaran KTP</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_pendaftaran_ktp/proses_edit_pendaftaran_ktp'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_pendaftaran_ktp->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->no_daftar; ?>" />
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->foto; ?>"/>
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Golongan Darah :</b></label>
    <select class="form-control" name="gol_darah" id="gol_darah" required>
        <option value="<?php echo $tampil->gol_darah; ?>"><?php echo $tampil->gol_darah; ?></option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
        <option value="AB">AB</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Status Kawin :</b></label>
    <select class="form-control" name="s_kawin" id="s_kawin" required>
        <option value="<?php echo $tampil->s_kawin; ?>"><?php echo $tampil->s_kawin; ?></option>
        <option value="Kawin">Kawin</option>
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Permohonan KTP :</b></label>
    <select class="form-control" name="permohonan_ktp" id="permohonan_ktp" required>
        <option value="<?php echo $tampil->permohonan_ktp; ?>"><?php echo $tampil->permohonan_ktp; ?></option>
        <option value="Baru">Baru</option>
        <option value="Perpanjang">Perpanjang</option>
        <option value="Pergantian">Pergantian</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Kode Pos :</b></label>
    <input class="form-control" name="kode_pos" id="kode_pos" value="<?php echo $tampil->kode_pos; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Status KTP:</b></label>
    <select class="form-control" name="status_ktp" id="status_ktp" required>
        <option value="<?php echo $tampil->status_ktp; ?>"><?php echo $tampil->status_ktp; ?></option>
        <option value="Proses di Kelurahan">Proses di Kelurahan</option>
        <option value="Proses di Kecamatan">Proses di Kecamatan</option>
        <option value="Proses di Dispencapil">Proses di Dispencapil</option>
        <option value="Sudah Jadi">Sudah Jadi</option>
    </select>
</div>
<!-- <div class="form-group" style="color:black">
    <label><b>Foto :</b></label><br>
    <input type="file" name="F1" id="F1" value="<?php echo $tampil->foto; ?>" onchange="tampilkanPreview(this,'preview')" />&nbsp;
                            <img src="<?php echo base_url().'assets/foto_ktp/'.$tampil->foto ?>" width="60" height="80">
                            <img id="preview" src="" alt="" height="80" width="60"/>
                            <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p></td>
</div> -->
<div class="form-group" style="color:black">
    <label><b>Berkas :</b></label>
    <select class="form-control" name="berkas" id="berkas" required>
        <option value="<?php echo $tampil->berkas; ?>"><?php echo $tampil->berkas; ?></option>
        <option value="Lengkap">Lengkap</option>
        <option value="Tidak Lengkap">Tidak Lengkap</option>
    </select>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_pendaftaran_ktp/pendaftaran_ktp');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div></div></div></div></div>