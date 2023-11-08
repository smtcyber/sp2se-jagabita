<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-4</title>
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
		<td align="right" width="400">Lampiran PMA No-2 Tahun 1990</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" width="100" align="right">
	<tr>
		<td align="right"><b>Model N-4&nbsp;</b></td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="left" width="500">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="400">KANTOR DESA <?php echo ucwords(strtoupper($tampil->kelurahan)) ?><br>KECAMATAN <?php echo ucwords(strtoupper($tampil->kecamatan)) ?><br>KABUPATEN <?php echo ucwords(strtoupper($tampil->kabupaten)) ?></td>
	</tr>
</table><br><br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN TENTANG ORANG TUA</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_daftar_nikah') ?>
<table border="0" align="left">
	<tr>
		<td align="left" width="630">Yang bertanda tangan dibawah ini menerangkan dengan sesungguh nya bahwa :</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ayah))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->kewarganegaraan_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo $tampil->alamat_ayah;?></td>
	</tr>
</table><br>

<table border="0" align="left">
	<tr>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->tmpt_lahir_ibu;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ibu))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->kewarganegaraan_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo $tampil->alamat_ibu;?></td>
	</tr>
</table><br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td align="justify">Adalah benar ayah dan ibu kandung dari pernikahan seorang :</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340">Indonesia</td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="630" align="justify">Demikianlah  surat  keterangan  ini  dibuat  dengan  mengingat  sumpah  jabatan  dan  untuk  digunakan seperlunya.</td>
	</tr>
</table><br><br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>