<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Kelahiran</title>
</head>
<body>
<?php $this->load->view('template/header_garuda') ?>

<table border="0" cellpadding="0" cellspacing="0" align="center" style="font-size: 16px;">
				<tr>
					<td align="center" style="font-weight: bold;"><u>SURAT KETERANGAN KELAHIRAN</u></td>
				</tr>
				<tr>
					<td align="center"><?php $this->load->view('nomor_surat/no_kelahiran') ?></td>
				</tr>
				<tr>
					<td align="center">&nbsp;</td>
				</tr>
				<tr>
					<td align="justify" style="width: 650px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertandatangan dibawah ini Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?> Kecamatan <?php echo ucwords(strtolower($tampil->kecamatan)) ?> Kabupaten <?php echo ucwords(strtolower($tampil->kabupaten)) ?>, menerangkan bahwa berdasarkan Buku Induk Kependudukan yang ada pada Kantor kami terdaftar seorang anak : (<b><?php echo $tampil->jenis_kelamin_anak;?></b>) yang diberi nama : <b><?php echo $tampil->nama_anak;?></b> Adalah anak ke <b><?php echo $tampil->kelahiran_ke;?></b></td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center">
					<table border="0">
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">&nbsp;</td>
							<td align="left"></td>
							<td align="left" style="width: 350px;"></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">AYAH</td>
							<td align="left"></td>
							<td align="left" style="width: 350px;"></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Nama</td>
							<td align="left"></td>
							<td align="left" style="width: 350px; text-transform: uppercase;"><?php echo $tampil->nama_ayah;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Nomor KTP</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->no_ktp_ayah;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Tempat/Tgl. Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ayah))); ?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Agama</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->agama_ayah;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->pekerjaan_ayah;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->alamat_ayah;?> RT <?php echo $tampil->rt_ayah;?> RW <?php echo $tampil->rw_ayah;?> Desa <?php echo $tampil->kelurahan_ayah;?> Kecamatan <?php echo $tampil->kecamatan_ayah;?> Kabupaten <?php echo $tampil->kota_ayah;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">&nbsp;</td>
							<td align="left"></td>
							<td align="left" style="width: 350px;"></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">IBU</td>
							<td align="left"></td>
							<td align="left" style="width: 350px;"></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px; text-transform: uppercase;"><?php echo $tampil->nama_ibu;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Nomor KTP</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->no_ktp_ibu;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Tempat/Tgl. Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ibu))); ?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Agama</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->agama_ibu;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->pekerjaan_ibu;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 350px;"><?php echo $tampil->alamat_ibu;?> RT <?php echo $tampil->rt_ibu;?> RW <?php echo $tampil->rw_ibu;?> Desa <?php echo $tampil->kelurahan_ibu;?> Kecamatan <?php echo $tampil->kecamatan_ibu;?> Kabupaten <?php echo $tampil->kota_ibu;?></td>
						</tr>
						<tr>
							<td style="width: 50px;"></td>
							<td align="left" style="width: 150px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 350px;">&nbsp;</td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="justify" style="width: 650px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama tersebut diatas benar dilahirkan di <b><?php echo $tampil->tempat_lahir;?></b> Pada hari <b><?php echo $tampil->hari_lahir;?></b> Tanggal <b><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_anak))); ?></b> Pukul: <b><?php echo $tampil->jam_lahir;?> WIB</b> dan Nama tersebut diatas adalah Dan nama tersebut adalah Warga Negara Indonesia Asli.</td>
				</tr>
				<tr>
					<td align="justify" style="width: 650px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan penuh tanggung jawab dan 
dengan sebenarnya.
</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right">

					</td>
				</tr>
			</table>
			<br>
<?php $this->load->view('template/atas_nama') ?>

</body>
</html>