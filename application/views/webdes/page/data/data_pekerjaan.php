          <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card" style="background-color: #2F4F4F;">
                  <div class="card-body">
                    <h2 style="color: white;">Data</h2>
                    <hr>
                    <ul class="vertical-menu">
                      <li><a href="<?php echo site_url('webdes/page_data');?>">Data Penduduk</a></li>
                      <li><a href="<?php echo site_url('webdes/data_pendidikan');?>">Data Pendidikan</a></li>
                      <li><a href="<?php echo site_url('webdes/data_pekerjaan');?>">Data Pekerjaan</a></li>
                      <li><a href="<?php echo site_url('webdes/data_usia');?>">Data Usia</a></li>
                      <li><a href="<?php echo site_url('webdes/data_kelamin');?>">Data Jenis Kelamin</a></li>
                      <li><a href="<?php echo site_url('webdes/data_kematian');?>">Data Kematian</a></li>
                    </ul>
                    <br><br><br>
                    <h2 style="color: white;">Lihat Lainnya</h2>
                    <hr>
                    <ul class="vertical-menu">
                      <li><a href="<?php echo site_url('webdes/page_profil');?>">Visi Misi</a></li>
                      <li><a href="<?php echo site_url('webdes/page_profil');?>">Sejarah</a></li>
                      <li><a href="<?php echo site_url('webdes/page_profil');?>">Profil Wilayah</a></li>
                      <li><a href="<?php echo site_url('webdes/page_lembaga');?>">Lembaga</a></li>
                      <li><a href="<?php echo site_url('webdes/page_potensi');?>">Potensi</a></li>
                      <li><a href="<?php echo site_url('webdes/page_data');?>">Data</a></li>
                      <li><a href="<?php echo site_url('webdes/page_kontak');?>">Kontak</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Data Pekerjaan</h2><hr>
                    <div class="row">
                      <div class="col-sm-12 grid-margin" style="margin-bottom: -10px;">
                          <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="font-size: 14px;">
                              <thead>
                                <tr>
                                  <th><div align="left">No</div></th>
                                  <th><div align="left">Pekerjaan</div></th>
                                  <th><div align="left">Jumlah</div></th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if (empty($pekerjaan)) { ?>
                              <tr>
                                <td colspan="3">Data Tidak Ditemukan</td>
                              </tr>
                                <?php } else {
                                  $no=1;
                                  foreach ($pekerjaan->result_array() as $row) {
                                    $didik = $row['pekerjaan'];
                                  $total = $row['total'];
                                ?>
                                <tr>
                                  <td valign="left"><div align="left"><?php echo $no++; ?></div></td>
                                  <td valign="left"><?php echo $didik;?></td>
                                  <td valign="left"><?php echo $total;?></td>
                                </tr>
                                <?php } } ?>
                              </tbody>
                            </table>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>