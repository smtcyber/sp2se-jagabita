<!-- Page Heading -->
<section class="content-header">
      <h1>
        Surat Kelahiran
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Surat Kelahiran</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepala Keluarga</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_kelahiran/proses_tambah_kelahiran'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Kode Wilayah :</b></label>
    <input class="form-control" name="kode_wilayah" id="kode_wilayah" placeholder="Ketikkan Kode Wilayah disini" required>
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
    <input class="form-control" name="nama_anak" id="nama_anak" placeholder="Ketikkan Nama Anak disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin :</b></label>
    <select class="form-control" name="jenis_kelamin_anak" id="jenis_kelamin_anak" required>
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Dilahirkan :</b></label>
    <select class="form-control" name="tempat_kelahiran" id="tempat_kelahiran" required>
        <option value="-">--pilih--</option>
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
        <option value="-">--pilih--</option>
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
    <input class="form-control" name="kelahiran_ke" id="kelahiran_ke" placeholder="Ketikkan kelahiran ke disini" required>
</div>
<div class="form-group" >
    <label><b>Berat Bayi kg :</b></label>
    <input class="form-control" name="berat_bayi" id="berat_bayi" placeholder="Ketikkan Berat Bayi disini" required>
</div>
<div class="form-group" >
    <label><b>Penolong Kelahiran :</b></label>
    <select class="form-control" name="penolong_kelahiran" id="penolong_kelahiran" required>
        <option value="-">--pilih--</option>
        <option value="Dokter">Dokter</option>
        <option value="Bidan / Perawat">Bidan / Perawat</option>
        <option value="Dukun">Dukun</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Hari Lahir :</b></label>
    <select class="form-control" name="hari_lahir" id="hari_lahir">
        <option value="-">--pilih--</option>
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
    <input class="form-control" name="tanggal_lahir" id="tgl1" placeholder="Ketikkan Tanggal Lahir disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir :</b></label>
    <input class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Ketikkan Tempat Lahir disini" required>
</div>
<div class="form-group" >
    <label><b>Jam Lahir :</b></label>
    <input class="form-control" name="jam_lahir" id="jam_lahir" placeholder="Ketikkan Jam Lahir disini" required>
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
    <input class="form-control" name="no_ktp_ibu" id="no_ktp_ibu" placeholder="Ketikkan Nik Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Ketikkan Nama Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ibu :</b></label>
    <input class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="Ketikkan Tempat Lahir Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ibu :</b></label>
    <input class="form-control" name="tanggal_lahir_ibu" id="tgl2" placeholder="Ketikkan Tanggal Lahir Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Agama Ibu :</b></label>
    <select class="form-control" name="agama_ibu" id="agama_ibu" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur Ibu :</b></label>
    <input class="form-control" name="umur_ibu" id="umur_ibu" placeholder="Ketikkan Umur Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Ketikkan Pekerjaan Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" placeholder="Ketikkan Alamat Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>RT / RW Ibu :</b></label>
    <input class="form-control" name="rt_ibu" id="rt_ibu" placeholder="Ketikkan RT disini" required>
    <input class="form-control" name="rw_ibu" id="rw_ibu" placeholder="Ketikkan RW disini" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan, Kota dan Propinsi Ibu :</b></label>
    <input class="form-control" name="kelurahan_ibu" id="kelurahan_ibu" placeholder="Ketikkan Kelurahan Ibu disini" required>
    <input class="form-control" name="kecamatan_ibu" id="kecamatan_ibu" placeholder="Ketikkan Kecamatan Ibu disini" required>
    <input class="form-control" name="kota_ibu" id="kota_ibu" placeholder="Ketikkan Kota Ibu disini" required>
    <input class="form-control" name="propinsi_ibu" id="propinsi_ibu" placeholder="Ketikkan Propinsi Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ibu :</b></label>
    <input class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" placeholder="Ketikkan Kewarganegaraan disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Catat Kawin :</b></label>
    <input class="form-control" name="tgl_catat_kawin" id="tgl3" placeholder="Ketikkan Tanggal Catat Kawin disini" required>
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
    <input class="form-control" name="no_ktp_ayah" id="no_ktp_ayah" placeholder="Ketikkan Nik Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Ketikkan Nama Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ayah :</b></label>
    <input class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" placeholder="Ketikkan Tempat Lahir Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ayah :</b></label>
    <input class="form-control" name="tanggal_lahir_ayah" id="tgl4" placeholder="Ketikkan Tanggal Lahir Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Agama Ayah :</b></label>
    <select class="form-control" name="agama_ayah" id="agama_ayah" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Umur Ayah :</b></label>
    <input class="form-control" name="umur_ayah" id="umur_ayah" placeholder="Ketikkan Umur Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ayah :</b></label>
    <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Ketikkan Pekerjaan Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ayah :</b></label>
    <input class="form-control" name="alamat_ayah" id="alamat_ayah" placeholder="Ketikkan Alamat Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>RT / RW Ayah :</b></label>
    <input class="form-control" name="rt_ayah" id="rt_ayah" placeholder="Ketikkan RT disini" required>
    <input class="form-control" name="rw_ayah" id="rw_ayah" placeholder="Ketikkan RW disini" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan, Kota dan Propinsi Ayah :</b></label>
    <input class="form-control" name="kelurahan_ayah" id="kelurahan_ayah" placeholder="Ketikkan Kelurahan Ayah disini" required>
    <input class="form-control" name="kecamatan_ayah" id="kecamatan_ayah" placeholder="Ketikkan Kecamatan Ayah disini" required>
    <input class="form-control" name="kota_ayah" id="kota_ibu" placeholder="Ketikkan Kota Ayah disini" required>
    <input class="form-control" name="propinsi_ayah" id="propinsi_ayah" placeholder="Ketikkan Propinsi Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ayah :</b></label>
    <input class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" placeholder="Ketikkan Kewarganegaraan disini" required>
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
    <input class="form-control" name="nik_saksi1" id="nik_saksi1" placeholder="Ketikkan Nik Saksi 1 disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Saksi 1 :</b></label>
    <input class="form-control" name="nama_saksi1" id="nama_saksi1" placeholder="Ketikkan Nama Saksi 1 disini" required>
</div>
<div class="form-group" >
    <label><b>Nik Saksi 2 :</b></label>
    <input class="form-control" name="nik_saksi2" id="nik_saksi2" placeholder="Ketikkan Nik Saksi 2 disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Saksi 2 :</b></label>
    <input class="form-control" name="nama_saksi2" id="nama_saksi2" placeholder="Ketikkan Nama Saksi 2 disini" required>
</div>
</div>
</div>
</div>

 <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pelapor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Pelapor :</b></label>
    <input class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="Ketikkan Nama Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>Nik Pelapor :</b></label>
    <input class="form-control" name="nik_pelapor" id="nik_pelapor" placeholder="Ketikkan Nik Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>Umur Pelapor :</b></label>
    <input class="form-control" name="umur_pelapor" id="umur_pelapor" placeholder="Ketikkan Umur Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerja Pelapor :</b></label>
    <input class="form-control" name="pekerjaan_pelapor" id="pekerjaan_pelapor" placeholder="Ketikkan Pekerjaan Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Pelapor :</b></label>
    <input class="form-control" name="alamat_pelapor" id="alamat_pelapor" placeholder="Ketikkan Alamat Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>Hubungan Pelapor :</b></label>
    <input class="form-control" name="hubungan_pelapor" id="hubungan_pelapor" placeholder="Ketikkan Hubungan Pelapor disini" required>
</div>
</div>
</div>
</div>
</section>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kelahiran/kelahiran');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>