<body onLoad="window.print()">
<h2 align="center">Data Anggota</h2>
    <table border="1" width="70%" align="center">
    <tr>
        <th width="3%">No</th>
        <th width="30%">Nama Anggota</th>
        <th width="20%">Nip</th>
        <th width="15%">Jenis Kelamin</th>
    </tr>

    <?php
    if ( ! empty($anggota)) {
    $no = 1;
    foreach($anggota->result() as $tampil) {
        echo "<tr>";
        echo "<td width=50>".$no."</td>";
        echo "<td width=200>".$tampil->anggota_nama."</td>";
        echo "<td width=200>".$tampil->nip."</td>";
        echo "<td width=200>".$tampil->anggota_jk."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
<table border="0" align="center">
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="228" height="41"><p align="center">Mengetahui,</p>       </td>
        <td width="115">&nbsp;</td>
        <td width="214">&nbsp;</td>
        <td width="298"><div align="center">Cirebon, <?php echo date("d F Y");?></div></td>
    </tr>
    <tr>
        <td><div align="center">Bagian Sekretariat</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center">Sekretaris Dinas</div></td>
    </tr>
    <tr>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><div align="center"></div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
    </tr>
    <tr>
        <td><div align="center">( <?php echo $this->session->userdata('ttd') ?> )</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center">( Dra. Hj. ENI SENIWATI, M.Si )</div></td>
    </tr>
</table>