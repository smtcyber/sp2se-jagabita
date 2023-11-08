<body onLoad="window.print()">
<h2 align="center">Surat Keluar</h2>
    <table border="1" width="70%" align="center">
    <tr>
        <th width="3%">No</th>
        <th width="25%">Tanggal Terima</th>
        <th width="17%">Nomor Surat</th>
        <th width="35%">Perihal Surat</th>
        <th width="30%">Alamat Tujuan</th>
    </tr>

<?php
if ( ! empty($surat_keluar)) {
    $no = 1;
    foreach($surat_keluar->result() as $tampil) {
        $Tgl=date("d/m/Y", strtotime($tampil->tgl_terima));
        echo "<tr>";
        echo "<td width=50>".$no."</td>";
        echo "<td width=200>".$Tgl."</td>";
        echo "<td width=200>".$tampil->nomor_tgl_surat."</td>";
        echo "<td width=300>".$tampil->perihal_surat."</td>";
        echo "<td width=300>".$tampil->alamat_tujuan."</td>";
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