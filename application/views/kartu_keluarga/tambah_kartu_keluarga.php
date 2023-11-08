<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kartu Keluarga
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Kartu Keluarga</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepala Keluarga</h3>
            </div>
            <form role="form" action="<?php echo site_url().'/c_kartu_keluarga/proses_tambah_kartu_keluarga'?>" method="post" enctype="multipart/form-data" autocomplete="on">
            <div class="box-body">
            <div class="form-group">
                <label><b>Jenis Permohonan :</b></label>
                <select class="form-control">
                    <option value="-">--pilih--</option>
                    <option value="Kartu Keluarga (KK) Baru">Kartu Keluarga (KK) Baru</option>
                    <option value="Menumpang Kartu Keluarga (KK)">Menumpang Kartu Keluarga (KK)</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Nama Lengkap, Nik Pemohon dan Nomor KK Semula :</b></label>
                <select class="form-control select2" name="R1" required>
                    <option value="-">--pilih/ketikkan --</option>
                    <?php foreach ($penduduk->result() as $row) { ?>
                    <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp.", NO KK : ".$row->no_kk; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label><b>Status Kawin :</b></label>
                <select class="form-control" name="status_kawin" id="status_kawin" required>
                    <option value="-">--pilih--</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Duda">Duda</option>
                    <option value="Janda">Janda</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Hubungan Keluarga :</b></label>
                <select class="form-control" name="hub_keluarga" id="hub_keluarga" required>
                    <option value="-">--pilih--</option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Alamat :</b></label>
                <input class="form-control" name="alamat" id="alamat" placeholder="Ketikkan Alamat disini" required>
            </div>
            <div class="form-group">
                <label><b>RT / RW :</b></label>
                <input class="form-control" name="rt" id="rt" placeholder="Ketikkan RT disini" required />
                <input class="form-control" name="rw" id="rw" placeholder="Ketikkan RW disini" required />
            </div>
            <div class="form-group">
                <label><b>Desa, Kecamatan, Kabupaten, Kode Pos dan Propinsi:</b></label>
                <input class="form-control" name="desa" id="desa" placeholder="Ketikkan Desa disini" required />
                <input class="form-control" name="kecamatan" id="kecamatan" placeholder="Ketikkan Kecamatan disini" required />
                <input class="form-control" name="kabupaten" id="kabupaten" placeholder="Ketikkan Kabupaten disini" required>
                <input class="form-control" name="kode_pos" id="kode_pos" placeholder="Ketikkan Kode Pos disini" required>
                <input class="form-control" name="propinsi" id="propinsi" placeholder="Ketikkan Propinsi disini" required>
            </div>
            <div class="form-group">
                <label><b>No Kitas :</b></label>
                <input class="form-control" name="no_kitas" id="no_kitas" placeholder="Ketikkan Nomor Kitas disini" required>
            </div>
            <div class="form-group">
                <label><b>No Paspor :</b></label>
                <input class="form-control" name="no_paspor" id="no_paspor" placeholder="Ketikkan Nomor Kitas disini" required>
            </div>
            <div class="form-group">
                <label><b>Nama Ayah :</b></label>
                <input class="form-control" name="nm_ayah" id="nm_ayah" placeholder="Ketikkan Nama Ayah disini" required>
            </div>
            <div class="form-group">
                <label><b>Nama Ibu :</b></label>
                <input class="form-control" name="nm_ibu" id="nm_ibu" placeholder="Ketikkan Nama Ibu disini" required>
            </div>
            <div class="form-group">
                <label><b>Status KK:</b></label>
                <select class="form-control" name="status_kk" id="status_kk">
                    <option value="-">--pilih--</option>
                    <option value="Proses di Kelurahan">Proses di Kelurahan</option>
                    <option value="Proses di Kecamatan">Proses di Kecamatan</option>
                    <option value="Proses di Dispencapil">Proses di Dispencapil</option>
                    <option value="Sudah Jadi">Sudah Jadi</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Berkas :</b></label>
                <select class="form-control" name="berkas" id="berkas">
                    <option value="-">--pilih--</option>
                    <option value="Lengkap">Lengkap</option>
                    <option value="Tidak Lengkap">Tidak Lengkap</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Tanggal Surat :</b></label>
                <input class="form-control" name="tgl_surat" id="tgl4" placeholder="Ketikkan Tanggal Surat disini">
            </div>
            </div>
            </div>
            </div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Anggota 1</h3>
            </div>
            <div class="box-body">
            <div class="form-group">
                <label><b>NIK :</b></label>
                <input class="form-control" name="nik_pengikut1" id="nik_pengikut1" placeholder="Ketikkan Nomor NIK disini">
            </div>
            <div class="form-group">
                <label><b>Nama :</b></label>
                <input class="form-control" name="nm_pengikut1" id="nm_pengikut1" placeholder="Ketikkan Nama disini">
            </div>
            <div class="form-group">
                <label><b>Hubungan Keluarga :</b></label>
                <select class="form-control" name="hub_keluarga1" id="hub_keluarga1">
                    <option value="-">--pilih--</option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Tempat Lahir :</b></label>
                <input class="form-control" name="tempat_lahir1" id="tempat_lahir1" placeholder="Ketikkan Tempat Lahir disini">
            </div>
            <div class="form-group">
                <label><b>Tanggal Lahir :</b></label>
                <input class="form-control" name="tgl_lahir1" id="tgl1" placeholder="Ketikkan Tanggal Lahir disini">
            </div>
            <div class="form-group">
                <label><b>Jenis Kelamin :</b></label>
                <select class="form-control" name="jk_pengikut1" id="jk_pengikut1">
                    <option value="-">--pilih--</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Agama :</b></label>
                <select class="form-control" name="agama_pengikut1" id="agama_pengikut1">
                    <option value="-">--pilih--</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Pendidikan :</b></label>
                <select class="form-control" name="pendidikan1" id="pendidikan1">
                            <option value="-">--pilih--</option>
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
                <input class="form-control" name="pekerjaan1" id="pekerjaan1" placeholder="Ketikkan Pekerjaan disini">
            </div>
            <div class="form-group">
                <label><b>Status Kawin :</b></label>
                <select class="form-control" name="status_kawin1" id="status_kawin1">
                    <option value="-">--pilih--</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Duda">Duda</option>
                    <option value="Janda">Janda</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Kewarganegaraan :</b></label>
                <input class="form-control" name="kewarganegaraan1" id="kewarganegaraan1" placeholder="Ketikkan Kewarganegaraan disini">
            </div>
            <div class="form-group">
                <label><b>No Paspor :</b></label>
                <input class="form-control" name="no_paspor1" id="no_paspor1" placeholder="Ketikkan Nomor Kitas disini">
            </div>
            <div class="form-group">
                <label><b>No Kitas :</b></label>
                <input class="form-control" name="no_kitas1" id="no_kitas1" placeholder="Ketikkan Nomor Kitas disini">
            </div>
            <div class="form-group">
                <label><b>Nama Ayah :</b></label>
                <input class="form-control" name="nm_ayah1" id="nm_ayah1" placeholder="Ketikkan Nama Ayah disini">
            </div>
            <div class="form-group">
                <label><b>Nama Ibu :</b></label>
                <input class="form-control" name="nm_ibu1" id="nm_ibu1" placeholder="Ketikkan Nama Ibu disini">
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
              <h3 class="box-title">Data Anggota 2</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
            <div class="form-group">
                <label><b>NIK :</b></label>
                <input class="form-control" name="nik_pengikut2" id="nik_pengikut2" placeholder="Ketikkan Nomor NIK disini">
            </div>
            <div class="form-group">
                <label><b>Nama :</b></label>
                <input class="form-control" name="nm_pengikut2" id="nm_pengikut2" placeholder="Ketikkan Nama disini">
            </div>
            <div class="form-group">
                <label><b>Hubungan Keluarga :</b></label>
                <select class="form-control" name="hub_keluarga2" id="hub_keluarga2">
                    <option value="-">--pilih--</option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Tempat Lahir :</b></label>
                <input class="form-control" name="tempat_lahir2" id="tempat_lahir2" placeholder="Ketikkan Tempat Lahir disini">
            </div>
            <div class="form-group">
                <label><b>Tanggal Lahir :</b></label>
                <input class="form-control" name="tgl_lahir2" id="tgl2" placeholder="Ketikkan Tanggal Lahir disini">
            </div>
            <div class="form-group">
                <label><b>Jenis Kelamin :</b></label>
                <select class="form-control" name="jk_pengikut2" id="jk_pengikut2">
                    <option value="-">--pilih--</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Agama :</b></label>
                <select class="form-control" name="agama_pengikut2" id="agama_pengikut2">
                    <option value="-">--pilih--</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Pendidikan :</b></label>
                <select class="form-control" name="pendidikan2" id="pendidikan2">
                            <option value="-">--pilih--</option>
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
                <input class="form-control" name="pekerjaan2" id="pekerjaan2" placeholder="Ketikkan Pekerjaan disini">
            </div>
            <div class="form-group">
                <label><b>Status Kawin :</b></label>
                <select class="form-control" name="status_kawin2" id="status_kawin2">
                    <option value="-">--pilih--</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Duda">Duda</option>
                    <option value="Janda">Janda</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Kewarganegaraan :</b></label>
                <input class="form-control" name="kewarganegaraan2" id="kewarganegaraan2" placeholder="Ketikkan Kewarganegaraan disini">
            </div>
            <div class="form-group">
                <label><b>No Paspor :</b></label>
                <input class="form-control" name="no_paspor2" id="no_paspor2" placeholder="Ketikkan Nomor Kitas disini">
            </div>
            <div class="form-group">
                <label><b>No Kitas :</b></label>
                <input class="form-control" name="no_kitas2" id="no_kitas2" placeholder="Ketikkan Nomor Kitas disini">
            </div>
            <div class="form-group">
                <label><b>Nama Ayah :</b></label>
                <input class="form-control" name="nm_ayah2" id="nm_ayah2" placeholder="Ketikkan Nama Ayah disini">
            </div>
            <div class="form-group">
                <label><b>Nama Ibu :</b></label>
                <input class="form-control" name="nm_ibu2" id="nm_ibu2" placeholder="Ketikkan Nama Ibu disini">
            </div>
            </div>
            </div>
            </div>

 <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Anggota 3</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
            <div class="form-group">
                <label><b>NIK :</b></label>
                <input class="form-control" name="nik_pengikut3" id="nik_pengikut3" placeholder="Ketikkan Nomor NIK disini">
            </div>
            <div class="form-group">
                <label><b>Nama :</b></label>
                <input class="form-control" name="nm_pengikut3" id="nm_pengikut3" placeholder="Ketikkan Nama disini">
            </div>
            <div class="form-group">
                <label><b>Hubungan Keluarga :</b></label>
                <select class="form-control" name="hub_keluarga3" id="hub_keluarga3">
                    <option value="-">--pilih--</option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Tempat Lahir :</b></label>
                <input class="form-control" name="tempat_lahir3" id="tempat_lahir3" placeholder="Ketikkan Tempat Lahir disini">
            </div>
            <div class="form-group">
                <label><b>Tanggal Lahir :</b></label>
                <input class="form-control" name="tgl_lahir3" id="tgl3" placeholder="Ketikkan Tanggal Lahir disini">
            </div>
            <div class="form-group">
                <label><b>Jenis Kelamin :</b></label>
                <select class="form-control" name="jk_pengikut3" id="jk_pengikut3">
                    <option value="-">--pilih--</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Agama :</b></label>
                <select class="form-control" name="agama_pengikut3" id="agama_pengikut3">
                    <option value="-">--pilih--</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Pendidikan :</b></label>
                <select class="form-control" name="pendidikan3" id="pendidikan3">
                            <option value="-">--pilih--</option>
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
                <input class="form-control" name="pekerjaan3" id="pekerjaan3" placeholder="Ketikkan Pekerjaan disini">
            </div>
            <div class="form-group">
                <label><b>Status Kawin :</b></label>
                <select class="form-control" name="status_kawin3" id="status_kawin3">
                    <option value="-">--pilih--</option>
                    <option value="Belum Kawin">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Duda">Duda</option>
                    <option value="Janda">Janda</option>
                    <option value="Cerai Mati">Cerai Mati</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Kewarganegaraan :</b></label>
                <input class="form-control" name="kewarganegaraan3" id="kewarganegaraan3" placeholder="Ketikkan Kewarganegaraan disini">
            </div>
            <div class="form-group">
                <label><b>No Paspor :</b></label>
                <input class="form-control" name="no_paspor3" id="no_paspor3" placeholder="Ketikkan Nomor Kitas disini">
            </div>
            <div class="form-group">
                <label><b>No Kitas :</b></label>
                <input class="form-control" name="no_kitas3" id="no_kitas3" placeholder="Ketikkan Nomor Kitas disini">
            </div>
            <div class="form-group">
                <label><b>Nama Ayah :</b></label>
                <input class="form-control" name="nm_ayah3" id="nm_ayah3" placeholder="Ketikkan Nama Ayah disini">
            </div>
            <div class="form-group">
                <label><b>Nama Ibu :</b></label>
                <input class="form-control" name="nm_ibu3" id="nm_ibu3" placeholder="Ketikkan Nama Ibu disini">
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="box-footer">
            <div class="form-group" align="center">
                <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
                <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
                <a class="btn btn-danger" href="<?php echo site_url('c_kartu_keluarga/kartu_keluarga');?>"><i class='fa fa-times'></i> Batal</a>
            </div>
            </form>
            </div>
</div></div></div></div></div>