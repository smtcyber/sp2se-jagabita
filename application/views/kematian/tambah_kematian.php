<!-- Page Heading -->
<section class="content-header">
      <h1>
        Surat Kematian
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Surat Kematian</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepala Keluarga</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_kematian/proses_tambah_kematian'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" style="color:black">
    <input type="hidden" class="form-control" name="P1" id="P1" value="<?php echo $pelapor->id_kematian_pelapor; ?>" />
    <input type="hidden" class="form-control" value="<?php echo $pelapor->nama; ?>" id="P1">

</div>
<div class="form-group" >
    <label><b>Nama Kepala Keluarga :</b></label>
    <input class="form-control" name="nama_kepala" id="nama_kepala" placeholder="Ketikkan Nama Kepala Keluarga disini" required>
</div>
<div class="form-group" >
    <label><b>Nomor Kartu Keluarga :</b></label>
    <input class="form-control" name="no_kk" id="no_kk" placeholder="Ketikkan Nomor KK disini" required>
</div>
<div class="form-group" >
    <label><b>Nomor KTP :</b></label>
    <input class="form-control" name="no_ktp" id="no_ktp" placeholder="Ketikkan Nomor KTP disini" required>
</div>
<div class="form-group" >
    <label><b>Kode Wilayah :</b></label>
    <input class="form-control" name="kode_wilayah" id="kode_wilayah" placeholder="Ketikkan Kode Wilayah disini" required>
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
              <h3 class="box-title">Data Jenazah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
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
    <label><b>Umur Jenazah :</b></label>
    <input class="form-control" name="umur" id="umur" placeholder="Ketikkan Umur Jenazah disini" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan :</b></label>
    <input class="form-control" name="kewarganegaraan" id="kewarganegaraan" placeholder="Ketikkan Kewarganegaraan disini" required>
</div>
<div class="form-group" >
    <label><b>Anak ke :</b></label>
    <input class="form-control" name="anak_ke" id="anak_ke" placeholder="Ketikkan Anak ke disini" required>
</div>
<div class="form-group" >
    <label><b>Hari Kematian :</b></label>
    <select class="form-control" name="hari_meninggal" id="hari_meninggal">
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
    <label><b>Tanggal Kematian :</b></label>
    <input class="form-control" name="tanggal_meninggal" id="tgl1" placeholder="Ketikkan Tanggal Kematian disini" required>
</div>
<div class="form-group" >
    <label><b>Pukul Kematian:</b></label>
    <input class="form-control" name="pukul" id="pukul" placeholder="Ketikkan Pukul Meninggal disini" required>
</div>
<div class="form-group" >
    <label><b>Penyebab kematian :</b></label>
    <select class="form-control" name="penyebab" id="penyebab" required>
        <option value="-">--pilih--</option>
        <option value="Sakit Biasa/Tua">Sakit Biasa/Tua</option>
        <option value="Wabah Penyakit">Wabah Penyakit</option>
        <option value="Kecelakaan">Kecelakaan</option>
        <option value="Kriminalitas">Kriminalitas</option>
        <option value="Bunuh Diri">Bunuh Diri</option>
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Kematian :</b></label>
    <input class="form-control" name="bertempat_di" id="bertempat_di" placeholder="Ketikkan Tempat Kematian disini" required>
</div>
<div class="form-group" >
    <label><b>Yang Menerangkan :</b></label>
    <input class="form-control" name="yang_menerangkan" id="yang_menerangkan" placeholder="Ketikkan Yang Menerangkan disini" required>
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
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nik Ayah :</b></label>
    <input class="form-control" name="nik_ayah" id="nik_ayah" placeholder="Ketikkan Nik Ayah disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" placeholder="Ketikkan Nama Ayah disini" required>
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
    <input class="form-control" name="kota_ayah" id="kota_ayah" placeholder="Ketikkan Kota Ayah disini" required>
    <input class="form-control" name="propinsi_ayah" id="propinsi_ayah" placeholder="Ketikkan Propinsi Ayah disini" required>
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
    <label><b>Nik Ibu :</b></label>
    <input class="form-control" name="nik_ibu" id="nik_ibu" placeholder="Ketikkan Nik Ibu disini" required>
</div>
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" placeholder="Ketikkan Nama Ibu disini" required>
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
</div>
</div>
</div>

 <div class="col-md-6">
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
<div class="form-group" >
    <label><b>Tanggal Surat :</b></label>
    <input class="form-control" name="tgl_surat" id="tgl2" placeholder="Ketikkan Tanggal Surat disini" required>
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
    <input class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="Ketikkan Nama Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>NIK Pelapor :</b></label>
    <input class="form-control" name="no_ktp_pelapor" id="no_ktp_pelapor" placeholder="Ketikkan Nik Pelapor disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin Pelapor :</b></label>
    <select class="form-control" name="kelamin_pelapor" id="kelamin_pelapor" required>
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
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

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penanggung Jawab</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Penanggung Jawab :</b></label>
    <input class="form-control" name="nama_penanggungjawab" id="nama_penanggungjawab" placeholder="Ketikkan Nama Penanggung Jawab disini" required>
</div>
<div class="form-group" >
    <label><b>Hubungan Keluarga :</b></label>
    <input class="form-control" name="hub_keluarga" id="hub_keluarga" placeholder="Ketikkan Hubungan Keluarga disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin Penanggung Jawab :</b></label>
    <select class="form-control" name="jk_penanggungjawab" id="jk_penanggungjawab" required>
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Penanggung Jawab :</b></label>
    <input class="form-control" name="tmpt_lhr_penanggungjawab" id="tmpt_lhr_penanggungjawab" placeholder="Ketikkan Tempat Lahir disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Penanggung Jawab :</b></label>
    <input class="form-control" name="tgl_lhr_penanggungjawab" id="tgl3" placeholder="Ketikkan Tanggal Lahir disini" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Penanggung Jawab :</b></label>
    <input class="form-control" name="pekerjaan_penanggungjawab" id="pekerjaan_penanggungjawab" placeholder="Ketikkan Pekerjaan Penanggung Jawab disini" required>
</div>
<div class="form-group" >
    <label><b>Alamat Penanggung Jawab :</b></label>
    <input class="form-control" name="alamat_penanggungjawab" id="alamat_penanggungjawab" placeholder="Ketikkan Alamat Penanggung Jawab disini" required>
    <input class="form-control" name="rt_penanggungjawab" id="rt_penanggungjawab" placeholder="Ketikkan RT Penanggung Jawab disini" required>
    <input class="form-control" name="rw_penanggungjawab" id="rw_penanggungjawab" placeholder="Ketikkan RW Penanggung Jawab disini" required>
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kematian/kematian');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>