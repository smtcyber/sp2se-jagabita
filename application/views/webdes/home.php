          <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body" style="height: auto;">
                    <center>
                      <div class="h_iframe">
                        <?= $youtube; ?>
                      </div>
                    </center>
                  </div>
                </div>
              </div>
          </div>   

<div class="row" data-aos="fade-up">

              <div class="col-xl-8 stretch-card grid-margin">
                <div class="position-relative">
                  <?php if ($home1->num_rows()<1) { ?>
                      <h3 align="center">Belum ada postingan</h3>
                  <?php } else {
                      foreach ($home1->result() as $tampil) {
                  ?>
                  <img src="<?php echo base_url().'assets/foto_berita/'.$tampil->foto ?>" alt="banner" class="img-fluid" height="auto" />
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      <?php echo $tampil->tipe_berita; ?>
                    </div>
                    <h2 class="mb-0" style="line-height: 35px;"><?php echo $tampil->judul; ?></h2>
                    <h4 class="mb-2">
                      <?php echo $tampil->sub_judul; ?>
                      <a style="color: yellow; font-size: 15px; font-weight: bold;" href="<?php echo site_url('webdes/read_more/'.$tampil->id_berita);?>">Read More</a>
                    </h4>
                    <div class="fs-12">
                      <span class="mr-2">Foto </span><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_berita))); ?>
                    </div>
                  </div>
                  <?php } } ?>
                </div>
              </div>


              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2>Latest news</h2>

                      <?php if ($home2->num_rows()<1) { ?>
                      <h3 align="center">Belum ada postingan</h3>
                      <?php } else {
                          foreach ($home2->result() as $tampil) {
                      ?>
                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <h5><a href="<?php echo site_url('webdes/read_more/'.$tampil->id_berita);?>"><?php echo $tampil->judul; ?></a></h5>
                        <div class="fs-12">
                          <span class="mr-2">Foto </span><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_berita))); ?>
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img src="<?php echo base_url().'assets/foto_berita/'.$tampil->foto ?>" alt="thumb" class="img-fluid img-lg"/>
                      </div>
                    </div>
                      <?php } } ?>


                  </div>
                </div>
              </div>
            </div>


            <div class="row" data-aos="fade-up">
              <div class="col-sm-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="card-title">
                          Profil <?php echo $header->desa; ?>
                        </div>

                        <div class="row">
                          
                            <?php if ($visi->num_rows()<1) { ?>
                            <h3 align="center">Belum ada postingan</h3>
                            <?php } else {
                                foreach ($visi->result() as $tampil) {
                            ?>
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <a href="<?php echo site_url('webdes/page_profil');?>">
                                <img src="<?php echo base_url().'assets/foto_visi_misi/'.$tampil->foto ?>" alt="thumb" class="img-fluid" />
                              </a>
                              </div>
                              <div class="badge-positioned w-90">
                                <div class="d-flex justify-content-between align-items-center">
                                  <span class="badge badge-danger">Visi Misi <?php echo $header->desa; ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } } ?>

                          <?php if ($sejarah->num_rows()<1) { ?>
                            <h3 align="center">Belum ada postingan</h3>
                            <?php } else {
                                foreach ($sejarah->result() as $tampil) {
                            ?>
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <a href="<?php echo site_url('webdes/page_profil');?>">
                                <img src="<?php echo base_url().'assets/foto_sejarah/'.$tampil->foto ?>" alt="thumb" class="img-fluid" />
                                </a>
                              </div>
                              <div class="badge-positioned w-90">
                                <div class="d-flex justify-content-between align-items-center">
                                  <span class="badge badge-danger">Sejarah <?php echo $header->desa; ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } } ?>

                        </div>
                        <div class="row">
                          <?php if ($wilayah->num_rows()<1) { ?>
                            <h3 align="center">Belum ada postingan</h3>
                            <?php } else {
                                foreach ($wilayah->result() as $tampil) {
                            ?>
                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <a href="<?php echo site_url('webdes/page_profil');?>">
                                <img src="<?php echo base_url().'assets/foto_wilayah/'.$tampil->foto ?>" alt="thumb" class="img-fluid" />
                                </a>
                              </div>
                              <div class="badge-positioned w-90">
                                <div class="d-flex justify-content-between align-items-center">
                                  <span class="badge badge-danger">Profil Wilayah <?php echo $header->desa; ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } } ?>

                          <div class="col-sm-6 grid-margin">
                            <div class="position-relative">
                              <div class="rotate-img">
                                <a href="<?php echo site_url('webdes/page_profil');?>">
                                <img
                                  src="<?php echo base_url('assets_webdes/images/perangkat.png'); ?>"
                                  alt="thumb"
                                  class="img-fluid"
                                />
                                </a>
                              </div>
                              <div class="badge-positioned w-90">
                                <div class="d-flex justify-content-between align-items-center">
                                  <span class="badge badge-danger">Perangkat <?php echo $header->desa; ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="card-title">
                            Lihat Lainnya
                          </div>
                          <p class="mb-3">See all</p>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url('assets_webdes/images/potensi2.png'); ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h4 class="font-weight-600 mb-0">
                            <a style="text-decoration: none; color: black;" href="<?php echo site_url('webdes/page_potensi');?>">
                            Potensi <?php echo $header->desa; ?>
                            </a>
                          </h4>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url('assets_webdes/images/data.jpg'); ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h4 class="font-weight-600 mb-0">
                            <a style="text-decoration: none; color: black;" href="<?php echo site_url('webdes/page_data');?>">
                            Data Desa
                            </a>
                          </h4>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url('assets_webdes/images/lkmd.png'); ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h4 class="font-weight-600 mb-0">
                            <a style="text-decoration: none; color: black;" href="<?php echo site_url('webdes/page_lembaga');?>">
                            LKMD <?php echo $header->desa; ?>
                            </a>
                          </h4>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url('assets_webdes/images/taruna2.png'); ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h4 class="font-weight-600">
                            <a style="text-decoration: none; color: black;" href="<?php echo site_url('webdes/page_lembaga');?>">
                            Karang Taruna
                            </a>
                          </h4>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center pt-3"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url('assets_webdes/images/linmas.png'); ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h4 class="font-weight-600 mb-0">
                            <a style="text-decoration: none; color: black;" href="<?php echo site_url('webdes/page_lembaga');?>">
                            Linmas <?php echo $header->desa; ?>
                            </a>
                          </h4>
                        </div>
                        <div
                          class="d-flex justify-content-between align-items-center pt-3"
                        >
                          <div class="div-w-80 mr-3">
                            <div class="rotate-img">
                              <img
                                src="<?php echo base_url('assets_webdes/images/pkk.png'); ?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                          </div>
                          <h4 class="font-weight-600 mb-0">
                            <a style="text-decoration: none; color: black;" href="<?php echo site_url('webdes/page_lembaga');?>">
                            PKK <?php echo $header->desa; ?>
                            </a>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card" style="background-color: #2F4F4F;">
                  <div class="card-body">
                    <h2 style="color: white;">Kategori</h2>
                    <hr>
                    <ul class="vertical-menu">
                      <li><a href="<?php echo site_url('webdes/page_berita');?>">Semua Berita</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_mancanegara');?>">Berita Mancanegara</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_negeri');?>">Berita Dalam Negeri</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_desa');?>">Berita Desa</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_politik');?>">Politik</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_kuliner');?>">Kuliner</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_olahraga');?>">Olahraga</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_pendidikan');?>">Pendidikan</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_teknologi');?>">Teknologi</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_hidup');?>">Gaya Hidup</a></li>
                      <li><a href="<?php echo site_url('webdes/page_berita_traveling');?>">Traveling</a></li>
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
                    <h2>Semua Berita</h2><hr>
                      <?php if ($berita->num_rows()<1) { ?>
                      <h3 align="center">Belum ada postingan</h3>
                      <?php } else {
                          foreach ($berita->result() as $tampil) {
                      ?>
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="<?php echo base_url().'assets/foto_berita/'.$tampil->foto ?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              ><?php echo $tampil->tipe_berita; ?></span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600" style="line-height: 30px;">
                         <a href="<?php echo site_url('webdes/read_more/'.$tampil->id_berita);?>"><?php echo $tampil->judul; ?></a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Foto </span><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_berita))); ?>
                        </div>
                        <p class="mb-0" style="line-height: 20px; padding: 0px 20px 10px 0px;">
                          <?php echo $tampil->sub_judul; ?>
                        </p>
                      </div>
                    </div>
                    <?php } } ?>
                  </div>
                </div>
              </div>
            </div>
            