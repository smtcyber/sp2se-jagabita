<div class="col-lg-12">
<div class="panel-heading" style="color:blue"><h4><i class='fa fa-plus'></i>
&nbsp;<b>Form Tambah Atas Nama</b></h4><hr></div>
<div class="panel-body">
<div class="col-lg-12">
<form role="form" action="<?php echo site_url().'/c_atas_nama/proses_tambah_atas_nama'?>" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" style="color:black">
    <label><b>Atas Nama :</b></label>
    <input class="form-control" name="atas_nama" id="atas_nama" placeholder="Ketikkan Atas Nama disini" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Status :</b></label>
    <input class="form-control" name="status" id="status" placeholder="Ketikkan Keperluan disini" required>
</div>
<div class="form-group" style="color:black">
    <label><b>Jabatan :</b></label>
    <input class="form-control" name="jabatan" id="jabatan" placeholder="Ketikkan Jabatan disini" required>
</div>
</div>
<hr>
<div class="form-group" align="center">
    <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
    <button type="reset" class="btn btn-primary"><i class='fa fa-refresh'></i> Reset</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_atas_nama/atas_nama');?>"><i class='fa fa-times'></i> Batal</a><hr>
</div>
</form>
</div></div></div></div></div>