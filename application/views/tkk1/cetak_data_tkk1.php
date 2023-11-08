<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/images/header1.jpg'); ?>">
<title>Print Pengantar Kartu Keluarga</title>
</head>
<body>
<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir1))) == "01 Januari 1970"){
    $tgl1 = "-";
  }else {
    $tgl1 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir1)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir2))) == "01 Januari 1970"){
    $tgl2 = "-";
  }else {
    $tgl2 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir2)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir3))) == "01 Januari 1970"){
    $tgl3 = "-";
  }else {
    $tgl3 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir3)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir4))) == "01 Januari 1970"){
    $tgl4 = "-";
  }else {
    $tgl4 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir4)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir5))) == "01 Januari 1970"){
    $tgl5 = "-";
  }else {
    $tgl5 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir5)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir6))) == "01 Januari 1970"){
    $tgl6 = "-";
  }else {
    $tgl6 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir6)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir7))) == "01 Januari 1970"){
    $tgl7 = "-";
  }else {
    $tgl7 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir7)));
  }
?>

<?php
  if(tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir8))) == "01 Januari 1970"){
    $tgl8 = "-";
  }else {
    $tgl8 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir8)));
  }
?>
<table align="center" style="font-size: 12px; font-family: times;" border="0">
                <tr>
                    <td align="center" width="1200"><b>PEMERINTAH KABUPATEN <?php echo ucwords(strtoupper($tampil->kabupaten)) ?><br>FORMULIR ISIAN BIODATA PENDUDUK UNTUK WARGA (PER KELUARGA)</b></td>
                </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" align="center" style="font-family: times;">
    <tr>
        <td align="center">
            <table align="center" style="font-size: 10px;" bgcolor="#DCDCDC">
                <tr bgcolor="#DCDCDC">
                    <td align="center" width="1200" bgcolor="#DCDCDC"><b>PERHATIAN :  isilan formulir ini dengan huruf cetak dan jelas serta mengikuti "TATA CARA PENGISIAN FORMULIR" pada halaman sebaliknya</b></td>
                </tr>
            </table>
            <table align="left" style="font-size: 9px;" border="0">
                <tr>
                    <td align="left" style="font-size: 10px;"><b>DATA KEPALA KELUARGA</b></td>
                </tr>
            </table>
            <table align="left" style="font-size: 10px;" border="0">
                <tr>
                    <td align="center" width="80">&nbsp;</td>
                    <td align="left" width="200"><b>Nama Kepala Keluarga</b></td>
                    <td align="center" width="15">:</td>
                    <td align="left" colspan="16" style="border: 0.6px;"><b>&nbsp;<?php echo $tampil->nama;?></b></td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="150"><b>&nbsp;&nbsp;Kota Nama Provinsi</b></td>
                    <td align="center" width="15">:</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="100" style="border: 0.6px;"><b>&nbsp;<?php echo ucwords(strtoupper($tampil->propinsi)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="80">&nbsp;</td>
                    <td align="left" width="200"><b>Alamat</b></td>
                    <td align="center" width="15">:</td>
                    <td align="left" colspan="16" style="border: 0.6px;"><b>&nbsp;<?php echo $tampil->dusun;?></b></td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="150"><b>&nbsp;&nbsp;Kota Nama Kabupaten/Kota</b></td>
                    <td align="center" width="15">:</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="100" style="border: 0.6px;"><b>&nbsp;<?php echo ucwords(strtoupper($tampil->kabupaten)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="80">&nbsp;</td>
                    <td align="left" width="200"><b>RT/RW</b></td>
                    <td align="center" width="15">:</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="25" style="border: 0.6px;">RT</td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo substr($tampil->rt, 0, 1) ?> </td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo substr($tampil->rt, 1, 1) ?> </td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo substr($tampil->rt, 2, 1) ?> </td>
                    <td align="center" width="25" style="border: 0.6px;">RW</td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo substr($tampil->rw, 0, 1) ?> </td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo substr($tampil->rw, 1, 1) ?> </td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo substr($tampil->rw, 2, 1) ?> </td>
                    <td align="center" width="120" style="border: 0.6px;">Jumlah Anggota Keluarga</td>
                    <td align="center" width="20" style="border: 0.6px;"> <?php echo $tampil->jumlah_keluarga;?> </td>
                    <td align="center" width="30" style="border: 0.6px;">Orang</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="150"><b>&nbsp;&nbsp;Kota Nama Kecamatan</b></td>
                    <td align="center" width="15">:</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="100" style="border: 0.6px;"><b>&nbsp;<?php echo ucwords(strtoupper($tampil->kecamatan)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="80">&nbsp;</td>
                    <td align="left" width="200"><b>Telepon</b></td>
                    <td align="center" width="15">:</td>
                    <td align="left" colspan="16" style="border: 0.6px;"><b>&nbsp; <?php echo $tampil->telepon;?> </b></td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="150"><b>&nbsp;&nbsp;Kota Desa/Kelurahan</b></td>
                    <td align="center" width="15">:</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="100" style="border: 0.6px;"><b>&nbsp;<?php echo ucwords(strtoupper($tampil->kelurahan)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="80">&nbsp;</td>
                    <td align="left" width="200">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" colspan="16">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="150"><b>&nbsp;&nbsp;Kota Dusun/Dukuh/Kampung</b></td>
                    <td align="center" width="15">:</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="20" style="border: 0.6px;">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="100" style="border: 0.6px;"><b>&nbsp;<?php echo ucwords(strtoupper($tampil->dusun)) ?></b></td>
                </tr>
            </table>
            <table align="left" style="font-size: 9px;" border="0">
                <tr>
                    <td align="left" width="200" style="font-size: 10px;"><b>DATA KELUARGA</b></td>
                </tr>
            </table>
            <table align="left" border="0.4" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center" style="font-size: 11px;" valign="middle"><b>No<br>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;" valign="middle"><b>Nama Lengkap</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;" valign="middle"><b>No KTP/ Nopen</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;" valign="middle"><b>Alamat Sebelumnya</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;" valign="middle"><b>Nomor Paspor</b></td>
                    <td align="center" colspan="10" style="font-size: 11px;" valign="middle"><b>Tanggal Berakhir Paspor</b></td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;"><b>1</b></td>
                    <td align="center" colspan="2" bgcolor="#DCDCDC" style="font-size: 8px;"><b>2</b></td>
                    <td align="center" colspan="4" bgcolor="#DCDCDC" style="font-size: 8px;"><b>3</b></td>
                    <td align="center" colspan="4" bgcolor="#DCDCDC" style="font-size: 8px;"><b>4</b></td>
                    <td align="center" colspan="4" bgcolor="#DCDCDC" style="font-size: 8px;"><b>5</b></td>
                    <td align="center" colspan="10" bgcolor="#DCDCDC" style="font-size: 8px;"><b>6</b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>1</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo ucwords(strtoupper($tampil->nama)) ?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_ktp;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas;?></b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>2</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nm_pengikut1;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nik_pengikut1;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor1;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas1;?></b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>3</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nm_pengikut2;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nik_pengikut2;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor2;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas2;?></b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>4</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nm_pengikut3;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nik_pengikut3;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor3;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas4;?></b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>5</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nm_pengikut5;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nik_pengikut5;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor5;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas5;?></b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>6</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nm_pengikut6;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nik_pengikut6;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor6;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas6;?></b></td>
                </tr>
                <tr>
                    <td align="center" style="font-size: 11px;"><b>7</b></td>
                    <td align="left" colspan="2" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nm_pengikut7;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->nik_pengikut7;?></b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b>&nbsp;</b></td>
                    <td align="left" colspan="4" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_paspor7;?></b></td>
                    <td align="left" colspan="10" style="font-size: 11px;">&nbsp;<b><?php echo $tampil->no_kitas7;?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>No</b></td>
                    <td align="center" width="78" style="font-size: 11px;"><b>Jenis Kelamin</b></td>
                    <td align="center" width="92" style="font-size: 11px;"><b>Tempat Lahir</b></td>
                    <td align="center" colspan="3" width="100" style="font-size: 11px;"><b>Tanggal/Bulan/ Tahun/Lahir</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>Umur</b></td>
                    <td align="center" width="90" colspan="3" style="font-size: 11px;"><b>Akta Lahir/Surat lahir</b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>No Akta/ Kenal Lahir</b></td>
                    <td align="center" colspan="2" width="40" style="font-size: 11px;"><b>Gol Darah</b></td>
                    <td align="center" width="60" style="font-size: 11px;"><b>Agama</b></td>
                    <td align="center" width="100" style="font-size: 11px;"><b>Status Perkawinan</b></td>
                    <td align="center" colspan="3" width="60" style="font-size: 11px;"><b>Akta/Buku Nikah</b></td>
                    <td align="center" width="70" style="font-size: 11px;"><b>No Akta Perkawinan</b></td>
                    <td align="center" colspan="2" width="80" style="font-size: 11px;"><b>Tgl Perkawinan</b></td>
                    <td align="center" colspan="2" width="80" style="font-size: 11px;"><b>Akta Cerai/ Surat Cerai</b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>No Akta Cerai/ Surat Cerai*)</b></td>
                    <td align="center" width="70" style="font-size: 11px;"><b>Tanggal Perceraian</b></td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="15"><b>&nbsp;</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="78"><b>7</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="92"><b>8</b></td>
                    <td align="center" colspan="3" bgcolor="#DCDCDC" style="font-size: 8px;" width="100"><b>9</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="30"><b>10</b></td>
                    <td align="center" colspan="3" bgcolor="#DCDCDC" style="font-size: 8px;" width="90"><b>11</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="80"><b>12</b></td>
                    <td align="center" colspan="2" bgcolor="#DCDCDC" style="font-size: 8px;" width="40"><b>13</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="60"><b>14</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="100"><b>15</b></td>
                    <td align="center" colspan="3" bgcolor="#DCDCDC" style="font-size: 8px;" width="60"><b>16</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="70"><b>17</b></td>
                    <td align="center" colspan="2" bgcolor="#DCDCDC" style="font-size: 8px;" width="80"><b>18</b></td>
                    <td align="center" colspan="2" bgcolor="#DCDCDC" style="font-size: 8px;" width="80"><b>19</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="80"><b>20</b></td>
                    <td align="center" bgcolor="#DCDCDC" style="font-size: 8px;" width="70"><b>21</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>1</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo $tampil->kelamin;?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;">&nbsp;<b><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir)));?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>2</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->jk_pengikut1)) ?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir1)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo $tgl1; ?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama_pengikut1)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin1)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>3</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->jk_pengikut2)) ?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir2)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo $tgl2; ?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama_pengikut2)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin2)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>4</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->jk_pengikut3)) ?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir3)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo $tgl3; ?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama_pengikut3)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin3)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>5</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->jk_pengikut4)) ?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir4)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo $tgl4; ?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama_pengikut4)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin4)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>6</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->jk_pengikut5)) ?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir5)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo $tgl5; ?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama_pengikut5)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin5)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>7</b></td>
                    <td align="left" width="78" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->jk_pengikut6)) ?></b></td>
                    <td align="left" width="92" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir6)) ?></b></td>
                    <td align="left" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo $tgl6; ?></b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="60" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->agama_pengikut6)) ?></b></td>
                    <td align="left" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin6)) ?></b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="20" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="40" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="left" width="70" style="font-size: 11px;"><b>&nbsp;</b></td>
                </tr>
                <tr>
                    <td align="center" valign="middle" width="15" style="font-size: 11px;"><b>No</b></td>
                    <td align="center" valign="middle" colspan="2" style="font-size: 11px;"><b>Status Hub Dalam<br>Keluarga</b></td>
                    <td align="center" valign="middle" colspan="3" style="font-size: 11px;"><b>Kelainan Fisik &<br>Mental</b></td>
                    <td align="center" valign="middle" colspan="3" style="font-size: 11px;"><b>Penyandang<br>Cacat</b></td>
                    <td align="center" colspan="2" valign="middle" width="30" style="font-size: 11px;"><b>Pendidikan<br>Terakhir</b></td>
                    <td align="center" valign="middle" colspan="3" width="90" style="font-size: 11px;"><b>Pekerjaan</b></td>
                    <td align="center" valign="middle" width="80" style="font-size: 11px;"><b>NIK Ibu</b></td>
                    <td align="center" valign="middle" colspan="4" width="100" style="font-size: 11px;"><b>Nama Lengkap Ibu</b></td>
                    <td align="center" valign="middle" colspan="2" width="60" style="font-size: 11px;"><b>NIK Ayah</b></td>
                    <td align="center" valign="middle" colspan="4" style="font-size: 11px;"><b>Nama Lengkap<br>Ayah</b></td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#DCDCDC" width="15" style="font-size: 8px;"><b>&nbsp;</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="2" width="78" style="font-size: 8px;"><b>22</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="3" width="110" style="font-size: 8px;"><b>23</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="3" width="100" style="font-size: 8px;"><b>24</b></td>
                    <td align="center" colspan="2" bgcolor="#DCDCDC" width="30" style="font-size: 8px;"><b>25</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="3" width="90" style="font-size: 8px;"><b>26</b></td>
                    <td align="center" bgcolor="#DCDCDC" width="80" style="font-size: 8px;"><b>27</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="4" width="40" style="font-size: 8px;"><b>28</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="2" width="60" style="font-size: 8px;"><b>29</b></td>
                    <td align="center" bgcolor="#DCDCDC" colspan="4" width="100" style="font-size: 8px;"><b>30</b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>1</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b><?php echo ucwords(strtolower($tampil->pekerjaan)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="40" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>2</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga1)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan1)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pekerjaan1)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu1)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah1)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>3</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga2)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan2)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pekerjaan2)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu2)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah2)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>4</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga3)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan3)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pekerjaan3)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu3)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah3)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>5</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga4)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan4)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pekerjaan4)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu4)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah4)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>6</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga5)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan5)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pekerjaan5)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu5)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah5)) ?></b></td>
                </tr>
                <tr>
                    <td align="center" width="15" style="font-size: 11px;"><b>7</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->hub_keluarga6)) ?></b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="35" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" width="30" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="2" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pendidikan6)) ?></b></td>
                    <td align="center" colspan="3" width="90" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->pekerjaan6)) ?></b></td>
                    <td align="center" width="80" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" width="100" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu6)) ?></b></td>
                    <td align="center" colspan="2" width="60" style="font-size: 11px;"><b>&nbsp;</b></td>
                    <td align="center" colspan="4" style="font-size: 11px;"><b>&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah6)) ?></b></td>
                </tr>
            </table>
            <br>
            <table border="0" style="font-size: 12px;">
                <tr>
                    <td align="center" width="100">&nbsp;</td> 
                    <td align="left" width="100">Nama Ketua</td>
                    <td align="center" width="15">:</td>
                    <td align="left" width="200">........................................</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">Petugas / Registrasi</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">Mengetahui,</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
                </tr>
                <tr>
                    <td align="center" width="100">&nbsp;</td> 
                    <td align="left" width="100">Nama Ketua RT</td>
                    <td align="center" width="15">:</td>
                    <td align="left" width="200">........................................</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">&nbsp;</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200"><?php echo $kepdes->jabatan;?></td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">Kepala Keluarga</td>
                </tr>
                <tr>
                    <td align="center" width="100">&nbsp;</td> 
                    <td align="left" width="100">Nama Ketua RW</td>
                    <td align="center" width="15">:</td>
                    <td align="left" width="200">........................................</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">&nbsp;</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">&nbsp;</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">&nbsp;</td>
                </tr>
            </table>
            <table border="0" style="font-size: 12px;">
                <tr>
                    <td align="center" width="100">&nbsp;</td>
                    <td align="justify" width="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikianlan Formulir ini saya / kami isi dengan sesungguhnya apabila keterangan tersebut tidak sesuai dengan Keadaan sebenarnya, saya bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku.</td>
                </tr>
            </table>
            <table border="0" style="font-size: 12px;">
                <tr>
                    <td align="center" width="100">&nbsp;</td> 
                    <td align="left" width="100">&nbsp;</td>
                    <td align="center" width="15">&nbsp;</td>
                    <td align="left" width="200">&nbsp;</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200">........................................</td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200"><b><?php echo $kepdes->nama_kades; ?></b></td>
                    <td align="center" width="50">&nbsp;</td> 
                    <td align="center" width="200"><b><?php echo ucwords(strtolower($tampil->nama)) ?></b></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>