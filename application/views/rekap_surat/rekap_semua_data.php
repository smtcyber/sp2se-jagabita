<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Surat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a href="<?php echo site_url().'/dashboard/rekap'?>" class="btn btn-danger btn-rounded">
				<i class="fa fa-undo fa-white"></i> &nbsp;Kembali</a>
        <a class="btn btn-success btn-rounded" onclick="printContent('div1')"><i class="fa fa-print fa-white"></i> Print Rekap Surat</a>
				  <div class="box-body">
          <div id="div1">
          <h3 align="left">Rekap Surat</h3>
					<table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Surat</div></th>
                      <th><div align="left">Jumlah</div></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (empty($notif)) { ?>
                  <tr>
                    <td colspan="4">Data Tidak Ditemukan</td>
                  </tr>
                    <?php } else {
                      $no=1;
                      foreach ($notif->result_array() as $row) {
                      $notif = $row['surat'];
                      $total = $row['total'];
                    ?>
                    <tr>
                      <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                      <td valign="left"><?php echo $notif;?></td>
                      <td valign="left"><?php echo $total;?> Surat</td>
                    </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>
			      </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>