<!-- Page Heading -->
<section class="content-header">
      <h1>
        Kepala Desa
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Kepala Desa</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_header/proses_tambah_header'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="box-body">
<div class="form-group" style="color:black">
    <label><b>Alamat :</b></label>
    <input class="form-control" name="K5" id="K5" placeholder="Ketikkan Alamat disini" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Desa :</b></label>
    <input class="form-control" name="desa" id="desa" placeholder="Ketikkan Desa disini" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Kecamatan :</b></label>
    <input class="form-control" name="K3" id="K3" placeholder="Ketikkan Kode Pos disini" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Kode Pos :</b></label>
    <input class="form-control" name="K6" id="K6" placeholder="Ketikkan Kode Pos disini" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Jabatan :</b></label>
    <input class="form-control" name="K4" id="K4" placeholder="Ketikkan Kode Pos disini" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Pemerintah :</b></label>
    <input class="form-control" name="K2" id="K2" placeholder="Ketikkan Kode Pos disini" required />
</div>
<div class="form-group" style="color:black">
    <label><b>Email :</b></label>
    <input class="form-control" name="K1" id="K1" placeholder="Ketikkan Alamat Email disini" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Logo :</b></label>
    <input type="file" name="F1" id="F1" onchange="tampilkanPreview(this, 'preview')" /><br>
    <p class="help-block">&nbsp;Format : *.jpg, *.png, *.gif, dll</p>
</div>
 </div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_header/header');?>"><i class='fa fa-times'></i> Batal</a>
</div>
</form>
</div>
</div></div></div></div></div>