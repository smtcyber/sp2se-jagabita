<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Pernyataan Jual Beli</title>
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
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br>
<br>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PERNYATAAN JUAL BELI</b></u><br></h3>
<table border="0" width="auto" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="justify">Yang  bertanda  tangan  dibawah  ini masing - masing :</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">1.</td>
		<td align="left" width="170">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->umur;?> Tahun</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">2.</td>
		<td align="left" width="170">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->nama1;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->umur1;?> Tahun</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->kelamin1;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->pekerjaan1;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="170" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo $tampil->alamat1;?> RT <?php echo $tampil->rt1;?> RW <?php echo $tampil->rw1;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada  hari  ini  tanggal  <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?>  dengan  sadar  pihak  pertama  telah  merasa  menjual  dan  menerima uang sejumlah  Rp.<?php echo $tampil->uang;?> dari pihak kedua, sebagai pembayaran hasil penjualan sebidang tanah  sawah  hak  milik  pihak  pertama  seluas  :  <?php echo $tampil->luas;?>  Bata  yang  terletak  di  Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>  Blok  <?php echo $tampil->blok;?>  Persil  <?php echo $tampil->persil;?>  desa  No  : <?php echo $tampil->no;?>,  NOP  :  <?php echo $tampil->nop;?>  adapun  tanah  yang di jual batas-batasnya sebagai berikut :</td>
	</tr>
	<td width="20">&nbsp;</td>
</table>
<table border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Sebelah Utara Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->utara;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Sebelah Timur Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->timur;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Sebelah Selatan Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->selatan;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Sebelah Barat Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->barat;?></td>
	</tr>
</table>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian  surat  pernyataan  ini  dibuat  dengan  sebenarnya  dalam  keadaan  sehat  jasmani  dan  rohanitanpa ada unsur paksaan dari pihak manapun, dan apabila ada yang menghianati  pernyataan ini makakami  sanggup  diajukan  kepada  pihak  yang  berwajib  dan  surat  ini  merupakan  alat  bukti  pembayaran (kwitansi).</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td width="228" height="5">&nbsp;</td>
		<td width="50">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td align="center" height="15" rowspan="2"><b>Pihak Pertama</b></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?><br><b>Pihak Kedua</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="center"><b><?php echo $tampil->nama;?></b></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><?php echo $tampil->nama1;?></b></td>
	</tr>
</table>
<br>
<table border="0" align="left">
	<tr>
		<td width="60">&nbsp;</td>
		<td width="228" height="5">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" height="15" width="320">Saksi - Saksi :</td>
		<td align="center" height="15">Mengetahui<br><b><?php echo $atas_nama->status; ?></b></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" height="15" width="320">1. ( <?php echo $tampil->saksi1;?> )</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" height="15" width="320">2. ( <?php echo $tampil->saksi2;?> )</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><?php echo $atas_nama->atas_nama; ?></b></td>
	</tr>
</table>
</body>
</html>