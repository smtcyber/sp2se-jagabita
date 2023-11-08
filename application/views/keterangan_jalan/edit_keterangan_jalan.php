<!-- Page Heading -->
<section class="content-header">
      <h1>
        Keterangan Perjalanan
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Keterangan Perjalanan</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_keterangan_jalan/proses_edit_keterangan_jalan'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<?php foreach ($edit_keterangan_jalan->result() as $tampil) { ?>
<div class="form-group">
<input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_jalan; ?>" />
<div class="form-group" style="color:black">
    <label><b>Nama Lengkap dan NIK:</b></label>
    <select class="form-control select2" name="R1" readonly>
        <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" style="color:black">
    <label><b>Akan Pergi ke :</b></label>
    <input class="form-control" name="pergi_ke_jalan" id="pergi_ke_jalan" value="<?php echo $tampil->pergi_ke_jalan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Tujuan :</b></label>
    <input class="form-control" name="tujuan_jalan" id="tujuan_jalan" value="<?php echo $tampil->tujuan_jalan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Waktu Lamanya :</b></label>
    <input class="form-control" name="lama_jalan" id="lama_jalan" value="<?php echo $tampil->lama_jalan; ?>" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Keterangan :</b></label>
    <input class="form-control" name="ket_jalan" id="ket_jalan" value="<?php echo $tampil->ket_jalan; ?>" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_keterangan_jalan/keterangan_jalan');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
<?php } ?>
</form>
</div></div></div></div></div>