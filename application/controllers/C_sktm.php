<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_sktm extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT SKTM KIOS -------------------------------------------------------------------------------------------
	function panel_sktm() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_sktm.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_sktm() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_sktm($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_lahir_anak" => date('Y-m-d'),
					"tgl_lahir_ibu" => date('Y-m-d'),
					"tgl_lahir_ayah" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$sktmId = $this->m_index->tambah_sktm($data_nik);
			$data =  array ("surat" => "Surat Keterangan Tidak Mampu",
							"link" => "c_sktm/sktm",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $sktmId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//SURAT SKTM ADMIN -------------------------------------------------------------------
		public function sktm() {
		$this->m_index->cekLogin();
		$data['sktm']=$this->m_index->get_sktm();
		foreach($this->m_index->statistik_sktm()->result_array() as $row)
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
		$data['isi'] = "sktm/sktm.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_sktm(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "sktm/tambah_sktm.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_sktm(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan_umum" => $this->input->post("keperluan_umum"),

						"keperluan" => $this->input->post("keperluan"),

						"perlu" => $this->input->post("perlu"),
						"nama_anak" => $this->input->post("nama_anak"),
						"no_ktp_anak" => $this->input->post("no_ktp_anak"),
						"jenis_kelamin_anak" => $this->input->post("jenis_kelamin_anak"),
						"agama_anak" => $this->input->post("agama_anak"),
						"tempat_lahir_anak" => $this->input->post("tempat_lahir_anak"),
						"tgl_lahir_anak" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_anak"))),
						"pekerjaan_anak" => $this->input->post("pekerjaan_anak"),
						"alamat_anak" => $this->input->post("alamat_anak"),
						"rt_anak" => $this->input->post("rt_anak"),
						"rw_anak" => $this->input->post("rw_anak"),
						"anak_ke" => $this->input->post("anak_ke"),

						"no_ktp_ibu" => $this->input->post("no_ktp_ibu"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"tempat_lahir_ibu" => $this->input->post("tempat_lahir_ibu"),
						"tgl_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ibu"))),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"rt_ibu" => $this->input->post("rt_ibu"),
						"rw_ibu" => $this->input->post("rw_ibu"),

						"no_ktp_ayah" => $this->input->post("no_ktp_ayah"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"tempat_lahir_ayah" => $this->input->post("tempat_lahir_ayah"),
						"tgl_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ayah"))),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"rt_ayah" => $this->input->post("rt_ayah"),
						"rw_ayah" => $this->input->post("rw_ayah"),

						"sekolah" => $this->input->post("sekolah"),
						"kelas" => $this->input->post("kelas"),
						"jurusan" => $this->input->post("jurusan"),
						"alamat_sekolah" => $this->input->post("alamat_sekolah"),
						"nisn" => $this->input->post("nisn"),

						"rumah_sakit" => $this->input->post("rumah_sakit"),
						"keperluan_sehat" => $this->input->post("keperluan_sehat"),
						
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_sktm($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_sktm/sktm'));
	}

	public function edit_sktm($id){
		$this->m_index->cekLogin();
		$data['edit_sktm'] = $this->m_index->getEdit_sktm($id);
		$data['isi'] = "sktm/edit_sktm.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_sktm(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan_umum" => $this->input->post("keperluan_umum"),

						"keperluan" => $this->input->post("keperluan"),

						"perlu" => $this->input->post("perlu"),
						"nama_anak" => $this->input->post("nama_anak"),
						"no_ktp_anak" => $this->input->post("no_ktp_anak"),
						"jenis_kelamin_anak" => $this->input->post("jenis_kelamin_anak"),
						"agama_anak" => $this->input->post("agama_anak"),
						"tempat_lahir_anak" => $this->input->post("tempat_lahir_anak"),
						"tgl_lahir_anak" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_anak"))),
						"pekerjaan_anak" => $this->input->post("pekerjaan_anak"),
						"alamat_anak" => $this->input->post("alamat_anak"),
						"rt_anak" => $this->input->post("rt_anak"),
						"rw_anak" => $this->input->post("rw_anak"),
						"anak_ke" => $this->input->post("anak_ke"),

						"no_ktp_ibu" => $this->input->post("no_ktp_ibu"),
						"nama_ibu" => $this->input->post("nama_ibu"),
						"tempat_lahir_ibu" => $this->input->post("tempat_lahir_ibu"),
						"tgl_lahir_ibu" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ibu"))),
						"pekerjaan_ibu" => $this->input->post("pekerjaan_ibu"),
						"alamat_ibu" => $this->input->post("alamat_ibu"),
						"rt_ibu" => $this->input->post("rt_ibu"),
						"rw_ibu" => $this->input->post("rw_ibu"),

						"no_ktp_ayah" => $this->input->post("no_ktp_ayah"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"tempat_lahir_ayah" => $this->input->post("tempat_lahir_ayah"),
						"tgl_lahir_ayah" => date("Y-m-d",strtotime($this->input->post("tgl_lahir_ayah"))),
						"pekerjaan_ayah" => $this->input->post("pekerjaan_ayah"),
						"alamat_ayah" => $this->input->post("alamat_ayah"),
						"rt_ayah" => $this->input->post("rt_ayah"),
						"rw_ayah" => $this->input->post("rw_ayah"),

						"sekolah" => $this->input->post("sekolah"),
						"kelas" => $this->input->post("kelas"),
						"jurusan" => $this->input->post("jurusan"),
						"alamat_sekolah" => $this->input->post("alamat_sekolah"),
						"nisn" => $this->input->post("nisn"),

						"rumah_sakit" => $this->input->post("rumah_sakit"),
						"keperluan_sehat" => $this->input->post("keperluan_sehat"),
						
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->edit_sktm($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_sktm/sktm'));
	}

	public function proses_hapus_sktm($id) {
		$this->m_index->hapus_sktm($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_sktm/sktm'));
	}



/// SURAT F1
	public function sktm1() {
	$data['sktm1']=$this->m_index->get_sktm1();
	$data['isi'] = "sktm/tambah_sktm1.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_sktm1($id){
		$data['sktm1']=$this->m_index->get_sktm1($id);
		$data['sktm'] = $this->m_index->getEdit_sktm($id)->row();
		$data['isi'] = "sktm/tambah_sktm1.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_sktm1(){
		$F1 = $this ->input->post("P1");
		$data =  array ("id_sktm" => $F1,
						"nama_1" => $this->input->post("nama_1"),
						"no_ktp_1" => $this->input->post("no_ktp_1"),
						"no_kk_1" => $this->input->post("no_kk_1"),
						"h_keluarga" => $this->input->post("h_keluarga"),
						"status_1" => $this->input->post("status_1"),
						"tempat_lahir_1" => $this->input->post("tempat_lahir_1"),
						"tanggal_lahir_1" => date("Y-m-d",strtotime($this->input->post("tanggal_lahir_1"))),
						"kelamin_1" => $this->input->post("kelamin_1"),
						"rt_1" => $this->input->post("rt_1"),
						"rw_1" => $this->input->post("rw_1"),
						"kecamatan_1" => $this->input->post("kecamatan_1"),
						"kelurahan_1" => $this->input->post("kelurahan_1"),
						);
		$this->m_index->tambah_sktm1($data);
		redirect(site_url('c_sktm/tambah_sktm1/'.$F1));
	}

	public function proses_hapus_sktm1($id,$F1) {
		$this->m_index->hapus_sktm1($id);
		redirect(site_url('c_sktm/tambah_sktm1/'.$F1));
	}


//EXPORT TO WORD
	public function sktm_word($id) {
		$data['tampil'] = $this->m_index->cetak_sktm($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "sktm/sktm_word.php";
		$this->load->view('template/word',$data);
	}

	public function sktm_word1($id) {
		$data['tampil'] = $this->m_index->cetak_sktm1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "sktm/sktm_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF KETERANGAN TIDAK MAMPU
	public function sktm_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_sktm($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('sktm/cetak_data_sktm', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_sktm.pdf', 'P');
	}

	public function sktm_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_sktm($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('sktm/cetak_data_sktm1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_sktm.pdf', 'P');
	}


//EXPORT TO WORD
	public function sekolah_word($id) {
		$data['tampil'] = $this->m_index->cetak_sekolah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "sktm/sekolah_word.php";
		$this->load->view('template/word',$data);
	}

	public function sekolah_word1($id) {
		$data['tampil'] = $this->m_index->cetak_sekolah1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "sktm/sekolah_word1.php";
		$this->load->view('template/word',$data);
	}

//CETAK PDF SEKOLAH
	public function sekolah_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_sekolah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('sktm/cetak_data_sekolah', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('sekolah_cetak.pdf', 'P');
	}

	public function sekolah_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_sekolah($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('sktm/cetak_data_sekolah1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('sekolah_cetak.pdf', 'P');
	}


//EXPORT TO WORD
	public function kesehatan_word($id) {
		$data['tampil'] = $this->m_index->cetak_kesehatan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "sktm/kesehatan_word.php";
		$this->load->view('template/word',$data);
	}

	public function kesehatan_word1($id) {
		$data['tampil'] = $this->m_index->cetak_kesehatan1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "sktm/kesehatan_word1.php";
		$this->load->view('template/word',$data);
	}

//CETAK PDF KESEHATAN
	public function kesehatan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kesehatan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('sktm/cetak_data_kesehatan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kesehatan_cetak.pdf', 'P');
	}

	public function kesehatan_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kesehatan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('sktm/cetak_data_kesehatan1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kesehatan_cetak.pdf', 'P');
	}

//EXPORT TO WORD
public function skkm_word($id) {
	$data['tampil'] = $this->m_index->cetak_skkm($id)->row();
	$data['header'] = $this->m_index->tampilHeader()->row();
	$data['kepdes'] = $this->m_index->tampilKepdes()->row();
	$data['isi'] = "sktm/skkm_word.php";
	$this->load->view('template/word',$data);
}

public function skkm_word1($id) {
	$data['tampil'] = $this->m_index->cetak_skkm1($id)->row();
	$data['header'] = $this->m_index->tampilHeader()->row();
	$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
	$data['isi'] = "sktm/skkm_word1.php";
	$this->load->view('template/word',$data);
}

//CETAK PDF skkm
public function skkm_cetak($id) {
	ob_start();
	$data['tampil'] = $this->m_index->cetak_skkm($id)->row();
	$data['header'] = $this->m_index->tampilHeader()->row();
	$data['kepdes'] = $this->m_index->tampilKepdes()->row();
	$this->load->view('sktm/cetak_data_skkm', $data);
	$html = ob_get_contents();
	ob_clean();
	//ob_end_clean();

	require_once('./assets/html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
	$pdf->WriteHTML($html);
	$pdf->Output('skkm_cetak.pdf', 'P');
}

public function skkm_cetak1($id) {
	ob_start();
	$data['tampil'] = $this->m_index->cetak_skkm($id)->row();
	$data['header'] = $this->m_index->tampilHeader()->row();
	$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
	$this->load->view('sktm/cetak_data_skkm1', $data);
	$html = ob_get_contents();
	ob_clean();
	//ob_end_clean();

	require_once('./assets/html2pdf/html2pdf.class.php');
	$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
	$pdf->WriteHTML($html);
	$pdf->Output('skkm_cetak.pdf', 'P');
}
	
//CETAK PDF F1
	public function F1_cetak($id) {
		ob_start();
		$data['sktm1'] = $this->m_index->cetak_F1($id);
		$data['tampil'] = $this->m_index->cetak_kesehatan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('sktm/cetak_data_F1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('cetak_F1.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_sktm() {
		$this->m_index->cekLogin();
		$data['isi'] = "sktm/rekap_sktm.php";
		$this->load->view('template/utama', $data);
	}

	public function sktm_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['sktm'] = $this->m_index->rekap_sktm($T1,$T2);
		$this->load->view('sktm/rekap_data_sktm', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('sktm.pdf', 'P');
	}

}
?>