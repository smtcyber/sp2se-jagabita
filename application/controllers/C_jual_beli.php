<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_jual_beli extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}

//SURAT KETERANGAN PERNYATAAN JUAL BELI
	public function jual_beli() {
	$this->m_index->cekLogin();
	$data['jual_beli']=$this->m_index->get_jual_beli();
	foreach($this->m_index->statistik_jual_beli()->result_array() as $row)
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
	$data['isi'] = "jual_beli/jual_beli.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_jual_beli(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "jual_beli/tambah_jual_beli.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_jual_beli(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"nama1" => $this->input->post("nama1"),
						"umur1" => $this->input->post("umur1"),
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
						"persil" => $this->input->post("persil"),
						"no" => $this->input->post("no"),
						"nop" => $this->input->post("nop"),
						"saksi1" => $this->input->post("saksi1"),
						"saksi2" => $this->input->post("saksi2"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_jual_beli($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_jual_beli/jual_beli'));
	}

	public function edit_jual_beli($id){
		$this->m_index->cekLogin();
		$data['edit_jual_beli'] = $this->m_index->getEdit_jual_beli($id);
		$data['isi'] = "jual_beli/edit_jual_beli.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_jual_beli(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"nama1" => $this->input->post("nama1"),
						"umur1" => $this->input->post("umur1"),
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
						"persil" => $this->input->post("persil"),
						"no" => $this->input->post("no"),
						"nop" => $this->input->post("nop"),
						"saksi1" => $this->input->post("saksi1"),
						"saksi2" => $this->input->post("saksi2"),
						);
		$this->m_index->edit_jual_beli($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_jual_beli/jual_beli'));
	}

	public function proses_hapus_jual_beli($id) {
		$this->m_index->hapus_jual_beli($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_jual_beli/jual_beli'));
	}

//CETAK PDF SURAT KETERANGAN PERNYATAAN JUAL BELI
	public function jual_beli_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_jual_beli($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('jual_beli/cetak_data_jual_beli', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('jual_beli.pdf', 'P');
	}

	public function jual_beli_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_jual_beli($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('jual_beli/cetak_data_jual_beli1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('jual_beli.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_jual_beli() {
		$this->m_index->cekLogin();
		$data['isi'] = "jual_beli/rekap_jual_beli.php";
		$this->load->view('template/utama', $data);
	}

	public function jual_beli_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['jual_beli'] = $this->m_index->rekap_jual_beli($T1,$T2);
		$this->load->view('jual_beli/rekap_data_jual_beli', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('jual_beli.pdf', 'P');
	}

}
?>