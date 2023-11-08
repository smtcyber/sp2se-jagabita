<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SP2SE | <?php echo $header->desa; ?>
        <small>Pembuatan Surat Hari ini</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-sitemap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kartu Keluarga</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tkk WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendaftaran KTP</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tdaftar WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ahli Waris</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tahli_pelapor WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-heart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Andon Nikah</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tandon_nikah WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<!-------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-close"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Beda Identitas</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_identitas WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kawin/Duda/Janda</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tskbn WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fa fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Belum Punya KTP</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM bp_ktp WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Belum Punya Rumah</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_ket_belum_memiliki_rumah WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

<!-------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="fa fa-list-ul"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Daftar Nikah</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tdaftar_nikah WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-map-marker"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Domisili Tinggal</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_domtinggal WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Domisili Usaha</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_domusaha WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-share-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pernyataan Gadai</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_gadai WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->


<!-------------------------------------------------------------------------------------------------------------------------------- -->

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Izin Keramaian</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_ramai WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-cubes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jual Beli</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_jualbeli WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-search"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Kehilangan</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_kehilangan WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-child"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Kelahiran</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_kelahiran WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->

<!-------------------------------------------------------------------------------------------------------------------------------- -->

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fa fa-minus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Kematian</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_kematian WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-child"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kenal Lahir</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tkenal_lahir WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">KTP Sementara</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tktpsementara WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-tags"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kepemilikan Tanah</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_keterangan_tanah WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->

<!-------------------------------------------------------------------------------------------------------------------------------- -->

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="fa fa-plane"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Perjalanan</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_keterangan_jalan WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pindah Datang</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tpindah_datang WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-flag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Tanah</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_keterangan_tanah1 WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-arrow-down"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Tidak Mampu</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsktm WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->

<!-------------------------------------------------------------------------------------------------------------------------------- -->

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-wrench"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Usaha</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsku WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-arrows-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Ket Lain-lain</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_keterangan WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-paperclip"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pernyataan Umum</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_pernyataan WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-gray"><i class="fa fa-check-circle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">SKCK</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_skck WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->

<!-------------------------------------------------------------------------------------------------------------------------------- -->

   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-navy"><i class="fa fa-university"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Domisili Lembaga</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_domlembaga WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fa fa-graduation-cap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Domisili Sekolah</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_domsekolah WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Domisili Perusahaan</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_domperusahaan WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pernyataan Bersama</span>
              <span class="info-box-number"><small>
              <?php
                        $jumlah = $this->db->query("SELECT * FROM tsurat_bersama WHERE tgl_surat='".date('Y-m-d')."'")->num_rows();
                        echo $jumlah; ?> Surat</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>
      <!-- /.row -->