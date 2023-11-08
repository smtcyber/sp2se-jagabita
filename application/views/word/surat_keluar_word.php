   <?php
    $nama_file = "Surat_Keluar.doc";

    header("Content-Type: application/vnd.ms-word");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-disposition: attachment; filename=".$nama_file);
    ?>
    <h4 align="center">Surat Keluar</h4>
     <table border="1" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <th width="50">No</th>
        <th width="300">Tanggal Terima</th>
        <th width="300">Nomor Surat</th>
        <th width="300">Perihal</th>
    </tr>
</thead>
<tbody align="center">
<?php
if ( ! empty($surat_keluar)) {
    $no = 1;
    foreach($surat_keluar->result() as $tampil) {
        $Tgl=date("d/m/Y", strtotime($tampil->tgl_terima));
        echo "<tr>";
        echo "<td width=50>".$no."</td>";
        echo "<td width=300>".$Tgl."</td>";
        echo "<td width=250>".$tampil->nomor_tgl_surat."</td>";
        echo "<td width=300>".$tampil->perihal_surat."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</tbody>
    </table>