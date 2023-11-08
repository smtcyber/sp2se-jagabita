    <?php

    $nama_file = "Data_Penduduk.doc";

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$nama_file);
    header("Pragma: no-cache");
    header("Expires: 0");

    ?>

    <table border="1" width="100%" cellpadding="0" cellspacing="0">
    <tr>
       <th width="50">NO</th>
        <th width="200">NIK</th>
        <th width="200">NOMOR KK</th>
        <th width="200">NAMA</th>
        <th width="200">AGAMA</th>
        <th width="200">JENIS KELAMIN</th>
        <th width="200">TEMPAT LAHIR</th>
        <th width="200">TANGGAL LAHIR</th>
        <th width="200">STATUS KAWIN</th>
        <th width="50">RT</th>
        <th width="50">RW</th>
        <th width="200">ALAMAT</th>
        <th width="200">DESA</th>
        <th width="200">KECAMATAN</th>
        <th width="200">KABUPATEN</th>
        <th width="200">STATUS HUB DALAM KELUARGA</th>
        <th width="200">PENDIDIKAN</th>
        <th width="200">PEKERJAAN</th>
    </tr>
</thead>
<tbody align="center">
<?php
if ( ! empty($penduduk)) {
    $no = 1;
    foreach($penduduk->result() as $tampil) {
        $Tgl=date("d/m/Y", strtotime($tampil->tanggal_lahir));
        echo "<tr>";
        echo "<td width=50>".$no."</td>";
        echo "<td width=200>'".$tampil->no_ktp."</td>";
        echo "<td width=200>'".$tampil->no_kk."</td>";
        echo "<td width=300>".$tampil->nama."</td>";
        echo "<td width=300>".$tampil->agama."</td>";
        echo "<td width=300>".$tampil->kelamin."</td>";
        echo "<td width=300>".$tampil->tempat_lahir."</td>";
        echo "<td width=200>".$Tgl."</td>";
        echo "<td width=300>".$tampil->status_kawin."</td>";
        echo "<td width=300>".$tampil->rt."</td>";
        echo "<td width=300>".$tampil->rw."</td>";
        echo "<td width=300>".$tampil->dusun."</td>";
        echo "<td width=300>".$tampil->kelurahan."</td>";
        echo "<td width=300>".$tampil->kecamatan."</td>";
        echo "<td width=300>".$tampil->kabupaten."</td>";
        echo "<td width=300>".$tampil->h_keluarga."</td>";
        echo "<td width=300>".$tampil->pendidikan."</td>";
        echo "<td width=300>".$tampil->pekerjaan."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</tbody>
    </table>


    