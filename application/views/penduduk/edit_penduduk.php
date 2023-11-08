<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Penduduk
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Data Penduduk</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_penduduk/proses_edit_penduduk'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_penduduk->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_penduduk; ?>" />
<div class="form-group" >
    <label><b>NIK :</b></label>
    <input class="form-control" name="P1" id="P1" value="<?php echo $tampil->no_ktp; ?>" required>
</div>
<div class="form-group" >
    <label><b>Nomor KK :</b></label>
    <td width="500"><input class="form-control" name="P2" id="P2" value="<?php echo $tampil->no_kk; ?>" required />
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="P3" id="P3" value="<?php echo $tampil->nama; ?>" required />
</div>
<div class="form-group" >
    <label><b>Agama :</b></label>
    <select class="form-control" name="P4" id="P4" required>
        <option value="<?php echo $tampil->agama; ?>"><?php echo $tampil->agama; ?></option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin :</b></label>
    <select class="form-control" name="P5" id="P5" required>
        <option value="<?php echo $tampil->kelamin; ?>"><?php echo $tampil->kelamin; ?></option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir :</b></label>
    <input class="form-control" name="P6" id="P6" value="<?php echo $tampil->tempat_lahir; ?>" required />
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir :</b></label>
    <input class="form-control" name="P7" id="tgl1" value="<?php echo $tampil->tanggal_lahir; ?>" required />
</div>
<div class="form-group" >
    <label><b>Status Kawin :</b></label>
    <select class="form-control" name="P8" id="P8" required>
        <option value="<?php echo $tampil->status_kawin; ?>"><?php echo $tampil->status_kawin; ?></option>
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
        <option value="Cerai Mati">Cerai Mati</option>
    </select>
</div>
<div class="form-group" >
    <label><b>RT / RW :</b></label>
    <input class="form-control" name="P9" id="P9"  value="<?php echo $tampil->rt; ?>" required />
    <input class="form-control" name="P10" id="P10"  value="<?php echo $tampil->rw; ?>" required />
</div>
<div class="form-group" >
    <label><b>Alamat :</b></label>
    <input class="form-control" name="P11" id="P11"  value="<?php echo $tampil->dusun; ?>" required>
</div>
<div class="form-group" >
    <label><b>Desa, Kecamatan dan Kabupaten :</b></label>
    <input class="form-control" name="P12" id="P12"  value="<?php echo $tampil->kelurahan; ?>" required />
    <input class="form-control" name="P13" id="P13"  value="<?php echo $tampil->kecamatan; ?>" required />
    <input class="form-control" name="P14" id="P14"  value="<?php echo $tampil->kabupaten; ?>" required>

</div>
<div class="form-group" >
    <label><b>Status Hubungan Dalam Keluarga :</b></label>
    <select class="form-control" name="P15" id="P15" required>
                <option value="<?php echo $tampil->h_keluarga; ?>"><?php echo $tampil->h_keluarga; ?></option>
                <option value="Kepala Keluarga">Kepala Keluarga</option>
                <option value="Suami">Suami</option>
                <option value="Istri">Istri</option>
                <option value="Anak">Anak</option>
                <option value="Menantu">Menantu</option>
                <option value="Cucu">Cucu</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Mertua">Mertua</option>
                <option value="Menantu">Menantu</option>
                <option value="Family Lain">Family Lain</option>
                <option value="Asisten Rumah Tangga">Asisten Rumah Tangga</option>
                <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Pendidikan :</b></label>
    <select class="form-control" name="P16" id="P16" required>
                <option value="<?php echo $tampil->pendidikan; ?>"><?php echo $tampil->pendidikan; ?></option>
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
<div class="form-group" >
    <label><b>Pekerjaan :</b></label>
    <select class="form-control" name="P17" id="P17" required>
                <option value="<?php echo $tampil->pekerjaan; ?>"><?php echo $tampil->pekerjaan; ?></option>
                <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                <option value="Pelajar/ Mahasiswa">Pelajar/ Mahasiswa</option>
                <option value="Pensiunan">Pensiunan</option>
                <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                <option value="Tentara Nasional Indonesia (TNI)">Tentara Nasional Indonesia (TNI)</option>
                <option value="Kepolisian RI (POLRI)">Kepolisian RI (POLRI)</option>
                <option value="Pedagang">Pedagang</option>
                <option value="Petani/Perkebunan">Petani/Perkebunan</option>
                <option value="Peternak">Peternak</option>
                <option value="Nelayan/ Perikanan">Nelayan/ Perikanan</option>
                <option value="Industri">Industri</option>
                <option value="Konstruksi">Konstruksi</option>
                <option value="Transportasi">Transportasi</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Karyawan BUMN">Karyawan BUMN</option>
                <option value="Karyawan BUMD">Karyawan BUMD</option>
                <option value="Karyawan Honorer">Karyawan Honorer</option>
                <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
                <option value="Buruh Tani/Perkebunan">Buruh Tani/Perkebunan</option>
                <option value="Buruh Nelayan/ Perikanan">Buruh Nelayan/Perikanan</option>
                <option value="Buruh Peternakan">Buruh Peternakan</option>
                <option value="Tukang Cukur">Tukang Cukur</option>
                <option value="Tukang Listrik">Tukang Listrik</option>
                <option value="Tukang Batu">Tukang Batu</option>
                <option value="Tukang Kayu">Tukang Kayu</option>
                <option value="Tukang Sol Sepatu">Tukang Sol Sepatu</option>
                <option value="Tukang Las/Pandai Besi">Tukang Las/Pandai Besi</option>
                <option value="Tukang Jahit">Tukang Jahit</option>
                <option value="Tukang Gigi">Tukang Gigi</option>
                <option value="Penata Rias">Penata Rias</option>
                <option value="Penata Busana">Penata Busana</option>
                <option value="Penata Rambut">Penata Rambut</option>
                <option value="Mekanik">Mekanik</option>
                <option value="Seniman">Seniman</option>
                <option value="Tabib">Tabib</option>
                <option value="Paraji">Paraji</option>
                <option value="Perancang Busana">Perancang Busana</option>
                <option value="Penterjemah">Penterjemah</option>
                <option value="Imam masjid">Imam masjid</option>
                <option value="Pendeta">Pendeta</option>
                <option value="Pastor">Pastor</option>
                <option value="Wartawan">Wartawan</option>
                <option value="Ustadz/Mubaligh">Ustadz/Mubaligh</option>
                <option value="Juru Masak">Juru Masak</option>
                <option value="Promotor Acara">Promotor Acara</option>
                <option value="Anggota DPR-RI">Anggota DPR-RI</option>
                <option value="Anggota DPD">Anggota DPD</option>
                <option value="Anggota BPK">Anggota BPK</option>
                <option value="Wakil Presiden">Wakil Presiden</option>
                <option value="Anggota Mahkamah Konstitusi">Anggota Mahkamah Konstitusi</option>
                <option value="Anggota Kabinet/Kementrian">Anggota Kabinet/Kementrian</option>
                <option value="Duta Besar">Duta Besar</option>
                <option value="Gubernur">Gubernur</option>
                <option value="Wakil Gubernur">Wakil Gubernur</option>
                <option value="Bupati">Bupati</option>
                <option value="Wakil Bupati">Wakil Bupati</option>
                <option value="Wakikota">Wakikota</option>
                <option value="Wakil Walikota">Wakil Walikota</option>
                <option value="Anggota DPRD Prov">Anggota DPRD Prov</option>
                <option value="Anggota DPRD Kab/Kota">Anggota DPRD Kab/Kota</option>
                <option value="Dosen">Dosen</option>
                <option value="Guru">Guru</option>
                <option value="Pilot">Pilot</option>
                <option value="Pengacara">Pengacara</option>
                <option value="Notaris">Notaris</option>
                <option value="Arsitek">Arsitek</option>
                <option value="Akuntan">Akuntan</option>
                <option value="Konsultan">Konsultan</option>
                <option value="Dokter">Dokter</option>
                <option value="Bidan">Bidan</option>
                <option value="Perawat">Perawat</option>
                <option value="Apoteker">Apoteker</option>
                <option value="Psikiater/Psikolog">Psikiater/Psikolog</option>
                <option value="Penyiar Televisi">Penyiar Televisi</option>
                <option value="Penyiar Radio">Penyiar Radio</option>
                <option value="Pelaut">Pelaut</option>
                <option value="Peneliti">Peneliti</option>
                <option value="Sopir">Sopir</option>
                <option value="Pialang">Pialang</option>
                <option value="Paranormal">Paranormal</option>
                <option value="Perangkat Desa">Perangkat Desa</option>
                <option value="Kepala Desa">Kepala Desa</option>
                <option value="Biarawati">Biarawati</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Lainnya...">Lainnya...</option>
            </select>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_penduduk/penduduk');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>