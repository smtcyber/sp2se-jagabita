<div id="div1">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading" align="center"><h4><b>&nbsp;Detail Ahli Waris</b></h4></div>
<div class="panel-body">
<div class="col-lg-12">
<table class="table table-bordered" align="center">
<form role="form" action="" method="" enctype="multipart/form-data"/>
<?php foreach($detail_waris->result() as $tampil) {?>
<tbody>
<tr>
        <td><label><strong>Nama Pelapor</strong></label> : <input class="form-control" name="nama_pelapor" id="nama_pelapor"
        value="<?php echo $tampil->nama_pelapor; ?>" readonly /></td>
        <td><label><strong>Nik Pelapor</strong></label> : <input class="form-control" name="nik_pelapor" id="nik_pelapor"
        value="<?php echo $tampil->nik_pelapor; ?>" readonly /></td>
</tr>
<tr>
</tr>
<tr>
        <td><label><strong>Nama Almarhum/ Almarhumah</strong></label> : <input class="form-control" name="nama" id="nama"
        value="<?php echo $tampil->nama; ?>" readonly /></td>
        <td><label><strong>Nik Almarhum/ Almarhumah</strong></label> : <input class="form-control" name="no_ktp" id="no_ktp"
        value="<?php echo $tampil->no_ktp; ?>" readonly /></td>
</tr>
</tbody>
</table>
</div>
<?php } ?>
</form></div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <a class="btn btn-primary" onclick="printContent('div1')" style="color:white"><i class="fa fa-print"></i> Cetak Ahli Waris</a>
          <a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class="fa fa-undo"></i>
          Kembali</a><br><hr>
            <span>Copyright &copy; Secretariat Office 2019</span>
          </div>
        </div>
      </footer>