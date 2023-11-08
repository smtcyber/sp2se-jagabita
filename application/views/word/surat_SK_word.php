   <?php
    $nama_file = "Surat_SK.doc";

    header("Content-Type: application/vnd.ms-word");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-disposition: attachment; filename=".$nama_file);
    ?>
    <h4 align="center">Surat SK</h4>
     <table border="1" width="100%" cellpadding="0" cellspacing="0">
    <tr>
       <th width="50">No</th>
        <th width="200">Nomor SK</th>
        <th width="200">Tanggal SK</th>
        <th width="500">Perihal</th>
        <th width="300">Alamat Tujuan</th>
    </tr>
</thead>
<tbody align="center">
<?php
if ( ! empty($surat_SK)) {
    $no = 1;
    foreach($surat_SK->result() as $tampil) {
        $Tgl=date("d/m/Y", strtotime($tampil->tanggal_SK));
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$tampil->nomor_SK."</td>";
        echo "<td>".$Tgl."</td>";
        echo "<td>".$tampil->perihal_SK."</td>";
        echo "<td>".$tampil->alamat_tujuan."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</tbody>
    </table>