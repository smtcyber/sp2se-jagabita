<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pengguna
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Pengguna</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/dashboard/proses_edit_pengguna'?>" method="post" enctype="multipart/form-data" autocomplete="on"/>
<?php foreach($edit_pengguna->result() as $tampil) {?>
<div class="form-group">
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->pengguna_id; ?>"/>
<table border="0px" width="auto" align="center">
    <tr>
        <td width="600"><label>Nama Pegawai</label></td>
        <td width="60">&nbsp;</td>
        <td width="600"><label>Username</label></td>
    </tr>
    <tr>
        <td width="600"><select class="form-control" name="T1" id="T1">
                        <option value="<?php echo $tampil->anggota_id; ?>"><?php echo $tampil->anggota_nama; ?></option>
                        <?php foreach ($anggota->result() as $row) { ?>
                        <option value="<?=$row->anggota_id?>"><?=$row->anggota_nama?></option>

           <?php } ?></select></td>
        <td width="60">&nbsp;</td>
        <td width="600"><input class="form-control" name="T2" id="T2" value="<?php echo $tampil->pengguna_username; ?>"  required /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="600"><label>Password</label></td>
        <td width="60">&nbsp;</td>
        <td width="600"><label>Level</label></td>
    </tr>
    <tr>
        <td width="600"><input class="form-control" name="T3" id="T3" type="password" value="<?php $t=base64_decode($tampil->pengguna_password); echo $t; ?>"  readonly /></td>
        <td width="60">&nbsp;</td>
        <td width="600"><select class="form-control" name="C1" id="C1" required />
                            <option value="<?php echo $tampil->pengguna_level; ?>">
                            <?php 
                            $level = $tampil->pengguna_level;
                            if ($level ==0) {
                                $level = "NULL";
                            } else if ($level ==1) {
                                $level = "Administrator";
                            } else if ($level ==2) {
                                $level = "Staff";
                            } else if ($level ==3) {
                                $level = "Manager";
                            } else {
                                $level = "Guest";
                            }
                            print $level?></option>
                                <option value="1">Administrator</option>
                                <option value="2">Staff</option>
                                <option value="3">Manager</option> 
                                <option value="4">Guest</option>
                        </select></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="600"><label>Status</label></td>
        <td width="60">&nbsp;</td>
        <td width="600"><label>Tanggal Update</label><br/></td>
    </tr>
    <tr>
        <td width="600"><select class="form-control" name="C2" id="C2" required />
                            <option value="<?php echo $tampil->pengguna_blokir; ?>">
                            <?php
                                $status=$tampil->pengguna_blokir;
                            if ($status=='Y') {
                                $ket='Tidak Aktif / Blokir';
                            } else {
                                $ket='Aktif';
                            }
                            print $ket?></option>
                                <option value="Y">Tidak Aktif / Blokir</option>
                                <option value="T">Aktif</option>
                        </select></td>
        <td width="60">&nbsp;</td>
        <td width="600"><input class="form-control" name="T4" id="tgl1" value="<?php echo $tampil->pengguna_tglupdate; ?>" required></td>
    </tr>
</table>
<?php } ?>
</div>
<br>
<div class="form-group" align="left">
	<button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class='fa fa-times'></i> Batal</button><hr>
</div>
</form>
</div>
</div>
</div>
</div>
</div>