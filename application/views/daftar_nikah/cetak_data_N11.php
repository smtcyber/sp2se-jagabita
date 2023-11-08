<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Model N-1</title>
<style type="text/css">
body,td,th {
	font-size: 14px;
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
<table border="0" width="100" align="right">
	<tr>
		<td align="right">Model N-1</td>
	</tr>
</table>
<table border="0" align="left" width="500" style="font-size: 15px;">
	<tr>
		<td align="left" width="270">KANTOR DESA/KELURAHAN</td>
		<td align="center" width="15">:</td>
		<td align="left" width="300"><?php echo ucwords(strtoupper($tampil->kelurahan)) ?></td>
	</tr>
	<tr>
		<td align="left" width="270">KECAMATAN</td>
		<td align="center" width="15">:</td>
		<td align="left" width="300"><?php echo ucwords(strtoupper($tampil->kecamatan)) ?></td>
	</tr>
	<tr>
		<td align="left" width="270">KABUPATEN/KOTA</td>
		<td align="center" width="15">:</td>
		<td align="left" width="300"><?php echo ucwords(strtoupper($tampil->kabupaten)) ?></td>
	</tr>
</table><br>
<h4 style="text-align: center; font-family: Times;"><u>SURAT PENGANTAR PERKAWINAN</u><br></h4>
<?php $this->load->view('nomor_surat/no_daftar_nikah') ?>
<table border="0" align="left">
	<tr>
		<td align="left" width="700">Yang bertanda tangan dibawah ini menerangkan dengan sesungguh nya bahwa :</td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Nomor Induk Kependudukan (NIK)</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Kewarganegaraan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370">Indonesia</td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">6.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">7.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">8.</td>
		<td align="left" width="240">Alamat</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> <?php echo $tampil->kelurahan;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">9.</td>
		<td align="left" width="240">No. HP</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->no_hp;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">10.</td>
		<td align="left" width="240">E-Mail	</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->email;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">11.</td>
		<td align="left" width="240">Status Pernikahan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->status_diri_cwo;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="240">a. Jika pria, terangkan jejaka</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="370">&nbsp;</td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="240">&nbsp;&nbsp;&nbsp;  duda atau beristri dan</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="370">&nbsp;</td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="240">&nbsp;&nbsp;&nbsp; Berapa istrinya</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370">....................</td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="240">b. Jika wanita, terangkan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370">....................</td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="240">&nbsp;&nbsp;&nbsp;  perawan atau janda</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="370">&nbsp;</td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">12.</td>
		<td align="left" width="240">Nama Istri/ Suami Terdahulu</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_mantan_calon;?></td>
	</tr>
</table>
<table border="0" align="left">
	<tr>
		<td align="left" width="700">Adalah benar anak dari perkawinan seorang pria	:</td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_ayah;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ayah))); ?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kewarganegaraan_ayah;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama_ayah;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan_ayah;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="370" style="line-height: 22px;"><?php echo $tampil->alamat_ayah;?></td>
	</tr>
</table>
<table border="0" align="left">
	<tr>
		<td align="left" width="700">Dengan Seorang wanita :</td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td align="left" width="240">Nama Lengkap dan Alias</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->nama_ibu;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td align="left" width="240">Tempat dan Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ibu))); ?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kewarganegaraan_ibu;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">4.</td>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama_ibu;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left">5.</td>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan_ibu;?></td>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td width="20" align="left" valign="top">6.</td>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="370" style="line-height: 22px;"><?php echo $tampil->alamat_ibu;?></td>
	</tr>
</table>
<table border="0" width="auto" align="justify" style="line-height: 23px;">
	<tr>
		<td align="justify">Demikian  surat  pengantar  ini  dibuat  dengan  mengingat  sumpah  jabatan  dan  untuk  dipergunakan  sebagaimana  mestinya.</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>