<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat KTP Sementara</title>
<style type="text/css">
body,td,th {
	font-size: 18px;
	font-family: Times;
}

.container {
    border-style: double; /* Lebar 2px, jenis solid, warna merah */
	padding: 5px;
	font-size: 18px;
    font-family: Times;
	width: 95%;
	margin: auto;
	font-size: 16px;
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
<div class="container">
<table border="0" align="center">
	<tr>
		<td align="center" width="600" style="font-size: 20px;" ><b>PEMERINTAH KABUPATEN  <?php echo strtoupper($data->kabupaten); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600" style="font-size: 16px;" ><b>KECAMATAN  <?php echo strtoupper($data->kecamatan); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600"style="font-size: 24px;"><b>KANTOR KEPALA DESA  <?php echo strtoupper($data->kelurahan); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600" style="font-size: 14px;">Alamat :<?php echo $header->alamat; ?></td>
	</tr>
</table>
<hr><hr style="margin-top:-8"><br>
<br>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN PENDUDUK SEMENTARA</b></u></h3>
<br><br>
<?php $this->load->view('nomor_surat/no_ktp_sementara') ?>
<table border="0" align="center" >
	<tr>
		<td colspan="3" align="justify" width="600">&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa Jagabita Kecamatan Parungpanjang  Kabupaten  Bogor, Menerangkan bahwa :</td>
	</tr>
	<tr>
		<td colspan="3" align="justify" width="600">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" width="180">Nama</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><b><?php echo $data->nama; ?></b></td>
	</tr>
	<tr>
		<td align="left" width="180">Tempat Tgl Lahir</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo ucwords(strtolower($data->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($data->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Jenis Kelamin</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $data->kelamin; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Warganegara</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400">Indonesia</td>
	</tr>
	<tr>
		<td align="left" width="180">Jenis Kelamin</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $data->kelamin; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Agama</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $data->agama; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Pekerjaan</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $data->pekerjaan; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Status Perkawinan</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $data->status_kawin; ?></td>
	</tr>
	<tr>
		<td align="left" width="180" valign="top">Alamat</td>
		<td align="center" width="20" valign="top">:</td>
		<td align="left" width="400"><?php echo ucwords(strtolower($data->dusun)) ?> RT <?php echo $data->rt;?> RW <?php echo $data->rw;?> Desa <?php echo ucwords(strtolower($data->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($data->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($data->kabupaten)) ?></td>
	</tr>
	<tr>
		<td colspan="3" align="justify" width="600">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" align="justify" width="600">&nbsp;&nbsp;&nbsp;Benar Nama tersebut diatas adalah Warga Kami dan membuat keterangan ini dikarenakan KTP yang aslinya masih dalam Proses di Kecamatan.</td>
	</tr>
	<tr>
		<td colspan="3" align="justify" width="600">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" align="justify" width="600">&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya</td>
	</tr>
</table>
<br><br>
<table border="0" align="center" >
	<tr>
		<td align="center" width="50"></td>
		<td align="center" width="200"></td>
		<td align="center" width="110"></td>
		<td align="center" width="250">
			<?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($data)) {
                    echo ucwords(strtolower($data->kelurahan)). ', '. tgl_indo($tanggal_hari_ini);
            }                
            ?></td>
	</tr>
	<tr>
		<td align="center" width="50"></td>
		<td align="left" width="200">Tanda Tangan</td>
		<td align="center" width="110"></td>
		<td align="center" width="250"><?php echo $kepdes->jabatan; ?></td>
	</tr>
	<tr>
		<td colspan="4" height="70"></td>
	</tr>
	<tr>
		<td align="center" width="50"></td>
		<td align="left" width="200"><b><?php echo $data->nama; ?></b></td>
		<td align="center" width="110"></td>
		<td align="center" width="250"><u><b><?php echo $kepdes->nama_kades; ?></b></u></td>
	</tr>

</table>


</div>
</body>
</html>