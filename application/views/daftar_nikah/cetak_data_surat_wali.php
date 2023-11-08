<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Wali</title>
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
	  $status = "Laki-Laki";
	}else {
	  $status = "Perempuan";
	}
?>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br>
<br>
<br>
<h3 style="text-align: center; font-family: Times;"><b><u>SURAT KETERANGAN & IJIN WALI</u></b></h3>
<br>
<br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="left" width="640"><b>Yang bertanda tangan dibawah ini Menerangkan bahwa :</b></td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama_wali;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Bin/Binti</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->bin_binti_wali;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->tmpt_lahir_wali;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_wali))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan_wali;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 22px;"><?php echo $tampil->alamat_wali;?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify"><b>Adalah betul hak wali atas seorang <?php echo $status; ?> :</b></td>
	</tr>
</table><br>

<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Bin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->nama_ayah;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Tempat Tangal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 22px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify"><b>Sebagai Wali Mujbir/Aqrob/Ab'ad/Hakim sebab Hubungan : <?php echo $tampil->status_wali;?></b></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify"><b>Yang akan Kawin dengan : </b></td>
	</tr>
</table><br>

<table border="0" width="auto" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Binti</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_wali_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_calon))); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan_calon;?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="20">&nbsp;</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="370" style="line-height: 22px;"><?php echo $tampil->alamat_calon;?> RT <?php echo $tampil->rt_calon;?> RW <?php echo $tampil->rw_calon;?> Desa <?php echo $tampil->desa_calon;?> Kecamatan <?php echo $tampil->kecamatan_calon;?> Kabupaten <?php echo $tampil->kabupaten_calon;?></td>
	</tr>
</table><br>

<table border="0" align="justify" style="line-height: 25px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="640" align="justify">Demikianlah surat keterangan ini dibuat dan untuk dipergunakan seperlunya.</td>
	</tr>
</table><br>
<table border="0" align="left">
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">&nbsp;</td>
		<td width="180">&nbsp;</td>
		<td align="center" width="230"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td align="center" width="230">ttd. Wali</td>
		<td width="180">&nbsp;</td>
		<td align="center" width="230">ttd tsb diatas</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="180">&nbsp;</td>
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="180">&nbsp;</td>
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="210">&nbsp;</td>
		<td width="180">&nbsp;</td>
		<td width="210">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="230" align="center"><b>..............................</b></td>
		<td width="180">&nbsp;</td>
		<td width="230" align="center"><b>..............................</b></td>
	</tr>
</table>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>