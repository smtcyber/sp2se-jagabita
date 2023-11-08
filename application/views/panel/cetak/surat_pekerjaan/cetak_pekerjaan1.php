<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Ghoib</title>
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
	if($data->kelamin == "Laki - laki"){
	  $status = "<b>DUDA</b>";
	}else {
	  $status = "<b>JANDA</b>";
	}
?>
</head>
<body>
<br>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PERNYATAAN</b></u><br></h3>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Yang bertanda tangan di bawah ini :</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $data->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Tempat Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($data->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($data->kelamin)) ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Status Perkawinan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $data->status_kawin;?></td>
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
		<td width="620" align="justify">Menerangkan bahwa saat ini pekerjaan saya bukan lagi sebagai <b><?= $data->pekerjaan_lama ?></b> melainkan Sebagai <b><?= $data->pekerjaan_sekarang ?></b>. <br>Demikian surat pernyataan ini saya buat dalam keadaan sehat jasmani dan rohani, tanpa ada paksaan dari pihak manapun, dan dapat dipertanggungjawabkan.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<br>
<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
    <tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 30%;">Saksi Pernyataan</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;">
            <?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($data)) {
                    echo ucwords(strtolower($data->kabupaten)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($desa_ahli)) {
                    echo ucwords(strtolower($desa_ahli)). ', '. tgl_indo($tanggal_hari_ini);
            }
            
            ?>
        </td>
    </tr>
    <tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">Ketua RT</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;">Yang membuat</td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">_______________</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;"></td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">&nbsp;</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;"></td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">Ketua RW</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;"></td>
    </tr>
    <tr>
	<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">_______________</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"><b><u><?php echo $data->nama; ?></u></b></td>
    </tr>
    <tr>
		<td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;">&nbsp;</td>
        <td align="center" style="width: 45%;"></td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">&nbsp;</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"></td>
    </tr>
</table>
<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
    <tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 20%;"></td>
        <td align="center" style="width: 45%;">Mengetahui :</td>
        <td align="center" style="width: 25%;"></td>
	</tr>
	<tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 20%;"></td>
        <td align="center" style="width: 45%;"><?= $atas_nama->status ?></td>
        <td align="center" style="width: 25%;"></td>
	</tr>
	<tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 20%;"></td>
        <td align="center" style="width: 45%;"><b><?= $atas_nama->jabatan ?></b></td>
        <td align="center" style="width: 25%;"></td>
	</tr>
	<tr>
        <td style="height: 60px;">
        </td>
        <td style="height: 60px;">
        </td>
        <td style="height: 60px;">
        </td>
        <td style="height: 60px;">
        </td>
    </tr>
	<tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 20%;"></td>
        <td align="center" style="width: 45%;"><?= $atas_nama->atas_nama ?></td>
        <td align="center" style="width: 25%;"></td>
	</tr>
</table>
</body>
</html>