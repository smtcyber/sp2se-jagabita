<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_penduduk extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}

//BAGIAN DATA PENDUDUK
public function penduduk() {
	$this->m_index->cekLogin();
	$data['penduduk']=$this->m_index->get_penduduk();
	$data['isi'] = "penduduk/data_penduduk.php";
	$this->load->view('template/utama',$data);
}


	public function penduduk_wafat() {
		$this->m_index->cekLogin();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['penduduk']=$this->m_index->get_penduduk_wafat();
		$data['isi'] = "penduduk/data_penduduk_wafat.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_penduduk(){
		$this->m_index->cekLogin();
		$data['isi'] = "penduduk/tambah_penduduk.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_penduduk(){
		$data =  array ("no_ktp" => $this->input->post("P1"),
						"no_kk" => $this->input->post("P2"),
						"nama" => $this->input->post("P3"),
						"agama" => $this->input->post("P4"),
						"kelamin" => $this->input->post("P5"),
						"tempat_lahir" => $this->input->post("P6"),
						"tanggal_lahir" => date("Y-m-d",strtotime($this->input->post("P7"))),
						"status_kawin" => $this->input->post("P8"),
						"rt" => $this->input->post("P9"),
						"rw" => $this->input->post("P10"),
						"dusun" => $this->input->post("P11"),
						"kelurahan" => $this->input->post("P12"),
						"kecamatan" => $this->input->post("P13"),
						"kabupaten" => $this->input->post("P14"),
						"h_keluarga" => $this->input->post("P15"),
						"pendidikan" => $this->input->post("P16"),
						"pekerjaan" => $this->input->post("P17"),
						);
		$this->m_index->tambah_penduduk($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_penduduk/penduduk'));
	}

	public function edit_penduduk($id){
		$this->m_index->cekLogin();
		$data['edit_penduduk'] = $this->m_index->getEdit_penduduk($id);
		$data['isi'] = "penduduk/edit_penduduk.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_penduduk(){
		$id = $this ->input->post("H1");
		$data =  array ("no_ktp" => $this->input->post("P1"),
						"no_kk" => $this->input->post("P2"),
						"nama" => $this->input->post("P3"),
						"agama" => $this->input->post("P4"),
						"kelamin" => $this->input->post("P5"),
						"tempat_lahir" => $this->input->post("P6"),
						"tanggal_lahir" => date("Y-m-d",strtotime($this->input->post("P7"))),
						"status_kawin" => $this->input->post("P8"),
						"rt" => $this->input->post("P9"),
						"rw" => $this->input->post("P10"),
						"dusun" => $this->input->post("P11"),
						"kelurahan" => $this->input->post("P12"),
						"kecamatan" => $this->input->post("P13"),
						"kabupaten" => $this->input->post("P14"),
						"h_keluarga" => $this->input->post("P15"),
						"pendidikan" => $this->input->post("P16"),
						"pekerjaan" => $this->input->post("P17"),
						);
		$this->m_index->edit_penduduk($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_penduduk/penduduk'));
	}

	public function proses_hapus_penduduk($id) {
		$this->m_index->hapus_penduduk($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_penduduk/penduduk'));
	}

//EXPORT TO EXCEL
	public function penduduk_excel() {
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "penduduk/penduduk_excel.php";
		$this->load->view('template/excel',$data);
	}

//EXPORT TO WORD
	public function penduduk_word() {
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "penduduk/penduduk_word.php";
		$this->load->view('template/word',$data);
	}

	public function kelamin(){
    	 $this->m_index->cekLogin();
    	 $data['header'] = $this->m_index->tampilHeader()->row();
		 $data['laki'] = $this->m_index->tampil_laki_laki();
		 $data['isi'] = 'berdasarkan/kelamin.php';
		 $this->load->view('template/utama', $data);
	}

}
?>