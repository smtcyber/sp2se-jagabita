<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_andon_nikah extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT ANDON NIKAH KIOS -------------------------------------------------------------------------------------------
	function panel_andon_nikah() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_andon_nikah.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_andon_nikah() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_andon_nikah($nik);
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
			$andon_nikahId = $this->m_index->tambah_andon_nikah($data_nik);
			$data =  array ("surat" => "Surat Keterangan Andon Nikah",
							"link" => "c_andon_nikah/andon_nikah",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $andon_nikahId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//ANDON NIKAH ADMIN --------------------------------------------------------------------------------------
	public function andon_nikah() {
		$this->m_index->cekLogin();
		$data['andon_nikah']=$this->m_index->get_andon_nikah();
		foreach($this->m_index->statistik_andon_nikah()->result_array() as $row)
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
		$data['isi'] = "andon_nikah/andon_nikah.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_andon_nikah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "andon_nikah/tambah_andon_nikah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_andon_nikah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"kewarganegaraan" => $this->input->post("kewarganegaraan"),
						"agama1" => $this->input->post("agama1"),
						"gol_darah" => $this->input->post("gol_darah"),
						"kelainan_fisik" => $this->input->post("kelainan_fisik"),
						"jumlah_istri" => $this->input->post("jumlah_istri"),
						"status_diri" => $this->input->post("status_diri"),
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
						"status_diri_calon" => $this->input->post("status_diri_calon"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"nama_pasangan_dulu" => $this->input->post("nama_pasangan_dulu"),
						"nama_pasangan_dulu_calon" => $this->input->post("nama_pasangan_dulu_calon"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"nik_ayah" => $this->input->post("nik_ayah"),
						"tmpt_lahir_ayah" => $this->input->post("tmpt_lahir_ayah"),
						"tgl_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ayah"))),
						"kewarganegaraan_ayah" => $this->input->post("kewarganegaraan_ayah"),
						"agama_ayah" => $this->input->post("agama_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"nik_ibu" => $this->input->post("nik_ibu"),
						"tmpt_lahir_ibu" => $this->input->post("tmpt_lahir_ibu"),
						"tgl_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ibu"))),
						"kewarganegaraan_ibu" => $this->input->post("kewarganegaraan_ibu"),
						"agama_ibu" => $this->input->post("agama_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"nama_wali" => $this->input->post("nama_wali"),
						"nik_wali" => $this->input->post("nik_wali"),
						"bin_binti_wali" => $this->input->post("bin_binti_wali"),
						"tmpt_lahir_wali" => $this->input->post("tmpt_lahir_wali"),
						"tgl_lahir_wali" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_wali"))),
						"agama_wali" => $this->input->post("agama_wali"),
						"pekerjaan_wali" => $this->input->post("pekerjaan_wali"),
						"alamat_wali" => $this->input->post("alamat_wali"),
						"status_wali" => $this->input->post("status_wali"),
						"alasan_wali" => $this->input->post("alasan_wali"),
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
						"tempat_nikah" => $this->input->post("tempat_nikah"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_andon_nikah($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_andon_nikah/andon_nikah'));
	}

	public function edit_andon_nikah($id){
		$this->m_index->cekLogin();
		$data['edit_andon_nikah'] = $this->m_index->getEdit_andon_nikah($id);
		$data['isi'] = "andon_nikah/edit_andon_nikah.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_andon_nikah(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"kewarganegaraan" => $this->input->post("kewarganegaraan"),
						"agama1" => $this->input->post("agama1"),
						"gol_darah" => $this->input->post("gol_darah"),
						"kelainan_fisik" => $this->input->post("kelainan_fisik"),
						"jumlah_istri" => $this->input->post("jumlah_istri"),
						"status_diri" => $this->input->post("status_diri"),
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
						"status_diri_calon" => $this->input->post("status_diri_calon"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"nama_pasangan_dulu" => $this->input->post("nama_pasangan_dulu"),
						"nama_pasangan_dulu_calon" => $this->input->post("nama_pasangan_dulu_calon"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"nik_ayah" => $this->input->post("nik_ayah"),
						"tmpt_lahir_ayah" => $this->input->post("tmpt_lahir_ayah"),
						"tgl_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ayah"))),
						"kewarganegaraan_ayah" => $this->input->post("kewarganegaraan_ayah"),
						"agama_ayah" => $this->input->post("agama_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"nik_ibu" => $this->input->post("nik_ibu"),
						"tmpt_lahir_ibu" => $this->input->post("tmpt_lahir_ibu"),
						"tgl_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ibu"))),
						"kewarganegaraan_ibu" => $this->input->post("kewarganegaraan_ibu"),
						"agama_ibu" => $this->input->post("agama_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"nama_wali" => $this->input->post("nama_wali"),
						"nik_wali" => $this->input->post("nik_wali"),
						"bin_binti_wali" => $this->input->post("bin_binti_wali"),
						"tmpt_lahir_wali" => $this->input->post("tmpt_lahir_wali"),
						"tgl_lahir_wali" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_wali"))),
						"agama_wali" => $this->input->post("agama_wali"),
						"pekerjaan_wali" => $this->input->post("pekerjaan_wali"),
						"alamat_wali" => $this->input->post("alamat_wali"),
						"status_wali" => $this->input->post("status_wali"),
						"alasan_wali" => $this->input->post("alasan_wali"),
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
						"tempat_nikah" => $this->input->post("tempat_nikah"),
						);
		$this->m_index->edit_andon_nikah($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_andon_nikah/andon_nikah'));
	}

	public function proses_hapus_andon_nikah($id) {
		$this->m_index->hapus_andon_nikah($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_andon_nikah/andon_nikah'));
	}


//EXPORT TO WORD
	public function andon_nikah_word($id) {
		$data['tampil'] = $this->m_index->cetak_andon_nikah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "andon_nikah/andon_nikah_word.php";
		$this->load->view('template/word',$data);
	}

	public function andon_nikah_word1($id) {
		$data['tampil'] = $this->m_index->cetak_andon_nikah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "andon_nikah/andon_nikah_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF ANDON NIKAH 1
	public function andon_nikah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_andon_nikah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('andon_nikah/cetak_data_andon_nikah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_Andon_Nikah.pdf', 'P');
	}

//CETAK PDF ANDON NIKAH 2
	public function andon_nikah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_andon_nikah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('andon_nikah/cetak_data_andon_nikah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_Andon_Nikah.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_andon_nikah() {
		$this->m_index->cekLogin();
		$data['isi'] = "andon_nikah/rekap_andon_nikah.php";
		$this->load->view('template/utama', $data);
	}

	public function andon_nikah_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['andon_nikah'] = $this->m_index->rekap_andon_nikah($T1,$T2);
		$this->load->view('andon_nikah/rekap_data_andon_nikah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Andon_Nikah.pdf', 'P');
	}

}
?>