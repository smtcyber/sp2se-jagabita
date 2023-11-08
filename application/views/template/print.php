<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/cirebon.png'); ?>">
<style type="text/css">
.kontensaya {
    width: auto;
    margin: 1px auto;
    font-size:13px;
}
</style>
<body>
<table border="0" width="70%" align="center">
<tr><td width="100"><img src="<?php echo base_url('assets/images/cirebon.png'); ?>" width="100" height="105"></td>
	<td>&nbsp;</td>
	<td height="10"><h3 align="center">PEMERINTAH KABUPATEN CIREBON<br>
	DINAS KEARSIPAN DAN PERPUSTAKAAN<br>
	Jalan Sunan Kalijaga No.01 Sumber Telp.(0231) 8330595 Fax.(0231) 8330595</h3></td>
</tr>
</table><hr>
<div class="kontensaya">
    <?php $this->load->view($isi); ?>
   </div>
  </body>
</html>