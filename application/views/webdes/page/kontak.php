            <div class="row" data-aos="fade-up">
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h3>Kontak Kami</h3><hr><br>
                    <?php {
                      foreach ($sosmed->result() as $tampil) {
                    ?>
                    <ul>
                      <li>Facebook : <a target="_blank" href="<?php echo $tampil->facebook; ?>"><?php echo $tampil->facebook; ?></a></li>
                      <li>Instagram : <a target="_blank" href="<?php echo $tampil->instagram; ?>"><?php echo $tampil->instagram; ?></a></li>
                      <li>Youtube : <a target="_blank" href="<?php echo $tampil->youtube; ?>"><?php echo $tampil->youtube; ?></a></li>
                    </ul>
                    <?php } } ?>
                    <br><br><br>

                    <h3>Kritik dan Saran</h3><hr><br>
                    <div class="row">
                      <div class="col-sm-12 grid-margin">
                          <form role="form" action="<?php echo site_url().'/webdes/proses_tambah_saran'?>" method="post" enctype="multipart/form-data" autocomplete="on" />
                            <div class="form-group" >
                                <label><b>NIK Anda :</b></label>
                                <input class="form-control" name="nik" id="nik" placeholder="Ketikkan Nik Anda disini" required>
                            </div>
                            <div class="form-group" >
                                <label><b>Nama :</b></label>
                                <input class="form-control" name="nama" id="nama" placeholder="Ketikkan Nama Anda disini" required>
                            </div>
                            <div class="form-group" >
                                <label><b>Email :</b></label>
                                <input class="form-control" name="email" id="email" placeholder="Ketikkan Email Anda disini" required>
                            </div>
                            <div class="form-group" >
                                <label><b>Isi Kritik / Saran :</b></label>
                                <textarea class="form-control" name="isi_saran" required style="height: 200px;" placeholder="Ketikkan Isi Saran Disini..."></textarea>
                            </div>
                            <br>
                            <div class="form-group" align="left">
                              <button type="submit" class="btn btn-success" style="font-size: 16px;"><i class='fa fa-check'></i> Kirim</button>
                              <button type="reset" class="btn btn-warning" style="font-size: 16px;"><i class='fa fa-refresh'></i> Reset</button>
                            </div>
                            </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card" style="background-color: #2F4F4F;">
                  <div class="card-body">
                    <h2 style="color: white;">Menu</h2>
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
                    <br><br><br>
                    <h2 style="color: white;">Lihat Berita</h2>
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
                  </div>
                </div>
              </div>
            </div>
            