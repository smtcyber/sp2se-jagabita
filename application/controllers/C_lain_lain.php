<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_lain_lain extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN LAIN-LAIN KIOS ----------------------------------------------------------
	function panel_lain_lain() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_lain_lain.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_lain_lain() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_lain_lain($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$lain_lainId = $this->m_index->tambah_lain_lain($data_nik);
			$data =  array ("surat" => "Surat Keterangan Lain-lain",
							"link" => "c_lain_lain/lain_lain",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_lain_lain/cetak_data/'. $lain_lainId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_lain_lain($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_lain_lain/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_lain_lain($id) {
		$data['data'] = $this->m_index->cetak_data_lain_lain($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_lain_lain/cetak_lain_lain',$data);
	}

	function cetak_data_lain_lain1($id) {
		$data['data'] = $this->m_index->cetak_data_lain_lain1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_lain_lain/cetak_lain_lain1',$data);
	}


//SURAT KETERANGAN LAIN LAIN ADMIN --------------------------------------------------------------
	public function lain_lain() {
		$this->m_index->cekLogin();
		$data['lain_lain']=$this->m_index->get_lain_lain();
		foreach($this->m_index->statistik_lain_lain()->result_array() as $row)
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
		$data['isi'] = "lain_lain/lain_lain.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_lain_lain(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "lain_lain/tambah_lain_lain.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_lain_lain(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_lain_lain($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_lain_lain/lain_lain'));
	}

	public function edit_lain_lain($id){
		$this->m_index->cekLogin();
		$data['edit_lain_lain'] = $this->m_index->getEdit_lain_lain($id);
		$data['isi'] = "lain_lain/edit_lain_lain.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_lain_lain(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_lain_lain($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_lain_lain/lain_lain'));
	}

	public function proses_hapus_lain_lain($id) {
		$this->m_index->hapus_lain_lain($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_lain_lain/lain_lain'));
	}


//EXPORT TO WORD
	public function lain_lain_word($id) {
		$data['tampil'] = $this->m_index->cetak_lain_lain($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "lain_lain/lain_lain_word.php";
		$this->load->view('template/word',$data);
	}

	public function lain_lain_word1($id) {
		$data['tampil'] = $this->m_index->cetak_lain_lain1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "lain_lain/lain_lain_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN  USAHA
	public function lain_lain_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_lain_lain($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('lain_lain/cetak_data_lain_lain', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('lain_lain.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN  USAHA
	public function lain_lain_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_lain_lain1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('lain_lain/cetak_data_lain_lain1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('lain_lain.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_lain_lain() {
		$this->m_index->cekLogin();
		$data['isi'] = "lain_lain/rekap_lain_lain.php";
		$this->load->view('template/utama', $data);
	}

	public function lain_lain_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['lain_lain'] = $this->m_index->rekap_lain_lain($T1,$T2);
		$this->load->view('lain_lain/rekap_data_lain_lain', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('lain_lain.pdf', 'P');
	}

}
?>