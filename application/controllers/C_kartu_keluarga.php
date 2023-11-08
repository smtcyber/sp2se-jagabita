<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kartu_keluarga extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KARTU KELUARGA KIOS ---------------------------------------------------------------------
	function panel_kartu_keluarga() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_kartu_keluarga.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_kartu_keluarga() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kk($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$kartu_keluargaId = $this->m_index->tambah_kartu_keluarga($data_nik);
			$data =  array ("surat" => "Surat Keterangan Kartu Keluarga",
							"link" => "c_kartu_keluarga/kartu_keluarga",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $kartu_keluargaId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//KARTU KELUARGA ADMIN -------------------------------------------------------------------------
	public function kartu_keluarga() {
	$this->m_index->cekLogin();
	$data['kartu_keluarga']=$this->m_index->get_kartu_keluarga();
	foreach($this->m_index->statistik_kk()->result_array() as $row)
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
	$data['isi'] = "kartu_keluarga/kartu_keluarga.php";
	$this->load->view('template/utama',$data);
	}

	public function edit_status($id){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['edit_status'] = $this->m_index->getEdit_kartu_keluarga($id);
		$data['isi'] = "kartu_keluarga/edit_status.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_status(){
		$id = $this ->input->post("B1");
		$data =  array ("status_kk" => $this->input->post("status_kk"),
						"berkas" => $this->input->post("berkas"),
						);
		$this->m_index->edit_status($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Status Berhasil Diedit !
				</div>');
		redirect(site_url('c_kartu_keluarga/kartu_keluarga'));
	}


	public function tambah_kartu_keluarga(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "kartu_keluarga/tambah_kartu_keluarga.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kartu_keluarga(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"status_kk" => $this->input->post("status_kk"),
						"status_kawin" => $this->input->post("status_kawin"),
						"hub_keluarga" => $this->input->post("hub_keluarga"),
						"alamat" => $this->input->post("alamat"),
						"rt" => $this->input->post("rt"),
						"rw" => $this->input->post("rw"),
						"desa" => $this->input->post("desa"),
						"kecamatan" => $this->input->post("kecamatan"),
						"kabupaten" => $this->input->post("kabupaten"),
						"berkas" => $this->input->post("berkas"),
						"kode_pos" => $this->input->post("kode_pos"),
						"propinsi" => $this->input->post("propinsi"),
						"no_paspor" => $this->input->post("no_paspor"),
						"no_kitas" => $this->input->post("no_kitas"),
						"nm_ayah" => $this->input->post("nm_ayah"),
						"nm_ibu" => $this->input->post("nm_ibu"),
						"nik_pengikut1" => $this->input->post("nik_pengikut1"),
						"nm_pengikut1" => $this->input->post("nm_pengikut1"),
						"hub_keluarga1" => $this->input->post("hub_keluarga1"),
						"tempat_lahir1" => $this->input->post("tempat_lahir1"),
						"tgl_lahir1" => date("Y-m-d",strtotime($this->input->post("tgl1"))),
						"jk_pengikut1" => $this->input->post("jk_pengikut1"),
						"agama_pengikut1" => $this->input->post("agama_pengikut1"),
						"pendidikan1" => $this->input->post("pendidikan1"),
						"pekerjaan1" => $this->input->post("pekerjaan1"),
						"status_kawin1" => $this->input->post("status_kawin1"),
						"kewarganegaraan1" => $this->input->post("kewarganegaraan1"),
						"no_paspor1" => $this->input->post("no_paspor1"),
						"no_kitas1" => $this->input->post("no_kitas1"),
						"nm_ayah1" => $this->input->post("nm_ayah1"),
						"nm_ibu1" => $this->input->post("nm_ibu1"),
						"nik_pengikut2" => $this->input->post("nik_pengikut2"),
						"nm_pengikut2" => $this->input->post("nm_pengikut2"),
						"hub_keluarga2" => $this->input->post("hub_keluarga2"),
						"tempat_lahir2" => $this->input->post("tempat_lahir2"),
						"tgl_lahir2" => date("Y-m-d",strtotime($this->input->post("tgl2"))),
						"jk_pengikut2" => $this->input->post("jk_pengikut2"),
						"agama_pengikut2" => $this->input->post("agama_pengikut2"),
						"pendidikan2" => $this->input->post("pendidikan2"),
						"pekerjaan2" => $this->input->post("pekerjaan2"),
						"status_kawin2" => $this->input->post("status_kawin2"),
						"kewarganegaraan2" => $this->input->post("kewarganegaraan2"),
						"no_paspor2" => $this->input->post("no_paspor2"),
						"no_kitas2" => $this->input->post("no_kitas2"),
						"nm_ayah2" => $this->input->post("nm_ayah2"),
						"nm_ibu2" => $this->input->post("nm_ibu2"),
						"nik_pengikut3" => $this->input->post("nik_pengikut3"),
						"nm_pengikut3" => $this->input->post("nm_pengikut3"),
						"hub_keluarga3" => $this->input->post("hub_keluarga3"),
						"tempat_lahir3" => $this->input->post("tempat_lahir3"),
						"tgl_lahir3" => date("Y-m-d",strtotime($this->input->post("tgl3"))),
						"jk_pengikut3" => $this->input->post("jk_pengikut3"),
						"agama_pengikut3" => $this->input->post("agama_pengikut3"),
						"pendidikan3" => $this->input->post("pendidikan3"),
						"pekerjaan3" => $this->input->post("pekerjaan3"),
						"status_kawin3" => $this->input->post("status_kawin3"),
						"kewarganegaraan3" => $this->input->post("kewarganegaraan3"),
						"no_paspor3" => $this->input->post("no_paspor3"),
						"no_kitas3" => $this->input->post("no_kitas3"),
						"nm_ayah3" => $this->input->post("nm_ayah3"),
						"nm_ibu3" => $this->input->post("nm_ibu3"),
						"tgl_surat" => date("Y-m-d",strtotime($this->input->post("tgl_surat"))),
						);
		$this->m_index->tambah_kartu_keluarga($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_kartu_keluarga/kartu_keluarga'));
	}

	public function edit_kartu_keluarga($id){
		$this->m_index->cekLogin();
		$data['edit_kartu_keluarga'] = $this->m_index->getEdit_kartu_keluarga($id);
		$data['isi'] = "kartu_keluarga/edit_kartu_keluarga.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kartu_keluarga(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"status_kk" => $this->input->post("status_kk"),
						"status_kawin" => $this->input->post("status_kawin"),
						"berkas" => $this->input->post("berkas"),
						"kode_pos" => $this->input->post("kode_pos"),
						"propinsi" => $this->input->post("propinsi"),
						"no_paspor" => $this->input->post("no_paspor"),
						"no_kitas" => $this->input->post("no_kitas"),
						"nm_ayah" => $this->input->post("nm_ayah"),
						"nm_ibu" => $this->input->post("nm_ibu"),
						"nik_pengikut1" => $this->input->post("nik_pengikut1"),
						"nm_pengikut1" => $this->input->post("nm_pengikut1"),
						"hub_keluarga1" => $this->input->post("hub_keluarga1"),
						"tempat_lahir1" => $this->input->post("tempat_lahir1"),
						"tgl_lahir1" => date("Y-m-d",strtotime($this->input->post("tgl_lahir1"))),
						"jk_pengikut1" => $this->input->post("jk_pengikut1"),
						"agama_pengikut1" => $this->input->post("agama_pengikut1"),
						"pendidikan1" => $this->input->post("pendidikan1"),
						"pekerjaan1" => $this->input->post("pekerjaan1"),
						"status_kawin1" => $this->input->post("status_kawin1"),
						"kewarganegaraan1" => $this->input->post("kewarganegaraan1"),
						"no_paspor1" => $this->input->post("no_paspor1"),
						"no_kitas1" => $this->input->post("no_kitas1"),
						"nm_ayah1" => $this->input->post("nm_ayah1"),
						"nm_ibu1" => $this->input->post("nm_ibu1"),
						"nik_pengikut2" => $this->input->post("nik_pengikut2"),
						"nm_pengikut2" => $this->input->post("nm_pengikut2"),
						"hub_keluarga2" => $this->input->post("hub_keluarga2"),
						"tempat_lahir2" => $this->input->post("tempat_lahir2"),
						"tgl_lahir2" => date("Y-m-d",strtotime($this->input->post("tgl_lahir2"))),
						"jk_pengikut2" => $this->input->post("jk_pengikut2"),
						"agama_pengikut2" => $this->input->post("agama_pengikut2"),
						"pendidikan2" => $this->input->post("pendidikan2"),
						"pekerjaan2" => $this->input->post("pekerjaan2"),
						"status_kawin2" => $this->input->post("status_kawin2"),
						"kewarganegaraan2" => $this->input->post("kewarganegaraan2"),
						"no_paspor2" => $this->input->post("no_paspor2"),
						"no_kitas2" => $this->input->post("no_kitas2"),
						"nm_ayah2" => $this->input->post("nm_ayah2"),
						"nm_ibu2" => $this->input->post("nm_ibu2"),
						"nik_pengikut3" => $this->input->post("nik_pengikut3"),
						"nm_pengikut3" => $this->input->post("nm_pengikut3"),
						"hub_keluarga3" => $this->input->post("hub_keluarga3"),
						"tempat_lahir3" => $this->input->post("tempat_lahir3"),
						"tgl_lahir3" => date("Y-m-d",strtotime($this->input->post("tgl_lahir3"))),
						"jk_pengikut3" => $this->input->post("jk_pengikut3"),
						"agama_pengikut3" => $this->input->post("agama_pengikut3"),
						"pendidikan3" => $this->input->post("pendidikan3"),
						"pekerjaan3" => $this->input->post("pekerjaan3"),
						"status_kawin3" => $this->input->post("status_kawin3"),
						"kewarganegaraan3" => $this->input->post("kewarganegaraan3"),
						"no_paspor3" => $this->input->post("no_paspor3"),
						"no_kitas3" => $this->input->post("no_kitas3"),
						"nm_ayah3" => $this->input->post("nm_ayah3"),
						"nm_ibu3" => $this->input->post("nm_ibu3"),
						"nik_pengikut4" => $this->input->post("nik_pengikut4"),
						"nm_pengikut4" => $this->input->post("nm_pengikut4"),
						"hub_keluarga4" => $this->input->post("hub_keluarga4"),
						"tempat_lahir4" => $this->input->post("tempat_lahir4"),
						"tgl_lahir4" => date("Y-m-d",strtotime($this->input->post("tgl_lahir4"))),
						"jk_pengikut4" => $this->input->post("jk_pengikut4"),
						"agama_pengikut4" => $this->input->post("agama_pengikut4"),
						"pendidikan4" => $this->input->post("pendidikan4"),
						"pekerjaan4" => $this->input->post("pekerjaan4"),
						"status_kawin4" => $this->input->post("status_kawin4"),
						"kewarganegaraan4" => $this->input->post("kewarganegaraan4"),
						"no_paspor4" => $this->input->post("no_paspor4"),
						"no_kitas4" => $this->input->post("no_kitas4"),
						"nm_ayah4" => $this->input->post("nm_ayah4"),
						"nm_ibu4" => $this->input->post("nm_ibu4"),
						"nik_pengikut5" => $this->input->post("nik_pengikut5"),
						"nm_pengikut5" => $this->input->post("nm_pengikut5"),
						"hub_keluarga5" => $this->input->post("hub_keluarga5"),
						"tempat_lahir5" => $this->input->post("tempat_lahir5"),
						"tgl_lahir5" => date("Y-m-d",strtotime($this->input->post("tgl_lahir5"))),
						"jk_pengikut5" => $this->input->post("jk_pengikut5"),
						"agama_pengikut5" => $this->input->post("agama_pengikut5"),
						"pendidikan5" => $this->input->post("pendidikan5"),
						"pekerjaan5" => $this->input->post("pekerjaan5"),
						"status_kawin5" => $this->input->post("status_kawin5"),
						"kewarganegaraan5" => $this->input->post("kewarganegaraan5"),
						"no_paspor5" => $this->input->post("no_paspor5"),
						"no_kitas5" => $this->input->post("no_kitas5"),
						"nm_ayah5" => $this->input->post("nm_ayah5"),
						"nm_ibu5" => $this->input->post("nm_ibu5"),
						"nik_pengikut6" => $this->input->post("nik_pengikut6"),
						"nm_pengikut6" => $this->input->post("nm_pengikut6"),
						"hub_keluarga6" => $this->input->post("hub_keluarga6"),
						"tempat_lahir6" => $this->input->post("tempat_lahir6"),
						"tgl_lahir6" => date("Y-m-d",strtotime($this->input->post("tgl_lahir6"))),
						"jk_pengikut6" => $this->input->post("jk_pengikut6"),
						"agama_pengikut6" => $this->input->post("agama_pengikut6"),
						"pendidikan6" => $this->input->post("pendidikan6"),
						"pekerjaan6" => $this->input->post("pekerjaan6"),
						"status_kawin6" => $this->input->post("status_kawin6"),
						"kewarganegaraan6" => $this->input->post("kewarganegaraan6"),
						"no_paspor6" => $this->input->post("no_paspor6"),
						"no_kitas6" => $this->input->post("no_kitas6"),
						"nm_ayah6" => $this->input->post("nm_ayah6"),
						"nm_ibu6" => $this->input->post("nm_ibu6"),
						"nik_pengikut7" => $this->input->post("nik_pengikut7"),
						"nm_pengikut7" => $this->input->post("nm_pengikut7"),
						"hub_keluarga7" => $this->input->post("hub_keluarga7"),
						"tempat_lahir7" => $this->input->post("tempat_lahir7"),
						"tgl_lahir7" => date("Y-m-d",strtotime($this->input->post("tgl_lahir7"))),
						"jk_pengikut7" => $this->input->post("jk_pengikut7"),
						"agama_pengikut7" => $this->input->post("agama_pengikut7"),
						"pendidikan7" => $this->input->post("pendidikan7"),
						"pekerjaan7" => $this->input->post("pekerjaan7"),
						"status_kawin7" => $this->input->post("status_kawin7"),
						"kewarganegaraan7" => $this->input->post("kewarganegaraan7"),
						"no_paspor7" => $this->input->post("no_paspor7"),
						"no_kitas7" => $this->input->post("no_kitas7"),
						"nm_ayah7" => $this->input->post("nm_ayah7"),
						"nm_ibu7" => $this->input->post("nm_ibu7"),
						"nik_pengikut8" => $this->input->post("nik_pengikut8"),
						"nm_pengikut8" => $this->input->post("nm_pengikut8"),
						"hub_keluarga8" => $this->input->post("hub_keluarga8"),
						"tempat_lahir8" => $this->input->post("tempat_lahir8"),
						"tgl_lahir8" => date("Y-m-d",strtotime($this->input->post("tgl_lahir8"))),
						"jk_pengikut8" => $this->input->post("jk_pengikut8"),
						"agama_pengikut8" => $this->input->post("agama_pengikut8"),
						"pendidikan8" => $this->input->post("pendidikan8"),
						"pekerjaan8" => $this->input->post("pekerjaan8"),
						"status_kawin8" => $this->input->post("status_kawin8"),
						"kewarganegaraan8" => $this->input->post("kewarganegaraan8"),
						"no_paspor8" => $this->input->post("no_paspor8"),
						"no_kitas8" => $this->input->post("no_kitas8"),
						"nm_ayah8" => $this->input->post("nm_ayah8"),
						"nm_ibu8" => $this->input->post("nm_ibu8"),
						"nik_pengikut9" => $this->input->post("nik_pengikut9"),
						"nm_pengikut9" => $this->input->post("nm_pengikut9"),
						"hub_keluarga9" => $this->input->post("hub_keluarga9"),
						"tempat_lahir9" => $this->input->post("tempat_lahir9"),
						"tgl_lahir9" => date("Y-m-d",strtotime($this->input->post("tgl_lahir9"))),
						"jk_pengikut9" => $this->input->post("jk_pengikut9"),
						"agama_pengikut9" => $this->input->post("agama_pengikut9"),
						"pendidikan9" => $this->input->post("pendidikan9"),
						"pekerjaan9" => $this->input->post("pekerjaan9"),
						"status_kawin9" => $this->input->post("status_kawin9"),
						"kewarganegaraan9" => $this->input->post("kewarganegaraan9"),
						"no_paspor9" => $this->input->post("no_paspor9"),
						"no_kitas9" => $this->input->post("no_kitas9"),
						"nm_ayah9" => $this->input->post("nm_ayah9"),
						"nm_ibu9" => $this->input->post("nm_ibu9"),
						);
		$this->m_index->edit_kartu_keluarga($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_kartu_keluarga/kartu_keluarga'));
	}

	public function proses_hapus_kartu_keluarga($id) {
		$this->m_index->hapus_kartu_keluarga($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kartu_keluarga/kartu_keluarga'));
	}

//EXPORT TO EXCEL
	public function kartu_keluarga_excel($id) {
		$data['tampil'] = $this->m_index->cetak_kartu_keluarga($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "kartu_keluarga/kartu_keluarga_excel.php";
		$this->load->view('template/excel',$data);
	}

//EXPORT TO WORD
	public function kartu_keluarga_word($id) {
		$data['tampil'] = $this->m_index->cetak_kartu_keluarga($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "kartu_keluarga/kartu_keluarga_word.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF KK
	public function kartu_keluarga_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kartu_keluarga($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kartu_keluarga/cetak_data_kartu_keluarga', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kartu_keluarga.pdf', 'P');
	}

//CETAK PDF KK
	public function kartu_keluarga_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kartu_keluarga1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('kartu_keluarga/cetak_data_kartu_keluarga1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kartu_keluarga.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_kartu_keluarga() {
		$this->m_index->cekLogin();
		$data['isi'] = "kartu_keluarga/rekap_kartu_keluarga.php";
		$this->load->view('template/utama', $data);
	}

	public function kartu_keluarga_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['kartu_keluarga'] = $this->m_index->rekap_kartu_keluarga($T1,$T2);
		$this->load->view('kartu_keluarga/rekap_data_kartu_keluarga', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Kartu_Keluarga.pdf', 'P');
	}		

}
?>