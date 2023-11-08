<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Sosial Media</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Sosial Media</li>
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
<!-- <a href="<?php echo site_url().'/webdes/tambah_sosmed'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a> -->
<?php } ?>
<br>
          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-size: 16px;">
                  <?php if (empty($sosmed)) { ?>
                  <tr>
                        <td colspan="2">Data Tidak Ditemukan</td>
                  </tr>
                        <?php } else {
                          foreach ($sosmed->result() as $tampil) {
                        ?>
                  <tr>
                      <td align="left" width="100"><b>Facebook</b></td>
                      <td align="left" width="600" height="auto"><?php echo $tampil->facebook; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="100"><b>Youtube</b></td>
                      <td align="left" width="600" height="auto"><?php echo $tampil->youtube; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="100"><b>Instagram</b></td>
                      <td align="left" width="600" height="auto"><?php echo $tampil->instagram; ?></td>
                  </tr>
                </table>
                <hr>
                <a class="btn btn-warning btn-rounded" href="<?php echo base_url()?>index.php/webdes/edit_sosmed/<?php echo $tampil->id_sosmed ?>" title="Edit sosmed"><i class="fa fa-edit"></i> Edit Sosmed</a>
<!--                 <a class="btn btn-danger btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_sosmed/<?php echo $tampil->id_sosmed ?>" onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Visi Misi"><i class="fa fa-trash"></i> Hapus</a> -->
                  <?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->