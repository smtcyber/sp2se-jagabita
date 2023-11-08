    <?php

    $nama_file = "telah_menikah.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
<html>
<head>
<style type="text/css">
body,td,th {
    font-size: 15px;
    font-family: Times;
}
.table {
    border: thin;
}
.table td,th {
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 15px;
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
<?php $this->load->view('template/header') ?>
<?php
foreach($surat->result() as $tampil){
?>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
		<td width="670" align="center">LAMPIRAN 1</td>
	</tr>
	<tr>
		<td width="670" align="center">PENGATURAN BADAN PENGATUR HILIR MINYAK DAN GAS BUMI</td>
	</tr>
	<tr>
		<td width="670" align="center">NOMOR 5 TAHUN 2012</td>
	</tr>
	<tr>
		<td width="670" align="center">TENTANG</td>
	</tr>
	<tr>
		<td width="670" align="center">PEDOMAN PENERBITAN SURAT REKOMENDASI SATUAN KERJA</td>
	</tr>
	<tr>
		<td width="670" align="center">PERANGKAT DAERAH UNTUK PEMBELIAN BAHAN BAKAR MINYAK JENIS TERTENTU</td>
	</tr>
</table>
<br>
<h4 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN PEMERINTAH DESA</b></u><br></h4>
<?php $this->load->view('nomor_surat/no_sku_bensin') ?>
<table border="0" align="center" style="line-height: 25px;">
	<tr>
	    <td width="670" colspan="3" align="left">DasarHukum :</td>
	</tr>
	<tr>
	    <td width="10">&nbsp;</td>
		<td width="20" align="left">1.</td>
		<td width="640" align="left">Undang-undang Nomor 22 tahun 2001 tentang Minyak dan Gas Bumi</td>
	</tr>
	<tr>
	    <td width="10">&nbsp;</td>
		<td width="20" align="left">2.</td>
		<td width="640" align="left">Undang-undang Nomor 32 tahun 2004 tentang Pemerintah Daerah</td>
	</tr>
	<tr>
	    <td width="10">&nbsp;</td>
		<td width="20" align="left">3.</td>
		<td width="640" align="left">Perpres Nomor 15 tahun 2012 tentang harga jualdan Konsumen pengguna jenis Bahan Bakar Minyak</td>
	</tr>
	<tr>
	    <td width="670" colspan="3" align="left">&nbsp;</td>
	</tr>
	<tr>
	    <td width="670" colspan="3" align="left">Dengan ini memberikan rekomendasi kepada :</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
	    <td width="690" colspan="3" align="left">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" width="140">Nama Pengusaha</td>
		<td align="left" width="10">:</td>
		<td align="left" width="470"><b><?php echo $tampil->nama;?></b></td>
	</tr>
	<tr>
		<td align="left" width="140">Alamat Pengusaha</td>
		<td align="left" width="10">:</td>
		<td align="left" width="470"><?php echo ucwords(strtolower($tampil->dusun)) ?> Rt <?php echo $tampil->rt;?>/<?php echo $tampil->rw;?> Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
	</tr>
	<tr>
		<td align="left" width="140">Konsumen Pengguna</td>
		<td align="left" width="10">:</td>
		<td align="left" width="470"><?php echo ucwords(strtolower($tampil->konsumen)) ?></td>
	</tr>
	<tr>
		<td align="left" width="140">Jenis Usaha/Kegiatan</td>
		<td align="left" width="10">:</td>
		<td align="left" width="470"><?php echo ucwords(strtolower($tampil->jenis_usaha)) ?></td>
	</tr>
	<tr>
	    <td width="690" colspan="3" align="left">&nbsp;</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20">1.</td>
	    <td width="600"  align="left">Berdasarkan hasil verifikasi , kebutuhan BBM digunakan untuk sarana sebagai berikut</td>
	</tr>
</table>
<br>
		<?php
		if($anak->result()){
			?>
			<table border='1' align="center" cellspacing="0" cellpadding="5" style="font-size: 12px;">
				<thead>
					<tr>
						<th width="20" align="center" valign="top" style="font-size: 12px;" >No</th>
						<th width="90" align="center" valign="top" style="font-size: 12px;" >Jenis Alat</th>
						<th width="50" align="center" valign="top" style="font-size: 12px;" >Jumlah Alat</th>
						<th width="95" align="center" valign="top" style="font-size: 12px;" >Fungsi Alat</th>
						<th width="95" align="center" valign="top" style="font-size: 12px;" >BBM Jenis tertentu</th>
						<th width="95" align="center" valign="top" style="font-size: 12px;" >Kebutuhan BBM Jenis tertentu</th>
						<th width="95" align="center" valign="top" style="font-size: 12px;" >Jam/hari operasi</th>
						<th width="95" align="center" valign="top" style="font-size: 12px;" >Komsumsi BBM Jenis Tertentu</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$no = 0;
				foreach($anak->result() as $child){
					$no++;
					?>
					<tr>
						<td width="20"align="center" style="font-size: 12px;" ><?= $no ?></td>
						<td width="90" align="center" style="font-size: 12px;" ><?= $child->jenis_alat ?></td>
						<td width="50"align="center"  style="font-size: 12px;" ><?= $child->jumlah_alat ?></td>
						<td align="center" width="90" style="font-size: 12px;" ><?= $child->fungsi_alat ?></td>
						<td align="center" width="90" style="font-size: 12px;" ><?= $child->jenis_bbm ?></td>
						<td align="center" width="90" style="font-size: 12px;" ><?= $child->kebutuhan_bbm ?></td>
						<td align="center" width="90" style="font-size: 12px;" ><?= $child->jam_operasi ?></td>
						<td align="center" width="90" style="font-size: 12px;" ><?= $child->konsumsi_bbm ?></td>

					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
			<?php
		}
		?>
<?php
}
?>
<br>
<table border="0" align="center">
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20">2.</td>
	    <td width="600"  align="left">Diberikan alokasi volume bensin ( Gasoline ) Ron 88/Minyak solar ( Gas Oli )</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20"></td>
		<td align="left" width="20">-</td>
	    <td align="left" width="150">Sejumlah</td>
		<td align="right" width="10">:</td>
		<td align="left" width="390"><?php echo ucwords(strtolower($child->konsumsi_bbm)) ?></td>
	</tr>
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20"></td>
		<td align="left" width="20">-</td>
	    <td align="left" width="150">Tempat Pengambilan</td>
		<td align="right" width="10">:</td>
		<td align="left" width="390"></td>
	</tr>
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20"></td>
		<td align="left" width="20">-</td>
	    <td align="left" width="150">Nomor Lembaga Penyalur</td>
		<td align="right" width="10">:</td>
		<td align="left" width="390"></td>
	</tr>
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20"></td>
		<td align="left" width="20">-</td>
	    <td align="left" width="150">Lokasi</td>
		<td align="right" width="10">:</td>
		<td align="left" width="390"></td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td align="left" width="50"></td>
		<td align="left" width="20">3.</td>
	    <td width="600"  align="left">Masa berlaku surat rekomendasi sampai dengan : 12-08-2022</td>
	</tr>
</table>
<table border="0" align="center">
	<tr>
		<td align="left" width="50" valign="top" ></td>
		<td align="left" width="20" valign="top">4.</td>
	    <td width="600"  align="left">Apabila pengguna surat rekomendas iini tidak sebagaimana mestinya,maka akan dicabut dan ditindak lanjuti dengan proses hokum sesuai dengan ketentuan dan peraturan perundang-undangan</td>
	</tr>
</table>
<br>
<table border="0" style="font-family: times; font-size: 18px;">
	<tr>
		<td width="10">&nbsp;</td>
		<td align="center" width="200">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td align="center">
			<?php
			$tanggal_hari_ini= date('Y-m-d');
			echo ucwords(strtolower($header->jabatan)). ', '. tgl_indo($tanggal_hari_ini);
			?>
		</td>
	</tr>
	<tr>
		<td width="10">&nbsp;</td>
		<td align="center" width="200">&nbsp;</td>
		<td style="width: 230px;" align="center">&nbsp;</td>
		<td align="center"><?php echo $kepdes->jabatan; ?></td>
	</tr>
	<tr>
		<td width="10">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td align="center">&nbsp;</td>
	</tr>
	<tr>
		<td width="10">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
		<tr>
		<td width="10">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td style="width: 200;">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="10">&nbsp;</td>
		<td align="center" width="200">&nbsp;</td>
		<td style="width: 200;" align="center">&nbsp;</td>
		<td align="center" width="200"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
	</tr>
	<tr>
		<td width="10">&nbsp;</td>
		<td align="center" width="200">&nbsp;</td>
		<td style="width: 200;" align="center">&nbsp;</td>
		<td align="center" width="200"><?php echo $kepdes->pangkat; ?></td>
	</tr>
	<tr>
		<td width="10">&nbsp;</td>
		<td align="center" width="200">&nbsp;</td>
		<td style="width: 200;" align="center">&nbsp;</td>
		<td align="center" width="200"><?php echo $kepdes->nip; ?></td>
	</tr>
</table>
</body>
</html>