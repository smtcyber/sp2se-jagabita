<!-- Page Heading -->
<section class="content-header">
      <h1>
       Karang Taruna
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Karang Taruna</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_edit_taruna'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_taruna->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_taruna; ?>"/>
<div class="form-group" >
    <label><b>Jabatan :</b></label>
     <input class="form-control" name="jabatan" id="jabatan" value="<?php echo $tampil->jabatan; ?>">
</div>
<div class="form-group" >
    <label><b>Nama Pengurus :</b></label>
     <input class="form-control" name="nama_pengurus" id="nama_pengurus" value="<?php echo $tampil->nama_pengurus; ?>">
</div>
<div class="form-group" >
    <label><b>Alamat :</b></label>
     <input class="form-control" name="alamat" id="alamat" value="<?php echo $tampil->alamat; ?>">
</div>
<div class="form-group" >
    <label><b>Tanggal Bergabung :</b></label>
    <input class="form-control" name="tgl_bergabung" id="tgl1" value="<?php echo $tampil->tgl_bergabung; ?>" >
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/taruna');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>