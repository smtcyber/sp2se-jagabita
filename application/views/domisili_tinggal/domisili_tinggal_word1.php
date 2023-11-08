<html>
    <?php

    $nama_file = "domtinggal.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
<head>
<title>Cetak Surat Domisili Tinggal</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN DOMISILI</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_domtinggal') ?>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td style="font-size: 16px;"  width="620" align="justify"> &nbsp; &nbsp; Yang bertanda tangan dibawah ini Kepala <?php echo ucwords(strtolower($header->jabatan))?> <?php echo ucwords(strtolower($header->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, menerangkan bahwa :
</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td style="font-size: 16px;" width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200">Nama</td>
		<td style="font-size: 16px;" align="left" width="20">:</td>
		<td style="font-size: 16px;" align="left" width="350"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200">Tempat Tanggal Lahir</td>
		<td style="font-size: 16px;" align="left" width="20">:</td>
		<td style="font-size: 16px;" align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200">Jenis Kelamin</td>
		<td style="font-size: 16px;" align="left" width="20">:</td>
		<td style="font-size: 16px;" align="left" width="350"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200">Warganegara</td>
		<td style="font-size: 16px;" align="left" width="20">:</td>
		<td style="font-size: 16px;" align="left" width="350">Indonesia</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200">Agama</td>
		<td style="font-size: 16px;" align="left" width="20">:</td>
		<td style="font-size: 16px;" align="left" width="350"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200">Pekerjaan</td>
		<td style="font-size: 16px;" align="left" width="20">:</td>
		<td style="font-size: 16px;" align="left" width="350"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td style="font-size: 16px;" align="left" width="200" valign="top">Alamat</td>
		<td style="font-size: 16px;" align="left" width="20" valign="top">:</td>
		<td style="font-size: 16px;" align="justify" width="350" style="line-height: 18px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> Rt <?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
</table>

<br>

<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td style="font-size: 16px;" width="620" align="justify"> &nbsp; &nbsp; Menerangkan bahwa benar Nama tersebut di atas adalah warga kami yang <b>Berdomisili</b> di <?php echo ucwords(strtolower($tampil->dusun)) ?> Rt <?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>,</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>

<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td style="font-size: 16px;" width="620" align="left">Demikian Surat Keterangan ini dibuat dan dapat dipergunakan sebagaimana mestinya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>

<br>
<br>
<br>
<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 30%;">&nbsp;</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;">
            <?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($tampil)) {
                    echo ucwords(strtolower($tampil->kelurahan)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($desa_ahli)) {
                    echo ucwords(strtolower($desa_ahli)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($data)) {
                    echo ucwords(strtolower($data->kabupaten)). ', '. tgl_indo($tanggal_hari_ini);
            }
                
            ?>
        </td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 30%;">&nbsp;</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;"><?php echo $atas_nama->jabatan; ?></td>
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
        <td align="center" style="width: 30%;"> &nbsp;</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"><?php echo $atas_nama->pangkat; ?></td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"><?php echo $atas_nama->nip; ?></td>
    </tr>
</table>

</body>
</html>