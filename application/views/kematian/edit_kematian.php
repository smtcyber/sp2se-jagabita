<!-- Page Heading -->
<section class="content-header">
      <h1>
        Surat Kematian
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Surat Kematian</li>
      </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Pelapor</h3>
                </div>
                    <form role="form" action="<?php echo site_url().'/c_kematian/proses_edit_kematian'?>" method="post" enctype="multipart/form-data" autocomplete="on">
                        <?php foreach ($edit_kematian->result() as $tampil) { ?>
                        <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_surat_kematian; ?>" />
                        </div>
                        <div class="form-group" >
                            <label><b>Nama Pelapor :</b></label>
                            <input class="form-control" name="nama_pelapor" id="nama_pelapor" value="<?php echo $tampil->nama_pelapor; ?>" required>
                        </div>
                        <div class="form-group" >
                            <label><b>Hubungan Pelapor :</b></label>
                            <select class="form-control" name="hubungan_pelapor" id="hubungan_pelapor" required>
                                <option value="<?php echo $tampil->hubungan_pelapor; ?>"><?php echo $tampil->hubungan_pelapor; ?></option>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Anak">Anak</option>
                                <option value="Saudara">Saudara</option>
                                <option value="Kerabat">Kerabat</option>
                            </select>
                    </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Orang Mati</h3>
                    </div>
                        <div class="box-body">
                            <div class="form-group" >
                                <label><b>Nama Lengkap dan NIK:</b></label>
                                <select class="form-control select2" name="R1" readonly>
                                    <option value="<?php echo $tampil->id_penduduk; ?>"><?=$tampil->nama.", NIK : ".$tampil->no_ktp; ?></option>
                                    <?php foreach ($penduduk->result() as $row) { ?>
                                    <option value="<?=$row->id_penduduk; ?>"><?=$row->nama.", NIK : ".$row->no_ktp; ?></option>
                                    <?php } ?>
                                </select>
                            </div>                        
                            <div class="form-group" >
                                <label><b>Hari Kematian :</b></label>
                                <select class="form-control" name="hari_meninggal" id="hari_meninggal">
                                    <option value="<?php echo $tampil->hari_meninggal; ?>"><?php echo $tampil->hari_meninggal; ?></option>
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
                                <label><b>Tanggal Kematian :</b></label>
                                <input class="form-control" name="tanggal_meninggal" id="tgl1" value="<?php echo $tampil->tanggal_meninggal; ?>" required>
                            </div>
                            <div class="form-group" >
                                <label><b>Penyebab kematian :</b></label>
                                <select class="form-control" name="penyebab" id="penyebab" required>
                                    <option value="<?php echo $tampil->penyebab; ?>"><?php echo $tampil->penyebab; ?></option>
                                    <option value="Sakit Biasa/Tua">Sakit</option>
                                    <option value="Wabah Penyakit">Wabah Penyakit</option>
                                    <option value="Kecelakaan">Kecelakaan</option>
                                    <option value="Kriminalitas">Kriminalitas</option>
                                    <option value="Bunuh Diri">Bunuh Diri</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label><b>Tempat Kematian :</b></label>
                                <input class="form-control" name="bertempat_di" id="bertempat_di" value="<?php echo $tampil->bertempat_di; ?>" required>
                            </div>
                            <div class="form-group" >
                                <label><b>Tempat Dimakamkan :</b></label>
                                <input class="form-control" name="tpu" id="tpu" value="<?php echo $tampil->tpu; ?>" required>
                            </div>
                            <div class="form-group" >
                                <label><b>Yang Menerangkan :</b></label>
                                <input class="form-control" name="yang_menerangkan" id="yang_menerangkan" value="<?php echo $tampil->yang_menerangkan; ?>" required>
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="box-footer">
<div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_kematian/kematian');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>