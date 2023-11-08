<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Keterangan Belum Punya Rumah</title>
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
<?php $this->load->view('template/header_garuda_kios') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>PERNYATAAN BELUM MEMILIKI RUMAH</b></u><br></h3>
<br>
<table>
	<tr>
		<td width="65">&nbsp;</td>
		<td align="left" width="300">Yang bertanda tangan dibawah ini :</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $data->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($data->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nomor KTP/NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $data->no_ktp;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($data->dusun)) ?> RT <?php echo $data->rt;?> RW <?php echo $data->rw;?> Desa <?php echo ucwords(strtolower($data->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($data->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($data->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table>
	<tr>
		<td width="65">&nbsp;</td>
		<td align="left" width="300">Dengan ini menyatakan :</td>
	</tr>
</table>
<table>
	<tr>
		<td align="right" valign="top" width="65">&nbsp;</td>
		<td align="left" valign="top" width="20">-</td>
		<td align="left" width="600">Bahwa saya benar bertempat tinggal pada alamat diatas, bahwa benar saya sampai saat ini belum memiliki rumah tinggal tetap.</td>
	</tr>
	<tr>
		<td align="right" valign="top" width="65">&nbsp;</td>
		<td align="left" valign="top" width="20">-</td>
		<td align="left" width="600">Bahwa benar saya saat ini masih mengontrak/menumpang di Rumah Orang Tua nya yang beralamat tersebut diatas</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian pernyataan ini saya buat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya. </td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<table align="center">
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"><?php  $tanggal_hari_ini= date('Y-m-d');  echo 'Bogor, '. tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
		<td width="220" align="center">Yang menyatakan,</td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
	</tr>
	<tr>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
		<td width="220" align="center">Materai 10.000</td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"><?php echo $data->nama ?></td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center">Mengetahui :</td>
		<td width="220" align="center"></td>
	</tr>
	<tr>
		<td width="220" align="center">Ketua RW <?php echo $data->rw ?></td>
		<td width="220" align="center"></td>
		<td width="220" align="center">Ketua RT <?php echo $data->rt ?></td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center"></td>
		<td width="220" align="center"></td>
	</tr>
	<tr>
		<td width="220" align="center">____________________</td>
		<td width="220" align="center"></td>
		<td width="220" align="center">____________________</td>
	</tr>
	<tr>
		<td width="220" align="center">&nbsp;</td>
		<td width="220" align="center">Dicatat oleh kami :</td>
		<td width="220" align="center"></td>
	</tr>
</table>
<table align="center">
	<tr>
		<td width="120" align="center">&nbsp;</td>
		<td width="420" align="center"><?php echo $kepdes->jabatan ?></td>
		<td width="120" align="center"></td>
	</tr>
	<tr>
		<td width="120" align="center">&nbsp;</td>
		<td width="420" align="center"></td>
		<td width="120" align="center"></td>
	</tr>
	<tr>
		<td width="120" align="center">&nbsp;</td>
		<td width="420" align="center"></td>
		<td width="120" align="center"></td>
	</tr>
	<tr>
		<td width="120" align="center">&nbsp;</td>
		<td width="420" align="center"></td>
		<td width="120" align="center"></td>
	</tr>
	<tr>
		<td width="120" align="center">&nbsp;</td>
		<td width="420" align="center"><?php echo $kepdes->nama_kades ?></td>
		<td width="120" align="center"></td>
	</tr>
</table>
</body>
</html>