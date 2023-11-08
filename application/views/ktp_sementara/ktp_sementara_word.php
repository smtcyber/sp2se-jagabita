<html>
<head>
    <?php

    $nama_file = "ktp_sementara.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
<style type="text/css">
body, td, th {
    font-size: 18px;
    font-family: Times;
}

.container {
    border: 4px  double black; /* Updated border style */
    padding: 5px;
    font-size: 18px;
    font-family: Times;
    width: 40%;
    margin: auto;
}

/* Added table class */
.table {
    border-collapse: collapse;
    width: 100%;
}
.table td, .table th {
     /* Setting cell border */
    padding: 10px;
    font-size: 16px;
}
.table th {
    background-color: #4e73df;
    color: white;
}

h1, h2, h3, h4, h5 {
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
		<td align="center" width="600" style="font-size: 20px;" ><b>PEMERINTAH KABUPATEN  <?php echo strtoupper($tampil->kabupaten); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600" style="font-size: 16px;" ><b>KECAMATAN  <?php echo strtoupper($tampil->kecamatan); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600"style="font-size: 24px;"><b>KANTOR KEPALA DESA  <?php echo strtoupper($tampil->kelurahan); ?></b></td>
	</tr>
	<tr>
		<td align="center" width="600" style="font-size: 14px;">Alamat :<?php echo $header->alamat; ?></td>
	</tr>
</table>
<hr><hr style="margin-top:-18"><br>
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
		<td align="left" width="400"><b><?php echo $tampil->nama; ?></b></td>
	</tr>
	<tr>
		<td align="left" width="180">Tempat Tgl Lahir</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo ucwords(strtolower($tampil->tempat_lahir)) ?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Jenis Kelamin</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->kelamin; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Warganegara</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400">Indonesia</td>
	</tr>
	<tr>
		<td align="left" width="180">Jenis Kelamin</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->kelamin; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Agama</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->agama; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Pekerjaan</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->pekerjaan; ?></td>
	</tr>
	<tr>
		<td align="left" width="180">Status Perkawinan</td>
		<td align="center" width="20">:</td>
		<td align="left" width="400"><?php echo $tampil->status_kawin; ?></td>
	</tr>
	<tr>
		<td align="left" width="180" valign="top">Alamat</td>
		<td align="center" width="20" valign="top">:</td>
		<td align="left" width="400"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?></td>
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
            if (!empty($tampil)) {
                    echo ucwords(strtolower($tampil->kelurahan)). ', '. tgl_indo($tanggal_hari_ini);
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
		<td align="left" width="200"><b><?php echo $tampil->nama; ?></b></td>
		<td align="center" width="110"></td>
		<td align="center" width="250"><u><b><?php echo $kepdes->nama_kades; ?></b></u></td>
	</tr>

</table>

</div>
</body>
</html>