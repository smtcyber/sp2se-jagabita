<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Surat Nikah</title>
</head>
<body>
<table border="0" style="font-size: 11;">
	<tr>
		<td style="width: 550px;" align="center">
		
		<table border="0">
			<tr>
				<td style="width: 200;">
					&nbsp;
				</td>
				<td align="right" style="width: 350;">
					Lampiran 7 PMA No. 298 Tahun 2003 <br>
					Pasal 5 ayat (1) <br>
					<b>Model N1</b>
				</td>
			</tr>
			<tr>
				<td align="left" style="width: 200;"><b>DESA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $tampil->kelurahan;?> <br>
					KECAMATAN	: <?php echo $tampil->kecamatan;?> <br>
					KABUPATEN&nbsp;&nbsp;: <?php echo $tampil->kabupaten;?>
				</b></td>
			</tr>
		</table>	
		<table border="0">
			<tr>
				<td style="border-top: 3px solid #000; width: 560px;" align="center"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><b><u>SURAT KETERANGAN UNTUK NIKAH</u></b></td>
			</tr>
			<tr>
				<td align="center">Nomor : 474.2/ ... /III/2022</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="left">Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		<table align="left">
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama;?></td>
			</tr>
			<tr>
				<td align="left" style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Jenis Kelamin</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->kelamin;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">7. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> <?php echo $tampil->kelurahan;?> <?php echo $tampil->kecamatan;?> <?php echo $tampil->kabupaten;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">8. Bin/Binti</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">9. Status Perkawinan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->status_kawin;?></td>
			</tr>
		</table>
		<table>
			<tr>
				<td align="right" style="width: 50;">a.</td>
				<td align="left" style="width: 170;">Jika pria,terangkan jejaka,</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td align="right" style="width: 50;">&nbsp;</td>
				<td align="left" style="width: 170;">Duda atau beristri dan</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td align="right" style="width: 50;">&nbsp;</td>
				<td align="left" style="width: 170;">Berapa istrinya</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php if($tampil->kelamin == "Laki-Laki"){ echo $tampil->status_diri_cwo; }else { echo "-";}?></td>
			</tr>
			<tr>
				<td align="right" style="width: 50;">b.</td>
				<td align="left" style="width: 170;">Jika Wanita, terangkan</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td align="right" style="width: 50;">&nbsp;</td>
				<td align="left" style="width: 170;">Perawan atau Janda</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php if($tampil->kelamin == "Laki-Laki"){ echo "-"; }else { echo $tampil->status_diri_cwo; }?></td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">10. Nama Istri/Suami Terdahulu</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_pasangan_dulu;?></td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">Demikian Surat Keterangan ini dibuat dengan mengingat sumpah jabatan dan dapat digunakan seperlunya.</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 530;">&nbsp;</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><?php echo $tampil->kelurahan;?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><b><?php echo $kepdes->jabatan; ?> <?php echo $tampil->kelurahan;?></b></td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
			</tr>
		</table>
		</td>
		<td  align="center">
		<table>
			<tr>
				<td style="width: 60px;">
					&nbsp;
				</td>
			</tr>
		</table>
		</td>
	<td>
	
	<table border="0">
		<tr>
			<td style="width: 200;">
				&nbsp;
			</td>
			<td align="right" style="width: 350;">
				Lampiran 8 PMA No. 2 Tahun 1990 <br>
				Pasal 8 ayat (1) huruf a <br>
				<b>Model N2</b>
			</td>
		</tr>
		<tr>
			<td align="left" style="width: 200;"><b>DESA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $tampil->kelurahan;?> <br>
				KECAMATAN	: <?php echo $tampil->kecamatan;?> <br>
				KABUPATEN&nbsp;&nbsp;: <?php echo $tampil->kabupaten;?>
			</b></td>
		</tr>
	</table>
	<table border="0">
			<tr>
				<td style="border-top: 3px solid #000; width: 560px;" align="center"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><b><u>SURAT KETERANGAN ASAL - USUL</u></b></td>
			</tr>
			<tr>
				<td align="center">Nomor : 474.2/ ... /III/2022</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="left">Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</td>
			</tr>
		</table>
		<table align="left">
		<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">I.</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> <?php echo $tampil->kelurahan;?> <?php echo $tampil->kecamatan;?> <?php echo $tampil->kabupaten;?></td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 500;">Adalah benar anak kandung dari pernikahan seorang pria :</td>
			</tr>
		</table>
		<table align="left">
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">II.</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ayah))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->alamat_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">Dengan seorang wanita :</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tmpt_lahir_ibu;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ibu))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->alamat_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 550;">Demikianlah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya. <br> </td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><?php echo $tampil->kelurahan;?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><b><?php echo $kepdes->jabatan; ?> <?php echo $tampil->kelurahan;?></b></td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
			</tr>
		</table>
	</td>
	</tr>
	<tr>
	<td>
	
		<table>
		<tr>
				<td style="width: 200;">
					&nbsp;
				</td>
				<td align="right" style="width: 350;">
					Lampiran 9 KMA No. 447 Tahun 2003 <br>
					Pasal 7 ayat (2) huruf c <br>
					<b>Model N3</b>
				</td>
			</tr>
			<tr>
				<td align="left" style="width: 200;"><b>DESA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $tampil->kelurahan;?> <br>
					KECAMATAN	: <?php echo $tampil->kecamatan;?> <br>
					KABUPATEN&nbsp;&nbsp;: <?php echo $tampil->kabupaten;?>
				</b></td>
			</tr>
		</table>
		<table border="0">
			<tr>
				<td style="border-top: 3px solid #000; width: 560px;" align="center"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><b><u>SURAT PERSETUJUAN MEMPELAI</u></b></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="left">Yang bertanda tangan dibawah ini :</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		<table align="left">
			<tr>
				<td style="width: 20;">I.</td>
				<td align="left" style="width: 200;">Calon  <?php if($tampil->kelamin == "Perempuan"){ echo "Istri"; }else { echo "Suami";}?></td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Bin/Binti</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">7. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> <?php echo $tampil->kelurahan;?> <?php echo $tampil->kecamatan;?> <?php echo $tampil->kabupaten;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">II.</td>
				<td align="left" style="width: 200;">Calon  <?php if($tampil->jenis_kelamin_calon == "Perempuan"){ echo "Istri"; }else { echo "Suami";}?></td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_calon;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Bin/Binti</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_wali;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tmpt_lahir_calon;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->kewarganegaraan_calon;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama_calon;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan_calon;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">7. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->alamat_calon;?> RT <?php echo $tampil->rt_calon;?> RW <?php echo $tampil->rw_calon;?> Desa <?php echo $tampil->desa_calon;?> Kecamatan <?php echo $tampil->kecamatan_calon;?> Kabupaten <?php echo $tampil->kabupaten_calon;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 550;">&nbsp;&nbsp;&nbsp; Menyatakan dengan sesungguhnya bahwa atas dasar sukarela, dengan kesadaran sendiri tanpa paksaan dari siapapun. Juga,setuju untuk melangsungkan pernikahan. </td>
			</tr>
			<tr>
				<td style="width: 550;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 550;">&nbsp;&nbsp;&nbsp; Demikian surat persetujuan ini dibuat untuk digunakan seperlunya. </td>
			</tr>
			<tr>
				<td style="width: 550;">&nbsp;</td>
			</tr>
		</table>
		<table border="0">
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><?php echo $tampil->kelurahan;?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">I. Calon <?php if($tampil->kelamin == "Perempuan"){ echo "Istri"; }else { echo "Suami";}?></td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center">II. Calon <?php if($tampil->jenis_kelamin_calon == "Perempuan"){ echo "Istri"; }else { echo "Suami";}?></td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">(<?php echo $tampil->nama;?>)</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center">(<?php echo $tampil->nama_calon;?>)</td>
			</tr>
		</table>
	</td>
	<td>
		&nbsp;
	</td>
	<td>

	<table border="0">
		<tr>
			<td style="width: 200;">
				&nbsp;
			</td>
			<td align="right" style="width: 350;">
				Lampiran 10 KMA No. 298 Tahun 2003 <br>
				Pasal 8 ayat (1) huruf d <br>
				<b>Model N4</b>
			</td>
		</tr>
		<tr>
			<td align="left" style="width: 200;"><b>DESA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $tampil->kelurahan;?> <br>
				KECAMATAN	: <?php echo $tampil->kecamatan;?> <br>
				KABUPATEN&nbsp;&nbsp;: <?php echo $tampil->kabupaten;?>
			</b></td>
		</tr>
	</table>
	<table border="0">
			<tr>
				<td style="border-top: 3px solid #000; width: 560px;" align="center"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><b><u>SURAT KETERANGAN TENTANG ORANG TUA</u></b></td>
			</tr>
			<tr>
				<td align="center">Nomor : 474.2/ ... /III/2022</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="left">Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</td>
			</tr>
		</table>
		<table align="left">
		<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">II.</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tmpt_lahir_ayah;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ayah))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->alamat_ayah;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">II.</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tmpt_lahir_ibu;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir_ibu))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->alamat_ibu;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 500;">Adalah benar Ayah dan Ibu kandung dari seorang :</td>
			</tr>
		</table>
		<table align="left">
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 20;">I.</td>
				<td align="left" style="width: 200;">1. Nama lengkap dan alias</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->nama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">2. Tempat, Tanggal lahir</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->tempat_lahir;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir))); ?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">3. Warga Negara/Suku</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;">INDONESIA</td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">4. Agama</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->agama;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">5. Pekerjaan</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->pekerjaan;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">6. Tempat Tinggal</td>
				<td style="width: 5;">:</td>
				<td align="left" style="width: 330;"><?php echo $tampil->dusun;?> RT <?php echo $tampil->rt;?> RW <?php echo $tampil->rw;?> <?php echo $tampil->kelurahan;?> <?php echo $tampil->kecamatan;?> <?php echo $tampil->kabupaten;?></td>
			</tr>
			<tr>
				<td style="width: 20;">&nbsp;</td>
				<td align="left" style="width: 200;">&nbsp;</td>
				<td style="width: 5;">&nbsp;</td>
				<td align="left" style="width: 330;">&nbsp;</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 550;">Demikianlah surat keterangan ini dibuat dengan mengingat sumpah jabatan dan untuk digunakan seperlunya. <br> </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>
		<table>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><?php echo $tampil->kelurahan;?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><b><?php echo $kepdes->jabatan; ?> <?php echo $tampil->kelurahan;?></b></td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
			</tr>
			<tr>
				<td style="width: 170;" align="center">&nbsp;</td>
				<td style="width: 170;">&nbsp;</td>
				<td style="width: 170;" align="center"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
			</tr>
		</table>
	</td>
	</tr>
</table>	
</body>
</html>