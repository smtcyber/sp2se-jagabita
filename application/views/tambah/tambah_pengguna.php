<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pengguna
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Pengguna</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/dashboard/proses_tambah_pengguna'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="form-group">
<table border="0px" width="auto" align="center">
<br>
    <tr>
        <td width="600"><label>Nama Perangkat Desa</label></td>
        <td width="60">&nbsp;</td>
        <td width="600"><label>Username</label></td>
    </tr>
    <tr>
        <td width="600"><select class="form-control" name="T1" id="T1">
            <option value="0">-- Pilih --</option>
            <?php foreach ($anggota->result() as $row) { ?>
            <option value="<?=$row->anggota_id?>"><?=$row->anggota_nama?></option>

           <?php } ?>
        </select></td>
        <td width="60">&nbsp;</td>
        <td width="600"><input class="form-control" name="T2" id="T2" placeholder="Ketikkan Username disini" required /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="600"><label>Password</label></td>
        <td width="60">&nbsp;</td>
        <td width="600"><label>Level Pengguna</label></td>
    </tr>
    <tr>
        <td width="600"><input class="form-control" name="T3" id="T3" type="password" placeholder="Ketikkan Password disini" required /></td>
        <td width="60">&nbsp;</td>
        <td width="600"><select class="form-control" name="C1" id="C1" required />
                            <option value="0">-- Pilih --</option>
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
        <td width="600"><label>Tanggal Update</label></td>
    </tr>
    <tr>
        <td width="600"><select class="form-control" name="C2" id="C2" required />
                            <option value="Pilih">-- Pilih --</option>
                            <option value="Y">Tidak Aktif / Blokir</option>
                            <option value="T">Aktif</option>
                        </select></td>
        <td width="60">&nbsp;</td>
        <td width="600"><input class="form-control" name="T4" id="tgl1" placeholder="Ketikan Tanggal Update" required></td>
    </tr>
</table>
</div>
<br><br>
<div class="form-group" align="left">
	<button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan Data</button>
	<button type="reset" class="btn btn-success"><i class='fa fa-refresh'></i> Reset</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class='fa fa-times'></i> Batal</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>