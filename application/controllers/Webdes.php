<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Webdes extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
		$this->load->model('m_webdes');
		
	}

//BACKEND WEBDES --------------------------------------------------------------------------
	public function index(){
		$data['isi'] = "webdes/home.php";
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['visi']=$this->m_webdes->tampil_home_visi_misi();
		$data['sejarah']=$this->m_webdes->tampil_home_sejarah();
		$data['wilayah']=$this->m_webdes->tampil_home_wilayah();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['berita']=$this->m_webdes->tampil_home_berita();
		foreach ($data['sosmed']->result() as $dataYoutube){
			$data['youtube']=$this->m_webdes->convertYoutube($dataYoutube->youtube);
		};
		$this->load->view('webdes/backend',$data);
	}

//PAGE PROFIL ---------------------------------------------------------------------------
	public function page_profil() {
		$data['isi'] = "webdes/page/profil.php";
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['visi']=$this->m_webdes->tampil_home_visi_misi();
		$data['sejarah']=$this->m_webdes->tampil_home_sejarah();
		$data['wilayah']=$this->m_webdes->tampil_home_wilayah();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['linmas']=$this->m_webdes->tampil_home_linmas();
		$data['potensi']=$this->m_webdes->tampil_profil_potensi();
		$data['anggota'] = $this->m_index->get_anggota();
		$this->load->view('webdes/backend', $data);
	}

//PAGE LEMBAGA ---------------------------------------------------------------------------
	public function page_lembaga() {
		$data['isi'] = "webdes/page/lembaga.php";
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['linmas']=$this->m_webdes->tampil_linmas();
		$data['lkmd']=$this->m_webdes->tampil_lkmd();
		$data['taruna']=$this->m_webdes->tampil_taruna();
		$data['pkk']=$this->m_webdes->tampil_pkk();
		$this->load->view('webdes/backend', $data);
	}

//PAGE POTENSI ---------------------------------------------------------------------------
	public function page_potensi() {
		$data['isi'] = "webdes/page/potensi.php";
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['potensi']=$this->m_webdes->tampil_profil_potensi();
		$this->load->view('webdes/backend', $data);
	}

//PAGE BERITA ---------------------------------------------------------------------------
	//Read More----------------------------------
	public function read_more($id) {
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['berita']=$this->m_webdes->read_more($id)->row();
		$data['isi'] = 'webdes/page/read_more.php';
		$this->load->view('webdes/backend',$data);
	}

	//Semua Berita-------------------------------------
	public function page_berita(){
		$data['isi'] = 'webdes/page/berita.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['berita'] = $this->m_webdes->tampil_semua_berita($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita');
	     $config['total_rows'] = $this->m_webdes->tampil_semua_page()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA MANCANEGARA ---------------------------------------------------------
	public function page_berita_mancanegara(){
		$data['isi'] = 'webdes/page/kategori/mancanegara.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['mancanegara'] = $this->m_webdes->tampil_berita_mancanegara($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_mancanegara');
	     $config['total_rows'] = $this->m_webdes->tampil_page_mancanegara()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA DALAM NEGERI ---------------------------------------------------------
	public function page_berita_negeri(){
		$data['isi'] = 'webdes/page/kategori/negeri.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['negeri'] = $this->m_webdes->tampil_berita_negeri($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_negeri');
	     $config['total_rows'] = $this->m_webdes->tampil_page_negeri()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA DESA ---------------------------------------------------------
	public function page_berita_desa(){
		$data['isi'] = 'webdes/page/kategori/desa.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['desa'] = $this->m_webdes->tampil_berita_desa($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_desa');
	     $config['total_rows'] = $this->m_webdes->tampil_page_desa()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA POLITIK ---------------------------------------------------------
	public function page_berita_politik(){
		$data['isi'] = 'webdes/page/kategori/politik.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['politik'] = $this->m_webdes->tampil_berita_politik($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_politik');
	     $config['total_rows'] = $this->m_webdes->tampil_page_politik()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA KULINER ---------------------------------------------------------
	public function page_berita_kuliner(){
		$data['isi'] = 'webdes/page/kategori/kuliner.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['kuliner'] = $this->m_webdes->tampil_berita_kuliner($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_kuliner');
	     $config['total_rows'] = $this->m_webdes->tampil_page_kuliner()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA OLAHRAGA ---------------------------------------------------------
	public function page_berita_olahraga(){
		$data['isi'] = 'webdes/page/kategori/olahraga.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['olahraga'] = $this->m_webdes->tampil_berita_olahraga($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_olahraga');
	     $config['total_rows'] = $this->m_webdes->tampil_page_olahraga()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA PENDIDIKAN ---------------------------------------------------------
	public function page_berita_pendidikan(){
		$data['isi'] = 'webdes/page/kategori/pendidikan.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['pendidikan'] = $this->m_webdes->tampil_berita_pendidikan($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_pendidikan');
	     $config['total_rows'] = $this->m_webdes->tampil_page_pendidikan()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA TEKNOLOGI ---------------------------------------------------------
	public function page_berita_teknologi(){
		$data['isi'] = 'webdes/page/kategori/teknologi.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['teknologi'] = $this->m_webdes->tampil_berita_teknologi($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_teknologi');
	     $config['total_rows'] = $this->m_webdes->tampil_page_teknologi()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA GAYA HIDUP ---------------------------------------------------------
	public function page_berita_hidup(){
		$data['isi'] = 'webdes/page/kategori/hidup.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['hidup'] = $this->m_webdes->tampil_berita_hidup($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_hidup');
	     $config['total_rows'] = $this->m_webdes->tampil_page_hidup()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//PAGE BERITA TRAVELING ---------------------------------------------------------
	public function page_berita_traveling(){
		$data['isi'] = 'webdes/page/kategori/traveling.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 5;
	    $offset = $this->uri->segment(3);
	    $data['traveling'] = $this->m_webdes->tampil_berita_traveling($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_berita_traveling');
	     $config['total_rows'] = $this->m_webdes->tampil_page_traveling()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

//PAGE DATA PENDUDUK --------------------------------------------------------------------------
	//DATA PENDUUDUK ----------------------------------------------------
	public function page_data(){
		$data['isi'] = 'webdes/page/data_penduduk.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 15;
	    $offset = $this->uri->segment(3);
	    $data['penduduk'] = $this->m_webdes->tampil_penduduk($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_data');
	     $config['total_rows'] = $this->m_webdes->tampil_page_penduduk()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}

	//DATA PENDIDIKAN ----------------------------------------------------
	public function data_pendidikan(){
		$data['isi'] = 'webdes/page/data/data_pendidikan.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 15;
	    $offset = $this->uri->segment(3);
	    $data['pendidikan'] = $this->m_webdes->tampil_pendidikan($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_pendidikan');
	     $config['total_rows'] = $this->m_webdes->tampil_data_pendidikan()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}


	//DATA PEKERJAAN ----------------------------------------------------
	public function data_pekerjaan(){
		$data['isi'] = 'webdes/page/data/data_pekerjaan.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();

		$perpage = 100;
	    $offset = $this->uri->segment(3);
	    $data['pekerjaan'] = $this->m_webdes->tampil_pekerjaan($perpage, $offset);

	     $config['base_url'] = site_url('webdes/page_pekerjaan');
	     $config['total_rows'] = $this->m_webdes->tampil_data_pekerjaan()->num_rows();
	     $config['per_page'] = $perpage;

	     $config['first_link']       = 'First';
         $config['last_link']        = 'Last';
         $config['next_link']        = 'Next';
         $config['prev_link']        = 'Prev';
         $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
         $config['full_tag_close']   = '</ul></nav></div>';
         $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
         $config['num_tag_close']    = '</span></li>';
         $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
         $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
         $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
         $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['prev_tagl_close']  = '</span>Next</li>';
         $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
         $config['first_tagl_close'] = '</span></li>';
         $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
         $config['last_tagl_close']  = '</span></li>';
	     $this->pagination->initialize($config);

		$this->load->view('webdes/backend', $data);
	}


	//DATA USIA ----------------------------------------------------
	public function data_usia(){
		$data['isi'] = 'webdes/page/data/data_usia.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['usia'] = $this->m_webdes->tampil_usia();
		$this->load->view('webdes/backend', $data);
	}

	//DATA KELAMIN ----------------------------------------------------
	public function data_kelamin(){
		$data['isi'] = 'webdes/page/data/data_kelamin.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['kelamin'] = $this->m_webdes->tampil_kelamin();
		$this->load->view('webdes/backend', $data);
	}

	//DATA WAFAT ----------------------------------------------------
	public function data_kematian(){
		$data['isi'] = 'webdes/page/data/data_kematian.php';
     	$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['wafat'] = $this->m_webdes->get_penduduk_wafat();
		$this->load->view('webdes/backend', $data);
	}



	

//ADMIN -------------------------------------------------------------------------------------

//Visi Misi ------------------------------------------------------------
	public function visi_misi() {
		$this->m_index->cekLogin();
		$data['visi_misi'] = $this->m_webdes->get_visi_misi();
		$data['isi'] = "webdes/admin/visi_misi/visi_misi.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_visi_misi() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/visi_misi/tambah_visi_misi.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_visi_misi() {
		$config['upload_path'] = './assets/foto_visi_misi'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_visi_misi'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_visi_misi'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("visi" => $this->input->post("visi"),
								"misi" => $this->input->post("misi"),
								"tgl_update" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("visi" => $this->input->post("visi"),
								"misi" => $this->input->post("misi"),
								"tgl_update" => date('Y-m-d'),
								);
			}
				$this->m_webdes->tambah_visi_misi($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('webdes/visi_misi'));
		}

	public function edit_visi_misi($id) {
		$this->m_index->cekLogin();
		$data ['edit_visi_misi'] = $this->m_webdes->getEdit_visi_misi($id);
		$data ['isi'] = "webdes/admin/visi_misi/edit_visi_misi.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_visi_misi() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("visi" => $this->input->post("visi"),
								"misi" => $this->input->post("misi"),
								"foto" => $photo_lama,
								);
			$this->m_webdes->edit_visi_misi($data, $id);
			$data['msg'] = "Data Berhasil di Rubah";
			$data['visi_misi']=$this->m_webdes->get_visi_misi();
			$data['isi'] = "webdes/admin/visi_misi/visi_misi.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/foto_visi_misi'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_visi_misi'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_visi_misi'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("visi" => $this->input->post("visi"),
								"misi" => $this->input->post("misi"),
								"foto" => $gbr['file_name'],
							);
				$gambar = $this->m_webdes->gambar($id);
				unlink('assets/foto_visi_misi/'.$gambar->foto); //Menghapus gambar lama
				$this->m_webdes->edit_visi_misi($data, $id);
				redirect(site_url('webdes/visi_misi'));
			}
		}
	}

	public function proses_hapus_visi_misi($id) {
		$gambar= $this->m_webdes->gambar($id);
		unlink('assets/foto_visi_misi/'.$gambar->foto);
		$this->m_webdes->hapus_visi_misi($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/visi_misi'));
	}


//Sejarah ---------------------------------------------------------------
	public function sejarah() {
		$this->m_index->cekLogin();
		$data['sejarah'] = $this->m_webdes->get_sejarah();
		$data['isi'] = "webdes/admin/sejarah/sejarah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_sejarah() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/sejarah/tambah_sejarah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_sejarah() {
		$config['upload_path'] = './assets/foto_sejarah'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_sejarah'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_sejarah'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("konten" => $this->input->post("konten"),
								"tgl_update" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("konten" => $this->input->post("konten"),
								"tgl_update" => date('Y-m-d'),
								);
			}
				$this->m_webdes->tambah_sejarah($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('webdes/sejarah'));
		}

	public function edit_sejarah($id) {
		$this->m_index->cekLogin();
		$data ['edit_sejarah'] = $this->m_webdes->getEdit_sejarah($id);
		$data ['isi'] = "webdes/admin/sejarah/edit_sejarah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_sejarah() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("konten" => $this->input->post("konten"),
								"foto" => $photo_lama,
								);
			$this->m_webdes->edit_sejarah($data, $id);
			$data['msg'] = "Data Berhasil di Rubah";
			$data['sejarah']=$this->m_webdes->get_sejarah();
			$data['isi'] = "webdes/admin/sejarah/sejarah.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/foto_sejarah'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_sejarah'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_sejarah'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("konten" => $this->input->post("konten"),
								"foto" => $gbr['file_name'],
							);
				$gambar = $this->m_webdes->gambar_sejarah($id);
				unlink('assets/foto_sejarah/'.$gambar->foto); //Menghapus gambar lama
				$this->m_webdes->edit_sejarah($data, $id);
				redirect(site_url('webdes/sejarah'));
			}
		}
	}

	public function proses_hapus_sejarah($id) {
		$gambar= $this->m_webdes->gambar_sejarah($id);
		unlink('assets/foto_sejarah/'.$gambar->foto);
		$this->m_webdes->hapus_sejarah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/sejarah'));
	}


//Profil Wilayah Desa ---------------------------------------------------------------
	public function wilayah() {
		$this->m_index->cekLogin();
		$data['wilayah'] = $this->m_webdes->get_wilayah();
		$data['isi'] = "webdes/admin/wilayah/wilayah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_wilayah() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/wilayah/tambah_wilayah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_wilayah() {
		$config['upload_path'] = './assets/foto_wilayah'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_wilayah'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_wilayah'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("luas_wilayah" => $this->input->post("luas_wilayah"),
							   "luas_pemukiman" => $this->input->post("luas_pemukiman"),
							   "luas_persawahan" => $this->input->post("luas_persawahan"),
							   "luas_perkebunan" => $this->input->post("luas_perkebunan"),
							   "luas_pekarangan" => $this->input->post("luas_pekarangan"),
							   "luas_tanaman" => $this->input->post("luas_tanaman"),
							   "luas_perkantoran" => $this->input->post("luas_perkantoran"),
							   "luas_lainnya" => $this->input->post("luas_lainnya"),
							   "batas_utara" => $this->input->post("batas_utara"),
							   "batas_selatan" => $this->input->post("batas_selatan"),
							   "batas_timur" => $this->input->post("batas_timur"),
							   "batas_barat" => $this->input->post("batas_barat"),
								"tgl_update" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("luas_wilayah" => $this->input->post("luas_wilayah"),
							   "luas_pemukiman" => $this->input->post("luas_pemukiman"),
							   "luas_persawahan" => $this->input->post("luas_persawahan"),
							   "luas_perkebunan" => $this->input->post("luas_perkebunan"),
							   "luas_pekarangan" => $this->input->post("luas_pekarangan"),
							   "luas_tanaman" => $this->input->post("luas_tanaman"),
							   "luas_perkantoran" => $this->input->post("luas_perkantoran"),
							   "luas_lainnya" => $this->input->post("luas_lainnya"),
							   "batas_utara" => $this->input->post("batas_utara"),
							   "batas_selatan" => $this->input->post("batas_selatan"),
							   "batas_timur" => $this->input->post("batas_timur"),
							   "batas_barat" => $this->input->post("batas_barat"),
								"tgl_update" => date('Y-m-d'),
								);
			}
				$this->m_webdes->tambah_wilayah($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('webdes/wilayah'));
		}

	public function edit_wilayah($id) {
		$this->m_index->cekLogin();
		$data ['edit_wilayah'] = $this->m_webdes->getEdit_wilayah($id);
		$data ['isi'] = "webdes/admin/wilayah/edit_wilayah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_wilayah() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("luas_wilayah" => $this->input->post("luas_wilayah"),
							   "luas_pemukiman" => $this->input->post("luas_pemukiman"),
							   "luas_persawahan" => $this->input->post("luas_persawahan"),
							   "luas_perkebunan" => $this->input->post("luas_perkebunan"),
							   "luas_pekarangan" => $this->input->post("luas_pekarangan"),
							   "luas_tanaman" => $this->input->post("luas_tanaman"),
							   "luas_perkantoran" => $this->input->post("luas_perkantoran"),
							   "luas_lainnya" => $this->input->post("luas_lainnya"),
							   "batas_utara" => $this->input->post("batas_utara"),
							   "batas_selatan" => $this->input->post("batas_selatan"),
							   "batas_timur" => $this->input->post("batas_timur"),
							   "batas_barat" => $this->input->post("batas_barat"),
								"foto" => $photo_lama,
								);
			$this->m_webdes->edit_wilayah($data, $id);
			$data['msg'] = "Data Berhasil di Rubah";
			$data['wilayah']=$this->m_webdes->get_wilayah();
			$data['isi'] = "webdes/admin/wilayah/wilayah.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/foto_wilayah'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_wilayah'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_wilayah'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("luas_wilayah" => $this->input->post("luas_wilayah"),
							   "luas_pemukiman" => $this->input->post("luas_pemukiman"),
							   "luas_persawahan" => $this->input->post("luas_persawahan"),
							   "luas_perkebunan" => $this->input->post("luas_perkebunan"),
							   "luas_pekarangan" => $this->input->post("luas_pekarangan"),
							   "luas_tanaman" => $this->input->post("luas_tanaman"),
							   "luas_perkantoran" => $this->input->post("luas_perkantoran"),
							   "luas_lainnya" => $this->input->post("luas_lainnya"),
							   "batas_utara" => $this->input->post("batas_utara"),
							   "batas_selatan" => $this->input->post("batas_selatan"),
							   "batas_timur" => $this->input->post("batas_timur"),
							   "batas_barat" => $this->input->post("batas_barat"),
								"foto" => $gbr['file_name'],
							);
				$gambar = $this->m_webdes->gambar_wilayah($id);
				unlink('assets/foto_wilayah/'.$gambar->foto); //Menghapus gambar lama
				$this->m_webdes->edit_wilayah($data, $id);
				redirect(site_url('webdes/wilayah'));
			}
		}
	}

	public function proses_hapus_wilayah($id) {
		$gambar= $this->m_webdes->gambar_wilayah($id);
		unlink('assets/foto_wilayah/'.$gambar->foto);
		$this->m_webdes->hapus_wilayah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/wilayah'));
	}



//Profil Wilayah Desa ---------------------------------------------------------------
	public function berita() {
		$this->m_index->cekLogin();
		$data['berita'] = $this->m_webdes->get_berita();
		$data['isi'] = "webdes/admin/berita/berita.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_berita() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/berita/tambah_berita.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_berita() {
		$config['upload_path'] = './assets/foto_berita'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_berita'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_berita'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("judul" => $this->input->post("judul"),
							   "sub_judul" => $this->input->post("sub_judul"),
							   "artikel" => $this->input->post("artikel"),
							   "tipe_berita" => $this->input->post("tipe_berita"),
							   "sumber" => $this->input->post("sumber"),
								"tgl_berita" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("judul" => $this->input->post("judul"),
							   "sub_judul" => $this->input->post("sub_judul"),
							   "artikel" => $this->input->post("artikel"),
							   "tipe_berita" => $this->input->post("tipe_berita"),
							   "sumber" => $this->input->post("sumber"),
								"tgl_berita" => date('Y-m-d'),
								);
			}
				$this->m_webdes->tambah_berita($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('webdes/berita'));
		}

	public function edit_berita($id) {
		$this->m_index->cekLogin();
		$data ['edit_berita'] = $this->m_webdes->getEdit_berita($id);
		$data ['isi'] = "webdes/admin/berita/edit_berita.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_berita() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("judul" => $this->input->post("judul"),
							   "sub_judul" => $this->input->post("sub_judul"),
							   "artikel" => $this->input->post("artikel"),
							   "tipe_berita" => $this->input->post("tipe_berita"),
							   "sumber" => $this->input->post("sumber"),
								"tgl_berita" => date('Y-m-d'),
								"foto" => $photo_lama,
								);
			$this->m_webdes->edit_berita($data, $id);
			$data['msg'] = "Data Berhasil di Rubah";
			$data['berita']=$this->m_webdes->get_berita();
			$data['isi'] = "webdes/admin/berita/berita.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/foto_berita'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_berita'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_berita'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("judul" => $this->input->post("judul"),
							   "sub_judul" => $this->input->post("sub_judul"),
							   "artikel" => $this->input->post("artikel"),
							   "tipe_berita" => $this->input->post("tipe_berita"),
							   "sumber" => $this->input->post("sumber"),
								"tgl_berita" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
							);
				$gambar = $this->m_webdes->gambar_berita($id);
				unlink('assets/foto_berita/'.$gambar->foto); //Menghapus gambar lama
				$this->m_webdes->edit_berita($data, $id);
				redirect(site_url('webdes/berita'));
			}
		}
	}

	public function proses_hapus_berita($id) {
		$gambar= $this->m_webdes->gambar_berita($id);
		unlink('assets/foto_berita/'.$gambar->foto);
		$this->m_webdes->hapus_berita($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/berita'));
	}



//Potensi Desa ---------------------------------------------------------------
	public function potensi() {
		$this->m_index->cekLogin();
		$data['potensi'] = $this->m_webdes->get_potensi();
		$data['isi'] = "webdes/admin/potensi/potensi.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_potensi() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/potensi/tambah_potensi.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_potensi() {
		$config['upload_path'] = './assets/foto_potensi'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_potensi'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_potensi'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array ("potensi_sda" => $this->input->post("potensi_sda"),
							   "potensi_sdm" => $this->input->post("potensi_sdm"),
							   "potensi_sosial" => $this->input->post("potensi_sosial"),
							   "potensi_ekonomi" => $this->input->post("potensi_ekonomi"),
							   "keterangan" => $this->input->post("keterangan"),
								"tgl_update" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
								);
			}else{
				echo "Image yang diupload kosong";
			}
			}else{
				$data = array ("potensi_sda" => $this->input->post("potensi_sda"),
							   "potensi_sdm" => $this->input->post("potensi_sdm"),
							   "potensi_sosial" => $this->input->post("potensi_sosial"),
							   "potensi_ekonomi" => $this->input->post("potensi_ekonomi"),
							   "keterangan" => $this->input->post("keterangan"),
								"tgl_update" => date('Y-m-d'),
								);
			}
				$this->m_webdes->tambah_potensi($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
				redirect(site_url('webdes/potensi'));
		}

	public function edit_potensi($id) {
		$this->m_index->cekLogin();
		$data ['edit_potensi'] = $this->m_webdes->getEdit_potensi($id);
		$data ['isi'] = "webdes/admin/potensi/edit_potensi.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_potensi() {
		if (empty($_FILES['F1']['name'])) {
			$id = $this->input->post("H1");
			$photo_lama = $this->input->post("H2");
				$data = array ("potensi_sda" => $this->input->post("potensi_sda"),
							   "potensi_sdm" => $this->input->post("potensi_sdm"),
							   "potensi_sosial" => $this->input->post("potensi_sosial"),
							   "potensi_ekonomi" => $this->input->post("potensi_ekonomi"),
							   "keterangan" => $this->input->post("keterangan"),
								"tgl_update" => date('Y-m-d'),
								"foto" => $photo_lama,
								);
			$this->m_webdes->edit_potensi($data, $id);
			$data['msg'] = "Data Berhasil di Rubah";
			$data['potensi']=$this->m_webdes->get_potensi();
			$data['isi'] = "webdes/admin/potensi/potensi.php";
			$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
			$this->load->view('template/utama', $data);
		}else{
			$config['upload_path'] = './assets/foto_potensi'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_potensi'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_potensi'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("potensi_sda" => $this->input->post("potensi_sda"),
							   "potensi_sdm" => $this->input->post("potensi_sdm"),
							   "potensi_sosial" => $this->input->post("potensi_sosial"),
							   "potensi_ekonomi" => $this->input->post("potensi_ekonomi"),
							   "keterangan" => $this->input->post("keterangan"),
								"tgl_update" => date('Y-m-d'),
								"foto" => $gbr['file_name'],
							);
				$gambar = $this->m_webdes->gambar_potensi($id);
				unlink('assets/foto_potensi/'.$gambar->foto); //Menghapus gambar lama
				$this->m_webdes->edit_potensi($data, $id);
				redirect(site_url('webdes/potensi'));
			}
		}
	}

	public function proses_hapus_potensi($id) {
		$gambar= $this->m_webdes->gambar_potensi($id);
		unlink('assets/foto_potensi/'.$gambar->foto);
		$this->m_webdes->hapus_potensi($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/potensi'));
	}


//LKMD ------------------------------------------------------------------------------
	public function lkmd() {
		$this->m_index->cekLogin();
		$data['lkmd'] = $this->m_webdes->get_lkmd();
		$data['isi'] = "webdes/admin/lkmd/lkmd.php";
		$this->load->view('template/utama', $data);
	}

	public function tambah_lkmd() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/lkmd/tambah_lkmd.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_tambah_lkmd() {
		$data = array ("jabatan" => $this->input->post("jabatan"),
						"nama_pengurus" => $this->input->post("nama_pengurus"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->tambah_lkmd($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('webdes/lkmd'));
	}

	public function edit_lkmd($id) {
		$this->m_index->cekLogin();
		$data['edit_lkmd'] = $this->m_webdes->getEdit_lkmd($id);
		$data['isi'] = "webdes/admin/lkmd/edit_lkmd.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_edit_lkmd() {
		$id = $this->input->post("H1");
		$data = array ("jabatan" => $this->input->post("jabatan"),
						"nama_pengurus" => $this->input->post("nama_pengurus"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->edit_lkmd($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('webdes/lkmd'));
	}

	public function proses_hapus_lkmd($id) {
		$this->m_webdes->hapus_lkmd($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/lkmd'));
	}


//KARANG TARUNA ------------------------------------------------------------------------------
	public function taruna() {
		$this->m_index->cekLogin();
		$data['taruna'] = $this->m_webdes->get_taruna();
		$data['isi'] = "webdes/admin/taruna/taruna.php";
		$this->load->view('template/utama', $data);
	}

	public function tambah_taruna() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/taruna/tambah_taruna.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_tambah_taruna() {
		$data = array ("jabatan" => $this->input->post("jabatan"),
						"nama_pengurus" => $this->input->post("nama_pengurus"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->tambah_taruna($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('webdes/taruna'));
	}

	public function edit_taruna($id) {
		$this->m_index->cekLogin();
		$data['edit_taruna'] = $this->m_webdes->getEdit_taruna($id);
		$data['isi'] = "webdes/admin/taruna/edit_taruna.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_edit_taruna() {
		$id = $this->input->post("H1");
		$data = array ("jabatan" => $this->input->post("jabatan"),
						"nama_pengurus" => $this->input->post("nama_pengurus"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->edit_taruna($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('webdes/taruna'));
	}

	public function proses_hapus_taruna($id) {
		$this->m_webdes->hapus_taruna($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/taruna'));
	}


//LINMAS ------------------------------------------------------------------------------
	public function linmas() {
		$this->m_index->cekLogin();
		$data['linmas'] = $this->m_webdes->get_linmas();
		$data['isi'] = "webdes/admin/linmas/linmas.php";
		$this->load->view('template/utama', $data);
	}

	public function tambah_linmas() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/linmas/tambah_linmas.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_tambah_linmas() {
		$data = array ("nama" => $this->input->post("nama"),
						"jabatan" => $this->input->post("jabatan"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->tambah_linmas($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('webdes/linmas'));
	}

	public function edit_linmas($id) {
		$this->m_index->cekLogin();
		$data['edit_linmas'] = $this->m_webdes->getEdit_linmas($id);
		$data['isi'] = "webdes/admin/linmas/edit_linmas.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_edit_linmas() {
		$id = $this->input->post("H1");
		$data = array ("nama" => $this->input->post("nama"),
						"jabatan" => $this->input->post("jabatan"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->edit_linmas($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('webdes/linmas'));
	}

	public function proses_hapus_linmas($id) {
		$this->m_webdes->hapus_linmas($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/linmas'));
	}



//PKK ------------------------------------------------------------------------------
	public function pkk() {
		$this->m_index->cekLogin();
		$data['pkk'] = $this->m_webdes->get_pkk();
		$data['isi'] = "webdes/admin/pkk/pkk.php";
		$this->load->view('template/utama', $data);
	}

	public function tambah_pkk() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/pkk/tambah_pkk.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_tambah_pkk() {
		$data = array ("nama" => $this->input->post("nama"),
						"jabatan" => $this->input->post("jabatan"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->tambah_pkk($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('webdes/pkk'));
	}

	public function edit_pkk($id) {
		$this->m_index->cekLogin();
		$data['edit_pkk'] = $this->m_webdes->getEdit_pkk($id);
		$data['isi'] = "webdes/admin/pkk/edit_pkk.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_edit_pkk() {
		$id = $this->input->post("H1");
		$data = array ("nama" => $this->input->post("nama"),
						"jabatan" => $this->input->post("jabatan"),
						"alamat" => $this->input->post("alamat"),
						"tgl_bergabung" => date("y-m-d", strtotime($this->input->post("tgl_bergabung"))),
						);
		$this->m_webdes->edit_pkk($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('webdes/pkk'));
	}

	public function proses_hapus_pkk($id) {
		$this->m_webdes->hapus_pkk($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/pkk'));
	}


//SOSMED ------------------------------------------------------------------------------
	public function sosmed() {
		$this->m_index->cekLogin();
		$data['sosmed'] = $this->m_webdes->get_sosmed();
		$data['isi'] = "webdes/admin/sosmed/sosmed.php";
		$this->load->view('template/utama', $data);
	}

	public function tambah_sosmed() {
		$this->m_index->cekLogin();
		$data['isi'] = "webdes/admin/sosmed/tambah_sosmed.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_tambah_sosmed() {
		$data = array ("facebook" => $this->input->post("facebook"),
						"youtube" => $this->input->post("youtube"),
						"instagram" => $this->input->post("instagram"),
						);
		$this->m_webdes->tambah_sosmed($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('webdes/sosmed'));
	}

	public function edit_sosmed($id) {
		$this->m_index->cekLogin();
		$data['edit_sosmed'] = $this->m_webdes->getEdit_sosmed($id);
		$data['isi'] = "webdes/admin/sosmed/edit_sosmed.php";
		$this->load->view('template/utama', $data);
	}

	public function proses_edit_sosmed() {
		$id = $this->input->post("H1");
		$data = array ("facebook" => $this->input->post("facebook"),
						"youtube" => $this->input->post("youtube"),
						"instagram" => $this->input->post("instagram"),
						);
		$this->m_webdes->edit_sosmed($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('webdes/sosmed'));
	}

	public function proses_hapus_sosmed($id) {
		$this->m_webdes->hapus_sosmed($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/sosmed'));
	}


//SARAN DAN KRITIK --------------------------------------------------
	public function saran() {
		$this->m_index->cekLogin();
		$data['saran'] = $this->m_webdes->get_saran();
		$data['isi'] = "webdes/admin/saran/saran.php";
		$this->load->view('template/utama', $data);
	}

	public function notif_saran(){
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
	    $data['isi'] = "webdes/page/notif_saran.php";
	    $this->load->view('webdes/backend',$data);
	}

	public function page_kontak() {
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['home1']=$this->m_webdes->tampil_home_header1();
		$data['home2']=$this->m_webdes->tampil_home_header2();
		$data['sosmed']=$this->m_webdes->tampil_home_sosmed();
		$data['isi'] = "webdes/page/kontak.php";
		$this->load->view('webdes/backend', $data);
	}

	public function proses_tambah_saran() {
		$data = array ("nik" => $this->input->post("nik"),
						"nama" => $this->input->post("nama"),
						"email" => $this->input->post("email"),
						"isi_saran" => $this->input->post("isi_saran"),
						"tgl_saran" => date('Y-m-d'),
						);
		$this->m_webdes->tambah_saran($data);
		redirect(site_url('webdes/notif_saran'));
	}

	public function proses_hapus_saran($id) {
		$this->m_webdes->hapus_saran($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('webdes/saran'));
	}


}
?>