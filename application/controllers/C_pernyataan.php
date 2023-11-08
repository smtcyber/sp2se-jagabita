<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_pernyataan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT PERNYATAAN KIOS ----------------------------------------------------------
	function panel_pernyataan() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_pernyataan.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_pernyataan() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_pernyataan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$pernyataanId = $this->m_index->tambah_pernyataan($data_nik);
			$data =  array ("surat" => "Surat Pernyataan Umum",
							"link" => "c_pernyataan/pernyataan",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_pernyataan/cetak_data/'. $pernyataanId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_pernyataan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_pernyataan/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_pernyataan($id) {
		$data['data'] = $this->m_index->cetak_data_pernyataan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_pernyataan/cetak_pernyataan',$data);
	}

	function cetak_data_pernyataan1($id) {
		$data['data'] = $this->m_index->cetak_data_pernyataan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_pernyataan/cetak_pernyataan1',$data);
	}



//SURAT PERNYATAAN ADMIN -------------------------------------------------------------------------
	public function pernyataan() {
		$this->m_index->cekLogin();
		$data['pernyataan']=$this->m_index->get_pernyataan();
		foreach($this->m_index->statistik_pernyataan()->result_array() as $row)
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
		$data['isi'] = "pernyataan/pernyataan.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_pernyataan(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "pernyataan/tambah_pernyataan.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_pernyataan(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_pernyataan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_pernyataan/pernyataan'));
	}

	public function edit_pernyataan($id){
		$this->m_index->cekLogin();
		$data['edit_pernyataan'] = $this->m_index->getEdit_pernyataan($id);
		$data['isi'] = "pernyataan/edit_pernyataan.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_pernyataan(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_pernyataan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_pernyataan/pernyataan'));
	}

	public function proses_hapus_pernyataan($id) {
		$this->m_index->hapus_pernyataan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_pernyataan/pernyataan'));
	}


//EXPORT TO WORD
	public function pernyataan_word($id) {
		$data['tampil'] = $this->m_index->cetak_pernyataan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "pernyataan/pernyataan_word.php";
		$this->load->view('template/word',$data);
	}

	public function pernyataan_word1($id) {
		$data['tampil'] = $this->m_index->cetak_pernyataan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "pernyataan/pernyataan_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT PERNYATAAN
	public function pernyataan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pernyataan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('pernyataan/cetak_data_pernyataan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan.pdf', 'P');
	}

//CETAK PDF SURAT PERNYATAAN
	public function pernyataan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pernyataan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('pernyataan/cetak_data_pernyataan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_pernyataan() {
		$this->m_index->cekLogin();
		$data['isi'] = "pernyataan/rekap_pernyataan.php";
		$this->load->view('template/utama', $data);
	}

	public function pernyataan_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['pernyataan'] = $this->m_index->rekap_pernyataan($T1,$T2);
		$this->load->view('pernyataan/rekap_data_pernyataan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan.pdf', 'P');
	}

}
?>