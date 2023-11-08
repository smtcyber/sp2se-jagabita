<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data Tabel
        <xsall>Data Penduduk</xsall>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Data Penduduk</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
  $level = $this->session->userdata("level");
  if ($level == 1) { ?>
<?php echo $this->session->flashdata('message'); ?>
<a href="<?php echo site_url().'/c_penduduk/tambah_penduduk'?>" class="btn btn-warning btn-rounded">
<i class="fa fa-plus fa-white"></i> &nbsp;Tambah Data</a>&nbsp; | &nbsp;
<?php } ?>
<a href="<?php echo site_url().'/c_penduduk/penduduk_excel'?>" class="btn btn-success btn-rounded">
<i class="fa fa-upload"></i> &nbsp;Export to Excel</a> |
<a href="<?php echo site_url().'/c_penduduk/penduduk_word'?>" class="btn btn-primary btn-rounded">
<i class="fa fa-upload"></i> &nbsp;Export to Word</a><hr>
<?php 
     header("Cache-Control: private, max-age=10800, pre-check=10800");
     header("Pragma: private");
     header("Expires: " . date(DATE_RFC822,strtotime("+2 day")));
?>
<!-- DataTables Example -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">KK</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">NIK</div></th>
                      <th><div align="left">KK</div></th>
                      <th><div align="left">Nama</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($penduduk)) { ?>
                  <tr>
                    <td colspan="4">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=$this->uri->segment('3') + 1;;
                      foreach ($penduduk->result() as $tampil) {
                    ?>
                    <tr>
                      <td><div align="left"><?php echo $no++; ?></div></td>
                      <td><?php echo $tampil->no_ktp; ?></td>
                      <td><?php echo $tampil->no_kk; ?></td>
                      <td><?php echo $tampil->nama; ?></td>
                      <td><div align="left">
                          <a class="btn btn-warning btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_penduduk/edit_penduduk/<?php echo $tampil->id_penduduk ?>" title="Edit Data Penduduk"><i class="fa fa-edit"></i> Edit</a>
                          <a class="btn btn-danger btn-xs btn-rounded" href="<?php echo base_url()?>index.php/c_penduduk/proses_hapus_penduduk/<?php echo $tampil->id_penduduk ?>"
                          onclick="return confirm('Anda Yakin Menghapus Data ini?')" title="Hapus Data Penduduk"><i class="fa fa-trash"></i> Hapus</a>
                       </td></div>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
                <br/>
                <?php 
	echo $this->pagination->create_links();
	?>
     
</div>
 
