<!-- Page Heading -->
<section class="content-header">
      <h1>
        Pegawai
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Pegawai</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/dashboard/proses_edit_anggota'?>" method="post" enctype="multipart/form-data" autocomplete="on"/>
<?php foreach($edit_anggota->result() as $tampil) {?>
<div class="form-group">
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->anggota_id; ?>"/>
<input class="form-control" type="hidden" name="H2" id="H2" value="<?php echo $tampil->anggota_foto; ?>"/>
<table border="0px" width="auto" align="center">
    <tr>
        <td width="800"><label>Nama Perangkat Desa</label></td>
        <td width="60">&nbsp;</td>
        <td width="800"><label>Nip</label></td>
    </tr>
    <tr>
        <td width="800"><input class="form-control" name="T1" id="T1" value="<?php echo $tampil->anggota_nama; ?>" required /></td>
        <td width="60">&nbsp;</td>
        <td width="800"><input class="form-control" name="T3" id="T3" value="<?php echo $tampil->nip; ?>" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="800"><label>Jenis Kelamin</label></td>
        <td width="60">&nbsp;</td>
        <td width="500"><label><b>No KTP</b></label></td>
    </tr>
    <tr>
        <td width="800"><select class="form-control" name="C1" id="C1" required>
                            <option value="<?php echo $tampil->anggota_jk; ?>"><?php echo $tampil->anggota_jk; ?></option>
                            <option value="PRIA">Pria</option>
                            <option value="WANITA">Wanita</option>
                        </select></td>
        <td width="60">&nbsp;</td>
        <td width="500"><input class="form-control" name="no_ktp" id="no_ktp" value="<?php echo $tampil->no_ktp; ?>" required /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    </tr>
        <td width="800"><label>Foto</label></td>
        <td width="60">&nbsp;</td>
        <td width="500"><label><b>Jabatan</b></label></td>
    </tr>
    <tr>
        <td width="800"><input class="form-control" type="file" name="F1" id="F1" value="<?php echo $tampil->anggota_foto; ?>" onchange="tampilkanPreview(this,'preview')" />
                            <img src="<?php echo base_url().'assets/anggota/'.$tampil->anggota_foto ?>" width="60" height="80">
                            <img id="preview" src="" alt="" height="80" width="60"/>
                            <p class="help-block">&nbsp;*Foto boleh dikosongkan jika tidak diubah</p></td>
        <td width="60">&nbsp;</td>
        <td width="500"><input class="form-control" name="jabatan" id="jabatan" value="<?php echo $tampil->jabatan; ?>" required />
    </tr>
</table>
</div>
<?php } ?>
<br>
<div class="form-group" align="center">
	<button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class='fa fa-times'></i> Batal</button><hr>
</div>
</form>
</div>
</div>
</div>
</div>
</div>