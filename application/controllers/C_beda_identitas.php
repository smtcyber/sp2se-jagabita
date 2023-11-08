<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_beda_identitas extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT BEDA IDENTITAS KIOS -------------------------------------------------------------------------------------------
	function panel_beda_identitas() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_beda_identitas.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_beda_identitas() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_beda_identitas($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$beda_identitasId = $this->m_index->tambah_beda_identitas($data_nik);
			$data =  array ("surat" => "Surat Keterangan Beda Identitas",
							"link" => "c_beda_identitas/beda_identitas",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $beda_identitasId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//BEDA IDENTITAS ADMIN ----------------------------------------------------------------
	public function beda_identitas() {
	$this->m_index->cekLogin();
	$data['beda_identitas']=$this->m_index->get_beda_identitas();
	foreach($this->m_index->statistik_beda_identitas()->result_array() as $row)
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
	$data['isi'] = "beda_identitas/beda_identitas.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_beda_identitas(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "beda_identitas/tambah_beda_identitas.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_beda_identitas(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"pekerjaan_b" => $this->input->post("pekerjaan_b"),
						"status_kawin_b" => $this->input->post("status_kawin_b"),
						"b_identitas" => $this->input->post("b_identitas"),
						"pada_kartu" => $this->input->post("pada_kartu"),
						"sebenarnya" => $this->input->post("sebenarnya"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_beda_identitas($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_beda_identitas/beda_identitas'));
	}

	public function edit_beda_identitas($id){
		$this->m_index->cekLogin();
		$data['edit_beda_identitas'] = $this->m_index->getEdit_beda_identitas($id);
		$data['isi'] = "beda_identitas/edit_beda_identitas.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_beda_identitas(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"pekerjaan_b" => $this->input->post("pekerjaan_b"),
						"status_kawin_b" => $this->input->post("status_kawin_b"),
						"b_identitas" => $this->input->post("b_identitas"),
						"pada_kartu" => $this->input->post("pada_kartu"),
						"sebenarnya" => $this->input->post("sebenarnya"),
						);
		$this->m_index->edit_beda_identitas($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_beda_identitas/beda_identitas'));
	}

	public function proses_hapus_beda_identitas($id) {
		$this->m_index->hapus_beda_identitas($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_beda_identitas/beda_identitas'));
	}


//EXPORT TO WORD
	public function beda_identitas_word($id) {
		$data['tampil'] = $this->m_index->cetak_beda_identitas($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "beda_identitas/beda_identitas_word.php";
		$this->load->view('template/word',$data);
	}

	public function beda_identitas_word1($id) {
		$data['tampil'] = $this->m_index->cetak_beda_identitas1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "beda_identitas/beda_identitas_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF BEDA IDENTITAS
	public function beda_identitas_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_beda_identitas($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('beda_identitas/cetak_data_beda_identitas', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('beda_identitas.pdf', 'P');
	}


//CETAK PDF BEDA IDENTITAS
	public function beda_identitas_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_beda_identitas1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('beda_identitas/cetak_data_beda_identitas1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('beda_identitas.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_beda_identitas() {
		$this->m_index->cekLogin();
		$data['isi'] = "beda_identitas/rekap_beda_identitas.php";
		$this->load->view('template/utama', $data);
	}

	public function beda_identitas_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['beda_identitas'] = $this->m_index->rekap_beda_identitas($T1,$T2);
		$this->load->view('beda_identitas/rekap_data_beda_identitas', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('beda_identitas.pdf', 'P');
	}

}
?>