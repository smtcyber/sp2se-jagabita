<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_belum_bekerja extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT BELUM MENIKAH / JANDA DUDA KIOS -------------------------------------------------------------------------------------------
	function panel_belum_bekerja() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_belum_bekerja.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_belum_bekerja() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_belum_bekerja($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$belum_bekerjaId = $this->m_index->tambah_belum_bekerja($data_nik);
			$data =  array ("surat" => "Surat Keterangan Belum Bekerja",
							"link" => "c_belum_bekerja/belum_bekerja",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_belum_bekerja/cetak_data/'. $belum_bekerjaId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_belum_bekerja($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_belum_bekerja/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_belum_bekerja($id) {
		$data['data'] = $this->m_index->cetak_data_belum_bekerja($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_belum_bekerja/cetak_belum_bekerja',$data);
	}

	function cetak_data_belum_bekerja1($id) {
		$data['data'] = $this->m_index->cetak_data_belum_bekerja1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_belum_bekerja/cetak_belum_bekerja1',$data);
	}

//SURAT KETERANGAN BELUM KERJA ADMIN ----------------------------------------------------------
	public function belum_bekerja() {
	$this->m_index->cekLogin();
	$data['belum_bekerja']=$this->m_index->get_belum_bekerja();
	foreach($this->m_index->statistik_belum_bekerja()->result_array() as $row)
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
	$data['isi'] = "belum_bekerja/belum_bekerja.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_belum_bekerja(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "belum_bekerja/tambah_belum_bekerja.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_belum_bekerja(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_belum_bekerja($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_belum_bekerja/belum_bekerja'));
	}

	public function edit_belum_bekerja($id){
		$this->m_index->cekLogin();
		$data['edit_belum_bekerja'] = $this->m_index->getEdit_belum_bekerja($id);
		$data['isi'] = "belum_bekerja/edit_belum_bekerja.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_belum_bekerja(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_belum_bekerja($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_belum_bekerja/belum_bekerja'));
	}

	public function proses_hapus_belum_bekerja($id) {
		$this->m_index->hapus_belum_bekerja($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_belum_bekerja/belum_bekerja'));
	}



//CETAK PDF SURAT KETERANGAN BELUM KERJA
	public function belum_bekerja_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_belum_bekerja($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('belum_bekerja/cetak_data_belum_bekerja', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_bekerja.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN BELUM KERJA 1
	public function belum_bekerja_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_belum_bekerja1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('belum_bekerja/cetak_data_belum_bekerja1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_bekerja.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_belum_bekerja() {
		$this->m_index->cekLogin();
		$data['isi'] = "belum_bekerja/rekap_belum_bekerja.php";
		$this->load->view('template/utama', $data);
	}

	public function belum_bekerja_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['belum_bekerja'] = $this->m_index->rekap_belum_bekerja($T1,$T2);
		$this->load->view('belum_bekerja/rekap_data_belum_bekerja', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('belum_bekerja.pdf', 'P');
	}

}
?>