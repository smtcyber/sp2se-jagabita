<!-- Page Heading -->
<section class="content-header">
      <h1>
        Fitur Penduduk
            <small>Jumlah Jenis Kelamin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Jumlah Jenis Kelamin</li>
      </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<div class="box box-warning">
<div class="box-header with-border">
<h4><b>Jumlah Jenis Kelamin Penduduk <?php echo $header->desa; ?></b></h4>
<table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Jenis Kelamin</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($laki)) { ?>
                  <tr>
                    <td colspan="3">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($laki->result_array() as $row) {
                        $lakii = $row['kelamin'];
                      $total = $row['total'];
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><b><?php echo $lakii;?></b></td>
                      <td valign="left"><b><?php echo $total;?></b> Orang</td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>


</div></div></div>

</section>