<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_ramai extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN IZIN RAMAI -------------------------------------------------------------------------------------------
	function panel_ramai() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_ramai.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_ramai() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_ramai($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					"waktu_mulai" => date('Y-m-d'),
					"waktu_selesai" => date('Y-m-d'),
					"tanggal_pengantar" => date('Y-m-d'),
					);
			}
			$ramaiId = $this->m_index->tambah_ramai($data_nik);
			$data =  array ("surat" => "Surat Keterangan Izin Ramai",
							"link" => "c_ramai/ramai",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $ramaiId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//SURAT KETERANGAN RAMAI ADMIN ---------------------------------------------------------------------------------
	public function ramai() {
	$this->m_index->cekLogin();
	$data['ramai']=$this->m_index->get_ramai();
	foreach($this->m_index->statistik_ramai()->result_array() as $row)
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
	$data['isi'] = "ramai/ramai.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_ramai(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "ramai/tambah_ramai.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_ramai(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"maksud" => $this->input->post("maksud"),
						"tmpt_pelaksanaan" => $this->input->post("tmpt_pelaksanaan"),
						"hari_mulai" => $this->input->post("hari_mulai"),
						"hari_selesai" => $this->input->post("hari_selesai"),
						"waktu_mulai" => date("Y-m-d",strtotime($this->input->post("waktu_mulai"))),
						"waktu_selesai" => date("Y-m-d",strtotime($this->input->post("waktu_selesai"))),
						"jam_mulai" => $this->input->post("jam_mulai"),
						"jam_selesai" => $this->input->post("jam_selesai"),
						"jmlh_undangan" => $this->input->post("jmlh_undangan"),
						"jenis_hiburan" => $this->input->post("jenis_hiburan"),
						"no_pengantar" => $this->input->post("no_pengantar"),
						"tanggal_pengantar" => date("Y-m-d",strtotime($this->input->post("tanggal_pengantar"))),
						"tgl_surat" => date('Y-m-d'),
						"no_hp" => $this->input->post("no_hp"),
						);
		$this->m_index->tambah_ramai($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_ramai/ramai'));
	}

	public function edit_ramai($id){
		$this->m_index->cekLogin();
		$data['edit_ramai'] = $this->m_index->getEdit_ramai($id);
		$data['isi'] = "ramai/edit_ramai.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_ramai(){
		$id = $this->input->post("H1");
		$data = array(
			"id_penduduk" => $this->input->post("R1"),
			"maksud" => $this->input->post("maksud"),
			"hari_mulai" => $this->input->post("hari_mulai"), // Ini akan diisi nanti
			"hari_selesai" => $this->input->post("hari_selesai"), // Juga akan diisi nanti
			"waktu_mulai" => date("Y-m-d", strtotime($this->input->post("waktu_mulai"))),
			"waktu_selesai" => date("Y-m-d", strtotime($this->input->post("waktu_selesai"))),
			"jam_mulai" => $this->input->post("jam_mulai"),
			"jam_selesai" => $this->input->post("jam_selesai"),
			"jenis_hiburan" => $this->input->post("jenis_hiburan"),
			"tmpt_pelaksanaan" => $this->input->post("tmpt_pelaksanaan"),
			"dusun1" => $this->input->post("dusun1"),
			"rt1" => $this->input->post("rt1"),
			"rw1" => $this->input->post("rw1")
		);
	
		// Mengubah format "Y-m-d" menjadi nama hari dalam bahasa Indonesia
		$hari_mulai = date("l", strtotime($data["waktu_mulai"]));
		$hari_selesai = date("l", strtotime($data["waktu_selesai"]));
	
		// Terjemahkan nama hari dalam bahasa Inggris ke bahasa Indonesia
		$hari_indonesia = array(
			"Monday" => "Senin",
			"Tuesday" => "Selasa",
			"Wednesday" => "Rabu",
			"Thursday" => "Kamis",
			"Friday" => "Jumat",
			"Saturday" => "Sabtu",
			"Sunday" => "Minggu"
		);
	
		// Isi data hari_mulai dan hari_selesai dengan nama hari dalam bahasa Indonesia
		$data["hari_mulai"] = $hari_indonesia[$hari_mulai];
		$data["hari_selesai"] = $hari_indonesia[$hari_selesai];
	
		// Lanjutkan dengan operasi lain yang Anda perlukan
		// ...
	
		$this->m_index->edit_ramai($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_ramai/ramai'));
	}

	public function proses_hapus_ramai($id) {
		$this->m_index->hapus_ramai($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_ramai/ramai'));
	}


//EXPORT TO WORD
	public function ramai_word($id) {
		$data['tampil'] = $this->m_index->cetak_ramai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "ramai/ramai_word.php";
		$this->load->view('template/word',$data);
	}

	public function ramai_word1($id) {
		$data['tampil'] = $this->m_index->cetak_ramai1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "ramai/ramai_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN RAMAI
	public function ramai_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_ramai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ramai/cetak_data_ramai', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ramai.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN RAMAI
	public function ramai_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_ramai1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('ramai/cetak_data_ramai1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ramai.pdf', 'P');
	}


//EXPORT TO WORD
	public function pernyataan_ramai_word($id) {
		$data['tampil'] = $this->m_index->cetak_ramai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "ramai/pernyataan_ramai_word.php";
		$this->load->view('template/word',$data);
	}

	public function pernyataan_ramai_word1($id) {
		$data['tampil'] = $this->m_index->cetak_ramai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "ramai/pernyataan_ramai_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT PERNYATAAN RAMAI
	public function pernyataan_ramai_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pernyataan_ramai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ramai/cetak_data_pernyataan_ramai', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan_ramai.pdf', 'P');
	}

	public function pernyataan_ramai_cetak2($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pernyataan_ramai($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ramai/cetak_data_pernyataan_ramai2', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan_ramai.pdf', 'P');
	}


//CETAK PDF SURAT PERNYATAAN RAMAI
	public function pernyataan_ramai_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pernyataan_ramai1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('ramai/cetak_data_pernyataan_ramai1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan_ramai.pdf', 'P');
	}

	public function pernyataan_ramai_cetak21($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pernyataan_ramai1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('ramai/cetak_data_pernyataan_ramai21', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pernyataan_ramai.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_ramai() {
		$this->m_index->cekLogin();
		$data['isi'] = "ramai/rekap_ramai.php";
		$this->load->view('template/utama', $data);
	}

	public function ramai_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['ramai'] = $this->m_index->rekap_ramai($T1,$T2);
		$this->load->view('ramai/rekap_data_ramai', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ramai.pdf', 'P');
	}

}
?>