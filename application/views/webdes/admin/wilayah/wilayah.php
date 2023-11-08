<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Profil Wilayah Desa</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Profil Wilayah Desa</li>
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
<!-- <a href="<?php echo site_url().'/webdes/tambah_wilayah'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a> -->
<?php } ?>
<br>
          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="font-size: 16px;">
                  <?php if (empty($wilayah)) { ?>
                  <tr>
                        <td colspan="2">Data Tidak Ditemukan</td>
                  </tr>
                        <?php } else {
                          foreach ($wilayah->result() as $tampil) {
                        ?>
                  
                  <tr>
                      <td align="left" width="200"><b>Foto</td>
                      <td align="left" width="500"><?php if ($tampil->foto!='') { ?>
                                                    <a target="_blank" href="<?php echo base_url().'assets/foto_wilayah/'.$tampil->foto ?>"><img class="img-thumbnail" src="<?php echo base_url().'assets/foto_wilayah/'.$tampil->foto ?>"
                                                      width="50% auto" title="<?php echo $tampil->foto ?>"></a>
                                                  <?php } else {
                                                    echo "Foto Tidak Diupload";
                                                    } ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Wilayah</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_wilayah; ?> ha/m<sup>2</sup></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Pemukiman</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_pemukiman; ?> ha/m<sup>2</sup></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Perkebunan</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_perkebunan; ?> ha/m<sup>2</sup></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Pekarangan</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_pekarangan; ?> ha/m<sup>2</sup></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Tanaman</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_tanaman; ?> ha/m<sup>2</sup></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Perkantoran</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_perkantoran; ?> ha/m<sup>2</sup></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Luas Lainnya</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->luas_lainnya; ?> ha/m<sup>2</sup></td>
                  </tr>
              </table>
              <br>
              <table class="table table-bordered table-striped" style="font-size: 16px;">
                  <tr>
                      <td align="left" colspan="2"><b>BATAS - BATAS</b></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Batas Sebelah Utara</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->batas_utara; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Batas Sebelah Selatan</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->batas_selatan; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Batas Sebelah Timur</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->batas_timur; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Batas Sebelah Barat</b></td>
                      <td align="left" width="500" height="auto"><?php echo $tampil->batas_barat; ?></td>
                  </tr>
                  <tr>
                      <td align="left" width="200"><b>Tanggal Update</b></td>
                      <td align="left" width="500"><?php echo $Tgl=date("d F Y", strtotime($tampil->tgl_update)); ?></td>
                  </tr>
                </table>
                <hr>
                <a class="btn btn-warning btn-rounded" href="<?php echo base_url()?>index.php/webdes/edit_wilayah/<?php echo $tampil->id_wilayah ?>" title="Edit wilayah"><i class="fa fa-edit"></i> Edit wilayah</a>
                <!-- <a class="btn btn-danger btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_wilayah/<?php echo $tampil->id_wilayah ?>" onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Visi Misi"><i class="fa fa-trash"></i> Hapus</a> -->
                  <?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->