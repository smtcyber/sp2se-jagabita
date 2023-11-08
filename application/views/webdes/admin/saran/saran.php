<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Kritik dan Saran</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Kritik dan Saran</li>
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
<?php } ?>
          <!-- DataTales Example -->
          <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nik</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Isi Saran</div></th>
                      <th><div align="left">Tanggal Saran</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($saran)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($saran->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $tampil->nik; ?></td>
                      <td valign="left"><?php echo $tampil->nama; ?></td>
                      <td valign="left"><?php echo $tampil->isi_saran; ?></td>
                      <td valign="left"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_saran))); ?></td>
                      <td valign="left"><div align="left">
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/webdes/proses_hapus_saran/<?php echo $tampil->id_saran ?>"
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