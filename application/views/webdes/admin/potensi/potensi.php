<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Potensi Desa</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Potensi Desa</li>
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
<a href="<?php echo site_url().'/webdes/tambah_potensi'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a>
<?php } ?>
<br>
          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-size: 16px;">
                  <?php if (empty($potensi)) { ?>
                  <tr>
                        <td colspan="2">Data Tidak Ditemukan</td>
                  </tr>
                        <?php } else {
                          foreach ($potensi->result() as $tampil) {
                        ?>
                  
                  <tr>
                      <td align="left" width="200"><b>Foto</td>
                      <td align="left" width="500"><?php if ($tampil->foto!='') { ?>
                                                    <a target="_blank" href="<?php echo base_url().'assets/foto_potensi/'.$tampil->foto ?>"><img class="img-thumbnail" src="<?php echo base_url().'assets/foto_potensi/'.$tampil->foto ?>"
                                                      width="50% auto" title="<?php echo $tampil->foto ?>"></a>
                                                  <?php } else {
                                                    echo "Foto Tidak Diupload";
                                                    } ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Potensi Sumber Daya Alam</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->potensi_sda; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Potensi Sumber Daya Manusia</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->potensi_sdm; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Potensi Sumber Daya Sosial</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->potensi_sosial; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Potensi Sumber Daya Ekonomi</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->potensi_ekonomi; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Keterangan</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->keterangan; ?></td>
                  </tr>
              </table>
                <hr>
                <a class="btn btn-warning btn-rounded" href="<?php echo base_url()?>index.php/webdes/edit_potensi/<?php echo $tampil->id_potensi ?>" title="Edit potensi"><i class="fa fa-edit"></i> Edit potensi</a>
                <a class="btn btn-danger btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_potensi/<?php echo $tampil->id_potensi ?>" onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Visi Misi"><i class="fa fa-trash"></i> Hapus</a>
                  <?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->