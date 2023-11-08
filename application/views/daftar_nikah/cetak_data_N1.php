<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-1</title>
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
	font-size: 14px;
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
<table border="0" align="left" width="500" style="font-size: 4px;">
	<tr>
		<td align="left" width="585" style="font-size: 14px;"><b>LAMPIRAN 1</b></td>
	</tr>
	<tr>
		<td align="left" width="585" style="font-size: 14px;"><b>KEPUTUSAN DIREKTUR JENDRAL BIMBINGAN MASYARAKAT ISLAM</b></td>
	</tr>
	<tr>
		<td align="left" width="585" style="font-size: 14px;"><b>NOMOR   713   TAHUN 2018</b></td>
	</tr>
	<tr>
		<td align="left" width="585" style="font-size: 14px;"><b>TENTANG</b></td>
	</tr>
	<tr>
		<td align="left" width="585" style="font-size: 14px;"><b>PENETAPAN FORMULIR DAN LAPORAN PENCATATAN PERKAWINAN ATAU RUJUK</b></td>
	</tr>
</table>
<br>
<table border="0" width="500" align="center">
	<tr>
		<td align="center"><b>SURAT KETERANGAN UNTUK NIKAH</b></td>
	</tr>
</table>
<table border="0" width="500" align="center">
	<tr>
		<td width="500" align="right">&nbsp;</td>
		<td align="right">Model N-1</td>
	</tr>
</table>
<br>
<h3 style="text-align: center; font-family: Times;"><u>SURAT PENGANTAR PERKAWINAN</u><br></h3>
<?php $this->load->view('nomor_surat/no_daftar_nikah') ?>
<table border="0" align="left">
	<tr>
		<td align="left" width="700">Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa :</td>
	</tr>
</table>
<br>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" width="240">bNama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="415"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td align="left" width="240">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370">Indonesia</td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td align="left" width="240" valign="top">Tempat Tinggal</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="370" style="line-height: 23px;"><?php echo $tampil->dusun;?> Rt.<?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo $tampil->kelurahan;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Bin/Binti</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"></td>
	</tr>
	<tr>
		<td align="left" width="240">Nama istri/suami</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_mantan_calon; ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Terdahulu</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->status_diri_cwo; ?></td>
	</tr>

</table>
<br>
<table border="0" width="auto" align="justify" style="line-height: 23px;">
	<tr>
		<td align="justify">Demikian  surat  pengantar  ini  dibuat  dengan  mengingat  sumpah  jabatan  dan  untuk  dipergunakan  sebagaimana  mestinya.</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>