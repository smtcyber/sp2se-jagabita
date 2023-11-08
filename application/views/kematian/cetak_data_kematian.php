<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Keterangan Kematian</title>
<style type="text/css">
body {
    font-size: 18px;
    font-family: Times;

}
.container1 {
	padding-bottom: 50px;
}
.container {
    border: 4px double; /* Lebar 2px, jenis solid, warna merah */
	padding: 5px;
	font-size: 18px;
    font-family: Times;
    margin: auto;
}

.table {
    border: thin;
}
.table td, th {
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 18px;
}
.table th {
    background-color: #4e73df;
}
h1, h2, h3, h4, h5 {
    margin: 0;
}
</style>
</head>
<body>
	<div class="container1">

	</div>
<div class="container">
<table border="0" align="center" style="font-size: 24px;">
	<tr>
		<td align="center" width="600"><b>PEMERINTAH KABUPATEN  <?php echo strtoupper($tampil->kabupaten); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600" style="font-size: 16px;" ><b>KECAMATAN  <?php echo strtoupper($tampil->kecamatan); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600"><b>KEPALA DESA  <?php echo strtoupper($tampil->kelurahan); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600" style="font-size: 14px;">Alamat :<?php echo $header->alamat; ?></td>
	</tr>
</table>
<hr>
<br>
<br>
  <h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN KEMATIAN</b></u></h3>
  <?php $this->load->view('nomor_surat/no_kematian') ?>
  <br>
  <table border="0" align="center">
	<tr>
		<td align="left" width="650">Yang  bertanda tangan dibawah ini, Menerangkan bahwa </td>
	</tr>
	<tr>
		<td align="left" width="650">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" width="650">Yang bertanda tangan di bawah ini Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?>  Kabupaten  <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, Menerangkan bahwa :</td>
	</tr>
	<tr>
		<td align="left" width="650">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td align="left" width="150">Nama</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td align="left" width="150">Tempat Tgl Lahir</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td align="left" width="150">Jenis Kelamin</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td align="left" width="150">Warganegara</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450">Indonesia </td>
	</tr>
	<tr>
		<td align="left" width="150">Agama</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td align="left" width="150">Pekerjaan</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td align="left" width="150">Status Perkawinan</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="450"><?php echo $tampil->status_kawin;?></td>
	</tr>
	<tr>
		<td align="left" width="150" valign="top">Alamat</td>
		<td align="right" width="30" valign="top">:&nbsp;</td>
		<td align="left" width="450"><?php echo ucwords(strtolower($tampil->dusun)) ?> Rt.<?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
	<tr>
		<td align="left" colspan="3" >Telah Meninggal Dunia pada hari</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td align="left" width="180">Hari</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="420"><?php echo $tampil->hari_meninggal; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Tanggal</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="420"><?php echo $tampil->tanggal_meninggal; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Meninggal Dunia</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="420">Di <?php echo $tampil->bertempat_di; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Tempat Tinggal</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="420"><?php echo ucwords(strtolower($tampil->dusun)) ?> Rt.<?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Disebabkan Karena</td>
		<td align="right" width="30">:&nbsp;</td>
		<td align="left" width="420"><?php echo $tampil->penyebab; ?></td>
	</tr>
	<tr>
		<td align="left" colspan="3" >&nbsp;</td>
	</tr>
	<tr>
		<td align="left" colspan="3" width="630" >Demikian surat keterangan ini kami buat dengan sebenarnya agar dapat dipergunakan sebagai mana mestinya.</td>
	</tr>
</table>
  <br>
  <br>
  <?php $this->load->view('template/kepdes') ?>
</div>
</body>
