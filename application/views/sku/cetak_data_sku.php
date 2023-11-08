<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat keterangan Usaha</title>
</head>
<body>
<?php $this->load->view('template/header_garuda') ?>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN USAHA</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_sku') ?>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="left" style="font-size: 17px; font-family: times;">
	<tr>
		<td width="70">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="justify"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left">Jenis Kelamin</td>
		<td align="left">:</td>
		<td align="justify"><?php echo ucwords(strtolower($tampil->kelamin)) ?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left">Warganegara</td>
		<td align="left">:</td>
		<td align="justify">Indonesia</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left">Agama</td>
		<td align="left">:</td>
		<td align="justify"><?php echo ucwords(strtolower($tampil->agama)) ?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left">Pekerjaan</td>
		<td align="left">:</td>
		<td align="justify"><?php echo ucwords(strtolower($tampil->pekerjaan)) ?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="left" valign="top">Alamat</td>
		<td align="left" valign="top">:</td>
		<td align="justify" width="350"><?php echo ucwords(strtolower($tampil->dusun)) ?> Rt.<?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
</table>
<table border="0" align="justify" style="line-height: 25px; font-family: times; font-size: 18px;">
	<tr>
		<td width="30" align="right" valign="top">&nbsp; &nbsp; &nbsp;</td>
		<td width="600" align="justify">Benar Nama tersebut diatas mempunyai  <b>Usaha/Perusahaan</b> Yang berlokasi</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<table border="0" align="justify" style="line-height: 25px; font-family: times; font-size: 18px;">
	<tr>
		<td width="70" align="right" valign="top"> &nbsp; &nbsp; &nbsp;</td>
		<td width="200" align="left">Lokasi Usaha</td>
		<td width="10">:</td>
		<td width="400"><?php echo $tampil->lokasi_usaha ?></td>
	</tr>
	<tr>
		<td width="70" align="right" valign="top"> &nbsp; &nbsp; &nbsp;</td>
		<td width="200" align="left">Jenis Usaha</td>
		<td width="10">:</td>
		<td width="400"> <b><?php echo $tampil->nama_usaha ?></b></td>
	</tr>
	<tr>
		<td width="70" align="right" valign="top"> &nbsp; &nbsp; &nbsp;</td>
		<td width="200" align="left">Penghasilan Perbulan</td>
		<td width="10">:</td>
		<td width="400"> Rp.<?php echo $tampil->penghasilan ?> Perbulan</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px; font-family: times; font-size: 18px;">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="630" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya agar dapat di pergunakan sebagaimana mestinya.</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<br><br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>