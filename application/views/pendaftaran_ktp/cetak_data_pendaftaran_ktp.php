<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/header1.jpg'); ?>">
<title>Pendaftaran KTP</title>
</head>
<body>

<br>
<table border="0" cellpadding="0" cellspacing="0" width="500" align="right" style="font-family: times;">
                <tr>
                    <td align="center" style="width: 50px; font-size: 18px;" border="1"><b>F-1.07</b></td>
					<td align="center" style="width: 30px; font-size: 18px;" border="0">&nbsp;</td>
                </tr>
            </table>
<table border="0" cellpadding="0" cellspacing="0" width="700" align="center" style="font-family: times;">
                <tr>
                    <td align="left" rowspan="5" style="width: 90px;"><img src="<?php echo base_url().'assets/logo/'.$header->logo ?>" width="63" height="74.9"></td>
                    <td align="center" style="width: 500px; font-size: 22px;"><b>FORMULIR KARTU TANDA PENDUDUK (KTP)</b></td>
                </tr>
            </table>

<table border="0" width="500" cellpadding="0" cellspacing="0" align="left" style="font-size: 13px; font-family: arial;">
    <tr>
		<td>&nbsp;</td>
	</tr>
    	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;" border="0">PEMERINTAH PROVINSI</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>3</b></td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>2</b></td>
		<td align="left" width="10"style="font-size: 13px;"border="0"><b>&nbsp;</b></td>
		<td align="left" width="10"style="font-size: 13px;"border="0"><b>&nbsp;</b></td>
		<td align="left" width="53"style="font-size: 13px;">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;"border="0.7"><b>Jawa Barat</b></td>
	</tr>
		<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;" border="0">PEMERINTAH KABUPATEN/KOTA</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>0</b></td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>1</b></td>
		<td align="left" width="10"style="font-size: 13px;"border="0"><b>&nbsp;</b></td>
		<td align="left" width="10"style="font-size: 13px;"border="0"><b>&nbsp;</b></td>
		<td align="left" width="53"style="font-size: 13px;">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;"border="0.7"><b><?php echo ucwords(strtolower($tampil->kabupaten)) ?></b></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;" border="0">KECAMATAN</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>0</b></td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>3</b></td>
		<td align="left" width="10"style="font-size: 13px;"border="0"><b>&nbsp;</b></td>
		<td align="left" width="10"style="font-size: 13px;"border="0"><b>&nbsp;</b></td>
		<td align="left" width="53"style="font-size: 13px;">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;"border="0.7"><b><?php echo ucwords(strtolower($tampil->kecamatan)) ?></b></td>
	</tr>
		<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;" border="0">DESA/KELURAHAN</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>2</b></td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>0</b></td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>0</b></td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7"><b>1</b></td>
		<td align="left" width="47"style="font-size: 13px;">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;"border="0.7"><b><?php echo ucwords(strtolower($tampil->kelurahan)) ?></b></td>
	</tr>
</table>
<table border="0" width="500" align="left" cellpadding="0" cellspacing="0" style="font-size: 13px; font-family: arial;">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="230"style="font-size: 13px;" border="0">PEMOHONAN KTP</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="left" width="350"style="font-size: 13px;"border="0.7"><?php echo $tampil->permohonan_ktp; ?></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
	</tr>
		<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="170"style="font-size: 13px;" border="0">1. Nama Lengkap</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="left" width="410"style="font-size: 13px;" border="0.7"><b><?php echo $tampil->nama;?></b></td>
	</tr>
		<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="170"style="font-size: 13px;" border="0">2. No. KK</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="left" width="410"style="font-size: 13px;" border="0.7"><?php echo $tampil->no_kk;?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="170"style="font-size: 13px;" border="0">3. NIK</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="left" width="410"style="font-size: 13px;" border="0.7"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="170"style="font-size: 13px;" border="0">4. Alamat</td>
		<td align="left" width="10"style="font-size: 13px;"border="0">:</td>
		<td align="left" width="410"style="font-size: 13px;" border="0.7"><?php echo ucwords(strtolower($tampil->dusun)) ?>, Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?>, Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?>, Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
	
</table>
<table border="0" width="500" align="left" cellpadding="0" cellspacing="0" style="font-size: 13px; font-family: arial;">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="230">&nbsp;</td>
		<td align="center" width="30"style="font-size: 13px;"border="0.7">RT</td>
		<td align="center" width="30"style="font-size: 13px;"border="0.7"><?php echo $tampil->rt;?></td>
		<td width="40">&nbsp;</td>
		<td align="center" width="30"style="font-size: 13px;"border="0.7">RW</td>
		<td align="center" width="30"style="font-size: 13px;"border="0.7"><?php echo $tampil->rw;?></td>
		<td width="40">&nbsp;</td>
		<td align="center" width="70"style="font-size: 13px;" border="0.7">Kode Pos</td>
		<td width="15">&nbsp;</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7">1</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7">6</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7">1</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7">2</td>
		<td align="center" width="10"style="font-size: 13px;"border="0.7">0</td>
	</tr>
</table>

<table border="0" width="500" align="left" cellpadding="0" cellspacing="0" style="font-size: 12px; font-family: arial;">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="center" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="170"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="230"style="font-size: 12px;"border="0">&nbsp;&nbsp;<?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="center" width="100"style="font-size: 12px;"border="0.7">Pas Photo (2x3)</td>
		<td align="center" width="100"style="font-size: 12px;"border="0.7">Cap Jempol</td>
		<td align="center" width="170"style="font-size: 12px;"border="0.7">Specimen Tanda Tangan</td>
		<td align="center" width="230"style="font-size: 12px;"border="0"><b>PEMOHON</b></td>
	</tr>
		<tr>
		<td width="40">&nbsp;</td>
		<td align="center" width="100"style="font-size: 60px;"border="0.7">&nbsp;</td>
		<td align="center" width="100"style="font-size: 60px;"border="0.7">&nbsp;</td>
		<td align="center" width="170"style="font-size: 60px;"border="0.7">&nbsp;</td>
		<td align="center" width="230"style="font-size: 60px;"border="0">&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="center" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="170"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="230"style="font-size: 12px;"border="0">&nbsp;&nbsp;<u><b><?php echo $tampil->nama;?></b></u></td>
	</tr>
</table>

<table border="0" width="500" align="left" cellpadding="0" cellspacing="0" style="font-size: 12px; font-family: arial;">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0.7">Tempat/Tgl Lahir</td>
		<td align="left" width="150"style="font-size: 12px;"border="0.7"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="160"style="font-size: 12px;"border="0">Mengetahui,</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0.7">Jenis Kelamin</td>
		<td align="left" width="150"style="font-size: 12px;"border="0.7"><?php echo $tampil->kelamin;?></td>
		<td align="center" width="160"style="font-size: 12px; text-transform: uppercase;"border="0"><b>CAMAT <?php echo ucwords(strtolower($tampil->kecamatan)) ?></b></td>
		<td align="center" width="160"style="font-size: 12px; text-transform: uppercase;"border="0"><b><?php echo $kepdes->jabatan; ?> <?php echo ucwords(strtolower($tampil->kelurahan))?></b></td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0.7">Agama</td>
		<td align="left" width="150"style="font-size: 12px;"border="0.7"><?php echo ucwords(strtolower($tampil->agama)) ?></td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0.7">Status</td>
		<td align="left" width="150"style="font-size: 12px;"border="0.7"><?php echo ucwords(strtolower($tampil->s_kawin)) ?></td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="150"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="150"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="150"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="160"style="font-size: 12px;"border="0">&nbsp;</td>
	</tr>
	<tr>
		<td width="40">&nbsp;</td>
		<td align="left" width="100"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="left" width="150"style="font-size: 12px;"border="0">&nbsp;</td>
		<td align="center" width="160"style="font-size: 12px;"border="0"><b>_______________</b></td>
		<td align="center" width="160"style="font-size: 12px;"border="0"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
	</tr>
</table>
</body>
</html>