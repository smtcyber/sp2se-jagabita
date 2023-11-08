<div id="fh5co" style="background: #DB993B;" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<br>
					<table border="0" align="center">
						<tr>
							<td align="center" width="auto"><a href="<?php echo site_url('c_panel');?>"><img src="<?php echo base_url('assets/images/lite.png'); ?>" height="50" width="160"></a></td>
							<td align="center" width="auto">
							<div id="slider">
							      <div class="container">
									<div class="slide">
							          <h3 style="color: white;"><b>SISTEM PERCEPATAN</b> <span style="color: black;">PELAYANAN SURAT ELEKTRONIK</span></h3>
							        </div>
							        <div class="slide">
							          <h3>KANTOR <span style="color: white;"><b><?php echo ucwords(strtoupper($header->desa)) ?></b></h3>
							        </div>
							        <div class="slide">
							          <h3>KECAMATAN <span style="color: white;">
							          	<b><?php 
							          			$teks = $header->kecamatan;
							          			$pecah = explode(" ", $teks);
							          			$hasil = $pecah[1];
							          			echo $hasil;
											?></b></span></h3>
							        </div>
							        <div class="slide">
							          <h3>KABUPATEN <span style="color: white;">
							          	  <b><?php 
							          			$teks = $header->pemerintah;
							          			$pecah = explode(" ", $teks);
							          			$hasil = $pecah[2];
							          			echo $hasil;
											?>
										  </b></span></h3>
							        </div>
							    </div>
							</div>
								</td>
							<td align="center" width="auto"><a href="#"><img src="<?php echo base_url('assets/images/apk.png'); ?>" height="50" width="170"></a></td>
						</tr>
					</table>
				<br>
				</div>
			</div>
		</div>