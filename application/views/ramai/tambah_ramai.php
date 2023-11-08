<!-- Page Heading -->
<section class="content-header">
      <h1>
        Izin Keramaian
            <small>Tambah Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Tambah Izin Keramaian</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
<form role="form" action="<?php echo site_url().'/c_ramai/proses_tambah_ramai'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" >
    <label><b>Nama Lengkap dan Nik :</b></label>
    <select class="form-control select2" name="R1" required>
        <option value="-">-- pilih / ketikkan --</option>
        <?php foreach ($penduduk->result() as $row) { ?>
        <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group" >
    <label><b>Maksud Izin :</b></label>
    <input class="form-control" name="maksud" id="maksud" placeholder="Ketikkan Maksud Izin disini" required>
</div>
<div class="form-group" >
    <label><b>Tempat Pelaksanaan :</b></label>
    <input class="form-control" name="tmpt_pelaksanaan" id="tmpt_pelaksanaan" placeholder="Ketikkan Tempat Pelaksanaan disini" required>
</div>
<div class="form-group" >
    <label><b>Hari Mulai :</b></label>
    <select class="form-control" name="hari_mulai" id="hari_mulai">
        <option value="-">--pilih--</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jum'at">Jum'at</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Hari Selesai :</b></label>
    <select class="form-control" name="hari_selesai" id="hari_selesai">
        <option value="-">--pilih--</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jum'at">Jum'at</option>
        <option value="Sabtu">Sabtu</option>
        <option value="Minggu">Minggu</option>
    </select>
</div>
<div class="form-group" >
    <label><b>Waktu Mulai :</b></label>
    <input class="form-control" name="waktu_mulai" id="tgl1" placeholder="Ketikkan Waktu Mulai disini" required>
</div>
<div class="form-group" >
    <label><b>Waktu Selesai :</b></label>
    <input class="form-control" name="waktu_selesai" id="tgl2" placeholder="Ketikkan Waktu Selesai disini" required>
</div>
<div class="form-group" >
    <label><b>Jam Mulai :</b></label>
    <input class="form-control" name="jam_mulai" id="jam_mulai" placeholder="Ketikkan Jam Mulai disini" required>
</div>
<div class="form-group" >
    <label><b>Jam Selesai :</b></label>
    <input class="form-control" name="jam_selesai" id="jam_selesai" placeholder="Ketikkan Jam Selesai disini" required>
</div>
<div class="form-group" >
    <label><b>Jumlah Undangan :</b></label>
    <input class="form-control" name="jmlh_undangan" id="jmlh_undangan" placeholder="Ketikkan Jumlah Undangan disini" required>
</div>
<div class="form-group" >
    <label><b>Jenis Hiburan :</b></label>
    <input class="form-control" name="jenis_hiburan" id="jenis_hiburan" placeholder="Ketikkan Jenis Hiburan disini" required>
</div>
<div class="form-group" >
    <label><b>No Pengantar :</b></label>
    <input class="form-control" name="no_pengantar" id="no_pengantar" placeholder="Ketikkan Musim disini" required>
</div>
<div class="form-group" >
    <label><b>Tanggal Pengantar :</b></label>
    <input class="form-control" name="tanggal_pengantar" id="tgl3" placeholder="Ketikkan Tanggal Pengantar disini" required>
</div>
<div class="form-group" >
    <label><b>Nomor HP :</b></label>
    <input class="form-control" name="no_hp" id="no_hp" placeholder="Ketikkan Nomor HP disini" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_ramai/ramai');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>