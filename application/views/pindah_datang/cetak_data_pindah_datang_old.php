<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Pindah Datang</title>
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
<table align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
</table>
<br>
<table border="0" width="100" align="center">
<tr>
	<td width="80" align="left"><img src="<?php echo base_url('assets/images/cirebon.png'); ?>" width="80" height="97"></td>
	<td height="10" width="580"><h2 align="center">PEMERINTAH KABUPATEN MAJALENGKA<br>
	KECAMATAN BANTARUJEG</h2><br><p style="text-align: center; font-family: Times; font-size: 28px; margin-top:-17; margin-left:10"><b>KANTOR KEPALA DESA SINDANGHURIP</b></p>
	<p style="text-align: center; font-family: Times; font-size: 15px; margin-top:-27; margin-left:10">Alamat : Jln. Raya Sindanghurip No.01 Desa Sindanghurip - Bantarujeg Kode Pos 45464</p></td>
</tr>
</table><hr><hr style="margin-top:-12">
<table border="0" width="auto" align="justify" style="font-size: 14px;">
	<tr>
		<td align="justify"><b>DATA ALAMAT ASAL</b></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td width="15" style="font-size: 14px;">1.</td>
		<td align="left" style="font-size: 14px;" width="140">Nomor Kartu Keluarga</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->no_kk;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">2.</td>
		<td align="left" style="font-size: 14px;" width="140">Nama Kepala Keluarga</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">3.</td>
		<td align="left" style="font-size: 14px;" width="140">Alamat</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kelurahan;?></td>
		<td align="left" style="font-size: 14px;" width="35">RT :</td>
		<td align="left" style="font-size: 14px;" width="30"><?php echo $tampil->rt;?></td>
		<td align="left" style="font-size: 14px;" width="35">RW :</td>
		<td align="left" style="font-size: 14px;" width="30"><?php echo $tampil->rw;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kelurahan/Desa</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->dusun;?></td>
		<td align="left" style="font-size: 14px;" width="100">Kota/Kabupaten</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="100">Cirebon</td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kecamatan</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kecamatan;?></td>
		<td align="left" style="font-size: 14px;" width="100">Propinsi</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->propinsi_asal;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kode Pos</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kode_pos_asal;?></td>
		<td align="left" style="font-size: 14px;" width="100">Telepon</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->telepon_asal;?></td>
	</tr>
</table>
<table border="0" width="auto" align="justify" style="font-size: 14px;">
	<tr>
		<td align="justify"><b>DATA KEPINDAHAN</b></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td width="15" style="font-size: 14px;">1.</td>
		<td align="left" style="font-size: 14px;" width="140">Alasan Pindah</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->alasan_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">2.</td>
		<td align="left" style="font-size: 14px;" width="140">Alamat</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->alamat_tujuan_pindah;?></td>
		<td align="left" style="font-size: 14px;" width="35">RT :</td>
		<td align="left" style="font-size: 14px;" width="30"><?php echo $tampil->rt_tujuan_pindah;?></td>
		<td align="left" style="font-size: 14px;" width="35">RW :</td>
		<td align="left" style="font-size: 14px;" width="30"><?php echo $tampil->rw_tujuan_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kelurahan/Desa</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kelurahan_tujuan_pindah;?></td>
		<td align="left" style="font-size: 14px;" width="100">Kota/Kabupaten</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->kota_tujuan_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kecamatan</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kecamatan_tujuan_pindah;?></td>
		<td align="left" style="font-size: 14px;" width="100">Kota/Propinsi</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->propinsi_tujuan_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kode Pos</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kode_pos_tujuan_pindah;?></td>
		<td align="left" style="font-size: 14px;" width="100">Telepon</td>
		<td align="left" style="font-size: 14px;" width="15">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->telepon_tujuan_pindah;?></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td width="15" style="font-size: 14px;">3.</td>
		<td align="left" style="font-size: 14px;" width="140">Klasifikasi Pindah</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="300"><?php echo $tampil->klasifikasi_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">4.</td>
		<td align="left" style="font-size: 14px;" width="140">Jenis Kepindahan</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="300"><?php echo $tampil->jenis_kepindahan;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">5.</td>
		<td align="left" style="font-size: 14px;" width="140">Status No KK</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="300"><?php echo $tampil->status_no_kk_tidak_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Bagi Yang Tidak Pindah</td>
		<td align="left" style="font-size: 14px;" width="20">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="300">&nbsp;</td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">6.</td>
		<td align="left" style="font-size: 14px;" width="140">Status No KK</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="300"><?php echo $tampil->status_no_kk_pindah;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Bagi Yang Pindah</td>
		<td align="left" style="font-size: 14px;" width="20">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="300">&nbsp;</td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">7.</td>
		<td align="left" style="font-size: 14px;" width="140">Rencana Tanggal Pindah</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="300"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->rencana_tanggal_pindah))); ?></td>
	</tr>
</table><br>
<table border="0.5" width="600" align="center" style="font-size: 12px;" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><b>NIK</b></td>
		<td align="center" width="200" style="font-size: 12px;"><b>Nama Lengkap</b></td>
		<td align="center" width="200" style="font-size: 12px;"><b>Hub. Keluarga</b></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut1;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut1;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut1;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut2;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut2;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut2;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut3;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut3;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut3;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut4;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut4;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut4;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut5;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut5;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut5;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut6;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut6;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut6;?></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;<br>Pemohon</td>
		<td align="center" width="200" style="font-size: 14;">Dikeluarkan Oleh :<br>Kepala Desa<br>No.....<?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">(...................................)</td>
		<td align="center" width="200" style="font-size: 14;">(...................................)</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">NIP ..............................</td>
	</tr>
</table>
<table border="0" width="auto" align="justify" style="font-size: 14px;">
	<tr>
		<td align="justify"><b>DATA ALAMAT TUJUAN</b></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td width="15" style="font-size: 14px;">1.</td>
		<td align="left" style="font-size: 14px;" width="140">Nomor Kartu Keluarga</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->no_kk_tujuan;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">2.</td>
		<td align="left" style="font-size: 14px;" width="140">Nama Kepala Keluarga</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->nama_kep_tujuan;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">3.</td>
		<td align="left" style="font-size: 14px;" width="140">NIK Kepala Keluarga</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->nik_kepala_keluarga;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">4.</td>
		<td align="left" style="font-size: 14px;" width="140">Status No KK</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->status_no_kk_tujuan;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">5.</td>
		<td align="left" style="font-size: 14px;" width="140">Tanggal Kedatangan</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="300"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_kedatangan))); ?></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td width="15" style="font-size: 14px;">6.</td>
		<td align="left" style="font-size: 14px;" width="140">Alamat</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->alamat_tujuan;?></td>
		<td align="left" style="font-size: 14px;" width="35">RT :</td>
		<td align="left" style="font-size: 14px;" width="30"><?php echo $tampil->rt_tujuan;?></td>
		<td align="left" style="font-size: 14px;" width="35">RW :</td>
		<td align="left" style="font-size: 14px;" width="30"><?php echo $tampil->rw_tujuan;?></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kelurahan/Desa</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kelurahan_tujuan;?></td>
		<td align="left" style="font-size: 14px;" width="100">Kota/Kabupaten</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->kota_tujuan;?></td>
	</tr>
	<tr>
		<td width="15" style="font-size: 14px;">&nbsp;</td>
		<td align="left" style="font-size: 14px;" width="140">Kecamatan</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="140"><?php echo $tampil->kecamatan_tujuan;?></td>
		<td align="left" style="font-size: 14px;" width="100">Kota/Propinsi</td>
		<td align="left" style="font-size: 14px;" width="20">:</td>
		<td align="left" style="font-size: 14px;" width="100"><?php echo $tampil->propinsi_tujuan;?></td>
	</tr>
</table><br>
<table border="0.5" width="600" align="center" style="font-size: 12px;" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><b>NIK</b></td>
		<td align="center" width="200" style="font-size: 12px;"><b>Nama Lengkap</b></td>
		<td align="center" width="200" style="font-size: 12px;"><b>Hub. Keluarga</b></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut_tujuan1;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut_tujuan1;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut_tujuan1;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut_tujuan2;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut_tujuan2;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut_tujuan2;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut_tujuan3;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut_tujuan3;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut_tujuan3;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut_tujuan4;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut_tujuan4;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut_tujuan4;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut_tujuan5;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut_tujuan5;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut_tujuan5;?></td>
	</tr>
	<tr>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nik_pengikut_tujuan6;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->nama_pengikut_tujuan6;?></td>
		<td align="center" width="200" style="font-size: 12px;"><?php echo $tampil->hubkeluarga_pengikut_tujuan6;?></td>
	</tr>
</table>
<table border="0" width="auto" align="left" style="font-size: 14px;">
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;<br>Pemohon</td>
		<td align="center" width="200" style="font-size: 14;">Dikeluarkan Oleh :<br>Kepala Desa<br>No.....<?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">(...................................)</td>
		<td align="center" width="200" style="font-size: 14;">(...................................)</td>
	</tr>
	<tr>
		<td align="center" width="250" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">&nbsp;</td>
		<td align="center" width="200" style="font-size: 14;">NIP ..............................</td>
	</tr>
</table>
</body>
</html>