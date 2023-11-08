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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN GHOIB</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_ghoib') ?>
<br>
<?php $this->load->view('draf/yth') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">NIK/Nomor KTP</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->no_ktp;?></b></td>
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
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Dengan ini menerangkan :</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Bahwa benar yang bersangkutan di atas pernah tinggal di alamat tersebut, tetapi sejak kurang lebih <?= $tampil->keperluan ?> kebelakang sampai sekarang sudah tidak diketahui lagi alamat dan keberadaannya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Demikian surat keterangan ini kami buat, dan untuk dapat dipergunakan sebagaimana mestinya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;">
            <?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($tampil)) {
                    echo ucwords(strtolower($tampil->kabupaten)). ', '. tgl_indo($tanggal_hari_ini);
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
        <td align="left" style="width: 30%;">Ketua RT</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 38%;"><?php echo $atas_nama->status; ?></td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;"></td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 35%;"><b><?php echo $atas_nama->jabatan; ?></b></td>
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
        <td align="left" style="width: 30%;">_______________</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
    </tr>
    <tr>
		<td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;">&nbsp;</td>
        <td align="center" style="width: 45%;"></td>
    </tr>
    <tr>
		<td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;">&nbsp;</td>
        <td align="center" style="width: 45%;"></td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;">&nbsp;</td>
        <td align="center" style="width: 45%;"></td>
    </tr>
	<tr>
		<td style="width: 5%"></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"></td>
    </tr>
    <tr>
		<td style="width: 5%"></td>
        <td align="left" style="width: 30%;">Ketua RW</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"></td>
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
        <td align="left" style="width: 30%;">_______________</td>
        <td align="center" style="width: 15%;"></td>
        <td align="center" style="width: 45%;"></td>
    </tr>
</table>
</body>
</html>