<html>
<head>
    <?php

    $nama_file = "surat_bersama.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PERNYATAAN BERSAMA</b></u><br></h3>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Yang  bertanda   tangan  dibawah  ini,  masing - masing : </td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="150">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="150">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->umur;?> Tahun</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="150" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="left">Yang selanjutnya disebut <b>PIHAK PERTAMA</b></td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="150">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->nama_pihak_kedua;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="150">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->umur_pihak_kedua;?> Tahun</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="150" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo $tampil->alamat_pihak_kedua;?> RT <?php echo $tampil->rt_pihak_kedua;?> RW <?php echo $tampil->rw_pihak_kedua;?> Desa <?php echo $tampil->desa_pihak_kedua;?> Kecamatan <?php echo $tampil->kecamatan_pihak_kedua;?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Yang selanjutnya disebut <b>PIHAK KEDUA</b></td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada  hari  ini  tanggal  <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?>  telah  dilaksanakan  musyawarah  bersama  antara  pihak  pertama dan pihak kedua. Pada prinsipnya PIHAK PERTAMA tidak akan menuntut PIHAK KEDUA  dalam kasus ini ke pihak kepolisian.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apabila  dalam  kesepakatan  tersebut  di  atas  di  kemudian  hari  pihak  pertama  sampai  terjadi  kenapa-napa, pihak kedua siap dilaporkan ke pihak yang berwajib. Dan mulai saat ini kedua belah pihak ataspermintaan kedua orang tuanya tidak boleh saling berhubungan lagi.</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian  Surat  Pernyataan  Kesepakatan  Bersama  ini  kami  buat  dengan  sebenarnya  dan  tidak  ada  unsur paksaan dari Pihak manapun</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td width="228" height="5">&nbsp;</td>
		<td width="50">&nbsp;</td>
		<td width="70">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td align="center" height="15"><b>Pihak Pertama</b></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?><br><b>Pihak Kedua</b></td>
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
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
		<td align="center"><b><u><?php echo $tampil->nama_pihak_kedua;?></u></b></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><u><?php echo $tampil->nama;?></u></b></td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td width="228" height="5">&nbsp;</td>
		<td width="50">&nbsp;</td>
		<td width="70">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td align="center" height="15">Saksi-Saksi :</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15">Mengetahui,<br><b><?php echo $kepdes->jabatan; ?></b></td>
	</tr>
	<tr>
		<td align="left">1. _________________ (.................)</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="left">2. _________________ (.................)</td>
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
		<td align="left">3. _________________ (.................)</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><?php echo $kepdes->pangkat; ?></td>
	</tr>
	<tr>
		<td align="left">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><?php echo $kepdes->nip; ?></td>
	</tr>
</table>
</body>
</html>