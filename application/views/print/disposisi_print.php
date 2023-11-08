<div id="div1">
<div class="col-lg-12">
<table border="0" width="auto" align="center">
<tr><td width="100"><img src="<?php echo base_url('assets/images/cirebon.png'); ?>" width="100" height="105"></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td height="10"><h4 align="center"><b>PEMERINTAH KABUPATEN CIREBON<br>
  DINAS KEARSIPAN DAN PERPUSTAKAAN</b><br>
  Jalan Sunan Kalijaga No.01 Sumber Telp.(0231) 8330595 Fax.(0231) 8330595</h4></td>
</tr>
</table><hr>
<div class="panel panel-default">
<div class="panel-heading" align="center"><h4><b>&nbsp;Lembar Disposisi</b></h4></div>
<div class="panel-body">
<div class="col-lg-12">
<table class="table table-bordered" align="center">
<form role="form" action="" method="" enctype="multipart/form-data"/>
<?php foreach($detail_disposisi->result() as $tampil) {?>
<tbody>
<tr>
        <td><label><strong>Nomor Surat</strong></label> : <input class="form-control" name="T2" id="T2"
        value="<?php echo $tampil->nomor_tgl_surat; ?>" readonly /></td>
        <td><label><strong>Tanggal Surat</strong></label> : <input class="form-control" name="T5" id="T5"
        value="<?php echo $tampil->tgl_terima; ?>" readonly /></td>
</tr>
<tr>
</tr>
<tr>
        <td><label><strong>Sifat Surat</strong></label> : <input class="form-control" name="T3" id="T3"
        value="<?php echo $tampil->sifat_surat; ?>" readonly /></td>
        <td><label><strong>Perihal</strong></label> : <input class="form-control" name="T4" id="T4"
        value="<?php echo $tampil->perihal_surat; ?>" readonly /></td>
</tr>
<tr>
        <td colspan="2"><label><strong>Instruksi/Informasi</strong></label><input class="form-control" name="D1" id="D1"
        value="<?php echo $tampil->instruksi; ?>" readonly /></td>
</tr>
<tr>
        <td colspan="2"><label><strong>Diteruskan</strong></label><input class="form-control" name="D2" id="D2"
        value="<?php echo $tampil->diteruskan; ?>" readonly /></td>
</tr>
<tr>
        <td colspan="2"><label><strong>Tanggal Dibuat Disp</strong></label><input class="form-control" name="D3" id="D3"
        value="<?php echo $tampil->tanggal_dibuat; ?>" readonly /></td>
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
          <a class="btn btn-primary" onclick="printContent('div1')" style="color:white"><i class="fa fa-print"></i> Cetak Disposisi</a>
          <a class="btn btn-danger" href="<?php echo site_url('dashboard/disposisi');?>"><i class="fa fa-undo"></i>
          Kembali</a><br><hr>
            <span>Copyright &copy; Secretariat Office 2019</span>
          </div>
        </div>
      </footer>