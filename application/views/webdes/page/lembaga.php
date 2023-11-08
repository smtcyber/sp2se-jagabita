            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
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
                              width="50% auto"
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
                        <h2 style="font-weight: bold;">LKMD</h2>
                        <hr>
                      <div class="row">
                        <div class="col-sm-12 grid-margin" style="padding: 30px 40px 30px 40px;">
                          <p>Lembaga Kemasyarakatan Desa (LKMD) adalah salah satu lembaga kemasyaratan yang berada di desa.</p>
                          <p>Tugas LKMD :</p>
                            <ol>
                              <li>Menyusun rencana pembangunan secara partisipatif,</li>
                              <li>Menggerakkan swadaya gotong royong masyarakat,</li>
                              <li>Melaksanakan dan</li>
                              <li>Mengendalikan pembangunan.</li>
                            </ol>

                          <p>Fungsi LKMD :</p>
                            <ol>
                              <li>Penampungan dan penyaluran aspirasi masyarakat dalam pembangunan;</li>
                              <li>Penanaman dan pemupukan rasa persatuan dan kesatuan masyarakat dalam kerangka memperkokoh Negara Kesatuan Republik Indonesia;</li>
                              <li>Penyusunan rencana, pelaksanaan, pelestarian dan pengembangan hasil-hasil pembangunan secara partisipatif;</li>
                              <li>Penumbuhkembangan dan penggerak prakarsa, partisipasi, serta swadaya gotong royong masyarakat; dan</li>
                              <li>Penggali, pendayagunaan dan pengembangan potensi sumber daya alam serta keserasian lingkungan hidup.</li>
                            </ol>
                            <p align="center" style="font-weight: bold;">DAFTAR NAMA PENGURUS LKMD</p>
                            <hr>
                            <table width="100%" border="0">
                              <thead>
                                <tr>
                                  <th><div align="center">Nama</div><hr></th>
                                  <th><div align="center">Jabatan</div><hr></th>
                                  <th><div align="center">Tanggal</div><hr></th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if (empty($lkmd)) { ?>
                              <tr>
                                <td colspan="3">Data Tidak Ditemukan</td>
                              </tr>
                                <?php } else {

                                  foreach ($lkmd->result() as $tampil) {
                                ?>
                                <tr>
                                  <td align="center"><?php echo $tampil->nama_pengurus; ?><hr></td>
                                  <td align="center"><?php echo $tampil->jabatan; ?><hr></td>
                                  <td align="center"><?php echo mediumdate_indo(date('Y-m-d', strtotime($tampil->tgl_bergabung))); ?><hr></td>
                                </tr>
                                <?php } } ?>
                              </tbody>
                            </table>
                          </center>
                        </div>
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
                        <h2 style="font-weight: bold;">Karang Taruna</h2>
                        <hr>
                      <div class="row">
                        <div class="col-sm-12 grid-margin" style="padding: 30px 40px 30px 40px;">
                          <p>Tugas Karang Taruna :</p>
                          <p style="margin-left: 20px; line-height: 23px;">menanggulangi berbagai masalah kesejahteraan sosial terutama yang dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif, maupun pengembangan potensi generasi muda di lingkungannya</p>

                          <p>Fungsi Karang Taruna :</p>
                            <ol>
                              <li>Penyelenggara usaha kesejahteraan sosial;</li>
                              <li>Penyelenggara pendidikan dan pelatihan bagi masyarakat;</li>
                              <li>Penyelenggara pemberdayaan masyarakat terutama generasi muda di lingkungannya secara komprehensif, terpadu dan terarah serta berkesinambungan;</li>
                              <li>Penanaman pengertian, memupuk dan meningkatkan kesadaran tanggung jawab sosial generasi muda;</li>
                              <li>Penumbuhan dan pengembangan semangat kebersamaan, jiwa kekeluargaan, kesetiakawanan sosial dan memperkuat nilai-nilai kearifan dalam bingkai Negara Kesatuan Republik Indonesia;</li>
                            </ol>
                            <p align="center" style="font-weight: bold;">DAFTAR NAMA PENGURUS KARANG TARUNA</p>
                            <hr>
                            <table width="100%" border="0">
                              <thead>
                                <tr>
                                  <th><div align="center">Nama</div><hr></th>
                                  <th><div align="center">Jabatan</div><hr></th>
                                  <th><div align="center">Tanggal</div><hr></th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if (empty($taruna)) { ?>
                              <tr>
                                <td colspan="3">Data Tidak Ditemukan</td>
                              </tr>
                                <?php } else {

                                  foreach ($taruna->result() as $tampil) {
                                ?>
                                <tr>
                                  <td align="center"><?php echo $tampil->nama_pengurus; ?><hr></td>
                                  <td align="center"><?php echo $tampil->jabatan; ?><hr></td>
                                  <td align="center"><?php echo mediumdate_indo(date('Y-m-d', strtotime($tampil->tgl_bergabung))); ?><hr></td>
                                </tr>
                                <?php } } ?>
                              </tbody>
                            </table>
                          </center>
                        </div>
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
                        <h2 style="font-weight: bold;">PKK</h2>
                        <hr>
                      <div class="row">
                        <div class="col-sm-12 grid-margin" style="padding: 30px 40px 30px 40px;">
                          <p>Tugas PKK :</p>
                            <ol>
                              <li>menyusun rencana kerja PKK Desa/Kelurahan, sesuai dengan basil Rakerda Kabupaten/Kota;</li>
                              <li>melaksanakan kegiatan sesuai jadwal yang disepakati;</li>
                              <li>menyuluh dan menggerakkan kelompok-kelompok PKK Dusun/Lingkungan, RW, RT dan dasa wisma agar dapat mewujudkan kegiatan-kegiatan yang telah disusun dan disepakati;</li>
                              <li>menggali, menggerakan dan mengembangkan potensi masyarakat, khususnya keluarga untuk meningkatkan kesejahteraan keluarga sesuai dengan kebijaksanaan yang telah ditetapkan;</li>
                              <li>melaksanakan kegiatan penyuluhan kepada keluarga-keluarga yang mencakup kegiatan bimbingan dan motivasi dalam upaya mencapai keluarga sejahtera;.</li>
                              <li>mengadakan pembinaan dan bimbingan mengenai pelaksanaan program kerja;</li>
                              <li>berpartisipasi dalam pelaksanaan program instansi yang berkaitan dengan kesejahteraan keluarga di desa/kelurahan;</li>
                              <li>membuat laporan basil kegiatan kepada Tim Penggerak PKK Kecamatan dengan tembusan kepada Ketua Dewan Penyantun Tim Penggerak PKK setempat;</li>
                              <li>melaksanakan tertib administrasi; dan</li>
                              <li>mengadakan konsultasi dengan Ketua Dewan Penyantun Tim Penggerak PKK setempat.</li>
                            </ol>

                          <p>Fungsi PKK :</p>
                            <ol>
                              <li>penyuluh, motivator dan penggerak masyarakat agar mau dan mampu melaksanakan program PKK; dan</li>
                              <li>fasilitator, perencana, pelaksana, pengendali, pembina dan pembimbing Gerakan PKK.</li>
                            </ol>
                            <p align="center" style="font-weight: bold;">DAFTAR NAMA PENGURUS PKK</p>
                            <hr>
                            <table width="100%" border="0">
                              <thead>
                                <tr>
                                  <th><div align="center">Nama</div><hr></th>
                                  <th><div align="center">Jabatan</div><hr></th>
                                  <th><div align="center">Tanggal</div><hr></th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php if (empty($pkk)) { ?>
                              <tr>
                                <td colspan="3">Data Tidak Ditemukan</td>
                              </tr>
                                <?php } else {

                                  foreach ($pkk->result() as $tampil) {
                                ?>
                                <tr>
                                  <td align="center"><?php echo $tampil->nama; ?><hr></td>
                                  <td align="center"><?php echo $tampil->jabatan; ?><hr></td>
                                  <td align="center"><?php echo mediumdate_indo(date('Y-m-d', strtotime($tampil->tgl_bergabung))); ?><hr></td>
                                </tr>
                                <?php } } ?>
                              </tbody>
                            </table>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>