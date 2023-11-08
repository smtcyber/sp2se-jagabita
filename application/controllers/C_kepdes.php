<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kepdes extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}

//BAGIAN DATA PENDUDUK
		public function kepdes() {
		$this->m_index->cekLogin();
		$data['kepdes']=$this->m_index->get_kepdes();
		$data['isi'] = "kepdes/kepdes.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_kepdes(){
		$this->m_index->cekLogin();
		$data['isi'] = "kepdes/tambah_kepdes.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kepdes(){
		$config['upload_path'] = './assets/foto_kades'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_kades'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_kades'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("nama_kades" => $this->input->post("nama_kades"),
								"jabatan" => $this->input->post("jabatan"),
								"pangkat" => $this->input->post("pangkat"),
								"nip" => $this->input->post("nip"),
								"foto_kades" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("nama_kades" => $this->input->post("nama_kades"),
								"jabatan" => $this->input->post("jabatan"),
								"pangkat" => $this->input->post("pangkat"),
								"nip" => $this->input->post("nip"),
								);
			}
				$this->m_index->tambah_kepdes($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('c_kepdes/kepdes'));
		}


	public function edit_kepdes($id){
		$this->m_index->cekLogin();
		$data['edit_kepdes'] = $this->m_index->getEdit_kepdes($id);
		$data['isi'] = "kepdes/edit_kepdes.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kepdes(){
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("nama_kades" => $this->input->post("nama_kades"),
								"jabatan" => $this->input->post("jabatan"),
								"pangkat" => $this->input->post("pangkat"),
								"nip" => $this->input->post("nip"),
								"foto_kades" => $photo_lama,
								);
			$this->m_index->edit_kepdes($data, $id);
			$data['msg'] = "Data Berhasil diupdate";
			$data['kepdes']=$this->m_index->get_kepdes();
			$data['isi'] = "kepdes/kepdes.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/foto_kades'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_kades'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_kades'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("nama_kades" => $this->input->post("nama_kades"),
								"jabatan" => $this->input->post("jabatan"),
								"pangkat" => $this->input->post("pangkat"),
								"nip" => $this->input->post("nip"),
								"foto_kades" => $gbr['file_name'],
							);
				$foto_kades = $this->m_index->foto_kepdes($id);
				unlink('assets/foto_kades/'.$foto_kades->foto_kades); //Menghapus gambar lama
				$this->m_index->edit_kepdes($data, $id);
				redirect(site_url('c_kepdes/kepdes'));
			}
		}
	}


	public function proses_hapus_kepdes($id) {
		$this->m_index->hapus_kepdes($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kepdes/kepdes'));
	}

//CETAK
	public function kepdes_cetak() {
		$data['kepdes'] = $this->m_index->get_kepdes();
		$this->load->view('template/kepdes', $data);

	}

}
?>