<html>
<head>
<title>Cetak Surat kepemilikan Tanah</title>
</head>
<body>
<?php $this->load->view('template/header_kios') ?>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KEPEMILIKAN TANAH</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_keterangan_tanah') ?>
<?php $this->load->view('draf/yth_kios') ?>
<table border="0" align="center"  style="font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->no_ktp;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->kelamin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($data->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->status_kawin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->agama)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->pekerjaan)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($data->dusun)) ?> RT <?php echo $data->rt;?> RW <?php echo $data->rw;?> Desa <?php echo ucwords(strtolower($data->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($data->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($data->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="620" align="justify">Berdasarkan keterangan dari Kantor <?= $header->desa ?> bahwa SPPT / PBB atas nama : </td>
		<td width="30">&nbsp;</td>
	</tr>
</table>
<br>
<table align="center" border="1" cellspacing="0" cellpadding="0" style="font-size: 17px;">
	<tr>
		<td align="center" width="50">No</td>
		<td align="center" width="270">Nomor Objek Pajak</td>
		<td align="center" width="270">Nama</td>
	</tr>
	<tr>
		<td align="center" width="50">1</td>
		<td align="center" width="270"><?php echo $data->no_objek_pajak;?></td>
		<td align="center" width="270"><?php echo $data->nama;?></td>
	</tr>
</table><br>
<table border="0" align="center" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="620" align="justify">Dasar Tanah Darat tersebut milik <?php echo $data->nama;?></td>
		<td width="40">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini kami buat dengan sebenarnya Kepada yang berkepentingan agar menjadi maklum dan harap dipergunakan sebagaimana mestinya.</td>
		<td width="40">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>