<div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                        <h2 style="font-weight: bold;">Potensi <?php echo $header->desa; ?></h2>
                        <hr>
                      <div class="row">
                        <?php {
                        foreach ($potensi->result() as $tampil) {
                        ?>
                        <div class="col-sm-12 grid-margin">
                          <div class="rotate-img">
                            <center>
                            <img
                              src="<?php echo base_url().'assets/foto_potensi/'.$tampil->foto ?>"
                              alt="banner"
                              class="img-fluid"
                              width="60% auto"
                            />
                          </div>
                          <br>
                            <ul style="padding: 30px 40px 30px 40px; text-align: justify;">
                              <li><b>Potensi Sumber Daya Alam</b><br>
                                <?php echo $tampil->potensi_sda; ?>
                              </li>
                              <br>
                              <li><b>Potensi Sumber Daya Manusia</b><br>
                                <?php echo $tampil->potensi_sdm; ?>
                              </li>
                              <br>
                              <li><b>Potensi Sumber Daya Sosial</b><br>
                                <?php echo $tampil->potensi_sosial; ?>
                              </li>
                              <br>
                              <li><b>Potensi Sumber Daya Ekonomi</b><br>
                                <?php echo $tampil->potensi_ekonomi; ?>
                              </li>
                              <br>
                              <p align="justify" style="text-indent: 4em;"><?php echo $tampil->keterangan; ?></p>
                            </ul>
                          </center>
                        </div>
                        <?php } } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>