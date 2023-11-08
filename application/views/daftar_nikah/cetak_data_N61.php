<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-6</title>
<style type="text/css">
body,td,th {
	font-size: 17px;
	font-family: Times;
}
.table {
	border: thin;
}
.table td,th {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 17px;
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
<?php
	if($tampil->kelamin == "Laki-Laki"){
	  $status = "Suami";
	}else {
	  $status = "Istri";
	}
?>

<?php
	if($tampil->meninggal_pada == "1970-01-01"){
	  $tgl = "-";
	}else {
	  $tgl = tgl_indo(date('Y-m-d', strtotime($tampil->meninggal_pada)));
	}
?>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br>
<table border="0" width="100" align="right">
	<tr>
		<td align="right" width="400">Undang-Undang Nomor 1 Tahun 1975<br>Tentang Pernikahan</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" width="100" align="right">
	<tr>
		<td align="right"><b>Model N-6</b></td>
		<td width="20">&nbsp;</td>
	</tr>
</table><br>
<table border="0" align="left" width="500">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="400">KANTOR DESA <?php echo ucwords(strtoupper($tampil->kelurahan)) ?><br>KECAMATAN <?php echo ucwords(strtoupper($tampil->kecamatan)) ?><br>KABUPATEN <?php echo ucwords(strtoupper($tampil->kabupaten)) ?></td>
	</tr>
</table><br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN KEMATIAN SUAMI/ISTRI</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_daftar_nikah') ?>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="800">Yang bertanda tangan dibawah ini menerangkan dengan sesungguh nya bahwa :</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">I.</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->nama_pasangan_meninggal;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->tmpt_lahir_pasangan_meninggal;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_pasangan_meninggal))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->kewarganegaraan_pasangan_meninggal;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->agama_pasangan_meninggal;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="340"><?php echo $tampil->pekerjaan_pasangan_meninggal;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="340" style="line-height: 22px;"><?php echo $tampil->tempat_tinggal_pasangan_meninggal;?></td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="200">Telah meninggal dunia pada</td>
		<td width="10">:</td>
		<td align="left" width="300"><?php echo $tgl; ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="200">Meninggal di</td>
		<td width="10">:</td>
		<td align="left" width="300"><?php echo $tampil->meninggal_di;?></td>
	</tr>
</table><br>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">II.</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330">Indonesia</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 22px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="630" align="justify">Adalah <?php echo $status; ?> yang telah meninggal tersebut diatas.</td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="630" align="justify" style="line-height: 25px;">Demikianlah   surat    keterangan   ini   dibuat   dengan   mengingat  sumpah  jabatan  dan dapat untuk digunakan seperlunya.</td>
	</tr>
</table><br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>