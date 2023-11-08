<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_panel extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
		
	}

	public function index(){
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['isi'] = "panel/daftar_menu.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	public function notif_sukses(){
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/notif_sukses.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	public function notif_gagal(){
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/notif_gagal.php";
	    $this->load->view('panel/panel_utama',$data);
	}


//SURAT DOMISILI USAHA  --------------------------------------------------------
	function panel_domusaha() {
		$this->load->view('panel/panel_domusaha');
	}

	function proses_panel_domusaha() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domusaha($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"jenis_usaha" => $this->input->post("jenis_usaha"),
					"penghasilan" => $this->input->post("penghasilan"),
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$skuId = $this->m_index->tambah_domisili_usaha($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Usaha",
							"link" => "c_domisili_usaha/domisili_usaha",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			$this->load->view('panel/cetak/cetak_domusaha/'. $skuId);
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data_domusaha($id) {
		$data['tampil'] = $this->m_index->cetak_domusaha($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/cetak_data_domusaha', $data);
	}

	function cetak_data_domusaha1($id) {
		$data['tampil'] = $this->m_index->cetak_domusaha1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/cetak_data_domusaha', $data);
	}


//SURAT DOMISILI TINGGAL  --------------------------------------------------------
	function panel_domtinggal() {
	    $data['isi'] = "panel/panel_domtinggal.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_domtinggal() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domtinggal($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$skuId = $this->m_index->tambah_domisili_tinggal($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Tinggal",
							"link" => "c_domisili_tinggal/domisili_tinggal",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/cetak_data_domtinggal/'. $skuId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}
	
	function cetak_data_domtinggal($id) {
		$data['data'] = $this->m_index->cetak_data_domtinggal($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "panel/cetak/surat_domtinggal/cetak_domtinggal";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_domtinggal1($id) {
		$data['data'] = $this->m_index->cetak_data_domtinggal1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_domtinggal/cetak_domtinggal";
	    $this->load->view('panel/panel_utama',$data);
	}


//SURAT AHLI WARIS  ---------------------------------------------------------------
	function panel_ahli_waris() {
	    $data['isi'] = "panel/panel_ahli_waris.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_ahli_waris() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_waris($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_pelapor($data_nik);
			$data =  array ("surat" => "Surat Keterangan Ahli Waris",
							"link" => "c_ahli_waris/pelapor",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//KARTU KELUARGA  ---------------------------------------------------------------
	function panel_ramai() {
		$this->load->view('panel/panel_ramai');
	}

	function proses_panel_ramai() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_ramai($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_ramai($data_nik);
			$data =  array ("surat" => "Surat Keterangan Izin Keramaian",
							"link" => "c_ramai/ramai",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT SKCK  --------------------------------------------------------------------
	function panel_skck() {
		$this->load->view('panel/panel_skck');
	}

	function proses_panel_skck() {
		$nik = $this->input->post('no_ktp');
		$aa = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_skck($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_skck($data_nik);
			$r['data'] = $data_nik;
			$r['bb'] = $aa;
			$this->load->view('panel/cetak/cetak_skck', $r);
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

//SURAT SKCK  --------------------------------------------------------------------
function panel_belum_bekerja() {
	$this->load->view('panel/panel_belum_bekerja');
}

function proses_panel_belum_bekerja() {
	$nik = $this->input->post('no_ktp');
	$aa = $this->input->post('no_ktp');
	$get_nik = $this->m_index->cek_nik_belum_bekerja($nik);
	if ($get_nik->num_rows()>0) {
		foreach ($get_nik->result() as $data) {
			$data_nik=array(
				"id_penduduk" => $data->id_penduduk,
				"keperluan" => $this->input->post("keperluan"),
				"tgl_surat" => date('Y-m-d')
				);
		}
		$this->m_index->tambah_belum_bekerja($data_nik);
		$r['data'] = $data_nik;
		$r['bb'] = $aa;
		$this->load->view('panel/cetak/cetak_belum_bekerja', $r);
	} else {
		redirect(site_url('c_panel/notif_gagal'));
	}
	
}


//SURAT ANDON NIKAH  --------------------------------------------------------------
	function panel_andon_nikah() {
		$this->load->view('panel/panel_andon_nikah');
	}

	function proses_panel_andon_nikah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_andon_nikah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_andon_nikah($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT DAFTAR NIKAH  ------------------------------------------------------------
	function panel_daftar_nikah() {
		$this->load->view('panel/panel_daftar_nikah');
	}

	function proses_panel_daftar_nikah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_daftar_nikah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_daftar_nikah($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SKTM  --------------------------------------------------------------------------
	function panel_sktm() {
		$this->load->view('panel/panel_sktm');
	}

	function proses_panel_sktm() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_sktm($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_sktm($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT KETERANGAN KELAHIRAN  ----------------------------------------------------
	function panel_kelahiran() {
		$this->load->view('panel/panel_kelahiran');
	}

	function proses_panel_kelahiran() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kelahiran($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_kelahiran($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT KETERANGAN KEMATIAN  -----------------------------------------------------
	function panel_kematian() {
		$this->load->view('panel/panel_kematian');
	}

	function proses_panel_kematian() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kematian($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_kematian($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT PINDAH DATANG  -----------------------------------------------------------
	function panel_pindah_datang() {
		$this->load->view('panel/panel_pindah_datang');
	}

	function proses_panel_pindah_datang() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_pindah_datang($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_pindah_datang($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT KETERANGAN KENAL LAHIR  --------------------------------------------------
	function panel_kenal_lahir() {
		$this->load->view('panel/panel_kenal_lahir');
	}

	function proses_panel_kenal_lahir() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kenal_lahir($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_kenal_lahir($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT KETERANGAN KEHILANGAN  ---------------------------------------------------
	function panel_kehilangan() {
		$this->load->view('panel/panel_kehilangan');
	}

	function proses_panel_kehilangan() {
		$nik = $this->input->post('no_ktp');
		$aa = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kehilangan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"kehilangan" => $this->input->post("kehilangan"),
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_kehilangan($data_nik);
			$r['data'] = $data_nik;
			$r['bb'] = $aa;
			$this->load->view('panel/cetak/cetak_kehilangan', $r);
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//KARTU KELUARGA  -----------------------------------------------------------------
	function panel_kk() {
		$this->load->view('panel/panel_kk');
	}

	function proses_panel_kk() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kk($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d')
					);
			}
			$this->m_index->tambah_kartu_keluarga($data_nik);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

}
?>