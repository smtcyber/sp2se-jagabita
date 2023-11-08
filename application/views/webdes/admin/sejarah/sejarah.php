<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Sejarah</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Sejarah</li>
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
<!-- <a href="<?php echo site_url().'/webdes/tambah_sejarah'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a> -->
<?php } ?>
<br>
          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-size: 16px;">
                  <?php if (empty($sejarah)) { ?>
                  <tr>
                        <td colspan="2">Data Tidak Ditemukan</td>
                  </tr>
                        <?php } else {
                          foreach ($sejarah->result() as $tampil) {
                        ?>
                  <tr>
                      <td align="left" width="100"><b>Sejarah</b></td>
                      <td align="left" width="600" height="auto"><?php echo $tampil->konten; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="100"><b>Foto</td>
                      <td align="left" width="600"><?php if ($tampil->foto!='') { ?>
                                                    <a target="_blank" href="<?php echo base_url().'assets/foto_sejarah/'.$tampil->foto ?>"><img class="img-thumbnail" src="<?php echo base_url().'assets/foto_sejarah/'.$tampil->foto ?>"
                                                      width="50% auto" title="<?php echo $tampil->foto ?>"></a>
                                                  <?php } else {
                                                    echo "Foto Tidak Diupload";
                                                    } ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="100"><b>Tanggal Update</b></td>
                      <td align="left" width="600"><?php echo $Tgl=date("d F Y", strtotime($tampil->tgl_update)); ?></td>
                  </tr>
                </table>
                <hr>
                <a class="btn btn-warning btn-rounded" href="<?php echo base_url()?>index.php/webdes/edit_sejarah/<?php echo $tampil->id_sejarah ?>" title="Edit Sejarah"><i class="fa fa-edit"></i> Edit Sejarah</a>
                <!-- <a class="btn btn-danger btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_sejarah/<?php echo $tampil->id_sejarah ?>" onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Visi Misi"><i class="fa fa-trash"></i> Hapus</a> -->
                  <?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->