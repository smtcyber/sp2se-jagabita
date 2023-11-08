<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_haji extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN HAJI KIOS -------------------------------------------------------------------------------------------
	function panel_haji() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_haji.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_haji() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_haji($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$hajiId = $this->m_index->tambah_haji($data_nik);
			$data =  array ("surat" => "Surat Domisili Haji",
							"link" => "c_haji/haji",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_haji/cetak_data/'. $hajiId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_haji($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_haji/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_haji($id) {
		$data['data'] = $this->m_index->cetak_data_haji($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_haji/cetak_haji',$data);
	}

	function cetak_data_haji1($id) {
		$data['data'] = $this->m_index->cetak_data_haji1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_haji/cetak_haji1',$data);
	}


//SURAT KETERANGAN PERNYATAAN KTP SEMENTARA ADMIN -------------------------------------------------------
	public function haji() {
		$this->m_index->cekLogin();
		$data['haji']=$this->m_index->get_haji();
		foreach($this->m_index->statistik_haji()->result_array() as $row)
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
		$data['isi'] = "haji/haji.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_haji(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "haji/tambah_haji.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_haji(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
		"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_haji($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_haji/haji'));
	}

	public function edit_haji($id){
		$this->m_index->cekLogin();
		$data['edit_haji'] = $this->m_index->getEdit_haji($id);
		$data['isi'] = "haji/edit_haji.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_haji(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						);
		$this->m_index->edit_haji($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_haji/haji'));
	}

	public function proses_hapus_haji($id) {
		$this->m_index->hapus_haji($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_haji/haji'));
	}

	
//CETAK PDF SURAT KETERANGAN HAJI
	public function haji_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_haji($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('haji/cetak_data_haji', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('haji.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN KTP SEMENTARA
	public function haji_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_haji1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('haji/cetak_data_haji1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('haji.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_haji() {
		$this->m_index->cekLogin();
		$data['isi'] = "haji/rekap_haji.php";
		$this->load->view('template/utama', $data);
	}

	public function haji_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['haji'] = $this->m_index->rekap_haji($T1,$T2);
		$this->load->view('haji/rekap_data_haji', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('haji.pdf', 'P');
	}

}
?>