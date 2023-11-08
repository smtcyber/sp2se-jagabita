<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat SKCK</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN SKCK</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_skck') ?>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center"  style="font-size: 17px;">
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->kelamin)) ?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">Warga Negara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350">Indonesia</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->agama)) ?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->pekerjaan)) ?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200">No KTP</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<table border="0" align="justify" style="line-height: 25px; font-size: 17px;">
	<tr>
	<td width="30">&nbsp;</td>
		<td width="620" align="justify"></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Benar nama tersesebut diatas adalah warga kami Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, dan sepanjang pengetahuan kami selama tinggal di Desa Jagabita bahwa yang bersangkutan telah berkelakuan baik, tidak terlibat langsung maupun tidak langsung pada G 30 S/PKI atau organisasi terlarang lainnya serta belum pernah berurusan dengan pihak yang berwajib / Kepolisian</td>
	</tr>
	<tr>
	<td width="30">&nbsp;</td>
		<td width="620" align="justify"></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify"><b><u>Keperluan Untuk : <?= $tampil->keperluan ?></u></b></td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya agar dapat di pergunakan sebagaimana mestinya.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>