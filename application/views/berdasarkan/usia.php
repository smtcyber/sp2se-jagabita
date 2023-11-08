<!-- Page Heading -->
<section class="content-header">
      <h1>
        Fitur Penduduk
            <small>Usia Penduduk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Fitur Penduduk</li>
      </ol>
</section>
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-6">
<div class="box box-success">
<div class="box-header with-border">
<h5><b>Penduduk Berdasarkan Usia</b></h5><hr>
<a class="btn btn-success" onclick="printContent('div1')">Print Data</a>
    <div class="box-body">
        <div id="div1">
          <h3>Total Usia Penduduk <?php echo $header->desa; ?></h3>
            <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Usia</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Usia</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php if (empty($usia)) { ?>
                  <tr>
                    <td colspan="3">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($usia->result_array() as $row) {
                       $umur = date('Y') - $row['tahun'];
                       $total = $row['usia'];
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $umur;?> Tahun</td>
                      <td valign="left"><?php echo $total;?> Orang</td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
            </div>

</div></div></div>
</section>