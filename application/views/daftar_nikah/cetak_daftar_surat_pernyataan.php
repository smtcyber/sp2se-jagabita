<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-3</title>
<style type="text/css">
body,td,th {
	font-size: 17px;
	font-family: Times;
}
.table {
	border: thin;
}
.table td,th {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 17px;
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
<?php
	if($tampil->kelamin == "Laki-Laki"){
	  $status = "Perempuan";
	}else {
	  $status = "Laki-Laki";
	}
?>

<?php
	if($tampil->kelamin == "Laki-Laki"){
	  $status1 = "Istri";
	}else {
	  $status1 = "Suami";
	}
?>

</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br><br><br>
<h2 style="text-align: center; font-family: Times;"><b><u>SURAT PERNYATAAN</u></b></h2>
<br><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="600">Yang bertanda tangan dibawah ini :</td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Bin / Binti</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama_ayah;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330">Indonesia</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">6.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">7.</td>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 22px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify">Menyatakan dengan sebenarnya dan sanggup diangkat sumpah bahwa status perkawinan saya sampai dengan saat  ini adalah <?php echo $tampil->status_diri_cwo;?> dan saya baru akan menikah dengan seorang  <?php echo $status; ?>:</td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Bin / Binti</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama_wali_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->tmpt_lahir_calon;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_calon))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->kewarganegaraan_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->agama_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">6.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">7.</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 22px;"><?php echo $tampil->alamat_calon;?> RT <?php echo $tampil->rt_calon;?> RW <?php echo $tampil->rw_calon;?> Desa <?php echo $tampil->desa_calon;?> Kecamatan <?php echo $tampil->kecamatan_calon;?> Kabupaten <?php echo $tampil->kabupaten_calon;?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify">Apabila ada yang keberatan dengan pernikahan saya dengan calon <?php echo $status1; ?> saya maka saya bertanggung jawab  baik material maupun spiritual.</td>
	</tr>
</table><br>
<table border="0" width="auto" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify">Demikian  surat  pernyataan ini  saya  buat  dengan  sebenarnya  dan  kepada  yang  berkepentingan  kiranya  menjadi  maklum adanya.</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230" colspan="2"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?><br>Yang Membuat Pernyataan</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td align="center" width="210" style="font-size: 9px;">Materai 6.000</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="230" align="center"><b>&nbsp;</b></td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230"><b><u><?php echo $tampil->nama;?></u></b></td>
	</tr>
</table>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="230">1. ....................</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="230">Ketua RT <?php echo $tampil->rt;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="230">2. ....................</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="230">Ketua RT <?php echo $tampil->rw;?></td>
	</tr>
</table>
</body>
</html>