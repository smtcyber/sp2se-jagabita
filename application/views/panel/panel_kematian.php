<div class="cd-full-width" style="margin-top: 60px;">
    <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b">
        <div class="row tm-white-box-margin-b">
            <div class="col-xs-12">
                <div class="tm-flex">
                    <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding" style="background-color: #E6E6FA;">
                        <h2 class="tm-text-title" align="center">SURAT KETERANGAN KEMATIAN</h2>
                            <div class="container">
                                <form action="<?php echo site_url().'/c_kematian/proses_panel_kematian'?>" method="post">
                                    <div class="row">
                                        <div class="col-69">
                                            <input class="use-keyboard-input" type="text" id="fname" name="nama_pelapor" placeholder="Masukkan Nama Pelapor" required autofocus />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-75">
                                            <input class="use-keyboard-input" type="text" id="fname" name="no_ktp" placeholder="Masukkan NIK Orang Mati" required />
                                        </div>
                                    </div>
                                    <br><br>
                                    <button id="proses" type="submit" class="btn btn-success" style="width: 220px; height: 60px; font-size: 20px; font-weight: bold; border: 4px solid white;">Proses</button>
                                    <button type="button" class="btn btn-info" style="width: 220px; height: 60px; font-size: 20px; font-weight: bold; border: 4px solid white;" onclick="self.history.back()">Kembali</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>                           
    </div>              
</div>
<script>
   $(document).ready(function(){
          setTimeout(function(){
            $('#modalKematian').modal('show');
          }, 1000);
        });
</script>