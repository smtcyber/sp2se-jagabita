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
<table border="0" align="left" width="500" style="font-size: 14px; font-weight: bold; ">
	<tr>
		<td align="left" width="200" style="font-size: 14px; font-weight: bold; ">KANTOR DESA/KELURAHAN</td>
		<td align="center" width="15" style="font-size: 14px; font-weight: bold; ">:</td>
		<td align="left" width="250" style="font-size: 14px; font-weight: bold; "><?php echo ucwords(strtoupper($tampil->kelurahan)) ?></td>
		<td align="right" width="210" style="font-size: 14px; font-weight: bold; ">Lampiran PMA No-2 Tahun 1990</td>
	</tr>
	<tr>
		<td align="left" width="200" style="font-size: 14px; font-weight: bold; ">KECAMATAN</td>
		<td align="center" width="15" style="font-size: 14px; font-weight: bold; ">:</td>
		<td align="left" width="250" style="font-size: 14px; font-weight: bold; "><?php echo ucwords(strtoupper($tampil->kecamatan)) ?></td>
		<td align="right" width="210" style="font-size: 14px; font-weight: bold; ">Model N-2</td>
	</tr>
	<tr>
		<td align="left" width="200" style="font-size: 14px; font-weight: bold; ">KABUPATEN/KOTA</td>
		<td align="center" width="15" style="font-size: 14px; font-weight: bold; ">:</td>
		<td align="left" width="250" style="font-size: 14px; font-weight: bold; "><?php echo ucwords(strtoupper($tampil->kabupaten)) ?></td>
		<td align="right" width="210" style="font-size: 14px; font-weight: bold; "></td>
	</tr>
</table><br>
<br>
<h4 style="text-align: center; font-family: Times;"><u>SURAT KETERANGAN ASAL-USUL</u><br></h4>
<?php $this->load->view('nomor_surat/no_daftar_nikah') ?>
<table border="0" align="left">
	<tr>
		<td align="left" width="700">Yang bertanda tangan dibawah ini menerangkan dengan sesungguh nya bahwa :</td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td align="left" width="240">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat Tgl Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Kewarganegaraan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370">Indonesia</td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Alamat</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->dusun;?> Rt. <?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
</table>
<table border="0" align="left">
	<tr>
		<td align="left" width="700">Adalah benar anak kandung dari pernikahan seorang pria :</td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->nama_ayah;?></b></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat Tgl Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ayah))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kewarganegaraan_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama_ayah;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan_ayah;?></td>
	</tr>
	<tr>
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
		<td align="left" width="240">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><b><?php echo $tampil->nama_ibu;?></b></td>
	</tr>
	<tr>
		<td align="left" width="240">Tempat Tgl Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ibu))); ?></td>
	</tr>
	<tr>
		<td align="left" width="240">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->kewarganegaraan_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->agama_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="370"><?php echo $tampil->pekerjaan_ibu;?></td>
	</tr>
	<tr>
		<td align="left" width="240" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="370" style="line-height: 22px;"><?php echo $tampil->alamat_ibu;?></td>
	</tr>
</table>
<table border="0" width="auto" align="justify" style="line-height: 23px;">
	<tr>
		<td align="justify">Demikianlah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya.	</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>