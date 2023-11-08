<!-- Page Heading -->
<section class="content-header">
      <h1>
        Perangkat Desa
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Perangkat Desa</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data</h3>
            </div>
<form role="form" action="<?php echo site_url().'/dashboard/proses_tambah_anggota'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
<div class="box-body">
<div class="form-group">
<table border="0px" width="auto" align="center">
<br>
    <tr>
        <td width="500"><label><b>Nama Lengkap</b></label></td>
        <td width="60">&nbsp;</td>
        <td width="500"><label><b>Nip</b></label></td>
    </tr>
    <tr>
        <td width="500"><input class="form-control" name="T1" id="T1" placeholder="Ketikkan Nama Lengkap disini" required /></td>
        <td width="60">&nbsp;</td>
        <td width="500"><input class="form-control" name="T3" id="T3" placeholder="Ketikkan Nip disini" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="500"><label><b>Jenis Kelamin</b></label></td>
        <td width="60">&nbsp;</td>
        <td width="500"><label><b>No KTP</b></label></td>
    </tr>
    <tr>
        <td width="500"><select class="form-control" name="C1" id="C1" required>
                             <option value="-">--pilih--</option>
                             <option value="PRIA">Pria</option>
                             <option value="WANITA">Wanita</option>
                        </select></td>
        <td width="60">&nbsp;</td>
        <td width="500"><input class="form-control" name="no_ktp" id="no_ktp" placeholder="Ketikkan No KTP disini" required /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="500"><label><b>Jabatan</b></label></td>
    </tr>
    <tr>
        <td width="500"><input class="form-control" name="jabatan" id="jabatan" placeholder="Ketikkan Jabatan disini" required /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="500"><label><b>Foto</b></label></td>
    </tr>
    <tr>
        <td width="500"><input type="file" class="form-control" name="F1" id="F1" onchange="tampilkanPreview(this, 'preview')" />
        <p class="help-block">&nbsp;Format : *.jpg, *.png, *.gif, dll</p></td>
    </tr>
</table>
</div>
<br><br>
<div class="form-group" align="left">
	<button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Simpan</button>
	<button type="reset" class="btn btn-success"><i class='fa fa-refresh'></i> Reset</button>
	<button type="button" class="btn btn-danger" onclick="self.history.back()"><i class='fa fa-times'></i> Batal</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</b>