<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dashboard extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
		
	}

//bagian pengelolaan dashboard
	public function index(){
		$data['header'] = $this->m_index->tampilHeader()->row();
		$this->load->view('template/login', $data);

	}

	public function home(){
		$this->m_index->cekLogin();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes']=$this->m_index->tampilKepdes()->row();
		$data['notif']=$this->m_index->get_notif();
		foreach($this->m_index->statistik_notif()->result_array() as $row)
   		{
    		$data['grafik'][]=(float)$row['Jan'];
    		$data['grafik'][]=(float)$row['Feb'];
    		$data['grafik'][]=(float)$row['Mar'];
    		$data['grafik'][]=(float)$row['Apr'];
    		$data['grafik'][]=(float)$row['Mei'];
    		$data['grafik'][]=(float)$row['Jun'];
    		$data['grafik'][]=(float)$row['Jul'];
    		$data['grafik'][]=(float)$row['Agt'];
    		$data['grafik'][]=(float)$row['Sep'];
    		$data['grafik'][]=(float)$row['Okt'];
    		$data['grafik'][]=(float)$row['Nov'];
    		$data['grafik'][]=(float)$row['Des'];
   		}
		$data['isi'] = 'menu/home.php';
		$this->load->view('template/utama', $data);
	}

	public function rekap_surat(){
		$this->m_index->cekLogin();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['isi'] = 'rekap_surat/rekap_surat.php';
		$this->load->view('template/utama', $data);
	}

	public function berdasarkan(){
		$this->m_index->cekLogin();
		$data['coba'] = $this->m_index->tampil_pendidikan();
		$data['kerja'] = $this->m_index->tampil_pekerjaan();
		$data['usia'] = $this->m_index->tampil_usia();
		$data['isi'] = 'berdasarkan/berdasarkan.php';
		$this->load->view('template/utama', $data);
	}

	public function usia(){
		$this->m_index->cekLogin();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['usia'] = $this->m_index->tampil_usia();
		$data['isi'] = 'berdasarkan/usia.php';
		$this->load->view('template/utama', $data);
	}

	public function search_pekerjaan(){
		$this->m_index->cekLogin();
    	$list = $this->input->post("pekerjaan");
    	$data['header'] = $this->m_index->tampilHeader()->row();
        $data['penduduk'] = $this->m_index->search_pekerjaan($list);
        $data['isi'] = 'berdasarkan/tampil_pekerjaan.php';
		$this->load->view('template/utama', $data);
    }

    public function total_pekerjaan(){
     	 $this->m_index->cekLogin();
		 $data['pekerjaan'] = $this->m_index->tampil_pekerjaan();
		 $data['isi'] = 'berdasarkan/berdasarkan.php';
		 $this->load->view('template/utama', $data);
	}

	public function search_pendidikan(){
		$this->m_index->cekLogin();
    	$list = $this->input->post("pendidikan");
    	$data['header'] = $this->m_index->tampilHeader()->row();
        $data['penduduk'] = $this->m_index->search_pendidikan($list);
        $data['isi'] = 'berdasarkan/tampil_pendidikan.php';
		$this->load->view('template/utama', $data);
    }

    public function total_pendidikan(){
    	 $this->m_index->cekLogin();
		 $data['coba'] = $this->m_index->tampil_pendidikan();
		 $data['isi'] = 'berdasarkan/berdasarkan.php';
		 $this->load->view('template/utama', $data);
	}

	public function notif(){
		$data['header'] = $this->m_index->tampilHeader()->row();
		$this->load->view('template/notif_login.php', $data);
	}

	public function yth(){
		$this->load->view('draf/yth.php');
	}

	public function header_garuda(){
		$this->load->view('template/header_garuda.php');
	}

	public function header_garuda_kios(){
		$this->load->view('template/header_garuda_kios.php');
	}

	public function rekap(){
		$this->m_index->cekLogin();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['isi'] = 'rekap_surat/rekap_semua.php';
		$this->load->view('template/utama', $data);
	}

	public function rekap_data() {
		$data['header'] = $this->m_index->tampilHeader()->row();
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		$data['notif'] = $this->m_index->rekap_notif($T1,$T2);
		$data['isi'] = 'rekap_surat/rekap_semua_data.php';
		$this->load->view('template/utama', $data);
	}

	public function bansos(){
     	 $this->m_index->cekLogin();
     	 $data['header'] = $this->m_index->tampilHeader()->row();
		 $data['bansos'] = $this->m_index->bansos();
		 $data['isi'] = 'berdasarkan/bansos.php';
		 $this->load->view('template/utama', $data);
	}


//Login
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'pengguna_username' => $username,
			'pengguna_password' => base64_encode($password)
			);
		$nama_pengguna ="";
		$cek = $this->m_index->cek_login($where);
		foreach ($cek->result() as $tampil) {
			$status = $tampil->pengguna_blokir;
			$level = $tampil->pengguna_level;
			$nama_pengguna = $tampil->anggota_nama;
			$katasandi = $tampil->pengguna_password;
			$pengguna_id = $tampil->pengguna_id;
		}

		$res = $cek->num_rows();

		if($res > 0 and $status == 'T'){
			$data_session = array(
				'nama' => $username,
				'ttd' => $nama_pengguna,
				'ganti' => $pengguna_id,
				'status' => "login",
				'level' => $level,
				'pengguna' => $nama_pengguna
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(site_url("dashboard/home"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 

 //Logout
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url("dashboard/notif"));
	}


//Anggota
	public function anggota() {
		$this->m_index->cekLogin();
		$data['anggota'] = $this->m_index->get_anggota();
		$data['isi'] = "menu/anggota.php";
		$this->load->view('template/utama',$data);
	}
 
	public function detail_anggota($id) {
		$this->m_index->cekLogin();
		$data['detail_anggota'] = $this->m_index->getdetail_anggota($id);
		$data['isi'] = "menu/anggota_detail.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_anggota() {
		$this->m_index->cekLogin();
		$data['isi'] = "tambah/tambah_anggota.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_anggota() {
		$config['upload_path'] = './assets/anggota'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/anggota'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/anggota'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("anggota_nama" => $this->input->post("T1"),
								"anggota_jk" => $this->input->post("C1"),
								"nip" => $this->input->post("T3"),
								"no_ktp" => $this->input->post("no_ktp"),
								"jabatan" => $this->input->post("jabatan"),
								"anggota_foto" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("anggota_nama" => $this->input->post("T1"),
								"anggota_jk" => $this->input->post("C1"),
								"nip" => $this->input->post("T3"),
								"no_ktp" => $this->input->post("no_ktp"),
								"jabatan" => $this->input->post("jabatan"),
								);
			}
				$this->m_index->tambah_anggota($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('dashboard/anggota'));
		}

	public function edit_anggota($id) {
		$this->m_index->cekLogin();
		$data ['edit_anggota'] = $this->m_index->getEdit_anggota($id);
		$data ['isi'] = "edit/edit_anggota.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_anggota() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("anggota_nama" => $this->input->post("T1"),
								"anggota_jk" => $this->input->post("C1"),
								"nip" => $this->input->post("T3"),
								"no_ktp" => $this->input->post("no_ktp"),
								"jabatan" => $this->input->post("jabatan"),
								"anggota_foto" => $photo_lama,
								);
			$this->m_index->edit_anggota($data, $id);
			$data['msg'] = "Data Berhasil di Rubah";
			$data['anggota']=$this->m_index->get_anggota();
			$data['isi'] = "menu/anggota.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/anggota'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/anggota'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/anggota'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("anggota_nama" => $this->input->post("T1"),
								"anggota_jk" => $this->input->post("C1"),
								"nip" => $this->input->post("T3"),
								"no_ktp" => $this->input->post("no_ktp"),
								"jabatan" => $this->input->post("jabatan"),
								"anggota_foto" => $gbr['file_name'],
							);
				$gambar = $this->m_index->gambar($id);
				unlink('assets/anggota/'.$gambar->anggota_foto); //Menghapus gambar lama
				$this->m_index->edit_anggota($data, $id);
				redirect(site_url('dashboard/anggota'));
			}
		}
	}

	public function proses_hapus_anggota($id) {
		$gambar= $this->m_index->gambar($id);
		unlink('assets/anggota/'.$gambar->anggota_foto);
		$this->m_index->hapus_anggota($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('dashboard/anggota'));
	}


//Pengguna
	public function pengguna() {
		$data['pengguna'] = $this->m_index->get_pengguna();
		$data['isi'] = "menu/pengguna.php";
		$this->load->view('template/utama', $data);
	}

	public function tambah_pengguna() {
		$data['anggota'] = $this->m_index->get_anggota();
		$data['isi'] = "tambah/tambah_pengguna.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_tambah_pengguna() {
		$data = array ("pengguna_username" => $this->input->post("T2"),
						"pengguna_password" => base64_encode($this->input->post("T3")),
						"pengguna_level" => $this->input->post("C1"),
						"pengguna_blokir" => $this->input->post("C2"),
						"pengguna_tglupdate" => date("y-m-d", strtotime($this->input->post("T4"))),
						"anggota_id" => $this->input->post("T1"),
						);
		$this->m_index->tambah_pengguna($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('dashboard/pengguna'));
	}

	public function edit_pengguna($id) {
		$data['anggota'] = $this->m_index->get_anggota();
		$data['edit_pengguna'] = $this->m_index->getEdit_pengguna($id);
		$data['isi'] = "edit/edit_pengguna.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_edit_pengguna() {
		$id = $this->input->post("H1");
		$data = array ("pengguna_username" => $this->input->post("T2"),
						"pengguna_password" => base64_encode($this->input->post("T3")),
						"pengguna_level" => $this->input->post("C1"),
						"pengguna_blokir" => $this->input->post("C2"),
						"pengguna_tglupdate" => date("y-m-d", strtotime($this->input->post("T4"))),
						"anggota_id" => $this->input->post("T1"),
						);
		$this->m_index->edit_pengguna($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('dashboard/pengguna'));
	}

	public function proses_hapus_pengguna($id) {
		$this->m_index->hapus_pengguna($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('dashboard/pengguna'));
	}


//Register
	public function register() {
		$this->load->view('template/register');
	}

	public function tambah_register() {
		$data = array ("pengguna_username" => $this->input->post("T2"),
						"pengguna_password" => base64_encode($this->input->post("T3")),
						"pengguna_level" =>4,
						"pengguna_blokir" =>"Y",
						"pengguna_tglupdate" => date("y-m-d"),
						);
		$this->m_index->tambah_pengguna($data);
		redirect(site_url('dashboard'));
	}


//Ganti Password
	public function ganti_password() {
		$this->load->view('menu/ganti_password');
	}

	public function proses_ganti_password() {
		$id = $this->session->userdata('ganti');
		$data = array ("pengguna_password" => base64_encode($this->input->post("T3")),
						);
		$this->m_index->edit_pengguna($data, $id);
		redirect(site_url('dashboard'));
	}

}
?>