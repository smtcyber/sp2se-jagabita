<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/cirebon.png'); ?>">
<title>..::Rekap Data Pernyataan Ramai::..</title>
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
<?php $this->load->view('template/header') ?>
<h4 style="text-align: center;">Rekap Data Pernyataan Ramai, Update Tanggal <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></h4><br><br>
<div id="tab1" class="tab_content">
<table width="300" class="table" align="center" cellpadding="0" cellspacing="0" border="1">
<thead align="center">
	<tr>
		<th max-width="50">No</th>
		<th max-width="250">Nama</th>
		<th max-width="180">No Ktp</th>
		<th max-width="200">Acara</th>
		<th width="180">Tanggal Surat</th>
	</tr>
</thead>
<tbody align="center">
<?php
if ( ! empty($ramai)) {
	$no = 1;
	foreach($ramai->result() as $tampil) {
		$Tgl=tgl_indo(date('Y-m-d', strtotime($tampil->tgl_surat)));
		echo "<tr>";
		echo "<td width=50>".$no."</td>";
		echo "<td width=250>".$tampil->nama."</td>";
		echo "<td width=180>".$tampil->no_ktp."</td>";
		echo "<td width=200>".$tampil->jenis_hiburan."</td>";
		echo "<td width=180>".$Tgl."</td>";
		echo "</tr>";
		$no++;
	}
}
?>
</tbody>
<tfoot>
	<tr bgcolor="#4e73df">
		<td colspan="4"><div align="center"><b>Jumlah Record</b></div></td>
		<td><div align="center"><b><?php echo $ramai->num_rows();?></b></div></td>
	</tr>
</tfoot>
</table>
</div>
<br>
<br>
<br>
</body>
</html>