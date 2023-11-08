<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Pernyataan Gadai</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PERNYATAAN GADAI</b></u><br></h3>
<table border="0" width="auto" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="justify">Yang  bertanda  tangan  dibawah  ini masing - masing :</td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">1.</td>
		<td align="left" width="160">Nama</td>  
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->umur;?> Tahun</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>      (PIHAK PERTAMA)</td>
	
	</tr>
	
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">2.</td>
		<td align="left" width="160">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->nama1;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->umur1;?> Tahun</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->kelamin1;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->pekerjaan1;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="15">&nbsp;</td>
		<td align="left" width="160" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo $tampil->alamat1;?> RT <?php echo $tampil->rt1;?> RW <?php echo $tampil->rw1;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>  (PIHAK KEDUA)</td>
	</tr>
</table>
<table border="0" align="justify" style="line-height: 23px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Pada hari ini tanggal <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?> dengan sadar Pihak Pertama telah merasa menitipkan uang  sebesar  Rp. <?php echo $tampil->uang;?> kepada  Pihak  Kedua dengan jaminan tanah sawah terletak di Blok <?php echo $tampil->blok;?>  Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, Seluas <?php echo $tampil->luas;?> dengan batas-batas sebagai berikut :</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="left">
	<tr>
		<td width="35">&nbsp;</td>
		<td align="left" width="210">Sebelah Utara Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->utara;?></td>
	</tr>
	<tr>
		<td width="35">&nbsp;</td>
		<td align="left" width="210">Sebelah Timur Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->timur;?></td>
	</tr>
	<tr>
		<td width="35">&nbsp;</td>
		<td align="left" width="210">Sebelah Selatan Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->selatan;?></td>
	</tr>
	<tr>
		<td width="35">&nbsp;</td>
		<td align="left" width="210">Sebelah Barat Tanah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->barat;?></td>
	</tr>
</table><br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="justify">Dengan perjanjian sebagai berikut :</td>
	</tr>
</table>
<table border="0" align="left">
	<tr>
		<td width="35">&nbsp;</td>
		<td width="15">1.</td>
		<td align="left" width="590">Pihak kedua mulai penggarapan di musim <?php echo $tampil->musim;?></td>
	</tr>
	<tr>
		<td width="35">&nbsp;</td>
		<td width="15">2.</td>
		<td align="left" width="590">Batas pinjaman selama <?php echo $tampil->lama;?> tahun semenjak di tandatanganinya surat ini</td>
	</tr>
	<tr>
		<td width="35">&nbsp;</td>
		<td width="15">3.</td>
		<td align="left" width="590">Pajak tahunan ditanggung oleh Pihak Pertama</td>
	</tr>
	<tr>
		<td width="35">&nbsp;</td>
		<td width="15" valign="top">4.</td>
		<td align="justify" width="590" style="line-height: 23px;">Apabila Pihak Pertama masih belum bisa mengembalikan pinjamannya maka Pihak Kedua masih berhak menggarap tanah tersebut meskipun sudah lebih <?php echo $tampil->lama;?> tahun sampai Pihak Pertama mengembalikan Pinjaman tersebut</td>
	</tr>
</table>
<table border="0" width="auto" align="justify" style="line-height: 23px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Demikian  perjanjian  ini  dibuat  sebenarnya  dalam  keadaan  sehat  jasmani  dan  rohani  tanpa  ada  unsur paksaan  dari  pihak  manapun  dan  dapat  dipertanggungjawabkan  secara  hukum  yang  berlaku  di Indonesia.</td>
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
<table border="0" align="left">
	<tr>
		<td width="60">&nbsp;</td>
		<td width="228" height="5">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" height="15" width="320">Saksi - Saksi :</td>
		<td align="center" height="15">Mengetahui<br><b><?php echo $kepdes->jabatan; ?></b></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" height="15" width="320">1. <?php echo $tampil->saksi1;?> (..............)</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" height="15" width="320">2. <?php echo $tampil->saksi2;?> (..............)</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><?php echo $kepdes->nama_kades; ?></b></td>
	</tr>
</table>
</body>
</html>