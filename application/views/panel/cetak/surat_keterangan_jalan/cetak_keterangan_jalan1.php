<html>
<head>
<title>Cetak Surat Keterangan Perjalanan</title>
</head>
<body>
<?php $this->load->view('template/header_kios') ?>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN PERJALANAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_perjalanan') ?>
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
<table border="0" align="center"  style="font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Akan Pergi ke</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->pergi_ke_jalan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tujuan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->tujuan_jalan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Waktu Lama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->lama_jalan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Keterangan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->ket_jalan;?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px; font-size: 17px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify" style="text-indent: 3em;">Demikian surat Keterangan Perjalanan ini kami buat dengan sebenarnya  agar menjadi tahu dan maklum adanya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>