<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_skck extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT SKCK KIOS -------------------------------------------------------------------------------------------
	function panel_skck() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_skck.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_skck() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_skck($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$skckId = $this->m_index->tambah_skck($data_nik);
			$data =  array ("surat" => "Surat SKCK",
							"link" => "c_skck/skck",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_skck/cetak_data/'. $skckId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_skck($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_skck/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_skck($id) {
		$data['data'] = $this->m_index->cetak_data_skck($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_skck/cetak_skck',$data);
	}

	function cetak_data_skck1($id) {
		$data['data'] = $this->m_index->cetak_data_skck1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_skck/cetak_skck1',$data);
	}




//SURAT SKCK ADMIN ---------------------------------------------------------------------------------------------
	public function skck() {
	$this->m_index->cekLogin();
	$data['skck']=$this->m_index->get_skck();
	foreach($this->m_index->statistik_skck()->result_array() as $row)
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
	$data['isi'] = "skck/skck.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_skck(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "skck/tambah_skck.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_skck(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_skck($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_skck/skck'));
	}

	public function edit_skck($id){
		$this->m_index->cekLogin();
		$data['edit_skck'] = $this->m_index->getEdit_skck($id);
		$data['isi'] = "skck/edit_skck.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_skck(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_skck($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_skck/skck'));
	}

	public function proses_hapus_skck($id) {
		$this->m_index->hapus_skck($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_skck/skck'));
	}


//EXPORT TO WORD
	public function skck_word($id) {
		$data['tampil'] = $this->m_index->cetak_skck($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "skck/skck_word.php";
		$this->load->view('template/word',$data);
	}

	public function skck_word1($id) {
		$data['tampil'] = $this->m_index->cetak_skck1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "skck/skck_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT skck
	public function skck_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_skck($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('skck/cetak_data_skck', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('skck.pdf', 'P');
	}

//CETAK PDF SURAT skck
	public function skck_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_skck1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('skck/cetak_data_skck1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('skck.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_skck() {
		$this->m_index->cekLogin();
		$data['isi'] = "skck/rekap_skck.php";
		$this->load->view('template/utama', $data);
	}

	public function skck_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['skck'] = $this->m_index->rekap_skck($T1,$T2);
		$this->load->view('skck/rekap_data_skck', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('skck.pdf', 'P');
	}

}
?>