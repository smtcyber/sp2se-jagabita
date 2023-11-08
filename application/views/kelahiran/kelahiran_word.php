<html>
<head>
    <?php

    $nama_file = "kelahiran.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="right">
	<tr>
		<td style="width: 350px;" align="center">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">UNTUK YANG BERSANGKUTAN</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">SURAT KETERANGAN KELAHIRAN</td>
				</tr>
				<tr>
					<td align="center">
						<table border="0">
							<tr>
								<td style="width: 50px;"></td>
								<td style="border-top: 1px solid #000; width: 250px;" align="center"></td>
								<td style="width: 50px;"></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center"><?php $this->load->view('nomor_surat/no_kelahiran') ?></td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Yang bertanda tangan dibawah ini,menerangkan dengan sebenarnya bahwa : </td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hari</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hari_lahir;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tanggal</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tempat</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->tempat_kelahiran;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Anak Ke</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->kelahiran_ke;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Telah lahir seorang anak <?php echo $tampil->jenis_kelamin_anak;?></td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Bernama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama_anak;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Dari seorang ibu</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tgl Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ibu))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->alamat_ibu;?> RT <?php echo $tampil->rt_ibu;?> RW <?php echo $tampil->rw_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo $tampil->kelurahan_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Istri dari</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->nama_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tgl Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ayah))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->alamat_ayah;?> RT <?php echo $tampil->rt_ayah;?> RW <?php echo $tampil->rw_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo $tampil->kelurahan_ayah;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Surat keterangan ini dibuat berdasarkan keterangan :</td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">Hubungan dengan bayi</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hubungan_pelapor;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right">
						<table border="0">
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo $kepdes->jabatan; ?></td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo $kepdes->nama_kades; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td style="border-left: 1px; height: 100px;"></td>
		<td style="width: 350px;" align="center">
			<table border="0" cellpadding="0" cellspacing="0">
				<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">UNTUK YANG BERSANGKUTAN</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">SURAT KETERANGAN KELAHIRAN</td>
				</tr>
				<tr>
					<td align="center">
						<table border="0">
							<tr>
								<td style="width: 50px;"></td>
								<td style="border-top: 1px solid #000; width: 250px;" align="center"></td>
								<td style="width: 50px;"></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center"><?php $this->load->view('nomor_surat/no_kelahiran') ?></td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Yang bertanda tangan dibawah ini,menerangkan dengan sebenarnya bahwa : </td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hari</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hari_lahir;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tanggal</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tempat</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->tempat_kelahiran;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Anak Ke</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->kelahiran_ke;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Telah lahir seorang anak <?php echo $tampil->jenis_kelamin_anak;?></td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Bernama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama_anak;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Dari seorang ibu</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tgl Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ibu))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->alamat_ibu;?> RT <?php echo $tampil->rt_ibu;?> RW <?php echo $tampil->rw_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo $tampil->kelurahan_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Istri dari</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->nama_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tgl Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ayah))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->alamat_ayah;?> RT <?php echo $tampil->rt_ayah;?> RW <?php echo $tampil->rw_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo $tampil->kelurahan_ayah;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Surat keterangan ini dibuat berdasarkan keterangan :</td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">Hubungan dengan bayi</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hubungan_pelapor;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right">
						<table border="0">
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo $kepdes->jabatan; ?></td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo $kepdes->nama_kades; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</table>
		</td>
		<td style="border-left: 1px; height: 100px;"></td>
		<td style="width: 350px;" align="center">
			<table border="0" cellpadding="0" cellspacing="0">
				<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">UNTUK YANG BERSANGKUTAN</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">SURAT KETERANGAN KELAHIRAN</td>
				</tr>
				<tr>
					<td align="center">
						<table border="0">
							<tr>
								<td style="width: 50px;"></td>
								<td style="border-top: 1px solid #000; width: 250px;" align="center"></td>
								<td style="width: 50px;"></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center"><?php $this->load->view('nomor_surat/no_kelahiran') ?></td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Yang bertanda tangan dibawah ini,menerangkan dengan sebenarnya bahwa : </td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hari</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hari_lahir;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tanggal</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tempat</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->tempat_kelahiran;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Anak Ke</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->kelahiran_ke;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Telah lahir seorang anak <?php echo $tampil->jenis_kelamin_anak;?></td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Bernama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama_anak;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Dari seorang ibu</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tgl Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ibu))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->alamat_ibu;?> RT <?php echo $tampil->rt_ibu;?> RW <?php echo $tampil->rw_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo $tampil->kelurahan_ibu;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Istri dari</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->nama_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tgl Lahir</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ayah))); ?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->alamat_ayah;?> RT <?php echo $tampil->rt_ayah;?> RW <?php echo $tampil->rw_ayah;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo $tampil->kelurahan_ayah;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left" style="width: 350px;">Surat keterangan ini dibuat berdasarkan keterangan :</td>
				</tr>
				<tr>
					<td align="center">
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 150px;">Hubungan dengan bayi</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hubungan_pelapor;?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="center" style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right">
						<table border="0">
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo $kepdes->jabatan; ?></td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="width: 140px;">&nbsp;</td>
								<td align="center"><?php echo $kepdes->nama_kades; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</table>
		</td>
	</tr>
</table>


</body>
</html>