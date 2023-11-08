<html>
<head>
    <?php

    $nama_file = "surat_ramai.doc";

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
<br>
<br>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT PERSETUJUAN WARGA / LINGKUNGAN</b></u></h3>
<br>
<table border="0" align="justify" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kami warga <?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, Bersepakat persetujuan lingkungan kepada :</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="left" style="font-size: 17px; font-family: times;">
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250">Bertindak untuk dan atas nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330">Diri Sendiri</td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250">Tempat/ Tanggal Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="330" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250">Nomor NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="50">&nbsp;</td>
		<td align="left" width="250">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="330"><?php echo $tampil->pekerjaan;?></td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Untuk kegiatan keramaian Hiburan : <?php echo $tampil->jenis_hiburan;?> dalam rangka <?php echo $tampil->maksud;?></td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">Dengan Ketentuan</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center" style="line-height: 23px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="25" valign="top">1.</td>
		<td width="570" align="justify">Menjaga Kebersihan, Ketertiban dan Keindahan Lingkungan sekitar</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="25" valign="top">2.</td>
		<td width="570" align="justify">Menjalin komunikasi yang baik dengan wargasekitar</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="25" valign="top">3.</td>
		<td width="570" align="justify">Menghargai waktu waktu ibadah untuk menciptakan kerukunan umat beragama</td>
	</tr>
	<tr>
		<td width="30">&nbsp;</td>
		<td width="25" valign="top">4.</td>
		<td width="570" align="justify">Apabila nama tersebut diatas tidak memenuhi semua ketentuan tersebut dan mengganggu ketertiban umum, maka akan persetujuan warga ini akan kami tinjau kembali</td>
	</tr>
</table>
<br>
<table border="0" align="justify" style="line-height: 25px; font-size: 17px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Persetujuan Lingkungan ini diberikan kepada yang bersangkutan dan apabila melanggar maka kepada nama tersebut diatas bersedia untuk menutupnya.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<table align="center" border="1" style="font-size: 17px;" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40"><b>No.</b></td>
                            <td align="center" style="font-size: 17px;" width="200"><b>Nama</b></td>
                            <td align="center" style="font-size: 17px;" width="230"><b>Alamat</b></td>
                            <td align="center" style="font-size: 17px;" width="170"><b>Tanda Tangan</b></td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">1.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">2.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">3.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">4.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">5.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">6.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">7.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">8.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">9.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">10.</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size: 17px;" width="40">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="200">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="230">&nbsp;</td>
                            <td align="center" style="font-size: 17px;" width="170">&nbsp;</td>
                        </tr>
                    </table>
<br>
<table border="0" style="font-family: times; font-size: 16px;" align="left">
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td align="left" width="200">Mengetahui :</td>
                                <td style="width: 100;">&nbsp;</td>
                                <td align="left" colspan="4"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td align="left" width="200"><?php echo $atas_nama->status; ?></td>
                                <td style="width: 100px;" align="left">&nbsp;</td>
                                <td align="left" colspan="4">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="left" width="200">&nbsp;</td>
                                <td style="width: 100px;" align="left">&nbsp;</td>
                                <td align="left" width="20">1.</td>
                                <td align="left" width="100"> ......................... </td>
                                <td align="cenetr" width="10">:</td>
                                <td align="left" width="200"> ........................................... </td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td align="left" width="200">&nbsp;</td>
                                <td style="width: 100px;" align="left">&nbsp;</td>
                                <td align="left" colspan="4">RT <?php echo ucwords(strtoupper($tampil->rt)) ?></td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="left" width="200">&nbsp;</td>
                                <td style="width: 100px;" align="left">&nbsp;</td>
                                <td align="left" width="20">2.</td>
                                <td align="left" width="100"> ......................... </td>
                                <td align="cenetr" width="10">:</td>
                                <td align="left" width="200"> ........................................... </td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td align="left" width="200">&nbsp;</td>
                                <td style="width: 100px;" align="left">&nbsp;</td>
                                <td align="left" colspan="4">RW <?php echo ucwords(strtoupper($tampil->rw)) ?></td>
                            </tr>
                            <tr>
                                <td width="30">&nbsp;</td>
                                <td align="left" width="200"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
                                <td style="width: 100;">&nbsp;</td>
                                <td align="left" colspan="4">&nbsp;</td>
                            </tr>
                        </table>
</body>
</html>