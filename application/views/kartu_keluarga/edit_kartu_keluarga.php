<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kartu Keluarga
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Kartu Keluarga</li>
      </ol>
</section>

<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-danger">
<form role="form" action="<?php echo site_url().'/c_kartu_keluarga/proses_edit_kartu_keluarga'?>" method="post" enctype="multipart/form-data" autocomplete="on">
        
<div class="box-header with-border" align="center">
            <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Update</button>
            <a class="btn btn-danger" href="<?php echo site_url('c_kartu_keluarga/kartu_keluarga');?>"><i class='fa fa-times'></i> Batal</a>
        </div>
        </div>
</div>
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepala Keluarga</h3>
            </div>
        <?php foreach ($edit_kartu_keluarga->result() as $tampil) { ?>
        <div class="box-body">
        <div class="form-group">
            <input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->no_daftar; ?>" />
        </div>
        <div class="form-group">
            <label><b>Jenis Permohonan :</b></label>
            <select class="form-control" required>
                <option value="-">--pilih--</option>
                <option value="Kartu Keluarga (KK) Baru">Kartu Keluarga (KK) Baru</option>
                <option value="Menumpang Kartu Keluarga (KK)">Menumpang Kartu Keluarga (KK)</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Nama Lengkap dan Nik Pemohon</b></label>
            <select class="form-control select2" name="R1" required>
                <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", dengan NIK : ".$tampil->no_ktp; ?></option>
                <?php foreach ($penduduk->result() as $row) { ?>
                <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", dengan NIK : ".$row->no_ktp; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kode Pos :</b></label>
            <input class="form-control" name="kode_pos" id="kode_pos" value="<?php echo $tampil->kode_pos; ?>" required>
        </div>
        <div class="form-group">
            <label><b>Provinsi :</b></label>
            <input class="form-control" name="propinsi" id="propinsi" value="<?php echo $tampil->propinsi; ?>" required>
        </div>
<!--         <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas" id="no_kitas" value="<?php echo $tampil->no_kitas; ?>" required>
        </div>
        <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor" id="no_paspor" value="<?php echo $tampil->no_paspor; ?>" required>
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah" id="nm_ayah" value="<?php echo $tampil->nm_ayah; ?>" required>
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu" id="nm_ibu" value="<?php echo $tampil->nm_ibu; ?>" required>
        </div>
        <div class="form-group">
            <label><b>Status KK:</b></label>
            <select class="form-control" name="status_kk" id="status_kk">
                <option value="<?php echo $tampil->status_kk; ?>"><?php echo $tampil->status_kk; ?></option>
                <option value="Proses di Kelurahan">Proses di Kelurahan</option>
                <option value="Proses di Kecamatan">Proses di Kecamatan</option>
                <option value="Proses di Dispencapil">Proses di Dispencapil</option>
                <option value="Sudah Jadi">Sudah Jadi</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Berkas :</b></label>
            <select class="form-control" name="berkas" id="berkas">
                <option value="<?php echo $tampil->berkas; ?>"><?php echo $tampil->berkas; ?></option>
                <option value="Lengkap">Lengkap</option>
                <option value="Tidak Lengkap">Tidak Lengkap</option>
            </select>
        </div>
        </div>
        </div>
        </div>

 <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 1</h3>
            </div>
        <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut1" id="nik_pengikut1" value="<?php echo $tampil->nik_pengikut1; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut1" id="nm_pengikut1" value="<?php echo $tampil->nm_pengikut1; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga1" id="hub_keluarga1">
                <option value="<?php echo $tampil->hub_keluarga1; ?>"><?php echo $tampil->hub_keluarga1; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir1" id="tempat_lahir1" value="<?php echo $tampil->tempat_lahir1; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir1" id="tgl1" value="<?php echo $tampil->tgl_lahir1; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut1" id="jk_pengikut1">
                <option value="<?php echo $tampil->jk_pengikut1; ?>"><?php echo $tampil->jk_pengikut1; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut1" id="agama_pengikut1">
                <option value="<?php echo $tampil->agama_pengikut1; ?>"><?php echo $tampil->agama_pengikut1; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan1" id="pendidikan1">
                        <option value="<?php echo $tampil->pendidikan1; ?>"><?php echo $tampil->pendidikan1; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan1" id="pekerjaan1" value="<?php echo $tampil->pekerjaan1; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin1" id="status_kawin1">
                <option value="<?php echo $tampil->status_kawin1; ?>"><?php echo $tampil->status_kawin1; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan1" id="kewarganegaraan1" value="<?php echo $tampil->kewarganegaraan1; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor1" id="no_paspor1" value="<?php echo $tampil->no_paspor1; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas1" id="no_kitas1" value="<?php echo $tampil->no_kitas1; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah1" id="nm_ayah1" value="<?php echo $tampil->nm_ayah1; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu1" id="nm_ibu1" value="<?php echo $tampil->nm_ibu1; ?>">
        </div>
        </div>
        </div>
        </div>

<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 2</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut2" id="nik_pengikut2" value="<?php echo $tampil->nik_pengikut2; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut2" id="nm_pengikut2" value="<?php echo $tampil->nm_pengikut2; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga2" id="hub_keluarga2">
                <option value="<?php echo $tampil->hub_keluarga2; ?>"><?php echo $tampil->hub_keluarga2; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir2" id="tempat_lahir2" value="<?php echo $tampil->tempat_lahir2; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir2" id="tgl2" value="<?php echo $tampil->tgl_lahir2; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut2" id="jk_pengikut2">
                <option value="<?php echo $tampil->jk_pengikut2; ?>"><?php echo $tampil->jk_pengikut2; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut2" id="agama_pengikut2">
                <option value="<?php echo $tampil->agama_pengikut2; ?>"><?php echo $tampil->agama_pengikut2; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan2" id="pendidikan2">
                        <option value="<?php echo $tampil->pendidikan2; ?>"><?php echo $tampil->pendidikan2; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan2" id="pekerjaan2" value="<?php echo $tampil->pekerjaan2; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin2" id="status_kawin2">
                <option value="<?php echo $tampil->status_kawin2; ?>"><?php echo $tampil->status_kawin2; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan2" id="kewarganegaraan2" value="<?php echo $tampil->kewarganegaraan2; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor2" id="no_paspor2" value="<?php echo $tampil->no_paspor2; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas2" id="no_kitas2" value="<?php echo $tampil->no_kitas2; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah2" id="nm_ayah2" value="<?php echo $tampil->nm_ayah2; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu2" id="nm_ibu2" value="<?php echo $tampil->nm_ibu2; ?>">
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
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 3</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut3" id="nik_pengikut3" value="<?php echo $tampil->nik_pengikut3; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut3" id="nm_pengikut3" value="<?php echo $tampil->nm_pengikut3; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga3" id="hub_keluarga3">
                <option value="<?php echo $tampil->hub_keluarga3; ?>"><?php echo $tampil->hub_keluarga3; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir3" id="tempat_lahir3" value="<?php echo $tampil->tempat_lahir3; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir3" id="tgl3" value="<?php echo $tampil->tgl_lahir3; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut3" id="jk_pengikut3">
                <option value="<?php echo $tampil->jk_pengikut3; ?>"><?php echo $tampil->jk_pengikut3; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut3" id="agama_pengikut3">
                <option value="<?php echo $tampil->agama_pengikut3; ?>"><?php echo $tampil->agama_pengikut3; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan3" id="pendidikan3">
                        <option value="<?php echo $tampil->pendidikan3; ?>"><?php echo $tampil->pendidikan3; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan3" id="pekerjaan3" value="<?php echo $tampil->pekerjaan3; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin3" id="status_kawin3">
                <option value="<?php echo $tampil->status_kawin3; ?>"><?php echo $tampil->status_kawin3; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan3" id="kewarganegaraan3" value="<?php echo $tampil->kewarganegaraan3; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor3" id="no_paspor3" value="<?php echo $tampil->no_paspor3; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas3" id="no_kitas3" value="<?php echo $tampil->no_kitas3; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah3" id="nm_ayah3" value="<?php echo $tampil->nm_ayah3; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu3" id="nm_ibu3" value="<?php echo $tampil->nm_ibu3; ?>">
        </div>
        </div>
        </div>
        </div>


<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 4</h3>
            </div>
        <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut4" id="nik_pengikut4" value="<?php echo $tampil->nik_pengikut4; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut4" id="nm_pengikut4" value="<?php echo $tampil->nm_pengikut4; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga4" id="hub_keluarga4">
                <option value="<?php echo $tampil->hub_keluarga4; ?>"><?php echo $tampil->hub_keluarga4; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir4" id="tempat_lahir4" value="<?php echo $tampil->tempat_lahir4; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir4" id="tgl4" value="<?php echo $tampil->tgl_lahir4; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut4" id="jk_pengikut4">
                <option value="<?php echo $tampil->tempat_lahir4; ?>"><?php echo $tampil->jk_pengikut4; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut4" id="agama_pengikut4">
                <option value="<?php echo $tampil->agama_pengikut4; ?>"><?php echo $tampil->agama_pengikut4; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan4" id="pendidikan4">
                        <option value="<?php echo $tampil->pendidikan4; ?>"><?php echo $tampil->pendidikan4; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan4" id="pekerjaan4" value="<?php echo $tampil->pekerjaan4; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin4" id="status_kawin4">
                <option value="<?php echo $tampil->status_kawin4; ?>"><?php echo $tampil->status_kawin4; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan4" id="kewarganegaraan4" value="<?php echo $tampil->kewarganegaraan4; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor4" id="no_paspor4" value="<?php echo $tampil->no_paspor4; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas4" id="no_kitas4" value="<?php echo $tampil->no_kitas4; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah4" id="nm_ayah4" value="<?php echo $tampil->nm_ayah4; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu4" id="nm_ibu4" value="<?php echo $tampil->nm_ibu4; ?>">
        </div>
        </div>
        </div>
        </div>

<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 5</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut5" id="nik_pengikut5" value="<?php echo $tampil->nik_pengikut5; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut5" id="nm_pengikut5" value="<?php echo $tampil->nm_pengikut5; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga5" id="hub_keluarga5">
                <option value="<?php echo $tampil->hub_keluarga5; ?>"><?php echo $tampil->hub_keluarga5; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir5" id="tempat_lahir5" value="<?php echo $tampil->tempat_lahir5; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir5" id="tgl5" value="<?php echo $tampil->tgl_lahir5; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut5" id="jk_pengikut5">
                <option value="<?php echo $tampil->jk_pengikut5; ?>"><?php echo $tampil->jk_pengikut5; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut5" id="agama_pengikut5">
                <option value="<?php echo $tampil->agama_pengikut5; ?>"><?php echo $tampil->agama_pengikut5; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan5" id="pendidikan5">
                        <option value="<?php echo $tampil->pendidikan5; ?>"><?php echo $tampil->pendidikan5; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan5" id="pekerjaan5" value="<?php echo $tampil->pekerjaan5; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin5" id="status_kawin5">
                <option value="<?php echo $tampil->status_kawin5; ?>"><?php echo $tampil->status_kawin5; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan5" id="kewarganegaraan5" value="<?php echo $tampil->kewarganegaraan5; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor5" id="no_paspor5" value="<?php echo $tampil->no_paspor5; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas5" id="no_kitas5" value="<?php echo $tampil->no_kitas5; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah5" id="nm_ayah5" value="<?php echo $tampil->nm_ayah5; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu5" id="nm_ibu5" value="<?php echo $tampil->nm_ibu5; ?>">
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
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 6</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut6" id="nik_pengikut6" value="<?php echo $tampil->nik_pengikut6; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut6" id="nm_pengikut6" value="<?php echo $tampil->nm_pengikut6; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga6" id="hub_keluarga6">
                <option value="<?php echo $tampil->hub_keluarga6; ?>"><?php echo $tampil->hub_keluarga6; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir6" id="tempat_lahir6" value="<?php echo $tampil->tempat_lahir6; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir6" id="tgl6" value="<?php echo $tampil->tgl_lahir6; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut6" id="jk_pengikut6">
                <option value="<?php echo $tampil->jk_pengikut6; ?>"><?php echo $tampil->jk_pengikut6; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut6" id="agama_pengikut6">
                <option value="<?php echo $tampil->agama_pengikut6; ?>"><?php echo $tampil->agama_pengikut6; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan6" id="pendidikan6">
                        <option value="<?php echo $tampil->pendidikan6; ?>"><?php echo $tampil->pendidikan6; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan6" id="pekerjaan6" value="<?php echo $tampil->pekerjaan6; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin6" id="status_kawin6">
                <option value="<?php echo $tampil->status_kawin6; ?>"><?php echo $tampil->status_kawin6; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan6" id="kewarganegaraan6" value="<?php echo $tampil->kewarganegaraan6; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor6" id="no_paspor6" value="<?php echo $tampil->no_paspor6; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas6" id="no_kitas6" value="<?php echo $tampil->no_kitas6; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah6" id="nm_ayah6" value="<?php echo $tampil->nm_ayah6; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu6" id="nm_ibu6" value="<?php echo $tampil->nm_ibu6; ?>">
        </div>
        </div>
        </div>
        </div>


<div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 7</h3>
            </div>
        <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut7" id="nik_pengikut7" value="<?php echo $tampil->nik_pengikut7; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut7" id="nm_pengikut7" value="<?php echo $tampil->nm_pengikut7; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga7" id="hub_keluarga7">
                <option value="<?php echo $tampil->hub_keluarga7; ?>"><?php echo $tampil->hub_keluarga7; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir7" id="tempat_lahir7" value="<?php echo $tampil->tempat_lahir7; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir7" id="tgl7" value="<?php echo $tampil->tgl_lahir7; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut7" id="jk_pengikut7">
                <option value="<?php echo $tampil->tempat_lahir7; ?>"><?php echo $tampil->jk_pengikut7; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut7" id="agama_pengikut7">
                <option value="<?php echo $tampil->agama_pengikut7; ?>"><?php echo $tampil->agama_pengikut7; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan7" id="pendidikan7">
                        <option value="<?php echo $tampil->pendidikan7; ?>"><?php echo $tampil->pendidikan7; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan7" id="pekerjaan7" value="<?php echo $tampil->pekerjaan7; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin7" id="status_kawin7">
                <option value="<?php echo $tampil->status_kawin7; ?>"><?php echo $tampil->status_kawin7; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan7" id="kewarganegaraan7" value="<?php echo $tampil->kewarganegaraan7; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor7" id="no_paspor7" value="<?php echo $tampil->no_paspor7; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas7" id="no_kitas7" value="<?php echo $tampil->no_kitas7; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah7" id="nm_ayah7" value="<?php echo $tampil->nm_ayah7; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu7" id="nm_ibu7" value="<?php echo $tampil->nm_ibu7; ?>">
        </div>
        </div>
        </div>
        </div>

<div class="row">
        <!-- left column -->
        <div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pengikut 8</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
        <div class="form-group">
            <label><b>NIK :</b></label>
            <input class="form-control" name="nik_pengikut8" id="nik_pengikut8" value="<?php echo $tampil->nik_pengikut8; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama :</b></label>
            <input class="form-control" name="nm_pengikut8" id="nm_pengikut8" value="<?php echo $tampil->nm_pengikut8; ?>">
        </div>
        <div class="form-group">
            <label><b>Hubungan Keluarga :</b></label>
            <select class="form-control" name="hub_keluarga8" id="hub_keluarga8">
                <option value="<?php echo $tampil->hub_keluarga8; ?>"><?php echo $tampil->hub_keluarga8; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Tempat Lahir :</b></label>
            <input class="form-control" name="tempat_lahir8" id="tempat_lahir8" value="<?php echo $tampil->tempat_lahir8; ?>">
        </div>
        <div class="form-group">
            <label><b>Tanggal Lahir :</b></label>
            <input class="form-control" name="tgl_lahir8" id="tgl8" value="<?php echo $tampil->tgl_lahir8; ?>">
        </div>
        <div class="form-group">
            <label><b>Jenis Kelamin :</b></label>
            <select class="form-control" name="jk_pengikut8" id="jk_pengikut8">
                <option value="<?php echo $tampil->jk_pengikut8; ?>"><?php echo $tampil->jk_pengikut8; ?></option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Agama :</b></label>
            <select class="form-control" name="agama_pengikut8" id="agama_pengikut8">
                <option value="<?php echo $tampil->agama_pengikut8; ?>"><?php echo $tampil->agama_pengikut8; ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Pendidikan :</b></label>
            <select class="form-control" name="pendidikan8" id="pendidikan8">
                        <option value="<?php echo $tampil->pendidikan8; ?>"><?php echo $tampil->pendidikan8; ?></option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="Diploma III">Diploma III</option>
                        <option value="Akademi/Sarjana Muda">Akademi/Sarjana Muda</option>
                        <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                        <option value="Strata II">Strata II</option>
                        <option value="Strata III">Strata III</option>
                    </select>
        </div>
        <div class="form-group">
            <label><b>Pekerjaan :</b></label>
            <input class="form-control" name="pekerjaan8" id="pekerjaan8" value="<?php echo $tampil->pekerjaan8; ?>">
        </div>
        <div class="form-group">
            <label><b>Status Kawin :</b></label>
            <select class="form-control" name="status_kawin8" id="status_kawin8">
                <option value="<?php echo $tampil->status_kawin8; ?>"><?php echo $tampil->status_kawin8; ?></option>
                <option value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group">
            <label><b>Kewarganegaraan :</b></label>
            <input class="form-control" name="kewarganegaraan8" id="kewarganegaraan8" value="<?php echo $tampil->kewarganegaraan8; ?>">
        </div>
<!--         <div class="form-group">
            <label><b>No Paspor :</b></label>
            <input class="form-control" name="no_paspor8" id="no_paspor8" value="<?php echo $tampil->no_paspor8; ?>">
        </div>
        <div class="form-group">
            <label><b>No Kitas :</b></label>
            <input class="form-control" name="no_kitas8" id="no_kitas8" value="<?php echo $tampil->no_kitas8; ?>">
        </div> -->
        <div class="form-group">
            <label><b>Nama Ayah :</b></label>
            <input class="form-control" name="nm_ayah8" id="nm_ayah8" value="<?php echo $tampil->nm_ayah8; ?>">
        </div>
        <div class="form-group">
            <label><b>Nama Ibu :</b></label>
            <input class="form-control" name="nm_ibu8" id="nm_ibu8" value="<?php echo $tampil->nm_ibu8; ?>">
        </div>
        </div>
        </div>
        </div>
        <?php } ?>
        </form>
</section>