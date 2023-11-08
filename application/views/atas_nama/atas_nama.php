<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Edit Atas Nama </xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> SP2SE</a></li>
        <li class="active">Atas Nama</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Atas Nama</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
<?php echo $this->session->flashdata('message'); ?>
<!-- <a href="<?php echo site_url().'/c_atas_nama/tambah_atas_nama'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a><hr> -->
<?php } ?>
    <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th align="left">No</th>
                      <th align="left">Atas Nama</th>
                      <th align="left">Jabatan</th>
                      <th align="left">Pangkat</th>
                      <th align="left">Nip</th>
                      <th align="left">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th align="left">No</th>
                      <th align="left">Atas Nama</th>
                      <th align="left">Jabatan</th>
                      <th align="left">Pangkat</th>
                      <th align="left">Nip</th>
                      <th align="left">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($atas_nama)) { ?>
                  <tr>
                    <td colspan="5">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($atas_nama->result() as $tampil) {
                    ?>
                    <tr>
                      <td align="left"><?php echo $no++; ?></td>
                      <td align="left"><?php echo $tampil->atas_nama; ?></td>
                      <td align="left"><?php echo $tampil->jabatan; ?></td>
                      <td align="left"><?php echo $tampil->pangkat; ?></td>
                      <td align="left"><?php echo $tampil->nip; ?></td>
                      <td align="left"><a class="btn btn-warning btn btn-rounded" href="<?php echo base_url()?>index.php/c_atas_nama/edit_atas_nama/<?php echo $tampil->id ?>" title="Edit Data Atas Nama"><i class="fa fa-edit"></i> Edit</a>
                          <!-- <a class="btn btn-danger btn-xs  btn-rounded" href="<?php echo base_url()?>index.php/c_atas_nama/proses_hapus_atas_nama/<?php echo $tampil->id ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data Atas Nama"><i class="fa fa-trash"></i> Hapus</a></td> -->
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>