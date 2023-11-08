<div class="cd-full-width" style="margin-top: 60px;" id="pageone">
    <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b">
        <div class="row tm-white-box-margin-b">
            <div class="col-xs-12">
                <div class="tm-flex">
                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding" style="background-color: #5F9EA0; margin-left: 80px;">
                    	<center>
                        <h2 class="tm-text-title" align="center">SURAT KETERANGAN BELUM BEKERJA</h2>
                        <div style="width: 1000px;">
                            <iframe id="printPage" src="<?php echo base_url()?>index.php/c_belum_bekerja/cetak_data_belum_bekerja/<?php echo $data->id_belum_bekerja ?>" style="height: 400px; width: 750px; border: none; background: white; border: 4px solid white;"></iframe>
							<br><br>
							
								<a href="#" class="btn btn-success" style="width: 220px; height: 60px; font-size: 20px; font-weight: bold; border: 4px solid white; padding-top: 10px;" onclick="printPage()">Print Kades</a>
								<a href="#" class="btn btn-warning" style="width: 220px; height: 60px; font-size: 20px; font-weight: bold; border: 4px solid white; padding-top: 10px;" onclick="printPage1()">Print Atas Nama</a>
								<a href="<?php echo site_url('c_panel');?>" type="button" class="btn btn-info" style="width: 220px; height: 60px; font-size: 20px; font-weight: bold; border: 4px solid white; padding-top: 10px;">Kembali</a>
							</center>
						</div>
                    </div>
                </div>
            </div>
        </div>                           
    </div>              
</div>
<div id="printerDiv" style="display:none"></div>
</body>
<script>
   function printPage()
   {
      var div = document.getElementById("printerDiv");
      div.innerHTML = '<iframe id="printPage" src="<?php echo base_url()?>index.php/c_belum_bekerja/cetak_data_belum_bekerja/<?php echo $data->id_belum_bekerja ?>" style="height: 400px; width: 700px; border: none; background: white;" onload="this.contentWindow.print();"></iframe>';
   }
</script>
<script>
   function printPage1()
   {
      var div = document.getElementById("printerDiv");
      div.innerHTML = '<iframe id="printPage" src="<?php echo base_url()?>index.php/c_belum_bekerja/cetak_data_belum_bekerja1/<?php echo $data->id_belum_bekerja ?>" style="height: 400px; width: 700px; border: none; background: white;" onload="this.contentWindow.print();"></iframe>';
   }
</script>