<!-- Page Heading -->
<section class="content-header">
      <h1>
        Beda Identitas
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Beda Identitas</li>
      </ol>
</section>

<section class="content">
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
            </div>
<form role="form" action="<?php echo site_url().'/c_beda_identitas/proses_edit_beda_identitas'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_beda_identitas->result() as $tampil) { ?>
<div class="box-body">
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_identitas; ?>" />
<div class="form-group" >
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
</div>
</div>
</div>
</div>
 <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Beda Identitas</h3>
            </div>
            <div class="box-body">
<div class="form-group" >
    <label><b>Data Yang Benar Pada :</b></label>
    <input class="form-control" name="pada_kartu" id="pada_kartu" value="<?php echo $tampil->pada_kartu; ?>" required>
</div>
<div class="form-group" >
    <label><b>Data Yang Salah Pada :</b></label>
    <input class="form-control" name="b_identitas" id="b_identitas" value="<?php echo $tampil->b_identitas; ?>" required>
</div>
<div class="form-group" >
    <label><b>Data Yang Salah :</b></label>
    <input class="form-control" name="sebenarnya" id="sebenarnya" value="<?php echo $tampil->sebenarnya; ?>" required>
</div>
</div>
</div>
</div>
</div>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_beda_identitas/beda_identitas');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>