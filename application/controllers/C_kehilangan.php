<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kehilangan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN KEHILANGAN KIOS -------------------------------------------------------------------------------------------
	function panel_kehilangan() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_kehilangan.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_kehilangan() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kehilangan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"kehilangan" => $this->input->post("kehilangan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$kehilanganId = $this->m_index->tambah_kehilangan($data_nik);
			$data =  array ("surat" => "Surat Keterangan Kehilangan",
							"link" => "c_kehilangan/kehilangan",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_kehilangan/cetak_data/'. $kehilanganId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_kehilangan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_kehilangan/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_kehilangan($id) {
		$data['data'] = $this->m_index->cetak_data_kehilangan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_kehilangan/cetak_kehilangan',$data);
	}

	function cetak_data_kehilangan1($id) {
		$data['data'] = $this->m_index->cetak_data_kehilangan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_kehilangan/cetak_kehilangan1',$data);
	}



//SURAT KETERANGAN KEHILANGAN ADMIN -------------------------------------------------------------------------
	public function kehilangan() {
	$this->m_index->cekLogin();
	$data['kehilangan']=$this->m_index->get_kehilangan();
	foreach($this->m_index->statistik_kehilangan()->result_array() as $row)
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
	$data['isi'] = "kehilangan/kehilangan.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_kehilangan(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "kehilangan/tambah_kehilangan.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kehilangan(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"kehilangan" => $this->input->post("kehilangan"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_kehilangan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_kehilangan/kehilangan'));
	}

	public function edit_kehilangan($id){
		$this->m_index->cekLogin();
		$data['edit_kehilangan'] = $this->m_index->getEdit_kehilangan($id);
		$data['isi'] = "kehilangan/edit_kehilangan.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kehilangan(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"kehilangan" => $this->input->post("kehilangan"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_kehilangan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_kehilangan/kehilangan'));
	}

	public function proses_hapus_kehilangan($id) {
		$this->m_index->hapus_kehilangan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kehilangan/kehilangan'));
	}


//EXPORT TO WORD
	public function kehilangan_word($id) {
		$data['tampil'] = $this->m_index->cetak_kehilangan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "kehilangan/kehilangan_word.php";
		$this->load->view('template/word',$data);
	}

	public function kehilangan_word1($id) {
		$data['tampil'] = $this->m_index->cetak_kehilangan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "kehilangan/kehilangan_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KEHILANGAN
	public function kehilangan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kehilangan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kehilangan/cetak_data_kehilangan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kehilangan.pdf', 'P');
	}

//CETAK PDF SURAT KEHILANGAN
	public function kehilangan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kehilangan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('kehilangan/cetak_data_kehilangan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kehilangan.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_kehilangan() {
		$this->m_index->cekLogin();
		$data['isi'] = "kehilangan/rekap_kehilangan.php";
		$this->load->view('template/utama', $data);
	}

	public function kehilangan_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['kehilangan'] = $this->m_index->rekap_kehilangan($T1,$T2);
		$this->load->view('kehilangan/rekap_data_kehilangan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kehilangan.pdf', 'P');
	}

}
?>