<html>
<head>
    <?php

    $nama_file = "pendaftaran_ktp.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
</head>
<body>
<?php $this->load->view('template/header_word') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PERMOHONAN KARTU TANDA PENDUDUK (KTP)</b></u><br></h3>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Nama</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo $tampil->nama;?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Jenis Kelamin</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo $tampil->kelamin;?></td>
	</tr>
</table><table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Kewarganegaraan</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;">Indonesia</td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Agama</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->agama)) ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Golongan Darah</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo $tampil->gol_darah;?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Pekerjaan</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->pekerjaan)) ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Status Perkawinan</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="300"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->s_kawin)) ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Alamat</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="350"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->dusun)) ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Desa</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="350"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Kecamatan</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="350"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->kecamatan)) ?></td>
	</tr>
</table>
<table border="0" width="800" align="left" style="font-size: 18px; font-family: Times;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 18px;">Kabupaten</td>
		<td align="left" width="20"style="font-size: 18px;">:</td>
		<td align="left" width="350"style="font-size: 18px;"><?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br><br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>