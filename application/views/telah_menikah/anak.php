<!-- Page Heading -->
<section class="content-header">
      <h1>
        Data SKU
            <small>Data Bensin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-table"></i> Data SP2SE</a></li>
        <li class="active">Data Anak</li>
      </ol>
</section>

<section class="content">
<div class="box box-default">
<div class="box-header with-border">
    
    </div>
<div class="box-body">
    <a class="btn btn-danger" href="<?php echo site_url('c_sku_bensin/data');?>"><i class='fa fa-undo'></i> Kembali</a><hr>
    <hr>
    <b>Data Surat :</b>
    <br>
    <?php
    foreach($surat->result() as $master){
        echo "[".$master->no_ktp."] ".$master->nama;
    }
    ?>
    <hr>
    <form method="post" action="<?= site_url('c_sku_bensin/proses_tambah_anak') ?>">
        <input type='hidden' name='id_surat' value="<?= $id_surat ?>">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label><b>Jenis Alat</b></label>
                    <input type='text' class='form-control' placeholder='Jenis Alat' name='jenis_alat' required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b>Jumlah Alat</b></label>
                    <input type='text' class='form-control' placeholder='Jumlah Alat' name='jumlah_alat' required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b>Fungsi Alat</b></label>
                    <input type='text' class='form-control' placeholder='Fungsi Alat' name='fungsi_alat' required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b>Jenis BBM</b></label>
                    <input type='text' class='form-control' placeholder='Jenis BBM' name='jenis_bbm' required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b>Kebutuhan BBM</b></label>
                    <input type='text' class='form-control' placeholder='Kebutuhan BBM' name='kebutuhan_bbm' required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b>Hari Operasi</b></label>
                    <input type='text' class='form-control' placeholder='Hari Operasi' name='jam_operasi' required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label><b>Konsumsi BBM</b></label>
                    <input type='text' class='form-control' placeholder='Konsumsi BBM' name='konsumsi_bbm' required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <button type="submit" class="btn btn-primary"><i class='fa fa-plus'></i> Tambah BBM</button>
            </div>
        </div>
    </form>
    <hr>
    <table id="example1" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Alat</th>
                <th>Jumlah Alat</th>
                <th>Fungsi Alat</th>
                <th>Jenis BBM</th>
                <th>Kebutuhan BBM</th>
                <th>Hari Operasi</th>
                <th>Konsumsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=0;
            if(!$anak->result()){
                ?>
                <tr>
                    <td colspan="5">
                        Data Kosong
                    </td>
                </tr>
                <?php
            }else{
                ?>
                <?php
                foreach($anak->result() as $data){
                    $no++;
                    ?>
                    <tr>
                        <td class='text-center'><?= $no ?></td>
                        <td><?= $data->jenis_alat ?></td>
                        <td><?= $data->jumlah_alat ?></td>
                        <td><?= $data->fungsi_alat ?></td>
                        <td><?= $data->jenis_bbm ?></td>
                        <td><?= $data->kebutuhan_bbm ?></td>
                        <td><?= $data->jam_operasi ?></td>
                        <td><?= $data->konsumsi_bbm ?></td>
                        <td class='text-center'>
                        <a class="btn btn-danger btn-rounded btn-xs" href="<?php echo base_url()?>index.php/c_sku_bensin/proses_hapus_anak/<?= $id_surat ?>/<?php echo $data->id ?>"
                          onclick="return confirm('Anda Yakin Menghapus <?= $data->jenis_alat ?>?')" title="Hapus Data"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <?php
            }
            ?>
        </tbody>
    </table>
<hr>

</div>
</div></div></div></div>