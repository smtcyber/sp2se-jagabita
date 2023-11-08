<!-- Page Heading -->
<section class="content-header">
      <h1>
        Ahli Waris
            <small>Tambah Ahli Waris</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Ahli Waris</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Ahli Waris</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class='fa fa-undo'></i> Kembali</a><hr>
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="3%"><div align="left">No</div></th>
                      <th width="20%"><div align="left">Nama</div></th>
                      <th width="15%"><div align="left">Tempat Lahir</div></th>
                      <th width="15%"><div align="left">Tanggal Lahir</div></th>
                      <th width="20%"><div align="left">Jenis Kelamin</div></th>
                      <th width="15%"><div align="left">Pekerjaan</div></th>
                      <th width="20%"><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="3%"><div align="left">No</div></th>
                      <th width="20%"><div align="left">Nama</div></th>
                      <th width="15%"><div align="left">Tempat Lahir</div></th>
                      <th width="15%"><div align="left">Tanggal Lahir</div></th>
                      <th width="20%"><div align="left">Jenis Kelamin</div></th>
                      <th width="15%"><div align="left">Pekerjaan</div></th>
                      <th width="20%"><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($ahli_waris)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($ahli_waris->result() as $tampil) {
                    ?>
                    <tr>
                      <td align="center"><div align="center"><?php echo $no++; ?></div></td>
                      <td align="left"><?php echo $tampil->nama_ahli; ?></td>
                      <td align="left"><?php echo $tampil->tempat_lahir_ahli; ?></td>
                      <td align="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ahli))); ?></td>
                      <td align="left"><?php echo $tampil->kelamin_ahli; ?></td>
                      <td align="left"><?php echo $tampil->pekerjaan_ahli; ?></td>
                      <td align="left"><div align="center">
                          <a class="btn btn-danger btn-sm btn-rounded" href="<?php echo base_url()?>index.php/c_ahli_waris/proses_hapus_ahli_waris/<?php echo $tampil->id_ahli_waris.'/'.$pelapor->id_pelapor ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a>
                       </td></div>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
     </div></div>
</div>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_ahli_waris/proses_tambah_ahli_waris'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" style="color:black">
    <input type="hidden" class="form-control" name="P1" id="P1" value="<?php echo $pelapor->id_pelapor; ?>" />
    <input type="hidden" class="form-control" value="<?php echo $pelapor->nama_pelapor; ?>" id="P1">

</div>
<h4 style="color:red"><b>Silahkan Tambah Ahli Waris Disini :</b></h4 style="color:red">
<div class="form-group" style="color:black">
    <label><b>Nama Ahli Waris :</b></label>
    <input class="form-control" name="nama_ahli" id="nama_ahli" placeholder="Ketikkan Nama Ahli Waris disini">
</div>
<div class="form-group" style="color:black">
    <label><b>Tempat Lahir Ahli Waris :</b></label>
    <input class="form-control" name="tempat_lahir_ahli" id="tempat_lahir_ahli" placeholder="Ketikkan Tempat Lahir Ahli Waris disini">
</div>
<div class="form-group" style="color:black">
    <label><b>Tanggal Lahir Ahli Waris :</b></label>
    <input class="form-control" name="tanggal_lahir_ahli" id="tgl1" placeholder="Ketikkan Tanggal Lahir disini">
</div>
<div class="form-group" style="color:black">
    <label><b>Jenis Kelamin Ahli Waris :</b></label>
    <select class="form-control" name="kelamin_ahli" id="kelamin_ahli" required>
        <option value="-">--pilih--</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Pekerjaan Ahli Waris :</b></label>
    <input class="form-control" name="pekerjaan_ahli" id="pekerjaan_ahli" placeholder="Ketikkan Tempat Pekerjaan Ahli Waris disini">
</div>
<div class="form-group" style="color:black">
    <label><b>Alamat Ahli Waris :</b></label>
    <input class="form-control" name="alamat_ahli" id="alamat_ahli" placeholder="Ketikkan Alamat Ahli Waris disini">
</div>
<div class="form-group" style="color:black">
    <label><b>RT dan RW Ahli Waris :</b></label>
    <input class="form-control" name="rt_ahli" id="rt_ahli" placeholder="Ketikkan RT Ahli Waris disini">
    <input class="form-control" name="rw_ahli" id="rw_ahli" placeholder="Ketikkan RW Ahli Waris disini">
</div>
<div class="form-group" style="color:black">
    <label><b>Desa, Kecamatan dan Kabupaten Ahli Waris :</b></label>
    <input class="form-control" name="desa_ahli" id="desa_ahli" placeholder="Ketikkan Desa Ahli Waris disini">
    <input class="form-control" name="kecamatan_ahli" id="kecamatan_ahli" placeholder="Ketikkan Kecamatan Ahli Waris disini">
    <input class="form-control" name="kabupaten_ahli" id="kabupaten_ahli" placeholder="Ketikkan Kabupaten Ahli Waris disini">
</div>
</div>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>