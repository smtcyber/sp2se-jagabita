<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kenal_lahir extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KENAL LAHIR KIOS -------------------------------------------------------------------------------------------
	function panel_kenal_lahir() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_kenal_lahir.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_kenal_lahir() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kenal_lahir($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tanggal_pengantar" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$kenal_lahirId = $this->m_index->tambah_kenal_lahir($data_nik);
			$data =  array ("surat" => "Surat Keterangan Kenal Lahir",
							"link" => "c_kenal_lahir/kenal_lahir",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $kenal_lahirId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//SURAT KENAL LAHIR ADMIN -----------------------------------------------------------------------
	public function kenal_lahir() {
	$this->m_index->cekLogin();
	$data['kenal_lahir']=$this->m_index->get_kenal_lahir();
	foreach($this->m_index->statistik_kenal_lahir()->result_array() as $row)
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
	$data['isi'] = "kenal_lahir/kenal_lahir.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_kenal_lahir(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "kenal_lahir/tambah_kenal_lahir.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kenal_lahir(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"umur_ayah" => $this->input->post("umur_ayah"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"umur_ibu" => $this->input->post("umur_ibu"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"anak_ke" => $this->input->post("anak_ke"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_kenal_lahir($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_kenal_lahir/kenal_lahir'));
	}

	public function edit_kenal_lahir($id){
		$this->m_index->cekLogin();
		$data['edit_kenal_lahir'] = $this->m_index->getEdit_kenal_lahir($id);
		$data['isi'] = "kenal_lahir/edit_kenal_lahir.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kenal_lahir(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"umur_ayah" => $this->input->post("umur_ayah"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"umur_ibu" => $this->input->post("umur_ibu"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"anak_ke" => $this->input->post("anak_ke"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_kenal_lahir($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_kenal_lahir/kenal_lahir'));
	}

	public function proses_hapus_kenal_lahir($id) {
		$this->m_index->hapus_kenal_lahir($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kenal_lahir/kenal_lahir'));
	}


//EXPORT TO WORD
	public function kenal_lahir_word($id) {
		$data['tampil'] = $this->m_index->cetak_kenal_lahir($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "kenal_lahir/kenal_lahir_word.php";
		$this->load->view('template/word',$data);
	}

	public function kenal_lahir_word1($id) {
		$data['tampil'] = $this->m_index->cetak_kenal_lahir1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "kenal_lahir/kenal_lahir_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN KENAL LAHIR
	public function kenal_lahir_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kenal_lahir($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kenal_lahir/cetak_data_kenal_lahir', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kenal_lahir.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN KENAL LAHIR
	public function kenal_lahir_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kenal_lahir1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('kenal_lahir/cetak_data_kenal_lahir1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kenal_lahir.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_kenal_lahir() {
		$this->m_index->cekLogin();
		$data['isi'] = "kenal_lahir/rekap_kenal_lahir.php";
		$this->load->view('template/utama', $data);
	}

	public function kenal_lahir_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['kenal_lahir'] = $this->m_index->rekap_kenal_lahir($T1,$T2);
		$this->load->view('kenal_lahir/rekap_data_kenal_lahir', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kenal_lahir.pdf', 'P');
	}

}
?>