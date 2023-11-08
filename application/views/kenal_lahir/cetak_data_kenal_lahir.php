<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Kenal Lahir</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN KELAHIRAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_kenal_lahir') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="210">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="210">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="210">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="210">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="210" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="360" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="630" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benar  dilahirkan  di  <?php echo $tampil->kelurahan;?>,  pada  tanggal  :  <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?>  dari  pasangan  suami-istri  dari <?php echo $tampil->nama_ayah;?> dan <?php echo $tampil->nama_ibu;?> yang merupakan anak ke <?php echo $tampil->anak_ke;?></td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="630" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat    Keterangan    ini  dibuat  berdasarkan  pengakuan  yang  berkepentingan  yang  menyadari  bahwa  pengakuan  ini  berakibat  kepada  status  hukum  yang  bersangkutan  dan  atau  anak  -anaknya. Dan akta kelahiran sedang dalam proses.</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="630" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian  surat keterangan ini dibuat untuk dipergunakan sebagai mana mestinya.</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>