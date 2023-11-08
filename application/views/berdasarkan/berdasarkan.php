<!-- Page Heading -->
<section class="content-header">
      <h1>
        Fitur Penduduk
            <small>Fitur dan Form Pencarian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Penduduk Berdasarkan</li>
      </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-6">
<div class="box box-primary">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/dashboard/search_pendidikan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group">
    <label><b>Cari Penduduk Berdasarkan Pendidikan :</b></label>
    <select class="form-control satu" name="pendidikan" id="pendidikan" required>
                <option value="-">-- Pilih Pendidikan --</option>
                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                <option value="Belum Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                <option value="Diploma III">Diploma III</option>
                <option value="Diploma III">Diploma IV/Strata I</option>
                <option value="Akademi/Sarjana Muda">Akademi/Diploma III/S. Muda</option>
                <option value="Diploma III">Diploma I/II</option>
                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                <option value="Strata II">Strata II</option>
                <option value="Strata III">Strata III</option>
        </select>
</div>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success" value="Search"><i class='fa fa-search'></i> Cari Data Pendidikan</button>
</div>
</form>
</div></div></div>

 <div class="col-md-6">
<div class="box box-info">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/dashboard/search_pekerjaan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group">
    <label><b>Cari Penduduk Berdasarkan Pekerjaan :</b></label>
    <select class="form-control satu" name="pekerjaan" id="pekerjaan" required>
                <option value="-">-- Pilih Pekerjaan --</option>
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
        </select>
</div>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success" value="Search"><i class='fa fa-search'></i> Cari Data Pekerjaan</button>
</div>
</form>
</div></div></div>

<div class="col-md-6">
<div class="box box-warning">
<div class="box-header with-border">
<h5><b>Penduduk Berdasarkan Pendidikan</b></h5>
<table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Pendidikan</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Pendidikan</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($coba)) { ?>
                  <tr>
                    <td colspan="3">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($coba->result_array() as $row) {
                        $didik = $row['pendidikan'];
                      $total = $row['total'];
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $didik;?></td>
                      <td valign="left"><?php echo $total;?></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>


</div></div></div>


<div class="col-md-6">
<div class="box box-danger">
<div class="box-header with-border">
<h5><b>Penduduk Berdasarkan Pekerjaan</b></h5>
<table id="example5" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Pekerjaan</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Pekerjaan</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($kerja)) { ?>
                  <tr>
                    <td colspan="3">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($kerja->result_array() as $row) {
                      $kerja = $row['pekerjaan'];
                      $total = $row['total'];
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $kerja;?></td>
                      <td valign="left"><?php echo $total;?></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>

</div></div></div>

</section>