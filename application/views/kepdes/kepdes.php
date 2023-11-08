<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Kepala Desa</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Kepala Desa</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Kepala Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
  <?php echo $this->session->flashdata('message'); ?>
<!-- <a href="<?php echo site_url().'/c_kepdes/tambah_kepdes'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a><hr> -->
<?php } ?>
    <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama Kepala Desa</div></th>
                      <th><div align="left">Jabatan</div></th>
                      <th><div align="left">Pangkat</div></th>
                      <th><div align="left">NIP</div></th>
                      <th><div align="left">Foto Kades</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama Kepala Desa</div></th>
                      <th><div align="left">Jabatan</div></th>
                      <th><div align="left">Pangkat</div></th>
                      <th><div align="left">NIP</div></th>
                      <th><div align="left">Foto Kades</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($kepdes)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($kepdes->result() as $tampil) {
                    ?>
                    <tr>
                      <td><div align="left"><?php echo $no++; ?></div></td>
                      <td><?php echo $tampil->nama_kades; ?></td>
                      <td><?php echo $tampil->jabatan; ?></td>
                      <td><?php echo $tampil->pangkat; ?></td>
                      <td><?php echo $tampil->nip; ?></td>
                      <td align="left">
                      <?php if ($tampil->foto_kades!='') { ?>
                        <a target="_blank" href="<?php echo base_url().'assets/foto_kades/'.$tampil->foto_kades ?>"><img class="img-thumbnail" src="<?php echo base_url().'assets/foto_kades/'.$tampil->foto_kades ?>"
                          width="60" height="80" title="<?php echo $tampil->foto_kades ?>"></a>
                      <?php } else {
                        echo "Foto Belum Diupload";
                        } ?>
                      </td>
                      <td><div align="left">
                          <a class="btn btn-warning btn btn-rounded" href="<?php echo base_url()?>index.php/c_kepdes/edit_kepdes/<?php echo $tampil->id_nama_kades ?>" title="Edit Data Kepala Desa"><i class="fa fa-edit"></i> Edit</a>
                          <!-- <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_kepdes/proses_hapus_kepdes/<?php echo $tampil->id_nama_kades ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data Kepala Desa"><i class="fa fa-trash"></i> Hapus</a> -->
                       </td></div>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
     
</div>
