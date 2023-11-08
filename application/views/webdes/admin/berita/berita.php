<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Berita Desa</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Berita Desa</li>
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
<a href="<?php echo site_url().'/webdes/tambah_berita'?>" class="btn btn-success btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Buat Berita Baru</a>
<?php } ?>
<hr>
    <!-- DataTales Example -->
      <div class="box-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Judul Berita</div></th>
                      <th><div align="left">Kategori Berita</div></th>
                      <th><div align="left">Sumber Berita</div></th>
                      <th><div align="left">Tanggal Berita</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($berita)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($berita->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->judul; ?></td>
                      <td valign="left"><?php echo $tampil->tipe_berita; ?></td>
                      <td valign="left"><?php echo $tampil->sumber; ?></td>
                      <td valign="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_berita))); ?></td>
                      <td valign="left"><div align="left">
                          <a class="btn btn-warning btn-xs btn-rounded" href="<?php echo base_url()?>index.php/webdes/edit_berita/<?php echo $tampil->id_berita ?>" title="Edit SKU"><i class="fa fa-edit"></i> Edit Berita</a>
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_berita/<?php echo $tampil->id_berita ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a></td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </section>