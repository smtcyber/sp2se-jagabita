<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Kop Surat</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Kop Surat</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kop Surat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
  <?php echo $this->session->flashdata('message'); ?>
<!-- <a href="<?php echo site_url().'/c_header/tambah_header'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a> -->
<?php } ?>
    <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="5%"><div align="left">No</div></th>
                      <th width="25%"><div align="left">Alamat Kop</div></th>
                      <th width="25%"><div align="left">Email</div></th>
                      <th width="25%"><div align="left">Logo</div></th>
                      <th width="25%"><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="5%"><div align="left">No</div></th>
                      <th width="25%"><div align="left">Alamat Kop</div></th>
                      <th width="25%"><div align="left">Email</div></th>
                      <th width="25%"><div align="left">Logo</div></th>
                      <th width="25%"><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($header)) { ?>
                  <tr>
                    <td colspan="4">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($header->result() as $tampil) {
                    ?>
                    <tr>
                      <td><div align="left"><?php echo $no++; ?></div></td>
                      <td><?php echo $tampil->pemerintah; ?> <?php echo $tampil->kecamatan; ?> <?php echo $tampil->alamat; ?> <?php echo $tampil->kode_pos; ?></td>
                      <td><?php echo $tampil->email; ?></td>
                      <td align="left">
                      <?php if ($tampil->logo!='') { ?>
                        <a target="_blank" href="<?php echo base_url().'assets/logo/'.$tampil->logo ?>"><img class="img-thumbnail" src="<?php echo base_url().'assets/logo/'.$tampil->logo ?>"
                          width="60" height="80" title="<?php echo $tampil->logo ?>"></a>
                      <?php } else {
                        echo "Foto Belum Diupload";
                        } ?>
                      </td>
                      <td><div align="left">
                          <a class="btn btn-warning btn btn-rounded" href="<?php echo base_url()?>index.php/c_header/edit_header/<?php echo $tampil->id_kuwu ?>" title="Edit Data Kepala Desa"><i class="fa fa-edit"></i> Edit</a>
                         <!--  <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_header/proses_hapus_header/<?php echo $tampil->id_kuwu ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data Kepala Desa"><i class="fa fa-trash"></i> Hapus</a> -->
                       </td></div>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
     
</div>
