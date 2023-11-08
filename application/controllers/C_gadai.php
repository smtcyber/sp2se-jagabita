<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_gadai extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN GADAI KIOS -------------------------------------------------------------------------------------------
	function panel_gadai() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_gadai.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_gadai() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_gadai($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$gadaiId = $this->m_index->tambah_gadai($data_nik);
			$data =  array ("surat" => "Surat Keterangan gadai",
							"link" => "c_gadai/gadai",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $gadaiId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//SURAT KETERANGAN PERNYATAAN GADAI ADMIN ------------------------------------------
	public function gadai() {
	$this->m_index->cekLogin();
	$data['gadai']=$this->m_index->get_gadai();
	foreach($this->m_index->statistik_gadai()->result_array() as $row)
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
	$data['isi'] = "gadai/gadai.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_gadai(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "gadai/tambah_gadai.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_gadai(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"umur1" => $this->input->post("umur1"),
						"nama1" => $this->input->post("nama1"),
						"pekerjaan1" => $this->input->post("pekerjaan1"),
						"alamat1" => $this->input->post("alamat1"),
						"rt1" => $this->input->post("rt1"),
						"rw1" => $this->input->post("rw1"),
						"kelamin1" => $this->input->post("kelamin1"),
						"uang" => $this->input->post("uang"),
						"blok" => $this->input->post("blok"),
						"luas" => $this->input->post("luas"),
						"utara" => $this->input->post("utara"),
						"timur" => $this->input->post("timur"),
						"selatan" => $this->input->post("selatan"),
						"barat" => $this->input->post("barat"),
						"musim" => $this->input->post("musim"),
						"lama" => $this->input->post("lama"),
						"saksi1" => $this->input->post("saksi1"),
						"saksi2" => $this->input->post("saksi2"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_gadai($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_gadai/gadai'));
	}

	public function edit_gadai($id){
		$this->m_index->cekLogin();
		$data['edit_gadai'] = $this->m_index->getEdit_gadai($id);
		$data['isi'] = "gadai/edit_gadai.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_gadai(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"umur1" => $this->input->post("umur1"),
						"nama1" => $this->input->post("nama1"),
						"pekerjaan1" => $this->input->post("pekerjaan1"),
						"alamat1" => $this->input->post("alamat1"),
						"rt1" => $this->input->post("rt1"),
						"rw1" => $this->input->post("rw1"),
						"kelamin1" => $this->input->post("kelamin1"),
						"uang" => $this->input->post("uang"),
						"blok" => $this->input->post("blok"),
						"luas" => $this->input->post("luas"),
						"utara" => $this->input->post("utara"),
						"timur" => $this->input->post("timur"),
						"selatan" => $this->input->post("selatan"),
						"barat" => $this->input->post("barat"),
						"musim" => $this->input->post("musim"),
						"lama" => $this->input->post("lama"),
						"saksi1" => $this->input->post("saksi1"),
						"saksi2" => $this->input->post("saksi2"),
						);
		$this->m_index->edit_gadai($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_gadai/gadai'));
	}

	public function proses_hapus_gadai($id) {
		$this->m_index->hapus_gadai($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_gadai/gadai'));
	}


//EXPORT TO WORD
	public function gadai_word($id) {
		$data['tampil'] = $this->m_index->cetak_gadai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "gadai/gadai_word.php";
		$this->load->view('template/word',$data);
	}

	public function gadai_word1($id) {
		$data['tampil'] = $this->m_index->cetak_gadai1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "gadai/gadai_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN PERNYATAAN GADAI
	public function gadai_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_gadai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('gadai/cetak_data_gadai', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('gadai.pdf', 'P');
	}

	public function gadai_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_gadai1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('gadai/cetak_data_gadai1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('gadai.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_gadai() {
		$this->m_index->cekLogin();
		$data['isi'] = "gadai/rekap_gadai.php";
		$this->load->view('template/utama', $data);
	}

	public function gadai_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['gadai'] = $this->m_index->rekap_gadai($T1,$T2);
		$this->load->view('gadai/rekap_data_gadai', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('gadai.pdf', 'P');
	}


}
?>