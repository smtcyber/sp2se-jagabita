<html>
    <?php

    $nama_file = "penghasilan.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
<head>
</head>
<body>
<?php $this->load->view('template/header_word') ?>
<h3 style="text-align: center; font-family: arial;"><u><b>SURAT KETERANGAN PENGHASILAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_penghasilan') ?>
<?php $this->load->view('draf/yth') ?>
<table border="0" align="left" style="font-size: 16px; font-family: arial;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Nomor Induk Kependudukan</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Nomor Kartu Keluarga</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo $tampil->no_kk;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->kelamin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Agama</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->agama)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Pendidikan</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo $tampil->pendidikan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->pekerjaan)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->status_kawin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Nama Orang Tua</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"> ............... / ...............</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="340" style="line-height: 21px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT : <?php echo $tampil->rt;?> / RW : <?php echo $tampil->rw;?><br>Desa : <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan : <?php echo ucwords(strtolower($tampil->kecamatan)) ?><br> Kabupaten : <?php echo ucwords(strtolower($tampil->kabupaten)) ?> Propinsi : Jawa Barat</td>
	</tr>
</table>
<table border="0" align="justify" style="line-height: 21px; font-family: arial; font-size: 16px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan pengetahuan kami dan tampil yang ada benar bahwa yang bersangkutan Penduduk Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?> dan:</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 21px; font-family: arial; font-size: 16px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="620" align="center"><b>== Benar mempunyai penghasilan rata-rata sebesar Rp. <?php echo number_format($tampil->penghasilan,0,",","."); ?> /bulan ==</b></td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 21px; font-family: arial; font-size: 16px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat keterangan ini digunakan untuk :</td>
		<td width="20">&nbsp;</td>
	</tr>
	<tr>
		<td width="20">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil->keperluan;?></td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 21px; font-family: arial; font-size: 16px;">
	<tr>
		<td width="20">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian keterangan ini, untuk dipergunakan sebagaimana mestinya.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<?php $this->load->view('template/kepdes') ?>
</body>
</html>