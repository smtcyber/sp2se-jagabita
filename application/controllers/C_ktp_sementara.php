<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_ktp_sementara extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN ktp_sementara KIOS -------------------------------------------------------------------------------------------
	function panel_ktp_sementara() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_ktp_sementara.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_ktp_sementara() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_ktp_sementara($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$ktp_sementaraId = $this->m_index->tambah_ktp_sementara($data_nik);
			$data =  array ("surat" => "Surat Keterangan KTP Sementara",
							"link" => "c_ktp_sementara/ktp_sementara",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_ktp_sementara/cetak_data/'. $ktp_sementaraId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_ktp_sementara($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_ktp_sementara/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_ktp_sementara($id) {
		$data['data'] = $this->m_index->cetak_data_ktp_sementara($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_ktp_sementara/cetak_ktp_sementara',$data);
	}

	function cetak_data_ktp_sementara1($id) {
		$data['data'] = $this->m_index->cetak_data_ktp_sementara1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_ktp_sementara/cetak_ktp_sementara1',$data);
	}


//SURAT KETERANGAN PERNYATAAN KTP SEMENTARA ADMIN -------------------------------------------------------
	public function ktp_sementara() {
		$this->m_index->cekLogin();
		$data['ktp_sementara']=$this->m_index->get_ktp_sementara();
		foreach($this->m_index->statistik_ktp_sementara()->result_array() as $row)
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
		$data['isi'] = "ktp_sementara/ktp_sementara.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_ktp_sementara(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "ktp_sementara/tambah_ktp_sementara.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_ktp_sementara(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
		"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_ktp_sementara($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_ktp_sementara/ktp_sementara'));
	}

	public function edit_ktp_sementara($id){
		$this->m_index->cekLogin();
		$data['edit_ktp_sementara'] = $this->m_index->getEdit_ktp_sementara($id);
		$data['isi'] = "ktp_sementara/edit_ktp_sementara.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_ktp_sementara(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_ktp_sementara($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_ktp_sementara/ktp_sementara'));
	}

	public function proses_hapus_ktp_sementara($id) {
		$this->m_index->hapus_ktp_sementara($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_ktp_sementara/ktp_sementara'));
	}


//EXPORT TO WORD
	public function ktp_sementara_word($id) {
		$data['tampil'] = $this->m_index->cetak_ktp_sementara($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "ktp_sementara/ktp_sementara_word.php";
		$this->load->view('template/word',$data);
	}

	public function ktp_sementara_word1($id) {
		$data['tampil'] = $this->m_index->cetak_ktp_sementara1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "ktp_sementara/ktp_sementara_word1.php";
		$this->load->view('template/word',$data);
	}

	
//CETAK PDF SURAT KETERANGAN KTP SEMENTARA
	public function ktp_sementara_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_ktp_sementara($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ktp_sementara/cetak_data_ktp_sementara', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ktp_sementara.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN KTP SEMENTARA
	public function ktp_sementara_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_ktp_sementara1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('ktp_sementara/cetak_data_ktp_sementara1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ktp_sementara.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_ktp_sementara() {
		$this->m_index->cekLogin();
		$data['isi'] = "ktp_sementara/rekap_ktp_sementara.php";
		$this->load->view('template/utama', $data);
	}

	public function ktp_sementara_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['ktp_sementara'] = $this->m_index->rekap_ktp_sementara($T1,$T2);
		$this->load->view('ktp_sementara/rekap_data_ktp_sementara', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ktp_sementara.pdf', 'P');
	}

}
?>