<html>
<head>
    <?php

    $nama_file = "domisili_lembaga.doc";

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
<?php $this->load->view('template/header_word') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN DOMISILI LEMBAGA</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_domlembaga') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Lembaga</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama_lembaga;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kegiatan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->jenis_lembaga;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Pimpinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="380" style="line-height: 23px;"><?php echo $tampil->alamat_lembaga;?> RT <?php echo $tampil->rt_lembaga;?> RW <?php echo $tampil->rw_lembaga;?> Desa <?php echo $tampil->desa_lembaga;?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lembaga tersebut adalah benar berada di lingkungan Desa <?php echo $tampil->desa_lembaga;?>, Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, dan berdomisili di alamat tersebut di atas.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat  Keterangan  ini kami buat  dengan sebenarnya, agar menjadi tahu dan maklum adanya dan semoga dapat mempergunakan serta keterangan ini sebagai mana mestinya.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>