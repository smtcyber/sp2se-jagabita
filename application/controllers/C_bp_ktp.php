<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_bp_ktp extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT BELUM PUNYA KTP KIOS -------------------------------------------------------------------------------------------
	function panel_bp_ktp() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_bp_ktp.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_bp_ktp() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_bp_ktp($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"untuk_persyaratan" => $this->input->post("untuk_persyaratan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$bp_ktpId = $this->m_index->tambah_bp_ktp($data_nik);
			$data =  array ("surat" => "Surat Belum Punya KTP",
							"link" => "c_bp_ktp/bp_ktp",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_bp_ktp/cetak_data/'. $bp_ktpId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_bp_ktp($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_bp_ktp/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_bp_ktp($id) {
		$data['data'] = $this->m_index->cetak_data_bp_ktp($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_bp_ktp/cetak_bp_ktp',$data);
	}

	function cetak_data_bp_ktp1($id) {
		$data['data'] = $this->m_index->cetak_data_bp_ktp1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_bp_ktp/cetak_bp_ktp1',$data);
	}


//BAGIAN DATA PENDUDUK ADMIN ------------------------------------------------------------------------
		public function bp_ktp() {
		$this->m_index->cekLogin();
		$data['bp_ktp']=$this->m_index->get_bp_ktp();
		foreach($this->m_index->statistik_bp_ktp()->result_array() as $row)
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
		$data['isi'] = "bp_ktp/bp_ktp.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_bp_ktp(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "bp_ktp/tambah_bp_ktp.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_bp_ktp(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"untuk_persyaratan" => $this->input->post("untuk_persyaratan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_bp_ktp($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_bp_ktp/bp_ktp'));
	}

	public function edit_bp_ktp($id){
		$this->m_index->cekLogin();
		$data['edit_bp_ktp'] = $this->m_index->getEdit_bp_ktp($id);
		$data['isi'] = "bp_ktp/edit_bp_ktp.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_bp_ktp(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"untuk_persyaratan" => $this->input->post("untuk_persyaratan"),
						);
		$this->m_index->edit_bp_ktp($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_bp_ktp/bp_ktp'));
	}

	public function proses_hapus_bp_ktp($id) {
		$this->m_index->hapus_bp_ktp($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_bp_ktp/bp_ktp'));
	}


//EXPORT TO WORD
	public function bp_ktp_word($id) {
		$data['tampil'] = $this->m_index->cetak_bp_ktp($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "bp_ktp/bp_ktp_word.php";
		$this->load->view('template/word',$data);
	}

	public function bp_ktp_word1($id) {
		$data['tampil'] = $this->m_index->cetak_bp_ktp1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "bp_ktp/bp_ktp_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF BP KTP
	public function bp_ktp_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_bp_ktp($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('bp_ktp/cetak_data_bp_ktp', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_punya_ktp.pdf', 'P');
	}

//CETAK PDF BP KTP
	public function bp_ktp_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_bp_ktp1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('bp_ktp/cetak_data_bp_ktp1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_punya_ktp.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_bp_ktp() {
		$this->m_index->cekLogin();
		$data['isi'] = "bp_ktp/rekap_bp_ktp.php";
		$this->load->view('template/utama', $data);
	}

	public function bp_ktp_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['bp_ktp'] = $this->m_index->rekap_bp_ktp($T1,$T2);
		$this->load->view('bp_ktp/rekap_data_bp_ktp', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('bp_ktp.pdf', 'P');
	}

}
?>