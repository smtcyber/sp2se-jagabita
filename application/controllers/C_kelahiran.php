<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kelahiran extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KELAHIRAN KIOS -------------------------------------------------------------------------------------------
	function panel_kelahiran() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_kelahiran.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_kelahiran() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kelahiran($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tanggal_lahir_ibu" => date('Y-m-d'),
					"tanggal_lahir_ayah" => date('Y-m-d'),
					"tanggal_lahir_anak" => date('Y-m-d'),
					"tgl_catat_kawin" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$kelahiranId = $this->m_index->tambah_kelahiran($data_nik);
			$data =  array ("surat" => "Surat kelahiran",
							"link" => "c_kelahiran/kelahiran",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_panel/notif_sukses/'. $kelahiranId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//KELAHIRAN ADMIN -------------------------------------------------------------------
		public function kelahiran() {
		$this->m_index->cekLogin();
		$data['kelahiran']=$this->m_index->get_kelahiran();
		foreach($this->m_index->statistik_kelahiran()->result_array() as $row)
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
		$data['isi'] = "kelahiran/kelahiran.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_kelahiran(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "kelahiran/tambah_kelahiran.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kelahiran(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_pelapor" => $this->input->post("nama_pelapor"),
						"nik_pelapor" => $this->input->post("nik_pelapor"),
						"umur_pelapor" => $this->input->post("umur_pelapor"),
						"pekerjaan_pelapor" => $this->input->post("pekerjaan_pelapor"),
						"alamat_pelapor" => $this->input->post("alamat_pelapor"),
						"hubungan_pelapor" => $this->input->post("hubungan_pelapor"),
						"hari_lahir" => $this->input->post("hari_lahir"),
						"tempat_kelahiran" => $this->input->post("tempat_kelahiran"),
						"jenis_kelamin_anak" => $this->input->post("jenis_kelamin_anak"),
						"jenis_kelahiran" => $this->input->post("jenis_kelahiran"),
						"kelahiran_ke" => $this->input->post("kelahiran_ke"),
						"penolong_kelahiran" => $this->input->post("penolong_kelahiran"),
						"berat_bayi" => $this->input->post("berat_bayi"),
						"tanggal_lahir_anak" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_anak"))),
						"jam_lahir" => $this->input->post("jam_lahir"),
						"tempat_lahir" => $this->input->post("tempat_lahir"),
						"nama_anak" => $this->input->post("nama_anak"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"no_ktp_ibu" => $this->input->post("no_ktp_ibu"),
						"tanggal_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_ibu"))),
						"umur_ibu" => $this->input->post("umur_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"rt_ibu" => $this->input->post("rt_ibu"),
						"rw_ibu" => $this->input->post("rw_ibu"),
						"kelurahan_ibu" => $this->input->post("kelurahan_ibu"),
						"kecamatan_ibu" => $this->input->post("kecamatan_ibu"),
						"kota_ibu" => $this->input->post("kota_ibu"),
						"propinsi_ibu" => $this->input->post("propinsi_ibu"),
						"kewarganegaraan_ibu" => $this->input->post("kewarganegaraan_ibu"),
						"tgl_catat_kawin" => date("Y-m-d",strtotime($this->input->post("tgl_catat_kawin"))),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"no_ktp_ayah" => $this->input->post("no_ktp_ayah"),
						"tanggal_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_ayah"))),
						"umur_ayah" => $this->input->post("umur_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"rt_ayah" => $this->input->post("rt_ayah"),
						"rw_ayah" => $this->input->post("rw_ayah"),
						"kelurahan_ayah" => $this->input->post("kelurahan_ayah"),
						"kecamatan_ayah" => $this->input->post("kecamatan_ayah"),
						"kota_ayah" => $this->input->post("kota_ayah"),
						"propinsi_ayah" => $this->input->post("propinsi_ayah"),
						"kewarganegaraan_ayah" => $this->input->post("kewarganegaraan_ayah"),
						"nik_saksi1" => $this->input->post("nik_saksi1"),
						"nama_saksi1" => $this->input->post("nama_saksi1"),
						"nik_saksi2" => $this->input->post("nik_saksi2"),
						"nama_saksi2" => $this->input->post("nama_saksi2"),
						"tgl_surat" => date('Y-m-d'),
						"kode_wilayah" => $this->input->post("kode_wilayah"),
						"tempat_lahir_ibu" => $this->input->post("tempat_lahir_ibu"),
						"tempat_lahir_ayah" => $this->input->post("tempat_lahir_ayah"),
						"agama_ibu" => $this->input->post("agama_ibu"),
						"agama_ayah" => $this->input->post("agama_ayah"),
						);
		$this->m_index->tambah_kelahiran($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_kelahiran/kelahiran'));
	}

	public function edit_kelahiran($id){
		$this->m_index->cekLogin();
		$data['edit_kelahiran'] = $this->m_index->getEdit_kelahiran($id);
		$data['isi'] = "kelahiran/edit_kelahiran.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kelahiran(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_pelapor" => $this->input->post("nama_pelapor"),
						"nik_pelapor" => $this->input->post("nik_pelapor"),
						"umur_pelapor" => $this->input->post("umur_pelapor"),
						"pekerjaan_pelapor" => $this->input->post("pekerjaan_pelapor"),
						"alamat_pelapor" => $this->input->post("alamat_pelapor"),
						"hubungan_pelapor" => $this->input->post("hubungan_pelapor"),
						"hari_lahir" => $this->input->post("hari_lahir"),
						"tempat_kelahiran" => $this->input->post("tempat_kelahiran"),
						"jenis_kelamin_anak" => $this->input->post("jenis_kelamin_anak"),
						"jenis_kelahiran" => $this->input->post("jenis_kelahiran"),
						"kelahiran_ke" => $this->input->post("kelahiran_ke"),
						"penolong_kelahiran" => $this->input->post("penolong_kelahiran"),
						"berat_bayi" => $this->input->post("berat_bayi"),
						"tanggal_lahir" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir"))),
						"jam_lahir" => $this->input->post("jam_lahir"),
						"tempat_lahir" => $this->input->post("tempat_lahir"),
						"nama_anak" => $this->input->post("nama_anak"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"no_ktp_ibu" => $this->input->post("no_ktp_ibu"),
						"tanggal_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_ibu"))),
						"umur_ibu" => $this->input->post("umur_ibu"),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"rt_ibu" => $this->input->post("rt_ibu"),
						"rw_ibu" => $this->input->post("rw_ibu"),
						"kelurahan_ibu" => $this->input->post("kelurahan_ibu"),
						"kecamatan_ibu" => $this->input->post("kecamatan_ibu"),
						"kota_ibu" => $this->input->post("kota_ibu"),
						"propinsi_ibu" => $this->input->post("propinsi_ibu"),
						"kewarganegaraan_ibu" => $this->input->post("kewarganegaraan_ibu"),
						"tgl_catat_kawin" => date("Y-m-d",strtotime($this->input->post("tgl_catat_kawin"))),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"no_ktp_ayah" => $this->input->post("no_ktp_ayah"),
						"tanggal_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_ayah"))),
						"umur_ayah" => $this->input->post("umur_ayah"),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"rt_ayah" => $this->input->post("rt_ayah"),
						"rw_ayah" => $this->input->post("rw_ayah"),
						"kelurahan_ayah" => $this->input->post("kelurahan_ayah"),
						"kecamatan_ayah" => $this->input->post("kecamatan_ayah"),
						"kota_ayah" => $this->input->post("kota_ayah"),
						"propinsi_ayah" => $this->input->post("propinsi_ayah"),
						"kewarganegaraan_ayah" => $this->input->post("kewarganegaraan_ayah"),
						"nik_saksi1" => $this->input->post("nik_saksi1"),
						"nama_saksi1" => $this->input->post("nama_saksi1"),
						"nik_saksi2" => $this->input->post("nik_saksi2"),
						"nama_saksi2" => $this->input->post("nama_saksi2"),
						"kode_wilayah" => $this->input->post("kode_wilayah"),
						"tempat_lahir_ibu" => $this->input->post("tempat_lahir_ibu"),
						"tempat_lahir_ayah" => $this->input->post("tempat_lahir_ayah"),
						"agama_ibu" => $this->input->post("agama_ibu"),
						"agama_ayah" => $this->input->post("agama_ayah"),
						"tanggal_lahir_anak" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_anak"))),
						);
		$this->m_index->edit_kelahiran($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_kelahiran/kelahiran'));
	}

	public function proses_hapus_kelahiran($id) {
		$this->m_index->hapus_kelahiran($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kelahiran/kelahiran'));
	}


//EXPORT TO WORD
	public function kelahiran_word($id) {
		$data['tampil'] = $this->m_index->cetak_kelahiran($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "kelahiran/kelahiran_word.php";
		$this->load->view('template/word',$data);
	}

	public function kelahiran_word1($id) {
		$data['tampil'] = $this->m_index->cetak_kelahiran($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "kelahiran/kelahiran_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF KELAHIRAN
	public function kelahiran_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kelahiran($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kelahiran/cetak_data_kelahiran', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_kelahiran.pdf', 'P');
	}

	public function kelahiran_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kelahiran($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('kelahiran/cetak_data_kelahiran1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_kelahiran.pdf', 'P');
	}

//CETAK PDF ARSIP
	public function arsip_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_data_arsip($id)->row();
		$this->load->view('kelahiran/cetak_data_arsip', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('arsip.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_kelahiran() {
		$this->m_index->cekLogin();
		$data['isi'] = "kelahiran/rekap_kelahiran.php";
		$this->load->view('template/utama', $data);
	}

	public function kelahiran_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['kelahiran'] = $this->m_index->rekap_kelahiran($T1,$T2);
		$this->load->view('kelahiran/rekap_data_kelahiran', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kelahiran.pdf', 'P');
	}


}
?>