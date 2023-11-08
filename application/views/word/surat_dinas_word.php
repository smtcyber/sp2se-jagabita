   <?php
    $nama_file = "Surat_Dinas.doc";

    header("Content-Type: application/vnd.ms-word");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-disposition: attachment; filename=".$nama_file);
    ?>
    <h4 align="center">Surat Dinas</h4>
     <table border="1" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <th width="50">No</th>
        <th width="200">Nomor Dinas</th>
        <th width="200">Tanggal Dinas</th>
        <th width="300">Perihal Dinas</th>
        <th width="200">Alamat Tujuan</th>
    </tr>
    <tbody align="center">
<?php
if ( ! empty($surat_dinas)) {
    $no = 1;
    foreach($surat_dinas->result() as $tampil) {
        $Tgl=date("d/m/Y", strtotime($tampil->tanggal_dinas));
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$tampil->nomor_dinas."</td>";
        echo "<td>".$Tgl."</td>";
        echo "<td>".$tampil->perihal_dinas."</td>";
        echo "<td>".$tampil->alamat_tujuan."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</tbody>
    </table>