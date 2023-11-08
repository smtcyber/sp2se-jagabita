<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_keterangan_jalan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN KETERANGAN JALAN KIOS -------------------------------------------------------------------------------------------
	function panel_keterangan_jalan() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_keterangan_jalan.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_keterangan_jalan() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_ket_jalan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"pergi_ke_jalan" => $this->input->post("pergi_ke_jalan"),
					"tujuan_jalan" => $this->input->post("tujuan_jalan"),
					"lama_jalan" => $this->input->post("lama_jalan"),
					"ket_jalan" => $this->input->post("ket_jalan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$keterangan_jalanId = $this->m_index->tambah_keterangan_jalan($data_nik);
			$data =  array ("surat" => "Surat Keterangan Keterangan Jalan",
							"link" => "c_keterangan_jalan/keterangan_jalan",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_keterangan_jalan/cetak_data/'. $keterangan_jalanId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_keterangan_jalan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_keterangan_jalan/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_keterangan_jalan($id) {
		$data['data'] = $this->m_index->cetak_data_keterangan_jalan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_keterangan_jalan/cetak_keterangan_jalan',$data);
	}

	function cetak_data_keterangan_jalan1($id) {
		$data['data'] = $this->m_index->cetak_data_keterangan_jalan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_keterangan_jalan/cetak_keterangan_jalan1',$data);
	}




//SURAT KETERANGAN PERNYATAAN KETERANGAN JALAN ADMIN -----------------------------------------
	public function keterangan_jalan() {
		$this->m_index->cekLogin();
		$data['keterangan_jalan']=$this->m_index->get_keterangan_jalan();
		foreach($this->m_index->statistik_keterangan_jalan()->result_array() as $row)
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
		$data['isi'] = "keterangan_jalan/keterangan_jalan.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_keterangan_jalan(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "keterangan_jalan/tambah_keterangan_jalan.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_keterangan_jalan(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"pergi_ke_jalan" => $this->input->post("pergi_ke_jalan"),
						"tujuan_jalan" => $this->input->post("tujuan_jalan"),
						"lama_jalan" => $this->input->post("lama_jalan"),
						"ket_jalan" => $this->input->post("ket_jalan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_keterangan_jalan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_keterangan_jalan/keterangan_jalan'));
	}

	public function edit_keterangan_jalan($id){
		$this->m_index->cekLogin();
		$data['edit_keterangan_jalan'] = $this->m_index->getEdit_keterangan_jalan($id);
		$data['isi'] = "keterangan_jalan/edit_keterangan_jalan.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_keterangan_jalan(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"blok" => $this->input->post("blok"),
						"pergi_ke_jalan" => $this->input->post("pergi_ke_jalan"),
						"tujuan_jalan" => $this->input->post("tujuan_jalan"),
						"lama_jalan" => $this->input->post("lama_jalan"),
						"ket_jalan" => $this->input->post("ket_jalan"),
						);
		$this->m_index->edit_keterangan_jalan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_keterangan_jalan/keterangan_jalan'));
	}

	public function proses_hapus_keterangan_jalan($id) {
		$this->m_index->hapus_keterangan_jalan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_keterangan_jalan/keterangan_jalan'));
	}

//CETAK PDF SURAT KETERANGAN KETERANGAN JALAN
	public function keterangan_jalan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_keterangan_jalan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('keterangan_jalan/cetak_data_keterangan_jalan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('keterangan_jalan.pdf', 'P');
	}


//CETAK PDF SURAT KETERANGAN KETERANGAN JALAN
	public function keterangan_jalan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_keterangan_jalan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('keterangan_jalan/cetak_data_keterangan_jalan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('keterangan_jalan.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_keterangan_jalan() {
		$this->m_index->cekLogin();
		$data['isi'] = "keterangan_jalan/rekap_keterangan_jalan.php";
		$this->load->view('template/utama', $data);
	}

	public function keterangan_jalan_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['keterangan_jalan'] = $this->m_index->rekap_keterangan_jalan($T1,$T2);
		$this->load->view('keterangan_jalan/rekap_data_keterangan_jalan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('keterangan_jalan.pdf', 'P');
	}


}
?>