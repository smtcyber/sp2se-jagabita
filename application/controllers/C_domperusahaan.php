<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_domperusahaan extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}

//SURAT DOMISILI PERUSAHAAN KIOS --------------------------------------------------------------
	function panel_domperusahaan() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_domperusahaan.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_domperusahaan() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domperusahaan($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"masa_berlaku" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$domperusahaanId = $this->m_index->tambah_domperusahaan($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Perusahaan",
							"link" => "c_domperusahaan/domperusahaan",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $perusahaanId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT DOMISILI PERUSAHAAN ADMIN -------------------------------------------------------------
	public function domperusahaan() {
		$this->m_index->cekLogin();
		$data['domperusahaan']=$this->m_index->get_domperusahaan();
		foreach($this->m_index->statistik_domperusahaan()->result_array() as $row)
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
		$data['isi'] = "domperusahaan/domperusahaan.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_domperusahaan(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "domperusahaan/tambah_domperusahaan.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_domperusahaan(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"agama1" => $this->input->post("agama1"),
						"kabupaten_pemilik" => $this->input->post("kabupaten_pemilik"),
						"nama_perusahaan" => $this->input->post("nama_perusahaan"),
						"alamat_perusahaan" => $this->input->post("alamat_perusahaan"),
						"rt_perusahaan" => $this->input->post("rt_perusahaan"),
						"rw_perusahaan" => $this->input->post("rw_perusahaan"),
						"desa_perusahaan" => $this->input->post("desa_perusahaan"),
						"kecamatan_perusahaan" => $this->input->post("kecamatan_perusahaan"),
						"kabupaten_perusahaan" => $this->input->post("kabupaten_perusahaan"),
						"bidang_perusahaan" => $this->input->post("bidang_perusahaan"),
						"jenis_usaha" => $this->input->post("jenis_usaha"),
						"masa_berlaku" => date("Y-m-d",strtotime($this->input->post("masa_berlaku"))),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_domperusahaan($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_domperusahaan/domperusahaan'));
	}

	public function edit_domperusahaan($id){
		$this->m_index->cekLogin();
		$data['edit_domperusahaan'] = $this->m_index->getEdit_domperusahaan($id);
		$data['isi'] = "domperusahaan/edit_domperusahaan.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_domperusahaan(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"agama1" => $this->input->post("agama1"),
						"kabupaten_pemilik" => $this->input->post("kabupaten_pemilik"),
						"nama_perusahaan" => $this->input->post("nama_perusahaan"),
						"alamat_perusahaan" => $this->input->post("alamat_perusahaan"),
						"rt_perusahaan" => $this->input->post("rt_perusahaan"),
						"rw_perusahaan" => $this->input->post("rw_perusahaan"),
						"desa_perusahaan" => $this->input->post("desa_perusahaan"),
						"kecamatan_perusahaan" => $this->input->post("kecamatan_perusahaan"),
						"kabupaten_perusahaan" => $this->input->post("kabupaten_perusahaan"),
						"bidang_perusahaan" => $this->input->post("bidang_perusahaan"),
						"jenis_usaha" => $this->input->post("jenis_usaha"),
						"masa_berlaku" => date("Y-m-d",strtotime($this->input->post("masa_berlaku"))),
						);
		$this->m_index->edit_domperusahaan($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_domperusahaan/domperusahaan'));
	}

	public function proses_hapus_domperusahaan($id) {
		$this->m_index->hapus_domperusahaan($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_domperusahaan/domperusahaan'));
	}


//EXPORT TO WORD
	public function domperusahaan_word($id) {
		$data['tampil'] = $this->m_index->cetak_domperusahaan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "domperusahaan/domperusahaan_word.php";
		$this->load->view('template/word',$data);
	}

	public function domperusahaan_word1($id) {
		$data['tampil'] = $this->m_index->cetak_domperusahaan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "domperusahaan/domperusahaan_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT DOMISILI PERUSAHAAN
	public function domperusahaan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domperusahaan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('domperusahaan/cetak_data_domperusahaan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domperusahaan.pdf', 'P');
	}

//CETAK PDF SURAT DOMISILI PERUSAHAAN
	public function domperusahaan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domperusahaan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('domperusahaan/cetak_data_domperusahaan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domperusahaan.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_domperusahaan() {
		$this->m_index->cekLogin();
		$data['isi'] = "domperusahaan/rekap_domperusahaan.php";
		$this->load->view('template/utama', $data);
	}

	public function domperusahaan_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['domperusahaan'] = $this->m_index->rekap_domperusahaan($T1,$T2);
		$this->load->view('domperusahaan/rekap_data_domperusahaan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domperusahaan.pdf', 'P');
	}


}
?>