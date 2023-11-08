<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_belum_memiliki_rumah extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN BELUM MEMILIKI RUMAH KIOS ---------------------------------------------------------
	function panel_belum_memiliki_rumah() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_belum_memiliki_rumah.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_belum_memiliki_rumah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_bp_rumah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$belum_memiliki_rumahId = $this->m_index->tambah_belum_memiliki_rumah($data_nik);
			$data =  array ("surat" => "Surat Keterangan Belum Memiliki Rumah",
							"link" => "c_belum_memiliki_rumah/belum_memiliki_rumah",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_belum_memiliki_rumah/cetak_data/'. $belum_memiliki_rumahId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_belum_memiliki_rumah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_belum_memiliki_rumah/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_belum_memiliki_rumah($id) {
		$data['data'] = $this->m_index->cetak_data_belum_memiliki_rumah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_belum_memiliki_rumah/cetak_belum_memiliki_rumah',$data);
	}

	function cetak_data_belum_memiliki_rumah1($id) {
		$data['data'] = $this->m_index->cetak_data_belum_memiliki_rumah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_belum_memiliki_rumah/cetak_belum_memiliki_rumah1',$data);
	}



//SURAT KETERANGAN BELUM MEMILIKI RUMAH ADMIN -----------------------------------------------------------
	public function belum_memiliki_rumah() {
		$this->m_index->cekLogin();
		$data['belum_memiliki_rumah']=$this->m_index->get_belum_memiliki_rumah();
		foreach($this->m_index->statistik_belum_memiliki_rumah()->result_array() as $row)
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
		$data['isi'] = "belum_memiliki_rumah/belum_memiliki_rumah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_belum_memiliki_rumah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "belum_memiliki_rumah/tambah_belum_memiliki_rumah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_belum_memiliki_rumah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keterangan" => $this->input->post("keterangan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_belum_memiliki_rumah($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_belum_memiliki_rumah/belum_memiliki_rumah'));
	}

	public function edit_belum_memiliki_rumah($id){
		$this->m_index->cekLogin();
		$data['edit_belum_memiliki_rumah'] = $this->m_index->getEdit_belum_memiliki_rumah($id);
		$data['isi'] = "belum_memiliki_rumah/edit_belum_memiliki_rumah.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_belum_memiliki_rumah(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keterangan" => $this->input->post("keterangan"),
						);
		$this->m_index->edit_belum_memiliki_rumah($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_belum_memiliki_rumah/belum_memiliki_rumah'));
	}

	public function proses_hapus_belum_memiliki_rumah($id) {
		$this->m_index->hapus_belum_memiliki_rumah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_belum_memiliki_rumah/belum_memiliki_rumah'));
	}


//EXPORT TO WORD
	public function belum_memiliki_rumah_word($id) {
		$data['tampil'] = $this->m_index->cetak_belum_memiliki_rumah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "belum_memiliki_rumah/belum_memiliki_rumah_word.php";
		$this->load->view('template/word',$data);
	}

	public function belum_memiliki_rumah_word1($id) {
		$data['tampil'] = $this->m_index->cetak_belum_memiliki_rumah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "belum_memiliki_rumah/belum_memiliki_rumah_word1.php";
		$this->load->view('template/word',$data);
	}

	

//CETAK PDF SURAT KETERANGAN BELUM MEMILIKI RUMAH
	public function belum_memiliki_rumah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_belum_memiliki_rumah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('belum_memiliki_rumah/cetak_data_belum_memiliki_rumah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_memiliki_rumah.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN BELUM MEMILIKI RUMAH
	public function belum_memiliki_rumah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_belum_memiliki_rumah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('belum_memiliki_rumah/cetak_data_belum_memiliki_rumah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_memiliki_rumah.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_belum_memiliki_rumah() {
		$this->m_index->cekLogin();
		$data['isi'] = "belum_memiliki_rumah/rekap_belum_memiliki_rumah.php";
		$this->load->view('template/utama', $data);
	}

	public function belum_memiliki_rumah_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['belum_memiliki_rumah'] = $this->m_index->rekap_belum_memiliki_rumah($T1,$T2);
		$this->load->view('belum_memiliki_rumah/rekap_data_belum_memiliki_rumah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_memiliki_rumah.pdf', 'P');
	}


}
?>