<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_ahli_waris extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}



//SURAT AHLI WARIS KIOS -------------------------------------------------------------------------------------------
	function panel_ahli_waris() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_ahli_waris.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_ahli_waris() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_waris($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_meninggal" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$ahli_warisId = $this->m_index->tambah_pelapor($data_nik);
			// $this->m_index->edit_penduduk([ 'deleted_at' => date('Y-m-d') ], $data->id_penduduk);
			$data =  array ("surat" => "Surat Ahli Waris",
							"link" => "c_ahli_waris/pelapor",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_panel/notif_sukses/'. $ahli_warisId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//PELAPOR ADMIN -------------------------------------------------------------------------------------
	public function pelapor() {
	$this->m_index->cekLogin();
	$data['pelapor']=$this->m_index->get_pelapor();
	foreach($this->m_index->statistik_ahli_waris()->result_array() as $row)
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
	$data['isi'] = "ahli_waris/pelapor.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_pelapor(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "ahli_waris/tambah_pelapor.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_pelapor(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_pelapor" => $this->input->post("nama_pelapor"),
						"nik_pelapor" => $this->input->post("nik_pelapor"),
						"tgl_meninggal" => date("Y-m-d",strtotime($this->input->post("tgl_meninggal"))),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_pelapor($data);
		redirect(site_url('c_ahli_waris/pelapor'));
	}

	public function edit_pelapor($id){
		$this->m_index->cekLogin();
		$data['edit_pelapor'] = $this->m_index->getEdit_pelapor($id);
		$data['isi'] = "ahli_waris/edit_pelapor.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_pelapor(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_pelapor" => $this->input->post("nama_pelapor"),
						"nik_pelapor" => $this->input->post("nik_pelapor"),
						"tgl_meninggal" => date("Y-m-d",strtotime($this->input->post("tgl_meninggal"))),
						);
		$this->m_index->edit_pelapor($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_ahli_waris/pelapor'));
	}

	public function proses_hapus_pelapor($id) {
		$this->m_index->hapus_pelapor($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_ahli_waris/pelapor'));
	}


//AHLI WARIS ADMIN ----------------------------------------------------------------------------------------------------
	public function ahli_waris() {
	$this->m_index->cekLogin();
	$data['ahli_waris']=$this->m_index->get_ahli_waris();
	$data['isi'] = "ahli_waris/tambah_ahli_waris.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_ahli_waris($id){
		$this->m_index->cekLogin();
		$data['ahli_waris']=$this->m_index->get_ahli_waris($id);
		$data['pelapor'] = $this->m_index->getEdit_pelapor($id)->row();
		$data['isi'] = "ahli_waris/tambah_ahli_waris.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_ahli_waris(){
		$lapor = $this ->input->post("P1");
		$data =  array ("id_pelapor" => $lapor,
						"nama_ahli" => $this->input->post("nama_ahli"),
						"tempat_lahir_ahli" => $this->input->post("tempat_lahir_ahli"),
						"tanggal_lahir_ahli" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_ahli"))),
						"kelamin_ahli" => $this->input->post("kelamin_ahli"),
						"pekerjaan_ahli" => $this->input->post("pekerjaan_ahli"),
						"alamat_ahli" => $this->input->post("alamat_ahli"),
						"rt_ahli" => $this->input->post("rt_ahli"),
						"rw_ahli" => $this->input->post("rw_ahli"),
						"desa_ahli" => $this->input->post("desa_ahli"),
						"kecamatan_ahli" => $this->input->post("kecamatan_ahli"),
						"kabupaten_ahli" => $this->input->post("kabupaten_ahli"),
						);
		$this->m_index->tambah_ahli_waris($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_ahli_waris/tambah_ahli_waris/'.$lapor));
	}

	public function edit_ahli_waris($id){
		$this->m_index->cekLogin();
		$data['edit_ahli_waris'] = $this->m_index->getEdit_ahli_waris($id);
		$data['isi'] = "ahli_waris/edit_ahli_waris.php";
		$this->load->view('template/utama',$data);
	}


	public function proses_hapus_ahli_waris($id,$lapor) {
		$this->m_index->hapus_ahli_waris($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_ahli_waris/tambah_ahli_waris/'.$lapor));
	}


//EXPORT TO WORD
	public function ahli_waris_word($id) {
		$data['ahli_waris'] = $this->m_index->cetak_ahli_waris($id);
		$data['meninggal'] = $this->m_index->cetak_pelapor($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "ahli_waris/ahli_waris_word.php";
		$this->load->view('template/word',$data);
	}

	public function ahli_waris_word1($id) {
		$data['ahli_waris'] = $this->m_index->cetak_ahli_waris($id);
		$data['meninggal'] = $this->m_index->cetak_pelapor($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "ahli_waris/ahli_waris_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF AHLI WARIS
	public function ahli_waris_cetak($id) {
		ob_start();
		$data['ahli_waris'] = $this->m_index->cetak_ahli_waris($id);
		$data['meninggal'] = $this->m_index->cetak_pelapor($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ahli_waris/cetak_data_ahli_waris', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();
		
		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ahli_waris.pdf', 'P');
	}

//CETAK PDF AHLI WARIS
	public function ahli_waris_cetak1($id) {
		ob_start();
		$data['ahli_waris'] = $this->m_index->cetak_ahli_waris1($id);
		$data['meninggal'] = $this->m_index->cetak_pelapor($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('ahli_waris/cetak_data_ahli_waris1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ahli_waris.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_ahli_waris() {
		$this->m_index->cekLogin();
		$data['isi'] = "ahli_waris/rekap_ahli_waris.php";
		$this->load->view('template/utama', $data);
	}

	public function ahli_waris_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['ahli_waris'] = $this->m_index->rekap_ahli_waris($T1,$T2);
		$data['meninggal'] = $this->m_index->cetak_pelapor($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ahli_waris/rekap_data_ahli_waris', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ahli_waris.pdf', 'P');
	}


}
?>