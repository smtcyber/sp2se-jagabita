<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Keterangan Tidak Mampu Sekolah</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN TIDAK MAMPU</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_sktm') ?>
<?php $this->load->view('draf/yth') ?>
<table border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><b><?php echo $tampil->nama_anak;?></b></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">No NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->no_ktp_anak;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->jenis_kelamin_anak;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Tempat/ Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->tempat_lahir_anak;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_anak))); ?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Warga Negara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360">Indonesia</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->agama_anak;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Nama Sekolah</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->sekolah;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat Sekolah</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="360" style="line-height: 23px;"><?php echo $tampil->alamat_sekolah;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Kelas/ Semester</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->kelas;?>/ <?php echo $tampil->jurusan;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">No Induk Siswa/NISN</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->sekolah;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat Siswa</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="360" style="line-height: 23px;"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rt;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Nama Orang Tua / Wali</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="360" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table><br>
<table border="0" align="justify">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama tersebut diatas warga Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> dan bertempat tinggal menetap di alamat tersebut diatas dan menurut pengakuan yang bersangkutan keadaan ekonominya kurang Mampu/ Miskin.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/kepdes_tksk') ?>
</body>
</html>