<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_header extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


	public function header() {
		$this->m_index->cekLogin();
		$data['header']=$this->m_index->get_header();
		$data['isi'] = "header/header.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_header(){
		$this->m_index->cekLogin();
		$data['isi'] = "header/tambah_header.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_header() {
		$config['upload_path'] = './assets/logo'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/logo'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/logo'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("email" => $this->input->post("K1"),
								"pemerintah" => $this->input->post("K2"),
								"kecamatan" => $this->input->post("K3"),
								"jabatan" => $this->input->post("K4"),
								"alamat" => $this->input->post("K5"),
								"kode_pos" => $this->input->post("K6"),
								"desa" => $this->input->post("desa"),
								"logo" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("email" => $this->input->post("K1"),
								"pemerintah" => $this->input->post("K2"),
								"kecamatan" => $this->input->post("K3"),
								"jabatan" => $this->input->post("K4"),
								"alamat" => $this->input->post("K5"),
								"kode_pos" => $this->input->post("K6"),
								"desa" => $this->input->post("desa"),
								);
			}
				$this->m_index->tambah_header($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('c_header/header'));
		}

	public function edit_header($id){
		$this->m_index->cekLogin();
		$data['edit_header'] = $this->m_index->getEdit_header($id);
		$data['isi'] = "header/edit_header.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_header() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("email" => $this->input->post("K1"),
								"pemerintah" => $this->input->post("K2"),
								"kecamatan" => $this->input->post("K3"),
								"jabatan" => $this->input->post("K4"),
								"alamat" => $this->input->post("K5"),
								"desa" => $this->input->post("desa"),
								"kode_pos" => $this->input->post("K6"),
								"logo" => $photo_lama,
								);
			$this->m_index->edit_header($data, $id);
			$data['msg'] = "Data Berhasil diupdate";
			$data['header']=$this->m_index->get_header();
			$data['isi'] = "header/header.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/logo'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/logo'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/logo'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("email" => $this->input->post("K1"),
								"pemerintah" => $this->input->post("K2"),
								"kecamatan" => $this->input->post("K3"),
								"jabatan" => $this->input->post("K4"),
								"alamat" => $this->input->post("K5"),
								"kode_pos" => $this->input->post("K6"),
								"desa" => $this->input->post("desa"),
								"logo" => $gbr['file_name'],
							);
				$logo = $this->m_index->logo($id);
				unlink('assets/logo/'.$logo->logo); //Menghapus gambar lama
				$this->m_index->edit_header($data, $id);
				redirect(site_url('c_header/header'));
			}
		}
	}

	public function proses_hapus_header($id) {
		$this->m_index->hapus_header($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_header/header'));
	}

//CETAK
	public function header_cetak() {
		$data['header'] = $this->m_index->get_header();
		$this->load->view('template/header', $data);

	}

	public function header_cetak_kios() {
		$data['header'] = $this->m_index->get_header();
		$this->load->view('template/header_kios', $data);

	}

}
?>