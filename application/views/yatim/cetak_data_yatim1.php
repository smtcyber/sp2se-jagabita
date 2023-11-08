<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Janda/Duda</title>
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
	if($tampil->kelamin == "Laki - laki"){
	  $status = "<b>DUDA</b>";
	}else {
	  $status = "<b>JANDA</b>";
	}
?>
</head>
<body>
<?php $this->load->view('template/header_garuda') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_yatim') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Bangsa / Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350">Indonesia / <?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->status_kawin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK/Nomor KTP</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->no_ktp;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Telah memohon keterangan :</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="center"><b>--------------------------------------------- YATIM ---------------------------------------------</b></td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Keterangan ini kami berikan dalam rangka untuk melengkapi persyaratan :</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify"><b><u><?= $tampil->keperluan ?></u></b></td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Keterangan ini kami berikan kepadanya dengan berdasarkan sepengetahuan dan pertimbangan :</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Bahwa nama tersebut benar warga kami dan bertempat tinggal pada alamat diatas, dan sepengetahuan kami bahwa nama tersebut benar anak yatim semenjak ayahnya yang bernama <b><i><?= $tampil->nama_ayah ?></i></b> meninggal dunia pada tahun <b><?= $tampil->tahun_meninggal ?></b></td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Dan berlaku sampai dengan tanggal : <b></b></td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Demikian surat keterangan ini kami buat dan untuk dapat dipergunakan sebagaimana mestinya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/atas_nama') ?>
</body>
</html>