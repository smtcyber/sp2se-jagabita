            <div class="row" data-aos="fade-up">
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h3><?php echo $berita->judul ?></h3><hr>
                    <div class="row">
                      <div class="col-sm-12 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img src="<?php echo base_url().'assets/foto_berita/'.$berita->foto ?>" alt="thumb" class="img-fluid"/>
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              ><?php echo $berita->tipe_berita; ?></span
                            >
                          </div>
                        </div>
                        <br>
                        <p style="font-size: 13px; color: brown">Source : <?php echo $berita->sumber; ?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo tgl_indo(date('Y-m-d', strtotime($berita->tgl_berita))); ?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $berita->tipe_berita; ?></p>
                        <h4><?php echo $berita->sub_judul; ?></h4>
                        <article style="text-indent: 3em; text-align: justify; padding: 0px 10px 10px 0px;"><?php echo $berita->artikel; ?></article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
            </div>
            
            <div class="row" data-aos="fade-up">

              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card text-white" style="background-color: #2F4F4F;">
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
                    <h1 class="mb-0" style="line-height: 35px;"><?php echo $tampil->judul; ?></h1>
                    <h3 class="mb-2">
                      <?php echo $tampil->sub_judul; ?>
                      <a style="color: blue; font-size: 19px; font-weight: bold;" href="<?php echo site_url('webdes/read_more/'.$tampil->id_berita);?>">Read More</a>
                    </h3>
                    <div class="fs-12">
                      <span class="mr-2">Foto </span><?php echo tgl_indo(date('Y-m-d', strtotime($tampil->tgl_berita))); ?>
                    </div>
                  </div>
                  <?php } } ?>
                </div>
              </div>
            </div>