<html>
<head>
    <?php

    $nama_file = "kematian.doc";

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
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">UNTUK YANG BERSANGKUTAN</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">SURAT KETERANGAN KEMATIAN</td>
				</tr>
				<tr>
					<td align="center" >
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
					<td align="center" ><?php $this->load->view('nomor_surat/no_kematian') ?></td>
				</tr>
				<tr>
					<td align="center" >&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left"  style="width: 350px;">Yang bertanda tangan dibawah ini menerangkan bahwa : </td>
				</tr>
				<tr>
					<td align="center" >
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Kelamin</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->kelamin;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Umur</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->umur;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">No NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->pekerjaan;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left"  style="width: 350px;">Telah meninggal dunia pada :</td>
				</tr>
				<tr>
					<td align="center" >
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hari</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hari_meninggal;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tanggal</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->tanggal_meninggal;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Di</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->bertempat_di;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Disebabkan</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->penyebab;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pelapor</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->nama_pelapor;?></td>
						</tr>
<!-- 						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Kelamin</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?= $qq['kelamin_pelapor'] ?></td>
						</tr> -->
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">No NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->no_ktp_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->pekerjaan_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hubungan</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo $tampil->hubungan_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center"  style="width: 350px;">Surat kematian ini dibuat atas dasar yang sebenarnya</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" >
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
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">UNTUK YANG BERSANGKUTAN</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">SURAT KETERANGAN KEMATIAN</td>
				</tr>
				<tr>
					<td align="center" >
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
					<td align="center" ><?php $this->load->view('nomor_surat/no_kematian') ?></td>
				</tr>
				<tr>
					<td align="center" >&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left"  style="width: 350px;">Yang bertanda tangan dibawah ini menerangkan bahwa : </td>
				</tr>
				<tr>
					<td align="center" >
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Kelamin</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->kelamin;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Umur</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->umur;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">No NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->pekerjaan;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left"  style="width: 350px;">Telah meninggal dunia pada :</td>
				</tr>
				<tr>
					<td align="center" >
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hari</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hari_meninggal;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tanggal</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->tanggal_meninggal;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Di</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->bertempat_di;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Disebabkan</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->penyebab;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pelapor</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->nama_pelapor;?></td>
						</tr>
						<!-- <tr>
							<td></td>
							<td align="left" style="width: 100px;">Kelamin</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?= $qq['kelamin_pelapor'] ?></td>
						</tr> -->
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">No NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->no_ktp_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->pekerjaan_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hubungan</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo $tampil->hubungan_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center"  style="width: 350px;">Surat kematian ini dibuat atas dasar yang sebenarnya</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" >
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
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">UNTUK YANG BERSANGKUTAN</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">SURAT KETERANGAN KEMATIAN</td>
				</tr>
				<tr>
					<td align="center" >
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
					<td align="center" ><?php $this->load->view('nomor_surat/no_kematian') ?></td>
				</tr>
				<tr>
					<td align="center" >&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left"  style="width: 350px;">Yang bertanda tangan dibawah ini menerangkan bahwa : </td>
				</tr>
				<tr>
					<td align="center" >
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Nama</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->nama;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Kelamin</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->kelamin;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Umur</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->umur;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">No NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->pekerjaan;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="left"  style="width: 350px;">Telah meninggal dunia pada :</td>
				</tr>
				<tr>
					<td align="center" >
					<table>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hari</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->hari_meninggal;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Tanggal</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->tanggal_meninggal;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Di</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->bertempat_di;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Disebabkan</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->penyebab;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pelapor</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->nama_pelapor;?></td>
						</tr>
						<!-- <tr>
							<td></td>
							<td align="left" style="width: 100px;">Kelamin</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?= $qq['kelamin_pelapor'] ?></td>
						</tr> -->
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">No NIK</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo $tampil->no_ktp;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Pekerjaan</td>
							<td align="left">:</td>
							<td align="left" style="width: 100px;"><?php echo $tampil->pekerjaan_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Hubungan</td>
							<td align="left">:</td>
							<td align="left" style="width: 120px;"><?php echo $tampil->hubungan_pelapor;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;">Alamat</td>
							<td align="left">:</td>
							<td align="left" style="width: 250px;"><?php echo ucwords(strtolower($tampil->dusun)) ?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?></td>
						</tr>
						<tr>
							<td></td>
							<td align="left" style="width: 100px;"></td>
							<td align="left"></td>
							<td align="left" style="width: 250px;">Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center"  style="width: 350px;">Surat kematian ini dibuat atas dasar yang sebenarnya</td>
				</tr>
				<tr>
					<td align="center" >
					
					</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center"  style="font-weight: bold;">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" >
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