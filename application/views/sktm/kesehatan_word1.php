<html>
<head>
    <?php

    $nama_file = "sktm_kesehatan.doc";

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
<?php $this->load->view('template/header_word') ?>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>BERITA ACARA PEMERIKSAAN/SURVAI LAPANGAN</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_sktm') ?>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada hari ini tanggal <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?>, Kami yang bertanda tangan dibawah ini selaku Petugas/Tim Pengecekan/Survei lapangan terhadap :</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="left">
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">Nama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->nama;?></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">NIK</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->no_ktp;?></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">Jenis Kelamin</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->kelamin;?></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">Tempat Tgl Lahir</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">Warga Negara</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360">Indonesia</td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">Agama</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->agama;?></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200">Pekerjaan</td>
		<td align="left" width="20">:</td>
		<td align="left" width="360"><?php echo $tampil->pekerjaan;?></td>
	</tr>
	<tr>
		<td width="60">&nbsp;</td>
		<td align="left" width="200" valign="top">Alamat</td>
		<td align="left" width="20" valign="top">:</td>
		<td align="left" width="360" style="line-height: 23px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
	</tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai hasil Survai lapangan yang dilaksanakan terhadap nama tersebut diatas yang bersangkutan LAYAK/TIDAK LAYAK diberikan rekomendasi untuk mendapatkan pelayanan Jaminan Kesehatan karena tergolong Keluarga Sangat Miskin (KSM) sesuai dengan 11 kriteria kemiskinan (Permensos No 146/HUK/2103, Dokumentasi hasil survai terlampir.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" align="center">
	<tr>
		<td width="30">&nbsp;</td>
		<td width="620" align="justify" style="line-height: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Berita Acara Pemeriksaan/Survai Lapangan ini kami buat dengan benar dan dapat kami pertanggung jawabkan.</td>
		<td width="20">&nbsp;</td>
	</tr>
</table>
<br>
<table border="0" style="font-family: times; font-size: 17px;" align="center">
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td align="center"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td align="center"><b>Tim/Petugas Survey</b></td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">Mengetahui</td>
                                <td style="width: 250px;" align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" style="width: 200;"><?php echo $atas_nama->status; ?></td>
                                <td align="left" style="width: 200;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketua RT <?php echo $tampil->rt;?></td>
                                <td align="center">....................................</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td align="left" style="width: 200;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketua RW <?php echo $tampil->rw;?></td>
                                <td align="center">....................................</td>
                            </tr>
                             <tr>
                                <td width="10">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td align="left" style="width: 200;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kader</td>
                                <td align="center">....................................</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 200;" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TSK</td>
                                <td align="center" width="200">....................................</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
                                <td style="width: 200;" align="center">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">Camat <?php echo ucwords(strtolower($tampil->kecamatan)) ?></td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">&nbsp;</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">............................................</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="10">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 250px;" align="center">NIP. ........................................</td>
                                <td align="center">&nbsp;</td>
                            </tr>
                        </table>
</body>
</html>