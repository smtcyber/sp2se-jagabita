<!-- Page Heading -->
<section class="content-header">
      <h1>
        Daftar Nikah
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Daftar Nikah</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Calon</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_daftar_nikah/proses_tambah_daftar_nikah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" >
    <label><b>Nama Calon :</b></label>
    <input class="form-control" name="nama_calon" id="nama_calon" placeholder="Ketikkan Nama Calon disini" required>
</div>
<div class="form-group" >
    <label><b>NIK Calon :</b></label>
    <input class="form-control" name="nik_calon" id="nik_calon" placeholder="Ketikkan Nik Calon disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Calon :</b></label>
    <input class="form-control" name="tmpt_lahir_calon" id="tmpt_lahir_calon" placeholder="Ketikkan Tempat Lahir Calon disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Calon :</b></label>
    <input class="form-control" name="tgl_lahir_calon" id="tgl2" placeholder="Ketikkan Tanggal Lahir Calon disini" required>
</div>

<div class="form-group" >
    <label><b>Jenis Kelamin Calon :</b></label>
    <select class="form-control" name="jenis_kelamin_calon" id="jenis_kelamin_calon" required>
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Calon:</b></label>
    <input class="form-control" name="kewarganegaraan_calon" id="kewarganegaraan_calon" placeholder="Ketikkan Kewarganegaraan Calon disini" required>
</div>
<div class="form-group" >
    <label><b>Agama Calon:</b></label>
    <select class="form-control" name="agama_calon" id="agama_calon" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Calon:</b></label>
    <input class="form-control" name="pekerjaan_calon" id="pekerjaan_calon" placeholder="Ketikkan Pekerjaan Calon disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Calon :</b></label>
    <input class="form-control" name="alamat_calon" id="alamat_calon" placeholder="Ketikkan Alamat Calon disini" required>
</div>
<div class="form-group" >
    <label><b>RT / RW Calon:</b></label>
    <input class="form-control" name="rt_calon" id="rt_calon" placeholder="Ketikkan RT disini" required>
    <input class="form-control" name="rw_calon" id="rw_calon" placeholder="Ketikkan RW disini" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan dan Kabupaten Calon :</b></label>
    <input class="form-control" name="desa_calon" id="desa_calon" placeholder="Ketikkan Desa Calon disini" required>
    <input class="form-control" name="kecamatan_calon" id="kecamatan_calon" placeholder="Ketikkan Kecamatan Calon disini" required>
    <input class="form-control" name="kabupaten_calon" id="kabupaten_calon" placeholder="Ketikkan Kabupaten Calon disini" required>
</div>
<div class="form-group" >
    <label><b>Status Diri Cewe :</b></label>
    <select class="form-control" name="status_diri_cwe" id="status_diri_cwe" required>
        <option value="-">--pilih--</option>
        <option value="Jejaka">Jejaka</option>
        <option value="Perawan">Perawan</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Nama Pasangan Dulu :</b></label>
    <input class="form-control" name="nama_pasangan_dulu" id="nama_pasangan_dulu" placeholder="Ketikkan Nama Pasangan Dulu disini">
</div>
</div>
</div>
</div>

<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pemohon</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik Pemilik :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Status Diri Cowo :</b></label>
    <select class="form-control" name="status_diri_cwo" id="status_diri_cwo" required>
        <option value="-">--pilih--</option>
        <option value="Jejaka">Jejaka</option>
        <option value="Perawan">Perawan</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Nomor Pengantar :</b></label>
    <input class="form-control" name="no_pengantar" id="no_pengantar" placeholder="Ketikkan Nomor Pengantar disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tanggal_pengantar" id="tgl9" placeholder="Ketikkan Tanggal Pengantar disini" required>
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ayah Pemohon</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Ketikkan Nama Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ayah :</b></label>
    <input class="form-control" name="tmpt_lahir_ayah" id="tmpt_lahir_ayah" placeholder="Ketikkan Tempat Lahir Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ayah :</b></label>
    <input class="form-control" name="tgl_lahir_ayah" id="tgl3" placeholder="Ketikkan Tanggal Lahir Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ayah :</b></label>
    <input class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" placeholder="Ketikkan Kewarganegaraan Ayah disini" required>
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
    <label><b>Pekerjaan Ayah :</b></label>
    <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Ketikkan Pekerjaan Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ayah :</b></label>
    <input class="form-control" name="alamat_ayah" id="alamat_ayah" placeholder="Ketikkan Alamat Ayah disini" required>
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ibu Pemohon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Ketikkan Nama Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ibu :</b></label>
    <input class="form-control" name="tmpt_lahir_ibu" id="tmpt_lahir_ibu" placeholder="Ketikkan Tempat Lahir Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ibu :</b></label>
    <input class="form-control" name="tgl_lahir_ibu" id="tgl4" placeholder="Ketikkan Tanggal Lahir Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ibu :</b></label>
    <input class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" placeholder="Ketikkan Kewarganegaraan Ibu disini" required>
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
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Ketikkan Pekerjaan Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" placeholder="Ketikkan Alamat Ibu disini" required>
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Wali</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Wali :</b></label>
    <input class="form-control" name="nama_wali" id="nama_wali" placeholder="Ketikkan Nama Wali disini" required>
</div>
<div class="form-group" >
    <label><b>Bin / Binti Wali :</b></label>
    <input class="form-control" name="bin_binti_wali" id="bin_binti_wali" placeholder="Ketikkan Bin / Binti Wali disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Wali :</b></label>
    <input class="form-control" name="tmpt_lahir_wali" id="tmpt_lahir_wali" placeholder="Ketikkan Tempat Lahir Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Wali :</b></label>
    <input class="form-control" name="tgl_lahir_wali" id="tgl5" placeholder="Ketikkan Tanggal Lahir Wali disini" required>
</div>
<div class="form-group" >
    <label><b>Agama Wali :</b></label>
    <select class="form-control" name="agama_wali" id="agama_wali" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Wali :</b></label>
    <input class="form-control" name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Ketikkan Pekerjaan Wali disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Wali :</b></label>
    <input class="form-control" name="alamat_wali" id="alamat_wali" placeholder="Ketikkan Alamat Wali disini" required>
</div>
<div class="form-group" >
    <label><b>Status Wali :</b></label>
    <select class="form-control" name="status_wali" id="status_wali" required>
        <option value="-">--pilih--</option>
        <option value="Ayah">Ayah</option>
        <option value="Ibu">Ibu</option>
        <option value="Saudara">Saudara</option>
    </select>
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Saksi 1</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Saksi 1 :</b></label>
    <input class="form-control" name="saksi1" id="saksi1" placeholder="Ketikkan Nama Saksi 1 disini" required>
</div>
<div class="form-group" >
    <label><b>Umur Saksi 1 :</b></label>
    <input class="form-control" name="umur_saksi1" id="umur_saksi1" placeholder="Ketikkan Umur Saksi 1 disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Saksi 1 :</b></label>
    <input class="form-control" name="pekerjaan_saksi1" id="pekerjaan_saksi1" placeholder="Ketikkan Pekerjaan Saksi 1 disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Saksi 1 :</b></label>
    <input class="form-control" name="alamat_saksi1" id="alamat_saksi1" placeholder="Ketikkan Alamat Saksi 1 disini" required>
</div>
<br>
<h4><b>Data Saksi 2</b></h4 ><hr>
<div class="form-group" >
    <label>Nama Saksi 2 :</label>
    <input class="form-control" name="saksi2" id="saksi2" placeholder="Ketikkan Nama Saksi 2 disini" required>
</div>
<div class="form-group" >
    <label><b>Umur Saksi 2 :</b></label>
    <input class="form-control" name="umur_saksi2" id="umur_saksi2" placeholder="Ketikkan Umur Saksi 2 disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Saksi 2 :</b></label>
    <input class="form-control" name="pekerjaan_saksi2" id="pekerjaan_saksi2" placeholder="Ketikkan Pekerjaan Saksi 2 disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Saksi 2 :</b></label>
    <input class="form-control" name="alamat_saksi2" id="alamat_saksi2" placeholder="Ketikkan Alamat Saksi 2 disini" required>
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pasangan Meninggal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Pasangan Meninggal :</b></label>
    <input class="form-control" name="nama_pasangan_meninggal" id="nama_pasangan_meninggal" placeholder="Ketikkan Nama Pasangan Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Bin / Binti Pasangan Meninggal :</b></label>
    <input class="form-control" name="bin_binti_pasangan_meninggal" id="bin_binti_pasangan_meninggal" placeholder="Ketikkan Bin / Binti Pasangan Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Pasangan Meninggal :</b></label>
    <input class="form-control" name="tmpt_lahir_pasangan_meninggal" id="tmpt_lahir_pasangan_meninggal" placeholder="Ketikkan Tempat Lahir Pasangan Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Pasangan Meninggal :</b></label>
    <input class="form-control" name="tgl_lahir_pasangan_meninggal" id="tgl6" placeholder="Ketikkan Tanggal Lahir Pasangan Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Pasangan Meninggal :</b></label>
    <input class="form-control" name="kewarganegaraan_pasangan_meninggal" id="kewarganegaraan_pasangan_meninggal" placeholder="Ketikkan Kewarganegaraan Pasangan Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Agama Pasangan Meninggal :</b></label>
    <select class="form-control" name="agama_pasangan_meninggal" id="agama_pasangan_meninggal">
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Pasangan Meninggal :</b></label>
    <input class="form-control" name="pekerjaan_pasangan_meninggal" id="pekerjaan_pasangan_meninggal" placeholder="Ketikkan Pekerjaan Pasangan Meninggal disini" >
</div>
<div class="form-group" >
    <label><b>Tempat Tinggal Pasangan Meninggal :</b></label>
    <input class="form-control" name="tempat_tinggal_pasangan_meninggal" id="tempat_tinggal_pasangan_meninggal" placeholder="Ketikkan Tempat Tinggal Pasangan Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Meninggal Pada :</b></label>
    <input class="form-control" name="meninggal_pada" id="tgl7" placeholder="Ketikkan Tanggal Meninggal disini">
</div>
<div class="form-group" >
    <label><b>Meninggal di :</b></label>
    <input class="form-control" name="meninggal_di" id="meninggal_di" placeholder="Ketikkan Tempat Meninggal disini">
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Waktu Nikah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Hari Nikah :</b></label>
    <select class="form-control" name="hari_nikah" id="hari_nikah" required>
        <option value="-">--pilih--</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jum'at">Jum'at</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tanggal Nikah :</b></label>
    <input class="form-control" name="tgl_nikah" id="tgl8" placeholder="Ketikkan Tanggal Nikah disini" required>
</div>
<div class="form-group" >
    <label><b>Waktu Nikah Mulai :</b></label>
    <input class="form-control" name="waktu_nikah_mulai" id="waktu_nikah_mulai" placeholder="Ketikkan Waktu Nikah Mulai disini" required>
    <p>*Contoh : 09:30 WIB</p>
</div>
<div class="form-group" >
    <label><b>Waktu Nikah Selesai :</b></label>
    <input class="form-control" name="waktu_nikah_selesai" id="waktu_nikah_selesai" placeholder="Ketikkan Waktu Nikah Selesai disini" required>
    <p>*Contoh : 11:30 WIB</p>
</div>
<div class="form-group" >
    <label><b>Maskawin :</b></label>
    <input class="form-control" name="maskawin" id="maskawin" placeholder="Ketikkan Maskawin disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Nikah :</b></label>
    <input class="form-control" name="tempat_nikah" id="tempat_nikah" placeholder="Ketikkan Tempat Nikah disini" required>
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_daftar_nikah/daftar_nikah');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>