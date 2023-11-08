<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_domsekolah extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT DOMISILI SEKOLAH KIOS -------------------------------------------------------------------------------------------
	function panel_domsekolah() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_domsekolah.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_domsekolah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domsekolah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tahun_sekolah" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$domsekolahId = $this->m_index->tambah_domsekolah($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Sekolah",
							"link" => "c_domsekolah/domsekolah",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $domsekolahId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT DOMISILI SEKOLAH ADMIN -------------------------------------------------------------
	public function domsekolah() {
		$this->m_index->cekLogin();
		$data['domsekolah']=$this->m_index->get_domsekolah();
		foreach($this->m_index->statistik_domsekolah()->result_array() as $row)
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
		$data['isi'] = "domsekolah/domsekolah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_domsekolah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "domsekolah/tambah_domsekolah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_domsekolah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_sekolah" => $this->input->post("nama_sekolah"),
						"alamat_sekolah" => $this->input->post("alamat_sekolah"),
						"rt_sekolah" => $this->input->post("rt_sekolah"),
						"rw_sekolah" => $this->input->post("rw_sekolah"),
						"desa_sekolah" => $this->input->post("desa_sekolah"),
						"kecamatan_sekolah" => $this->input->post("kecamatan_sekolah"),
						"jenis_sekolah" => $this->input->post("jenis_sekolah"),
						"tahun_sekolah" => date("Y-m-d",strtotime($this->input->post("tahun_sekolah"))),
						"npsn" => $this->input->post("npsn"),
						"nss" => $this->input->post("nss"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_domsekolah($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_domsekolah/domsekolah'));
	}

	public function edit_domsekolah($id){
		$this->m_index->cekLogin();
		$data['edit_domsekolah'] = $this->m_index->getEdit_domsekolah($id);
		$data['isi'] = "domsekolah/edit_domsekolah.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_domsekolah(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_sekolah" => $this->input->post("nama_sekolah"),
						"alamat_sekolah" => $this->input->post("alamat_sekolah"),
						"rt_sekolah" => $this->input->post("rt_sekolah"),
						"rw_sekolah" => $this->input->post("rw_sekolah"),
						"desa_sekolah" => $this->input->post("desa_sekolah"),
						"kecamatan_sekolah" => $this->input->post("kecamatan_sekolah"),
						"jenis_sekolah" => $this->input->post("jenis_sekolah"),
						"tahun_sekolah" => date("Y-m-d",strtotime($this->input->post("tahun_sekolah"))),
						"npsn" => $this->input->post("npsn"),
						"nss" => $this->input->post("nss"),
						);
		$this->m_index->edit_domsekolah($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_domsekolah/domsekolah'));
	}

	public function proses_hapus_domsekolah($id) {
		$this->m_index->hapus_domsekolah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_domsekolah/domsekolah'));
	}


//EXPORT TO WORD
	public function domsekolah_word($id) {
		$data['tampil'] = $this->m_index->cetak_domsekolah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "domsekolah/domsekolah_word.php";
		$this->load->view('template/word',$data);
	}

	public function domsekolah_word1($id) {
		$data['tampil'] = $this->m_index->cetak_domsekolah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "domsekolah/domsekolah_word1.php";
		$this->load->view('template/word',$data);
	}

//CETAK PDF SURAT DOMISILI SEKOLAH
	public function domsekolah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domsekolah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('domsekolah/cetak_data_domsekolah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domsekolah.pdf', 'P');
	}

//CETAK PDF SURAT DOMISILI SEKOLAH
	public function domsekolah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domsekolah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('domsekolah/cetak_data_domsekolah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domsekolah.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_domsekolah() {
		$this->m_index->cekLogin();
		$data['isi'] = "domsekolah/rekap_domsekolah.php";
		$this->load->view('template/utama', $data);
	}

	public function domsekolah_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['domsekolah'] = $this->m_index->rekap_domsekolah($T1,$T2);
		$this->load->view('domsekolah/rekap_data_domsekolah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domsekolah.pdf', 'P');
	}

}
?>