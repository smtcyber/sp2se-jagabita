<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('assets/images/logo-sp2se.png'); ?>" rel="icon">

    <script language='JavaScript'>
    var txt="Sistem Percepatan Pelayanan Surat Elektronik - Kantor <?php echo ucwords(strtolower($header->desa)) ?>, Kecamatan <?php 
                                                $teks = ucwords(strtolower($header->kecamatan));
                                                $pecah = explode(" ", $teks);
                                                $hasil = $pecah[1];
                                                echo $hasil;
                                            ?>, Kabupaten <?php 
                                                $teks = ucwords(strtolower($header->pemerintah));
                                                $pecah = explode(" ", $teks);
                                                $hasil = $pecah[2];
                                                echo $hasil;
                                            ?> - ";
    var speed=400;
    var refresh=null;
    function action() { document.title=txt;
    txt=txt.substring(1,txt.length)+txt.charAt(0);
    refresh=setTimeout("action()",speed);}action();
    </script>
<!--

Template 2086 Multi Color

http://www.tooplate.com/view/2086-multi-color

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome-4.5.0/css/font-awesome.min.css'); ?>">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/bootstrap.min.css'); ?>">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/hero-slider-style.css'); ?>">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/magnific-popup.css'); ?>">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/tooplate-style.css'); ?>">   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css2/jQKeyboard.css');?>"> 

    <link rel="stylesheet" href="<?= base_url('/assets/dcode.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('keyboard/Keyboard.css'); ?> ">
    <link href="<?= base_url('https://fonts.googleapis.com/icon?family=Material+Icons'); ?>" rel="stylesheet">                              

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    <style type="text/css">
        #slider,  #slider .slide{
          width: 740px;
          height: 3px;
          text-align: right;
          margin-top: 1px;
        }
        #slider {
          overflow: hidden;
          margin: 0;
          font-size: 1em;
          text-align: right;
          background: transparent;
        }
        #slider .container {
          position: relative;
          bottom: 0;
          right: 0;
          text-align: right;
          animation: slide-animation 9s infinite;
        }
        #slider .slide {
          position: relative;
          box-sizing: border-box;
          padding: 25px 60px;
          text-align: right;
        }

        /* [ANIMATION] */
        @keyframes slide-animation {
          0% { 
            opacity: 0;
            bottom: 0;
          }
          11% {
            opacity: 1;
            bottom: 0; 
          }
          22% { bottom: 100%; }
          33% { bottom: 100%; }
          44% { bottom: 200%; }
          55% { bottom: 200%; }
          66% { bottom: 300%; }
          77% { bottom: 300%; }
          88% {
            opacity: 1;
            bottom: 400%; 
          }
          100% {
            opacity: 0;
            bottom: 400%;
          }
        }

        @media screen and (max-width: 731px) {
            #slider{
            font-size: 5px;
            text-align: right;
            text-transform:uppercase;
            color:#464646;
            height: 45px;
            line-height: 45px;
            overflow:hidden;
        }
          }
        @media screen and (min-width: 800px) {
            #slider{
            font-size: 5px;
            text-align: right;
            text-transform:uppercase;
            color:#464646;
            height: 45px;
            line-height: 45px;
            overflow:hidden;
        }
    }

    </style>

    <style type="text/css">
        div.scroll {
         background-color: white;
         width: 800px;
         height: 400px;
         overflow: scroll;
         padding: 10px;
         scroll-behavior: smooth;
        }
        div.hidden {
         background-color: #00FF00;
         width: 800px;
         height: 400px;
         overflow: hidden;
        }
    </style>

    <style type="text/css">
        .move1 {
          position: fixed;
          bottom: 200px;
          left: 20px;
          z-index: 999;
          -webkit-transition: 0.5s;
          -o-transition: 0.5s;
          transition: 0.5s;
        }
        .move1 {
          position: fixed;
          bottom: 170px;
          left: 20px;
          z-index: 999;
          -webkit-transition: 0.5s;
          -o-transition: 0.5s;
          transition: 0.5s;
        }
        .move2 {
          position: fixed;
          bottom: 120px;
          left: 20px;
          z-index: 999;
          -webkit-transition: 0.5s;
          -o-transition: 0.5s;
          transition: 0.5s;
        }
        .move3 {
          position: fixed;
          bottom: 70px;
          left: 20px;
          z-index: 999;
          -webkit-transition: 0.5s;
          -o-transition: 0.5s;
          transition: 0.5s;
        }
        .move4 {
          position: fixed;
          bottom: 20px;
          left: 20px;
          z-index: 999;
          -webkit-transition: 0.5s;
          -o-transition: 0.5s;
          transition: 0.5s;
        }
        .help {
          position: fixed;
          top: 100px;
          left: 20px;
          z-index: 999;
          -webkit-transition: 0.5s;
          -o-transition: 0.5s;
          transition: 0.5s;
        }
    </style>

    <style>
        * {
            box-sizing: border-box;
        }
        input[type=text], select, textarea {
            width: 100%;
            height: 70px;
            padding: 12px;
            border: 3px solid white;
            background-color: #FFFACD;
            border-radius: 4px;
            resize: vertical;
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .container {
            border-radius: 5px;
            background-color: transparent;
            padding: 20px;
            text-align: center;
        }
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }
        .col-00 {
            float: left;
            width: 25%;
            margin-top: -50px;
        }
        .col-75 {
            float: left;
            width: 100%;
            margin-top: 6px;
            text-align: center;
        }
        .col-69 {
            float: left;
            width: 100%;
            margin-top: -30px;
            text-align: center;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 731px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

    </style>

    <style type="text/css">
        #wrapper
        {
            text-align:center;
            margin:0px auto;
            padding:0px;
            width:760px;
        }
        #wrapper p{
            border: 1px solid #999;
            padding: 20px;
            margin: 20px;
            background: #fff;
        }
        #tombolScrollTop
        {
            cursor: pointer;
            position:fixed;
            left:93%;
            bottom:50px;
            border:3px solid #585858;
            background-color:blue;
            color:#585858;
            border-radius:100%;
            height:70px;
            width:70px;
            font-size:10px;
            font-weight: bold;
            color: white;
            display:none;
            z-index: 999;
        }

    </style>
    <style>
        .keyboard {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 5px 0;
            background: #a32b2b;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            user-select: none;
            transition: bottom 0.4s;
            }

            .keyboard--hidden {
            bottom: -100%;
            }

            .keyboard__keys {
            text-align: center;
            }

            .keyboard__key {
            height: 45px;
            width: 6%;
            max-width: 90px;
            margin: 3px;
            border-radius: 4px;
            border: none;
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            font-size: 1.05rem;
            outline: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            vertical-align: top;
            padding: 0;
            -webkit-tap-highlight-color: transparent;
            position: relative;
            }

            .keyboard__key:active {
            background: rgba(255, 255, 255, 0.12);
            }

            .keyboard__key--wide {
            width: 12%;
            }

            .keyboard__key--extra-wide {
            width: 36%;
            max-width: 500px;
            }

            .keyboard__key--activatable::after {
            content: "";
            top: 10px;
            right: 10px;
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
            }

            .keyboard__key--active::after {
            background: #08ff00;
            }

            .keyboard__key--dark {
            background: rgba(0, 0, 0, 0.25);
            }
    </style>
</head>

    <body>
    <!-- Modal Domisili Tinggal-->
        <div class="modal fade" id="modalDomTinggal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                - Membawa Surat Pengantar RT & RW <br>
                - Fotocopy KK <br>
                - Fotocopy KTP <br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>
    
    <!-- Modal SKU-->
    <div class="modal fade" id="modalSKU">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                - Membawa Surat Pengantar RT & RW <br>
                - Fotocopy KK <br>
                - Fotocopy KTP <br>
                - Fotocopy Lunas PBB <br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal SKCK-->
        <div class="modal fade" id="modalSKCK">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                - Membawa Surat Pengantar RT & RW <br>
                - Fotocopy KK <br>
                - Fotocopy KTP <br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Domisili Haji-->
        <div class="modal fade" id="modalDomHaji">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                - Membawa Surat Pengantar RT & RW <br>
                - Fotocopy KK <br>
                - Fotocopy KTP <br>
                - Materai 6000 <br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Daftar KTP-->
        <div class="modal fade" id="modalDaftarKTP">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                - Membawa Surat Pengantar RT & RW <br>
                - Fotocopy KK <br>
                - Surat Keterangan Kehilangan Dari Kepolisian (Jika E-KTP Hilang)
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

                <!-- Modal Ahli Waris-->
        <div class="modal fade" id="modalAhliWaris">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                - Membawa Surat Pengantar RT & RW <br>
                - Fotocopy KK Ahli Waris<br>
                - Fotocopy KTP Ahli Waris <br>
                - Fotocopy Surat Kematian <br>
                - Fotocopy Akta Kelahiran (Jika Ahli Waris dibawah Umur 17 Tahun) <br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

                <!-- Modal Pindah Datang-->
        <div class="modal fade" id="modalPindahDatang">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Surat Pindah dari tempat asal (<i> asli dan fotocopy </i>)<br>
                3.	Fotocopy KTP asal<br>
                4.	Fotocopy KK asal<br>
                5.	Fotocopy Buku Nikah<br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

                <!-- Modal Daftar KTP-->
        <div class="modal fade" id="modalDaftarNikah">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KK<br>
                3.	Fotocopy KTP<br>
                4.	Surat Pernyataan Status<br>
                5.	Fotocopy Akta Cerai ( jika sudah bercerai )<br>
                6.	Fotocopy surat kematian ( jika suami/istri telah meninggal )<br>

            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

       <!-- Modal Kematian-->
        <div class="modal fade" id="modalKematian">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KK<br>
                3.	Fotocopy KTP<br>
                4.	Fotocopy keterangan kematian dari rumah sakit ( <i>jika meninggal di rumah sakit</i> )<br>


            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Kelahiran-->
        <div class="modal fade" id="modalKelahiran">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KK<br>
                3.	Fotocopy KTP<br>
                4.	Fotocopy keterangan kelahiran dari rumah sakit / bidan 
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal SKTM-->
        <div class="modal fade" id="modalSKTM">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KTP<br>
                3.	Fotocopy KK<br>
                4.	Materai 10000 ( <i>jika sktm nya untuk ke rumah sakit</i> )<br>

            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

                <!-- Modal Domisili Usaha-->
                <div class="modal fade" id="modalDomUsaha">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KTP <br>
                3.	Fotocopy NPWP ( <i>jika ada</i> ) <br>
                4.	Surat Pernyataan Tidak Keberatan ( <i>fotocopy ktp warga yang tidak keberatan</i> ) <br>
                5.	Fotocopy PBB <br>
                6.	Fotocopy Sertifikat

            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

                <!-- Modal Belum Menikah-->
        <div class="modal fade" id="modalBelumMenikah">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KTP <br>
                3.	Fotocopy KK <br>
                4.  Fotocopy Surat Kematian Istri/Suami ( <i>untuk surat keterangan duda/janda </i>) <br>

            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal Izin Ramai - Ramai-->
        <div class="modal fade" id="modalIzinRamai">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	Fotocopy KTP <br>
                3.	Fotocopy KK <br>

            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal KK-->
        <div class="modal fade" id="modalKK">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Syarat Pembuatan Surat</h4>
            </div>
            <!--body-->
            <div class="modal-body">
                1.	Surat Pengantar RT-RW <br>
                2.	KK asli<br>
                3.	Fotocopy keterangan lahir dari Rumah Sakit / Bidan ( jika perubahan KKnya untuk tambah anak )<br>
                4.	Surat Pindah ( jika ada tambahan anggota keluarga baru dari tempat asalnya )<br>
                5.	Surat keterangan kehilangan dari Kepolisian ( jika kk hilang )<br>
                6.	Buku Nikah Fotocpy<br>
                7.	Ijazah terakhir  jika ada pendidikan yang berubah<br>
                8.	Keterangan pekerjaan dari perusahaan jika ada perubahan pekerjaan<br>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
        </div>

<!-- jQuery, Keyboard.js -->
<script src="<?= base_url('assets/js/Keyboard.js'); ?>"></script>
<!-- jQuery, bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>




        <!-- Content -->
        <div class="cd-hero" style="background-image: url(assets/images/backend2.jpg);">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar" style="background-color: #E6E6FA;">
                        
                        <a style="color: brown;" class="navbar-brand text-uppercase" href="<?php echo site_url('c_panel');?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/head_sp2se.png'); ?>" height="40" width="130">&nbsp; SMT INDONESIA<hr><br><br>
                        <div class="navbar-toggleable-md text-uppercase tm-navbar"  style="background-color: #D3D3D3; margin-left: -30px;">
                            <div id="slider">
                                <div class="container">
                                    <div class="slide">
                                        <h1>KANTOR <span style="color: brown; font-size: 25px;"><b><?php echo ucwords(strtoupper($header->desa)) ?></b></span></h1>
                                    </div>
                                    <div class="slide">
                                            <h1>KECAMATAN <span style="color: brown; font-size: 25px;">
                                                <b><?php 
                                                            $teks = $header->kecamatan;
                                                            $pecah = explode(" ", $teks);
                                                            $hasil = $pecah[1];
                                                            echo $hasil;
                                                        ?></b></span></h1>
                                    </div>
                                    <div class="slide">
                                            <h1>KABUPATEN <span style="color: brown; font-size: 25px;">
                                                <b><?php 
                                                            $teks = $header->pemerintah;
                                                            $pecah = explode(" ", $teks);
                                                            $hasil = $pecah[2];
                                                            echo $hasil;
                                                        ?>
                                                      </b></span></h1>
                                    </div>
                                </div>
                            </div>
                        </a>
                            
                        </div>      

                </nav>
            </div> 

            <numb>
                <div class="move1 move">
                    <a href="#pageone" title="Page One"><button class="btn btn-primary" style="color: black; font-size: 15px; width: 50px; height: 40px;"><i><b>1</b></i></button></a>
                </div>
                <div class="move2 move">
                    <a href="#pagetwo" title="Page Two"><button class="btn btn-primary" style="color: black; font-size: 15px; width: 50px; height: 40px;"><i><b>2</b></i></button></a>
                </div>
                <div class="move3 move">
                    <a href="#pagethree" title="Page Three"><button class="btn btn-primary" style="color: black; font-size: 15px; width: 50px; height: 40px;"><i><b>3</b></i></button></a>
                </div>
                <div class="move4 move">
                    <a href="#pagefour" title="Page Four"><button class="btn btn-primary" style="color: black; font-size: 15px; width: 50px; height: 40px;"><i><b>4</b></i></button></a>
                </div>

                <input type="button" value="Scroll Top" id="tombolScrollTop" onclick="scrolltotop()">

            </numb>

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                                                  

                                    <?php $this->load->view($isi); ?>                 
                </li>

            </ul> <!-- .cd-hero-slider -->
            
            <footer class="footer" style="background-color: #E6E6FA;">
                <br>
                <p class="copyright-text" align="center"><b>Copyright &copy; 2016 - <?php echo date('Y'); ?> <a target="_blank" href="http://smtindonesia.com/" style="color: red;">Sarana Mandiri Teknologi</a>. All Rights Reserved.<br>Dilindungi Oleh Undang-undang No 28 Tahun 2014 Tentang Hak Cipta & Hak Kekayaan Intelektual (HKI)</b></p>
                <br>
            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        <script src="<?php echo base_url('assets/js1/jquery-1.11.3.min.js');?>"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="<?php echo base_url('assets/js1/bootstrap.min.js');?>"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="<?php echo base_url('assets/js1/hero-slider-main.js');?>"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="<?php echo base_url('assets/js1/jquery.magnific-popup.min.js');?>"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
                
                /* Gallery Two pop up
                -----------------------------------------*/
                $('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                           
            });

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(37.769725, -122.462154),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {                
                loadGoogleMap(); // Google Map
            });

        </script>          

        <script type="text/javascript" src="<?php echo base_url('assets/js2/jQKeyboard.js');?>"></script>
        <script type="text/javascript">
                $(function(){
                    var keyboard = {
                        'layout': [
                            // alphanumeric keyboard type
                            // text displayed on keyboard button, keyboard value, keycode, column span, new row
                            [
                                [
                                    ['`', '`', 192, 0, true], ['1', '1', 49, 0, false], ['2', '2', 50, 0, false], ['3', '3', 51, 0, false], ['4', '4', 52, 0, false], ['5', '5', 53, 0, false], ['6', '6', 54, 0, false], 
                                    ['7', '7', 55, 0, false], ['8', '8', 56, 0, false], ['9', '9', 57, 0, false], ['0', '0', 48, 0, false], ['-', '-', 189, 0, false], ['=', '=', 187, 0, false],
                                    ['q', 'q', 81, 0, true], ['w', 'w', 87, 0, false], ['e', 'e', 69, 0, false], ['r', 'r', 82, 0, false], ['t', 't', 84, 0, false], ['y', 'y', 89, 0, false], ['u', 'u', 85, 0, false], 
                                    ['i', 'i', 73, 0, false], ['o', 'o', 79, 0, false], ['p', 'p', 80, 0, false], ['[', '[', 219, 0, false], [']', ']', 221, 0, false], ['&#92;', '\\', 220, 0, false],
                                    ['a', 'a', 65, 0, true], ['s', 's', 83, 0, false], ['d', 'd', 68, 0, false], ['f', 'f', 70, 0, false], ['g', 'g', 71, 0, false], ['h', 'h', 72, 0, false], ['j', 'j', 74, 0, false], 
                                    ['k', 'k', 75, 0, false], ['l', 'l', 76, 0, false], [';', ';', 186, 0, false], ['&#39;', '\'', 222, 0, false], ['Enter', '13', 13, 3, false],
                                    ['Shift', '16', 16, 2, true], ['z', 'z', 90, 0, false], ['x', 'x', 88, 0, false], ['c', 'c', 67, 0, false], ['v', 'v', 86, 0, false], ['b', 'b', 66, 0, false], ['n', 'n', 78, 0, false], 
                                    ['m', 'm', 77, 0, false], [',', ',', 188, 0, false], ['.', '.', 190, 0, false], ['/', '/', 191, 0, false], ['Shift', '16', 16, 2, false],
                                    ['Bksp', '8', 8, 3, true], ['Space', '32', 32, 12, false], ['Clear', '46', 46, 3, false], ['Cancel', '27', 27, 3, false]
                                ]
                            ]
                        ]
                    }
                    $('input.jQKeyboard').initKeypad({'keyboardLayout': keyboard});
                });
        </script>
        <script type="text/javascript">
            function printContent(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el) .innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(window).scroll(function(){
                    if ($(window).scrollTop() > 100) {
                        $('#tombolScrollTop').fadeIn();
                    } else {
                        $('#tombolScrollTop').fadeOut();
                    }
                });
            });

            function scrolltotop()
            {
                $('html, body').animate({scrollTop : 0},500);
            }
        </script>  

</body>
</html>