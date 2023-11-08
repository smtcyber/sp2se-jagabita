<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/cirebon.png'); ?>">
<title>..::Rekap Data Keterangan Tidak Mampu::..</title>
<style type="text/css">
body,td,th {
	font-size: 10px;
}
.table {
	border: thin;
}
.table td,th {
	border-bottom: solid;
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 12px;
}
.table th {
	background-color: white;
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
<br><br>
<table border="0" width="auto" align="center" style="font-size: 20px;">
	<tr>
		<td align="center" style="font-size: 17px; font-family: times;">FORMULIR PENDAFTARAN ( F1 )</td>
	</tr>
	<tr>
		<td align="center" style="font-size: 17px; font-family: times;">PENERIMA JAMINAN PELAYANAN KESEHATAN MASYARAKAT DAERAH BAGI</td>
	</tr>
	<tr>
		<td align="center" style="font-size: 17px; font-family: times;">KELUARGA MISKIN / KELUARGA PRA S DAN KS1</td>
	</tr>
	<tr>
		<td align="center" style="font-size: 17px; font-family: times;">( JAMKESMAS DAERAH )</td>
	</tr>
</table>
<br>
<table border="0.7" width="auto" align="center" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" width="160" style="font-size: 17px; font-family: times;">KECAMATAN : <br> <?php echo $tampil->kecamatan; ?></td>
		<td align="center" width="160" style="font-size: 17px; font-family: times;">KELURAHAN/DESA : <br> &nbsp;</td>
		<td align="center" width="160" style="font-size: 17px; font-family: times;">RT / RW : <br> &nbsp;</td>
		<td align="center" width="212" style="font-size: 17px; font-family: times;">RUMAH SAKIT : <br>&nbsp;</td>
	</tr>
	<tr>
		<td align="center" width="160" style="font-size: 17px; font-family: times;">KABUPATEN : <br> Cirebon</td>
		<td align="center" width="160" style="font-size: 17px; font-family: times;"><?php echo $tampil->dusun; ?></td>
		<td align="center" width="160" style="font-size: 17px; font-family: times;"><?php echo $tampil->rt; ?> / <?php echo $tampil->rw; ?></td>
		<td align="center" width="212" style="font-size: 17px; font-family: times;">&nbsp; <?php echo $tampil->rumah_sakit; ?></td>
	</tr>
</table><br>
<table width="300" class="table" align="center" cellpadding="0" cellspacing="0" border="0.7" style="font-size: 16px; font-family: times;">
<thead align="center">
	<tr>
		<td align="center" width="40">NO. URUT KK</td>
		<td align="center" width="45">NO. URUT JIWA</td>
		<td align="center" width="140">NAMA KK DAN ANGG. KELUARGA</td>
		<td align="center" width="30">L/P</td>
		<td align="center" width="70">STATUS K/B/J/D</td>
		<td align="center" width="90">TANGGAL LAHIR</td>
		<td align="center" width="140">HUB. KEL P/I/A/T</td>
		<td align="center" width="110">KET.</td>
	</tr>
</thead>
<tbody align="center">
<?php
if ( ! empty($sktm1)) {
	$no = 1;
	foreach($sktm1->result() as $tampil) {
		$Tgl=tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_1)));
		echo "<tr>";
		echo "<td width=40>".$no."</td>";
		echo "<td width=40>".$no."</td>";
		echo "<td width=140>".$tampil->nama_1."</td>";
		echo "<td width=30>".$tampil->kelamin_1."</td>";
		echo "<td width=70>".$tampil->status_1."</td>";
		echo "<td width=90>".$Tgl."</td>";
		echo "<td width=140>".$tampil->h_keluarga."</td>";
		echo "</tr>";
		$no++;
	}
}
?>
</tbody>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="228" height="5">&nbsp;</td>
		<td width="50">&nbsp;</td>
		<td width="140">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		<td align="left" style="font-size: 16px; font-family: times;">No :  <br>Mengetahui :<br>Ka. UPT. P2KB P3A<br>Kecamatan Sumber</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15" style="font-size: 16px; font-family: times;">Sindanghurip, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?><br><b>Kepala Desa Sindanghurip</b></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td align="left" style="font-size: 16px; font-family: times;">...............................................</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" style="font-size: 16px; font-family: times;"><b>CECEP ANDI JUWANDI, S.IP</b></td>
	</tr>
	<tr>
		<td align="left" style="font-size: 16px; font-family: times;">NIP. ...................................</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" style="font-size: 16px; font-family: times;">&nbsp;</td>
	</tr>
</table>
<table align="center">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="center" style="font-size: 16px; font-family: times;">Mengetahui :<br>Camat Sumber</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="center" style="font-size: 16px; font-family: times;">......................................</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="center" style="font-size: 16px; font-family: times;">NIP. ................................</td>
		<td>&nbsp;</td>
	</tr>
</table>
</body>
</html>