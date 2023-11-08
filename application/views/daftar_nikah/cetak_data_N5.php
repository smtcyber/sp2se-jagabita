<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-5</title>
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
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br>
<table border="0" width="100" align="right">
	<tr>
		<td align="right" width="400">Lampiran 8 KMA No. 477 Tahun 2004<br>- Pasal 7 ayat (2) huruf d -</td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" width="100" align="right">
	<tr>
		<td align="right">Model N-5</td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<h3 style="text-align: center; font-family: Times;"><b>SURAT IZIN ORANG TUA</b><br></h3>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="630"><b>Yang bertanda tangan dibawah ini :</b></td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">I.</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama_ayah;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ayah))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->kewarganegaraan_ayah;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama_ayah;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan_ayah;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo $tampil->alamat_ayah;?></td>
	</tr>
</table><br>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">II.</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama_ibu;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->tmpt_lahir_ibu;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ibu))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->kewarganegaraan_ibu;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama_ibu;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan_ibu;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo $tampil->alamat_ibu;?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="630" align="justify"><b>Adalah benar ayah dan ibu kandung dari :</b></td>
	</tr>
</table><br>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340">Indonesia</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="justify"><b>Memberikan izin kepadanya untuk melakukan pernikahan dengan :</b></td>
	</tr>
</table><br>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->tmpt_lahir_calon;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_calon))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->kewarganegaraan_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo $tampil->alamat_calon;?> RT <?php echo $tampil->rt_calon;?> RW <?php echo $tampil->rw_calon;?> Kecamatan <?php echo $tampil->kecamatan_calon;?> Kabupaten <?php echo $tampil->kabupaten_calon;?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="630" align="justify">Demikianlah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230"><b>I. Ayah</b></td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230"><b>II. Ibu</b></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="230" align="center"><b><?php echo $tampil->nama_ayah;?></b></td>
		<td width="180">&nbsp;</td>
		<td width="230" align="center"><b><?php echo $tampil->nama_ibu;?></b></td>
	</tr>
</table>
</body>
</html>