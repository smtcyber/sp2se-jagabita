<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Perangkat Desa</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> SP2SE</a></li>
        <li class="active">Perangkat Desa</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Perangkat Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
  <?php echo $this->session->flashdata('message'); ?>
<a href="<?php echo site_url().'/dashboard/tambah_anggota'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a>
<?php } ?><hr>

          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">Nama Perangkat Desa</div></th>
                      <th><div align="left">Nip</div></th>
                      <th><div align="left">Jabatan</div></th>
                      <th><div align="left">Jenis Kelamin</div></th>
                      <th><div align="left">Foto</div></th>
                          <?php
                            $level = $this->session->userdata("level");
                            if ($level == 1) { ?>
                      <th><div align="left">Aksi</div></th>
                          <?php } ?>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">Nama Perangkat Desa</div></th>
                      <th><div align="left">Nip</div></th>
                      <th><div align="left">Jabatan</div></th>
                      <th><div align="left">Jenis Kelamin</div></th>
                      <th><div align="left">Foto</div></th>
                          <?php
                            $level = $this->session->userdata("level");
                            if ($level == 1) { ?>
                      <th><div align="left">Aksi</div></th>
                          <?php } ?>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($anggota)) { ?>
                  <tr>
                    <td colspan="7">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($anggota->result() as $tampil) {
                    ?>
                    <tr>
                      <td><div align="left"><?php echo $no++; ?></div></td>
                      <td><?php echo $tampil->no_ktp; ?></td>
                      <td><?php echo $tampil->anggota_nama; ?></td>
                      <td><?php echo $tampil->nip; ?></td>
                      <td><?php echo $tampil->jabatan; ?></td>
                      <td><?php echo $tampil->anggota_jk; ?></td>
                      <td align="left">
                      <?php if ($tampil->anggota_foto!='') { ?>
                        <a target="_blank" href="<?php echo base_url().'assets/anggota/'.$tampil->anggota_foto ?>"><img class="img-thumbnail" src="<?php echo base_url().'assets/anggota/'.$tampil->anggota_foto ?>"
                          width="40" height="60" title="<?php echo $tampil->anggota_foto ?>"></a>
                      <?php } else {
                        echo "Foto Tidak Diupload";
                        } ?>
                      </td>
                          <?php
                            $level = $this->session->userdata("level");
                            if ($level == 1) { ?>
                      <td><div align="left">
                          <a class="btn btn-warning btn-xs btn-rounded" href="<?php echo base_url()?>index.php/dashboard/edit_anggota/<?php echo $tampil->anggota_id ?>" title="Edit Anggota"><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/dashboard/proses_hapus_anggota/<?php echo $tampil->anggota_id ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Anggota"><i class="fa fa-trash"></i> Hapus</a>
                          <a class="btn btn-info btn-xs btn-rounded" href="<?php echo base_url()?>index.php/dashboard/detail_anggota/<?php echo $tampil->anggota_id ?>"
                          title="Detail Anggota"><i class="fa fa-user"></i> Detail</a>
                      </div></td>
                          <?php } ?>
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