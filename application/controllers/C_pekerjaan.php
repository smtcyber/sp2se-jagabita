<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_pekerjaan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT PEKERJAAN KIOS -------------------------------------------------------------------------------------------
	function panel_pekerjaan() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_pekerjaan.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_pekerjaan() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_pekerjaan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"pekerjaan_lama" => $this->input->post("pekerjaan_lama"),
					"pekerjaan_sekarang" => $this->input->post("pekerjaan_sekarang"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$pekerjaanId = $this->m_index->tambah_pekerjaan($data_nik);
			$data =  array ("surat" => "Surat Keterangan Pekerjaan",
							"link" => "c_pekerjaan/pekerjaan",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_pekerjaan/cetak_data/'. $pekerjaanId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_pekerjaan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_pekerjaan/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_pekerjaan($id) {
		$data['data'] = $this->m_index->cetak_data_pekerjaan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_pekerjaan/cetak_pekerjaan',$data);
	}

	function cetak_data_pekerjaan1($id) {
		$data['data'] = $this->m_index->cetak_data_pekerjaan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_pekerjaan/cetak_pekerjaan1',$data);
	}

//SURAT KETERANGAN BELUM KERJA ADMIN ----------------------------------------------------------
	public function pekerjaan() {
	$this->m_index->cekLogin();
	$data['pekerjaan']=$this->m_index->get_pekerjaan();
	foreach($this->m_index->statistik_pekerjaan()->result_array() as $row)
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
	$data['isi'] = "pekerjaan/pekerjaan.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_pekerjaan(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "pekerjaan/tambah_pekerjaan.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_pekerjaan(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_pekerjaan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_pekerjaan/pekerjaan'));
	}

	public function edit_pekerjaan($id){
		$this->m_index->cekLogin();
		$data['edit_pekerjaan'] = $this->m_index->getEdit_pekerjaan($id);
		$data['isi'] = "pekerjaan/edit_pekerjaan.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_pekerjaan(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"pekerjaan_lama" => $this->input->post("pekerjaan_lama"),
						"pekerjaan_sekarang" => $this->input->post("pekerjaan_sekarang"),
						);
		$this->m_index->edit_pekerjaan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_pekerjaan/pekerjaan'));
	}

	public function proses_hapus_pekerjaan($id) {
		$this->m_index->hapus_pekerjaan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_pekerjaan/pekerjaan'));
	}



//CETAK PDF SURAT KETERANGAN BELUM KERJA
	public function pekerjaan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pekerjaan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('pekerjaan/cetak_data_pekerjaan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pekerjaan.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN BELUM KERJA 1
	public function pekerjaan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pekerjaan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('pekerjaan/cetak_data_pekerjaan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pekerjaan.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_pekerjaan() {
		$this->m_index->cekLogin();
		$data['isi'] = "pekerjaan/rekap_pekerjaan.php";
		$this->load->view('template/utama', $data);
	}

	public function pekerjaan_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['pekerjaan'] = $this->m_index->rekap_pekerjaan($T1,$T2);
		$this->load->view('pekerjaan/rekap_data_pekerjaan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pekerjaan.pdf', 'P');
	}

}
?>