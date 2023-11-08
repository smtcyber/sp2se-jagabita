<table border="0" style="width: 100%; font-size: 13px;">
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 33%; font-size: 13px;">Diverifikasi Oleh,</td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 33%; font-size: 13px;">
            <?php
            $tanggal_hari_ini= date('Y-m-d');
            if (!empty($tampil)) {
                    echo ucwords(strtolower($tampil->kelurahan)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($desa_ahli)) {
                    echo ucwords(strtolower($desa_ahli)). ', '. tgl_indo($tanggal_hari_ini);
            }
            if (!empty($data)) {
                    echo ucwords(strtolower($data->kelurahan)). ', '. tgl_indo($tanggal_hari_ini);
            }
                
            ?>
        </td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 33%; font-size: 13px; text-transform: uppercase;"><b>TKSK KECAMATAN <?php echo ucwords(strtolower($tampil->kecamatan)) ?></b></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 33%; font-size: 13px; text-transform: uppercase;"><b><?php echo $atas_nama->status; ?> <?php echo ucwords(strtolower($tampil->kelurahan)) ?></b></td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 33%; font-size: 13px; text-transform: uppercase;"> </td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 33%; font-size: 13px; text-transform: uppercase;"><?php echo $atas_nama->jabatan; ?></td>
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
        <td style="width: 5%"></td>
        <td align="center" style="width: 33%;"><b>____________________</b></td>
        <td align="center" style="width: 30%;"></td>
        <td align="center" style="width: 33%; font-size: 13px;"><b><u> <?php echo $atas_nama->atas_nama; ?></u></b></td>
    </tr>
    <tr>
    <td style="height: 40px;">
        </td>
        <td style="height: 40px;">
        </td>
        <td style="height: 40px;">
        </td>
        <td style="height: 40px;">
        </td>
    </tr>
    <tr>
        <td style="width: 5%"></td>
        <td align="center" style="width: 33%;"></td>
        <td align="center" style="width: 30%; font-size: 13px; text-transform: uppercase;"><b>CAMAT <?php echo ucwords(strtolower($tampil->kecamatan)) ?></b></td>
        <td align="center" style="width: 33%;"></td>
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
        <td style="width: 5%"></td>
        <td align="center" style="width: 33%;"></td>
        <td align="center" style="width: 30%; text-transform: uppercase;"><b>____________________</b></td>
        <td align="center" style="width: 33%;"></td>
    </tr>
</table>