<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kepemilikan_tanah extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KEPEMILIKAN TANAH KIOS -------------------------------------------------------------------------------------------
	function panel_kepemilikan_tanah() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_kepemilikan_tanah.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_kepemilikan_tanah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kepemilikan_tanah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					"tgl_pengantar" => date('Y-m-d'),
					);
			}
			$kepemilikan_tanahId = $this->m_index->tambah_kepemilikan_tanah($data_nik);
			$data =  array ("surat" => "Surat Keterangan Tidak Sengketa",
							"link" => "c_kepemilikan_tanah/kepemilikan_tanah",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $kepemilikan_tanahId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT kepemilikan PERNYATAAN KEPEMILIKAN TANAH ADMIN ------------------------------------------
	public function kepemilikan_tanah() {
		$this->m_index->cekLogin();
		$data['kepemilikan_tanah']=$this->m_index->get_kepemilikan_tanah();
		foreach($this->m_index->statistik_kepemilikan_tanah()->result_array() as $row)
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
		$data['isi'] = "kepemilikan_tanah/kepemilikan_tanah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_kepemilikan_tanah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "kepemilikan_tanah/tambah_kepemilikan_tanah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kepemilikan_tanah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"no_leter_c" => $this->input->post("no_leter_c"),
						"no_persil" => $this->input->post("no_persil"),
						"kelas" => $this->input->post("kelas"),
						"luas" => $this->input->post("luas"),
						"blok" => $this->input->post("blok"),
						"desa" => $this->input->post("desa"),
						"tgl_pengantar" => date("Y-m-d",strtotime($this->input->post("tgl_pengantar"))),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_kepemilikan_tanah($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_kepemilikan_tanah/kepemilikan_tanah'));
	}

	public function edit_kepemilikan_tanah($id){
		$this->m_index->cekLogin();
		$data['edit_kepemilikan_tanah'] = $this->m_index->getEdit_kepemilikan_tanah($id);
		$data['isi'] = "kepemilikan_tanah/edit_kepemilikan_tanah.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kepemilikan_tanah(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"no_leter_c" => $this->input->post("no_leter_c"),
						"no_persil" => $this->input->post("no_persil"),
						"kelas" => $this->input->post("kelas"),
						"luas" => $this->input->post("luas"),
						"batas_utara" => $this->input->post("batas_utara"),
						"batas_timur" => $this->input->post("batas_timur"),
						"batas_selatan" => $this->input->post("batas_selatan"),
						"batas_barat" => $this->input->post("batas_barat"),
						"pemilik" => $this->input->post("pemilik"),
						);
		$this->m_index->edit_kepemilikan_tanah($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_kepemilikan_tanah/kepemilikan_tanah'));
	}

	public function proses_hapus_kepemilikan_tanah($id) {
		$this->m_index->hapus_kepemilikan_tanah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kepemilikan_tanah/kepemilikan_tanah'));
	}

//CETAK PDF SURAT KEPEMILIKAN TANAH
	public function kepemilikan_tanah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kepemilikan_tanah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kepemilikan_tanah/cetak_data_kepemilikan_tanah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kepemilikan_tanah.pdf', 'P');
	}

//CETAK PDF SURAT KEPEMILIKAN TANAH
	public function kepemilikan_tanah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kepemilikan_tanah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('kepemilikan_tanah/cetak_data_kepemilikan_tanah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kepemilikan_tanah.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_kepemilikan_tanah() {
		$this->m_index->cekLogin();
		$data['isi'] = "kepemilikan_tanah/rekap_kepemilikan_tanah.php";
		$this->load->view('template/utama', $data);
	}

	public function kepemilikan_tanah_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['kepemilikan_tanah'] = $this->m_index->rekap_kepemilikan_tanah($T1,$T2);
		$this->load->view('kepemilikan_tanah/rekap_data_kepemilikan_tanah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kepemilikan_tanah.pdf', 'P');
	}

}
?>