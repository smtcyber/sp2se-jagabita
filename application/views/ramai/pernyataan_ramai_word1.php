<html>
<head>
    <?php

    $nama_file = "pernyataan_ramai.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
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
<?php $this->load->view('template/header_kios') ?>
<br>
<table border="0" align="center" style="line-height: 18px;">
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="650" align="justify" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, dengan ini Mengijinkan Acara Hajatan kepada saudara :</td>
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
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->agama;?></td>
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
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Maksud</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="350" style="line-height: 23px;"><?php echo $tampil->maksud;?></td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4">Yang akan dilaksanakan pada :</td>
	</tr>
	<tr>
		<td colspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Hari</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->hari_mulai;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tanggal</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->waktu_mulai))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kegiatan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->jenis_hiburan;?></td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="670" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertempat di <?php echo $tampil->tmpt_pelaksanaan;?> <b><?php echo $tampil->dusun1;?></b> Rt <?php echo $tampil->rt1;?>/<?php echo $tampil->rw1;?>   Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>.</td>
	    <td width="1">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="670" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat permohonan Izin di buat dengan sebenarnya dan untuk dijadikan bahan pertimbangan sepenuhnya.</td>
	    <td width="1">&nbsp;</td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
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
		
		<td width="228" align="center" height="5">&nbsp;</td>
		<td width="35">&nbsp;</td>
		<td width="100">&nbsp;</td>
		<td width="298"><div align="center"><?php echo ucwords(strtolower($tampil->kelurahan)) ?> <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?>	</div></td>
	</tr>
	<tr>
		
		<td align="center" height="15">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center" height="15"><?php echo $atas_nama->jabatan; ?></td>
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
		
		<td align="center">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="center"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
	</tr>
</table>
</body>
</html>