<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pindah Datang
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Pindah Datang</li>
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
<form role="form" action="<?php echo site_url().'/c_pindah_datang/proses_edit_pindah_datang'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<?php foreach ($edit_pindah_datang->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_pindah_datang; ?>" />
</div>
<!-- DATA ALAMAT ASAL -->
<div class="form-group" style="color:black">
    <label><b>Nama Kepala dan No KK Asal :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", No KK : ".$tampil->no_kk; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", No KK : ".$row->no_kk; ?></option>
        <?php } ?>
    </select>
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
<div class="form-group" style="color:black">
    <label><b>Alasan Pindah :</b></label>
    <select class="form-control" name="alasan_pindah" id="alasan_pindah" required>
        <option value="<?php echo $tampil->alasan_pindah; ?>"><?php echo $tampil->alasan_pindah; ?></option>
        <option value="1">Pekerjaan</option>
        <option value="2">Pendidikan</option>
        <option value="3">Keamanan</option>
        <option value="4">Kesehatan</option>
        <option value="5">Perumahan</option>
        <option value="6">Keluarga</option>
        <option value="7">Lainnya</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Alamat Tujuan Pindah :</b></label>
    <input class="form-control" name="alamat_tujuan_pindah" id="alamat_tujuan_pindah" value="<?php echo $tampil->alamat_tujuan_pindah; ?>" >
</div>
<div class="form-group" style="color:black">
    <label><b>RT dan RW Tujuan Pindah :</b></label>
    <input class="form-control" name="rt_tujuan_pindah" id="rt_tujuan_pindah" value="<?php echo $tampil->rt_tujuan_pindah; ?>" required>
    <input class="form-control" name="rw_tujuan_pindah" id="rw_tujuan_pindah" value="<?php echo $tampil->rw_tujuan_pindah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kelurahan Asal :</b></label>
    <input class="form-control" name="kelurahan_tujuan_pindah" id="kelurahan_tujuan_pindah" value="<?php echo $tampil->kelurahan_tujuan_pindah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kecamatan Asal :</b></label>
    <input class="form-control" name="kecamatan_tujuan_pindah" id="kecamatan_tujuan_pindah" value="<?php echo $tampil->kecamatan_tujuan_pindah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kota Asal :</b></label>
    <input class="form-control" name="kota_tujuan_pindah" id="kota_tujuan_pindah" value="<?php echo $tampil->kota_tujuan_pindah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Propinsi Asal :</b></label>
    <input class="form-control" name="propinsi_tujuan_pindah" id="propinsi_tujuan_pindah" value="<?php echo $tampil->propinsi_tujuan_pindah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kode Pos Asal :</b></label>
    <input class="form-control" name="kode_pos_asal" id="kode_pos_asal" value="<?php echo $tampil->kode_pos_asal; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Telepon Asal :</b></label>
    <input class="form-control" name="telepon_asal" id="telepon_asal" value="<?php echo $tampil->telepon_asal; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Klasifikasi Pindah :</b></label>
    <select class="form-control" name="klasifikasi_pindah" id="klasifikasi_pindah" required>
        <option value="<?php echo $tampil->klasifikasi_pindah; ?>"><?php echo $tampil->klasifikasi_pindah; ?></option>
        <option value="1">Antar Desa dalam satu Kecamatan</option>
        <option value="2">Antar Kecamatan dalam satu Kota</option>
        <option value="3">Antar Kabupaten/Kota dalam satu Provinsi</option>
        <option value="4">Antar Provinsi</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Jenis Kepindahan :</b></label>
    <select class="form-control" name="jenis_kepindahan" id="jenis_kepindahan" required>
        <option value="<?php echo $tampil->jenis_kepindahan; ?>"><?php echo $tampil->jenis_kepindahan; ?></option>
        <option value="2">Kepala Keluarga dengan seluruh anggota keluarga</option>
        <option value="3">Kepala Keluarga dengan sebagian anggota keluarga</option>
        <option value="1">Kepala Keluarga Saja</option>
        <option value="4">Anggota Keluarga</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Status No KK Bagi Yang tidak Pindah :</b></label>
    <select class="form-control" name="status_no_kk_tidak_pindah" id="status_no_kk_tidak_pindah" required>
        <option value="<?php echo $tampil->status_no_kk_tidak_pindah; ?>"><?php echo $tampil->status_no_kk_tidak_pindah; ?></option>
        <option value="1">Numpang KK</option>
        <option value="2">Membuat KK Baru</option>
        <option value="3">Tidak Ada Anggota Keluarga Yang Ditinggal</option>
        <option value="4">No KK Tetap</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Status No KK Bagi Yang Pindah :</b></label>
    <select class="form-control" name="status_no_kk_pindah" id="status_no_kk_pindah" required>
        <option value="<?php echo $tampil->status_no_kk_pindah; ?>"><?php echo $tampil->status_no_kk_pindah; ?></option>
        <option value="1">Numpang KK</option>
        <option value="2">Membuat KK Baru</option>
        <option value="3">Nama Kep Keluarga dan No KK Tetap</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Rencana Tanggal Pindah :</b></label>
    <input class="form-control" name="rencana_tanggal_pindah" id="tgl1" value="<?php echo $tampil->rencana_tanggal_pindah; ?>" required>
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
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut1" id="nik_pengikut1" value="<?php echo $tampil->nik_pengikut1; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut1" id="nama_pengikut1" value="<?php echo $tampil->nama_pengikut1; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut1" id="hubkeluarga_pengikut1" value="<?php echo $tampil->hubkeluarga_pengikut1; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>NIk :</b></label>
    <input class="form-control" name="nik_pengikut2" id="nik_pengikut2" value="<?php echo $tampil->nik_pengikut2; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut2" id="nama_pengikut2" value="<?php echo $tampil->nama_pengikut2; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut2" id="hubkeluarga_pengikut2" value="<?php echo $tampil->hubkeluarga_pengikut2; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut3" id="nik_pengikut3" value="<?php echo $tampil->nik_pengikut3; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut3" id="nama_pengikut3" value="<?php echo $tampil->nama_pengikut3; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut3" id="hubkeluarga_pengikut3" value="<?php echo $tampil->hubkeluarga_pengikut3; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut4" id="nik_pengikut4" value="<?php echo $tampil->nik_pengikut4; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut4" id="nama_pengikut4" value="<?php echo $tampil->nama_pengikut4; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut4" id="hubkeluarga_pengikut4" value="<?php echo $tampil->hubkeluarga_pengikut4; ?>">
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut5" id="nik_pengikut5" value="<?php echo $tampil->nik_pengikut5; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut5" id="nama_pengikut5" value="<?php echo $tampil->nama_pengikut5; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut5" id="hubkeluarga_pengikut5" value="<?php echo $tampil->hubkeluarga_pengikut5; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut6" id="nik_pengikut6" value="<?php echo $tampil->nik_pengikut6; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut6" id="nama_pengikut6" value="<?php echo $tampil->nama_pengikut6; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut6" id="hubkeluarga_pengikut6" value="<?php echo $tampil->hubkeluarga_pengikut6; ?>">
</div>
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
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan1" id="nik_pengikut_tujuan1" value="<?php echo $tampil->nik_pengikut_tujuan1; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan1" id="nama_pengikut_tujuan1" value="<?php echo $tampil->nama_pengikut_tujuan1; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan1" id="hubkeluarga_pengikut_tujuan1" value="<?php echo $tampil->hubkeluarga_pengikut_tujuan1; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan2" id="nik_pengikut_tujuan2" value="<?php echo $tampil->nik_pengikut_tujuan2; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan2" id="nama_pengikut_tujuan2" value="<?php echo $tampil->nama_pengikut_tujuan2; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan2" id="hubkeluarga_pengikut_tujuan2" value="<?php echo $tampil->hubkeluarga_pengikut_tujuan2; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan3" id="nik_pengikut_tujuan3" value="<?php echo $tampil->nik_pengikut_tujuan3; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan3" id="nama_pengikut_tujuan3" value="<?php echo $tampil->nama_pengikut_tujuan3; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan3" id="hubkeluarga_pengikut_tujuan3" value="<?php echo $tampil->hubkeluarga_pengikut_tujuan3; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan4" id="nik_pengikut_tujuan4" value="<?php echo $tampil->nik_pengikut_tujuan4; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan4" id="nama_pengikut_tujuan4" value="<?php echo $tampil->nama_pengikut_tujuan4; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan4" id="hubkeluarga_pengikut_tujuan4" value="<?php echo $tampil->hubkeluarga_pengikut_tujuan4; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan5" id="nik_pengikut_tujuan5" value="<?php echo $tampil->nik_pengikut_tujuan5; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan5" id="nama_pengikut_tujuan5"value="<?php echo $tampil->nama_pengikut_tujuan5; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan5" id="hubkeluarga_pengikut_tujuan5" value="<?php echo $tampil->hubkeluarga_pengikut_tujuan5; ?>">
</div><hr>
<div class="form-group" style="color:black">
    <label><b>Nik :</b></label>
    <input class="form-control" name="nik_pengikut_tujuan6" id="nik_pengikut_tujuan6" value="<?php echo $tampil->nik_pengikut_tujuan6; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_pengikut_tujuan6" id="nama_pengikut_tujuan6" value="<?php echo $tampil->nama_pengikut_tujuan6; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hubkeluarga_pengikut_tujuan6" id="hubkeluarga_pengikut_tujuan6" value="<?php echo $tampil->hubkeluarga_pengikut_tujuan6; ?>">
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
<div class="form-group" style="color:black">
    <label><b>Nomor KK :</b></label>
    <input class="form-control" name="no_kk_tujuan" id="no_kk_tujuan" value="<?php echo $tampil->no_kk_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Nama Kepala Keluarga :</b></label>
    <input class="form-control" name="nama_kep_tujuan" id="nama_kep_tujuan" value="<?php echo $tampil->nama_kep_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>NIK Kepala Keluarga :</b></label>
    <input class="form-control" name="nik_kepala_keluarga" id="nik_kepala_keluarga" value="<?php echo $tampil->nik_kepala_keluarga; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Status No KK :</b></label>
    <select class="form-control" name="status_no_kk_tujuan" id="status_no_kk_tujuan" required>
        <option value="<?php echo $tampil->status_no_kk_tujuan; ?>"><?php echo $tampil->status_no_kk_tujuan; ?></option>
        <option value="Numpang KK">Numpang KK</option>
        <option value="Membuat KK Baru">Membuat KK Baru</option>
        <option value="Nama Kep Keluarga dan No KK Tetap">Nama Kep Keluarga dan No KK Tetap</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Alamat Tujuan :</b></label>
    <input class="form-control" name="alamat_tujuan" id="alamat_tujuan" value="<?php echo $tampil->alamat_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>RT dan RW Tujuan :</b></label>
    <input class="form-control" name="rt_tujuan" id="rt_tujuan" value="<?php echo $tampil->rt_tujuan; ?>" required>
    <input class="form-control" name="rw_tujuan" id="rw_tujuan" value="<?php echo $tampil->rw_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kelurahan Tujuan :</b></label>
    <input class="form-control" name="kelurahan_tujuan" id="kelurahan_tujuan" value="<?php echo $tampil->kelurahan_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kecamatan Tujuan :</b></label>
    <input class="form-control" name="kecamatan_tujuan" id="kecamatan_tujuan" value="<?php echo $tampil->kecamatan_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kota Tujuan :</b></label>
    <input class="form-control" name="kota_tujuan" id="kota_tujuan" value="<?php echo $tampil->kota_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Propinsi Tujuan :</b></label>
    <input class="form-control" name="propinsi_tujuan" id="propinsi_tujuan" value="<?php echo $tampil->propinsi_tujuan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Kode Pos Tujuan :</b></label>
    <input class="form-control" name="kode_pos_tujuan_pindah" id="kode_pos_tujuan_pindah" value="<?php echo $tampil->kode_pos_tujuan_pindah; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Telepon Tujuan :</b></label>
    <input class="form-control" name="telepon_tujuan_pindah" id="telepon_tujuan_pindah" value="<?php echo $tampil->telepon_tujuan_pindah; ?>">
</div>
<div class="form-group" style="color:black">
    <label><b>Tanggal Kedatangan :</b></label>
    <input class="form-control" name="tanggal_kedatangan" id="tgl2" value="<?php echo $tampil->tanggal_kedatangan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl3" value="<?php echo $tampil->tgl_surat; ?>" required>
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_pindah_datang/pindah_datang');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>