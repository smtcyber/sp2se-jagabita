<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_bersama extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT PERNYATAAN BERSAMA KIOS --------------------------------------------------------------
	function panel_bersama() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_bersama.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_bersama() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_bersama($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$bersamaId = $this->m_index->tambah_bersama($data_nik);
			$data =  array ("surat" => "Surat Pernyataan Bersama",
							"link" => "c_bersama/bersama",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $perusahaanId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT PERNYATAAN BERSAMA ADMIN -----------------------------------------------------------------
	public function bersama() {
		$this->m_index->cekLogin();
		$data['bersama']=$this->m_index->get_bersama();
		foreach($this->m_index->statistik_bersama()->result_array() as $row)
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
		$data['isi'] = "bersama/bersama.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_bersama(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "bersama/tambah_bersama.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_bersama(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"nama_pihak_kedua" => $this->input->post("nama_pihak_kedua"),
						"umur_pihak_kedua" => $this->input->post("umur_pihak_kedua"),
						"alamat_pihak_kedua" => $this->input->post("alamat_pihak_kedua"),
						"rt_pihak_kedua" => $this->input->post("rt_pihak_kedua"),
						"rw_pihak_kedua" => $this->input->post("rw_pihak_kedua"),
						"desa_pihak_kedua" => $this->input->post("desa_pihak_kedua"),
						"kecamatan_pihak_kedua" => $this->input->post("kecamatan_pihak_kedua"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_bersama($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_bersama/bersama'));
	}

	public function edit_bersama($id){
		$this->m_index->cekLogin();
		$data['edit_bersama'] = $this->m_index->getEdit_bersama($id);
		$data['isi'] = "bersama/edit_bersama.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_bersama(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"nama_pihak_kedua" => $this->input->post("nama_pihak_kedua"),
						"umur_pihak_kedua" => $this->input->post("umur_pihak_kedua"),
						"alamat_pihak_kedua" => $this->input->post("alamat_pihak_kedua"),
						"rt_pihak_kedua" => $this->input->post("rt_pihak_kedua"),
						"rw_pihak_kedua" => $this->input->post("rw_pihak_kedua"),
						"desa_pihak_kedua" => $this->input->post("desa_pihak_kedua"),
						"kecamatan_pihak_kedua" => $this->input->post("kecamatan_pihak_kedua"),
						);
		$this->m_index->edit_bersama($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_bersama/bersama'));
	}

	public function proses_hapus_bersama($id) {
		$this->m_index->hapus_bersama($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_bersama/bersama'));
	}


//EXPORT TO WORD
	public function bersama_word($id) {
		$data['tampil'] = $this->m_index->cetak_bersama($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "bersama/bersama_word.php";
		$this->load->view('template/word',$data);
	}

	public function bersama_word1($id) {
		$data['tampil'] = $this->m_index->cetak_bersama($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "bersama/bersama_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT PERNYATAAN BERSAMA
	public function bersama_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_bersama($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('bersama/cetak_data_bersama', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('bersama.pdf', 'P');
	}

	public function bersama_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_bersama($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('bersama/cetak_data_bersama1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('bersama.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_bersama() {
		$this->m_index->cekLogin();
		$data['isi'] = "bersama/rekap_bersama.php";
		$this->load->view('template/utama', $data);
	}

	public function bersama_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['bersama'] = $this->m_index->rekap_bersama($T1,$T2);
		$this->load->view('bersama/rekap_data_bersama', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('bersama.pdf', 'P');
	}

}
?>