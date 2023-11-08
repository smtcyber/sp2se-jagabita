<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Keterangan Keluarga Miskin</title>
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
<?php $this->load->view('template/header_garuda') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN KELUARGA MISKIN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_sktm') ?>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Warga Negara</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360">Indonesia</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="360"><?php echo $tampil->status_kawin;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="360" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="justify">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="630" align="justify" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adalah salah seorang warga kami, yang tergolong <b>Keluarga Miskin</b>. Surat keterangan ini kami keluarkan berdasarkan data yang ada pada kami. Demikian Surat Keterangan Keluarga Miskin ini kami buat dengan sebenarnya,
Untuk Keperluan yang bersangkutan :</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="630" align="center" style="line-height: 25px;"><b>............<?php echo $tampil->keperluan_umum;?>............</b></td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="630" align="justify" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini dibuat dengan sebenarnya, dimohon kepada pihak yang bersangkutan kiranya dapat memberikan bantuan serta agar maklum.</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<br>
<br>
<?php $this->load->view('template/atas_nama_tksk') ?>
</body>
</html>