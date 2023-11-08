<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/header1.jpg'); ?>">
<title>Print Kartu Keluarga</title>
<style type="text/css">
body,td,th {
	font-size: 12px;
	font-family: Times;
}
.table {
	border: thin;
}
.table td,th {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 12px;
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
<body><br><br>
<table border="0" width="100" align="left" style="margin-left:-30">
<tr>
	<td width="50">&nbsp;</td>
	<td width="80">&nbsp;</td>
	<td width="230">&nbsp;</td>
	<td height="10" width="500"><h3 align="center"><u>KARTU KELUARGA</u></h3></td>
</tr>
</table><br>
<table  border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200">Nama Kepala Keluarga</td>
		<td width="10" align="center">:</td>
		<td width="300"><?php echo $tampil->nama;?></td>
		<td width="200">&nbsp;</td>
		<td width="150">Kecamatan</td>
		<td width="10" align="center">:</td>
		<td width="230"><?php echo $tampil->kecamatan;?></td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200">Alamat</td>
		<td width="10" align="center">:</td>
		<td width="300"><?php echo $tampil->alamat;?></td>
		<td width="200">&nbsp;</td>
		<td width="150">Kabupaten</td>
		<td width="10" align="center">:</td>
		<td width="230"><?php echo $tampil->kabupaten;?></td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200">RT / RW</td>
		<td width="10" align="center">:</td>
		<td width="300"><?php echo $tampil->rt;?> / <?php echo $tampil->rt;?></td>
		<td width="200">&nbsp;</td>
		<td width="150">Propinsi</td>
		<td width="10" align="center">:</td>
		<td width="230"><?php echo $tampil->propinsi;?></td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200">Desa</td>
		<td width="10" align="center">:</td>
		<td width="300"><?php echo $tampil->kelurahan;?></td>
		<td width="200">&nbsp;</td>
		<td width="150">Kode Pos</td>
		<td width="10" align="center">:</td>
		<td width="230">45464</td>
		<td width="50">&nbsp;</td>
	</tr>
</table><br>

<p style="margin-left:10" style="margin-right:10"><table border="0.5" align="center" cellspacing="0" cellpadding="0" style="margin-left:-20">
	<tr>
		<td width="20" align="center">No</td>
		<td width="200" align="center">Nama Lengkap</td>
		<td width="150" align="center">NIK</td>
		<td width="120" align="center">Jenis Kelamin</td>
		<td width="120" align="center">Tempat Lahir</td>
		<td width="120" align="center">Tanggal Lahir</td>
		<td width="120" align="center">Agama</td>
		<td width="120" align="center">Pendidikan</td>
		<td width="150" align="center">Pekerjaan</td>
	</tr>
	<tr>
		<td width="20" align="center">1</td>
		<td width="150" align="center">2</td>
		<td width="120" align="center">3</td>
		<td width="120" align="center">4</td>
		<td width="120" align="center">5</td>
		<td width="120" align="center">6</td>
		<td width="120" align="center">7</td>
		<td width="150" align="center">8</td>
		<td width="150" align="center">9</td>
	</tr>
	<tr>
		<td width="20" align="center">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->nm_pengikut1;?><br><?php echo $tampil->nm_pengikut2;?><br><?php echo $tampil->nm_pengikut3;?><br><?php echo $tampil->nm_pengikut4;?><br><?php echo $tampil->nm_pengikut5;?><br><?php echo $tampil->nm_pengikut6;?><br><?php echo $tampil->nm_pengikut7;?><br><?php echo $tampil->nm_pengikut8;?><br><?php echo $tampil->nm_pengikut9;?><br>&nbsp;</td>
		<td width="150" align="left"><?php echo $tampil->nik_pengikut1;?><br><?php echo $tampil->nik_pengikut2;?><br><?php echo $tampil->nik_pengikut3;?><br><?php echo $tampil->nik_pengikut4;?><br><?php echo $tampil->nik_pengikut5;?><br><?php echo $tampil->nik_pengikut6;?><br><?php echo $tampil->nik_pengikut7;?><br><?php echo $tampil->nik_pengikut8;?><br><?php echo $tampil->nik_pengikut9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->jk_pengikut1;?><br><?php echo $tampil->jk_pengikut2;?><br><?php echo $tampil->jk_pengikut3;?><br><?php echo $tampil->jk_pengikut4;?><br><?php echo $tampil->jk_pengikut5;?><br><?php echo $tampil->jk_pengikut6;?><br><?php echo $tampil->jk_pengikut7;?><br><?php echo $tampil->jk_pengikut8;?><br><?php echo $tampil->jk_pengikut9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->tempat_lahir1;?><br><?php echo $tampil->tempat_lahir2;?><br><?php echo $tampil->tempat_lahir3;?><br><?php echo $tampil->tempat_lahir4;?><br><?php echo $tampil->tempat_lahir5;?><br><?php echo $tampil->tempat_lahir6;?><br><?php echo $tampil->tempat_lahir7;?><br><?php echo $tampil->tempat_lahir8;?><br><?php echo $tampil->tempat_lahir9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->tgl_lahir1;?><br><?php echo $tampil->tgl_lahir2;?><br><?php echo $tampil->tgl_lahir3;?><br><?php echo $tampil->tgl_lahir4;?><br><?php echo $tampil->tgl_lahir5;?><br><?php echo $tampil->tgl_lahir6;?><br><?php echo $tampil->tgl_lahir7;?><br><?php echo $tampil->tgl_lahir8;?><br><?php echo $tampil->tgl_lahir9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->agama_pengikut1;?><br><?php echo $tampil->agama_pengikut2;?><br><?php echo $tampil->agama_pengikut3;?><br><?php echo $tampil->agama_pengikut4;?><br><?php echo $tampil->agama_pengikut5;?><br><?php echo $tampil->agama_pengikut6;?><br><?php echo $tampil->agama_pengikut7;?><br><?php echo $tampil->agama_pengikut8;?><br><?php echo $tampil->agama_pengikut9;?><br>&nbsp;</td>
		<td width="150" align="left"><?php echo $tampil->pendidikan1;?><br><?php echo $tampil->pendidikan2;?><br><?php echo $tampil->pendidikan3;?><br><?php echo $tampil->pendidikan4;?><br><?php echo $tampil->pendidikan5;?><br><?php echo $tampil->pendidikan6;?><br><?php echo $tampil->pendidikan7;?><br><?php echo $tampil->pendidikan8;?><br><?php echo $tampil->pendidikan9;?><br>&nbsp;</td>
		<td width="150" align="left"><?php echo $tampil->pekerjaan1;?><br><?php echo $tampil->pekerjaan2;?><br><?php echo $tampil->pekerjaan3;?><br><?php echo $tampil->pekerjaan4;?><br><?php echo $tampil->pekerjaan5;?><br><?php echo $tampil->pekerjaan6;?><br><?php echo $tampil->pekerjaan7;?><br><?php echo $tampil->pekerjaan8;?><br><?php echo $tampil->pekerjaan9;?><br>&nbsp;</td>
	</tr>
</table></p>

<p style="margin-left:10" style="margin-right:10"><table border="0.5" align="center" cellspacing="0" cellpadding="0" style="margin-left:-20">
	<tr>
		<td width="20" align="center" rowspan="2">No</td>
		<td width="250" align="center" rowspan="2">Status Pernikahan</td>
		<td width="160" align="center" rowspan="2">Status Hubungan Dalam Keluarga</td>
		<td width="150" align="center" rowspan="2">Kewarganegaraan</td>
		<td width="150" align="center" colspan="2">Dokumen Imigrasi</td>
		<td width="150" align="center" colspan="2">Nama Orang Tua</td>
	</tr>
	<tr>
		<td width="130" align="center">No Paspor</td>
		<td width="150" align="center">No KITAS/KITAP</td>
		<td width="150" align="center">Ayah</td>
		<td width="150" align="center">Ibu</td>
	</tr>
	<tr>
		<td width="20" align="center">1</td>
		<td width="150" align="center">2</td>
		<td width="120" align="center">3</td>
		<td width="120" align="center">4</td>
		<td width="120" align="center">5</td>
		<td width="120" align="center">6</td>
		<td width="120" align="center">7</td>
		<td width="150" align="center">8</td>
	</tr>
	<tr>
		<td width="20" align="center">1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br>&nbsp;</td>
		<td width="150" align="left"><?php echo $tampil->status_kawin1;?><br><?php echo $tampil->status_kawin2;?><br><?php echo $tampil->status_kawin3;?><br><?php echo $tampil->status_kawin4;?><br><?php echo $tampil->status_kawin5;?><br><?php echo $tampil->status_kawin6;?><br><?php echo $tampil->status_kawin7;?><br><?php echo $tampil->status_kawin8;?><br><?php echo $tampil->status_kawin9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->hub_keluarga1;?><br><?php echo $tampil->hub_keluarga2;?><br><?php echo $tampil->hub_keluarga3;?><br><?php echo $tampil->hub_keluarga4;?><br><?php echo $tampil->hub_keluarga5;?><br><?php echo $tampil->hub_keluarga6;?><br><?php echo $tampil->hub_keluarga7;?><br><?php echo $tampil->hub_keluarga8;?><br><?php echo $tampil->hub_keluarga9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->kewarganegaraan1;?><br><?php echo $tampil->kewarganegaraan2;?><br><?php echo $tampil->kewarganegaraan3;?><br><?php echo $tampil->kewarganegaraan4;?><br><?php echo $tampil->kewarganegaraan5;?><br><?php echo $tampil->kewarganegaraan6;?><br><?php echo $tampil->kewarganegaraan7;?><br><?php echo $tampil->kewarganegaraan8;?><br><?php echo $tampil->kewarganegaraan9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->no_paspor1;?><br><?php echo $tampil->no_paspor2;?><br><?php echo $tampil->no_paspor3;?><br><?php echo $tampil->no_paspor4;?><br><?php echo $tampil->no_paspor5;?><br><?php echo $tampil->no_paspor6;?><br><?php echo $tampil->no_paspor7;?><br><?php echo $tampil->no_paspor8;?><br><?php echo $tampil->no_paspor9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->no_kitas1;?><br><?php echo $tampil->no_kitas2;?><br><?php echo $tampil->no_kitas3;?><br><?php echo $tampil->no_kitas4;?><br><?php echo $tampil->no_kitas5;?><br><?php echo $tampil->no_kitas6;?><br><?php echo $tampil->no_kitas7;?><br><?php echo $tampil->no_kitas8;?><br><?php echo $tampil->no_kitas9;?><br>&nbsp;</td>
		<td width="120" align="left"><?php echo $tampil->nm_ayah1;?><br><?php echo $tampil->nm_ayah2;?><br><?php echo $tampil->nm_ayah3;?><br><?php echo $tampil->nm_ayah4;?><br><?php echo $tampil->nm_ayah5;?><br><?php echo $tampil->nm_ayah6;?><br><?php echo $tampil->nm_ayah7;?><br><?php echo $tampil->nm_ayah8;?><br><?php echo $tampil->nm_ayah9;?><br>&nbsp;</td>
		<td width="150" align="left"><?php echo $tampil->nm_ibu1;?><br><?php echo $tampil->nm_ibu2;?><br><?php echo $tampil->nm_ibu3;?><br><?php echo $tampil->nm_ibu4;?><br><?php echo $tampil->nm_ibu5;?><br><?php echo $tampil->nm_ibu6;?><br><?php echo $tampil->nm_ibu7;?><br><?php echo $tampil->nm_ibu8;?><br><?php echo $tampil->nm_ibu9;?><br>&nbsp;</td>
	</tr>
</table></p>
<br>

<table  border="0" align="left">
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">Kepala Desa Sindanghurip</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">&nbsp;</td>
		<td width="50">&nbsp;</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="20" align="center">&nbsp;</td>
		<td width="200" align="left">&nbsp;</td>
		<td width="40">&nbsp;</td>
		<td width="150" align="center">&nbsp;</td>
		<td width="200">&nbsp;</td>
		<td width="230" align="center">Y O N I</td>
		<td width="50">&nbsp;</td>
	</tr>
</table>

</body>
</html>