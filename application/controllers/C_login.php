<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_login extends CI_Controller {
	function __construct(){
	parent::__construct();

	$this->load->model('m_penjualan');
	$this->load->model('m_pengguna');
}
	public function login(){
		if('pemeriksaan_user_dan_password_benar'){

		$_SESSION['login']=true;

		}
		$this->load->view('template/login');
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
		$cek = $this->m_pengguna->cek_login($where);
		foreach ($cek->result() as $tampil) {
			$status = $tampil->pengguna_blokir;
			$level = $tampil->pengguna_level;
			$nama_pengguna = $tampil->nama_registrasi;
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
				'pengguna' => $nama_pengguna,
				'pengguna_id' => $pengguna_id
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(site_url("c_home/utama"));
 
		}else{
			redirect(site_url('c_home/pass_salah'));
		}

	}
 

 //Logout
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('c_home'));
	}


//Ganti Password
	public function ganti_password() {
		$this->load->view('template/ganti_password');
	}

	public function proses_ganti_password() {
		$id = $this->session->userdata('ganti');
		$data = array ("pengguna_password" => base64_encode($this->input->post("T3")),
						);
		$this->m_pengguna->edit_pengguna($data, $id);
		redirect(site_url('c_home'));
	}

}
?>