<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Izin Keramaian</title>
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
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>IZIN LINGKUNGAN  </b></u><br></h3>

<table border="0" align="center" style="line-height: 18px;">
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="650" align="justify" >Yang bertanda tangan di bawah ini Ketua Rt <?php echo $tampil->rt1;?> Rw <?php echo $tampil->rw1;?> <?php echo $tampil->dusun1;?>  Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, dengan ini Mengijinkan Acara <?php echo $tampil->maksud;?>  kepada saudara/i :</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
</table>
<table border="0" align="left" style="font-size: 17px; font-family: times;">
	<tr>
		<td width="100">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="100">&nbsp;</td>
		<td align="left" width="200">Tempat/ Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="100">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="100">&nbsp;</td>
		<td align="left" width="200">Warganegara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330">Indonesia</td>
	</tr>
    <tr>
		<td width="100">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="100">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 18px;">
	<tr>
	    <td width="1">&nbsp;</td>
		<td width="650" align="justify" >Yang bertempat di <?php echo $tampil->tmpt_pelaksanaan;?> <b><?php echo $tampil->dusun1;?></b> Rt <?php echo $tampil->rt1;?>/<?php echo $tampil->rw1;?>   Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>.</td>
	    <td width="20">&nbsp;</td>
	</tr>
	<tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 18px;">
    <tr>
	    <td width="1">&nbsp;</td>
		<td width="650" align="justify" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat permohonan Izin di buat dengan sebenarnya dan untuk dijadikan bahan pertimbangan sepenuhnya.</td>
	    <td width="20">&nbsp;</td>
	</tr>
    <tr>
	    <td colspan="3">&nbsp;</td>
	</tr>
</table>
                    <table border="0" style="font-family: times; font-size: 16px;" align="left">
                        <tr>
                            <td align="right" style="font-size: 16px;" width="50"><b></b></td>
                            <td align="center" style="font-size: 16px;" width="130"><b>&nbsp;</b></td>
                            <td align="center" style="font-size: 16px;" width="150">&nbsp;</td>
                            <td align="right" style="font-size: 16px;" width="150">&nbsp;</td>
                            <td align="center" style="font-size: 16px;" width="200"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_surat))); ?></td>   
                        </tr>
                        <tr>
                            <td align="right" style="font-size: 16px;" width="50"><b></b></td>
                            <td align="center" style="font-size: 16px;" width="130">Ketua RW <?php echo $tampil->rw1;?></td>
                            <td align="center" style="font-size: 16px;" width="150">&nbsp;</td>
                            <td align="right" style="font-size: 16px;" width="150">&nbsp;</td>
                            <td align="center" style="font-size: 16px;" width="130">Ketua Rt <?php echo $tampil->rt1;?></td>   
                        </tr>
                        <tr>
	                        <td colspan="5" height="50">&nbsp;</td>
	                    </tr>
                        <tr>
                            <td align="right" style="font-size: 16px;" width="50"><b></b></td>
                            <td align="center" style="font-size: 16px;" width="130"><b><u>..............</u></b></td>
                            <td align="center" style="font-size: 16px;" width="150">&nbsp;</td>
                            <td align="right" style="font-size: 16px;" width="150">&nbsp;</td>
                            <td align="center" style="font-size: 16px;" width="130"><b><u>..............</u></b></td>   
                        </tr>
						<tr>
                            <td align="right" style="font-size: 16px;" width="50"></td>
                            <td align="center" style="font-size: 16px;" width="130"></td>
                            <td align="center" style="font-size: 16px;" colspan="2"width="300">Mengetahui</td>
                            <td align="center" style="font-size: 16px;" width="130"></td>   
                        </tr>
						<tr>
                            <td align="right" style="font-size: 16px;" width="50"></td>
                            <td align="center" style="font-size: 16px;" width="130"></td>
                            <td align="center" style="font-size: 16px;" colspan="2"width="300"><b>Kepala Dusun</b></td>
                            <td align="center" style="font-size: 16px;" width="130"></td>   
                        </tr>
						<tr>
	                        <td colspan="5" height="50">&nbsp;</td>
	                    </tr>
						<tr>
                            <td align="right" style="font-size: 16px;" width="50"></td>
                            <td align="center" style="font-size: 16px;" width="130"></td>
                            <td align="center" style="font-size: 16px;" colspan="2"width="300"><b><u>..................</u></b></td>
                            <td align="center" style="font-size: 16px;" width="130"></td>   
                        </tr>
                    </table>
</body>
</html>