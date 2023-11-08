<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_domisili_usaha extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN DOMISILI USAHA KIOS -------------------------------------------------------------------------------------------
	function panel_domusaha() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_domusaha.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_domusaha() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domusaha($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$domusahaId = $this->m_index->tambah_domisili_usaha($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Usaha",
							"link" => "c_domisili_usaha/domisili_usaha",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses'));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_domisili_usaha($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_domusaha/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_domusaha($id) {
		$data['data'] = $this->m_index->cetak_data_domisili_usaha($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_domusaha/cetak_domusaha',$data);
	}

	function cetak_data_domusaha1($id) {
		$data['data'] = $this->m_index->cetak_data_domisili_usaha1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_domusaha/cetak_domusaha1',$data);
	}



//SURAT KETERANGAN DOMISILI USAHA ADMIN ---------------------------------------------------------
	public function domisili_usaha() {
	$this->m_index->cekLogin();
	$data['domisili_usaha']=$this->m_index->get_domisili_usaha();
	foreach($this->m_index->statistik_domisili_usaha()->result_array() as $row)
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
	$data['isi'] = "domisili_usaha/domisili_usaha.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_domisili_usaha(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "domisili_usaha/tambah_domisili_usaha.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_domisili_usaha(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"jenis_usaha" => $this->input->post("jenis_usaha"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_domisili_usaha($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_domisili_usaha/domisili_usaha'));
	}

	public function edit_domisili_usaha($id){
		$this->m_index->cekLogin();
		$data['edit_domisili_usaha'] = $this->m_index->getEdit_domisili_usaha($id);
		$data['isi'] = "domisili_usaha/edit_domisili_usaha.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_domisili_usaha(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"jenis_usaha" => $this->input->post("jenis_usaha"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"nama_perusahaan" => $this->input->post("nama_perusahaan"),
						"nama_pengusaha" => $this->input->post("nama_pengusaha"),
						"no_npwp" => $this->input->post("no_npwp"),
						"status_bangunan" => $this->input->post("status_bangunan"),
						"jabatan" => $this->input->post("jabatan"), 
						"alamat_perusahaan" => $this->input->post("alamat_perusahaan"),
						"penanggung_jawab" => $this->input->post("penanggung_jawab"),
						"no_telp" => $this->input->post("no_telp"),

						);
		$this->m_index->edit_domisili_usaha($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_domisili_usaha/domisili_usaha'));
	}

	public function proses_hapus_domisili_usaha($id) {
		$this->m_index->hapus_domisili_usaha($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_domisili_usaha/domisili_usaha'));
	}


//EXPORT TO WORD
	public function domisili_usaha_word($id) {
		$data['tampil'] = $this->m_index->cetak_domisili_usaha($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "domisili_usaha/domisili_usaha_word.php";
		$this->load->view('template/word',$data);
	}

	public function domisili_usaha_word1($id) {
		$data['tampil'] = $this->m_index->cetak_domisili_usaha1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "domisili_usaha/domisili_usaha_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN DOMISILI USAHA
	public function domisili_usaha_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domisili_usaha($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('domisili_usaha/cetak_data_domisili_usaha', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domisili_usaha.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN DOMISILI USAHA
	public function domisili_usaha_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domisili_usaha1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('domisili_usaha/cetak_data_domisili_usaha1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domisili_usaha.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_domisili_usaha() {
		$this->m_index->cekLogin();
		$data['isi'] = "domisili_usaha/rekap_domisili_usaha.php";
		$this->load->view('template/utama', $data);
	}

	public function domisili_usaha_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['domisili_usaha'] = $this->m_index->rekap_domisili_usaha($T1,$T2);
		$this->load->view('domisili_usaha/rekap_data_domisili_usaha', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domisili_usaha.pdf', 'P');
	}


}
?>