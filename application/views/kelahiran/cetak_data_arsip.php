<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Daftar Nikah</title>
<style type="text/css">
body,td,th {
	font-size: 16px;
	font-family: Times;
}
.table {
	border: thin;
}
.table td,th {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 16px;
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
<table border="0" width="700" align="justify">
	<tr>
		<td align="right" width="700">Kode Wilayah  :  <?php echo $tampil->kode_wilayah;?></td>
	</tr>
	<tr>
		<td align="left" width="700">Kode : F - 2.02<br>Pemerintah Kabupaten Cirebon<br>Kecamatan Sumber<br>Kelurahan Sindangwangi</td>
	</tr>
</table>
<table border="0" width="700" align="center">
	<tr>
		<td align="center" width="700" style="font-size: 20px;"><b>ARSIP UNTUK KECAMATAN/TEMPAT PEREKAM DATA</b></td>
	</tr>
	<tr>
		<td align="center" width="700" style="font-size: 20px;"><b>SURAT KETERANGAN KELAHIRAN</b></td>
	</tr>
	<tr>
		<td align="center" width="700">Nomor : 474.2 / ..... - Des / X / 2019</td>
	</tr>
</table>
<table border="0" width="700" align="justify">
	<tr>
		<td align="left" width="700">Nama Kepala Keluarga : <?php echo $tampil->nama;?> <br> Nomor Kartu Keluarga  : <?php echo $tampil->no_kk;?></td>
	</tr>
</table>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" colspan="4"><b>BAYI</b></td>
	</tr>
	<tr>
		<td width="20" align="left">1.</td>
		<td align="left" width="160">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nama_anak;?></td>
	</tr>
	<tr>
		<td width="20" align="left">2.</td>
		<td align="left" width="160">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->jenis_kelamin_anak;?></td>
	</tr>
	<tr>
		<td width="20" align="left">3.</td>
		<td align="left" width="160">Tempat Dilahirkan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->tempat_kelahiran;?></td>
	</tr>
	<tr>
		<td width="20" align="left">4.</td>
		<td align="left" width="160">Tempat Kelahiran</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->tempat_lahir;?></td>
	</tr>
	<tr>
		<td width="20" align="left">5.</td>
		<td align="left" width="160">Hari dan tanggal lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->hari_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="20" align="left">6.</td>
		<td align="left" width="160">Pukul</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->jam_lahir;?></td>
	</tr>
	<tr>
		<td width="20" align="left">7.</td>
		<td align="left" width="160">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->jenis_kelamin_anak;?></td>
	</tr>
	<tr>
		<td width="20" align="left">8.</td>
		<td align="left" width="160">Kelahiran ke</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->kelahiran_ke;?></td>
	</tr>
	<tr>
		<td width="20" align="left">9.</td>
		<td align="left" width="160">Penolong Kelahiran</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->penolong_kelahiran;?></td>
	</tr>
	<tr>
		<td width="20" align="left">10.</td>
		<td align="left" width="160">Berat Bayi</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->berat_bayi;?></td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" colspan="4"><b>IBU</b></td>
	</tr>
	<tr>
		<td width="20" align="left">1.</td>
		<td align="left" width="160">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->no_ktp_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">2.</td>
		<td align="left" width="160">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nama_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">3.</td>
		<td align="left" width="160">Tanggal Lahir/Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ibu))); ?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">Umur : <?php echo $tampil->umur_ibu;?></td>
	</tr>
	<tr>
		<td width="20" align="left">4.</td>
		<td align="left" width="160">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->pekerjaan_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">5.</td>
		<td align="left" width="160">Alamat</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->alamat_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">RT : <?php echo $tampil->rt_ibu;?> &nbsp;&nbsp;&nbsp;RW <?php echo $tampil->rw_ibu;?></td>
	</tr>
	<tr>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="160">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="250">Kelurahan : <?php echo $tampil->kelurahan_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">Kota : <?php echo $tampil->kota_ibu;?></td>
	</tr>
	<tr>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="160">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="250">Kecamatan : <?php echo $tampil->kecamatan_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">Propinsi : <?php echo $tampil->propinsi_ibu;?></td>
	</tr>
	<tr>
		<td width="20" align="left">6.</td>
		<td align="left" width="160">Kewarganegaraan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->kewarganegaraan_ibu;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">7.</td>
		<td align="left" width="160">Tgl Pencatatan kawin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_catat_kawin))); ?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" colspan="4"><b>AYAH</b></td>
	</tr>
	<tr>
		<td width="20" align="left">1.</td>
		<td align="left" width="160">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->no_ktp_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">2.</td>
		<td align="left" width="160">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nama_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">3.</td>
		<td align="left" width="160">Tanggal Lahir/Umur</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ayah))); ?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">Umur : <?php echo $tampil->umur_ayah;?></td>
	</tr>
	<tr>
		<td width="20" align="left">4.</td>
		<td align="left" width="160">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->pekerjaan_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">5.</td>
		<td align="left" width="160">Alamat</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->alamat_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">RT : <?php echo $tampil->rt_ayah;?> &nbsp;&nbsp;&nbsp;RW <?php echo $tampil->rw_ayah;?></td>
	</tr>
	<tr>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="160">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="250">Kelurahan : <?php echo $tampil->kelurahan_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">Kota : <?php echo $tampil->kota_ayah;?></td>
	</tr>
	<tr>
		<td width="20" align="left">&nbsp;</td>
		<td align="left" width="160">&nbsp;</td>
		<td align="left" width="20">&nbsp;</td>
		<td align="left" width="250">Kecamatan : <?php echo $tampil->kecamatan_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td align="left" width="200">Propinsi : <?php echo $tampil->propinsi_ayah;?></td>
	</tr>
	<tr>
		<td width="20" align="left">6.</td>
		<td align="left" width="160">Kewarganegaraan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->kewarganegaraan_ayah;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" colspan="4"><b>Pelapor</b></td>
	</tr>
	<tr>
		<td width="20" align="left">1.</td>
		<td align="left" width="160">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nik_pelapor;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" align="left">2.</td>
		<td align="left" width="160">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nama_pelapor;?></td>
		<td width="10">&nbsp;</td>
		<td width="10">&nbsp;</td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" colspan="4"><b>Saksi 1</b></td>
	</tr>
	<tr>
		<td width="20" align="left">1.</td>
		<td align="left" width="160">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nik_saksi1;?></td>
	</tr>
	<tr>
		<td width="20" align="left">2.</td>
		<td align="left" width="160">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nama_saksi1;?></td>
	</tr>
</table><br>
<table border="0" width="auto" align="left">
	<tr>
		<td align="left" colspan="4"><b>Saksi 2</b></td>
	</tr>
	<tr>
		<td width="20" align="left">1.</td>
		<td align="left" width="160">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nik_saksi2;?></td>
	</tr>
	<tr>
		<td width="20" align="left">2.</td>
		<td align="left" width="160">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="250"><?php echo $tampil->nama_saksi2;?></td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td width="228" height="5">&nbsp;</td>
		<td width="50">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15">Sindanghurip, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?><br><b>Kuwu Sidawangi</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td><div align="center">&nbsp;</div></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><div align="center">CECEP ANDI JUWANDI, S.IP</div></td>
	</tr>
</table>
</body>
</html>