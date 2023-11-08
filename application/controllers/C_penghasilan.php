<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_penghasilan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN PENGHASILAN KIOS ----------------------------------------------
	function panel_penghasilan() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_penghasilan.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_penghasilan() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_penghasilan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"penghasilan" => $this->input->post("penghasilan"),
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$penghasilanId = $this->m_index->tambah_penghasilan($data_nik);
			$data =  array ("surat" => "Surat Keterangan Penghasilan",
							"link" => "c_penghasilan/penghasilan",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_penghasilan/cetak_data/'. $penghasilanId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_penghasilan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_penghasilan/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_penghasilan($id) {
		$data['data'] = $this->m_index->cetak_data_penghasilan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_penghasilan/cetak_penghasilan',$data);
	}

	function cetak_data_penghasilan1($id) {
		$data['data'] = $this->m_index->cetak_data_penghasilan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_penghasilan/cetak_penghasilan1',$data);
	}


//SURAT KETERANGAN PENGHASILAN ANDROID ----------------------------------------------
	function panel_penghasilan_android() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "android/panel_penghasilan.php";
	    $this->load->view('android/panel_utama',$data);
	}

	function proses_panel_penghasilan_android() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_penghasilan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"penghasilan" => $this->input->post("penghasilan"),
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$penghasilanId = $this->m_index->tambah_penghasilan($data_nik);
			$data =  array ("surat" => "Surat Keterangan Penghasilan",
							"link" => "c_penghasilan/penghasilan",
							"Keterangan" => "Input Nik dari Perangkat Smartphone",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses_android/'. $penghasilanId));
		} else {
			redirect(site_url('c_panel/notif_gagal_android'));
		}
		
	}


//SURAT KETERANGAN KAHILANGAN KEpenghasilanAN ADMIN ---------------------------------------
	public function penghasilan() {
	$this->m_index->cekLogin();
	$data['penghasilan']=$this->m_index->get_penghasilan();
	foreach($this->m_index->statistik_penghasilan()->result_array() as $row)
   		{
    		$data['grafik'][]=(float)$row['Januari'];
    		$data['grafik'][]=(float)$row['Februari'];
    		$data['grafik'][]=(float)$row['Maret'];
    		$data['grafik'][]=(float)$row['April'];
    		$data['grafik'][]=(float)$row['Mei'];
    		$data['grafik'][]=(float)$row['Juni'];
    		$data['grafik'][]=(float)$row['Juli'];
    		$data['grafik'][]=(float)$row['Agustus'];
    		$data['grafik'][]=(float)$row['September'];
    		$data['grafik'][]=(float)$row['Oktober'];
    		$data['grafik'][]=(float)$row['November'];
    		$data['grafik'][]=(float)$row['Desember'];
   		}
	$data['isi'] = "penghasilan/penghasilan.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_penghasilan(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "penghasilan/tambah_penghasilan.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_penghasilan(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"penghasilan" => $this->input->post("penghasilan"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_penghasilan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_penghasilan/penghasilan'));
	}

	public function edit_penghasilan($id){
		$this->m_index->cekLogin();
		$data['edit_penghasilan'] = $this->m_index->getEdit_penghasilan($id);
		$data['isi'] = "penghasilan/edit_penghasilan.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_penghasilan(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),	
						"penghasilan" => $this->input->post("penghasilan"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_penghasilan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_penghasilan/penghasilan'));
	}

	public function proses_hapus_penghasilan($id) {
		$this->m_index->hapus_penghasilan($id);
		$this->m_index->hapus_notif($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_penghasilan/penghasilan'));
	}


//EXPORT TO WORD
	public function penghasilan_word($id) {
		$data['tampil'] = $this->m_index->cetak_penghasilan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "penghasilan/penghasilan_word.php";
		$this->load->view('template/word',$data);
	}

	public function penghasilan_word1($id) {
		$data['tampil'] = $this->m_index->cetak_penghasilan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "penghasilan/penghasilan_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN  USAHA
	public function penghasilan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_penghasilan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('penghasilan/cetak_data_penghasilan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('penghasilan.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN  USAHA
	public function penghasilan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_penghasilan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('penghasilan/cetak_data_penghasilan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('penghasilan.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_penghasilan() {
		$this->m_index->cekLogin();
		$data['isi'] = "penghasilan/rekap_penghasilan.php";
		$this->load->view('template/utama', $data);
	}

	public function penghasilan_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['penghasilan'] = $this->m_index->rekap_penghasilan($T1,$T2);
		$this->load->view('penghasilan/rekap_data_penghasilan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('penghasilan.pdf', 'P');
	}

}
?>