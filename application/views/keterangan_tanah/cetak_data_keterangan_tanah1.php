<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Kepemilikan Tanah</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_keterangan_tanah') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center" >
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20">1.</td>
		<td align="justify" width="550">Bahwa benar Tn/Ny <b><?= $tampil->nama ?></b> mempunyai dan/atau menguasai sebidang tanah seluas : <?= $tampil->luas_tanah ?> m<sup>2</sup> berdiri bangunan rumah tinggal seluas <?= $tampil->luas_rumah?> m<sup>2</sup> yang terletak di <?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?= $tampil->rt ?>/<?= $tampil->rw ?> <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>.</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20"></td>
		<td align="justify" width="550"></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20">2.</td>
		<td align="justify" width="550">Bahwa SPPT PBB NOP. <?php echo $tampil->no_objek_pajak;?>. Adapun pemecahan data sebagai berikut :</td>
	</tr>
</table>
<br>
<table border="0" align="center" >
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20"></td>
		<td align="left" valign="top" width="20">- </td>
		<td align="left" valign="top" width="170">Nama Wajib Pajak</td>
		<td align="left" valign="top" width="20">:</td>
		<td align="justify" width="300"><?= $tampil->nama ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20"></td>
		<td align="left" valign="top" width="20">- </td>
		<td align="left" valign="top" width="170">Luas Bumi</td>
		<td align="left" valign="top" width="20">:</td>
		<td align="justify" width="300"><?= $tampil->luas_tanah ?> m<sup>2</sup></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20"></td>
		<td align="left" valign="top" width="20">- </td>
		<td align="left" valign="top" width="170">Luas Bangunan</td>
		<td align="left" valign="top" width="20">:</td>
		<td align="justify" width="300"><?= $tampil->luas_rumah ?> m<sup>2</sup></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20"></td>
		<td align="left" valign="top" width="20">- </td>
		<td align="left" valign="top" width="170">Alamat Objek</td>
		<td align="left" valign="top" width="20">:</td>
		<td align="justify" width="300"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?= $tampil->rt ?>/<?= $tampil->rw ?> <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" valign="top" width="20">3.</td>
		<td align="justify" width="550">Sehubungan hal tersebut, maka dengan ini kami mohon kepada Kepala UPT Pajak Untuk dapat <b> <?= $tampil->keperluan ?></b>. SPPT PBB atas nama dimaksud.</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px; ">
	<tr>
		<td width="40">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini kami buat dengan sebenarnya Kepada yang berkepentingan agar menjadi maklum dan harap dipergunakan sebagaimana mestinya.</td>
		<td width="40">&nbsp;</td>
	</tr>
</table>
<br><br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>