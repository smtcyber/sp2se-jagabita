<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_daftar_nikah extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT DAFTAR NIKAH KIOS -------------------------------------------------------------------------------------------
	function panel_daftar_nikah() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_daftar_nikah.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_daftar_nikah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_daftar_nikah($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					"tgl_lahir_calon" => date('Y-m-d'),
					"tanggal_pengantar" => date('Y-m-d'),
					"tgl_lahir_ayah" => date('Y-m-d'),
					"tgl_lahir_ibu" => date('Y-m-d'),
					"tgl_lahir_wali" => date('Y-m-d'),
					"tgl_lahir_pasangan_meninggal" => date('Y-m-d'),
					"meninggal_pada" => date('Y-m-d'),
					"tgl_nikah" => date('Y-m-d'),
					);
			}
			$daftar_nikahId = $this->m_index->tambah_daftar_nikah($data_nik);
			$data =  array ("surat" => "Surat Keterangan Daftar Nikah",
							"link" => "c_daftar_nikah/daftar_nikah",
							"tanggal" => date('Y-m-d'),							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $daftar_nikahId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//DAFTAR NIKAH ADMIN -------------------------------------------------------------------------
	public function daftar_nikah() {
		$this->m_index->cekLogin();
		$data['daftar_nikah']=$this->m_index->get_daftar_nikah();
		foreach($this->m_index->statistik_daftar_nikah()->result_array() as $row)
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
		$data['isi'] = "daftar_nikah/daftar_nikah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_daftar_nikah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "daftar_nikah/tambah_daftar_nikah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_daftar_nikah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_calon" => $this->input->post("nama_calon"),
						"nik_calon" => $this->input->post("nik_calon"),
						"tmpt_lahir_calon" => $this->input->post("tmpt_lahir_calon"),
						"tgl_lahir_calon" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_calon"))),
						"jenis_kelamin_calon" => $this->input->post("jenis_kelamin_calon"),
						"kewarganegaraan_calon" => $this->input->post("kewarganegaraan_calon"),
						"agama_calon" => $this->input->post("agama_calon"),
						"pekerjaan_calon" => $this->input->post("pekerjaan_calon"),
						"nama_wali_calon" => $this->input->post("nama_wali_calon"),
						"alamat_calon" => $this->input->post("alamat_calon"),
						"rt_calon" => $this->input->post("rt_calon"),
						"rw_calon" => $this->input->post("rw_calon"),
						"desa_calon" => $this->input->post("desa_calon"),
						"kecamatan_calon" => $this->input->post("kecamatan_calon"),
						"kabupaten_calon" => $this->input->post("kabupaten_calon"),
						"status_diri_cwo" => $this->input->post("status_diri_cwo"),
						"status_diri_cwe" => $this->input->post("status_diri_cwe"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"nama_pasangan_dulu" => $this->input->post("nama_pasangan_dulu"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"tmpt_lahir_ayah" => $this->input->post("tmpt_lahir_ayah"),
						"tgl_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ayah"))),
						"kewarganegaraan_ayah" => $this->input->post("kewarganegaraan_ayah"),
						"agama_ayah" => $this->input->post("agama_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"tmpt_lahir_ibu" => $this->input->post("tmpt_lahir_ibu"),
						"tgl_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ibu"))),
						"kewarganegaraan_ibu" => $this->input->post("kewarganegaraan_ibu"),
						"agama_ibu" => $this->input->post("agama_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"nama_wali" => $this->input->post("nama_wali"),
						"bin_binti_wali" => $this->input->post("bin_binti_wali"),
						"tmpt_lahir_wali" => $this->input->post("tmpt_lahir_wali"),
						"tgl_lahir_wali" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_wali"))),
						"agama_wali" => $this->input->post("agama_wali"),
						"pekerjaan_wali" => $this->input->post("pekerjaan_wali"),
						"alamat_wali" => $this->input->post("alamat_wali"),
						"status_wali" => $this->input->post("status_wali"),
						"saksi1" => $this->input->post("saksi1"),
						"umur_saksi1" => $this->input->post("umur_saksi1"),
						"pekerjaan_saksi1" => $this->input->post("pekerjaan_saksi1"),
						"alamat_saksi1" => $this->input->post("alamat_saksi1"),
						"saksi2" => $this->input->post("saksi2"),
						"umur_saksi2" => $this->input->post("umur_saksi2"),
						"pekerjaan_saksi2" => $this->input->post("pekerjaan_saksi2"),
						"alamat_saksi2" => $this->input->post("alamat_saksi2"),
						"nama_pasangan_meninggal" => $this->input->post("nama_pasangan_meninggal"),
						"bin_binti_pasangan_meninggal" => $this->input->post("bin_binti_pasangan_meninggal"),
						"tmpt_lahir_pasangan_meninggal" => $this->input->post("tmpt_lahir_pasangan_meninggal"),
						"tgl_lahir_pasangan_meninggal" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_pasangan_meninggal"))),
						"kewarganegaraan_pasangan_meninggal" => $this->input->post("kewarganegaraan_pasangan_meninggal"),
						"agama_pasangan_meninggal" => $this->input->post("agama_pasangan_meninggal"),
						"pekerjaan_pasangan_meninggal" => $this->input->post("pekerjaan_pasangan_meninggal"),
						"tempat_tinggal_pasangan_meninggal" => $this->input->post("tempat_tinggal_pasangan_meninggal"),
						"meninggal_pada" => date("Y-m-d",strtotime($this->input->post("meninggal_pada"))),
						"meninggal_di" => $this->input->post("meninggal_di"),
						"hari_nikah" => $this->input->post("hari_nikah"),
						"tgl_nikah" => date("Y-m-d",strtotime($this->input->post("tgl_nikah"))),
						"waktu_nikah_mulai" => $this->input->post("waktu_nikah_mulai"),
						"waktu_nikah_selesai" => $this->input->post("waktu_nikah_selesai"),
						"maskawin" => $this->input->post("maskawin"),
						"tempat_nikah" => $this->input->post("tempat_nikah"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_daftar_nikah($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_daftar_nikah/daftar_nikah'));
	}

	public function edit_daftar_nikah($id){
		$this->m_index->cekLogin();
		$data['edit_daftar_nikah'] = $this->m_index->getEdit_daftar_nikah($id);
		$data['isi'] = "daftar_nikah/edit_daftar_nikah.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_daftar_nikah(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_calon" => $this->input->post("nama_calon"),
						"nik_calon" => $this->input->post("nik_calon"),
						"tmpt_lahir_calon" => $this->input->post("tmpt_lahir_calon"),
						"tgl_lahir_calon" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_calon"))),
						"jenis_kelamin_calon" => $this->input->post("jenis_kelamin_calon"),
						"kewarganegaraan_calon" => $this->input->post("kewarganegaraan_calon"),
						"agama_calon" => $this->input->post("agama_calon"),
						"pekerjaan_calon" => $this->input->post("pekerjaan_calon"),
						"nama_wali_calon" => $this->input->post("nama_wali_calon"),
						"alamat_calon" => $this->input->post("alamat_calon"),
						"rt_calon" => $this->input->post("rt_calon"),
						"rw_calon" => $this->input->post("rw_calon"),
						"desa_calon" => $this->input->post("desa_calon"),
						"kecamatan_calon" => $this->input->post("kecamatan_calon"),
						"kabupaten_calon" => $this->input->post("kabupaten_calon"),
						"status_diri_cwo" => $this->input->post("status_diri_cwo"),
						"status_diri_cwe" => $this->input->post("status_diri_cwe"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"nama_pasangan_dulu" => $this->input->post("nama_pasangan_dulu"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"tmpt_lahir_ayah" => $this->input->post("tmpt_lahir_ayah"),
						"tgl_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ayah"))),
						"kewarganegaraan_ayah" => $this->input->post("kewarganegaraan_ayah"),
						"agama_ayah" => $this->input->post("agama_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"tmpt_lahir_ibu" => $this->input->post("tmpt_lahir_ibu"),
						"tgl_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ibu"))),
						"kewarganegaraan_ibu" => $this->input->post("kewarganegaraan_ibu"),
						"agama_ibu" => $this->input->post("agama_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"nama_wali" => $this->input->post("nama_wali"),
						"bin_binti_wali" => $this->input->post("bin_binti_wali"),
						"tmpt_lahir_wali" => $this->input->post("tmpt_lahir_wali"),
						"tgl_lahir_wali" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_wali"))),
						"agama_wali" => $this->input->post("agama_wali"),
						"pekerjaan_wali" => $this->input->post("pekerjaan_wali"),
						"alamat_wali" => $this->input->post("alamat_wali"),
						"status_wali" => $this->input->post("status_wali"),
						"saksi1" => $this->input->post("saksi1"),
						"umur_saksi1" => $this->input->post("umur_saksi1"),
						"pekerjaan_saksi1" => $this->input->post("pekerjaan_saksi1"),
						"alamat_saksi1" => $this->input->post("alamat_saksi1"),
						"saksi2" => $this->input->post("saksi2"),
						"umur_saksi2" => $this->input->post("umur_saksi2"),
						"pekerjaan_saksi2" => $this->input->post("pekerjaan_saksi2"),
						"alamat_saksi2" => $this->input->post("alamat_saksi2"),
						"nama_pasangan_meninggal" => $this->input->post("nama_pasangan_meninggal"),
						"bin_binti_pasangan_meninggal" => $this->input->post("bin_binti_pasangan_meninggal"),
						"tmpt_lahir_pasangan_meninggal" => $this->input->post("tmpt_lahir_pasangan_meninggal"),
						"tgl_lahir_pasangan_meninggal" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_pasangan_meninggal"))),
						"kewarganegaraan_pasangan_meninggal" => $this->input->post("kewarganegaraan_pasangan_meninggal"),
						"agama_pasangan_meninggal" => $this->input->post("agama_pasangan_meninggal"),
						"pekerjaan_pasangan_meninggal" => $this->input->post("pekerjaan_pasangan_meninggal"),
						"tempat_tinggal_pasangan_meninggal" => $this->input->post("tempat_tinggal_pasangan_meninggal"),
						"meninggal_pada" => date("Y-m-d",strtotime($this->input->post("meninggal_pada"))),
						"meninggal_di" => $this->input->post("meninggal_di"),
						"hari_nikah" => $this->input->post("hari_nikah"),
						"tgl_nikah" => date("Y-m-d",strtotime($this->input->post("tgl_nikah"))),
						"waktu_nikah_mulai" => $this->input->post("waktu_nikah_mulai"),
						"waktu_nikah_selesai" => $this->input->post("waktu_nikah_selesai"),
						"maskawin" => $this->input->post("maskawin"),
						"tempat_nikah" => $this->input->post("tempat_nikah"),

						"no_hp" => $this->input->post("no_hp"),
						"email" => $this->input->post("email"),
						"bin_ibu" => $this->input->post("bin_ibu"),
						"nik_ibu" => $this->input->post("nik_ibu"),
						"bin_ayah" => $this->input->post("bin_ayah"),
						"bin_calon" => $this->input->post("bin_calon"),
						"nik_ayah" => $this->input->post("nik_ayah"),
						"nama_mantan_calon" => $this->input->post("nama_mantan_calon"),



						);
		$this->m_index->edit_daftar_nikah($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_daftar_nikah/daftar_nikah'));
	}

	public function proses_hapus_daftar_nikah($id) {
		$this->m_index->hapus_daftar_nikah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_daftar_nikah/daftar_nikah'));
	}

//CETAK PDF DAFTAR NIKAH
	public function daftar_nikah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_nikah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_daftar_nikah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_daftar_nikah.pdf', 'P');
	}

//CETAK PDF DAFTAR NIKAH
	public function daftar_nikah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_nikah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_daftar_nikah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_daftar_nikah.pdf', 'P');
	}

//CETAK PDF NONIS
	public function nonis_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_nonis($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_nonis', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('surat_nonis.pdf', 'P');
	}

//CETAK PDF N1
	public function N1_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N1.pdf', 'P');
	}

//CETAK PDF N1
	public function N1_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N11($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N11', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N1.pdf', 'P');
	}

//CETAK PDF N2
	public function N2_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N2($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N2', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N2.pdf', 'P');
	}

//CETAK PDF N2
	public function N2_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N21($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N21', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N2.pdf', 'P');
	}

//CETAK PDF N3
	public function N3_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N3($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N3', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N3.pdf', 'P');
	}

//CETAK PDF N3
	public function N3_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N31($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N31', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N3.pdf', 'P');
	}

//CETAK PDF N4
	public function N4_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N4($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N4', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N4.pdf', 'P');
	}

//CETAK PDF N4
	public function N4_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N41($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N41', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N4.pdf', 'P');
	}

//CETAK PDF N5
	public function N5_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N5($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N5', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N5.pdf', 'P');
	}

//CETAK PDF N5
	public function N5_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N51($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N51', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N5.pdf', 'P');
	}

//CETAK PDF N6
	public function N6_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N6($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N6', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N6.pdf', 'P');
	}

//CETAK PDF N6
	public function N6_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N61($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N61', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N6.pdf', 'P');
	}

//CETAK PDF N7
	public function N7_daftar_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N7($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_N7', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N7.pdf', 'P');
	}

//CETAK PDF N7
	public function N7_daftar_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_N71($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_N71', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Model_N7.pdf', 'P');
	}

//CETAK PDF SURAT WALI
	public function surat_daftar_wali_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_surat_keterangan_wali($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_data_surat_wali', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_Wali.pdf', 'P');
	}

//CETAK PDF SURAT WALI
	public function surat_daftar_wali_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_surat_keterangan_wali1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_data_surat_wali1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_Wali.pdf', 'P');
	}


//CETAK PDF SURAT PERNYATAAN
	public function daftar_surat_pernyataan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_surat_pernyataan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('daftar_nikah/cetak_daftar_surat_pernyataan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_Pernyataan.pdf', 'P');
	}


//CETAK PDF SURAT PERNYATAAN
	public function daftar_surat_pernyataan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_daftar_surat_pernyataan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('daftar_nikah/cetak_daftar_surat_pernyataan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_Pernyataan.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_daftar_nikah() {
		$this->m_index->cekLogin();
		$data['isi'] = "daftar_nikah/rekap_daftar_nikah.php";
		$this->load->view('template/utama', $data);
	}

	public function daftar_nikah_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['daftar_nikah'] = $this->m_index->rekap_daftar_nikah($T1,$T2);
		$this->load->view('daftar_nikah/rekap_data_daftar_nikah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('daftar_nikah.pdf', 'P');
	}

}
?>