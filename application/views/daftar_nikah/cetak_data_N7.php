<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-7</title>
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
<table border="0" width="100" align="right" style="font-size: 16px;">
	<tr>
		<td align="right" width="400">Lampiran 13 PMA No. 2 Tahun 1990<br>- Pasal 6 ayat (2) - </td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" width="100" align="right" style="font-size: 16px;">
	<tr>
		<td align="right"><b>Model N-7</b></td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" align="left" style="font-size: 16px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="70"><b>Lampiran</b></td>
		<td width="320" align="left"><b>:    ... lembar</b></td>
		<td align="left" width="280">Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="70"><b>Perihal</b></td>
		<td width="320" align="left"><b>:    Pemberitahuan Kehendak Nikah</b></td>
		<td align="left" width="280">Kepada Yth.</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="60">&nbsp;</td>
		<td width="320" align="left">&nbsp;</td>
		<td align="left" width="280">Pegawai Pencatat Nikah pada</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="60">&nbsp;</td>
		<td width="320" align="left">&nbsp;</td>
		<td align="left" width="280">KUA Kecamatan / Pembantu PPN</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="60">&nbsp;</td>
		<td width="320" align="left">&nbsp;</td>
		<td align="left" width="280">di Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?></td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="600">Assalamualaikum wr.wb.</td>
	</tr>
</table><br>
<br>
<table border="0" align="justify">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="justify" width="630" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan  ini kami memberitahukan bahwa kami bermaksud akan melangsungkan pernikahan antara <b><?php echo $tampil->nama;?></b> dengan <b><?php echo $tampil->nama_calon;?></b></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="justify" width="630" style="line-height: 25px;">Pada  hari  :  <?php echo $tampil->hari_nikah;?>,  Tanggal  :  <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_nikah))); ?>  Pukul  :  <?php echo $tampil->waktu_nikah_mulai?>  s/d  <?php echo $tampil->waktu_nikah_selesai?>  WIB  dengan  maskawin <?php echo $tampil->maskawin?> dibayar tunai / hutang *) bertempat di :</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="630">= = = = = = = = <?php echo $tampil->tempat_nikah?> = = = = = = = =</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="justify" width="630">Bersama  ini   kami   lampirkan   surat - surat   yang  diperlukan  untuk  di  periksa   sebagai berikut :</td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="500">Surat Keterangan Untuk Nikah   , model  N1</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="500">Surat Keterangan Asal - Usul   , model  N2</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="500">Surat Persetujuan Mempelai     , model  N3</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="500">Surat Keterangan Tentang Orang Tua   , model  N4</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="500">________________________________________________</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">6.</td>
		<td align="left" width="500">________________________________________________</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">7.</td>
		<td align="left" width="500">________________________________________________</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">8.</td>
		<td align="left" width="500">________________________________________________</td>
	</tr>
</table><br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="630" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kiranya dapat dihadiri dan dicatat pelaksanannya sesuai dengan ketentuan perundang-undangan yang berlaku.</td>
	</tr>
</table>
<br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">Diterima tanggal <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230">Wassalam</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">Yang Menerima</td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230">Yang Memberitahukan</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">Pembantu PPN*)</td>
		<td width="200">&nbsp;</td>
		<td align="center" width="230">Calon mempelai/wali/wakil wali*)</td>
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
		<td width="210">&nbsp;</td>
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
		<td width="230" align="center">............................... **)</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">..................................</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="200">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="230" align="left">*) Coret yang tidak perlu</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="230" align="left">**) Nama Terang</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
	</tr>
</table>
</body>
</html>