<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Domisili Usaha</title>
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
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN DOMISILI USAHA</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_domusaha') ?>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertandatangan dibawah ini Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>,Menerangkanbahwa.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
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
		<td align="left" width="200">Tempat, Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350">Indonesia</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->agama;?></td>
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
		<td width="620" align="justify">dibawah ini :</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Nama Perusahaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->nama_perusahaan;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Jenis Usaha</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->jenis_usaha ?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat Perusahaan</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="350"><?php echo $tampil->alamat_perusahaan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">No Hp/Telpon</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><b><?php echo $tampil->no_telp;?></b></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Status Bangunan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->status_bangunan;?></td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td align="left" width="200">Penanggung Jawab</td>
		<td align="left" width="20">:</td>
		<td align="left" width="350"><?php echo $tampil->penanggung_jawab;?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Surat Keterangan Domisili ini berlaku 1 ( Satu ) Tahun sejak dikeluarkan. Surat Keterangan ini bukan merupakan ijin tetap melainkan awal dari proses perijinan.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="30">&nbsp;</td>
		<td width="620" align="justify">Demikian surat keterangan ini dibuat, untuk di pergunakan sebagaimana mestinya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
</table>
<br><br>
<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
	<tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 35%;"></td>
        <td align="center" style="width: 10%;"></td>
        <td align="center" style="width: 50%;"></td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 35%;"> &nbsp; </td>
        <td align="center" style="width: 10%;"></td>
        <td align="center" style="width: 50%;"><?php echo ucwords(strtolower($tampil->kabupaten)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="left" style="width: 35%;"></td>
        <td align="center" style="width: 10%;"></td>
        <td align="center" style="width: 50%;"><?php echo $atas_nama->jabatan; ?></td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 35%;"></td>
        <td align="center" style="width: 10%;"></td>
        <td align="center" style="width: 50%;"></td>
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
        <td align="center" style="width: 35%;"></td>
        <td align="center" style="width: 10%;"></td>
        <td align="center" style="width: 50%;"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
    </tr>
</table>
</body>
</html>