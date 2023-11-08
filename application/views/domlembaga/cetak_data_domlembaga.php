<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Domisili Lembaga</title>
<style type="text/css">
body,td,th {
	font-size: 18px;
	font-family: Times;
}
.table {
	border: thin;
}
.table td,th {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 18px;
}
.table th {
	background-color: #4e73df;
}
h1,h2,h3,h4,h5 {
	margin: -10px;
}
h1 {
	margin-top: -10px;
	margin-bottom: -30px;
}
</style>
</head>
<body>
<?php $this->load->view('template/header_garuda') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN DOMISILI LEMBAGA</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_domlembaga') ?>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda   tangan di bawah ini Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, Menerangkan bahwa.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="220">Nama Lembaga</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama_lembaga;?></b></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="220" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="380" style="line-height: 23px;"><?php echo $tampil->alamat_lembaga;?> Rt. <?php echo $tampil->rt_lembaga;?>/<?php echo $tampil->rw_lembaga;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Menerangkan yang sebenernya bahwa Benar Yayasan Amalia Al Hasana Berdomisili di <?php echo $tampil->alamat_lembaga;?> Rt. <?php echo $tampil->rt_lembaga;?>/<?php echo $tampil->rw_lembaga;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Demikian surat Keterangan ini kami buat dengan sebenarnya sesuai dengan Data yang kami Tau, Atas perhatian dan kerjasamanya kami ucapkan terimakasih.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br><br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>