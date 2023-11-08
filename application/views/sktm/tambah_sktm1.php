<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Edit Keterangan Tidak Mampu</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Keterangan Tidak Mampu</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
          <a class="btn btn-danger" href="<?php echo site_url('c_sktm/sktm');?>"><i class='fa fa-back'></i> Kembali</a><hr>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Tempat Lahir</div></th>
                      <th><div align="left">Tanggal Lahir</div></th>
                      <th><div align="left">Jenis Kelamin</div></th>
                      <th><div align="left">Pekerjaan</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Tempat Lahir</div></th>
                      <th><div align="left">Tanggal Lahir</div></th>
                      <th><div align="left">Jenis Kelamin</div></th>
                      <th><div align="left">Pekerjaan</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($sktm1)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($sktm1->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->nama_1; ?></td>
                      <td valign="left"><?php echo $tampil->tempat_lahir_1; ?></td>
                      <td valign="left"><?php echo $tampil->tanggal_lahir_1; ?></td>
                      <td valign="left"><?php echo $tampil->kelamin_1; ?></td>
                      <td valign="left"><?php echo $tampil->h_keluarga; ?></td>
                      <td valign="left"><div align="left">
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_sktm/proses_hapus_sktm1/<?php echo $tampil->id_tsktm1.'/'.$sktm->id_sktm ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a>
                       </td></div>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
     </div></div>
<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_sktm/proses_tambah_sktm1'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<h4 style="color:red"><b>Data STKM</b></h4 style="color:red">
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input type="hidden" class="form-control" name="P1" id="P1" value="<?php echo $sktm->id_sktm; ?>" />
    <input type="text" class="form-control" value="<?php echo $sktm->namap; ?>" id="P1" readonly>

</div><hr>
<h4 style="color:red"><b>Form Input</b></h4 style="color:red">
<div class="form-group" >
    <label><b>NIK :</b></label>
    <input class="form-control" name="no_ktp_1" id="no_ktp_1" placeholder="Masukkan Nomor NIK disini" required>
</div>
<div class="form-group" >
    <label><b>Nomor KK :</b></label>
    <input class="form-control" name="no_kk_1" id="no_kk_1" placeholder="Ketikan Nomor KK disini" required />
</div>
<div class="form-group" >
    <label><b>Nama :</b></label>
    <input class="form-control" name="nama_1" id="nama_1" placeholder="Ketikkan Nama Lengkap disini" required />
</div>
<div class="form-group" >
    <label><b>Jenis Kelamin :</b></label>
    <select class="form-control" name="kelamin_1" id="kelamin_1" required>
        <option value="-">--pilih--</option>
        <option value="L">L</option>
        <option value="P">P</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Tempat Lahir :</b></label>
    <input class="form-control" name="tempat_lahir_1" id="tempat_lahir_1" placeholder="Ketikkan tempat lahir disini" required />
</div>
<div class="form-group" >
    <label><b>Tanggal Lahir :</b></label>
    <input class="form-control" name="tanggal_lahir_1" id="tgl1" placeholder="Masukkan tanggal lahir disini" required />
</div>
<div class="form-group" >
    <label><b>Status Kawin :</b></label>
    <select class="form-control" name="status_1" id="status_1" required>
        <option value="-">--pilih--</option>
        <option value="BK">BK</option>
        <option value="K">K</option>
        <option value="D">D</option>
        <option value="J">J</option>
        <option value="C">C</option>
    </select>
</div>
<div class="form-group" >
    <label><b>RT / RW :</b></label>
    <input class="form-control" name="rt_1" id="rt_1" placeholder="Ketikkan RT disini" required />
    <input class="form-control" name="rw_1" id="rw_1" placeholder="Ketikkan RW disini" required />
</div>
<div class="form-group" >
    <label><b>Desa dan Kecamatan :</b></label>
    <input class="form-control" name="kelurahan_1" id="kelurahan_1" placeholder="Ketikkan Desa disini" required />
    <input class="form-control" name="kecamatan_1" id="kecamatan_1" placeholder="Ketikkan Kecamatan disini" required />

</div>
<div class="form-group" >
    <label><b>Status Hubungan Dalam Keluarga :</b></label>
    <select class="form-control" name="h_keluarga" id="h_keluarga" required>
                <option value="-">--pilih--</option>
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
</div>
<hr>
<div class="form-group" align="left">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_sktm/sktm');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div></section>