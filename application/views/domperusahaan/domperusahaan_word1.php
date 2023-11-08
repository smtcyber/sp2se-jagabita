<html>
<head>
    <?php

    $nama_file = "domperusahaan.doc";

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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN DOMISILI PERUSAHAAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_domperusahaan') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Pemilik Perusahaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat / Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?> , <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="210" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="400" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?>  RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->agama)) ?> </td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Perusahaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama_perusahaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat Perusahaan</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="350" style="line-height: 23px;"><?php echo $tampil->alamat_perusahaan;?> RT <?php echo $tampil->rt_perusahaan;?> RW <?php echo $tampil->rw_perusahaan;?> Desa <?php echo $tampil->desa_perusahaan;?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan_perusahaan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten_perusahaan)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Bergerak di bidang</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->bidang_perusahaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Usaha</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->jenis_usaha;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Masa Berlaku</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->masa_berlaku))); ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benar  Perusahaan / Usaha   tersebut   diatas   berdomisili  di  Desa <?php echo $tampil->desa_perusahaan;?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan_perusahaan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten_perusahaan)) ?>.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat  Keterangan  ini kami buat  dengan sebenarnya untuk dapat digunakan  sebagaimana mestinya.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>