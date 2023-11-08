<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_atas_nama extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}

//ATAS NAMA
		public function atas_nama() {
		$this->m_index->cekLogin();
		$data['atas_nama']=$this->m_index->get_atas_nama();
		$data['isi'] = "atas_nama/atas_nama.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_atas_nama(){
		$this->m_index->cekLogin();
		$data['isi'] = "atas_nama/tambah_atas_nama.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_atas_nama(){
		$data =  array ("atas_nama" => $this->input->post("atas_nama"),
						"status" => $this->input->post("status"),
						"jabatan" => $this->input->post("jabatan"),
						"pangkat" => $this->input->post("pangkat"),
						"nip" => $this->input->post("nip"),
						);
		$this->m_index->tambah_atas_nama($data);
		redirect(site_url('c_atas_nama/atas_nama'));
	}

	public function edit_atas_nama($id){
		$this->m_index->cekLogin();
		$data['edit_atas_nama'] = $this->m_index->getEdit_atas_nama($id);
		$data['isi'] = "atas_nama/edit_atas_nama.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_atas_nama(){
		$id = $this ->input->post("H1");
		$data =  array ("atas_nama" => $this->input->post("atas_nama"),
						"status" => $this->input->post("status"),
						"jabatan" => $this->input->post("jabatan"),
						"pangkat" => $this->input->post("pangkat"),
						"nip" => $this->input->post("nip"),
						);
		$this->m_index->edit_atas_nama($data, $id);
		redirect(site_url('c_atas_nama/atas_nama'));
	}

	public function proses_hapus_atas_nama($id) {
		$this->m_index->hapus_atas_nama($id);
		redirect(site_url('c_atas_nama/atas_nama'));
	}

	//CETAK
	public function atas_nama_cetak() {
		$data['atas_nama'] = $this->m_index->get_atas_nama();
		$this->load->view('template/atas_nama', $data);

	}

}
?>