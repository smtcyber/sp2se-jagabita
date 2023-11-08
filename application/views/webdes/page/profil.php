
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h2 style="font-weight: bold;">
                        Profil Desa
                        <hr>
                      </h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="row">
                        <?php {
                        foreach ($visi->result() as $tampil) {
                        ?>
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url().'assets/foto_visi_misi/'.$tampil->foto ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                            Visi Misi <?php echo $header->desa; ?>
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Update </span><?php echo $Tgl=date("d F Y", strtotime($tampil->tgl_update)); ?>
                          </p>
                          <p class="fs-15">
                           <b>Visi</b> : <br><?php echo $tampil->visi; ?>
                           <br>
                           <b>Misi</b> : <br><?php echo $tampil->misi; ?>
                          </p>
                        </div>
                        <?php } } ?>
                      </div>
                      <div class="row">
                        <?php {
                        foreach ($wilayah->result() as $tampil) {
                        ?>
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url().'assets/foto_wilayah/'.$tampil->foto ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-3 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                            Profil Wilayah
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Update </span><?php echo $Tgl=date("d F Y", strtotime($tampil->tgl_update)); ?>
                          </p>
                          <p class="fs-15" style="line-height: 25px;">
                            <b>Luas Wilayah :</b> <?php echo $tampil->luas_wilayah; ?> ha/m<sup>2</sup><br>
                            <b>Luas Pemukiman :</b> <?php echo $tampil->luas_pemukiman; ?> ha/m<sup>2</sup><br>
                            <b>Luas Perkebunan :</b> <?php echo $tampil->luas_perkebunan; ?> ha/m<sup>2</sup><br>
                            <b>Luas Pekarangan :</b> <?php echo $tampil->luas_pekarangan; ?> ha/m<sup>2</sup><br>
                            <b>Luas Tanaman :</b> <?php echo $tampil->luas_tanaman; ?> ha/m<sup>2</sup><br>
                            <b>Luas Perkantoran :</b> <?php echo $tampil->luas_perkantoran; ?> ha/m<sup>2</sup><br>
                            <b>Luas Lainnya :</b> <?php echo $tampil->luas_lainnya; ?> ha/m<sup>2</sup><br>
                          </p>
                        </div>
                        <div class="col-sm-5 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                            Batas - Batas Wilayah
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Update </span><?php echo $Tgl=date("d F Y", strtotime($tampil->tgl_update)); ?>
                          </p>
                          <p class="fs-15" style="line-height: 25px;">
                            <b>Batas Sebelah Utara :</b> <?php echo $tampil->batas_utara; ?><br>
                            <b>Batas Sebelah Selatan :</b> <?php echo $tampil->batas_selatan; ?><br>
                            <b>Batas Sebelah Timur :</b> <?php echo $tampil->batas_timur; ?><br>
                            <b>Batas Sebelah Barat :</b> <?php echo $tampil->batas_barat; ?><br>
                          </p>
                        </div>
                        <?php } } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>

            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                        <h2 style="font-weight: bold;">Sejarah <?php echo $header->desa; ?></h2>
                        <hr>
                      <div class="row">
                        <?php {
                        foreach ($sejarah->result() as $tampil) {
                        ?>
                        <div class="col-sm-12 grid-margin">
                          <div class="rotate-img">
                            <center>
                            <img
                              src="<?php echo base_url().'assets/foto_sejarah/'.$tampil->foto ?>"
                              alt="banner"
                              class="img-fluid"
                              width="60% auto"
                            />
                          </div>
                          <br>
                          <style type="text/css">
                            article::first-letter {
                              font-size: 28px;
                              font-weight: bold;
                              color: saddlebrown;
                            }
                          </style>
                          <article style="float: right; padding: 20px 20px 20px 20px; text-indent: 2em; text-align: justify;">
                            <?php echo $tampil->konten; ?>
                          </article>
                          </center>
                        </div>
                        <?php } } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>

            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                        <h2 style="font-weight: bold;">Perangkat Desa</h2>
                        <hr>
                      <div class="row">
                        <?php {
                        foreach ($anggota->result() as $tampil) {
                        ?>
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url().'assets/anggota/'.$tampil->anggota_foto ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                             <?php echo $tampil->anggota_nama; ?>
                          </h2>
                          <p class="fs-15">
                            <b>Jabatan :</b> <?php echo $tampil->jabatan; ?><br>
                            <b>Nip :</b> <?php echo $tampil->nip; ?><br>
                            <b>No KTP :</b> <?php echo $tampil->no_ktp; ?><br>
                            <b>Jenis Kelamin :</b> <?php echo $tampil->anggota_jk; ?><br>
                          </p>
                        </div>
                        <?php } } ?>
                      </div>
                    </div>

                    <div class="col-lg-6">
                        <h2 style="font-weight: bold;">Linmas</h2>
                        <hr>
                      <div class="row">
                        <?php {
                        foreach ($linmas->result() as $tampil) {
                        ?>
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url('assets_webdes/images/p.png'); ?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                             <?php echo $tampil->nama; ?>
                          </h2>
                          <p class="fs-15">
                            <b>Jabatan :</b> <?php echo $tampil->jabatan; ?><br>
                            <b>Alamat :</b> <?php echo $tampil->alamat; ?><br>
                            <b>Tanggal Masuk :</b> <?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_bergabung))); ?><br>
                          </p>
                        </div>
                        <?php } } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

