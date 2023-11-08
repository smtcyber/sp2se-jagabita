<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 35%;">
            <?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($tampil)) {
                    echo ucwords(strtolower($tampil->kelurahan)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($desa_ahli)) {
                    echo ucwords(strtolower($desa_ahli)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($data)) {
                    echo ucwords(strtolower($data->kabupaten)). ', '. tgl_indo($tanggal_hari_ini);
            }
                
            ?>
        </td>
    </tr>
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 35%;"><?php echo $kepdes->jabatan; ?></td>
    </tr>
    <tr>
        <td style="height: 60px;">
        </td>
        <td style="height: 60px;">
        </td>
        <td style="height: 60px;">
        </td>
        <td style="height: 60px;">
        </td>
    </tr>
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 45%;"><b><u><?php echo $kepdes->nama_kades; ?></u></b></td>
    </tr>
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 45%;"><?php echo $kepdes->pangkat; ?></td>
    </tr>
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 45%;"><?php echo $kepdes->nip; ?></td>
    </tr>
</table>