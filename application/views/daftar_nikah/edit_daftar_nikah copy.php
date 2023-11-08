<!-- Page Heading -->
<section class="content-header">
      <h1>
        Daftar Nikah
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Daftar Nikah</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
<form role="form" action="<?php echo site_url().'/c_daftar_nikah/proses_edit_daftar_nikah'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_daftar_nikah->result() as $tampil) { ?>

<div class="box-header with-border" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_daftar_nikah/daftar_nikah');?>"><i class='fa fa-times'></i> Batal</a>
</div>

</div>
</div>
</div>

<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pemohon</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK Pemilik :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Status Diri :</b></label>
    <select class="form-control" name="status_diri_cwo" id="status_diri_cwo" required>
        <option value="<?php echo $tampil->status_diri_cwo; ?>"><?php echo $tampil->status_diri_cwo; ?></option>
        <option value="Jejaka">Jejaka</option>
        <option value="Perawan">Perawan</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Nomor Pengantar :</b></label>
    <input class="form-control" name="no_pengantar" id="no_pengantar" value="<?php echo $tampil->no_pengantar; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tanggal_pengantar" id="tgl9" value="<?php echo $tampil->tanggal_pengantar; ?>" required>
</div>
</div>
</div>
</div>
<div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ayah Pemohon</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Ayah :</b></label>
    <input class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $tampil->nama_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ayah :</b></label>
    <input class="form-control" name="tmpt_lahir_ayah" id="tmpt_lahir_ayah" value="<?php echo $tampil->tmpt_lahir_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ayah :</b></label>
    <input class="form-control" name="tgl_lahir_ayah" id="tgl3" value="<?php echo $tampil->tgl_lahir_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ayah :</b></label>
    <input class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" value="<?php echo $tampil->kewarganegaraan_ayah; ?>" required>
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
    <label><b>Pekerjaan Ayah :</b></label>
    <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?php echo $tampil->pekerjaan_ayah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ayah :</b></label>
    <input class="form-control" name="alamat_ayah" id="alamat_ayah" value="<?php echo $tampil->alamat_ayah; ?>" required>
</div>
</div>
</div>
</div>

<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Ibu Pemohon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Ibu :</b></label>
    <input class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo $tampil->nama_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Ibu :</b></label>
    <input class="form-control" name="tmpt_lahir_ibu" id="tmpt_lahir_ibu" value="<?php echo $tampil->tmpt_lahir_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Ibu :</b></label>
    <input class="form-control" name="tgl_lahir_ibu" id="tgl4" value="<?php echo $tampil->tgl_lahir_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Ibu :</b></label>
    <input class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" value="<?php echo $tampil->kewarganegaraan_ibu; ?>" required>
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
    <label><b>Pekerjaan Ibu :</b></label>
    <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?php echo $tampil->pekerjaan_ibu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Ibu :</b></label>
    <input class="form-control" name="alamat_ibu" id="alamat_ibu" value="<?php echo $tampil->alamat_ibu; ?>" required>
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
              <h3 class="box-title">Data Calon</h3>
            </div>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_daftar_nikah; ?>" />
</div>
<div class="form-group" >
    <label><b>Nama Calon :</b></label>
    <input class="form-control" name="nama_calon" id="nama_calon" value="<?php echo $tampil->nama_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>NIK Calon :</b></label>
    <input class="form-control" name="nik_calon" id="nik_calon" value="<?php echo $tampil->nik_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Calon :</b></label>
    <input class="form-control" name="tmpt_lahir_calon" id="tmpt_lahir_calon" value="<?php echo $tampil->tmpt_lahir_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Calon :</b></label>
    <input class="form-control" name="tgl_lahir_calon" id="tgl2" value="<?php echo $tampil->tgl_lahir_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin Calon :</b></label>
    <select class="form-control" name="jenis_kelamin_calon" id="jenis_kelamin_calon" required>
        <option value="<?php echo $tampil->jenis_kelamin_calon; ?>"><?php echo $tampil->jenis_kelamin_calon; ?></option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Calon:</b></label>
    <input class="form-control" name="kewarganegaraan_calon" id="kewarganegaraan_calon" value="<?php echo $tampil->kewarganegaraan_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Agama Calon:</b></label>
    <select class="form-control" name="agama_calon" id="agama_calon" required>
        <option value="<?php echo $tampil->agama_calon; ?>"><?php echo $tampil->agama_calon; ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Calon:</b></label>
    <input class="form-control" name="pekerjaan_calon" id="pekerjaan_calon" value="<?php echo $tampil->pekerjaan_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Calon :</b></label>
    <input class="form-control" name="alamat_calon" id="alamat_calon" value="<?php echo $tampil->alamat_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>RT / RW Calon:</b></label>
    <input class="form-control" name="rt_calon" id="rt_calon" value="<?php echo $tampil->rt_calon; ?>" required>
    <input class="form-control" name="rw_calon" id="rw_calon" value="<?php echo $tampil->rw_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan dan Kabupaten Calon :</b></label>
    <input class="form-control" name="desa_calon" id="desa_calon" value="<?php echo $tampil->desa_calon; ?>" required>
    <input class="form-control" name="kecamatan_calon" id="kecamatan_calon" value="<?php echo $tampil->kecamatan_calon; ?>" required>
    <input class="form-control" name="kabupaten_calon" id="kabupaten_calon" value="<?php echo $tampil->kabupaten_calon; ?>" required>
</div>
<div class="form-group" >
    <label><b>Status Diri Calon :</b></label>
    <select class="form-control" name="status_diri_cwe" id="status_diri_cwe" required>
        <option value="<?php echo $tampil->status_diri_cwe; ?>"><?php echo $tampil->status_diri_cwe; ?></option>
        <option value="Jejaka">Jejaka</option>
        <option value="Perawan">Perawan</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Nama Wali Calon :</b></label>
    <input class="form-control" name="nama_wali_calon" id="nama_wali_calon" value="<?php echo $tampil->nama_wali_calon; ?>">
</div>
<div class="form-group" >
    <label><b>Nama Pasangan Dulu :</b></label>
    <input class="form-control" name="nama_pasangan_dulu" id="nama_pasangan_dulu" value="<?php echo $tampil->nama_pasangan_dulu; ?>">
</div>
</div>
</div>
</div>

<div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Wali Pemohon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Wali :</b></label>
    <input class="form-control" name="nama_wali" id="nama_wali" value="<?php echo $tampil->nama_wali; ?>" required>
</div>
<div class="form-group" >
    <label><b>Bin / Binti Wali :</b></label>
    <input class="form-control" name="bin_binti_wali" id="bin_binti_wali" value="<?php echo $tampil->bin_binti_wali; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Wali :</b></label>
    <input class="form-control" name="tmpt_lahir_wali" id="tmpt_lahir_wali" value="<?php echo $tampil->tmpt_lahir_wali; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Wali :</b></label>
    <input class="form-control" name="tgl_lahir_wali" id="tgl5" value="<?php echo $tampil->tgl_lahir_wali; ?>" required>
</div>
<div class="form-group" >
    <label><b>Agama Wali :</b></label>
    <select class="form-control" name="agama_wali" id="agama_wali" required>
        <option value="<?php echo $tampil->agama_wali; ?>"><?php echo $tampil->agama_wali; ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Wali :</b></label>
    <input class="form-control" name="pekerjaan_wali" id="pekerjaan_wali" value="<?php echo $tampil->pekerjaan_wali; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Wali :</b></label>
    <input class="form-control" name="alamat_wali" id="alamat_wali" value="<?php echo $tampil->alamat_wali; ?>" required>
</div>
<div class="form-group" >
    <label><b>Status Wali :</b></label>
    <select class="form-control" name="status_wali" id="status_wali" required>
        <option value="<?php echo $tampil->status_wali; ?>"><?php echo $tampil->status_wali; ?></option>
        <option value="-">--pilih--</option>
        <option value="Ayah">Ayah</option>
        <option value="Ibu">Ibu</option>
        <option value="Saudara">Saudara</option>
    </select>
</div>
</div>
</div>
</div>

 <div class="col-md-4">
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
    <input class="form-control" name="saksi1" id="saksi1" value="<?php echo $tampil->saksi1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Umur Saksi 1 :</b></label>
    <input class="form-control" name="umur_saksi1" id="umur_saksi1" value="<?php echo $tampil->umur_saksi1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Saksi 1 :</b></label>
    <input class="form-control" name="pekerjaan_saksi1" id="pekerjaan_saksi1" value="<?php echo $tampil->pekerjaan_saksi1; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Saksi 1 :</b></label>
    <input class="form-control" name="alamat_saksi1" id="alamat_saksi1" value="<?php echo $tampil->alamat_saksi1; ?>" required>
</div>
<br>
<h4>Data Saksi 2</h4 ><hr>
<div class="form-group" >
    <label><b>Nama Saksi 2 :</b></label>
    <input class="form-control" name="saksi2" id="saksi2" value="<?php echo $tampil->saksi2; ?>" required>
</div>
<div class="form-group" >
    <label><b>Umur Saksi 2 :</b></label>
    <input class="form-control" name="umur_saksi2" id="umur_saksi2" value="<?php echo $tampil->umur_saksi2; ?>" required>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Saksi 2 :</b></label>
    <input class="form-control" name="pekerjaan_saksi2" id="pekerjaan_saksi2" value="<?php echo $tampil->pekerjaan_saksi2; ?>" required>
</div>
<div class="form-group" >
    <label><b>Alamat Saksi 2 :</b></label>
    <input class="form-control" name="alamat_saksi2" id="alamat_saksi2" value="<?php echo $tampil->alamat_saksi2; ?>" required>
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
              <h3 class="box-title">Data Pasangan Meninggal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
<div class="form-group" >
    <label><b>Nama Pasangan Meninggal :</b></label>
    <input class="form-control" name="nama_pasangan_meninggal" id="nama_pasangan_meninggal" value="<?php echo $tampil->nama_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Bin / Binti Pasangan Meninggal :</b></label>
    <input class="form-control" name="bin_binti_pasangan_meninggal" id="bin_binti_pasangan_meninggal" value="<?php echo $tampil->bin_binti_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Tempat Lahir Pasangan Meninggal :</b></label>
    <input class="form-control" name="tmpt_lahir_pasangan_meninggal" id="tmpt_lahir_pasangan_meninggal" value="<?php echo $tampil->tmpt_lahir_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir Pasangan Meninggal :</b></label>
    <input class="form-control" name="tgl_lahir_pasangan_meninggal" id="tgl6" value="<?php echo $tampil->tgl_lahir_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Kewarganegaraan Pasangan Meninggal :</b></label>
    <input class="form-control" name="kewarganegaraan_pasangan_meninggal" id="kewarganegaraan_pasangan_meninggal" value="<?php echo $tampil->kewarganegaraan_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Agama Pasangan Meninggal :</b></label>
    <select class="form-control" name="agama_pasangan_meninggal" id="agama_pasangan_meninggal">
        <option value="<?php echo $tampil->agama_pasangan_meninggal; ?>"><?php echo $tampil->agama_pasangan_meninggal; ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pekerjaan Pasangan Meninggal :</b></label>
    <input class="form-control" name="pekerjaan_pasangan_meninggal" id="pekerjaan_pasangan_meninggal" value="<?php echo $tampil->pekerjaan_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Tempat Tinggal Pasangan Meninggal :</b></label>
    <input class="form-control" name="tempat_tinggal_pasangan_meninggal" id="tempat_tinggal_pasangan_meninggal" value="<?php echo $tampil->tempat_tinggal_pasangan_meninggal; ?>">
</div>
<div class="form-group" >
    <label><b>Meninggal Pada :</b></label>
    <input class="form-control" name="meninggal_pada" id="tgl7" value="<?php echo $tampil->meninggal_pada; ?>">
</div>
<div class="form-group" >
    <label><b>Meninggal di :</b></label>
    <input class="form-control" name="meninggal_di" id="meninggal_di" value="<?php echo $tampil->meninggal_di; ?>">
</div>
</div>
</div>
</div>

 <div class="col-md-4">
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
        <option value="<?php echo $tampil->hari_nikah; ?>"><?php echo $tampil->hari_nikah; ?></option>
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
    <input class="form-control" name="tgl_nikah" id="tgl8" value="<?php echo $tampil->tgl_nikah; ?>" required>
</div>
<div class="form-group" >
    <label><b>Waktu Nikah Mulai :</b></label>
    <input class="form-control" name="waktu_nikah_mulai" id="waktu_nikah_mulai" value="<?php echo $tampil->waktu_nikah_mulai; ?>" required>
    <p>*Contoh : 09:30</p>
</div>
<div class="form-group" >
    <label><b>Waktu Nikah Selesai :</b></label>
    <input class="form-control" name="waktu_nikah_selesai" id="waktu_nikah_selesai" value="<?php echo $tampil->waktu_nikah_selesai; ?>" required>
    <p>*Contoh : 11:30</p>
</div>
<div class="form-group" >
    <label><b>Maskawin :</b></label>
    <input class="form-control" name="maskawin" id="maskawin" value="<?php echo $tampil->maskawin; ?>" required>
</div>
<div class="form-group" >
    <label><b>Tempat Nikah :</b></label>
    <input class="form-control" name="tempat_nikah" id="tempat_nikah" value="<?php echo $tampil->tempat_nikah; ?>" required>
</div>
</div>
</div>
</div>
</div>
</section>
<?php } ?>
</form>
</div>
</div></div></div></div></div>