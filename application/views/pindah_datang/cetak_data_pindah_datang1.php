<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/SMT.png'); ?>">
<title>Cetak Surat Pindah Datang</title>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="1000" style="font-family: arial;" >
    <tr>
        <td align="center">
            <table border="0" align="center">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 17px; border: 0px;" width="150">&nbsp;</td>
                    <td align="center" style="font-size: 17px; border: 0px;" width="400"><b>SURAT KETERANGAN PINDAH DATANG WNI</b></td>
                    <td align="center" style="font-size: 17px; border: 0px;" width="40">&nbsp;</td>
                    <td align="center" style="font-size: 11px; border: 1px;" width="100">F-1.08</td>
                </tr>
            </table>
            <table align="justify" border="0">
                <tr>
                    <td align="center">
                    <table align="left">
                        <tr>
                            <td align="left" style="font-size: 14px;"><b>DATA DAERAH ASAL</b></td>
                        </tr>
                    </table>
                    <table border="0">
                    <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">1.</td>
                            <td align="left" style="width: 175;">Nomor Kartu Keluarga</td>
                            <td align="left">:</td>
                            <td align="left" style="width: 450; border: 1px;"><?php echo $tampil->no_kk;?></td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">2.</td>
                            <td align="left" style="width: 175;">Nama Kepala Keluarga</td>
                            <td align="left">:</td>
                            <td align="left" style="width: 450; border: 1px;"><?php echo $tampil->nama;?></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">3.</td>
                            <td align="left" style="width: 175;">NIK</td>
                            <td align="left">:</td>
                            <td align="left" style="width: 450; border: 1px;"><?php echo $tampil->no_ktp;?></td>
                            
                        </tr>
                    </table>
                    <table align="left">
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">5.</td>
                            <td align="left" style="width: 175;">Alamat</td>
                            <td align="left">:</td>
                            <td align="left" style="width: 270; border: 1px;"><?php echo $tampil->alamat_tujuan_pindah;?></td>
                            <td align="center" style="width: 25px; border: 0px;">RT</td>
                            <td align="center" style="width: 50px; border: 1px;"><?php echo $tampil->rt_tujuan_pindah;?></td>
                            <td align="center" style="width: 25px; border: 0px;">RW</td>
                            <td align="center" style="width: 50px; border: 1px;"><?php echo $tampil->rw_tujuan_pindah;?></td>
                        </tr>
                    </table>
                    <table align="left">
                    <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left" style="border: 0px;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 100px; border: 0px;">a. Desa/Kelurahan</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kelurahan_tujuan_pindah;?></td> 
                            <td align="left" style="width: 15;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 90px; border: 0px;">b. Kecamatan</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kecamatan_tujuan_pindah;?></td> 
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left" style="border: 0px;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 100px; border: 0px;">c. Kabupaten/Kota</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kota_tujuan_pindah;?></td> 
                            <td align="left" style="width: 15;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 90px; border: 0px;">d. Provinsi</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->propinsi_tujuan_pindah;?></td> 
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left" style="border: 0px;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 100px; border: 0px;">Kode Pos</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kode_pos_asal;?></td>
                            <td align="left" style="width: 15;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 90px; border: 0px;">Telepon</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->telepon_asal;?></td> 
                        </tr>
                    </table>
                    <table align="left">
                        <tr>
                            <td align="left" style="font-size: 14px;"><b>DATA KEPINDAHAN</b></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">1.</td>
                            <td align="left" style="width: 175;">Alasan Pindah</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;" rowspan="2"><b><?php echo $tampil->alasan_pindah;?></b></td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">1. Pekerjaan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">3. Keamanan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">5. Perumahan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">7. Lainnya</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">2. Pendidikan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">4. Kesehatan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">6. Keluarga</td>
                            <td width="20"></td>
                            <td align="left" style="width: 90px;">&nbsp;</td>
                        </tr>
                    </table>
                    <table align="left">
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">2.</td>
                            <td align="left" style="width: 175;">Alamat Tujuan Pindah</td>
                            <td align="left">:</td>
                            <td align="left" style="width: 270; border: 1px;"><?php echo $tampil->alamat_tujuan;?></td>
                            <td align="center" style="width: 25px; border: 0px;">RT</td>
                            <td align="center" style="width: 50px; border: 1px;"><?php echo $tampil->rt_tujuan;?></td>
                            <td align="center" style="width: 25px; border: 0px;">RW</td>
                            <td align="center" style="width: 50px; border: 1px;"><?php echo $tampil->rw_tujuan;?></td>
                        </tr>
                    </table>
                    <table align="left">
                    <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left" style="border: 0px;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 100px; border: 0px;">a. Desa/Kelurahan</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kelurahan_tujuan;?></td> 
                            <td align="left" style="width: 15;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 90px; border: 0px;">b. Kecamatan</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kecamatan_tujuan;?></td> 
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left" style="border: 0px;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 100px; border: 0px;">c. Kabupaten/Kota</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kota_tujuan;?></td> 
                            <td align="left" style="width: 15;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 90px; border: 0px;">d. Provinsi</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->propinsi_tujuan;?></td> 
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left" style="border: 0px;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 100px; border: 0px;">Kode Pos</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->kode_pos_tujuan_pindah;?></td>
                            <td align="left" style="width: 15;">&nbsp;</td>
                            <td align="left" style="font-size: 12px; width: 90px; border: 0px;">Telepon</td>
                            <td align="left" style="width: 110; border: 1px;"><?php echo $tampil->telepon_tujuan_pindah;?></td> 
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">3.</td>
                            <td align="left" style="width: 175;">Klasifikasi Pindah</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;" rowspan="2"><b><?php echo $tampil->klasifikasi_pindah;?></b></td>
                            <td width="10"></td>
                            <td align="left" width="185">1. Dalam satu desa/Kelurahan</td>
                            <td width="10"></td>
                            <td align="left" width="120">3. Antar kecamatan</td>
                            <td width="10"></td>
                            <td align="left" width="120">5. Antar Provinsi</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td width="10"></td>
                            <td align="left" width="185">2. Antar Desa/Kelurahan</td>
                            <td width="10"></td>
                            <td align="left" width="120">4. Antar Kab/Kota</td>
                            <td width="10"></td>
                            <td align="left" width="120">&nbsp;</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">4.</td>
                            <td align="left" style="width: 175;">Jenis Kepindahan</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;" rowspan="2"><b><?php echo $tampil->jenis_kepindahan;?></b></td>
                            <td width="10"></td>
                            <td align="left" width="220">1. Kep. Keluarga</td>
                            <td width="10"></td>
                            <td align="left" width="225">3. Kep. Kel dan sbg. Angg. Kel</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td width="10"></td>
                            <td align="left" width="220">2. Kep. Kel dan seluruh Angg. Kel</td>
                            <td width="10"></td>
                            <td align="left" width="225">4. Anggota keluarga</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">5.</td>
                            <td align="left" style="width: 175;">Status Nomor KK bagi</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;" rowspan="2"><b><?php echo $tampil->status_no_kk_tidak_pindah; ?></b></td>
                            <td width="10"></td>
                            <td align="left" width="220">1. Numpang KK</td>
                            <td width="10"></td>
                            <td align="left" width="225">3. Tidak ada angg kel yg ditinggalkan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">yang tidak pindah</td>
                            <td align="left">&nbsp;</td>
                            <td width="10"></td>
                            <td align="left" width="220">2. Membuat KK baru</td>
                            <td width="10"></td>
                            <td align="left" width="225">4. Nomor KK tetap</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">6.</td>
                            <td align="left" style="width: 175;">Status Nomor KK bagi</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;" rowspan="2"><b><?php echo $tampil->status_no_kk_pindah; ?></b></td>
                            <td width="10"></td>
                            <td align="left" width="100" rowspan="2">1. Numpang KK</td>
                            <td width="10"></td>
                            <td align="left" width="130" rowspan="2">2. Membuat KK baru</td>
                            <td width="10"></td>
                            <td align="left" width="225" rowspan="2">3. Nama Kep Kel dan No KK tetap</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">&nbsp;</td>
                            <td align="left" style="width: 175;">yang pindah</td>
                            <td align="left">&nbsp;</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">7.</td>
                            <td align="left" style="width: 175;">Rencana Tanggal Pindah</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 450; border: 1px;"><b><?php echo $tampil->rencana_tanggal_pindah; ?></b></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 20px; border: 0px;">8.</td>
                            <td align="left" style="width: 175;">Keluarga Yang Pindah</td>
                        </tr>
                    </table>
                    <table align="center" border="0.5" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="center" width="20"><b>No</b></td>
                            <td align="center" width="230"><b>NIK</b></td>
                            <td align="center" width="230"><b>Nama</b></td>
                            <td align="center" width="150" ><b>SHDK</b></td>
                        </tr>
                        <tr>
                            <td align="center" width="20">1.</td>
                            <td align="center" width="230"><?php echo $tampil->nik_pengikut1;?></td>
                            <td align="center" width="230"><?php echo $tampil->nama_pengikut1;?></td>
                            <td align="center" width="150"><?php echo $tampil->hubkeluarga_pengikut1;?></td>
                        </tr>
                        <tr>
                            <td align="center" width="20">2.</td>
                            <td align="center" width="230"><?php echo $tampil->nik_pengikut2;?></td>
                            <td align="center" width="230"><?php echo $tampil->nama_pengikut2;?></td>
                            <td align="center" width="150"><?php echo $tampil->hubkeluarga_pengikut2;?></td>
                        </tr>
                        <tr>
                            <td align="center" width="20">3.</td>
                            <td align="center" width="230"><?php echo $tampil->nik_pengikut3;?></td>
                            <td align="center" width="230"><?php echo $tampil->nama_pengikut3;?></td>
                            <td align="center" width="150"><?php echo $tampil->hubkeluarga_pengikut3;?></td>
                        </tr>
                        <tr>
                            <td align="center" width="20">4.</td>
                            <td align="center" width="230"><?php echo $tampil->nik_pengikut4;?></td>
                            <td align="center" width="230"><?php echo $tampil->nama_pengikut4;?></td>
                            <td align="center" width="150"><?php echo $tampil->hubkeluarga_pengikut4;?></td>
                        </tr>
                        <tr>
                            <td align="center" width="20">5.</td>
                            <td align="center" width="230"><?php echo $tampil->nik_pengikut5;?></td>
                            <td align="center" width="230"><?php echo $tampil->nama_pengikut5;?></td>
                            <td align="center" width="150"><?php echo $tampil->hubkeluarga_pengikut5;?></td>
                        </tr>
                        <tr>
                            <td align="center" width="20">6.</td>
                            <td align="center" width="230"><?php echo $tampil->nik_pengikut6;?></td>
                            <td align="center" width="230"><?php echo $tampil->nama_pengikut6;?></td>
                            <td align="center" width="150"><?php echo $tampil->hubkeluarga_pengikut6;?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table border="0" style="font-family: times; font-size: 12px;" align="center">
                            <tr>
                                <td align="left" width="200">Diketahui Oleh :</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="left" width="200">Dikeluarkan Oleh</td>
                            </tr>
                            <tr>
                                <td align="left" width="200">Camat <?php echo ucwords(strtolower($tampil->kecamatan)) ?></td>
                                <td style="width: 10;">&nbsp;</td>
                                <td align="center" style="width: 200;">PEMOHON</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="left" width="200"><b>a.n Kepala Desa <?php echo ucwords(strtolower($tampil->kelurahan)) ?></b></td>
                            </tr>
                            <tr>
                                <td align="left" width="200">No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tgl. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo date('Y'); ?></td>
                                <td style="width: 10;">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="left" width="200"> No. 475 /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ XII /  Tgl. <?php echo date('d'); ?>-<?php $tanggal_hari_ini= date('m'); echo short_bulan($tanggal_hari_ini); ?>-<?php echo date('Y'); ?></td>
                            </tr>
                            <tr>
                                <td align="center" width="200">&nbsp;</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td style="width: 200px;" align="center">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" style="width: 200;">&nbsp;</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td align="left" style="width: 200;">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" style="width: 200;">&nbsp;</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td align="left" style="width: 200;">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td align="left" style="width: 200;">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                            </tr>
                             <tr>
                                <td align="left" style="width: 200;">( .......................................... )</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td align="center" style="width: 200;"><b><u><?php echo $tampil->nama;?></u></b></td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="center" width="200"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
                            </tr>
                            <tr>
                                <td align="left" style="width: 200;">NIP :</td>
                                <td style="width: 10;">&nbsp;</td>
                                <td align="left" style="width: 200;">&nbsp;</td>
                                <td style="width: 40;">&nbsp;</td>
                                <td align="center" width="200">&nbsp;</td>
                            </tr>
                        </table>

                
                    </td>
                </tr>
            </table>
            </td>
        </tr>
    </table>
</body>
</html>