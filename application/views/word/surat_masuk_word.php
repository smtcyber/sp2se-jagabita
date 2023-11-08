   <?php
    $nama_file = "Surat_Masuk.doc";

    header("Content-Type: application/vnd.ms-word");
    header("Content-disposition: attachment; filename=".$nama_file);
    ?>
<h2 align="center">Surat Masuk</h2>
     <table border="1" width="100%" cellpadding="0" cellspacing="0">
    <tr>
       <th width="50">No</th>
        <th width="210">Tanggal Terima</th>
        <th width="250">Nomor Surat</th>
        <th width="300">Sifat Surat</th>
        <th width="500">Perihal</th>
    </tr>
</thead>
<tbody align="center">
<?php
if ( ! empty($surat_masuk)) {
    $no = 1;
    foreach($surat_masuk->result() as $tampil) {
        $Tgl=date("d/m/Y", strtotime($tampil->tgl_terima));
        echo "<tr>";
        echo "<td width=50>".$no."</td>";
        echo "<td width=210>".$Tgl."</td>";
        echo "<td width=250>".$tampil->nomor_tgl_surat."</td>";
        echo "<td width=300>".$tampil->sifat_surat."</td>";
        echo "<td width=500>".$tampil->perihal_surat."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</tbody>
</table>

