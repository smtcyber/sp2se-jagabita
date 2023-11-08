<html>
<head>
    <?php

    $nama_file = "kartu_keluarga.xls";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
</head>
<body>

<?php
    if($tampil->tgl_lahir1 == "1970-01-01"){
      $tgl1 = "-";
    }else {
      $tgl1 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir1)));
    }
?>

<?php
    if($tampil->tgl_lahir2 == "1970-01-01"){
      $tgl2 = "-";
    }else {
      $tgl2 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir2)));
    }
?>

<?php
    if($tampil->tgl_lahir3 == "1970-01-01"){
      $tgl3 = "-";
    }else {
      $tgl3 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir3)));
    }
?>

<?php
    if($tampil->tgl_lahir4 == "1970-01-01"){
      $tgl4 = "-";
    }else {
      $tgl4 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir4)));
    }
?>

<?php
    if($tampil->tgl_lahir5 == "1970-01-01"){
      $tgl5 = "-";
    }else {
      $tgl5 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir5)));
    }
?>

<?php
    if($tampil->tgl_lahir6 == "1970-01-01"){
      $tgl6 = "-";
    }else {
      $tgl6 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir6)));
    }
?>

<?php
    if($tampil->tgl_lahir7 == "1970-01-01"){
      $tgl7 = "-";
    }else {
      $tgl7 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir7)));
    }
?>

<?php
    if($tampil->tgl_lahir8 == "1970-01-01"){
      $tgl8 = "-";
    }else {
      $tgl8 = tgl_indo(date('Y-m-d', strtotime($tampil->tgl_lahir8)));
    }
?>

<br><br>
<table align="center" style="font-size: 19px; font-family: arial;" border="0">
    <tr>
        <td align="center" colspan="3"><b><strong>KARTU KELUARGA</strong></b></td>
    </tr>
    <tr>
        <td align="center" width="25" border="0"><b>No.</b></td>
        <td align="center" width="5" border="0">&nbsp;</td>
        <td align="center" width="180" border="1"><?php echo $tampil->no_kk;?></td>
    </tr>
</table>
<table align="center" style="font-size: 12px; font-family: arial;" border="0">
    <tr>
        <td align="left" width="200"><b>Nama Kepala Keluarga</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="200"><b><?php echo $tampil->nama;?></b></td>
        <td align="center" width="400">&nbsp;</td>
        <td align="left" width="110"><b>Kecamatan</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="150"><b><?php echo $tampil->kecamatan;?></b></td>
    </tr>
    <tr>
        <td align="left" width="200"><b>Alamat</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="200"><b><?php echo $tampil->dusun;?></b></td>
        <td align="center" width="400">&nbsp;</td>
        <td align="left" width="110"><b>Kabupaten</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="150"><b><?php echo $tampil->kabupaten;?></b></td>
    </tr>
    <tr>
        <td align="left" width="200"><b>RT/RW</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="200"><b><?php echo $tampil->rt;?> / <?php echo $tampil->rw;?></b></td>
        <td align="center" width="400">&nbsp;</td>
        <td align="left" width="110"><b>Kode Pos</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="150"><b><?php echo $tampil->kode_pos;?></b></td>
    </tr>
    <tr>
        <td align="left" width="200"><b>Kelurahan/Desa</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="200"><b><?php echo $tampil->kelurahan;?></b></td>
        <td align="center" width="400">&nbsp;</td>
        <td align="left" width="110"><b>Provinsi</b></td>
        <td align="center" width="15"><b>:</b></td>
        <td align="left" width="150"><b>Jawa Barat</b></td>
    </tr>
</table>
    <br>
<table border="1" cellpadding="0" cellspacing="0" align="center" style="font-family: arial; font-size: 12px;">
    <tr>
        <td align="center" width="25">No.</td>
        <td align="center" width="200">Nama Lengkap</td>
        <td align="center" width="130">NIK</td>
        <td align="center" width="100">Jenis Kelamin</td>
        <td align="center" width="100">Tempat Lahir</td>
        <td align="center" width="120">Tanggal Lahir</td>
        <td align="center" width="80">Agama</td>
        <td align="center" width="160">Pendidikan</td>
        <td align="center" width="160">Pekerjaan</td>
    </tr>
    <tr>
        <td align="center" width="25" style="font-size: 10px;">&nbsp;</td>
        <td align="center" width="200" style="font-size: 10px;">1</td>
        <td align="center" width="130" style="font-size: 10px;">2</td>
        <td align="center" width="100" style="font-size: 10px;">3</td>
        <td align="center" width="100" style="font-size: 10px;">4</td>
        <td align="center" width="120" style="font-size: 10px;">5</td>
        <td align="center" width="80" style="font-size: 10px;">6</td>
        <td align="center" width="160" style="font-size: 10px;">7</td>
        <td align="center" width="160" style="font-size: 10px;">8</td>
    </tr>
    <tr>
        <td align="center" width="25">1.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nama;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->no_ktp;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->kelamin;?></td>
        <td align="left" width="100">&nbsp;<?php echo ucwords(strtolower($tampil->tempat_lahir)) ?></td>
        <td align="left" width="120">&nbsp;<?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir)));?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan;?></td>
    </tr>
    <tr>
        <td align="center" width="25">2.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut1;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut1;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut1;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir1;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl1; ?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut1;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan1;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan1;?></td>
    </tr>
    <tr>
        <td align="center" width="25">3.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut2;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut2;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut2;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir2;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl2; ?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut2;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan2;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan2;?></td>
    </tr>
    <tr>
        <td align="center" width="25">4.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut3;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut3;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut3;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir3;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl3; ?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut3;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan3;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan3;?></td>
    </tr>
    <tr>
        <td align="center" width="25">5.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut4;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut4;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut4;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir4;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl4;?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut4;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan4;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan4;?></td>
    </tr>
    <tr>
        <td align="center" width="25">6.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut5;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut5;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut5;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir5;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl5;?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut5;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan5;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan5;?></td>
    </tr>
    <tr>
        <td align="center" width="25">7.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut6;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut6;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut6;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir6;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl6;?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut6;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan6;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan6;?></td>
    </tr>
    <tr>
        <td align="center" width="25">8.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut7;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut7;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut7;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir7;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl7;?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut7;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan7;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan7;?></td>
    </tr>
    <tr>
        <td align="center" width="25">9.</td>
        <td align="left" width="200">&nbsp;<?php echo $tampil->nm_pengikut8;?></td>
        <td align="left" width="130">&nbsp;<?php echo $tampil->nik_pengikut8;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->jk_pengikut8;?></td>
        <td align="left" width="100">&nbsp;<?php echo $tampil->tempat_lahir8;?></td>
        <td align="left" width="120">&nbsp;<?php echo $tgl8;?></td>
        <td align="left" width="80">&nbsp;<?php echo $tampil->agama_pengikut8;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pendidikan8;?></td>
        <td align="left" width="160">&nbsp;<?php echo $tampil->pekerjaan8;?></td>
    </tr>
    <tr>
        <td align="center" width="25">10.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="130">&nbsp; ...... </td>
        <td align="left" width="100">&nbsp; ...... </td>
        <td align="left" width="100">&nbsp; ...... </td>
        <td align="left" width="120">&nbsp; ...... </td>
        <td align="left" width="80">&nbsp; ...... </td>
        <td align="left" width="160">&nbsp; ...... </td>
        <td align="left" width="160">&nbsp; ...... </td>
    </tr>
</table>
<br>
<table border="1" cellpadding="0" cellspacing="0" align="center" style="font-family: arial; font-size: 12px;">
    <tr>
        <td align="center" width="25" rowspan="2" valign="middle">No.</td>
        <td align="center" width="200" rowspan="2" valign="middle">Status Hubungan</td>
        <td align="center" width="200" rowspan="2" valign="middle">Status Hubungan Dalam Keluarga</td>
        <td align="center" width="200" rowspan="2" valign="middle">Kewarganegaraan</td>
        <td align="center" colspan="2">Nama Orang Tua</td>
    </tr>
    <tr>
        <td width="235" align="center">Ayah</td>
        <td width="235" align="center">Ibu</td>
    </tr>
    <tr>
        <td align="center" width="25" style="font-size: 10px;">&nbsp;</td>
        <td align="center" width="200" style="font-size: 10px;">1</td>
        <td align="center" width="200" style="font-size: 10px;">2</td>
        <td align="center" width="200" style="font-size: 10px;">3</td>
        <td align="center" width="235" style="font-size: 10px;">4</td>
        <td align="center" width="235" style="font-size: 10px;">5</td>
    </tr>
    <tr>
        <td align="center" width="25">1.</td>
        <td align="left" width="200">&nbsp;<?php echo ucwords(strtolower($tampil->status_kawin)) ?></td>
        <td align="left" width="200">&nbsp;<?php echo ucwords(strtolower($tampil->h_keluarga)) ?></td>
        <td align="left" width="200">&nbsp;Indonesia</td>
        <td align="left" width="235">&nbsp;<?php echo ucwords(strtolower($tampil->nm_ayah)) ?></td>
        <td align="left" width="235">&nbsp;<?php echo ucwords(strtolower($tampil->nm_ibu)) ?></td>
    </tr>
    <tr>
        <td align="center" width="25">2.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">3.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">4.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">5.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">6.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">7.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">8.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">9.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
    <tr>
        <td align="center" width="25">10.</td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="200">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
        <td align="left" width="235">&nbsp; ...... </td>
    </tr>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0" align="center" style="font-family: arial; font-size: 14px;">
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200">REG : 474.1 / .... / <?php $tanggal_hari_ini= date('m'); echo short_bulan($tanggal_hari_ini); ?> / <?php echo date('Y'); ?></td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200"><?php echo ucwords(strtolower($tampil->kelurahan)) ?>, <?php $tanggal_hari_ini= date('Y-m-d'); echo tgl_indo($tanggal_hari_ini); ?></td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200"><?php echo $kepdes->jabatan; ?></td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200">&nbsp;</td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200">&nbsp;</td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200">&nbsp;</td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200"><u><b><?php echo $kepdes->nama_kades; ?></b></u></td>
        <td width="50">&nbsp;</td>
    </tr>
    <tr>
        <td width="900">&nbsp;</td>
        <td align="center" width="200"><?php echo $kepdes->nip; ?></td>
        <td width="50">&nbsp;</td>
    </tr>
</table>
</body>
</html>