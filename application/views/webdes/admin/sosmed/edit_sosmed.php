<!-- Page Heading -->
<section class="content-header">
      <h1>
       Sosial Media
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> WEBDES</a></li>
        <li class="active">Edit Sosial Media</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/webdes/proses_edit_sosmed'?>" method="post" autocomplete="on">
<?php foreach ($edit_sosmed->result() as $tampil) { ?>
<input class="form-control" type="hidden" name="H1" id="H1" value="<?php echo $tampil->id_sosmed; ?>"/>
<div class="form-group" >
    <label><b>Facebook :</b></label>
     <input class="form-control" name="facebook" id="facebook" value="<?php echo $tampil->facebook; ?>">
</div>
<div class="form-group" >
    <label><b>Youtube :</b></label>
     <input class="form-control" name="youtube" id="youtube" value="<?php echo $tampil->youtube; ?>">
</div>
<div class="form-group" >
    <label><b>Instagram :</b></label>
     <input class="form-control" name="instagram" id="instagram" value="<?php echo $tampil->instagram; ?>">
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('webdes/wilayah');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>