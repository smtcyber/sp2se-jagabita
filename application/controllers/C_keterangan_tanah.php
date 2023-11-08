<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_keterangan_tanah extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN KEPEMILIKAN TANAH KIOS ----------------------------------------------------------
	function panel_keterangan_tanah() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_keterangan_tanah.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_keterangan_tanah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_ket_tanah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"no_objek_pajak" => $this->input->post("no_objek_pajak"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$keterangan_tanahId = $this->m_index->tambah_keterangan_tanah($data_nik);
			$data =  array ("surat" => "Surat Keterangan Tanah",
							"link" => "c_keterangan_tanah/keterangan_tanah",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_keterangan_tanah/cetak_data/'. $keterangan_tanahId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_keterangan_tanah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_keterangan_tanah/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_keterangan_tanah($id) {
		$data['data'] = $this->m_index->cetak_data_keterangan_tanah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_keterangan_tanah/cetak_keterangan_tanah',$data);
	}

	function cetak_data_keterangan_tanah1($id) {
		$data['data'] = $this->m_index->cetak_data_keterangan_tanah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_keterangan_tanah/cetak_keterangan_tanah1',$data);
	}



//SURAT KETERANGAN PERNYATAAN KETERANGAN TANAH ADMIN ----------------------------------------------------------
	public function keterangan_tanah() {
		$this->m_index->cekLogin();
		$data['keterangan_tanah']=$this->m_index->get_keterangan_tanah();
		foreach($this->m_index->statistik_keterangan_tanah()->result_array() as $row)
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
		$data['isi'] = "keterangan_tanah/keterangan_tanah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_keterangan_tanah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "keterangan_tanah/tambah_keterangan_tanah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_keterangan_tanah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"no_objek_pajak" => $this->input->post("no_objek_pajak"),
						"luas_tanah" => $this->input->post("luas_tanah"),
						"luas_rumah" => $this->input->post("luas_rumah"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_keterangan_tanah($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_keterangan_tanah/keterangan_tanah'));
	}

	public function edit_keterangan_tanah($id){
		$this->m_index->cekLogin();
		$data['edit_keterangan_tanah'] = $this->m_index->getEdit_keterangan_tanah($id);
		$data['isi'] = "keterangan_tanah/edit_keterangan_tanah.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_keterangan_tanah(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"no_objek_pajak" => $this->input->post("no_objek_pajak"),
						"luas_tanah" => $this->input->post("luas_tanah"),
						"luas_rumah" => $this->input->post("luas_rumah"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_keterangan_tanah($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_keterangan_tanah/keterangan_tanah'));
	}

	public function proses_hapus_keterangan_tanah($id) {
		$this->m_index->hapus_keterangan_tanah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_keterangan_tanah/keterangan_tanah'));
	}


//EXPORT TO WORD
	public function keterangan_tanah_word($id) {
		$data['tampil'] = $this->m_index->cetak_keterangan_tanah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "keterangan_tanah/keterangan_tanah_word.php";
		$this->load->view('template/word',$data);
	}

	public function keterangan_tanah_word1($id) {
		$data['tampil'] = $this->m_index->cetak_keterangan_tanah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "keterangan_tanah/keterangan_tanah_word1.php";
		$this->load->view('template/word',$data);
	}

	
//CETAK PDF SURAT KETERANGAN KETERANGAN TANAH
	public function keterangan_tanah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_keterangan_tanah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('keterangan_tanah/cetak_data_keterangan_tanah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('keterangan_tanah.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN KETERANGAN TANAH
	public function keterangan_tanah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_keterangan_tanah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('keterangan_tanah/cetak_data_keterangan_tanah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('keterangan_tanah.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_keterangan_tanah() {
		$this->m_index->cekLogin();
		$data['isi'] = "keterangan_tanah/rekap_keterangan_tanah.php";
		$this->load->view('template/utama', $data);
	}

	public function keterangan_tanah_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['keterangan_tanah'] = $this->m_index->rekap_keterangan_tanah($T1,$T2);
		$this->load->view('keterangan_tanah/rekap_data_keterangan_tanah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('keterangan_tanah.pdf', 'P');
	}

}
?>