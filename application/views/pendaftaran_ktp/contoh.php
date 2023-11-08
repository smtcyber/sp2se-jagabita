<?php
session_start();
ob_start();
include "../../../config17/lib2.php";
include "../../../config17/fungsi_indotgl.php";
include "../../../config17/cocoba.php";
include "../kepdes.php";
$queenak=mysql_query("select * from atas_nama");
$qe=mysql_fetch_array($queenak);
if($qe[status] == '0'){
  $headerr = "Kepala Desa ".$desi;
  $bawahnya = $kuwu;
}else{
  if(empty($qe[untuk_beliau])){
  $headerr = "An. Kepala Desa ".$desi;
  $jab = $qe[jabatan];
  $bawahnya = $qe[atas_nama];
  }else{
  $headerr = "An. Kepala Desa ".$desi;
  $jab = $qe[jabatan];
  $ub = $qe[untuk_beliau];
  $bawahnya = $qe[atas_nama];
  $ubi = "u.b";
  }
}
$id = $_GET['id'];
$sql = mysql_query("select * from tpindah_datang where id_pindah_datang = '$id'");
$qq  = mysql_fetch_array($sql);
// RT
    if ($qq['rt']<10 || $qq['rt_ayah']<10 || $qq['rt_ibu']<10){
        $rt1    ="".$qq['rt'];
        $rt_ayah="".$qq['rt_ayah'];
        $rt_ibu ="".$qq['rt_ibu'];
    }else {
        $rt1    ="".$qq['rt'];
        $rt_ayah="".$qq['rt_ayah'];
        $rt_ibu ="".$qq['rt_ibu'];
    }

//RW
    if ($qq['rw']<10 || $qq['rw_ayah']<10 || $qq['rw_ibu']<10){
        $rw1    ="".$qq['rw'];
        $rw_ayah="".$qq['rw_ayah'];
        $rw_ibu ="".$qq['rw_ibu'];
    }else {
        $rw1="".$qq['rw'];
        $rw_ayah="".$qq['rw_ayah'];
        $rw_ibu="".$qq['rw_ibu'];
    }
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>..............</title>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="1000" style="font-family: times;" >
    <tr>
        <td align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="700" align="left">
                <tr>
                    <td align="right" rowspan="4" style="width: 100px;"><img src="../../images/cirebonjpg.jpg" style="width: 90px; height= 90px; "></td>
                    <td align="center" style="width: 620px; font-weight: bold; font-size: 20px;">PEMERINTAH KABUPATEN GARUT</td>
                </tr>
                <tr>
                    <td align="center" style="width: 620px; font-weight: bold; font-size: 20px;">KECAMATAN LELES</td>
                </tr>
                <tr>
                    <td align="center" style="width: 620px; font-weight: bold; font-size: 25px;">KANTOR DESA JANGKURANG</td>
                </tr>
                <tr>
                    <td align="center" style="width: 600px; font-size: 16px;">Jln. Jangkurang No.83 Leles -Garut Kode Pos 44152</td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><hr><hr style="margin-top:-12"></td>
                </tr>
            </table>
            <table align="justify" border="0">
                <tr>
                    <td align="center">
                    <table border="0">
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">PROVINSI</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">3</td>
                            <td align="center" style="width: 15; border: 1px;">2</td>
                            <td></td>
                            <td></td>
                            <td align="right" style="width: 70;">*)</td>
                            <td></td>
                            <td align="left" style="width: 270px; border: 1px;">..........................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">KABUPATEN</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">0</td>
                            <td align="center" style="width: 15; border: 1px;">5</td>
                            <td></td>
                            <td></td>
                            <td align="right" style="width: 70;">*)</td>
                            <td></td>
                            <td align="left" style="width: 270px; border: 1px;">..........................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">KECAMATAN</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">0</td>
                            <td align="center" style="width: 15; border: 1px;">9</td>
                            <td></td>
                            <td></td>
                            <td align="right" style="width: 100;">*)</td>
                            <td></td>
                            <td align="left" style="width: 270px; border: 1px;">..........................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">DESA/ KELURAHAN</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">0</td>
                            <td align="center" style="width: 15; border: 1px;">0</td>
                            <td align="center" style="width: 15; border: 1px;">0</td>
                            <td align="center" style="width: 15; border: 1px;">0</td>
                            <td align="right" style="width: 70;">*)</td>
                            <td></td>
                            <td align="left" style="width: 270px; border: 1px;">..........................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" valign="top" style="width: 200px;">DUSUN/DUKUH/KAMPUNG</td>
                            <td align="left" valign="top">:</td>
                            <td align="left" colspan="4" style="width: 60;">KP. SINGKUR</td>
                            <td align="right" style="width: 70;">&nbsp;</td>
                            <td></td>
                            <td align="left" style="width: 200px;">&nbsp;</td>
                        </tr>
                    </table>
                    <table align="center">
                        <tr>
                            <td align="center" style="font-size: 16px;"><u>SURAT KETERANGAN PINDAH WNI</u><br>ANTAR KABUPATEN<br>Nomor ................................</td>
                        </tr>
                    </table>
                    <table align="left">
                        <tr>
                            <td align="left" style="font-size: 14px;">DATA DAERAH ASAL</td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">1. Nomor Kartu Keluarga</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">2. Nama Kepala Keluarga</td>
                            <td align="left">:</td>
                            <td align="left" colspan="21" style="border: 1px;">...............................</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">3. Alamat</td>
                            <td align="left">:</td>
                            <td align="left" colspan="8" style="border: 1px;">..................</td>
                            <td align="center" colspan="3" style="width: 20;">RT</td>
                            <td align="center" colspan="3" style="width: 20; border: 1px;">....</td>
                            <td>&nbsp;</td>
                            <td align="center" colspan="3" style="width: 20;">RW</td>
                            <td align="center" colspan="3" style="width: 20; border: 1px;">....</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">&nbsp;&nbsp;&nbsp;&nbsp;a. Desa/Kel</td>
                            <td align="left">:</td>
                            <td align="left" colspan="8" style="border: 1px;">..................</td>
                            <td align="left" colspan="5">c. Kab/Kota</td>
                            <td align="left" colspan="8" style="border: 1px;">..................</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">&nbsp;&nbsp;&nbsp;&nbsp;b. Kecamatan</td>
                            <td align="left">:</td>
                            <td align="left" colspan="8" style="border: 1px;">..................</td>
                            <td align="left" colspan="5">d. Provinsi</td>
                            <td align="left" colspan="8" style="border: 1px;">..................</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">&nbsp;</td>
                            <td align="left">:</td>
                            <td align="left" colspan="5">Kode Pos</td>
                            <td align="left" colspan="8" style="border: 1px;">...................</td>
                            <td align="left" colspan="8">&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">4. NIK Pemohon</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 200px;">5. Nama Lengkap</td>
                            <td align="left">:</td>
                            <td align="left" colspan="21" style="border: 1px;">...............................</td>
                            <td></td>
                        </tr>
                    </table>
                    <br>
                    <table align="left">
                        <tr>
                            <td align="left" style="font-size: 14px;">DATA KEPINDAHAN</td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">1. Nomor Kartu Keluarga</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">1. Pekerjaan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">3. Keamanan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">5. Perumahan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">7. Lainnya</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td align="center">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">2. Pendidikan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">4. Kesehatan</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">6. Keluarga</td>
                            <td width="20"></td>
                            <td align="left" style="width: 80px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">2. Alamat Rumah</td>
                            <td align="left">:</td>
                            <td align="left" colspan="5" style="width: 15; border: 1px;">..............</td>
                            <td align="center" style="width: 15;">RT</td>
                            <td align="center" style="width: 80px; border: 1px;">...</td>
                            <td align="center" style="width: 15;">RW</td>
                            <td align="center" style="width: 80px; border: 1px;">...</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;&nbsp;&nbsp;&nbsp;a. Desa/Kel</td>
                            <td align="left">:</td>
                            <td align="left" colspan="4" style="width: 15; border: 1px;">..............</td>
                            <td align="left" colspan="2">c. Kab/kota</td>
                            <td align="left" colspan="3">.......................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;&nbsp;&nbsp;&nbsp;b. Kecamatan</td>
                            <td align="left">:</td>
                            <td align="left" colspan="4" style="width: 15; border: 1px;">..............</td>
                            <td align="left" colspan="2">d. Provinsi</td>
                            <td align="left" colspan="3">.......................</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">3. Klasifikasi Pindah</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">1. Antar Desa/Kelurahan</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">3. Kabupaten/Kota</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">2. Antar Kecamatan</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">4. Antar Provinsi</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">4. Jenis Kepindahan</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">1. Kep. Keluarga</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">3. Kep. Kel dan sebagian angg kel</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;</td>
                            <td align="left">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">2. Kep. Kel dan seluruh</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">4. Anggota keluarga</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">5. Status No KK</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">1. Numpang KK</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">3. Tidak ada angg kel yg ditinggalkan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;&nbsp;&nbsp;&nbsp;bagi yang tidak pindah</td>
                            <td align="left">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">2. Membuat KK baru</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">4. Nomor KK tetap</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">6. Status No KK</td>
                            <td align="left">:</td>
                            <td align="center" style="width: 15; border: 1px;">...</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">1. Numpang KK</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">3. Nama Kep Kel dan No KK tetap</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">&nbsp;&nbsp;&nbsp;&nbsp;bagi yang pindah</td>
                            <td align="left">&nbsp;</td>
                            <td align="center" style="width: 15;">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">&nbsp;</td>
                            <td width="20"></td>
                            <td align="left" colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">7. Rencana Tanggal Pindah</td>
                            <td align="left">:</td>
                            <td align="left" colspan="3" style="border: 1px;">...</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left" style="width: 190px;">8. Keluarga Yang Pindah</td>
                            <td align="left">:</td>
                            <td align="left" colspan="3" style="border: 1px;">... Orang</td>
                        </tr>
                    </table><br>
                    <table align="justify" border="1" cellspacing="0" cellpadding="0" width="1000">
                        <tr>
                            <td align="center" width="20">No</td>
                            <td align="center" width="230">Nama</td>
                            <td align="center" width="230">Masa Berlaku KTP</td>
                            <td align="center" width="230">SHDK**)</td>
                        </tr>
                        <tr>
                            <td align="center" width="20">1</td>
                            <td align="center" width="230">..............................</td>
                            <td align="center" width="230">..............................</td>
                            <td align="center" width="230">..............................</td>
                        </tr>
                    </table>

                    </td>
                </tr>
                <tr>
                    <td align="center" style="font-weight: bold;">&nbsp;</td>
                </tr>
                <tr>
                    <td align="right" colspan="2">
                        <table border="0">
                            <tr>
                                <td align="center" width="200">Mengetahui,</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td align="center"><?= $desi ?>, <?= tgl_indo(date('Y-m-d')) ?></td>
                            </tr>
                            <tr>
                                <td align="center" width="200">Camat Kecamatan Leles</td>
                                <td style="width: 300px;" align="center">Pemohon</td>
                                <td align="center">An. Kepala Desa <?= $desi ?></td>
                            </tr>
                            <tr>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td align="center">Kaur Tu dan Umum</td>
                            </tr>
                            <tr>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="width: 200;">&nbsp;</td>
                                <td style="width: 200;">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" width="200">.......................</td>
                                <td style="width: 200;" align="center">........................</td>
                                <td align="center" width="200"><?= $bawahnya ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
        
    </tr>
</table>
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="surat_pindah.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
    //$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
    require_once('../html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P','legal','en', false, 'ISO-8859-15',array(5, 5, 5, 5));
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output($filename);
    }
    catch(HTML2PDF_exception $e) { echo $e; }
?>