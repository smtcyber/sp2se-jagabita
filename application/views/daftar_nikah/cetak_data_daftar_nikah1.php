<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Daftar Nikah</title>
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
<?php
	if($tampil->kelamin == "Laki-Laki"){
	  $status = "Perempuan";
	}else {
	  $status = "Laki-Laki";
	}
?>
</head>
<body>
<?php $this->load->view('template/header') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PENGANTAR NIKAH</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_daftar_nikah') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->status_kawin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Orang Tua/ Wali</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama_wali;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat Lengkap</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Keterangan dari Ketua RW <?php echo $tampil->rw;?> Nomor : <?php echo $tampil->no_pengantar;?> Tanggal <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_pengantar))); ?>. Orang tersebut bermaksud akan Menikah dengan seorang  <?php echo $status; ?> :</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nik_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tmpt_lahir_calon)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_calon))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->jenis_kelamin_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Kewarganegaraan/Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->kewarganegaraan_calon;?> / <?php echo $tampil->agama_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->pekerjaan_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Orang Tua/Wali</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama_wali_calon;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat Lengkap</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo $tampil->alamat_calon;?> RT <?php echo $tampil->rt_calon;?> RW <?php echo $tampil->rw_calon;?> Desa <?php echo $tampil->desa_calon;?> Kecamatan <?php echo $tampil->kecamatan_calon;?> Kabupaten <?php echo $tampil->kabupaten_calon;?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian  Surat Keterangan  ini  kami  buat  atas  permintaan  yang  bersangkutan  dan  untuk  dapat dipergunakan seperlunya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>