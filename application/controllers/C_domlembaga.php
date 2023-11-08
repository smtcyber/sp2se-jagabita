<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_domlembaga extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT DOMISILI LEMBAGA KIOS --------------------------------------------------------------
	function panel_domlembaga() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_domlembaga.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_domlembaga() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domlembaga($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tahun_lembaga" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$domlembagaId = $this->m_index->tambah_domlembaga($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Lembaga",
							"link" => "c_domlembaga/domlembaga",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $domlembagaId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT DOMISILI LEMBAGA ADMIN -----------------------------------------------------------------
	public function domlembaga() {
		$this->m_index->cekLogin();
		$data['domlembaga']=$this->m_index->get_domlembaga();
		foreach($this->m_index->statistik_domlembaga()->result_array() as $row)
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
		$data['isi'] = "domlembaga/domlembaga.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_domlembaga(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "domlembaga/tambah_domlembaga.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_domlembaga(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_lembaga" => $this->input->post("nama_lembaga"),
						"alamat_lembaga" => $this->input->post("alamat_lembaga"),
						"rt_lembaga" => $this->input->post("rt_lembaga"),
						"rw_lembaga" => $this->input->post("rw_lembaga"),
						"desa_lembaga" => $this->input->post("desa_lembaga"),
						"kecamatan_lembaga" => $this->input->post("kecamatan_lembaga"),
						"jenis_lembaga" => $this->input->post("jenis_lembaga"),
						"tahun_lembaga" => date("Y-m-d",strtotime($this->input->post("tahun_lembaga"))),
						"status_lembaga" => $this->input->post("status_lembaga"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_domlembaga($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_domlembaga/domlembaga'));
	}

	public function edit_domlembaga($id){
		$this->m_index->cekLogin();
		$data['edit_domlembaga'] = $this->m_index->getEdit_domlembaga($id);
		$data['isi'] = "domlembaga/edit_domlembaga.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_domlembaga(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_lembaga" => $this->input->post("nama_lembaga"),
						"alamat_lembaga" => $this->input->post("alamat_lembaga"),
						"rt_lembaga" => $this->input->post("rt_lembaga"),
						"rw_lembaga" => $this->input->post("rw_lembaga"),
						"desa_lembaga" => $this->input->post("desa_lembaga"),
						"kecamatan_lembaga" => $this->input->post("kecamatan_lembaga"),
						"jenis_lembaga" => $this->input->post("jenis_lembaga"),
						"tahun_lembaga" => date("Y-m-d",strtotime($this->input->post("tahun_lembaga"))),
						"status_lembaga" => $this->input->post("status_lembaga"),
						);
		$this->m_index->edit_domlembaga($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_domlembaga/domlembaga'));
	}

	public function proses_hapus_domlembaga($id) {
		$this->m_index->hapus_domlembaga($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_domlembaga/domlembaga'));
	}


//EXPORT TO WORD
	public function domlembaga_word($id) {
		$data['tampil'] = $this->m_index->cetak_domlembaga($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "domlembaga/domlembaga_word.php";
		$this->load->view('template/word',$data);
	}

	public function domlembaga_word1($id) {
		$data['tampil'] = $this->m_index->cetak_domlembaga1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "domlembaga/domlembaga_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT DOMISILI LEMBAGA
	public function domlembaga_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domlembaga($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('domlembaga/cetak_data_domlembaga', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domlembaga.pdf', 'P');
	}

//CETAK PDF SURAT DOMISILI LEMBAGA
	public function domlembaga_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domlembaga1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('domlembaga/cetak_data_domlembaga1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domlembaga.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_domlembaga() {
		$this->m_index->cekLogin();
		$data['isi'] = "domlembaga/rekap_domlembaga.php";
		$this->load->view('template/utama', $data);
	}

	public function domlembaga_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['domlembaga'] = $this->m_index->rekap_domlembaga($T1,$T2);
		$this->load->view('domlembaga/rekap_data_domlembaga', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domlembaga.pdf', 'P');
	}

}
?>