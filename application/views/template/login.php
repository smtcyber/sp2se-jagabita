<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SP2SE ADMIN | SMT Indonesia</title>
    <link href="<?php echo base_url('assets/images/logo-sp2se.png'); ?>" rel="icon">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
     <link href="<?php echo base_url('assets/vendor/font1.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/font2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/coming-soon.min.css'); ?>" rel="stylesheet">

  </head>

  <body>
 
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
  <source src="<?php echo base_url('assets/mp4/smt.mp4'); ?>" type="video/mp4">
  </video>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h2 class="mb-3">SP2SE | <?php echo $header->desa; ?></h2>
              <h3 class="mb-5">Silahkan Login</h3>
              <div class="input-group input-group-newsletter">
                <form class="user" method="post" action="<?php echo site_url('dashboard/aksi_login');?>">
                    <div class="form-group">
                      <input class="form-control" placeholder="Username" name="username" type="username" style="width:350px" autofocus required>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Password" name="password" type="password" value=""required>
                    </div>
              </div>
                    <button class="btn btn-lg btn-primary btn-block" style="width:350px">Login</button>
                  </form>
                  <hr>
                  <div class="text-left">Demi Keamanan Klik "Logout" Setelah Anda Selesai<br>Melakukan input atau update
                   <!--  <a data-toggle="modal" data-target="#modal_add_new" style="color:blue" href="<?php echo site_url('dashboard/register');?>"><b>&nbsp;Create an Account!</b></a> -->
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <div class="social-icons">
      <h5 align="right"><img src="<?php echo base_url().'assets/logo/'.$header->logo ?>" width="65" height="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/SP2SE.png'); ?>" height="75" width="200"> </h5>
      <h5 align="right" style="color: white; font-family: calibri;">PT. Sarana Mandiri Teknologi</h5>
      <h6 align="right" style="color: white; font-family: calibri;"><span>&copy; 2017 Sarana Mandiri Teknologi. All rights reserved | Design by AdminLTE</span></h6>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/js/coming-soon.min.js');?>"></script>



<!-- ============ MODAL EDIT DATA =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" align="center">Create an Account!</h4>
                
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('dashboard/tambah_register');?>">
                <div class="modal-body">
                    <div class="form-group">
                    <table border="0px" width="auto" align="center">
                        <tr>   
                            <td width="500"><input class="form-control" placeholder="Username" name="T2" type="username" autofocus required></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="500"><input class="form-control" placeholder="Password" name="T3" type="password" value="" required></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-primary">Register</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL-->
  </body>

</html>
