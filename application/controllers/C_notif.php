<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kepdes extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}

//BAGIAN DATA PENDUDUK
	public function notif() {
		$data['notif']=$this->m_index->get_notif();
		$data['isi'] = "menu/home.php";
		$this->load->view('template/utama',$data);
	}

	public function hari_ini() {
		$data['now']=$this->m_index->get_hari_ini();
		$data['isi'] = "menu/home.php";
		$this->load->view('template/utama',$data);
	}

}
?>