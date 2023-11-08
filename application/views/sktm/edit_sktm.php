<!-- Page Heading -->
<section class="content-header">
      <h1>
        Surat Keterangan Tidak Mampu
            <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Edit Surat Keterangan Tidak Mampu</li>
      </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Data Pembuat Surat / Pelapor</b></h3>
                </div>
                    <div class="box-body">
                        <form role="form" action="<?php echo site_url().'/c_sktm/proses_edit_sktm'?>" method="post" enctype="multipart/form-data" autocomplete="on">
                            <div class="box-body">
                                <?php foreach ($edit_sktm->result() as $tampil) { ?>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="H1" id="H1" value="<?php echo $tampil->id_sktm; ?>" />
                                </div>
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

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>SKTM Umum/SKKM</b></h3>
                </div>
                    <div class="box-body">
                        <div class="form-group" >
                            <label><b>Keperluan SKTM Umum/SKKM :</b></label>
                            <input class="form-control" name="keperluan_umum" id="keperluan_umum" value="<?php echo $tampil->keperluan_umum; ?>" >
                        </div>
                    </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>SKTM Kesehatan/Rumah Sakit</b></h3>
                </div>
                    <div class="box-body">
                        <div class="form-group" >
                            <label><b>Nama Rumah Sakit :</b></label>
                            <input class="form-control" name="rumah_sakit" id="rumah_sakit" value="<?php echo $tampil->rumah_sakit; ?>" >
                        </div>
                        <div class="form-group" >
                            <label><b>Keperluan Surat :</b></label>
                            <input class="form-control" name="keperluan_sehat" id="keperluan_sehat" value="<?php echo $tampil->keperluan_sehat; ?>" >
                        </div>
                    </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>SKTM Sekolah</b>   </h3>
                </div>
                    <div class="box-body">
                            <div class="form-group" >
                                <label><b>Keperluan Surat :</b></label>
                                <input class="form-control" name="perlu" id="perlu" value="<?php echo $tampil->perlu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Nomor Induk Siswa / NISN :</b></label>
                                <input class="form-control" name="nisn" id="nisn" value="<?php echo $tampil->nisn; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Nama Sekolah :</b></label>
                                <input class="form-control" name="sekolah" id="sekolah" value="<?php echo $tampil->sekolah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Kelas :</b></label>
                                <input class="form-control" name="kelas" id="kelas" value="<?php echo $tampil->kelas; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Semester :</b></label>
                                <input class="form-control" name="jurusan" id="jurusan" value="<?php echo $tampil->jurusan; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Alamat Sekolah :</b></label>
                                <input class="form-control" name="alamat_sekolah" id="alamat_sekolah" value="<?php echo $tampil->alamat_sekolah; ?>" >
                            </div>
                            <br>
                        <h4 style="color:navy"><b>Data Anak</b></h4 ><hr>
                            <div class="form-group" >
                                <label><b>Nama Anak :</b></label>
                                <input class="form-control" name="nama_anak" id="nama_anak" value="<?php echo $tampil->nama_anak; ?>" >
                            </div>
                             <div class="form-group" >
                                <label><b>No KTP Anak :</b></label>
                                <input class="form-control" name="no_ktp_anak" id="no_ktp_anak" value="<?php echo $tampil->no_ktp_anak; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Jenis Kelamin Anak :</b></label>
                                <select class="form-control" name="jenis_kelamin_anak" id="jenis_kelamin_anak">
                                    <option value="<?php echo $tampil->jenis_kelamin_anak; ?>"><?php echo $tampil->jenis_kelamin_anak; ?></option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label><b>Agama Anak :</b></label>
                                <select class="form-control" name="agama_anak" id="agama_anak">
                                    <option value="<?php echo $tampil->agama_anak; ?>">"<?php echo $tampil->agama_anak; ?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label><b>Tempat Lahir Anak :</b></label>
                                <input class="form-control" name="tempat_lahir_anak" id="tempat_lahir_anak" value="<?php echo $tampil->tempat_lahir_anak; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Tanggal Lahir Anak :</b></label>
                                <input class="form-control" name="tgl_lahir_anak" id="tgl1" value="<?php echo $tampil->tgl_lahir_anak; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Pekerjaan Anak :</b></label>
                                <input class="form-control" name="pekerjaan_anak" id="pekerjaan_anak" value="<?php echo $tampil->pekerjaan_anak; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Alamat Anak :</b></label>
                                <input class="form-control" name="alamat_anak" id="alamat_anak" value="<?php echo $tampil->alamat_anak; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>RT dan RW Anak :</b></label>
                                <input class="form-control" name="rt_anak" id="rt_anak" value="<?php echo $tampil->rt_anak; ?>" >
                                <input class="form-control" name="rw_anak" id="rw_anak" value="<?php echo $tampil->rw_anak; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Anak Ke :</b></label>
                                <input class="form-control" name="anak_ke" id="anak_ke" value="<?php echo $tampil->anak_ke; ?>" >
                            </div>
                            <!-- <br>
                        <h4 style="color:navy"><b>Data Ayah</b></h4 ><hr>
                            <div class="form-group" >
                                <label><b>Nama Ayah :</b></label>
                                <input class="form-control" name="nama_ayah" id="nama_ayah" value="<?php echo $tampil->nama_ayah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>NIK Ayah :</b></label>
                                <input class="form-control" name="no_ktp_ayah" id="no_ktp_ayah" value="<?php echo $tampil->no_ktp_ayah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Tempat Lahir Ayah :</b></label>
                                <input class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" value="<?php echo $tampil->tempat_lahir_ayah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Tanggal Lahir Ayah :</b></label>
                                <input class="form-control" name="tgl_lahir_ayah" id="tgl3" value="<?php echo $tampil->tgl_lahir_ayah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Pekerjaan Ayah :</b></label>
                                <input class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="<?php echo $tampil->pekerjaan_ayah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Alamat Ayah :</b></label>
                                <input class="form-control" name="alamat_ayah" id="alamat_ayah" value="<?php echo $tampil->alamat_ayah; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>RT dan RW Ayah :</b></label>
                                <input class="form-control" name="rt_ayah" id="rt_ayah" value="<?php echo $tampil->rt_ayah; ?>" >
                                <input class="form-control" name="rw_ayah" id="rw_ayah" value="<?php echo $tampil->rw_ayah; ?>" >
                            </div>
                            <br>
                        <h4 style="color:navy"><b>Data Ibu</b></h4 ><hr>
                            <div class="form-group" >
                                <label><b>Nama Ibu :</b></label>
                                <input class="form-control" name="nama_ibu" id="nama_ibu" value="<?php echo $tampil->nama_ibu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>NIK Ibu :</b></label>
                                <input class="form-control" name="no_ktp_ibu" id="no_ktp_ibu" value="<?php echo $tampil->no_ktp_ibu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Tempat Lahir Ibu :</b></label>
                                <input class="form-control" name="tempat_lahir_ibu" id="tempat_lahir_ibu" value="<?php echo $tampil->tempat_lahir_ibu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Tanggal Lahir Ibu :</b></label>
                                <input class="form-control" name="tgl_lahir_ibu" id="tgl4" value="<?php echo $tampil->tgl_lahir_ibu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Pekerjaan Ibu :</b></label>
                                <input class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="<?php echo $tampil->pekerjaan_ibu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>Alamat Ibu :</b></label>
                                <input class="form-control" name="alamat_ibu" id="alamat_ibu" value="<?php echo $tampil->alamat_ibu; ?>" >
                            </div>
                            <div class="form-group" >
                                <label><b>RT dan RW Ibu :</b></label>
                                <input class="form-control" name="rt_ibu" id="rt_ibu" value="<?php echo $tampil->rt_ibu; ?>" >
                                <input class="form-control" name="rw_ibu" id="rw_ibu" value="<?php echo $tampil->rw_ibu; ?>" >
                            </div> -->
                    </div>
            </div>
        </div>


<!--         <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penghasilan</h3>
            </div>
                <div class="box-body">
                    <div class="form-group" >
                        <label><b>Penghasilan Orang Tua :</b></label>
                        <input class="form-control" name="penghasilan_ortu" id="penghasilan_ortu" value="<?php echo $tampil->penghasilan_ortu; ?>" >
                    </div>
                    <div class="form-group" >
                        <label><b>Penghasilan Perbulan :</b></label>
                        <input class="form-control" name="penghasilan_bulan" id="penghasilan_bulan" value="<?php echo $tampil->penghasilan_bulan; ?>" >
                    </div>
                    <div class="form-group" >
                        <label><b>Penghasilan Pertahun :</b></label>
                        <input class="form-control" name="penghasilan_tahun" id="penghasilan_tahun" value="<?php echo $tampil->penghasilan_tahun; ?>" >
                    </div>
                </div>
            </div> -->
    </div>
</section>

<div class="box-footer"><div class="form-group" align="center">
    <button type="submit" class="btn btn-primary"><i class='fa fa-check'></i> Ubah Data</button>
    <a class="btn btn-danger" href="<?php echo site_url('c_sktm/sktm');?>"><i class='fa fa-times'></i> Batal</a>
</div>
<?php } ?>
</form>
</div>
</div></div></div></div></div>