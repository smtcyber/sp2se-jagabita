<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pindah Datang
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Pindah Datang</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Alamat Asal</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_pindah_datang/proses_tambah_pindah_datang'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" >
    <label><b>Nama Kepala dan Nomor kk Asal :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", No KK : ".$row->no_kk; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Propinsi Asal :</b></label>
    <input class="form-control" name="propinsi_asal" id="propinsi_asal" placeholder="Ketikkan Propinsi Asal disini" required>
</div>
<div class="form-group" >
    <label><b>Kode Pos Asal :</b></label>
    <input class="form-control" name="kode_pos_asal" id="kode_pos_asal" placeholder="Ketikkan Kode Pos Asal disini" required>
</div>
<div class="form-group" >
    <label><b>Telepon Asal :</b></label>
    <input class="form-control" name="telepon_asal" id="telepon_asal" placeholder="Ketikkan Telepon Asal disini">
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepindahan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Alasan Pindah :</b></label>
    <select class="form-control" name="alasan_pindah" id="alasan_pindah" required>
        <option value="-">--pilih--</option>
        <option value="Pekerjaan">Pekerjaan</option>
        <option value="Pendidikan">Pendidikan</option>
        <option value="Keamanan">Keamanan</option>
        <option value="Kesehatan">Kesehatan</option>
        <option value="Perumahan">Perumahan</option>
        <option value="Keluarga">Keluarga</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Alamat Tujuan Pindah :</b></label>
    <input class="form-control" name="alamat_tujuan_pindah" id="alamat_tujuan_pindah" placeholder="Ketikkan Alamat Tujuan Pindah disini" >
</div>
<div class="form-group" >
    <label><b>RT dan RW Tujuan Pindah :</b></label>
    <input class="form-control" name="rt_tujuan_pindah" id="rt_tujuan_pindah" placeholder="Ketikkan RT Tujuan Pindah disini" required>
    <input class="form-control" name="rw_tujuan_pindah" id="rw_tujuan_pindah" placeholder="Ketikkan RW Tujuan Pindah disini" required>
</div>
<div class="form-group" >
    <label><b>Kelurahan Asal :</b></label>
    <input class="form-control" name="kelurahan_tujuan_pindah" id="kelurahan_tujuan_pindah" placeholder="Ketikkan Kelurahan Tujuan Pindah disini" required>
</div>
<div class="form-group" >
    <label><b>Kecamatan Asal :</b></label>
    <input class="form-control" name="kecamatan_tujuan_pindah" id="kecamatan_tujuan_pindah" placeholder="Ketikkan Kecamatan Tujuan Pindah disini" required>
</div>
<div class="form-group" >
    <label><b>Kota Asal :</b></label>
    <input class="form-control" name="kota_tujuan_pindah" id="kota_tujuan_pindah" placeholder="Ketikkan Kota Tujuan Pindah disini" required>
</div>
<div class="form-group" >
    <label><b>Propinsi Asal :</b></label>
    <input class="form-control" name="propinsi_tujuan_pindah" id="propinsi_tujuan_pindah" placeholder="Ketikkan Propinsi Tujuan Pindah disini" required>
</div>
<div class="form-group" >
    <label><b>Kode Pos Asal :</b></label>
    <input class="form-control" name="kode_pos_tujuan_pindah" id="kode_pos_tujuan_pindah" placeholder="Ketikkan Kode Pos Tujuan Pindah disini" required>
</div>
<div class="form-group" >
    <label><b>Telepon Asal :</b></label>
    <input class="form-control" name="telepon_tujuan_pindah" id="telepon_tujuan_pindah" placeholder="Ketikkan Telepon Tujuan Pindah disini">
</div>
<div class="form-group" >
    <label><b>Klasifikasi Pindah :</b></label>
    <select class="form-control" name="klasifikasi_pindah" id="klasifikasi_pindah" required>
        <option value="-">--pilih--</option>
        <option value="Antar Kabupaten/Kota dalam satu propinsi">Antar Kabupaten/Kota dalam satu propinsi</option>
        <option value="Antar Propinsi">Antar Propinsi</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Jenis Kepindahan :</b></label>
    <select class="form-control" name="jenis_kepindahan" id="jenis_kepindahan" required>
        <option value="-">--pilih--</option>
        <option value="Kepala Keluarga dengan seluruh anggota keluarga">Kepala Keluarga dengan seluruh anggota keluarga</option>
        <option value="Kepala Keluarga dengan sebagian anggota keluarga">Kepala Keluarga dengan sebagian anggota keluarga</option>
        <option value="Kepala Keluarga Saja">Kepala Keluarga Saja</option>
        <option value="Anggota Keluarga (a. Istri  b. Anak)">Anggota Keluarga (a. Istri  b. Anak)</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Status No KK Bagi Yang tidak Pindah :</b></label>
    <select class="form-control" name="status_no_kk_tidak_pindah" id="status_no_kk_tidak_pindah" required>
        <option value="-">--pilih--</option>
        <option value="Numpang KK">Numpang KK</option>
        <option value="Membuat KK Baru">Membuat KK Baru</option>
        <option value="Tidak Ada Anggota Keluarga Yang Ditinggal">Tidak Ada Anggota Keluarga Yang Ditinggal</option>
        <option value="No KK Tetap">No KK Tetap</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Status No KK Bagi Yang Pindah :</b></label>
    <select class="form-control" name="status_no_kk_pindah" id="status_no_kk_pindah" required>
        <option value="-">--pilih--</option>
        <option value="Numpang KK">Numpang KK</option>
        <option value="Membuat KK Baru">Membuat KK Baru</option>
        <option value="Nama Kep Keluarga dan No KK Tetap">Nama Kep Keluarga dan No KK Tetap</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Rencana Tanggal Pindah :</b></label>
    <input class="form-control" name="rencana_tanggal_pindah" id="tgl1" placeholder="Ketikkan Rencana Tanggal Pindah disini" required>
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
              <h3 class="box-title">Data Keluarga yang Pindah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut1" id="nik_pengikut1" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut1" id="nama_pengikut1" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut1" id="hubkeluarga_pengikut1" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut2" id="nik_pengikut2" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut2" id="nama_pengikut2" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut2" id="hubkeluarga_pengikut2" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut3" id="nik_pengikut3" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut3" id="nama_pengikut3" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut3" id="hubkeluarga_pengikut3" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut4" id="nik_pengikut4" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut4" id="nama_pengikut4" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut4" id="hubkeluarga_pengikut4" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut5" id="nik_pengikut5" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut5" id="nama_pengikut5" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut5" id="hubkeluarga_pengikut5" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut6" id="nik_pengikut6" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut6" id="nama_pengikut6" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut6" id="hubkeluarga_pengikut6" placeholder="Ketikkan Hubungan Keluarga disini">
</div>
</div>
</div>
</div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Keluarga Yang Datang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan1" id="nik_pengikut_tujuan1" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan1" id="nama_pengikut_tujuan1" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan1" id="hubkeluarga_pengikut_tujuan1" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan2" id="nik_pengikut_tujuan2" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan2" id="nama_pengikut_tujuan2" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan2" id="hubkeluarga_pengikut_tujuan2" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan3" id="nik_pengikut_tujuan3" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan3" id="nama_pengikut_tujuan3" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan3" id="hubkeluarga_pengikut_tujuan3" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan4" id="nik_pengikut_tujuan4" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan4" id="nama_pengikut_tujuan4" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan4" id="hubkeluarga_pengikut_tujuan4" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan5" id="nik_pengikut_tujuan5" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan5" id="nama_pengikut_tujuan5" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan5" id="hubkeluarga_pengikut_tujuan5" placeholder="Ketikkan Hubungan Keluarga disini">
</div><hr>
<div class="form-group" >
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan6" id="nik_pengikut_tujuan6" placeholder="Ketikkan Nik disini">
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan6" id="nama_pengikut_tujuan6" placeholder="Ketikkan Nama disini">
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan6" id="hubkeluarga_pengikut_tujuan6" placeholder="Ketikkan Hubungan Keluarga disini">
</div>
</div>
</div>
</div>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Alamat Tujuan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nomor KK :</b></label>
    <input class="form-control" name="no_kk_tujuan" id="no_kk_tujuan" placeholder="Ketikkan Nomor KK disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Kepala Keluarga :</b></label>
    <input class="form-control" name="nama_kep_tujuan" id="nama_kep_tujuan" placeholder="Ketikkan Nama Kepala Keluarga disini" required>
</div>
<div class="form-group" >
    <label><b>NIK Kepala Keluarga :</b></label>
    <input class="form-control" name="nik_kepala_keluarga" id="nik_kepala_keluarga" placeholder="Ketikkan NIK Kepala Keluarga disini" required>
</div>
<div class="form-group" >
    <label><b>Status No KK :</b></label>
    <select class="form-control" name="status_no_kk_tujuan" id="status_no_kk_tujuan" required>
        <option value="-">--pilih--</option>
        <option value="Numpang KK">Numpang KK</option>
        <option value="Membuat KK Baru">Membuat KK Baru</option>
        <option value="Nama Kep Keluarga dan No KK Tetap">Nama Kep Keluarga dan No KK Tetap</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Alamat Tujuan :</b></label>
    <input class="form-control" name="alamat_tujuan" id="alamat_tujuan" placeholder="Ketikkan Alamat Tujuan disini" required>
</div>
<div class="form-group" >
    <label><b>RT dan RW Tujuan :</b></label>
    <input class="form-control" name="rt_tujuan" id="rt_tujuan" placeholder="Ketikkan RT Tujuan disini" required>
    <input class="form-control" name="rw_tujuan" id="rw_tujuan" placeholder="Ketikkan RW Tujuan disini" required>
</div>
<div class="form-group" >
    <label><b>Kelurahan Tujuan :</b></label>
    <input class="form-control" name="kelurahan_tujuan" id="kelurahan_tujuan" placeholder="Ketikkan Kelurahan Tujuan disini" required>
</div>
<div class="form-group" >
    <label><b>Kecamatan Tujuan :</b></label>
    <input class="form-control" name="kecamatan_tujuan" id="kecamatan_tujuan" placeholder="Ketikkan Kecamatan Tujuan disini" required>
</div>
<div class="form-group" >
    <label><b>Kota Tujuan :</b></label>
    <input class="form-control" name="kota_tujuan" id="kota_tujuan" placeholder="Ketikkan Kota Tujuan disini" required>
</div>
<div class="form-group" >
    <label><b>Propinsi Tujuan :</b></label>
    <input class="form-control" name="propinsi_tujuan" id="propinsi_tujuan" placeholder="Ketikkan Propinsi Tujuan disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Kedatangan :</b></label>
    <input class="form-control" name="tanggal_kedatangan" id="tgl2" placeholder="Ketikkan Tanggal Kedatangan disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl3" placeholder="Ketikkan Tanggal Surat disini" required>
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_pindah_datang/pindah_datang');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>