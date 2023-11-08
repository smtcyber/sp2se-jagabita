<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>LKMD</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">LKMD</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
  <?php echo $this->session->flashdata('message'); ?>
<a href="<?php echo site_url().'/webdes/tambah_lkmd'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a>
<?php } ?>
<hr>
          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Jabatan</div></th>
                      <th><div align="left">Nama Pengurus</div></th>
                      <th><div align="left">Alamat</div></th>
                      <th><div align="left">Tanggal Bergabung</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($lkmd)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($lkmd->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->jabatan; ?></td>
                      <td valign="left"><?php echo $tampil->nama_pengurus; ?></td>
                      <td valign="left"><?php echo $tampil->alamat; ?></td>
                      <td valign="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_bergabung))); ?></td>
                      <td valign="left"><div align="left">
                          <a class="btn btn-warning btn-xs btn-rounded" href="<?php echo base_url()?>index.php/webdes/edit_lkmd/<?php echo $tampil->id_lkmd ?>" title="Edit Data"><i class="fa fa-edit"></i> Edit lkmd</a>
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_lkmd/<?php echo $tampil->id_lkmd ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->