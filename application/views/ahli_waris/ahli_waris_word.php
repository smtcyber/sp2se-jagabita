    <?php

    $nama_file = "ahli_waris.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>
<html>
<head>
<style type="text/css">
body,td,th {
    font-size: 18px;
    font-family: Times;
}
.table {
    border: thin;
}
.table td,th {
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 18px;
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
<?php $this->load->view('template/header_word') ?>
<h3 style="text-align: center; font-family: Times;"><u><b>SURAT KETERANGAN AHLI WARIS</b></u><br></h3>
<?php $this->load->view('nomor_surat/no_ahli_waris') ?>
<br>
<table border="0" align="center" style="line-height: 25px;">
    <tr>
        <td width="30">&nbsp;</td>
        <td width="620" align="justify">Yang Bertanda tangan di bawah ini menerangkan bahwa :</td>
        <td width="20">&nbsp;</td>
    </tr>
</table><br>
<?php
if ( ! empty($ahli_waris)) {
    $no = 1;
    $desa_ahli = '';
    $kecamatan_ahli = '';
    $kabupaten_ahli = '';
    foreach($ahli_waris->result() as $tampil) {
        $desa_ahli = $tampil->desa_ahli;
        $kecamatan_ahli = $tampil->kecamatan_ahli;
        $kabupaten_ahli = $tampil->kabupaten_ahli;
    ?>
<table border="0" align="center">
    <tr>
        <td width="15">&nbsp;</td>
        <td align="left" width="20"><?php echo $no++; ?>.</td>
        <td align="left" width="200">Nama</td>
        <td align="left" width="15">:</td>
        <td align="left" width="350"><?php echo $tampil->nama_ahli;?></td>
    </tr>
    <tr>
        <td width="15">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td align="left" width="200">Tempat / Tanggal Lahir</td>
        <td align="left" width="15">:</td>
        <td align="left" width="350"><?php echo $tampil->tempat_lahir_ahli;?>, <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tanggal_lahir_ahli))); ?></td>
    </tr>
    <tr>
        <td width="15">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td align="left" width="200">Jenis Kelamin</td>
        <td align="left" width="15">:</td>
        <td align="left" width="350"><?php echo $tampil->kelamin_ahli;?></td>
    </tr>
    
    <tr>
        <td width="15">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td align="left" width="200">Pekerjaan</td>
        <td align="left" width="15">:</td>
        <td align="left" width="350"><?php echo $tampil->pekerjaan_ahli;?></td>
    </tr>
    <tr>
        <td width="15">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td align="left" width="200" valign="top">Alamat Penduduk</td>
        <td align="left" width="15" valign="top">:</td>
        <td align="left" style="line-height: 22px;" width="350"><?php echo $tampil->alamat_ahli;?> RT <?php echo $tampil->rt_ahli;?> RW <?php echo $tampil->rw_ahli;?> Desa <?php echo $desa_ahli;?> Kecamatan <?php echo $tampil->kecamatan_ahli;?> Kabupaten <?php echo $tampil->kabupaten_ahli;?></td>
    </tr>
</table>    
<?php } } ?>
<br>
<table border="0" align="center" style="line-height: 25px;">
    <tr>
        <td width="30">&nbsp;</td>
        <td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini diterangkan dengan sebenarnya bahwa orang-orang tersebut di atas adalah para Ahli Waris dari Almarhum/Almarhumah <b><?php echo $meninggal->nama_pelapor;?></b> yang meninggal pada tanggal <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_meninggal))); ?>.</td>
        <td width="20">&nbsp;</td>
    </tr>
</table>
<br>
<table border="0" align="center" style="line-height: 25px;">
    <tr>
        <td width="30">&nbsp;</td>
        <td width="620" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian  Surat  keterangan Ahli Waris ini kami buat dengan sebenar-benarnya untuk dapat di pergunakan sebagaimana mestinya.</td>
        <td width="20">&nbsp;</td>
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
                                    if (!empty($desa_ahli)) {
                                         echo ucwords(strtolower($desa_ahli)). ', '. tgl_indo($tanggal_hari_ini);
                                    }
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