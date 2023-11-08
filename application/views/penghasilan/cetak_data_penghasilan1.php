<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Keterangan Penghasilan</title>
</head>
<body>
<?php $this->load->view('template/header_garuda') ?>
<h3 style="text-align: center; font-family: arial;"><u><b>SURAT KETERANGAN PENGHASILAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_penghasilan') ?>
<table border="0" align="justify" style="line-height: 21px; font-family: arial; font-size: 16px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Yang bertanda tangan dibawah ini Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, menerangkan dengan sesungguhnya bahwa :</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="left" style="font-size: 16px; font-family: arial;">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Nama Lengkap</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->kelamin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230">Bangsa / Agama</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340">Indonesia / <?php echo ucwords(strtolower($tampil->agama)) ?></td>
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
		<td align="left" width="230">NIK/Nomor KTP</td>
		<td align="left" width="20">:</td>
		<td align="justify" width="340"><b><?php echo $tampil->no_ktp;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="230" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="justify" width="340" style="line-height: 21px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> / RW <?php echo $tampil->rw;?><br>Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?><br> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 21px; font-family: arial; font-size: 16px;">
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
		<td width="620" align="justify">Bahwa nama tersebut diatas benar warga kami dan bertempat tinggal pada alamat diatas, dan menurut keterangan yang bersangkutan bahwa nama tersebut perkerjaannya adalah <?php echo $tampil->pekerjaan; ?>. dan berpenghasilan Tetap sebesar <b>Rp. <?php echo $tampil->penghasilan ?> /bulan</b></td>
		<td width="20">&nbsp;</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;</td>
		<td width="20">&nbsp;</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Surat keterangan ini kami berikan untuk <b><?php echo $tampil->keperluan ?></b></td>
		<td width="20">&nbsp;</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;</td>
		<td width="20">&nbsp;</td>
	</tr>
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