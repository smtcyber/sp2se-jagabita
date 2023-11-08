<!-- Page Heading -->
<section class="content-header">
      <h1>
        Surat Kelahiran
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Surat Kelahiran</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pelapor</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_kelahiran/proses_edit_kelahiran'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<?php foreach ($edit_kelahiran->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_kelahiran; ?>" />
</div>
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Hubungan Pelapor :</b></label>
    <input class="form-control" name="hubungan_pelapor" id="hubungan_pelapor" value="<?php echo $tampil->hubungan_pelapor; ?>" required>
</div>
</div>
</div>
</div>

        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Bayi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_anak" id="nama_anak" value="<?php echo $tampil->nama_anak; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin :</b></label>
    <select class="form-control" name="jenis_kelamin_anak" id="jenis_kelamin_anak" required>
        <option value="<?php echo $tampil->jenis_kelamin_anak; ?>"><?php echo $tampil->jenis_kelamin_anak; ?></option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Dilahirkan :</b></label>
    <select class="form-control" name="tempat_kelahiran" id="tempat_kelahiran" required>
        <option value="<?php echo $tampil->tempat_kelahiran; ?>"><?php echo $tampil->tempat_kelahiran; ?></option>
        <option value="RS / RB">RS / RB</option>
        <option value="Puskesmas">Puskesmas</option>
        <option value="Polindes">Polindes</option>
        <option value="Rumah">Rumah</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Jenis Kelahiran :</b></label>
    <select class="form-control" name="jenis_kelahiran" id="jenis_kelahiran" required>
        <option value="<?php echo $tampil->jenis_kelahiran; ?>"><?php echo $tampil->jenis_kelahiran; ?></option>
        <option value="Tunggal">Tunggal</option>
        <option value="Kembar 1">Kembar 1</option>
        <option value="Kembar 2">Kembar 2</option>
        <option value="Kembar 3">Kembar 3</option>
        <option value="Kembar 4">Kembar 4</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Kelahiran ke :</b></label>
    <input class="form-control" name="kelahiran_ke" id="kelahiran_ke" value="<?php echo $tampil->kelahiran_ke; ?>" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Bayi:</b></label>
    <select class="form-control" name="berat_bayi" id="berat_bayi" required>
        <option value="<?php echo $tampil->berat_bayi; ?>"><?php echo $tampil->berat_bayi; ?></option>
        <option value="WNI Asli">WNI Asli</option>
        <option value="WNI Keturunan">WNI Keturunan</option>
        <option value="WNA">WNA</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Penolong Kelahiran :</b></label>
    <select class="form-control" name="penolong_kelahiran" id="penolong_kelahiran" required>
        <option value="<?php echo $tampil->penolong_kelahiran; ?>"><?php echo $tampil->penolong_kelahiran; ?></option>
        <option value="Dokter">Dokter</option>
        <option value="Bidan / Perawat">Bidan / Perawat</option>
        <option value="Dukun">Dukun</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Hari Lahir :</b></label>
    <select class="form-control" name="hari_lahir" id="hari_lahir">
        <option value="<?php echo $tampil->hari_lahir; ?>"><?php echo $tampil->hari_lahir; ?></option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jum'at">Jumat</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir :</b></label>
    <input class="form-control" name="tanggal_lahir_anak" id="tgl2" value="<?php echo $tampil->tanggal_lahir_anak; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir :</b></label>
    <input class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tampil->tempat_lahir; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jam Lahir :</b></label>
    <input class="form-control" name="jam_lahir" id="jam_lahir" value="<?php echo $tampil->jam_lahir; ?>" required>
</div>
</div>
</div>
</div>

 <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ibu</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nik Ibu :</b></label>
    <input class="form-control" name="no_ktp_ibu" id="no_ktp_ibu" value="<?php echo $tampil->no_ktp_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo $tampil->nama_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ibu :</b></label>
    <input class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" value="<?php echo $tampil->tempat_lahir_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ibu :</b></label>
    <input class="form-control" name="tanggal_lahir_ibu" id="tgl2" value="<?php echo $tampil->tanggal_lahir_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Agama Ibu :</b></label>
    <select class="form-control" name="agama_ibu" id="agama_ibu" required>
        <option value="<?php echo $tampil->agama_ibu; ?>"><?php echo $tampil->agama_ibu; ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur Ibu :</b></label>
    <input class="form-control" name="umur_ibu" id="umur_ibu" value="<?php echo $tampil->umur_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?php echo $tampil->pekerjaan_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" value="<?php echo $tampil->alamat_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT / RW Ibu :</b></label>
    <input class="form-control" name="rt_ibu" id="rt_ibu" value="<?php echo $tampil->rt_ibu; ?>" required>
    <input class="form-control" name="rw_ibu" id="rw_ibu" value="<?php echo $tampil->rw_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan, Kota dan Propinsi Ibu :</b></label>
    <input class="form-control" name="kelurahan_ibu" id="kelurahan_ibu" value="<?php echo $tampil->kelurahan_ibu; ?>" required>
    <input class="form-control" name="kecamatan_ibu" id="kecamatan_ibu" value="<?php echo $tampil->kecamatan_ibu; ?>" required>
    <input class="form-control" name="kota_ibu" id="kota_ibu" value="<?php echo $tampil->kota_ibu; ?>" required>
    <input class="form-control" name="propinsi_ibu" id="propinsi_ibu" value="<?php echo $tampil->propinsi_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ibu :</b></label>
    <input class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" value="<?php echo $tampil->kewarganegaraan_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Catat Kawin :</b></label>
    <input class="form-control" name="tgl_catat_kawin" id="tgl3" value="<?php echo $tampil->tgl_catat_kawin; ?>" required>
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ayah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nik Ayah :</b></label>
    <input class="form-control" name="no_ktp_ayah" id="no_ktp_ayah" value="<?php echo $tampil->no_ktp_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $tampil->nama_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ayah :</b></label>
    <input class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" value="<?php echo $tampil->tempat_lahir_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ayah :</b></label>
    <input class="form-control" name="tanggal_lahir_ayah" id="tgl4" value="<?php echo $tampil->tanggal_lahir_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Agama Ayah :</b></label>
    <select class="form-control" name="agama_ayah" id="agama_ayah" required>
        <option value="<?php echo $tampil->agama_ayah; ?>"><?php echo $tampil->agama_ayah; ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur Ayah :</b></label>
    <input class="form-control" name="umur_ayah" id="umur_ayah" value="<?php echo $tampil->umur_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ayah :</b></label>
    <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?php echo $tampil->pekerjaan_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ayah :</b></label>
    <input class="form-control" name="alamat_ayah" id="alamat_ayah" value="<?php echo $tampil->alamat_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT / RW Ayah :</b></label>
    <input class="form-control" name="rt_ayah" id="rt_ayah" value="<?php echo $tampil->rt_ayah; ?>" required>
    <input class="form-control" name="rw_ayah" id="rw_ayah" value="<?php echo $tampil->rw_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan, Kota dan Propinsi Ayah :</b></label>
    <input class="form-control" name="kelurahan_ayah" id="kelurahan_ayah" value="<?php echo $tampil->kelurahan_ayah; ?>" required>
    <input class="form-control" name="kecamatan_ayah" id="kecamatan_ayah" value="<?php echo $tampil->kecamatan_ayah; ?>" required>
    <input class="form-control" name="kota_ayah" id="kota_ibu" value="<?php echo $tampil->kota_ibu; ?>" required>
    <input class="form-control" name="propinsi_ayah" id="propinsi_ayah" value="<?php echo $tampil->propinsi_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ayah :</b></label>
    <input class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" value="<?php echo $tampil->kewarganegaraan_ayah; ?>" required>
</div>
</div>
</div>
</div>

 <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Saksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nik Saksi 1 :</b></label>
    <input class="form-control" name="nik_saksi1" id="nik_saksi1" value="<?php echo $tampil->nik_saksi1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nama Saksi 1 :</b></label>
    <input class="form-control" name="nama_saksi1" id="nama_saksi1" value="<?php echo $tampil->nama_saksi1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nik Saksi 2 :</b></label>
    <input class="form-control" name="nik_saksi2" id="nik_saksi2" value="<?php echo $tampil->nik_saksi2; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nama Saksi 2 :</b></label>
    <input class="form-control" name="nama_saksi2" id="nama_saksi2" value="<?php echo $tampil->nama_saksi2; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl5" value="<?php echo $tampil->tgl_surat; ?>" required>
</div>
</div>
</div>
</div>
</section>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kelahiran/kelahiran');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>