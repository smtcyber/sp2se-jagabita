<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-3</title>
<style type="text/css">
body,td,th {
	font-size: 16px;
	font-family: Times;
}
.table {
	border: thin;
}
.table td,th {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 16px;
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
	  $status = "Suami";
	}else {
	  $status = "Istri";
	}
?>

<?php
	if($tampil->jenis_kelamin_calon == "Laki - Laki"){
	  $status1 = "Suami";
	}else {
	  $status1 = "Istri";
	}
?>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br>
<table border="0" width="100" align="right">
	<tr>
	<td align="right">Lampiran PMA No-2 Tahun 1990</td>
	</tr>
	<tr>
		<td align="right">Model N-3 &nbsp;</td>
	</tr>
</table><br>
<h4 style="text-align: center; font-family: Times;"><u>SURAT PERSETUJUAN MEMPELAI</u></h4>
<br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="600">Yang bertanda tangan dibawah ini :</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr><td width="20">&nbsp;</td>
		<td align="center" width="15">I.</td>
		<td align="left" width="600">Calon <?php echo $status; ?> :</td>
	</tr>
</table><br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Nama </td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Bin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->nama_ayah;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo ucwords(strtolower($tampil->kelamin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo ucwords(strtolower($tampil->tempat_lahir))?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370">Indonesia</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="370" style="line-height: 22px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="15">II.</td>
		<td align="left" width="600">Calon <?php echo $status1; ?> :</td>
	</tr>
</table><br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->nama_calon;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Bin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->bin_calon;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo ucwords(strtolower($tampil->jenis_kelamin_calon)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo ucwords(strtolower($tampil->tmpt_lahir_calon))?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_calon))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kewarganegaraan_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="370" style="line-height: 22px;"><?php echo $tampil->alamat_calon;?> RT <?php echo $tampil->rt_calon;?> RW <?php echo $tampil->rw_calon;?> Desa <?php echo $tampil->desa_calon;?> Kecamatan <?php echo $tampil->kecamatan_calon;?> Kabupaten <?php echo $tampil->kabupaten_calon;?></td>
	</tr>
</table>
<br>
<table border="0" align="left" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="630" align="justify">Menyatakan  dengan  sesungguhnya  bahwa  atas  dasar  suka  rela,  dengan  kesadaran  sendiri  tanpa  paksaan dari siapapun juga, setuju untuk melangsungkan pernikahan.</td>
	</tr>
</table><br>
<table border="0" align="left" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="justify">Demikian, surat persetujuan  ini dibuat untuk digunakan seperlunya.</td>
	</tr>
</table><br><br><br>
<table border="0" align="center">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230" colspan="2"><?php echo $tampil->kelurahan;?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">I. Calon <?php echo $status; ?></td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230">II. Calon <?php echo $status1; ?></td>
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
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="230" align="center"><b><?php echo $tampil->nama;?></b></td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center"><b><?php echo $tampil->nama_calon;?></b></td>
	</tr>
</table>
</body>
</html>