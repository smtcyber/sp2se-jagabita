    <section class="content-header">
      <h1>
        Rekap Surat | SP2SE <?php echo $header->desa; ?>
        <small>Rekap</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Rekap</a></li>
        <li class="active">admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
      <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Rekap Berdasarkan Jenis Surat</b></h3>
              <hr>
				<table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><div align="left">No</div></th>
                      <th><div align="left">Nama Surat</div></th>
                      <th><div align="left">Aksi</div></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><div align="left">1</div></th>
                      <th><div align="left">Surat Keterangan Ahli Waris</div></th>
                      <th><div align="left"><a href="<?php echo site_url('c_ahli_waris/tampil_rekap_ahli_waris');?>"><button class='btn btn-primary'><i class="fa fa-archive"></i> Rekap Surat</button></a></div></th>
                    </tr>
                    <tr>
                      <th><div align="left">2</div></th>
                      <th><div align="left">Surat Keterangan Usaha</div></th>
                      <th><div align="left"><a href="<?php echo site_url('c_sku/tampil_rekap_sku');?>"><button class='btn btn-primary'><i class="fa fa-archive"></i> Rekap Surat</button></a></div></th>
                    </tr>
                    <tr>
                      <th><div align="left">3</div></th>
                      <th><div align="left">Surat Keterangan Domisili Usaha</div></th>
                      <th><div align="left"><a href="<?php echo site_url('c_domisili_usaha/tampil_rekap_domisili_usaha');?>"><button class='btn btn-primary'><i class="fa fa-archive"></i> Rekap Surat</button></a></div></th>
                    </tr>
                    <tr>
                      <th><div align="left">4</div></th>
                      <th><div align="left">Surat Keterangan Domisili Tinggal</div></th>
                      <th><div align="left"><a href="<?php echo site_url('c_domisili_tinggal/tampil_rekap_domisili_tinggal');?>"><button class='btn btn-primary'><i class="fa fa-archive"></i> Rekap Surat</button></a></div></th>
                    </tr>
                    <tr>
                      <th><div align="left">5</div></th>
                      <th><div align="left">Surat Pendaftaran KTP</div></th>
                      <th><div align="left"><a href="<?php echo site_url('c_pendaftaran_ktp/tampil_rekap_pendaftaran_ktp');?>"><button class='btn btn-primary'><i class="fa fa-archive"></i> Rekap Surat</button></a></div></th>
                    </tr>
                  </tbody>
                </table>
			</div>
          </div>
        </div>
      </div>
      </section>