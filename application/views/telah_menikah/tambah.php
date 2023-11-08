<!-- Page Heading -->
<section class="content-header">
      <h1>
        Telah Menikah
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Data</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_ahli_waris/proses_tambah_pelapor'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK :</b></label>
    <select class="form-control select2" name="R1" readonly>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", dengan NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK (Pasangan) :</b></label>
    <select class="form-control select2" name="pasangan" readonly>
        <?php foreach ($penduduk->result() as $row) { ?>
            <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", dengan NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group">
    <label><b>Tanggal Menikah</b></label>
    <input type='date' name='tgl_menikah' required class="form-control">
</div>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_ahli_waris/pelapor');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>