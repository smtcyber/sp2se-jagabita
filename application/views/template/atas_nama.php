<table border="0" style="width: 100%; font-family: times; font-size: 18px;">
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 25%;"></td>
        <td align="center" style="width: 45%;">
            <?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($tampil)) {
                    echo ucwords(strtolower($tampil->kabupaten)). ', '. tgl_indo($tanggal_hari_ini);
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
        <td align="center" style="width: 25%;"></td>
        <td align="center" style="width: 45%;">
        <?php echo $atas_nama->status; ?></td>
    </tr>
    <tr>
        <td style="width: 10%"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 25%;"></td>
        <td align="center" style="width: 45%;"><?php echo $atas_nama->jabatan; ?></td>
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
        <td align="center" style="width: 25%;"></td>
        <td align="center" style="width: 45%;"><b><u><?php echo $atas_nama->atas_nama; ?></u></b></td>
    </tr>
    <tr>
        <td style="width: 10%;"></td>
        <td align="center" style="width: 20%;"></td>
        <td align="center" style="width: 25%;"></td>
        <td align="center" style="width: 45%;"><?php echo $atas_nama->nip; ?></td>
    </tr>
</table>