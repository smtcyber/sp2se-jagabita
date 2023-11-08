<!-- Page Heading -->
<section class="content-header">
      <h1>
        Keterangan Tidak Mampu
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Keterangan Tidak Mampu</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Anak</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_sktm/proses_tambah_sktm'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" >
    <label><b>Nama Anak :</b></label>
    <input class="form-control" name="nama_anak" id="nama_anak" placeholder="Ketikkan Nama Anak disini" >
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin Anak :</b></label>
    <select class="form-control" name="jenis_kelamin_anak" id="jenis_kelamin_anak">
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Agama Anak :</b></label>
    <select class="form-control" name="agama_anak" id="agama_anak">
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Anak :</b></label>
    <input class="form-control" name="tempat_lahir_anak" id="tempat_lahir_anak" placeholder="Ketikkan Tempat Lahir Anak disini" >
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Anak :</b></label>
    <input class="form-control" name="tgl_lahir_anak" id="tgl1" placeholder="Ketikkan Tanggal Lahir Anak disini" >
</div>
<div class="form-group" >
    <label><b>Pekerjaan Anak :</b></label>
    <input class="form-control" name="pekerjaan_anak" id="pekerjaan_anak" placeholder="Ketikkan Pekerjaan Anak disini" >
</div>
<div class="form-group" >
    <label><b>Alamat Anak :</b></label>
    <input class="form-control" name="alamat_anak" id="alamat_anak" placeholder="Ketikkan Alamat Anak disini" >
</div>
<div class="form-group" >
    <label><b>RT dan RW Anak :</b></label>
    <input class="form-control" name="rt_anak" id="rt_anak" placeholder="Ketikkan RT Anak disini" >
    <input class="form-control" name="rw_anak" id="rw_anak" placeholder="Ketikkan RW Anak disini" >
</div>
<div class="form-group" >
    <label><b>Anak Ke :</b></label>
    <input class="form-control" name="anak_ke" id="anak_ke" placeholder="Ketikkan Anak Ke Berapa disini" >
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ayah</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama dan Nik Ayah :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ayah :</b></label>
    <input class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Ketikkan Kewarganegaraan Ayah disini" >
</div>
<div class="form-group" >
    <label><b>Pekerjaan :</b></label>
    <input class="form-control" name="pekerjaan1" id="pekerjaan1" placeholder="Ketikkan Pekerjaan disini" required>
</div>
<div class="form-group" >
    <label><b>Agama :</b></label>
    <select class="form-control" name="agama1" id="agama1" required>
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
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
              <h3 class="box-title">Data Ibu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Ketikkan Nama Ibu disini" >
</div>
<div class="form-group" >
    <label><b>NIK Ibu :</b></label>
    <input class="form-control" name="no_ktp_ibu" id="no_ktp_ibu" placeholder="Ketikkan Nama Ibu disini" >
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ibu :</b></label>
    <input class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="Ketikkan Tempat Lahir Ibu disini" >
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ibu :</b></label>
    <input class="form-control" name="tgl_lahir_ibu" id="tgl3" placeholder="Ketikkan Tanggal Lahir Ibu disini" >
</div>
<div class="form-group" >
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Ketikkan Pekerjaan Ibu disini" >
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" placeholder="Ketikkan Alamat Ibu disini" >
</div>
<div class="form-group" >
    <label><b>RT dan RW Ibu :</b></label>
    <input class="form-control" name="rt_ibu" id="rt_ibu" placeholder="Ketikkan RT Ibu disini" >
    <input class="form-control" name="rw_ibu" id="rw_ibu" placeholder="Ketikkan RW Ibu disini" >
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data SKTM Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Sekolah :</b></label>
    <input class="form-control" name="sekolah" id="sekolah" placeholder="Ketikkan Nama Sekolah disini" >
</div>
<div class="form-group" >
    <label><b>Kelas :</b></label>
    <input class="form-control" name="kelas" id="kelas" placeholder="Ketikkan Kelas disini" >
</div>
<div class="form-group" >
    <label><b>Jurusan :</b></label>
    <input class="form-control" name="jurusan" id="jurusan" placeholder="Ketikkan Jurusan disini" >
</div>
<div class="form-group" >
    <label><b>Alamat Sekolah :</b></label>
    <input class="form-control" name="alamat_sekolah" id="alamat_sekolah" placeholder="Ketikkan Alamat Sekolah disini" >
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
              <h3 class="box-title">Data SKTM Kesehatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Rumah Sakit :</b></label>
    <input class="form-control" name="rumah_sakit" id="rumah_sakit" placeholder="Ketikkan Nama Rumah Sakit disini" >
</div>
<div class="form-group" >
    <label><b>Keperluan :</b></label>
    <input class="form-control" name="keperluan_sehat" id="keperluan_sehat" placeholder="Ketikkan Keperluan disini" >
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penghasilan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Penghasilan Orang Tua :</b></label>
    <input class="form-control" name="penghasilan_ortu" id="penghasilan_ortu" placeholder="Ketikkan Penghasilan Orang Tua disini" >
</div>
<div class="form-group" >
    <label><b>Penghasilan Perbulan :</b></label>
    <input class="form-control" name="penghasilan_bulan" id="penghasilan_bulan" placeholder="Ketikkan Penghasilan Perbulan disini" >
</div>
<div class="form-group" >
    <label><b>Penghasilan Pertahun :</b></label>
    <input class="form-control" name="penghasilan_tahun" id="penghasilan_tahun" placeholder="Ketikkan Penghasilan Pertahun disini" >
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
              <h3 class="box-title">Data Pelapor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Pelapor :</b></label>
    <input class="form-control" name="namap" id="namap" placeholder="Ketikkan Nama Pelapor disini" >
</div>
<div class="form-group" >
    <label><b>NIK Pelapor :</b></label>
    <input class="form-control" name="noktp" id="noktp" placeholder="Ketikkan No Ktp Pelapor disini" >
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin Pelapor :</b></label>
    <select class="form-control" name="jkp" id="jkp">
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Pelapor :</b></label>
    <input class="form-control" name="tmpt_lahirp" id="tmpt_lahirp" placeholder="Ketikkan Tempat Lahir Pelapor disini" >
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Pelapor :</b></label>
    <input class="form-control" name="tgl_lahirp" id="tgl4" placeholder="Ketikkan Tanggal Lahir Pelapor disini" >
</div>
<div class="form-group" >
    <label><b>Agama Pelapor :</b></label>
    <select class="form-control" name="agamap" id="agamap">
        <option value="-">--pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Pelapor :</b></label>
    <input class="form-control" name="pekerjaanp" id="pekerjaanp" placeholder="Ketikkan Pekerjaan Pelapor disini" >
</div>
<div class="form-group" >
    <label><b>Status Perkawinan Pelapor :</b></label>
    <select class="form-control" name="statusp" id="statusp">
        <option value="-">--pilih--</option>
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
        <option value="Cerai Mati">Cerai Mati</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Alamat Pelapor :</b></label>
    <input class="form-control" name="alamatp" id="alamatp" placeholder="Ketikkan Alamat Pelapor disini" >
</div>
<div class="form-group" >
    <label><b>RT dan RW Pelapor :</b></label>
    <input class="form-control" name="rtp" id="rtp" placeholder="Ketikkan RT Pelapor disini" >
    <input class="form-control" name="rwp" id="rwp" placeholder="Ketikkan RW Pelapor disini" >
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengantar</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nomor Pengantar:</b></label>
    <input class="form-control" name="no_pengantar" id="no_pengantar" placeholder="Ketikkan Nomor Pengantar disini" >
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tanggal_pengantar" id="tgl5" placeholder="Ketikkan Tanggal Pengantar disini" >
</div>
<div class="form-group" >
    <label><b>Atas nama :</b></label>
    <input class="form-control" name="atas_nama" id="atas_nama" placeholder="Ketikkan Atas Nama disini" >
</div>
<div class="form-group" >
    <label><b>Keperluan :</b></label>
    <input class="form-control" name="keperluan" id="keperluan" placeholder="Ketikkan Keperluan disini" >
</div>
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl6" placeholder="Ketikkan Tanggal Surat disini" >
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_sktm/sktm');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>