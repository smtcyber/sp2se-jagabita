<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Keterangan Domisili Haji</title>
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
<?php $this->load->view('template/header_garuda_kios') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN</b></u><br></h3>
<br>
<br>
<?php $this->load->view('nomor_surat/no_haji') ?>
<br>
<?php $this->load->view('draf/yth_kios') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($data->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Bangsa / Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350">Indonesia / <?php echo $data->agama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->status_kawin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->no_ktp;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($data->dusun)) ?> RT <?php echo $data->rt;?> RW <?php echo $data->rw;?> Desa <?php echo ucwords(strtolower($data->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($data->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($data->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify"></td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Dengan ini menyatakan :</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="30" align="center" valign="top"></td>
		<td width="620" align="justify"></td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="30" align="center" valign="top">-</td>
		<td width="620" align="justify">Bahwa nama tersebut diatas benar warga kami dan sepengetahuan kami nama tersebut benar bertempat tinggal dan/atau berdomisili pada alamat diatas sebagaimana tercantum dalam Kartu Tanda Penduduk (KTP) Nomor : <?= $data->no_ktp ?> Tanggal dikeluarkan oleh Dinas Kependudukan dan Pencatatan Sipil Kabupaten <?php echo ucwords(strtolower($data->kabupaten)) ?></td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="30" align="center" valign="top">-</td>
		<td width="620" align="justify">Surat Pernyataan ini kami buat untuk melengkapi persyaratan administrasi Ibadah Haji</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify"></td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Demikian surat keterangan ini kami buat dan untuk dapat dipergunakan sebagaimana mestinya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		
		<td width="300" align="left" colspan="2" valign="bottom">DICATAT SESUAI PERMINTAAN</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	
	<tr>
		
		<td width="258" align="left" colspan="2" valign="bottom">PEMOHON</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="left">&nbsp;</div></td>
	</tr>
	<tr>
		
		<td width="258" align="left" colspan="2" valign="bottom">NOMOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="left"><?php echo ucwords(strtolower($data->kelurahan)) ?> <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></div></td>
	</tr>
	<tr>
		
		<td width="258" align="left" colspan="2" valign="bottom">TANGGAL&nbsp;:</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="left"><?php echo $kepdes->jabatan; ?></div></td>
	</tr>
	<tr>
		
		<td width="228" align="center" ></td>
		<td width="35">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		
		<td width="228" align="left" >Camat <?php echo ucwords(strtolower($data->kecamatan)) ?></td>
		<td width="35">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		
		<td align="center" height="15">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15">&nbsp;</td>
	</tr>
	<tr>
		
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		
		<td align="left"><b><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></b></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="left"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
	</tr>
	<tr>
		
		<td align="left">Nip :</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center">&nbsp;</td>
	</tr>
</table>
</body>
</html>