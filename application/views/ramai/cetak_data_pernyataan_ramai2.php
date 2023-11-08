<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Pernyataan Keramaian</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN KERAMAIAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_ramai') ?>
<table border="0" align="center" style="line-height: 18px;">
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="650" align="justify" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini, Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?> ini menerangkan berdasarkan Permohonan dari Warga <?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> bahwa  :</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350">Indonesia</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4">Akan mengadakan acara  <b><?php echo $tampil->maksud;?></b>   pada : </td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Hari</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->hari_mulai;?> s/d <?php echo $tampil->hari_selesai;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Waktu Pelaksanaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->waktu_mulai))); ?> s/d <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->waktu_selesai))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Acara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->maksud;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Tempat</td>
		<td align="left" width="20" valign="top" >:</td>
		<td align="left" width="350"><?php echo $tampil->tmpt_pelaksanaan;?></td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="670" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada dasarnya kami tidak keberatan yang bersangkutan mengadakan acara tersebut diatas dengan ketentuan sebagai berikut : </td>
	    <td width="1">&nbsp;</td>
	</tr>
</table>
<table border="0" align="left" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="20" valign="top">1.</td>
		<td width="620" align="justify">Pada waktu dilaksanakan yang bersangkutan dapat menjaga keamanan dan ketertiban di lingkungan setempat dan dapat menghormati waktu – waktu ibadah, dalam menciptakan kerukunan beragama serta menjaga kebersihan lingkungan setelah selesai kegiatan</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="20" valign="top">2.</td>
		<td width="620" align="justify">Pada waktu dilaksanakan tidak melakukan Tindakan yang bertentangan dengan adat istiadat bangsa peraturan perundang- undangan yang berlaku </td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td width="670" align="justify" colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dan diberikan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya. Agar kepada yang berkepentingan dapat mengetahui dan menjadi maklum adanya.</td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
</table>

<table border="0" align="center">
	<tr>
		
		<td width="228" align="center" height="5"></td>
		<td width="35">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		
		<td width="228" align="center" height="5"></td>
		<td width="35">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center">&nbsp;</div></td>
	</tr>
	<tr>
		
		<td width="228" align="center" height="5">Mengetahui,</td>
		<td width="35">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center"><?php echo ucwords(strtolower($tampil->kelurahan)) ?> <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?>	</div></td>
	</tr>
	<tr>
		
		<td align="center" height="15">Ketua Rt. <?php echo ucwords(strtoupper($tampil->rt)) ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15"><?php echo $kepdes->jabatan; ?></td>
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
		
		<td align="center"><b><u>(<?php echo $tampil->nama;?>)</u></b></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
	</tr>
</table>
</body>
</html>