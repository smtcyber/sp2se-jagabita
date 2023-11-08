<!-- Page Heading -->
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Daftar Surat</a>
          </li>
          <li class="breadcrumb-item active">Ahli Waris</li>
        </ol>
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
  <?php echo $this->session->flashdata('message'); ?>
<!-- <a href="<?php echo site_url().'/c_ahli_waris/tambah_ahli_waris'?>" class="btn btn-primary btn-rounded"> 
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a> | -->
<a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class='fa fa-back'></i> Kembali</a><hr>
<div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0" style="color:black">
                  <thead>
                    <tr>
                      <th width="3%"><div align="center">No</div></th>
                      <th width="20%"><div align="center">Nama</div></th>
                      <th width="15%"><div align="center">Tempat Lahir</div></th>
                      <th width="15%"><div align="center">Tanggal Lahir</div></th>
                      <th width="20%"><div align="center">Jenis Kelamin</div></th>
                      <th width="15%"><div align="center">Pekerjaan</div></th>
                      <th width="20%"><div align="center">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="3%"><div align="center">No</div></th>
                      <th width="20%"><div align="center">Nama</div></th>
                      <th width="15%"><div align="center">Tempat Lahir</div></th>
                      <th width="15%"><div align="center">Tanggal Lahir</div></th>
                      <th width="20%"><div align="center">Jenis Kelamin</div></th>
                      <th width="15%"><div align="center">Pekerjaan</div></th>
                      <th width="20%"><div align="center">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($ahli_waris)) { ?>
                  <tr>
                    <td colspan="6">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($ahli_waris->result() as $tampil) {
                    ?>
                    <tr>
                      <td valign="center"><div align="center"><?php echo $no++; ?></div></td>
                      <td valign="center"><?php echo $tampil->nama_ahli; ?></td>
                      <td valign="center"><?php echo $tampil->tempat_lahir_ahli; ?></td>
                      <td valign="center"><?php echo $tampil->tanggal_lahir_ahli; ?></td>
                      <td valign="center"><?php echo $tampil->kelamin_ahli; ?></td>
                      <td valign="center"><?php echo $tampil->pekerjaan_ahli; ?></td>
                      <td valign="center"><div align="center">
                          <a class="btn btn-danger btn-sm btn-rounded" href="<?php echo base_url()?>index.php/c_ahli_waris/proses_hapus_ahli_waris/<?php echo $tampil->id_ahli_waris ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a>
                       </td></div>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
     </div></div>
</div>